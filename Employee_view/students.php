<?php
 
   require_once "../Database/connection.php";

   $sql = "SELECT * FROM `students` LIMIT 20;";
   $students = $conn->query($sql); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="students.css">
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
    
        <h1> Student Details / </h1>
    
    </div>

    <section id="details">

      <form action="" class="search-bar">
           <input type="text" placeholder="Search bar" name="search" id="field">
           <button type="submit"> <i class="fas fa-search">  </i> </button>
      </form>
 </section>

    <section class="resources">

        <div class="instructor">

            <h1> Students </h1>

            <p> We provide quality driving tution from our country's best Instructors. </p>

           <div class="card-list">

           <?php
             while ($row = $students->fetch_assoc()) {
               $id = $row["student_id"];
           ?>
                <div class="card">
                  <center> <img src="http://localhost/Driving_School/images/images.png"> </center>
                  <center><h4>  <?php echo $row["First_Name"]; echo " "; echo $row["Last_Name"]; ?> </h4> </center>   
                  <center> <button> <?php echo "<a href='student-info.php?id=$id' style='text-decoration: none; color: #fff; background-color: #f5168d; border: 0; outline: 0;  font-weight: bold; color: #fff; cursor: pointer; transition: 0.5s; padding: 15px 20px; font-size: 20px;'> Find More </a>"; ?> </button> </center>  
                </div>
           <?php
             }
            ?>
                
              </div>     
            
        </div>


        <center><button id="more"> Show More </button></center>
    </section>

    <footer>
        <div class="container-2">
           <div class="row">
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
                 <li><a href="">Services</a></li>
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