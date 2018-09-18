<?php

class Insta {
    private $token = TOKEN;
    private $client_id = CLIENT_ID;
    private $account = 'kevinjnk';
    private $api;
    private $data;

    public function __construct()
    {
        $this->api = new \Instagram\Api();
        $this->api->setAccessToken($this->token);
        $this->api->setUserId($this->client_id);
        $this->data = $this->api->getFeed($this->account);

    }

    public function getUserName(){
        echo $this->data->userName;
    }
    public function getFullName(){
        echo $this->data->fullName;
    }
    public function getDescription(){
        echo $this->data->biography;
    }
    public function getFollowers(){
        echo $this->data->followers;
    }
    public function getFollowing(){
        echo $this->data->following;
    }
    public function getProfilPicture(){
        echo $this->data->profilePicture;
    }
    public function mediaCount(){
        echo $this->data->mediaCount;
    }

    public function getMedia($order = 'desc'){
        $data = $this->data->medias;
        $endCursor = $this->data->getMaxId();
        $medias = $data;
        $return = [];

        foreach($medias as $media){

            $hastag = explode('#',$media->caption);

            $return[] = [
                'thumbnailSrc' => $media->displaySrc,
                'link' => $media->link,
                'date' => date('d m Y',$media->date->date),
                'source' => $media->displaySrc,
                'description' => $hastag,
            ];
        }
        if($order == 'desc'){
            $return =  $return;
        }else{
            $return = array_reverse($return);
        }

        return $return;
    }

    public function displayFeed($order = 'desc'){
        $data = $this->getMedia($order);
        require_once './view/grid.php' ;

    }

}