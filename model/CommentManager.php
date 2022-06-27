<?php

namespace Blog_Art\Model;

require_once("model/Manager.php");

class CommentManager extends Manager
{
    public function getComments($commentId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(created_at, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date FROM comments WHERE id = ? ORDER BY created_at DESC');
        $comments->execute(array($commentId));

        return $comments;
    }

    public function createComment($commentId, $author, $comment)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
        $affectedLines = $comments->execute(array($commentId, $author, $comment));

        return $affectedLines;
    }
}
