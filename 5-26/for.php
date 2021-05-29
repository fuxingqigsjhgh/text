<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>列表</title>
</head>
<body>
 <ul>
    <?php
      $list = [
        'AAAAA',
        'BBBBB',
        'CCCCC',
        'DDDDD',
        'EEEEE'
      ];
        // foreach($list as $k=>$v){
        //     echo "<li>".$v."</li>";
        // }
        $length = count($list);
        for($i=0;$i<$length;$i++){
            echo "<li>".$list[$i]."</li>";
        };
    ?>
 </ul>
</body>
</html>
