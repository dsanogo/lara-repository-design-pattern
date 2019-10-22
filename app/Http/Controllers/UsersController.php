<?php

namespace App\Http\Controllers;

use App\Repositories\Users\UserRepositoryInterface;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    private $user;

    /**
     * Class constructor
     *
     * @param UserRepositoryInterface $user
     */
    public function __construct(UserRepositoryInterface $user) {
        $this->user = $user;
    }

    /**
     * get all users
     *
     * @return users
     */
    public function index()
    {
        return $this->user->all();
    }

    /**
     * Show a single user
     *
     * @param int $user_id
     * @return user
     */
    public function show($user_id)
    {
        return $this->user->getById($user_id);
    }

    /**
     * get filtered user by name
     *
     * @param string $name
     * @return users
     */
    public function getUsersByName($name)
    {
        return $this->user->getByName($name);
    }
}
