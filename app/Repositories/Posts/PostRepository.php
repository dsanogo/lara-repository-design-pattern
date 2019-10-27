<?php

namespace App\Repositories\Posts;

use App\Models\Post;

class PostRepository implements PostRepositoryInterface {

    /**
     * Get a Post by id
     * @param  int
     */
    public function get($post_id){
        return Post::findOrfail($post_id);
    }

    /**
     * Get All posts
     * @return mixed
     */
    public function all()
    {
        return Post::all();
    }

    /**
     * Get posts for current auth user
     * @return mixed
     */
    public function getUserPosts()
    {
      return auth()->user()->posts;
    }

    /**
     * Delete a post by id
     * @param int
     */

     public function delete($post_id)
     {
        Post::destroy($post_id);
     }

      /**
      * Store a new post
      * @param int
      * @param array
      */
      public function create(array $data)
      {
        return Post::create($data);
      }

     /**
      * Update a post
      * @param int
      * @param array
      */
      public function update($post_id, array $post_data)
      {
        Post::findOrFail($post_id)->update($post_data);
      }

}