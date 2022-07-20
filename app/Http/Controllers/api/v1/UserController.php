<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\api\UserStoreRequest;
use App\Http\Requests\api\UserUpdateRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Response;

class UserController extends Controller
{

    public function index()
    {
        return UserResource::collection(User::all());
    }

    public function store(UserStoreRequest $user)
    {
        $user = User::create($user->validated());
        return new UserResource($user);
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
