

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="requests.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>
    <div class="header">

        <nav>
            <div class="logo"><a href="#">Logo</a></div>
            <ul>
                <li><a href="http://localhost/Driving_School/Employee_view/"> Home </a></li>
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
    
        <h1> Student Requests / </h1>
    
    </div>

     <div class="table">

            <table>

                <caption> Student Requests </caption>

                <thead>
                   <tr>
                    <th> ID </th>
                    <th> First Name </th>
                    <th> Last Name </th>
                    <th> Tel No. </th>
                    <th> Mobile No. </th>
                    <th> Email Address </th>
                    <th> D. O. B.</th>
                    <th> NIC Number </th>
                    <th> Gender </th>
                    <th> Course </th>
                    <th style="width: 50px"> Requested Date </th>
                    <th> Status </th>
                    <th style="width: 50px"> Call </th>
                    <th style="width: 50px"> Approve </th>
                    <th> Rejection </th>
                    </tr>      
                </thead>

                <tbody>
                    
                 <?php

                   require_once "../Database/connection.php";
                  
                   $sql = "SELECT * FROM `students-tempory` WHERE `status` = 'Pending';";
                   $result = $conn->query($sql);

                   if ($result->num_rows > 0) {
                     while ($row = $result->fetch_assoc()) {

                      $id = $row["id"];
                      $first = $row["First_Name"];
                      $last = $row["Last_Name"];
                      $tel = $row["Tel_Number"];
                      $tel_2 = $row["Mobile_Number"];
                      $email = $row["Email_Address"];
                      $dob = $row["D.O.B."];
                      $nic = $row["NIC_Number"];
                      $gender = $row["Gender"];
                      $code = $row["Course_code"];
                      $date = $row["Requested_Date"];

                      echo "<tr>";
                      echo "<td>".$row["id"]. "</td>";
                      echo "<td>".$row["First_Name"]. "</td>";
                      echo "<td>".$row["Last_Name"]. "</td>";
                      echo "<td>".$row["Tel_Number"]. "</td>";
                      echo "<td>".$row["Mobile_Number"]. "</td>";
                      echo "<td>".$row["Email_Address"]. "</td>";
                      echo "<td>".$row["D.O.B."]. "</td>";
                      echo "<td>".$row["NIC_Number"]. "</td>";
                      echo "<td>".$row["Gender"]. "</td>";                      
                      echo "<td>".$row["Course_code"]. "</td>";
                      echo "<td>".$row["Requested_Date"]. "</td>";
                      echo "<td>".$row["status"]. "</td>";
                      echo "<td>". "<a href='' style='background-color: blue;'> Call </a>". "</td>";
                      echo "<td>". "<a style='background-color: lightseagreen;' href='request-info.php?id=$id&first=$first&last=$last&tel=$tel&tel_2=$tel_2&email=$email&dob=$dob&nic=$nic&gender=$gender&code=$code&date=$date'> Approve </a>". "</td>";
                      echo "<td>". "<a href=''> Reject </a>". "</td>";
                      echo "</tr>";

                      
                     }
                   } else {
                        echo "0 results";
                   }
                 ?>

                </tbody>

            </table>

     </div>

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