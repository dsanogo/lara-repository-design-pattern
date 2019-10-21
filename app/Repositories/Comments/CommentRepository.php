<?php

namespace App\Repositories\Comments;

use App\Models\Comment;

class CommentRepository implements CommentRepositoryInterface {

     /**
     * Get a comment by ID
     * @param int
     */
    public function get($comment_id)
    {
        return Comment::findOrFail($comment_id);
    }

    /**
     * Get all comments
     * @return mixed
     */
    public function all()
    {
        return Comment::all();
    }

    /**
     * Delete a comment by ID
     * @param int
     */
    public function delete($comment_id)
    {
        Comment::destroy($comment_id);
    }
}