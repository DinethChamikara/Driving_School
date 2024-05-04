<?php
 
   require_once "../Database/connection.php";

   $sql = "SELECT * FROM `instructor`";
   $instructors = $conn->query($sql); 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="resourses.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    
    <div class="header">

        <nav>
            <div class="logo"><a href="#">Logo</a></div>
            <ul>
                <li><a href="http://localhost/Driving_School/Employee_view/index.php"> Home </a></li>
                <li><a href="http://localhost/Driving_School/Employee_view/students.html"> Students </a></li>
                <li><a href="http://localhost/Driving_School/User_View/contact.html"> Contact </a></li>
                <li id="services"><a href="#"> Services </a>
                  <ul class="dropdown-1">
                   <li> <a href="http://localhost/Driving_School/User_View/services/learning_material.html"> Various Materials</a> </li> <br>
                   <li> <a href="http://localhost/Driving_School/User_View/services/Common vehicles.html"> Common Vehicles</a> </li> <br>
                   <li> <a href="http://localhost/Driving_School/User_View/services/Heavy Vehicles.html"> Heavy Vrhicles</a> </li> <br>
                  </ul>
           </li>
                <li><a href="http://localhost/Driving_School/Employee_view/resources.html"> Resources </a></li>
            </ul>
            <div class="buttons">
                <!--<input type="button" value="requests" onclick="location.assign('requests.php')">-->
                <a href="http://localhost/Driving_School/Employee_view/requests.php"> requests </a>
                <a href="http://localhost/Driving_School/User_View/Login.html"> Login </a>
            </div>
        </nav>
    
        <h1> Our Resources </h1>
    
    </div>

    <section class="resources">

        <section class="instructor" id="instructor">

            <h1> Our Driving Instructors </h1>

            <p> We provide quality driving tution from our country's best Instructors. </p>

            <div class="card-list">

              <?php
                while ($row = $instructors->fetch_assoc()) {
                  $id = $row["Instructor_id"];
                  $first = $row["First_Name"];
                  $last = $row["Last_Name"];
                  $nic = $row["NIC_Number"];
                  $date = $row["Joined_Date"];
                  $post = $row["Post"];
                  $email = $row["Email_Address"];
                  $tel = $row["Telephone_Number"];
                  

              ?>
                   <div class="card">
                     <center> <img src="http://localhost/Driving_School/images/images.png"> </center>
                     <center><h4>  <?php echo $row["First_Name"]; echo " "; echo $row["Last_Name"]; ?> </h4> </center>   
                     <center> <button> <?php echo "<a href='instructor-info.php?id=$id&first=$first&last=$last&nic=$nic&date=$date&post=$post&email=$email&tel=$tel' style='text-decoration: none; color: #fff;'> Find More </a>"; ?> </button> </center>  
                   </div>
              <?php
                }
               ?>
                   
                 </div> 

        </section>

        <div class="Simulator">

            <h1> Our Special Simulators </h1>

            <p> We provide quality driving tution from our country's best Instructors. </p>

            <div class="row">
                <div class="col">
                     <img src="http://localhost/Driving_School/images/DSC_0206.jpg" width="400px">
                     <h4> Engine Cut Section </h4>
                     <p> He is a qualified teacher and a expert driving intructors. He is a "A" class Driver. He is a qualified teacher and a expert driving intructors. </p>
                     <button><a href="#" style="text-decoration: none; color: #fff;"> Find More </a> </button>
                </div>
                <div class="col">
                    <img src="http://localhost/Driving_School/images/download.jpg" width="400px">
                    <h4> Basic Driving Simulator </h4>
                    <p> He is a qualified teacher and a expert driving intructors. He is a "A" class Driver. He is a qualified teacher and a expert driving intructors.</p>
                    <button><a href="#" style="text-decoration: none; color: #fff;"> Find More </a> </button>
               </div>
               <div class="col">
                <img src="http://localhost/Driving_School/images/istockphoto-1209793467-170667a.jpg" width="400px">
                <h4> Air Bag Impact Simulator </h4>
                <p> He is a qualified teacher and a expert driving intructors. He is a "A" class Driver. He is a qualified teacher and a expert driving intructors.</p>
                <button><a href="#" style="text-decoration: none; color: #fff;"> Find More </a> </button>
               </div>
            </div>   

        </div>

    </section>

    <footer>
        <div class="container-2">
           <div class="row-2">
            <div class="footer-col">
              <h4>Company</h4>
              <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae vel fugiat provident tenetur nihil commodi deleniti, ipsa odio cumque tempore itaque recusandae illo aspernatur minus error aliquid. Corporis, id dolorem? </p>

            </div>
            
             <div class="footer-col">
               <h4>Company</h4>
               <ul>
                 <li><a href="">Home</a></li>
                 <li><a href="">About Us</a></li>
                 <li><a href="">Contact Us</a></li>
                 <li><a href="">Services</a>
                </li>
               </ul>
             </div>

             <div class="footer-col">
               <h4>Contact</h4>
               <ul>
                 <li><a href=""><i></i> 0776665435</a></li>
                 <li><a href=""><i></i> driving@gmail.com</a></li>
                 <li><a href=""><i></i> 0869469586</a></li>
                 <li><a href=""><i></i> 475-D, Alubomulla, Panadura</a></li>
               </ul>
             </div>

             <div class="footer-col">
               <h4>Fullow us on</h4>
               <div class="social-links">
                 <a href=""><i class="fab fa-facebook-f"></i></a>
                 <a href=""><i class="fab fa-twitter"></i></a>
                 <a href=""><i class="fab fa-instagram"></i></a>
                 <a href=""><i class="fab fa-linkedin-in"></i></a>
               </div>
             </div>
           </div>
        </div>
     </footer>

</body>
</html>