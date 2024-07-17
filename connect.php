<?php
    $name=$_post['name'];
    $email=$_post['email'];
    $subject=$_post['subject'];

    $conn = new mysqli('localhost','root','','portfolio');
    if($conn->connect_error){
        die('connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into enquiry(name,email,subject) values(?,?,?)");
        $stmt->bind_param("ssi",$name,$email,$subject);
        $stmt->execute();
        echo "registration Successfull...";
        $stmt->close();
        $conn->close();
    }
?>