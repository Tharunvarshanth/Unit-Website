<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Contact</title>
    <Link rel="stylesheet" type="text/css" href="SETU\home.css">
</head>
<body>
<table><tr><td>       
        <img width="100%" height=175px src="SETU\toplogo.jpg"> </td> <td><img src="SETU\fos.jpg"  width="75%"> </td>       
         </tr></table>
    <div class="menubar">    
    <ul>
    <li><a href="index.html">Home</a></li> 
       <li><a href="Staffs.html">Staff</a></li>     
       <li><a href="Academic.html">Academic </a></li>     
       <li><a href="Contact%20us.php">Contact Us</a></li>        
       <li><a href="about.html">About Us </a></li>             
       <li><a href="other.html ">Other</a> </li>  
       <li><a href="Results.php">Results</a></li>
    </ul>
    </div>
    <div class="addressbox">
    
    <a href="https://www.google.lk/maps/@6.973901,79.9152148,19z?hl=en&authuser=0">
      <img src="SETU\conaddress.jpg" height="40px" width="40px"> </a>
      <b>Address<br>
     <i> <label style="color: #4d0000;"> Software Engineering Teaching Unit,<br>
      University of Kelaniya,<br>
      Dalugama, Kelaniya,<br> 
      Sri Lanka, 11600<br></label></i></b>


    

      <br><br>
      <img src="SETU\conemail.jpg" height="40px" width="40px">
      <b>E-mail<br>
      <i>  
        <a  href="mailto:setu@kln.ac.lk"  style="color: #4d0000;" >setu@kln.ac.lk</a>
      </i></b>

      <br><br>
      <img src="SETU\conphone.jpg" height="30px" width="40px">
      <b>Phone Number<br>
      <i   style="color: #4d0000;">  
        Tel:  +94 011 2 903 286  
</i></b>

     </div>

     <?php 
         if(isset($_POST['submit'])){
            $sender=$_POST['email'];
            $user  =$_POST['Name'];
            $text  =$_POST['sms'];
            $head='From:'.$sender;

            ini_set("SMTP","PHP_INI_ALL");
            ini_set("smtp_port","PHP_INI_ALL");

            mail("tharunvar10@gmail.com",$user,$text,$head);
         }
    ?>
        
     <div class="contactform">
    <form method="POST">
<B style="color :#4d0000">Name</B>   <br>  <input type="text"   name="Name"  placeholder="Your Name" > <br><br>
<B style="color :#4d0000">E-mail<B> <br>  <input type="email"  name="email"  placeholder="Your Email address" ><br><br>
<B style="color :#4d0000">Message</B>  <br>  <textarea  name="sms" rows="10" cols="35"         placeholder="Text"></textarea>
                                       <button class="contactbutton" type="submit" name="submit">Send</button>   
</form>
</div>




<div class="bottombox">
    <label >phone: +94 (0) 112 903 286  &nbsp;&nbsp;&nbsp;&nbsp;  Mon - Fri 8:00 - 16:00 &nbsp;&nbsp;&nbsp;&nbsp;
        <a href="https://www.facebook.com/klnsetu/" style="color: white;text-decoration: none">
         fb</a>
     </label>
</div>




</body>
</html>