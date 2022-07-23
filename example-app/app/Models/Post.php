<?php 

namespace App\Models;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Post{

    public $title, $exceprt, $date, $body;
    public function __construct($title, $excerpt, $date, $body){
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
    }


    public static function all(){
        $files = File::files(resource_path("posts/"));
        return array_map(fn($file) => $file->getContents(), $files);
    }

    public static function find($slug){
        
        $path = resource_path("posts/{$slug}.html");

        if(! file_exists($path)){
            throw new ModelNotFoundException();
        }

        $post = cache()->remember("posts.{$slug}", 600, function() use ($path) {
            var_dump('file_get_contents');
            return file_get_contents($path);
        });

        return $post;
    }
}