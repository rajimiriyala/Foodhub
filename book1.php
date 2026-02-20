<?php
 require 'config.php';
if(isset($_POST["submit"])){
    $FULLNAME=$_POST["FULLNAME"];
    $EMAIL=$_POST["EMAIL"];
    $DATE=$_POST["DATE"];
    $TIME=$_POST["TIME"];
    $NOOFSEATS=$_POST["NOOFSEATS"];
    $result=mysqli_query($conn,"SELECT * FROM users WHERE FULLNAME='$FULLNAME'");
    if(mysqli_num_rows($result)>0){
        echo
        "<script> alert('alredy table reserved ')</script>";
    }
    else{
        $query="INSERT INTO users VALUES ('$FULLNAME','$EMAIL','$DATE','$TIME','$NOOFSEATS')";
        mysqli_query($conn,$query);
        echo
        "<script> alert('your table reserved')</script>";
        $_SESSION["login"]=true;
        $_SESSION["id"]=$row["id"];
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../images/logo2.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="book.css">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food website | Book Table</title>
</head>
<body>
    <div class="table">
        <div class="sign">
            <div class="sign-box">
                <div class="bar">
                    <a href="./index.html"><i class="fa-solid fa-xmark" id="x-sign-mb"></i></a>
                </div>
                <div class="signup">
                    <h3>Book Your Table</h3>
                    <form method="post" action="#">
                        <label for="fullname">Name</label></br>
                        <input type="text" placeholder="Full Name" name="fullname" id="fullname"></br>
                        <label for="email">E-mail</label></br>
                        <input type="email" placeholder="E-mail" name="email" id="email"></br>
                        <label for="date">Date</label></br>
                        <input type="date" name="date" id="date"></br>
                        <label for="time">Time</label></br>
                        <input type="time" name="time" id="time"></br>
                        <label for="noofseats">no. of seats</label></br>
                        <input type="text" placeholder="no of seats" name="noofseats" id="noofseats"></br>
                        <input type="submit" value="Book Now">
                    </form>
                </div>
            </div>
        </div>
    </div>


</body>

</html>