<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\api\RoleStoreRequest;
use App\Http\Resources\RoleResource;
use App\Models\Role;
use Exception;
use Illuminate\Http\Response;

class RoleController extends Controller
{

    public function index()
    {
        return RoleResource::collection(Role::all());
    }


    public function store(RoleStoreRequest $request)
    {
        try {
            $role = Role::create($request->validated());
            return new RoleResource($role);
        } catch (Exception $e) {
            return abort(404);
        }

    }


    public function show($id)
    {
        return new RoleResource(Role::findOrFail($id));
    }


    public function update(RoleStoreRequest $request, Role $role)
    {
//        if (!Role::where('title', $request->title)->count()) {
//            $role->update($request->validated());
//            return new RoleResource($role);
//        }else{
//            return abort(404);
//        }
        try {
            $role->update($request->validated());
            return new RoleResource($role);
        } catch (Exception $e) {
            return abort(404);
        }

    }

    public function destroy(Role $role)
    {
        $role->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
