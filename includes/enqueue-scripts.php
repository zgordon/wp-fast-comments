<?php

use Nullix\CryptoJsAes\CryptoJsAes;
require "encryption.php";

add_action( 'wp_enqueue_scripts', 'stratticpasswordprotected_frontend_scripts', 100 );

function stratticpasswordprotected_frontend_scripts() {

  global $post;

  wp_enqueue_script(
    'stratticpasswordprotected-aes-js',
    WPPLUGIN_URL . 'assets/encryption.min.js',    
    [],
    '',
    true    
  );  

  wp_enqueue_script(
    'stratticpasswordprotected-aes-format-js',
    WPPLUGIN_URL . 'assets/encryption-format.js',    
    ['stratticpasswordprotected-aes-js'],
    '',
    true    
  );  

  wp_enqueue_script(
    'stratticpasswordprotected-js',
    WPPLUGIN_URL . 'build/index.js',    
    ['wp-dom-ready', 'stratticpasswordprotected-aes-js'],
    time(),
    true    
  );  
  
  $s1 = md5($post->post_password);
  $data = [
    "s1" => $s1,
    "s2" => CryptoJsAes::encrypt($post->post_content, $s1)
  ];  
  wp_localize_script('stratticpasswordprotected-js', 's21b9588115f7803605c9bd76b5313659', $data);

}  


?>