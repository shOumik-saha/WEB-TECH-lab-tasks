<!DOCTYPE html>
<html>

<head>
    <style>
    .icon img {
        height: 150px;
    }
    .propic {
        width: 100px;
    }
    </style>
    <title>Profile Picture</title>
</head>

<body>
    <div class="propic">
        <form action="page2/picValidation.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>PROFILE PICTURE</legend><br>
                <div class="icon">
                    <img src="page2/icon.png"><br><br>
                    <input type="file" name="fileToUpload" id="fileToUpload">
                </div>
                <br>
                <hr>
                <input type="submit" name="submit">
        </form>
        </fieldset>
    </div>
</body>
</html>