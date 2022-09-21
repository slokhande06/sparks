<?php
$con = mysqli_connect("localhost","root","","banking_system") or die(mysqli_error($con));
$amount = $_POST['Amount'];
$account_id = $_POST['Account_id'];
$toTransfer = $_POST['toTransfer'];
$id=rand(1000,10000);
$select_query= "select current_balance from customers where account_id='$account_id'";
$result= mysqli_query($con, $select_query) or die(mysqli_error($con));
$row = mysqli_fetch_array($result);
if($row['current_balance']<$amount){
    echo '<script>alert("Amount want to transfer is exceeded from account balance")   </script>';
    echo '<h1><a href="TransferMoney.php">click here </a> to back</h1>';
}
else{
$transferQuery = "insert into transfers values('$id','$amount','$account_id','$toTransfer')";
$transferSubmit = mysqli_query($con, $transferQuery) or die(mysqli_error($con));
$select_query= "update customers set current_balance = current_balance - '$amount' where account_id ='$account_id' ";
$result= mysqli_query($con, $select_query) or die(mysqli_error($con));
$select_query= "update customers set current_balance = current_balance + '$amount' where account_id ='$toTransfer' ";
$result= mysqli_query($con, $select_query) or die(mysqli_error($con));
header('Location:success.html');
}
?>


