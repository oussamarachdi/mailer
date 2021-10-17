<?php
  //if(isset(_POST['submit'])){
    //$ToEmail = "rachdioussama33@gmail.com"

    //$FromEmail = $_POST['email'];
    //$message = $_POST['message'];
    //$subject = $_POST['subject'];

    //$headers = "This is email is sent from ".$FromEmail."/n/n";
    //$headers .= "He is trying to say".$message;

    //$result = mail($ToEmail, $subject, $message ,$headers);
    //if $(result){
      //echo "<script>alert('email sent successfully')</script>"
    //}
  //}

  <?php
  $ToEmail = "salim8boudaga@gmail.com"
  if(isset($_POST['submit'])){
    $FromEmail = $_POST['email'];
    $message = $_POST['message'];
    $subject = $_POST['subject'];

    $headers = "This is email is sent from ".$FromEmail."/n/n";
    mail($ToEmail, $subject, $message, $headers);
    header("location: ./site.php?message=emailsentsuccessfully")
  }

?>


?>
