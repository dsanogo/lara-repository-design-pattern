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
     * Get All posts
     * @return mixed
     */
    public function all();

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