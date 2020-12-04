<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Users\UpdateProfileRequest;
use App\User;

class UsersController extends Controller
{
    //
    public function index()
    {
        return view('users.index')->with('users', User::all());
    }


    public function edit()
    {
        return view('users.edit')->with('user', auth()->user());
    }

    public function update(UpdateProfileRequest $request)
    {
        $user = auth()->user();

        $user->update([
            'name' => $request->name, 
            'about' => $request->about, 
        ]);

        session()->flash('success', 'User updated successfuly.');

        return redirect()->back();
    }

    public function makeAdmin(User $user)
    {
        $user->role = 'admin';

        $user->save();

        session()->flash('success', 'User made admin successfuly.');

        return redirect(route('users.index'));
    }
}
