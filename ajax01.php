<script language="javascript">
    var http_request = false;
    function createRequest(url){
        http_request = false;
        if (window.XMLHttpRequest) {
            http_request = new XMLHttpRequest();
            if (http_request.overrideMimeType) {
                http_request.overrideMimeType("text/xml");
            }
        } else if (window.ActiveXObject) {
            try {
                http_request = new ActiveXObject("Msxml2.XMLHTTP");
            } catch (e) {
                try {
                    http_request = new ActiveXObject("Microsoft.XMLHTTP");
                } catch (e) {}
            }
        }
        if(!http_request) {
            alert("不能创建XMLHTTP实例!");
            return false;
        }

        http_request.onreadystatechange = alertContents;
        http_request,open("GET", url, true);
        http_request.send(null);
    }

    function alertContents() {
        if (http_request.readyState == 4) {
            if (http_request.status == 200) {
                alert(http_request.responseText);
            } else {
                alert("您请求的页面发生错误");
            }
        }
    }
</script>

<script language="javascript">
    function checkName() {
        var username = form1.username.value;
        if (username == "") {
            window.alert("请填写用户名！");
            form1.username.focus();
            return false;
        } else {
            createRequest('checkname.php?username='+username+'&nocache='+new Data().getTime());
        }
    }
</script>

<?php
/**
 * Created by PhpStorm.
 * User: liyang
 * Date: 2015/9/5
 * Time: 20:29
 */
?>