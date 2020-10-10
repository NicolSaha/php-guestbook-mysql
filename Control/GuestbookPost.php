<?php
declare(strict_types=1);

class GuestbookPost {

    private string $postDate;
    private string $authorName;
    private string $email;
    private string $messageTitle;
    private string $messageContent;

    const FILE_NAME = 'messages_data.json';

    public function __construct($postDate, $authorName, $email, $messageTitle, $messageContent)
    {
        $this->postDate = $postDate;
        $this->authorName = $authorName;
        $this->email = $email;
        $this->messageTitle = $messageTitle;
        $this->messageContent = $messageContent;
    }

    public function addPostToDatabase() {
        //ADD DATA
        try {
            $data = openConnection()->prepare('INSERT INTO Posts (Name, Email, Date, Message_Title, Message_Content) VALUES(:Name, :Email, :Date, :Message_Title, :Message_Content)');
            $data->bindParam(':Name', $name);
            $data->bindParam(':Email', $email);
            $data->bindParam(':Date', $date);
            $data->bindParam(':Message_Title', $title);
            $data->bindParam(':Message_Content', $message);

            $name = $this->authorName;
            $email = $this->email;
            $date = $this->postDate;
            $title = $this->messageTitle;
            $message = $this->messageContent;
            $data->execute();

        } catch(PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    public function deletePost($id)
    {
        $deletePost = openConnection()->prepare('DELETE FROM Posts WHERE ID = :id');
        $deletePost->bindValue(':id', $id);
        $deletePost->execute();
    }

    public function getSpecificPost($id)
    {
        $specificPost = openConnection()->prepare('SELECT * FROM Posts WHERE ID = :id');
        $specificPost->bindValue(':id', $id);
        $specificPost->execute();
        return $specificPost->fetchAll();
    }

}