<?php
$clave1  = 'bfuy89aebyu392xxxiegfuertef8fbe38hf328hdewjbnwd8u2hd8';
$method = 'aes-256-cbc';
$iv = base64_decode("J9fBxl1DW93TL5/M8jaZtw==");
// funcion para encriptar
 $encriptar = function ($valor) use ($method, $clave1, $iv) {
     return openssl_encrypt ($valor, $method, $clave1, false, $iv);
 };
 //funcion para desencriptar
 $desencriptar = function ($valor) use ($method, $clave1, $iv) {
     $encrypted_data = base64_decode($valor);
     return openssl_decrypt($valor, $method, $clave1, false, $iv);
 };
 /*
 Genera un valor para IV
 */
 $getIV = function () use ($method) {
     return base64_encode(openssl_random_pseudo_bytes(openssl_cipher_iv_length($method)));
 };