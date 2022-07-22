<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\api\UserStoreRequest;
use App\Http\Requests\api\UserUpdateRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        return UserResource::collection(User::all());
    }

    public function store(UserStoreRequest $user)
    {
        $user = $user->validated();
        $user['password'] = Hash::make($user['password']);
        return new UserResource(User::create($user));
    }

    public function show($id)
    {
        return new UserResource(User::findOrFail($id));
    }

    public function update(UserUpdateRequest $request, User $user)
    {
        $user->update($request->validated());
        return new UserResource($user);
    }

    public function destroy(User $user)
    {
        $user->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
