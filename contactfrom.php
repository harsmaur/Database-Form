<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="contact-form">
        <h1>CUSTOMER DATABASE FORM</h1>
    </div>
    <div class="contact-us">
       <form action="save.php" method="post">
           <input type="text" name="fname"   class="form-control" placeholder="Enter First Name"> <br>
           <input type="text" name="lname"  class="form-control" placeholder="Enter last Name"> <br>
           <input type="email" name="email"  class="form-control" placeholder="Enter Email"> <br>
           <input type="text" name="mobile"  class="form-control" placeholder="Enter Mobile Number"> <br>

           <input type="text" name="address"  class="form-control" placeholder="Enter address"> <br>
           <input type="text" name="pincode"  class="form-control" placeholder="Enter pincode"> <br>
           <input type="text" name="city"  class="form-control" placeholder="Enter city"> <br>
           <input type="text" name="state"  class="form-control" placeholder="Enter state"> <br>
           <input type="submit" class="form-control submit" value="submit" >
       </form>
    </div>
</body>
</html>