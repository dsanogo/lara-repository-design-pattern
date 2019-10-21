<?php

namespace App\Repositories\Comments;

interface CommentRepositoryInterface
{
    /**
     * Get a comment by ID
     * @param int
     */
    public function get($comment_id);

    /**
     * Get all comments
     * @return mixed
     */
    public function all();

    /**
     * Delete a comment by ID
     * @param int
     */
    public function delete($comment_id);

}