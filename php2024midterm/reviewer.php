<?php
    include("setting.inc")
?>

<html>

<head>
    <meta charset="utf-8">
</head>

<?php
    if(isset($_SESSION["check_reviewer"])){
        if($_SESSION["check_reviewer"]=="Yes"){?>
            <body>
                <center><font size=6><b>Reviewer您好，歡迎進入論文評論網頁</b></font></center>
                <p></p>
            </body>
            <form action="showreview.php" method="post"> 
                <center>
                論文評審決定：
                <input type="radio" name="sDecide" value="Accept">Accept
                <input type="radio" name="sDecide" value="Minor Revision">Minor Revision
                <input type="radio" name="sDecide" value="Major Revision">Major Revision
                <input type="radio" value="sDecide" value="Reject">Reject
                <p></p>
                論文評論評語：<br/>
                <textarea name="sComment" value="" rows="10" cols="60">
                </textarea>
                <p></p>
                <input type="submit" value="提交">                
                </center>
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