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
           <img class="img-responsive img-border img-left" src="img/profilepic.jpg">
           <hr class="visible-xs">
           <p>John Dickin received the B.Sc. degree in Electrical Engineering from the University of Calgary,
            Calgary, AB, Canada, in 1974. He has been with various industries including manufacturing, electric 
            utilities, gas transmission, oil refining, steel manufacturing, and petrochemical manufacturing. In 2001, 
            he formed Dickin Engineering Inc., Red Deer, AB, where he offers power systems expertise to a 
            variety of industries. Mr. Dickin is a member of the Association of Professional Engineers and 
            Geoscientists of Alberta and a Senior Member of IEEE. He is also an active participant and member
             in the committees that developed the Objective Based Industrial Electrical Code in Canada and has 
             participated in the writing of the IEEE 1566 Standard for Adjustable Speed AC Drive Systems.</p>
         </div>
   </div>
</div>

<div class="row">
   <div class="box">
      <div class="col-lg-12">
            <hr>
           <h2 class="intro-text text-center"><strong>Contact</strong></h2>
           <hr>
         <div class="">
            <form method="POST" action='About.php'>
            <textarea class="textarea" onfocus="focusTest(this); return false" cols="100%" rows="1" maxlength="50" name="mailSubject">Subject...</textarea>
            <br></br>
            <textarea class="textarea" onfocus="focusTest(this); return false" cols="100%" rows="15" maxlength="255" name="mailContent">Content...</textarea>
            <br></br>
            <img class="img-half" src="img/capcha.jpg">
            <br></br>
            <textarea cols="40" rows="1" onfocus="focusTest(this); return false" name="captchaContent">Enter Text From Picture</textarea>
               <input type="SUBMIT" class="style19" name="sendEmail" value="Send Email">
            </form>
         </div>
      </div>
   </div>
</div>

<?php
   include 'footer.php';
?>
