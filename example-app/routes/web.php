<?php
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use League\CommonMark\Extension\FrontMatter\Data\LibYamlFrontMatterParser;
use Symfony\Component\Translation\Dumper\YamlFileDumper;

Route::get('/', function () {
    return view('posts', [
        'posts' => Post::all()
    ]);
});

Route::get('posts/{post:slug}', function(Post $post) { //Post::where('slug', $post)->firstOrFail()
    return view('post', [
        'post' => $post
    ]);
});

Route::get('categories/{category}', function(Category $category) {
    // ddd($category->posts());
    return view('posts', [
        'posts' => $category->posts
    ]);
});