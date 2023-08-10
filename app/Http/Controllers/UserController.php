<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : Collection
    {
        $users = User::all() -> paginate(10);
        return $users;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);
        $user -> first_name = $request -> input('first_name');
        $user -> last_name = $request -> input('last_name');
        $user -> email = $request -> input('email');
        $user -> password = $request -> input('password');
        $user -> update();
        return redirect('/') -> with('status', 'Profile updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::truncate($id);
        return redirect('/') -> with('status', 'User delete successfully');
    }

}
