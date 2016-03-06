<!DOCTYPE>
<HTML>
    <HEAD>
        <TITLE></TITLE>
        <meta charset="UTF-8">
    </HEAD>
    <BODY>
<?php

//echo 'helloPHP!<br>';
//
//
//function hello(){
//    for($i=1;$i<=100;$i++)
//        echo 'hello'.$i.'<br>';
//}
//hello();


//function sayHelloTo($name){
//    echo 'Hello!'.$name.'<br>';
//}
//sayHelloTo('阳琪旺');

function getLevel($socol){
    if($socol<60 && $socol>=0){
        return $socol.'差评!<br>';
    }elseif($socol<80){
        return $socol.'一般般的分数<br>';
    }elseif($socol<=100){
        return $socol.'优秀！<br>';
    }else {
        return $socol.'有这分数吗?<br>';
    }
}
    echo getLevel(100);?>
    <input type="text" placeholder="查询分数等级！">

    </BODY>
</HTML>
