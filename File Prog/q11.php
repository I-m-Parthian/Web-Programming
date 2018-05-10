<?php
$connection = mysqli_connect('localhost','root','','webclass') or die(mysqli_error($connection));
if(isset($_GET[frm])){
    $strSQL = mysqli_query($connection,"SELECT * FROM employee WHERE salary<10000;");
    if(mysqli_num_rows($strSQL)>0){
        while ($row=mysqli_fetch_row($strSQL)){
             echo $row[1]." ".$row[2]." ".$row[3]." ".$row[4]." ".$row[5]." "."<br>";
        }
    }
}

?>
<body>
<form action="" method="get">
    <input type="submit" value="find" name="frm">
    </form>
</body>
