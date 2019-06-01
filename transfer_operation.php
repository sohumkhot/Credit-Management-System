<?php   
    require_once('dbconnect.php');
    if(!isset($_SERVER['HTTP_REFERER']))
  {
    header('location:index.php'); 
  }
    $name=$_POST['name'];

    $query = "select * from users where name='" . $name . "'";
    $result = mysqli_query($link,$query);
    $row = mysqli_fetch_array($result);

    $query = "select name from users where name<>'" . $row['name'] . "'";
    $result = mysqli_query($link,$query);

    if(isset($_POST['transfer'])) {
        if($_POST['credits_transferred'] > $row['credit']) {
            header('location:transfer_result_fail.php');
        }
        else {
            $query = "update users set credit=credit-" . $_POST['credits_transferred'] . " where name='" . $row['name'] . "'";
            mysqli_query($link,$query);

            $query = "update users set credit=credit+" . $_POST['credits_transferred'] . " where name='" . $_POST['to_user'] . "'";
            mysqli_query($link,$query);

            $query = "insert into transfers values('" . $row['name'] . "','" . $_POST['to_user'] . "'," . $_POST['credits_transferred'] . ")";
            mysqli_query($link,$query);
            header('location:transfer_result_success.php');           
        }
    }

?>
