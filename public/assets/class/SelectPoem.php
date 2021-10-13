<?php
require_once 'Query.php';

class SelectPoem
{
    public static function poems()
    {
        $theme = $_COOKIE['theme'];
        $pdoRequest = Query::pdo();
        $recuperePoem = $pdoRequest->query("SELECT * FROM `poeme` WHERE `theme` = '{$theme}';")->fetchAll();
        return $recuperePoem;
    }

    public static function comments()
    {
        $poem = $_COOKIE['text'];
        $pdoRequest = Query::pdo();
        $recupereComment = $pdoRequest->query("SELECT * FROM `comment` WHERE `title_poem` = '{$poem}' ORDER BY `date` DESC;")->fetchAll();
        return $recupereComment;
    }
}

?>
