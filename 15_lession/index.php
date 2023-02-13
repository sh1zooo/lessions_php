<?php

    
    $text = 'kakaya-to dich napisana';
    file_put_contents('text.txt', $text);
    echo file_get_contents('text.txt');
