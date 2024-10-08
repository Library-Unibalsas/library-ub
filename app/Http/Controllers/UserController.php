<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function store(UserRequest $request)
    {
        $user = User::create($request->validated());
        return response()->json($user, 201);
    }

    public function show(User $user)
    {
        return $user;
    }

    public function update(UserRequest $request, User $user)
    {
        $user->update($request->validated());
        return response()->json($user, 200);
    }

    public function destroy(User $user)
    {
        $user->delete();
        return response()->json(null, 204);
    }
}
