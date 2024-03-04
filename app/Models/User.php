<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Model
{
    use HasFactory;
    // User will always contain a 'books' object, though it will
    // be null by default.
    public function books(): HasMany
    {
        return $this->hasMany(Book::class)->withDefault();
    }

    public function getAllUsers(): Collection
    {
        return $this->select(['id', 'name'])->get();
    }

    public function createUser($request): User
    {
        $this->name = $request->input('name');
        $this->save();

        return $this;
    }

    public function getUserById($id): User
    {
        return $this->select(['id', 'name'])->findOrNew($id);
    }

    public function updateUser($request, $id): User
    {
        $user = $this->find($id);

        $user->name = $request->input('name');
        $user->save();

        return $user;
    }

    public function deleteUser($id): void
    {
        $user = $this->find($id);
        $user->delete();
    }
}
