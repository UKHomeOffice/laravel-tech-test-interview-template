<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * GET (all users)
     */
    public function index(): JsonResponse
    {
        $users = $this->user->getAllUsers();
        return response()->json($users, 200);
    }

    /**
     * POST
     */
    public function store(Request $request): JsonResponse
    {
        $user = $this->user->createUser($request);
        return response()->json($user, 201);
    }

    /**
     * GET (specific user)
     */
    public function show(string $id): JsonResponse
    {
        $user = $this->user->getUserById($id);
        return response()->json($user, 200);
    }

    /**
     * PUT
     */
    public function update(Request $request, string $id): JsonResponse
    {
        $user = $this->user->updateUser($request, $id);
        return response()->json($user, 200);
    }

    /**
     * DELETE
     */
    public function destroy(string $id): JsonResponse
    {
        $this->user->deleteUser($id);
        return response()->json(null, 204);
    }

}
