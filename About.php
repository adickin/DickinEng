<?php
   include 'header.php';
?>

<script type="text/javascript">
   function focusTest(el)
   {
      setTimeout (function () {el.select();} , 50 );
   }
</script>

<?php

    if(isset($_POST['sendEmail']))
    {
        sendEmail();
    }

   function sendEmail()
   {
      $subject = $_POST['mailSubject'];
      $content = $_POST['mailContent'];
      $captcha = $_POST['captchaContent'];

      if($captcha == "overlooks inquiry")
      {
         $isSent = mail("adamdickin@gmail.com", $mailSubject, $mailContent);
         if($isSent == 1)
         {
            echo "Sent email";
         }
      }
   }

?>

<div class="row">
   <div class="box">
       <div class="col-lg-12">
           <hr>
           <h2 class="intro-text text-center"><strong>About</strong></h2>
           <hr>
       </div>
   </div>
</div>

<div class="row">
   <div class="box">
      <div class="col-xs-8 col-xs-push-2">
         <div class="">
            <h3>Contact Me</h3>
            <form method="POST" action='about.php'>
            <textarea class="textarea" onfocus="focusTest(this); return false" cols="100%" rows="1" maxlength="50" name="mailSubject">Subject...</textarea>
            <br></br>
            <textarea class="textarea" onfocus="focusTest(this); return false" cols="100%" rows="15" maxlength="255" name="mailContent">Content...</textarea>
            <br></br>
            <img class="img-half" src="img/capcha.png">
            <br></br>
            <textarea cols="40" rows="1" onfocus="focusTest(this); return false" name="captchaContent">Enter Text From Picture</textarea>
               <input type="SUBMIT" class="style19" name="sendEmail" value="Send Email">
            </form>
            <!-- <button name="sendEmail" type="button">Send Message</button> -->
         </div>
      </div>
   </div>
</div>

<?php
   include 'footer.php';
?>
