<?php
    include("setting.inc")
?>

<html>

<head>
    <meta charset="utf-8">
</head>

<?php
    if(isset($_SESSION["check_author"])){
        if($_SESSION["check_author"]=="Yes"){?>
            <body>
                <font size=6><b>Author您好，歡迎進入論文投稿網頁</b></font>
                <p></p>
            </body>
            <form action="showpaper.php" method="post">                 
                論文標題：<br/><input type="text" name="sTitle" value="" required><br/>
                作者姓名：<input type="text" name="sName" value="" required><br/>
                作者Email：<input type="email" name="sEmail"><br/>
                論文摘要：<br/>
                <textarea name="sComment" value="" rows="10" cols="60">
                </textarea>
                <p></p>
                <input type="submit" value="提交">                                
            </form>
<?php        echo "<a href='logout.php'>登出</a>";
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