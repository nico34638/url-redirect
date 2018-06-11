<?php
namespace App\Repository;

use App\User;
use App\Post;
use App\Category;
use Illuminate\Database\Eloquent\Builder;

class PostRepository{

    private $post;

    public function __construct(Post $post){
      $this->post = $post;
    }

    public function createPost($category_id, $name, $extract, $slug, $content){
      return $this->post->newQuery()->create([
          'category_id' => $category_id,
          'name' => $name,
          'extract' => $extract,
          'slug' => $slug,
          'content' => $content
      ]);
    }

    public function createExtractForPost($html){
      return substr($html, 0, 100);
    }

    public function generate_slug(){

    }

}


?>
