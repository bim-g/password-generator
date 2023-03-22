<?php

namespace Wepesi\App;

class PasswordGenerator{

    static function make(string $text,string $salt = ""){
        return hash('sha256',$text.$salt);
    }

    static function salt(int $length=16){
        return bin2hex(random_bytes($length));
    }

    static function unique(){
        return self::make(uniqid());
    }

    static function randomString(int $length = 10,bool $strong = false) {
        $characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $characters .= $strong ? '!"#$%&()*+,-./:;<=>?@[\]^_`{|}~' : '';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}