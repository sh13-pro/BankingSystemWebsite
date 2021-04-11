<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Create User</title>
 <link rel="stylesheet" type="text/css" href="./css/style2.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body>
<?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('Hurray! User created');
                               window.location='transfermoney.php';
                     </script>";
                    
    }
  }
?>
    <header>
        <nav>
            <div class="logo"><h1 class="animate__animated animate__heartBeat"> भारत Bank </h1></div>
            <div class="Menu">
                <a href="index.php">Home</a>
                <a href="createuser.php">Create User</a>
                <a href="transaction.php">Make Transaction</a>
                <a href="transactionhistory.php">Transaction History</a>
            </div>
        </nav>

        <main>
         <div class="register">
          <h2>CREATE A USER</h2>
          <form id="register" method="post">
           <label for="">NAME :</label><br>
           <input type="text" name="name" id="name" placeholder="Enter your name*" required><br><br>
           <label for="">EMAIL :</label><br>
           <input type="email" name="email" id="name" placeholder="Enter your email*" required><br><br>
           <label for="">BALANCE :</label><br>
           <input type="number" name="balance" id="name" placeholder="balance*" required><br><br>
           <input type="submit" value="CREATE" name="submit" class="create" >

          </form>
         </div>
         <p>&copy 2021 COPYRIGHT. Made by <b>SHRISTI RANI</b> <br> The Sparks Foundation</p>
    </main>
    </header>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>