<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model
{
    /**
     * Books (one to many relationship).
     * A User will always contain a 'books' object, though it will
     * be null by default.
     * @return HasMany
     */
    public function books(): HasMany
    {
        return $this->hasMany(Book::class)->withDefault();
    }

    /**
     * Get all users
     * @return Collection
     */
    public function getAllUsers(): Collection
    {
        return $this->select(['id', 'name'])->get();
    }

    /**
     * Create a user
     * @param mixed $request
     * @return User
     */
    public function createUser($request): User
    {
        $this->name = $request->input('name');
        $this->save();

        return $this;
    }

    /**
     * Get user by id
     * @param mixed $id
     * @return User
     */
    public function getUserById($id): User
    {
        return $this->select(['id', 'name'])->findOrNew($id);
    }

    /**
     * Update an existing user by id
     * @param mixed $request
     * @param mixed $id
     * @return User
     */
    public function updateUser($request, $id): User
    {
        $user = $this->find($id);

        $user->name = $request->input('name');
        $user->save();

        return $user;
    }

    /**
     * Delete user by id
     * @param mixed $id
     * @return void
     */
    public function deleteUser($id): void
    {
        $user = $this->find($id);
        $user->delete();
    }
}
