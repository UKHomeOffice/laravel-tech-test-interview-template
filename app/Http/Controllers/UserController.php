<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $user;

    /**
     * Constructor
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * GET (all users)
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $users = $this->user->getAllUsers();
        return response()->json($users, 200);
    }

    /**
     * POST
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $user = $this->user->createUser($request);
        return response()->json($user, 201);
    }

    /**
     * GET (single user)
     * @param string $id
     *
     * @return JsonResponse
     */
    public function show(string $id): JsonResponse
    {
        $user = $this->user->getUserById($id);
        return response()->json($user, 200);
    }

    /**
     * PUT
     * @param Request $request
     * @param string $id
     *
     * @return JsonResponse
     */
    public function update(Request $request, string $id): JsonResponse
    {
        $user = $this->user->updateUser($request, $id);
        return response()->json($user, 200);
    }

    /**
     * DELETE
     * @param string $id
     *
     * @return JsonResponse
     */
    public function destroy(string $id): JsonResponse
    {
        $this->user->deleteUser($id);
        return response()->json(null, 204);
    }

}
