<?php


class StoreData 
{
    public static function queryInsert(array $data, string $title_poem): string
    {
        $pseudo = $_POST['pseudo'];
        $comment =($_POST['commentaire']);
        $title_poem = $_COOKIE['text'];
        $dateComment = new DateTime('now');
        $dateFormated = $dateComment->format('d-m-Y H:i:s');
        return "INSERT INTO `comment`(`author_comment`, `comment`, `date`, `title_poem`) VALUES ('{$pseudo}', '{$comment}', '{$dateFormated}', '{$title_poem}');";
    }
}