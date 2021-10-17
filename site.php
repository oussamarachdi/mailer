<?php
  $ToEmail = "rachdioussama33@gmail.com";
  if(isset($_POST['submit'])){
  $FromEmail = $_POST['email'];
  $message = $_POST['message'];
  $subject = $_POST['subject'];

  $headers = "From :".$FromEmail;
  mail($ToEmail, $subject, $message, $headers);
}
 ?>

  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>Email test</title>
    </head>
    <body>
      <h1>Contact Form</h1>
      <hr>
      <form name="fo" action="" method="post" enctype="multipart/form-data">
        <input name="email" type="email" required  placeholder="email">
        <input name="subject" type="text" required placeholder="subjetc">
        <textarea name="message" required placeholder="message"></textarea>
        <button name="submit">Submit</button>
      </form>
      <div>
        <?php echo $headers ?>
      </div>
    </body>
  </html>
