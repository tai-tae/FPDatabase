<html>
<head>
  <title>MC CYBER CLUB SIGNUP</title>
</head>

<body>
  <form action = "connect.php" method="POST">



    <marquee><h2>MC CYBERCLUB SIGNUP</h2></marquee>

    <center>
    <table border="1" width="400" height="300" color="white">

  <tr>
    <td align="right">First Name:</td><td><input type="text" name="first_name"></td>
  </tr>

  <tr>
    <td align="right">Last Name:</td><td><input type="text" name="last_name"></td>
  </tr>

  <tr>
    <td align="right">MC ID:</td><td> <input type="text" name="mcid"></td>
  </tr>

  <tr>
    <td align="right">Email:</td><td> <input type="text" name="email"></td>
  </tr>

  <tr>
    <td align="right">Email Notifications?</td><td>

  </tr>

  <tr>
    <td colspan="5" align="center"><input type="submit" name="submit" value="Submit"></td>
  </tr>


        </table>
      </form>
    </center>
  </body>
</html>





<?php
error_reporting(E_ALL ^ E_DEPRECATED);


$link = mysqli_connect('localhost', 'xxxxx', 'xxxxxxx', 'xxxxxx');

if(isset($_POST['submit'])){

  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $mcid = $_POST['mcid'];
  $email = $_POST['email'];


  $query = "insert into data (first_name,last_name,mcid,email,e_notif) values ('$first_name','$last_name','$mcid','$email')";
  mysqli_query($link, 'CREATE TEMPORARY TABLE `table`');



  {
    echo "Student's data entered successfulle!";
  }


}


?>
