<x-layout>
    <h1>
        <?= $post->title ?>
    </h1>
    <p>
        By <a href="/authors/{{$post->author->username}}">{{$post->author->username}}</a>
         in <a href="/categories/{{$post->category->slug}}">{{ $post->category->username}}</a>
    </p>
    <div>
        <?= $post->body ?>
    </div>
    <a href="/">Go Back</a>
</x-layout>