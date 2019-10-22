<?php

namespace App\Repositories\Users;

interface UserRepositoryInterface
{
    /**
     * Return all Users
     * @return mixed
     */
    public function all();

    /**
     * Find a user by ID
     * @param int $user_id
     */
    public function getById($user_id);

    /**
     * Find users by Name
     * @param string $name
     * @return mixed
     */
    public function getByName($name);
}
