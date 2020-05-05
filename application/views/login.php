<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php foreach($menu as $item): ?>
        <li>
            <a href="<?php echo $item['url'] ?>"><?php echo $item['title'] ?></a>
        </li>
    <?php endforeach; ?>
    <!-- <?php var_dump($menu) ?> -->
</body>
</html>