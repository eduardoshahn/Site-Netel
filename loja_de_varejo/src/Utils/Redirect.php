<?php

namespace APP\Utils;

class Redirect{

    public static function redirect( // Validação de POST 
        string|array $message,
        string $type = 'success',
        string $url = '../View/message.php'
    )
    {
        session_start(); // guardar uma informação para ser lida em todo sistema

        if(is_array($message)){
            $items = '';
            foreach($message as $msg){
                $items .= "<li>$msg</li>";
            }
            $_SESSION['msg_warning'] = $items;
        } else{
            if($type == 'success'){
                    $_SESSION['msg_success'] = $message;
            } else if($type == 'error'){
                $_SESSION['msg_error'] = $message;
            }
        }
        header("location:$url"); // Redirecionar para outra tela
        exit;
    }

}