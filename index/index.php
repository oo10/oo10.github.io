<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scala=1, maximum-scale=1"/>
    <title>逝者如斯夫|不舍昼夜</title>
    <link rel="stylesheet" type="text/css" href="../css/responsive-nav.css">
    <link rel="stylesheet" type="text/css" href="../css/m.css">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <link rel="stylesheet" type="text/css" href="../css/common.css">
    <script src="../js/responsive-nav.js"></script>
    <style>
    .ani_in{
    	-webkit-animation:ani_in 1.5s ease-in-out;
    	-moz-animation:ani_in 1.5s ease-in-out;
        -o-animation:ani_in 1.5s ease-in-out;
        -ms-animation:ani_in 1.5s ease-in-out;
    	animation:ani_in 1.5s ease-in-out;
    }
    @-webkit-keyframes ani_in{
    	0%{top: -150px;opacity: 0;}
    	100%{top: 0px;opacity: 1;}
    }
    @-moz-keyframes ani_in{
    	0%{top: -150px;opacity: 0;}
    	100%{top: 0px;opacity: 1;}
    }
    @-o-keyframes ani_in{
    	0%{top: -150px;opacity: 0;}
    	100%{top: 0px;opacity: 1;}
    }
    @-ms-keyframes ani_in{
    	0%{top: -150px;opacity: 0;}
    	100%{top: 0px;opacity: 1;}
    }
    @keyframes ani_in{
    	0%{top: -150px;opacity: 0;}
    	100%{top: 0px;opacity: 1;}
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
<body onload="load()">
<div id="loadbox"></div>
<div class="spinner" id="spinner">
    <div class="rect1"></div>
    <div class="rect2"></div>
    <div class="rect3"></div>
    <div class="rect4"></div>
    <div class="rect5"></div>
</div>

<div id="container" class="center">
    <?php include_once'../blog-HEADE.php'; ?>
    <div class="fixedBg"></div>
    <div id="con">
    <div class="conFirst ani_in">
        <div class="headIcon center loading"></div>
        <div class="intruduce w90 center">
            <table class="center">
                <tr>
                    <td class="text-r"><span>Name： </span> <!--<p>姓名：</p>--></td>
                    <td class="text-l"><p>阳琪旺</p></td>
                </tr>
                <tr>
                    <td class="text-r"><span>Birthdate：</span><!--<p>出生日期：</p>--></td>
                    <td class="text-l"><p>1995年11月30日</p></td>
                </tr>
                <tr>
                    <td class="text-r"><span>Education：</span><!--<p>毕业于：</p>--></td>
                    <td class="text-l"><p>湖南理工学院</p></td>
                </tr>
                <tr>
                    <td class="text-r"><span>Major in：</span><!--<p>毕业于：</p>--></td>
                    <td class="text-l"><p>计算机科学与技术</p></td>
                </tr>
            </table>
            <!--<div class="circle center coloring"><a href="#">□</a></div>-->
        </div>
    </div>
    <div class="conSecond">
        <h2 class="center"><img src="../img/dog.png" height="15"> 前端狗<img src="../img/dog.png" height="15"></h2>
        <p class="w80 center">不一样的普er通bi少年，20年前破壳而出、现活跃在地球，是一头<span class="del1"><s>单身</s><span class="del2"><s>____</s></span></span>大前端设计<b>狗</b>。瞎折腾，混进去过百度大厦、阿里UC，现游荡在互联网行业，准备寻觅一个地儿大<b>干一场</b>。<span style="font-size:.6em; display: inline; line-height: .6em;">ლ(╹◡╹ლ)</span></p>
        <h2 class="center">技能</h2>
        <div class="w80 center jineng" style="margin-top: 0"><div class="title">网页</div><span style="font-size:.6em; display: inline; line-height: .6em;">ლ(╹◡╹ლ)</span></div>
        <div class="w80 center jineng"><div class="title">美工</div><span style="font-size:.6em; display: inline; line-height: .6em;">ლ(╹◡╹ლ)</span></div>
        <div class="w80 center jineng"><div class="title">编程</div><span style="font-size:.6em; display: inline; line-height: .6em;">ლ(╹◡╹ლ)</span></div>
    </div>
    </div></div>

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
</body>
</html>
