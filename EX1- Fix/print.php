<?php
    require('main.php');
    $link = new Link();
    $hieu = $link->takelink($arr);
    print_r($hieu);
