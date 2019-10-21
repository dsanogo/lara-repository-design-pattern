<?php

namespace App\Http\Controllers;

use App\Repositories\Posts\PostRepository;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    protected $post;

    /**
     * PostController constructor.
     *
     * @param PostRepositoryInterface $post
     */
    public function __construct(PostRepository $post) 
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
