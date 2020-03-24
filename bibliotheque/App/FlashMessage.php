<?php


namespace App;


class FlashMessage
{
    public function set(string $message,string $type='sucess')
    {
        $_SESSION['flash_message']=[
            'message'=>$message,
            'type'=>$type

        ];
    }
    public static function dispaly()
    {
        if(isset($_SESSION['flash_message']))
        {
            $type=$_SESSION['flash_message']['type']=='error'
                ?'danger'
                :$_SESSION['flash_message']['type']
                ;
            $alert='<div class="alert alert-'. $_SESSION['flash_message']['type'].'">'
            .$_SESSION['flash_message']['message']
            .'</div>' ;
        }
    }
}