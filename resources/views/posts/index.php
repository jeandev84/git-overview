<?php
  $posts = [
      'post1' => [
          'id' => 1,
          'name' => 'Fist new of Moscow',
          'published' => true
      ],
      'post2' => [
          'id' => 2,
          'name' => 'Last new of Moscow',
          'published' => false
      ]
  ];
?>
<!DOCTYPE html>
<html>
  <head>
      <title>Posts</title>
      <link rel="stylesheet" href="../../assets/css/app.css">
  </head>
  <body>
     <h1>Posts</h1>
     <?php foreach ($posts as $post): ?>
      <h3><?= $post['id'] ?></h3>
      <div><?= $post['name'] ?></div>
      <span><?= $post['published']  ? 'published' : 'no published'; ?></span>
     <?php endforeach; ?>
  </body>
</html>