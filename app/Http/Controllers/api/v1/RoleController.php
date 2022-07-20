<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\api\RoleStoreRequest;
use App\Http\Resources\RoleResource;
use App\Models\Role;
use Illuminate\Http\Response;

class RoleController extends Controller
{

    public function index()
    {
        return RoleResource::collection(Role::all());
    }

    public function store(RoleStoreRequest $request)
    {
        return new RoleResource(Role::create($request->validated()));
    }

    public function show($id)
    {
        return new RoleResource(Role::findOrFail($id));
    }

    public function update(RoleStoreRequest $request, Role $role)
    {
        $role->update($request->validated());
        return new RoleResource($role);
    }

    public function destroy(Role $role)
    {
        $role->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
