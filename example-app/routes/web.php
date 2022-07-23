<?php
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use League\CommonMark\Extension\FrontMatter\Data\LibYamlFrontMatterParser;
use Symfony\Component\Translation\Dumper\YamlFileDumper;
use Spatie\YamlFrontMatter\YamlFrontMatter;

Route::get('/', function () {
    $files = File::files(resource_path('/posts'));
    $posts = [];

    //WHEN YOU SIT BACK DOWN, FINISH MODIFYING THE POSTS PAGE TO USE A $POSTS ARRAY (see yaml front matter)

    foreach($files as $file){
        $documents[] = YamlFrontMatter::parseFile($file);
    }
    


    // $posts = Post::all();
    return view('posts', [
        'posts' => $documents
    ]);
});

Route::get('posts/{post}', function($slug) {
    return view('post', [
        'post' => Post::find($slug)
    ]);
})->where('post', '[A-z_\-]+');