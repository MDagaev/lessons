<?php
//Забрать все статьи из базы
function articles_all($link)
{
    //Запрос
    $query = "SELECT * FROM articles  ORDER BY id DESC";
    $result = mysqli_query ($link, $query);

    if (!$result) die (mysqli_error($link));

    //Извлечение из БД
    $n = mysqli_num_rows ($result);
    $articles = array ();

    for ($i = 0; $i < $n; $i++)
    {
        $row = mysqli_fetch_assoc ($result);
        $articles[] = $row;
    }


    return $articles;

}
//Взять одну статью из базу
function articles_get($link, $id_article)
{
    //Запрос
    $query = sprintf ("SELECT * FROM articles WHERE id=%d", (int)$id_article);
    $result = mysqli_query ($link, $query);

    if (!$result) die (mysqli_error ($link));

    $article = mysqli_fetch_assoc ($result);

    return $article;
}

//Добавить новую статья в базу
function articles_new($link, $title, $date, $content)
{
    //Подготовка
    $title = trim($title);
    $content = trim($content);

    //Проверка
    if ($title == '')
        return false;

    //Запрос
    $t = "INSERT INTO articles (title, date, content) VALUES ('%s', '%s', '%s')";

    $query = sprintf($t, mysqli_real_escape_string($link, $title), mysqli_real_escape_string($link, $date), mysqli_real_escape_string($link, $content));


    $result = mysqli_query($link, $query);

    if (!$result)
    {
        die (mysqli_error($link));
    }

    return true;
}
//Редактировать статью
function articles_edit($link, $id, $title, $date, $content)
{
   //Подготовка
    $title = trim($title);
    $content = trim($content);
    $date = trim($date);
    $id = (int)$id;

    //Проверка
    if ($title == '')
        return false;

    //Запрос
    $sql = "UPDATE articles SET title='%s', content='%s', date='%s' WHERE id='%d'";

    $query = sprintf($sql, mysqli_escape_string($link, $title), mysqli_escape_string($link, $content), mysqli_escape_string($link, $date), $id);

    $result = mysqli_query($link, $query);

    if (!$result)
        die(mysqli_error($link));

    return mysqli_affected_rows($link);
}

//удалить статью
function articles_delete($link, $id)
{
    $id = (int)$id;
    //Проверка
    if($id == 0){
        return false;
    }

    //Запрос
    $query = sprintf("DELETE FROM articles WHERE id='%d'", $id );
    $result = mysqli_query($link, $query);

    if (!$result){
        die(mysqli_error($link));
    }

    return mysqli_affected_rows($link);
}

//Ограничить статью 500 символами
function articles_intro($text, $len = 4000)
{
    return mb_substr($text, 0, $len);
}
?>
