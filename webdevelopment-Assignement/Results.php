<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
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
    <img src="SETU\fosr.jpg" width=100%>
      
    <?php
   

       if(isset($_POST['submit'])){
          $name=$_POST['un'];
          $ps  =$_POST['ps'];
         
          if(!empty($name==$ps)){
      $servername="localhost";
      $u="root";
      $p="";

      $dbname="batch".substr($name,3,4);
         
      $conn=new mysqli($servername,$u,$p,$dbname);
           
      if ($conn->connect_error) {
        die('<script>window.alert("Incorrect Details")</script>' );
    } 
          else{
             /* header("Location:http://localhost/SETU/resultsprint.php");*/
             $id =$_POST['un'];
             $id1=$_POST['ps'];
                
           $sql1="select SENG_11223,SENG_11213,SENG_12233,SENG_12242,GPA from year1 where Username='$id' AND Password='$id1' ";
           $sql2="select SENG_21213,SENG_21233,SENG_22223,SENG_22243,GPA from year2 where Username='$id' AND Password='$id1' ";
           $sql3="select SENG_31212,SENG_31242,SENG_34213,SENG_34222,GPA from year3 where Username='$id' AND Password='$id1' ";
           $sql4="select SENG_41212,SENG_41233,SENG_42222,SENG_42252,GPA  from year4 where Username='$id' AND Password='$id1' ";

           $result1=$conn->query($sql1);       
                      
           if($result1->num_rows>0){
            $row=$result1->fetch_assoc();
            echo "First Year Results <br> <table border=2>
            <thead>
                <tr><th>Course Name</th><th>Results</th></tr></thead>
                <tbody>
                <tr><td>SENG-11223</td><td>".$row["SENG_11223"]."  </td>  </tr>
                <tr><td>SENG-11213</td><td>".$row["SENG_11213"]."  </td>  </tr>
                <tr><td>SENG-12233</td><td>".$row["SENG_12233"]."  </td>  </tr>
                <tr><td>SENG-12242</td><td>".$row["SENG_12242"]." </td>  </tr>
                <TR><TD>GPA        </TD><TD>".$row["GPA"]       ."</TD> </TR>
               
           </tbody>
           </table>";
           }
           else {
             echo " ";  # code...
           }
           
           $result2=$conn->query($sql2);
          
           if($result2->num_rows>0){
            $row=$result2->fetch_assoc();
            echo "Second Year Results <br> <table border=2>
            <thead>
                <tr><th>Course Name</th><th>Results</th></tr></thead>
                <tbody>
                <tr><td>SENG-21213 </td><td>".$row["SENG_21213"].  "  </td>  </tr>
                <tr><td>SENG-21233 </td><td>".$row["SENG_21233"].  "  </td>  </tr>
                <tr><td>SENG-22223 </td><td>".$row["SENG_22223"]."  </td>  </tr>
                <tr><td>SENG-22243 </td><td>".$row["SENG_22243"] . "  </td>   </tr>
                <TR><TD>GPA        </TD><TD>".$row["GPA"]       . "  </TD>    </TR>
               
           </tbody>
           </table>";
           }
           else {
               echo " ";
              
          }
          
          $result3=$conn->query($sql3);
           if($result3->num_rows>0){
            $row=$result3->fetch_assoc();
            echo "Third Year Results <br> <table border=2>
            <thead>
                <tr><th>Course Name</th><th>Results</th></tr></thead>
                <tbody>
                <tr><td>SENG-31212 </td><td>".$row["SENG_31212"]."  </td>  </tr>
                <tr><td>SENG-31242</td><td>".$row["SENG_31242"]."  </td>  </tr>
                <tr><td>SENG-34213</td><td>".$row["SENG_34213"]."  </td>  </tr>
                <tr><td>SENG-34222 </td><td>".$row["SENG_34222"] ." </td>  </tr>
                <TR><TD>GPA        </TD><TD>".$row["GPA"]       ."</TD></TR>
               
           </tbody>
           </table>";
           }
           else {
            echo " ";           
       }
                  
       $result4=$conn->query($sql4);
           if($result4->num_rows>0){
             $row=$result4->fetch_assoc();
            echo "Fourth Year Results <br> <table border=2>
            <thead>
                <tr><th>Course Name</th><th>Results</th></tr></thead>
                <tbody>
                <tr><td>SENG-41212</td><td>".$row["SENG_41212"]."  </td>  </tr>
                <tr><td>SENG-41233 </td><td>".$row["SENG_41233"]."  </td>  </tr>
                <tr><td>SENG-42222</td><td>".$row["SENG_42222"]."  </td>  </tr>
                <tr><td>SENG-42252 </td><td>".$row["SENG_42252"] ." </td>  </tr>
                <TR><TD>GPA        </TD><TD>".$row["GPA"]       ."</TD></TR>
               
           </tbody>
           </table>";
           }
           else {
            echo " ";
           
       }



          }
          $conn->close();
       }
       else {
            die(  "<script> window.alert('Incorrect Details') </script> " ) ;   
            }
    }

    ?>


    <div class="formalign">
    <form method="POST">
   <b> Username<br><INPUT type="text" name="un"><br><br>
    Password<br><input type="text" name="ps"><br></b><br>
    <button type="submit" name="submit">Submit</Button>
    

</form>

</div>








    
    
    
    
    
    
    
    
    
    
    
    
    
   <div class="bottombox">
    <label>phone: +94 (0) 112 903 286  &nbsp;&nbsp;&nbsp;&nbsp;  Mon - Fri 8:00 - 16:00 &nbsp;&nbsp;&nbsp;&nbsp;
        <a href="https://www.facebook.com/klnsetu/" style="color: white;text-decoration: none">
         fb</a>
     </label>
</div>   

</body>
</html>