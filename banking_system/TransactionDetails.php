

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
<?php 
$con = mysqli_connect("localhost","root","","banking_system") or die(mysqli_error($con));
$select_query= "select * from transfers";
$result= mysqli_query($con, $select_query) or die(mysqli_error($con));
?>
<html>
    <head>
        <title>customers</title>
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
}</style>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a href="index.php" class="navbar-brand">Welcome In Banking Transaction</a>
                </div>
                <div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="customers.php"><span class="glyphicon glyphicon-export"></span>View Customers</a></li>
                        <li><a href="TransferMoney.php"><span class="glyphicon glyphicon-log-in"></span>Transfer Money</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <br><br><br>
        <div class="container">
            <table class="table table-striped table-bordered">
                <tbody>
                    <tr><th>Transaction_id</th><th>Transaction_amount</th><th>from(account)</th><th>TO (account)</th>
                    </tr>
                    <?php while($row = mysqli_fetch_array($result)) { ?>
                    <tr><td> <?php echo $row['trid']?> </td><td> <?php echo $row['tramount']?> </td><td> <?php echo $row['trFrom_id']?> </td><td> <?php echo $row['trTo_id']?> 
                        </td></tr><?php } ?>
                </tbody>
            </table>
        </div>
         
    </body>
</html>