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

    <div id="main">
        <H1>Event Management System</H1>
        <form action="" method="POST">
            <label for="name" id="adsignupbtninp">Name</label>
            <input type="text" id="adsignupbtninp" placeholder="VENDOR" name="name"> <br>
            <label for="email" id="adsignupbtninp">Email</label>
            <input type="text" id="adsignupbtninp" placeholder="VENDOR" name="email"> <br>
            <label for="password" id="adsignupbtninp">Password</label>
            <input type="password" id="adsignupbtninp" placeholder="VENDOR" name="password"> <br>
            <label for="category" id="adsignupbtninp">Category</label>
            <select name="VendorCategogry" id="adsignupbtninp">
                <option value="Catering" name="category" method="POST">Catering</option>
                <option value="Catering" name="category" method="POST">Florist</option>
                <option value="Catering" name="category" method="POST">Decoration</option>
                <option value="Catering" name="category" method="POST">Lightning</option>
            </select>
            <br>
            <input type="submit" value="Signup" id="adsignupbtn" name="signup-btn">
        </form>
        <button id="adsignupbtn"> <a href="adminlogin.php">LogIn</a></button>

    </div>


    <?php
    if (isset($_POST['signup-btn'])) 
    {
        $signname = $_POST['name'];
        $signemail = $_POST['email'];
        $signpass = $_POST['password'];
        $signcategory = $_POST['category'];

        $query = "INSERT INTO userorvendor (name,email,pass,category) VALUES ('$signname','$signemail','$signpass','$signcategory') ";
        $data = mysqli_query($con, $query);
        if ($data) {
            ?>
            <script type="text/javascript">
                alert("Data Saved Succesfully");
            </script>
            <?php
        }
    }

    ?>


</body>

</html>