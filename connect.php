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







<?php
$con = mysql_connect("localhost","root","MCraptor18");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("cyberclubsu", $con);

$sql="INSERT INTO data (first_name, last_name, mcid, email)
VALUES
('$_POST[first_name]','$_POST[last_name]','$_POST[mcid]','$_POST[email]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

mysql_close($con)
?>

</body>
</html>
