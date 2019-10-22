<?php

namespace App\Http\Controllers;

use App\Repositories\Comments\CommentRepositoryInterface;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    protected $comment;

    public function __construct(CommentRepositoryInterface $comment) {
        $this->comment = $comment;
    }

    public function index()
    {
        return [
            'comments' => $this->comment->all()
            ];
    }
}
