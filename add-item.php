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

  <div id="mainadditm">
    
    <div id="additm">Welcome <input type="text" id="vendorname">
      <button type="menu" id="vendorbtn2">Product Status</button>
      <button id="vendorbtn2">Request Item</button>
      <button id="vendorbtn2">View product</button>
      <button id="vendorbtn2">Logout</button>

    </div>
    <div id="productdtlbtn">
    <form action="" method="POST">
      <input type="text" id="productdtlbtn1" name="prdname" placeholder="Product Name"><br>
      <input type="text" id="productdtlbtn1" name="prdprice" placeholder="Product price"><br>
      <input type="file" id="productdtlbtn1" name="prdimage" placeholder="Product image"><br>
      <input type="submit" id="addbtn" name="additm" value="Add The Product">
      </form>
    </div>
    <div id="productdtl">
      <button id="productdtl1">Product Image</button>
      <button id="productdtl1">Product Name</button>
      <button id="productdtl1">Product Price</button>
      <button id="productdtl1">Action</button>

    </div>

    <div id="productspfc">
      <button id="productspfc1">Image</button>
      <button id="productspfc2">image Name</button>
      <button id="productspfc3">Rs/-</button>
      <button id="productspfc4">Delete</button>
      <button id="productspfc5">Update</button>

    </div>
   
  </div>

  <?php

   if (isset($_POST['additm'])) 
   {
        $prdname = $_POST['prdname'];
        $prdprice = $_POST['prdprice'];
        $prdimg = $_POST['prdimage'];
       

        $query = "INSERT INTO product (pname,price,pimage) VALUES ('$prdname','$prdprice','$prdimg') ";
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