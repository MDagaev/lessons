<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Мой первый блог</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Мой первый блог</h1>
        <div>
            <form method="post" action="index.php?action=add">
                <label>

                    <b>Название</b><br>
                    <input type="text" name="title" value="" size="30" class="form-item" autofocus required>

                </label><br>
                <label>
                    <b>Дата</b><br>
                    <input type="date" name="date" value="" style="width:250px" class="form-item" required>
                </label><br>
                <label>
                    <b>Содержимое</b><br>
                    <textarea class="form-item" name="content" rows="10" cols="45" required></textarea>
                </label><br>
                <label>
                    <input type="submit" value="Сохранить" class="btn">
                </label>
            </form>
        </div>
        <footer>
            <p>Мой первый блог <br>Copyright&copy; 2015</p>
        </footer>
    </div>


</body>
</html>
