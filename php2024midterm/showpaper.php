<?php
    include("setting.inc")
?>

<?php

if(isset($_SESSION["check_author"])){
    if($_SESSION["check_author"]=="Yes"){
        $sTitle=$_POST["sTitle"];
        echo "論文標題：".$sTitle."<br/>";
        $sName=$_POST["sName"];
        echo "作者姓名：".$sName."<br/>";
        $sEmail=$_POST["sEmail"];
        echo "作者Email：".$sEmail."<br/>";
        $sComment=$_POST["sComment"];
        echo "論文摘要：".$sComment."<br/>";
        echo "<a href='logout.php'>登出</a>";
    }else{
        echo "非法進入網頁!!<br/>";
        echo "三秒後請重新輸入..";
        header("Refresh:3;url=index.php");
    }
}else{
    echo "非法進入網頁!!<br/>";
    echo "三秒後請重新輸入..";
    header("Refresh:3;url=index.php");
}
