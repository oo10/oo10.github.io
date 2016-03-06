<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2015/11/30
 * Time: 15:28
 */
echo "
<div id=\"topNav\">
    <div style='max-width: 100%; margin: 0 auto;'>
        <div class=\"topic center w90\">
            <h2>逝者如斯夫｜不舍昼夜</h2>
            <div class=\"p\"><a href=\"javascript:void(0)\" onclick=\"getkoto()\" id=\"hitokoto\">比梦想更重要的东西永远都存在着...</a></div>
        </div>
    </div>
    <nav class=\"nav-collapse\" style=\"clear: both\">
        <ul>
            <li><a href=\"../index\"  data-hover=\"Home\">Home</a></li>
            <li><a href=\"http://mixmix.sinaapp.com/wordpress/\"  data-hover=\"日志\">日志</a></li>
            <li><a href=\"../message/message.php\"  data-hover=\"留言\">留言</a></li>
            <li><a href=\"../photo\"  data-hover=\"相册\">相册</a></li>
        </ul>
    </nav>
</div>";
echo "
<script type=\"text/javascript\">
    var navigation = responsiveNav(\".nav-collapse\", {
        animate: true,                    // Boolean: Use CSS3 transitions, true or false
        transition: 284,                  // Integer: Speed of the transition, in milliseconds
        label: \"Menu\",                    // String: Label for the navigation toggle
        insert: \"before\",                  // String: Insert the toggle before or after the navigation
        customToggle: \"\",                 // Selector: Specify the ID of a custom toggle
        closeOnNavClick: true,           // Boolean: Close the navigation when one of the links are clicked
        openPos: \"relative\",              // String: Position of the opened nav, relative or static
        navClass: \"nav-collapse\",         // String: Default CSS class. If changed, you need to edit the CSS too!
        navActiveClass: \"js-nav-active\",  // String: Class that is added to <html> element when nav is active
        jsClass: \"js\",                    // String: \'JS enabled\' class which is added to <html> element
        init: function(){},               // Function: Init callback
        open: function(){},               // Function: Open callback
        close: function(){}               // Function: Close callback
    });
</script>\n";