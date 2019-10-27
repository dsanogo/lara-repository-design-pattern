<?php

namespace App\Http\Controllers;

use App\Repositories\Posts\PostRepositoryInterface;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private $post;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(PostRepositoryInterface $post)
    {
        $this->middleware('auth');
        $this->post = $post;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard', [
            'posts' => $this->post->getUserPosts()
        ]);
    }
}
