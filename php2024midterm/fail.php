<?php
    include("setting.inc")
?>

<?php
    if(($_SESSION["check_chair"]=="No") || ($_SESSION["check_reviewer"]=="No") || ($_SESSION["check_author"]=="No")){
        echo "帳號密碼錯誤或角色對應錯誤!!<br/>";
        echo "10秒後將回首頁!或直接按下方連結回首頁<br/>";
        echo "<a href='logout.php'>重新輸入角色與帳號密碼</a>";
        header("Refresh:5;url=index.php");
    }
?>