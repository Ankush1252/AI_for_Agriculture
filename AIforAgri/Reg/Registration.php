<?php include ("../connect/dbconn.php") ;


$showAlert = false;
$showError = false;
$showWarning = false;
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $name = $_POST['name'];
        $contact = $_POST['contact'];
        $district = $_POST['district'];
        $taluka = $_POST['taluka'];
        $village = $_POST['village'];

        $query = "INSERT INTO farmerdetails values('$name','$contact', '$district','$taluka','$village')";

        $data = mysqli_query($conn,$query);

        if($data)
        {
            $showAlert = true;
        }
        else
        {
            $showError = "Registration Failed";
        }  
    }
?>
<?php
    if($showAlert){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Success!</strong> You are now Registered
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      </div>';
    }
    if($showError){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Failed!</strong> Data entry failed
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      </div>';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="rpage.css">
</head>
<body>
    <nav class="navbar " style="background:burlywood" >
        <div class="container-fluid">
          <a class="navbar-brand"><strong>Farmer Regestration</strong></a>
          <form class="d-flex">
            <a href="../login/login.php" class="navbar-brand" id= "login1"><small>Login</small></a>
          </form>
        </div>    
    </nav>
    <div>
        <form action="#" method="post"> 
        <div class="form">
        <form action="insert.php" method="post"> 
        <div class="mb-3" style="text-align: center;">
            <div class="mb-3">
                <div> <label for="name1" class="form-label"><b>Name</b></label></div>
                 <input type="text" name="name" id="name1" class="form-control" placeholder="First Name   Last Name" required>
            </div>

        <div class="mb-3">
            <label for="contact" class="form-label"><b>Contact</b></label>
            <input type="number" class="form-control" id="contact" aria-describedby="aadharHelp" placeholder = "Mobile Number" name = "contact" required>
        </div>

        <div class="mb-3">
        <label for="district" class="form-label"><b>District</b></label>
            <input type="text" name="district" id="district" class="form-control" placeholder="" required>
        </div>
        <div class="mb-3">
        <label for="taluka" class="form-label"><b>Taluka</b></label>
            <input type="text" name="taluka" id="taluka" class="form-control" placeholder="" required>
        </div>
        <div class="mb-3">
            <label for="village" class="form-label"><b>Village/Town</b></label>
            <input type="text" name="village" id="village" class="form-control" placeholder="" required>
        </div>
        </div>
        
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
            <label class="form-check-label" for="exampleCheck1" style="font-family: courier;">Agree terms and conditions</label>
        </div>
        <hr>
        <div>
            <input type="submit" name="submit" value="Register" class="btn btn-primary" >
        </div>
        </form>     
        </div>    
        </form>
    </div>
</body>
</html>