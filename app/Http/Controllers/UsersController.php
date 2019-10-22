<?php

namespace App\Http\Controllers;

use App\Repositories\Users\UserRepositoryInterface;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    private $user;

    public function __construct(UserRepositoryInterface $user) {
        $this->user = $user;
    }

    public function index()
    {
        return $this->user->all();
    }

    public function show($user_id)
    {
        return $this->user->getById($user_id);
    }

    public function getUsersByName($name)
    {
        return $this->user->getByName($name);
    }
}
