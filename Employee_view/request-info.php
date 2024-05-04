<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="request-info.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <div class="header">

        <nav>
            <div class="logo"><a href="#">Logo</a></div>
            <ul>
                <li><a href="Index.html"> Home </a></li>
                <li><a href="students.html"> Students </a></li>
                <li><a href="/User_View/contact.html"> Contact </a></li>
                <li id="services"><a href="#"> Services </a>
                  <ul class="dropdown-1">
                   <li> <a href="services/learning_material.html"> Various Materials</a> </li> <br>
                   <li> <a href="services/Common vehicles.html"> Common Vehicles</a> </li> <br>
                   <li> <a href="services/Heavy Vehicles.html"> Heavy Vrhicles</a> </li> <br>
                  </ul>
           </li>
                <li><a href="/Employee_view/resources.html"> Resources </a></li>
            </ul>
            <div class="buttons">
                <!--<input type="button" value="requests" onclick="location.assign('requests.php')">-->
                <a href="http://localhost/Driving_School/Employee_view/requests.php"> requests </a>
                <a href="http://localhost/Driving_School/User_View/Login.html"> Login </a>
            </div>
        </nav>

    </div>   

  <div class="container">

     <center> <h1> <u> Student Data Form </u> </h1> </center>

    <?php

     require_once "../Database/connection.php";

     $id = $_GET["id"];
     $first_name = $_GET["first"];
     $last_name = $_GET["last"];
     $dob = $_GET["dob"];
     $tel = $_GET["tel"];
     $NIC_Number = $_GET["nic"];
     $email = $_GET["email"];
     $tel = $_GET["tel"];
     $code = $_GET["code"];
     $gender = strtolower($_GET["gender"]);
     $date = $_GET["date"];

    ?>
     
     <div class="data-form">

        <form action="http://localhost/Driving_School/functions/requests_edit.php?id=<?php echo $id; ?>&date=<?php echo $date; ?>" method="post">
         <div class="user-inputs">

              <h4> User Inputs </h4>

            <div class="input">
            <label> First Name : </label>
            <input type="text" placeholder=" Your Name" required value="<?php echo $first_name ?>" name="first">
         </div>
         <div class="input">
            <label> Last Name : </label>
            <input type="text" placeholder=" Your Name" required value="<?php echo $last_name?>" name="last" >
         </div> 
          <div class="input">
             <label> Date of Birth </label>
             <input type="date" placeholder=" your birthday" required value="<?php echo $dob?>" onfocus="this.type='text'" onblur="this.type='date'" name="dob">
          </div>
          <div class="input">
             <label> Mobile Number</label>
             <input type="tel" placeholder=" mobile number" required value="<?php echo $tel?>" name="tel">
          </div> 
         <!-- <div class="input">
             <label> telephone Number</label>
             <input type="tel" placeholder=" Telephone number" required value="<?php echo $tel?>" name="tel">
          </div> --->
          <div class="input">
             <label> NIC Number </label>
             <input type="text" placeholder=" NIC number" required value="<?php echo $NIC_Number?>" name="nic">
          </div> 
          <div class="input">
             <label> Email Address </label>
             <input type="email" placeholder=" email id" required value="<?php echo $email?>" name="email">
          </div> 
          
          <div class="input">
             <label> Gender </label>
             <select type="text" placeholder="Your Gender" required name="gender">

              <?php

                 $genders = array("male","female","other");
                 
                 foreach ($genders as $x) {
                    if ($gender == $x) {
                          echo "<option value='$gender' selected>".$gender."</option>";
                    } else {
                          echo "<option value='$gender'>".$gender."</option>";
                    }   
                 }
                   
                 ?>
             </select>
          </div> 
         </div> 

         <div id="pack"> 

            <h4> Employee Inputs </h4>

            <div class="input">
               <label> Batch_Year </label>
               <input type="number" placeholder="Batch" name="batch" required>
            </div> 

           <h5> Driving Course Package :- </h5>

           <select type="text" name="package" placeholder="Your Pakage" required value="<?php echo $code?>">
            
                <?php

                  $sql = "SELECT * FROM `course_pakages`";
                  $courses = $conn->query($sql);

                  while ($row = $courses->fetch_assoc()) {
                      $name = $row["Course_Name"];
                      $course = $row["Course_Code"];

                     // echo "<option value='$course'>".$code."</option>";

                   if ($course == $code) {
                     echo "<option value='$course' selected>".$name."</option>";
                    } else {
                     echo "<option value='$course'>".$name."</option>";
                    }           
                  }  
                   
                ?>

          </select>
         </div> 

        <input type="submit" value="Submit" class="submit">  


        </form>

  </div>
     </div>

  </div>

</body>
</html>

<!----

<option value="default"> Driving Course Package </option>
            <option value="cars"> Cars Only </option>
            <option value="bikes"> Motor Bicycles Only </option>
            <option value="wheel"> Three Wheels Only </option>
            <option value="trucks"> Trucks Only </option>
            <option value="lorry"> Lorries Only </option>
            <option value="motor"> Motor Coach Only </option>
            <option value="C&B"> Cars, Bikes </option>
            <option value="C&T"> Bikes, Three Wheels </option>
            <option value="C&B&T"> Cars, Bikes, Three Wheels </option>
            <option value="T&L"> Trucks, Lorry </option>
            <option value="L&M"> Motor Coach, Lorry </option>

courses

<option value='<//?=//$row["Course_Code"]/?>"> <//?=$row["Course_Name"];?> </option>

<option value="" selected hidden>Select Gender </option>
               <option value="Male"> Male </option>
               <option value="Female"> Female </option>
               <option value="Other"> Other </option>

---->               