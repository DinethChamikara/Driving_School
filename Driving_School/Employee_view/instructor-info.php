<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="instructor-info.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    
    <div class="header">

        <nav>
            <div class="logo"><a href="#">Logo</a></div>
            <ul>
                <li><a href="http://localhost/Driving_School/Employee_view/Index.html"> Home </a></li>
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
    
        <h1> Instructor Information </h1>
    
    </div>

    <center> <h2> Mr.R.M.B. Bandara </h2> </center>

          <div class="teacher">

               <div class="image">
                <img src="http://localhost/Driving_School/images/images.png" width="400px">
               </div>
               <div class="info">

                <table>

                    <caption>Personal Details</caption>

                    <?php
                    
                    $id = $_GET["id"];
                    $first_name = $_GET["first"];
                    $last_name = $_GET["last"];
                    $nic = $_GET["nic"];
                    $date = $_GET["date"];
                    $email = $_GET["email"];
                    $post = $_GET["post"];
                    $tel = $_GET["tel"];
                    
                    ?>

                   <tbody>
                      <tr>
                          <td> Full Name :- </td>
                          <td> <?php echo "$first_name"; ?> </td>
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
                        <td> E-mail :- </td>
                        <td><?php echo "$email"; ?></td>
                    </tr>

                    <tr>
                        <td> Registration Date :- </td>
                        <td><?php echo "$date"; ?></td>
                    </tr>

                    <tr>
                        <td> Current Post :- </td>
                        <td> <?php echo "$post"; ?> </td>
                    </tr>

                   </tbody>

                 </table>
               </div>

          </div>

       <section>   
        
        <center> <h1> Other Instructor Details </h1> </center>

        <p> Mr. R.M.B. Bandara is a talented teacher and "A" class driving instructor. He works with us since 2014. Mr. R.M.B. Bandara is a talented teacher and "A" class driving instructor. He works with us since 2014. Mr. R.M.B. Bandara is a talented teacher and "A" class driving instructor. He works with us since 2014. Mr. R.M.B. Bandara is a talented teacher and "A" class driving instructor. He works with us since 2014.</p>

        <div class="contact">

            <h3> Find About Other Instructors  <a href="http://localhost/Driving_School/Employee_view/resources.html"> Driving Instructors </a></h3>
      
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
                   <h4>Basic Links</h4>
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