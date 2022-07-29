<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Extension\FrontMatter\Data\LibYamlFrontMatterParser;
use Symfony\Component\Translation\Dumper\YamlFileDumper;

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('categories/{category:slug}', function(Category $category) {
    return view('posts', [
        'posts' => $category->posts->load(['category', 'author']),
        'categories' => Category::all(),
        'currentCategory' => $category
    ]);
})->name('category');

Route::get('authors/{author:username}', function(User $author) {
    return view('posts', [
        'posts' => $author->posts->load(['category', 'author'])
    ]);
});

//WHEN YOU SIT BACK DOWN BEGIN THE NEXT VIDEO