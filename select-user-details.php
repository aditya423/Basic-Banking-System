<?php
include 'config.php';

if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from users where id=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query); // returns array or output of user from which the amount is to be transferred.

    $sql = "SELECT * from users where id=$to";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);


    // constraint to check input of negative value by user
    if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Negative values cannot be transferred")';  // showing an alert box.
        echo '</script>';
    }

  
    // constraint to check insufficient balance.
    else if($amount > $sql1['balance']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! Insufficient Balance")';  // showing an alert box.
        echo '</script>';
    }
    


    // constraint to check zero values
    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Oops! Zero value cannot be transferred')";
         echo "</script>";
     }


    else {
        
                // deducting amount from sender's account
                $newbalance = $sql1['balance'] - $amount;
                $sql = "UPDATE users set balance=$newbalance where id=$from";
                mysqli_query($conn,$sql);
             

                // adding amount to reciever's account
                $newbalance = $sql2['balance'] + $amount;
                $sql = "UPDATE users set balance=$newbalance where id=$to";
                mysqli_query($conn,$sql);
                
                $sender = $sql1['name'];
                $receiver = $sql2['name'];
                $sql = "INSERT INTO transaction(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";
                $query=mysqli_query($conn,$sql);

                if($query){
                     echo "<script> alert('Hurray! Transaction is Successful');
                                     window.location='transactions.php';
                           </script>";
                    
                }

                $newbalance= 0;
                $amount =0;
        }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Easy Money Transfer</title>
<<<<<<< HEAD

    <link rel="stylesheet" type="text/css" href="styles.css">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

    <body>
=======
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style type="text/css">
		button{
			border:none;
			background: #d9d9d9;
		}
	    button:hover{
			background-color:#777E8B;
			transform: scale(1.1);
			color:white;
		}
    </style>
</head>

    <body style="background-color : #00008B ;">
>>>>>>> d29840f7ffdc3fbaf7afd1772364678a26d98c85

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Punjab National Bank</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
<<<<<<< HEAD
                            <a class="nav-link" href="customers.php">Our Customers</a>
=======
                            <a class="nav-link active" href="customers.php">Our Customers</a>
>>>>>>> d29840f7ffdc3fbaf7afd1772364678a26d98c85
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="transactions.php">Transfer History</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.xe.com/currencyconverter/convert/?Amount=20&From=INR&To=EUR">Currency Converter</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
 

	   <div class="container">
<<<<<<< HEAD
            <h2 class="text-center pt-4" style="background-color: #ffff97; padding-bottom: 30px;">Easy Money Transfer</h2>
=======
            <h2 class="text-center pt-4" style="color : white;">Easy Money Transfer</h2>
>>>>>>> d29840f7ffdc3fbaf7afd1772364678a26d98c85
                <?php
                    include 'config.php';
                    $sid=$_GET['id'];
                    $sql = "SELECT * FROM  users where id=$sid";
                    $result=mysqli_query($conn,$sql);
                    if(!$result)
                    {
                        echo "Error : ".$sql."<br>".mysqli_error($conn);
                    }
                    $rows=mysqli_fetch_assoc($result);
                ?>
                <form method="post" name="tcredit" class="tabletext" ><br>
            <div>
<<<<<<< HEAD
                <table class="table table-striped table-condensed table-bordered" style="border: gray;">
                    <tr style="background-color: #c0c0ff;">
                        <th id="table-head" style="padding-top: 12px;">Account No.</th>
                        <th id="table-head" style="padding-top: 12px;">Account Name</th>
                        <th id="table-head" style="padding-top: 12px;">E-mail</th>
                        <th id="table-head" style="padding-top: 12px;">Account Balane(in Rs.)</th>
                    </tr>
                    <tr>
                        <td id="table-content"><?php echo $rows['id'] ?></td>
                        <td id="table-content"><?php echo $rows['name'] ?></td>
                        <td id="table-content"><?php echo $rows['email'] ?></td>
                        <td id="table-content"><?php echo $rows['balance'] ?></td>
                    </tr>
                </table>
            </div>
            <br><br>
            <label style="margin-bottom: 5px;"><b>Transfer To:</b></label>
=======
                <table class="table table-striped table-condensed table-bordered">
                    <tr style="color : white;">
                        <th class="text-center">Account No.</th>
                        <th class="text-center">Account Name</th>
                        <th class="text-center">E-mail</th>
                        <th class="text-center">Account Balane(in Rs.)</th>
                    </tr>
                    <tr style="color : white;">
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name'] ?></td>
                        <td class="py-2"><?php echo $rows['email'] ?></td>
                        <td class="py-2"><?php echo $rows['balance'] ?></td>
                    </tr>
                </table>
            </div>
            <br><br><br>
            <label style="color : white;"><b>Transfer To:</b></label>
>>>>>>> d29840f7ffdc3fbaf7afd1772364678a26d98c85
            <select name="to" class="form-control" required>
                <option value="" disabled selected>Choose account</option>
                <?php
                    include 'config.php';
                    $sid=$_GET['id'];
                    $sql = "SELECT * FROM users where id!=$sid";
                    $result=mysqli_query($conn,$sql);
                    if(!$result)
                    {
                        echo "Error ".$sql."<br>".mysqli_error($conn);
                    }
                    while($rows = mysqli_fetch_assoc($result)) {
                ?>
                    <option class="table" value="<?php echo $rows['id'];?>" >
                
                        <?php echo $rows['name'] ;?> (Balance: 
                        <?php echo $rows['balance'] ;?> ) 
               
                    </option>
                <?php 
                    } 
                ?>
                <div>
            </select>
            <br>
<<<<<<< HEAD
                <label style="margin-bottom: 5px;"><b>Amount:</b></label>
                <input type="number" class="form-control" name="amount" required>   
                <br><br>
                <div class="text-center" >
                    <button name="submit" type="submit" class="btn" id="selected-button">Transfer Money</button>
=======
            <br>
                <label style="color : white;"><b>Amount:</b></label>
                <input type="number" class="form-control" name="amount" required>   
                <br><br>
                    <div class="text-center" >
                <button class="btn mt-3" name="submit" type="submit" id="myBtn" >Transfer Money</button>
>>>>>>> d29840f7ffdc3fbaf7afd1772364678a26d98c85
                </div>
            </form>
        </div>

        <footer class="panel-footer">
            <div class="container">
                <div class="text-center">&copy; Copyright Punjab National Bank India 2021</div>
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>