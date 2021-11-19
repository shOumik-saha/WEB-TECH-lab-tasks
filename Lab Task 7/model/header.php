<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../Css/style.css">
    <style>
    * {
        box-sizing: border-box;
    }

    body 
    {
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
    }

    .header 
    {
        overflow: hidden;
        background-color: grey;
        padding: 20px 10px;
    }

    .header a 
    {
        float: left;
        color: black;
        text-align: center;
        padding: 12px;
        text-decoration: none;
        font-size: 18px;
        line-height: 10px;
        border-radius: 4px;
    }

    .header a.logo 
    {
        font-size: 25px;
        font-weight: bold;
    }

    .header .header-right a:hover 
    {
        background-color: grey;
        color: blue;
    }

    .header a.active 
    {
        background-color: dodgerblue;
        color: white;
    }

    .header-right 
    {
        float: right;
    }

    @media screen and (max-width: 500px) 
    {
        .header a 
        {
            float: none;
            display: block;
            text-align: left;
        }

        .header-right 
        {
            float: none;
        }
    }
    </style>
</head>

<body>
    <?php
$home="home";

?>


    <div class="header">

        <div class="logo">
            <a href="" class="logo"> <h1>Hell <span style="font-size: 40px;"></span>.com</a></h1></a>

        </div>

        <div class="header-right">
            <?php
            if(isset($_SESSION["Sname"]))
            {
                $home=$_SESSION["Sname"];
                echo "<a class='active' href='homepage.php'>Logged in as $home</a>";
            }
            else{
                echo "<a class='active' href='../view/homepageView.php'>$home</a>";
            }
            
        echo "
        <a href='../view/loginWardenView.php'>login</a>
        <a href='../view/signupWardenView.php'>Registration</a>";
        ?>

        </div>
    </div>
</body>

</html>