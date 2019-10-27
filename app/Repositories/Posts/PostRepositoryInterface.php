<?php

namespace App\Repositories\Posts;

interface PostRepositoryInterface
{
    /**
     * Get a Post by id
     * @param  int
     */
    public function get($post_id);
    
    /**
      * Store a new post
      * @param int
      * @param array
      */
      public function create(array $data);

    /**
     * Get All posts
     * @return mixed
     */
    public function all();

    /**
     * Get posts for current auth user
     * @return mixed
     */
    public function getUserPosts();

    /**
     * Delete a post by id
     * @param int
     */

     public function delete($post_id);

     /**
      * Update a post
      * @param int
      * @param array
      */
      public function update($post_id, array $post_data);

}
