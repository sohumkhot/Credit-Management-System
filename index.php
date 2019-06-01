<?php
    require_once('dbconnect.php'); //connect to database
    $query = "select * from users";
    $result = mysqli_query($link,$query);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Credit Manager - Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="cred.ico" type="image/x-icon"/>
    <div class="jumbotron"><div class="text-center">
    <img src="cred.ico" class="rounded" alt="Website Logo"width="100px"height="100px">
    </div>
    <center><h1><b>Credit Management System</b><h1><h5>Developed By <b>Sohum Khot</b></h5></center></div>
  </head>



 <body>
    <div class="container">
      <div class="table-responsive">
         <table class="table table-hover text-center">
           <thead class="thead-dark">
              <tr>
                <th colspan="2">Sr. No.</th>
                <th colspan="2">Name</th>
                <th colspan="2">E-Mail</th>
                <th colspan="2">Credit Balance</th>
                <th colspan="2">Option</th>
              </tr>
            </thead>
          <tbody>
            <?php
                $i=1;
                while($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo '<td colspan="2">' . $i . "</td>";
                    echo '<td colspan="2">' . $row["name"] . "</td>";
                    echo '<td colspan="2">' . $row["email"] . "</td>";
                    echo '<td colspan="2">' . $row["credit"] . "</td>";
                    echo '<td colspan="1.5" class="text-right"><a href=transfer_info.php?name=' . $row['name'] . ">Select</a><td>";
                    echo "</tr>";
                    $i=$i+1;
                }
            ?>
           </tbody>
      </table>
    </div>
  </div>
 </body>
</html>