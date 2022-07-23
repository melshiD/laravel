<!DOCTYPE html>
<head?>
<title>My Blog</title>
<link rel="stylesheet" href="/app.css" />
</head>
<body>
    <?php foreach ($posts as $post) : ?>
        <article>
            <?= $post->body(); ?>
        </article>
    <?php endforeach; ?>
</body>