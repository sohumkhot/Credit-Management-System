<?php
    require_once('dbconnect.php');
    if(!isset($_SERVER['HTTP_REFERER']))
  {
    header('location:index.php'); 
  }
    $name = $_GET['name'];

    $query = "select * from users where name='" . $name . "'";
    $result = mysqli_query($link,$query);
    $row = mysqli_fetch_array($result);
    
    $query = "select name from users where name<>'" . $row['name'] . "'";
    $result = mysqli_query($link,$query);


?>

<script>
function ref() {
  setTimeout(function () {
     window.location.reload();
  }, 500);
}
</script>

<html>
	<head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Credit Manager - Transfer</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="shortcut icon" href="cred.ico" type="image/x-icon"/>
  </head>
    

    <body>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="index.php" img scr="cred.ico"></a>
    <ul class="navbar-nav">
     <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
     </li>
    </ul>
  </nav><br><br>
        
        <div class="container">
        <center>
        <h1><p class="bg-secondary text-white">Welcome <b><i><?php echo $row['name'] ?></i></b>!
        <br>Credit Balance: <b><?php echo $row['credit'] ?></b></p></h1><br></center>
        
        
        <form target="_blank" action="transfer_operation.php" method="post">
            <fieldset>
                <h3><b><center><p class="bg-info text-white">Manage Transfer:</p></center></b></h3><br>
                <div class="form-group">
                  <label for="number"><h4>Number of Credits to be transferred:</h4></label>
                 <input type="number" step="0.01" placeholder="Enter the number of Credits"class="form-control" name="credits_transferred" min =0 required>
                <br>
                
                
                <h4>Receiver:</h4>
                <select class="form-control" name="to_user" required>

                <option value="" disabled selected hidden>Select User</option>
                <?php
                        while($tname = mysqli_fetch_array($result)) {
                            echo "<option value='" . $tname['name'] . "'>" . $tname['name'] . "</option>";
                        }
                ?>
                </div>
                </select>
                <br>
            </fieldset>
            
            <center><input class="btn btn-primary btn-md" role="button" type="submit" onclick="ref()" name="transfer" value="Confirm Transfer"></div></center>
            <input type="hidden" name="name" value="<?php echo $name; ?>">
            <input type="hidden" name="uniqid" value="<?php echo uniqid();?>" />
        </form>
    </body>
</html>
