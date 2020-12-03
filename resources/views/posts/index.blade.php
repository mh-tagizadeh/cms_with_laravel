@extends('layouts.app')


@section('content')
    <div class="d-flex justify-content-end mb-2">
    <a href="{{ route('posts.create') }}" class="btn btn-success">Add Post</a>
    </div>


    <div class="card card-default">
        <div class="card-header">
            Posts
        </div>
        <div class="card-body">

            @if($posts->count() > 0)

            <table class="table">
                <thead>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>
                                <img src="{{ asset($post->image) }}" width="60px" height="60px" alt="">
                            </td>
                            <td>
                                {{ $post->title }}
                            </td>
                            <td>
                                <a href="{{ route('categories.edit', $post->category->id) }}">
                                    {{ $post->category->name }}
                                </a>
                            </td>
                            @if ($post->trashed())
                                <td>
                                    <form action="{{ route('restore-posts', $post->id) }}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="btn btn-info btn-sm">Restore</button>
                                    </form>
                                </td>
                            @else
                                <td>
                                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-info btn-sm">Edit</a>
                                </td>
                            @endif
                            <td>
                                <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        {{ $post->trashed() ? 'Delete' : 'Trashed' }}
                                    </button>
                                </form>
                            </td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
            @else
            <h3 class="text-center">
                No Posts yet.
            </h3>

            @endif
        </div>
    </div>



@endsection