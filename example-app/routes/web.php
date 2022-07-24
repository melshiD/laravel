<?php
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use League\CommonMark\Extension\FrontMatter\Data\LibYamlFrontMatterParser;
use Symfony\Component\Translation\Dumper\YamlFileDumper;

Route::get('/', function () {
    return view('posts', [
        'posts' => Post::all()
    ]);
});

Route::get('posts/{post}', function($slug) {
    return view('post', [
        'post' => Post::findOrFail($slug)
    ]);
});

//WHEN YOU SIT BACK DOWN, READ ARTICLE TO FIGURE OUT HOW TO CONNECT TABLEPLUS WITH THE CONTAINERIZED DATABASE