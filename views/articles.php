<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Мой Первый блог</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Мой Первый блог</h1>
        <a href="admin">Админ панель</a>
        <div>
            <?php foreach ($articles as $a): ?>
            <div class="article">
                <h3><a href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a></h3>
                <em>опубликовано: <?=$a['date']?></em>
                <p><?=articles_intro($a['content'])?></p>
            </div>
            <?php endforeach ?>
        </div>
        <footer>
            <p>Мой первый блог <br>Copyright &copy; 2015</p>
        </footer>
    </div>
</body>
</html>
