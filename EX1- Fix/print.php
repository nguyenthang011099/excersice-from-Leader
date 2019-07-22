<?php
    require('main.php');
    $link = new Link();
    $listlink = $link->takelink($arr);
    print_r($listlink);
