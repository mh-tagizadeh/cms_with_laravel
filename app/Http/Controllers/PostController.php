<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\Post\CreatePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Post;
use App\Tag;
use App\Category;

class PostController extends Controller
{


    public function __construct() 
    {
         
        $this->middleware('verifyCategoriesCount')->only(['create', 'store']);
    }







    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts.index')->with('posts', Post::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create')->with('categories', Category::all())->with('tags', Tag::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostRequest $request)
    {

        // upload the image storage
        $image = $request->image->store('post');

        
        // create the post 
        $post = Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->content,
            'published_at' => $request->published_at,
            'image' => $image,
            'category_id' => $request->category,
        ]);


        if ($request->tags) {
            $post->tags()->sync($request->tags);
        }
        // flash session
        session()->flash('success', 'Post created successfully.');

        //return redirect 
        return redirect(route('posts.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.create')->with('post', $post)->with('categories', Category::all())->with('tags', Tag::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request,Post $post)
    {
        $data = $request->only([ 'title', 'description', 'published_at', 'content' ]);

        // check if new image 
        if ($request->hasFile('image')) {
            // upload it 
            $image = $request->image->store('post');
            // delete old image
            $post->deleteImage();

            $data['image'] = $image;
        }

        // update attribute 
        $post->update($data);

        // flash message
        session()->flash('success', 'Post updated successfuly.');

        //redirect user 
        return redirect(route('posts.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $post = Post::withTrashed()->where('id', $id)->firstOrFail();

        if ($post->trashed()) {
            $post->deleteImage();
            $post->forceDelete();
        } else {
            $post->delete();
        }

        session()->flash('success', 'Post deleted successfully.');

        return redirect(route('posts.index'));
    }

    /**
     *
     * Display a list of all trashed posts
     *
     * @return \Illuminate\Http\Response
     */
    public function trashed()
    {
        $trashed = Post::onlyTrashed()->get();

        return view('posts.index')->with('posts',$trashed);
    }
    

    public function restore($id)
    {
        $post = Post::withTrashed()->where('id', $id)->firstOrFail();

        $post->restore();

        session()->flash('success', 'Post restore successfully.');

        return redirect()->back();
    }
    


}
