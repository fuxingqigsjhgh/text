<?php
    $arr1 = [123,214,234,456,333,'a','hello','php'];

    die;


    foreach($arr1 as $k=>$v){
        if($k==4){
            continue;
        }
        if($k==5){
            die;
        }
        echo '$k= '.$k . '+++++$v' . $v ."\n";
    }