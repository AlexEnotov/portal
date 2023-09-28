<?php
$headers = apache_request_headers();    // Recuperation des l'entetes client
    

if($headers['Authorization'] == NULL){              //si l'entete autorisation est inexistante
    header( "HTTP/1.0 401 Unauthorized" );          //envoi au client le mode d'identification
    header( "WWW-Authenticate: NTLM" );         //dans notre cas le NTLM
    exit;                           //on quitte
}
 echo '<pre>';
 // print_r($headers);
$chain = base64_decode(substr($headers['Authorization'],5));
echo $chain;
 
print_r($_SERVER);