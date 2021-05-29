<?php
    $f = "./text1";
    echo file_get_contents($f);
    $data = "1";
    echo file_put_contents($f,$data);