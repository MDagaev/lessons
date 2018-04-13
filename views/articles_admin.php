<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Мой Первый блог</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Мой Первый блог</h1>
        <a href="index.php?action=add">Добавить статью</a>
        <div>
            <br>
            <table border="1" class="admin-table">
            <tr>
                <th>Дата</th>
                <th>Заголовок</th>
                <th> </th>
                <th> </th>
            </tr>
            <?php foreach ($articles as $a):?>
                <tr>
                    <td><?=$a['date']?></td>
                    <td><?=$a['title']?></td>
                    <td><a href="index.php?action=edit&id=<?=$a['id']?>">Редактировать</a></td>
                    <td><a href="index.php?action=delete&id=<?=$a['id']?>">Удалить</a></td>
                </tr>
            <?php endforeach ?>
            </table>
        </div>
        <footer>
            <p>Мой первый блог <br>Copyright &copy; 2015</p>
        </footer>
    </div>
</body>
</html>
