<?php

error_reporting(0);

if (isset($_POST['submit']))
{
  $name = $_POST['”name”'];
  $email = $_POST['email'];

  $msg = $_POST['message'];

  $to = 'saoud.telawy@gmail.com';
  $subject = 'Contact Submission: ' . $name;
  $message = "The Following received Message from the Form is:\r\n";
  $message .= $msg;
  $headers = "Sent From: " . $email . "and the Sender is " . $name;

  mail($to, $subject, $message, $headers);


  header( "refresh:3;url=index.html" );

  echo "<div class='container'>";
  echo "<h2>Mail Sent Successfully ... $name</h2>";
  echo "<h3 class='anim-gradient'>Thanks alot for your email, I'll get back to you shortly. </h3>";

  echo "</div>";



}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mail Status</title>
  <style>

    body{
      background-color: #1B2430;
    }
      .container{
        max-width: 980px;
        margin: 0 auto;
        margin-top: 100px;
        border: 1px solid #252934;
        border-radius: 4px;
        box-shadow: 2px 3px 5px 5px #61616117;
        height: 350px;
      }
      h2, h3{
        text-align: center;
      }

      h2{
        color: #fff;
        padding: 2rem;
        margin-top: 95px;
        font-size: 2rem;
      }


  .anim-gradient{
background: radial-gradient(
  circle,
  #fff 0%,
  #e31b6d 20%,
  #04c2c9 40%,
  #009996 60%,
  #6c757d 80%,
  #252934 100%
);
-webkit-background-clip: text;
background-clip: text;
color: transparent;
background-size: 400%;
animation: gradient 10s linear infinite alternate;
font-weight: 400;
font-size: 1.3rem;

}


@keyframes gradient {
0% {
background-position: 0%;
}
100% {
background-position: 100%;
}
}

.text-center{
  text-align: center;
  color: #6c757d;
  display: block;
  margin: 0 auto;
  margin-top: 1.5rem;

}
  </style>
</head>
<body>
  <small class="text-center">Please Wait ... You will be redircted to Main Page Shortly</small>
  
</body>
</html>