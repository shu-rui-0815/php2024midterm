<?php
    include("setting.inc")
?>

<?php

if(isset($_SESSION["check_reviewer"])){
    if($_SESSION["check_reviewer"]=="Yes"){
        $sDecide=$_POST["sDecide"];
        echo "您的決定為：".$sDecide."<br/>";
        $sComment=$_POST["sComment"];
        echo "評語：".$sComment."<br/>";
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

