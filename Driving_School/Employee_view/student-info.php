


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="student-info.css">
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
    
        <h1> Student Information </h1>
    
    </div>

    <?php

       require_once "../Database/connection.php";

       $id = $_GET["id"];

       $sql = "SELECT * FROM `students` WHERE `student_id`='$id'";
       $student_info = ($conn->query($sql))->fetch_assoc();

       $first_name = $student_info["First_Name"];
       $last_name = $student_info["Last_Name"];
       $dob = $student_info["D.O.B."];
       $gender = $student_info["Gender"];
       $nic = $student_info["NIC_Number"];
       $tel = $student_info["Contact_Number"];
       $email = $student_info["Email_Address"];
       $email = $student_info["Registered_Date"];

?>

    <center> <h2> <?php echo "$first_name"."  ". "$last_name";?> </h2> </center>

          <div class="child">

               <div class="image">
                <img src="http://localhost/Driving_School/images/images.png" width="400px">
               </div>
               <div class="info">

                <table>

                    <caption>Personal Details</caption>

                   <tbody>
                      <tr>
                          <td> First Name :- </td>
                          <td> <?php echo "$first_name"; ?> </td>
                      </tr>

                      <tr>
                        <td> Last Name :- </td>
                        <td><?php echo "$last_name"; ?></td>
                    </tr>

                      <tr>
                        <td> D. O. B. :- </td>
                        <td><?php echo "$dob"; ?></td>
                    </tr>

                    <tr>
                        <td> NIC Number :-  </td>
                        <td><?php echo "$nic"; ?></td>
                    </tr>

                    <tr>
                        <td> Contact Number :- </td>
                        <td><?php echo "$tel"; ?></td>
                    </tr>

                    <tr>
                        <td> Gender :- </td>
                        <td><?php echo "$gender"; ?></td>
                    </tr>

                    <tr>
                        <td> Registration Date :- </td>
                        <td> <?php echo "$first_name"; ?></td>
                    </tr>

                    <tr>
                        <td> Email Address :-  </td>
                        <td> <?php echo "$email"; ?></td>
                    </tr>
                   </tbody>

                 </table>
               </div>

          </div>

       <section>   
        
        <center> <h1> Other Student Details </h1> </center>

          <div class="course">

            <div class="type">
                <table>

                    <caption>Course Details</caption>

                   <tbody>
                    <tr>
                      <td> Number of sessions </td>
                      <td>25 lessons</td>
                  </tr>

                  <tr>
                    <td> Completed sessions </td>
                    <td>15 lessons</td>
                </tr>

                <tr>
                    <td> Completed sessions </td>
                    <td>10 lessons</td>
                </tr>

                   </tbody>

                 </table>
            </div>
            <div class="pay">
                <table>

                    <caption>Payment Details</caption>

                   <tbody>
                      <tr>
                          <td> Full Amount </td>
                          <td>Rs. 95,000</td>
                      </tr>

                      <tr>
                        <td> Paymed Amount </td>
                        <td>Rs. 50,000</td>
                    </tr>

                    <tr>
                        <td> Remaining Amount </td>
                        <td>Rs. 45,000 </td>
                    </tr>

                   </tbody>

                 </table>
            </div>
          </div>

        </section>   
        
        <section>

          <div class="attendance">

          

            <center> <h1> Other Student Details </h1> </center>

              <table>

                <caption> Student Attendance </caption>

                <thead>
                  <tr>
                   <th> Lesson_Number </th>
                   <th> Course_Code </th>
                   <th> Batch_Year </th>
                   <th> Attendance_ Date </th>
                  </tr> 
                </thead>

                <tbody>
                    
                <?php
          
                   $sql = "SELECT * FROM `attendance table` WHERE `Student_id`='$id'";
                   $result = $conn->query($sql);

                   if ($result->num_rows > 0) {
                     while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>".$row["Lesson_Number"]. "</td>";
                        echo "<td>".$row["Course_Code"]. "</td>";
                        echo "<td>".$row["batch_id"]. "</td>";
                        echo "<td>".$row["Attendance_Date"]. "</td>";                      
                        echo "</tr>";
                     }
                   }
          
                ?>
                    
                </tbody>

            </table>
          </div>


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