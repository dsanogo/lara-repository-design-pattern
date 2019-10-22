<?php

namespace App\Http\Controllers;

use App\Repositories\Posts\PostRepositoryInterface;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    private $post;

    /**
     * PostController constructor.
     *
     * @param PostRepositoryInterface $post
     */
    public function __construct(PostRepositoryInterface $post)
    {
        $this->post = $post;
    }

    /**
     * List all posts.
     *
     * @return mixed
     */

     public function index()
     {
         $data = [
             'posts' => $this->post->all()
         ];

         return $data;
     }




}
