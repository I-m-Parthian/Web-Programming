<?php
    session_start();
    if(isset($_SESSION['count'])) {
        echo "Pageviews: " .$_SESSION['count'];
        $_SESSION['count']++;
    }
    else {
        $_SESSION['count']=1;
        echo "Pageviews: " .$_SESSION['count'];
    }
?>