<?php
$connection = mysqli_connect('localhost','root','','webclass') or die(mysqli_error($connection));
if(isset($_POST['name'])){ 
         $name = mysqli_real_escape_string($connection,$_POST['name']);
         $email= mysqli_real_escape_string($connection,$_POST['email']);
         $address= mysqli_real_escape_string($connection,$_POST['address']);
         $phone= mysqli_real_escape_string($connection,$_POST['phone']);
         $sal= mysqli_real_escape_string($connection,$_POST['sal']);
         $strSQL = mysqli_query($connection,"INSERT IGNORE INTO employee (name,address,phone,email,salary) VALUES('$name','$address','$phone','$email','$salary')");
         if($strSQL){
            echo "success";
         }
}
?>
<body>
<form method="post" action="">
name:<input type="text" name="name" required><br>
address:<input type="text" name="address" required><br>
phone:<input type="number" name="phone" min="1000000000" max="9999999999" required><br>
email:<input type="email" name="email" required><br>
salary:<input type="number" name="sal" step="any" required><br>
<input type="submit" value="submit">
    </form>
</body>