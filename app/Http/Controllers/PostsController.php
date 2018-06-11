<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Repository\PostRepository;
use App\Repository\CategoryRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


class PostsController extends Controller{

    private $postRepository;
    private $categoryRepository;

    public function __construct(PostRepository $postRepository, CategoryRepository $categoryRepository){
      $this->postRepository = $postRepository;
      $this->categoryRepository = $categoryRepository;
    }

    public function home(){
      $posts = Post::with('category')->paginate(10);
      $categories = DB::table('categories')->get();
        return view('blog.home', [
          'posts' => $posts,
          'categories' => $categories
      ]);
    }

    public function create(){
      $categories = DB::table('categories')->get();
      return view('blog.create', [
        'categories' => $categories
      ]);
    }

    public function store(){
        $category_id = 1;
        $name = Input::get('name');
        $content = Input::get('content');
        $extract = $this->postRepository->createExtractForPost($content);
        $slug = $this->postRepository->createExtractForPost($content);

        $this->postRepository->createPost(
          $category_id,
          $name,
          $content,
          $extract,
          $slug
        );
    }
}
