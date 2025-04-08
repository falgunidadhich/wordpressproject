<?php
/*
Template Name:Insert2
*/
?>
<?php get_header();?>


<div id="main-content" class="main-content"  >
<div class="main-content-inner" >
      <h1>BIODATA FORM</h1>
  <form method="POST" style="width:1345px;  background-image:-moz-repeating-radial-gradient();border:double; ">
  <label for="name" style="font-weight:bold; margin-left:450px;">Enter Name</label>
  <input type="text" name="nm"style="margin-left: 70px; margin-top:10px;">
   <br>
   <label for="name" style="font-weight:bold; margin-left:450px;">Enter Father Name</label>
  <input type="text" name="fn"style="margin-left: 70px; margin-top:10px;">
   <br>
   <label for="name" style="font-weight:bold; margin-left:450px;">Enter Mother Name</label>
  <input type="text" name="mn"style="margin-left: 70px; margin-top:10px;">
   <br>
   <label for="name" style="font-weight:bold; margin-left:450px;">Enter City</label>
  <input type="text" name="city"style="margin-left: 70px; margin-top:10px;">
   <br>
   <label for="name" style="font-weight:bold; margin-left:450px;">Enter Education</label>
  <input type="text" name="ed"style="margin-left: 70px; margin-top:10px;">
   <br>  
   <label for="name" style="font-weight:bold; margin-left:450px;">Enter Caste</label>
  <input type="text" name="cs"style="margin-left: 70px; margin-top:10px;">
   <br>  
   
     <br>
     <label for="phone" style="font-weight:bold; margin-left:450px;">Enter Phone Number</label>
     <input type="text" name="phone_number"style="margin-left: 10px;">
<br>
      
<input type="submit"value="Submit" name="Send" style="margin:30px; margin-left:500px;">
<br>
</form>
      </div>
</div>



<?php get_footer();?>
      <?php
if(isset($_POST['Send']))
{
$n=$_POST['nm'];
$f=$_POST['fn'];
$m=$_POST['mn'];
$c=$_POST['city']; 
$e=$_POST['ed'];
$cst=$_POST['cs'];
$ph=$_POST['phone_number'];

global $wpdb;
$sql=$wpdb-> insert("Bio",array("name"=>$n,"fname"=>$fn,"mname"=>$mn,"city"=>$city,"education"=>$ed,
"caste"=>$cs,"phone_number"=>$ph,));

if($sql==true)
{
      
echo"<script>alert('Thank you for your biodata')</script>";
}
else
{
echo"<script>alert('oops message not sent')</script>";
}
}

?>