<?php
    include("setting.inc")
?>

<?php
    $uID="chair";
    $uPsw="123";
    $uID2="reviewer";
    $uPsw2="234";
    $uID3="author";
    $uPsw3="345";

    $uName=$_GET["uName"];
    $uPSW=$_GET["uPSW"];
    $sRole=$_GET["sRole"];

    if(($sRole == "Chair")&&($uName == $uID)&&($uPSW == $uPsw)){
        setcookie("ID1", $uID, time()+(24*60*60*7));
        $_SESSION["check_chair"] = "Yes";
        $_SESSION["check_reviewer"] = "No";
        $_SESSION["check_author"] = "No";
        header("Location:chair.php");
    }elseif(($sRole == "Reviewer")&&($uName == $uID2)&&($uPSW == $uPsw2)){
        setcookie("ID2", $uID2, time()+(24*60*60*7));
        $_SESSION["check_chair"] = "No";
        $_SESSION["check_reviewer"] = "Yes";
        $_SESSION["check_author"] = "No";
        header("Location:reviewer.php");
    }elseif(($sRole == "Author")&&($uName == $uID3)&&($uPSW == $uPsw3)){
        setcookie("ID3", $uID3, time()+(24*60*60*7));
        $_SESSION["check_chair"] = "No";
        $_SESSION["check_reviewer"] = "No";
        $_SESSION["check_author"] = "Yes";
        header("Location:author.php");
    }else{
        $_SESSION["check_chair"] = "No";
        $_SESSION["check_reviewer"] = "No";
        $_SESSION["check_author"] = "No";
        header("Location:fail.php");
    }
?>
    


    
