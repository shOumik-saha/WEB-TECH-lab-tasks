<?php  
session_start();  //to start session.
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage</title>
    <style>
    .welcome {

        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans';
        font-size: 50px;
        margin-top: 10rem;
    }

    .main {
        display: flex;
    }
    </style>
</head>

<body>
    <?php include './resources/header.php';
    include './resources/footer.php';
    ?>
    <div class="main">
        <div class="left">
            <?php 
    include './resources/Account.php';
    ?>
        </div>
        <div class="right">
            <div class="welcome">
                <?php  
                        

                        if(isset($_SESSION["username"])){             
                        echo "Welcome ". $_SESSION["username"] ."<br>";//"using session from registration.php
                            }
                            else{
                                echo "Login please";
                            }
                    ?>
            </div>
        </div>
    </div>

</body>

</html>