<?php
    include("setting.inc")
?>

<html>

<head>
    <meta charset="utf-8">
</head>

<?php
    if(isset($_SESSION["check_chair"])){
        if($_SESSION["check_chair"]=="Yes"){
            echo "歡迎進入網頁<br/>";
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
    
?>
</html>