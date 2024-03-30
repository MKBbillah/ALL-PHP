<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> User Registration</h1>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
   <label for="Username">Username</label>


<input type="text" name="username" id="">

<button type="submit"> Submit </button>

    </form>

    <?PHP
    IF($_SERVER['REQUEST_METHOD']=='POST'){
        $username = $_REQUEST['username'];
        ECHO $username;

       // IF(empty($username)){
         //   echo "Thief";
        //}
        //else{
          //  echo $username;
       // }
    //}
    if(!empty($username)){
        echo $username;
    }
    else{
        echo "field fill up please";
    }
    }
?>
</body>
</html>

<?php




?>