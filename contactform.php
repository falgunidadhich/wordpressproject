<?php
/*
Template Name:Insert
*/
?>
<?php get_header();?>


<div id="main-content" class="main-content"  >
<div class="main-content-inner" >
      <h1 style="text-align:center; background-color:beige; border:double;" >Contact Us</h1>
  <form method="POST" style="width:1345px;  background-image:-moz-repeating-radial-gradient();border:double; ">
  <label for="name" style="font-weight:bold; margin-left:450px;">Enter Name</label>
  <input type="text" name="nm"style="margin-left: 70px; margin-top:10px;">
   <br>
      <br>
      <label for="email" style="font-weight:bold; margin-left:450px;">Enter Email</label>
      <input type="text" name="email" style="margin-left: 70px;">
<br>
     <br>
     <label for="phone" style="font-weight:bold; margin-left:450px;">Enter Phone Number</label>
     <input type="text" name="phone_number"style="margin-left: 10px;">
<br>
      <br><label for="msg" style="font-weight:bold; margin-left:450px;">Enter Message
</label>
         <input type="text" name="message"style="margin-left: 50px;">
<br>
<input type="submit"value="Send Message" name="Send" style="margin:30px; margin-left:500px;">
<br>
</form>
      </div>
</div>



<?php get_footer();?>
      <?php
if(isset($_POST['Send']))
{
$n=$_POST['nm']; 
$e=$_POST['email'];
$ph=$_POST['phone_number'];
$msg=$_POST['message'];
global $wpdb;
$sql=$wpdb-> insert("contactform",array("name"=>$n,"email"=>$e,"phone_number"=>$ph,"message"=>$msg));

if($sql==true)
{
      echo"<script>
      confirm(' I hope you enterd correct data ')
      </script>";
echo"<script>alert('we will contact you soon')</script>";
}
else
{
echo"<script>alert('oops message not sent')</script>";
}
}

?>