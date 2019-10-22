<?php

namespace App\Repositories;

use App\Repositories\Comments\CommentRepository;
use App\Repositories\Comments\CommentRepositoryInterface;
use App\Repositories\Posts\PostRepository;
use App\Repositories\Posts\PostRepositoryInterface;
use App\Repositories\Users\UserRepository;
use App\Repositories\Users\UserRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class BackendServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Register Post Repository
        $this->app->bind(PostRepositoryInterface::class, PostRepository::class);

        // Register Comment Repository
        $this->app->bind(
            CommentRepositoryInterface::class,
            CommentRepository::class
        );

        // Register User Repository
        $this->app->bind(
            UserRepositoryInterface::class,
            UserRepository::class
        );
    }
}
