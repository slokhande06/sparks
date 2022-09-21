

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 <?php 
$con = mysqli_connect("localhost","root","","banking_system") or die(mysqli_error($con));
$select_query= "select account_id from customers";
$result= mysqli_query($con, $select_query) or die(mysqli_error($con));
?>
 <html>
    <head>
        <title>Transfer Money</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >



        <!-- jQuery library -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled and minified JavaScript -->

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <style>
body {
  background-image: url('b1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a href="index.php" class="navbar-brand">Welcome In Banking Transaction</a>
                </div>
                <div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="customers.php"><span class="glyphicon glyphicon-user"></span>View customers</a></li>
                        <li><a href="TransactionDetails.php"><span class="glyphicon glyphicon-export"></span>Transaction Detail</a></li>
                    </ul>
                </div>
            </div>
        </nav><br><br><br>
     <div class="container">
            <h1>Transfer Money</h1>
            <form method="post" action="userTransferMoney.php">
                 <div class="form-group">
                        <input type="text" class="form-control" name="Amount" placeholder="Amount">
                    </div>
                 <div class="form-group">
                        <input type="text" class="form-control" name="Account_id" placeholder="Your Account_id">
                    </div>
                
                <div class="form-group">
                    <select name="toTransfer">
                        <option>Select Account to transfer</option>
                        <?php while($row = mysqli_fetch_array($result)) { ?>
                        <option value="<?php echo $row['account_id']?>" name="toTransfer"><?php echo $row['account_id']?></option>
                        <?php } ?>
                    </select>
                    </div>

                     <div class="form-group">
                         <button type="submit" class="btn btn-primary">Pay Money</button>
                    </div>
            </form>
        </div>
        
    </body>
</html>

