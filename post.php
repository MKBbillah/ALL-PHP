<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post"> //use get

       <label for="username">User name</label>
       <input type="text" name="username">
       <label for="username">Email</label>
       <input type="email" name="email">

         <button type="submit"></button>

      </form>
      <?php

     if($_SERVER['REQUEST METHOD']=='POST'){ //use get
        
        $username = $_post['username']; //use get
        $email = $_POST['email'];
    
        if(!empty($username)){

            echo $username.$email;

        }
        else{
            echo 'User name is Faka';
        }
    }


      ?>
</body>
</html>