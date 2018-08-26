<?php

    function pkcs7_pad($data, $size)
    {
        $length = $size - strlen($data) % $size;
        return $data . str_repeat(chr($length), $length);
    }

    function pkcs7_unpad($data)
    {
        return substr($data, 0, -ord($data[strlen($data) - 1]));
    }

    function encrypt($password) {
        
        $key = "�mc��?�8���~��n6�=%5U�ehw";
        $encryption_key = hex2bin(strToHex($key));
        
        $iv_size = 16; // 128 bits
        $iv = openssl_random_pseudo_bytes($iv_size, $strong);
        
        $enc_pass = openssl_encrypt(
            pkcs7_pad($password, $iv_size),
            'AES-256-CBC',
            $encryption_key,
            0,
            $iv
        );
        
        $enc_data = array("encrypted" => $enc_pass, "iv" => $iv);
        return $enc_data;
    }

    function decrypt($enc_pass, $iv){
        
        $key = "�mc��?�8���~��n6�=%5U�ehw";
        $encryption_key = hex2bin(strToHex($key));
        
        $decrypted = pkcs7_unpad(openssl_decrypt(
            $enc_pass,
            'AES-256-CBC',
            $encryption_key,
            0,
            $iv
        ));
        return $decrypted;
    }

    function strToHex($string){
        $hex = '';
        for ($i=0; $i<strlen($string); $i++){
            $ord = ord($string[$i]);
            $hexCode = dechex($ord);
            $hex .= substr('0'.$hexCode, -2);
        }
        return strToUpper($hex);
    }
        
?>