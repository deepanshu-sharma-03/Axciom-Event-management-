
<?php include 'connection.php' ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="foradminlogin.php" method="post">

        <div id="main">
            <H1>Event Management System</H1>
            <div id="data">
               <Label id="btn"> User id</Label>
                <input type="text" id="itype" name="userid"><br><br>
                <Label id="btn"> Password</Label>
                <input type="password" id="itype" name="password">
                <br><br>
                <input type="reset" name="reset" id="btn2">
                <input type="submit" name="login" id="btn2" value="Login">
                
            </div>
        
            
    </form>
    
 <form action="admin-signup.php"><br>
    <input type="submit" name="Signup" id="btn2" value="Signup">
    </form>
    </div>
</body>

</html>