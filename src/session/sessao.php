<?php

function sessao($sessao){
   
   $chaves = [
        'required_email',
        'required_password',
        'valid_email',
        'min_password',
        'max_password',
        'incorret_password',
        'cadastro'
    ];

    foreach ($chaves as $key) {
        if (isset($sessao[$key])) {
            return $sessao[$key];
        }
    }

    return null;
}
