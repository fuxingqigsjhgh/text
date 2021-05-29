<?php
//   使用mysqli 连接mysql
 $host = "127.0.0.1";   //mysql的主机地址
 $user ='root';   //数据库的用户名
 $pass ='root';    //数据库密码
 $db = "php2102";  //使用的数据库

 $link = new mysqli($host,$user,$pass,$db);

 //获取users表中的数据
 $sql = "select * from users";

 // 执行一个查询
 $result = mysqli_query($link,$sql);

 //获取纪录

 $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);

 echo '<pre>';print_r($rows);echo '</pre>';