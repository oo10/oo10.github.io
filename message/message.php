<?php
include_once("config.php");
$rows = mysql_num_rows(mysql_query("SELECT * FROM liuyan ORDER BY id desc "));    //得到表中总记录数
$rowsPerPage = 8;   //定义每页的行数
//    echo "数据条数:".$rows;
$pages = ceil($rows/$rowsPerPage);
$curPage = 1;                      //当前要显示第几页，默认显示第1页
if(isset($_GET['curPage'])) //假如用户提交了指定的页数
    $curPage = $_GET['curPage'];    // 就将欲显示的页数设定为用户指定的值
//echo $curPage;
$sql = "SELECT * FROM liuyan ORDER BY id DESC"." LIMIT ".($curPage -1)*$rowsPerPage.", $rowsPerPage";      //修改sql语句，使得可以查询出指定的结果集
//echo $sql;
$result2 = mysql_query($sql) or die(mysql_error());
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scala=1, maximum-scale=1"/>
    <title>留言板</title>
    <link rel="stylesheet" href="../css/responsive-nav.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/m.css">
    <link rel="stylesheet" href="../css/common.css">
    <script src="../js/responsive-nav.js"></script>
    <script src="../js/jquery.min.js"></script>
    <style>
    .ani_in{
    	-webkit-animation:ani_in 1.5s ease-in-out;
    	-moz-animation:ani_in 1.5s ease-in-out;
    	-o-animation:ani_in 1.5s ease-in-out;
    	-ms-animation:ani_in 1.5s ease-in-out;
    	animation:ani_in 1.5s ease-in-out;
    }
    @-webkit-keyframes ani_in{
    	0%{padding-top: 150px;opacity: 0;}
    	100%{padding-top: 0px;opacity: 1;}
    }
    @-moz-keyframes ani_in{
    	0%{padding-top: 150px;opacity: 0;}
    	100%{padding-top: 0px;opacity: 1;}
    }
    @-o-keyframes ani_in{
    	0%{padding-top: 150px;opacity: 0;}
    	100%{padding-top: 0px;opacity: 1;}
    }
    @-ms-keyframes ani_in{
    	0%{padding-top: 150px;opacity: 0;}
    	100%{padding-top: 0px;opacity: 1;}
    }
    @keyframes ani_in{
    	0%{padding-top: 150px;opacity: 0;}
    	100%{padding-top: 0px;opacity: 1;}
    }
    @-webkit-keyframes bounce{
        0%,100%{
                transform: scale(1);
                -webkit-transform: scale(1) ;
                text-shadow:  6px 6px 10px green;
            }
        50%{
                transform: scale(1);
                -webkit-transform: scale(1) ;
                text-shadow: 2px 2px 40px rgba(255,255,255,0.8);
            }
    }

        .loading{
            -webkit-animation:bounce 2.0s infinite ease-in-out;
            animation:bounce 2.0s infinite ease-in-out;
        }
        html,body{
            margin: 0;
            padding: 0;
        }
        input {
            appearance: none;
            -moz-appearance: none;
            -webkit-appearance: none;
        }
        body{
            background-attachment: fixed;
            background-size: cover;
        }
        .bgFixed{
            height: 100%;
            width: 100%;
            background: url("../img/sea-dawn-sky-sunset.jpg") no-repeat;
            background-size: cover;
            position: fixed;
            top: 0;
            z-index: -999;
            opacity:.2;
            animation: intruduceBg 10s linear infinite alternate;
            -webkit-animation: intruduceBg 10s linear infinite alternate;

        }
        header h1{
            color: #ffffff;
            text-shadow:  6px 6px 10px green;
            border-top:2px solid orange;
            text-align: center;
            letter-spacing: 2px;
            padding: 0 0 10px 0;
            margin:0px;
            line-height:60px;
        }
        .formBox{
            width: 90%;
            margin: 0 auto;
            color: #ffffff;
            padding-top:60px;

        }
        .formBox span{
            border-left: 2px solid orange;
            padding-left: 4px;
        }
        .formBox input[type=text],input[type=email],textarea {
            width: 98%;
            border: 1px dotted #008000;
            border-radius: 10px;
            background: rgba(0,0,0,0);
            height: 40px;
            color: #ffffff;
            font-size: 14px;
            line-height: 40px;
            LETTER-spacing: 1px;
            margin: 20px 0;
            padding-left: 4px;
            outline: none;
            transition: all ease 200ms;
        }
        .formBox input[type=text]:focus,input[type=email]:focus,textarea:focus {
            background:rgba(255,255,255,.1);
        }

        .formBox textarea{
            height: 80px;
            line-height: 20px;
        }
        .mbox{
            margin: 0 auto;
            width: 90%;
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid #008000;
        }
        .button {
            width: 90%;
            height: 40px;
            margin: 0 auto ;
        }
        .button input[type=submit]{
            float: left;
            height: 40px;
            width: 100px;
            box-shadow: 2px 2px 10px #006C6C;
            background:rgba(255,255,255,.8);
            border: 1px solid transparent;
            border-radius: 10px;
            cursor: pointer;
        }
        .button input[type=reset]{
            float: right;
            height: 40px;
            width: 100px;
            box-shadow: 2px 2px 10px #006C6C;
            background:rgba(255,255,255,.8);
            border: 1px solid transparent;
            border-radius: 10px;
            cursor: pointer;
        }
        .button input:hover{
            background:rgba(255,255,255,.6);
            transition: .5s ease background;
        }
        .box {
            width: 100%;
            padding: 10px 0;
            border-radius:0 20px 0 20px;
            background: rgba(204,255,204,.1);
            box-shadow: 0px 0px 4px rgba(255,255,255,.2);
            margin: 0 auto;
            margin-top: 20px;
            letter-spacing: 1px;
            transition: all ease 200ms;
        }
        .box:hover,.box:focus{
            box-shadow: 0px 0px 10px rgba(255,255,255,.0);
        }
        .box div {
            display: block;
            line-height: 20px;
            font-size: 14px;
            color:#ffffff;
            padding:2px 10px;
        }
        .box div p {
            padding-left: 4px;
            display: inline;
            line-height: 20px;
            word-break: break-all;
        }
        .box div span {
            font-size: 14px;
            color: #B1B1B1;
        }
        .box .message{
            display: -webkit-box;
            text-overflow: ellipsis;
            overflow : hidden;
            -webkit-line-clamp: 5;
            -webkit-box-orient: vertical;
        }
        .page{
            text-align: center;
            padding:20px 0 20px 0;
            border-bottom:2px solid orange;
        }
        .page a{
            padding: 2px;
            color:rgba(255,255,255,.8);
            text-decoration:none;
        }
        #page_current {
            font-size: 20px;
            font-weight: bold;
            color: palevioletred;
        }
    </style>

</head>
<script type="text/javascript">
    function load(){
        document.getElementById("spinner").style.display='none';
        document.getElementById("container").style.opacity='1';
    }

    window.onscroll = function(){
        var t = document.documentElement.scrollTop || document.body.scrollTop;
        if( t >= 100 ) {
            /*topNav.style.background = "0,0,0",*/topNav.style.opacity = ".8";
        } else {
            /*topNav.style.background = "#ffffff",*/topNav.style.opacity = "1";
        }
    }
</script>
<!--<body background="img/--><?php
//$rand = mysql_query("select * from bgurl order by rand() limit 0,1");
//while($aa = mysql_fetch_assoc($rand)){
//     echo $aa['URL'];
//}
//?><!--">-->
<body bgcolor="black" onload="load()">
<div class="spinner" id="spinner">
    <div class="rect1"></div>
    <div class="rect2"></div>
    <div class="rect3"></div>
    <div class="rect4"></div>
    <div class="rect5"></div>
</div>
<!--<header>-->
<!--<!--    <h1 class="loading">留言板</h1>-->-->
<!--</header>-->
<div id="container">
    <?php include("../blog-HEADE.php");?>
    <div class="bgFixed"></div>
    <div id="con">
    <div class="formBox">
        <form action="message-function.php" method="post" onsubmit="return check()">
            <div class="f1"><span>你的姓名：</span><input type="text" placeholder="输入姓名" name="name" id="name"></div>
            <div class="f1"><span>你的邮箱：</span><input type="email" placeholder="输入邮箱" name="mail" id="mail"></div>
            <div class="f1"><span>留言内容:</span><textarea placeholder="输入留言内容" name="message" id="message" maxlength="200"></textarea></div>
            <div class="button"><input type="submit" value="提交" onsubmit="check()"><input type="reset" value="重置"></div>

        </form>
    </div>
    <div class="mbox">
<?php
        while($row = mysql_fetch_assoc($result2)){
            echo "<div class=\"box\">";
            echo "    <div class=\"idNumber\"><span>ID　　号：</span><p>".htmlspecialchars($row['id'])."</p></div>";
            echo "    <div class=\"Name\"><span>姓　　名：</span><p>".htmlspecialchars($row['name'])."</p></div>";
            echo "    <div class=\"mail\"><span>邮　　箱：</span><p>".htmlspecialchars($row['mail'])."</p></div>";
            echo "    <div class=\"message\"><span>留言内容：</span><p>".htmlspecialchars($row['message'])."</p></div>";
            echo "    <div class=\"datetime\"><span>留言时间：</span><p>".htmlspecialchars($row['datetime'])."</p></div>";
            echo "</div>";
        }
        //显示全部分页的链接
        echo "<div class=\"page\" id=\"page\">";
        for($i=1;$i<=$pages;$i++){   //循环显示，每个链接指定curPage属性为其指向的页数就可以了
            echo "<a href='message.php?curPage=$i'>$i</a>  ";

        }
        //首页、前页、后页、末页的链接
        if($curPage>1){
//        echo "<a href = 'message.php?curPage=1'>首页</a>  ";
            echo "<a href = 'message.php?curPage=".($curPage-1)."'>前页</a>  ";

        }
        if($curPage<$pages){
            echo "<a href='message.php?curPage=".($curPage+1)."'>后页</a>  ";
//        echo "<a href = 'message.php?curPage=$pages'>末页</a>  ";
        }
        echo "</div>";
        ?>
    </div>
    </div>
</div>

<!--JS表单验证&&当前页码高亮-->
<script type="text/javascript">
    function check(){
        if (document.getElementById("name").value.length==0) {
            alert("请输入姓名！");
            return false;
        }
        else{
            if (document.getElementById("mail").value.length==0) {
                alert("请输入邮箱！");
                return false;
            }
            else{
                if (document.getElementById("message").value.length==0) {
                    alert("输入留言内容！");
                    return false;
                }
                else{
                    return true;
                }
            }
        }
    }
    /////////////////////当前页码高亮JS
    var obj=null;
    var As=document.getElementById('page').getElementsByTagName('a');
    obj = As[0];
    for(i=1;i<As.length;i++){if(window.location.href.indexOf(As[i].href)>=0)
        obj=As[i];}
    obj.id='page_current'
</script>
<script>
$(".formBox form").addClass("ani_in"); 
</script>
<script type="text/javascript">
    //Hitokoto
    setTimeout("getkoto()",1000);
    var timer;
    function getkoto(){
        var loader = document.createElement('script');
        loader.setAttribute('src', 'http://api.hitokoto.us/rand?encode=jsc&fun=echokoto');
        document.getElementById("loadbox").appendChild(loader);
        timer=setTimeout("getkoto()",5000);
    }
    function echokoto(result){
        var hc = eval(result);
        document.getElementById("hitokoto").innerHTML = hc.hitokoto;
    }
</script>
<div id="loadbox"></div>
</body>
</html>