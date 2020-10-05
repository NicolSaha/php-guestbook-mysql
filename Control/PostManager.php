<?php
declare(strict_types=1);

class PostManager
{

    const FILE_NAME = 'messages_data.json';
    const MAX_POSTS = 20;

    public function showPost()
    {
        //GET POSTS DATA
        //$posts = file_get_contents(self::FILE_NAME);
        //$postsDecoded = json_decode($posts, true);
        //$postsDecodedReversed = array_slice(array_reverse($postsDecoded), 0, self::MAX_POSTS - 1);
        //return $postsDecodedReversed;

    }
}

