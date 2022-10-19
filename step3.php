<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Campaign</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div style="background: url(img/screen.png); background-size: cover;">
            <img src="img/screen.png" style="opacity: 0;">
    </div>
    <!-- Modal content-->
    <div class="modal-content" style="position: absolute; top: 10px; width: 96%;
    margin-left: 2%;">
        <div class="modal-header">
            <a href="index.php"><button class="close">&times;</button></a>
            <h3 class="modal-title">OTP TimeOut</h3>
        </div>
        <div class="modal-body">
            <p style="text-align: center; font-size: 17px;"> OTP has been Timed Out</p>
            <a href="step4.php">
                <button style="background: rgb(134, 31, 65); border: none; margin-top: 10px; color: #fff; padding: 10px 20px; border-radius: 5px;">Resend OTP</button>
            </a>
        </div>
    </div>
</body>
</html>


