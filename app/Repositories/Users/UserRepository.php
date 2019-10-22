<?php

namespace App\Repositories\Users;

use App\User;

class UserRepository implements UserRepositoryInterface
{

    /**
     * Return all usrers
     * @return mixed
     */
    public function all()
    {
        return User::all();
    }

    /**
     * Get a user by ID
     * @param int $user_id
     */
    public function getById($user_id)
    {
        return User::findOrFail($user_id);
    }

    /**
     * Find users by Name
     * @param string $name
     * @return mixed
     */
    public function getByName($name)
    {
        return User::where('name', 'LIKE', '%'.$name.'%')->orderBy('Name')->get();
    }
}
