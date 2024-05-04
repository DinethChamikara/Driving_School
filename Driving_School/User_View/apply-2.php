<?php

date_default_timezone_set("America/New_York");
$date = date("Y-m-d");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="apply-2.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    
    <div class="header">

        <nav>
            <div class="logo"><a href="#">Logo</a></div>
            <ul>
                <li><a href="http://localhost/Driving_School/User_View/Index.html"> Home </a></li>
                <li><a href="http://localhost/Driving_School/User_View/about us.html"> About Us </a></li>
                <li><a href="http://localhost/Driving_School/User_View/contact.html"> Contact </a></li>
                <li id="services"><a href="#"> Services </a>
                  <ul class="dropdown-1">
                   <li> <a href="http://localhost/Driving_School/User_View/services/learning_material.html"> Various Materials</a> </li> <br>
                   <li id="Driving">
                     <li><a href="#" id="1"> Driving Training </a></li> 
                     <ul class="dropdown-2">
                        <li> <a href="http://localhost/Driving_School/User_View/services/Common vehicles.html"> Common Vehicles</a> </li> <br>
                        <li> <a href="http://localhost/Driving_School/User_View/services/Heavy Vehicles.html"> Heavy Vrhicles</a> </li> <br>
                     </ul>
                  </li>  
                  </ul>
           </li>
                <li><a href="http://localhost/Driving_School/resourses.html"> Resources </a></li>
            </ul>
            <div class="buttons">
               <!--<input type="button" value="requests" onclick="location.assign('requests.php')">-->
               <a href="http://localhost/Driving_School/User_View/apply-2.html"> Apply </a>
               <a href="http://localhost/Driving_School/User_View/Login.html"> Login </a>
           </div>
        </nav>

        <h1> Join Wth Us Today to get a different experience of <br> driving </h1>
    
    </div>


<section>  
    <div class="registration">

          <center> <h1> Online Registration Form </h1> </center>

          <div class="form">

            <div class="progress-bar">
               <div class="progress-step progress-step-active" data-title="Personal Details"></div>
               <div class="progress-step" data-title="Course Details"></div>
               <div class="progress-step" data-title="Account Details"></div>
            </div> 

         <form action="../functions/user-info.php?date=<?php echo $date ?>" method="post">
            <div class="form-step form-step-active" id="form1">  
              <div class="inputs"> 
                <div class="input">
                    <label> First Name : </label>
                    <input type="text" placeholder=" Your Name" name="First_Name" required>
                 </div>
                 <div class="input">
                    <label> Last Name : </label>
                    <input type="text" placeholder=" Your Name" name="Last_Name" required>
                 </div> 
                  <div class="input">
                     <label> Date of Birth </label>
                     <input type="date" placeholder=" your birthday" name="DOB"  required>
                  </div>
                  <div class="input">
                     <label> NIC Number </label>
                     <input type="text" placeholder=" NIC number" name="NIC"  required>
                  </div> 
                  
                  <div class="input">
                     <label> Gender </label>
                     <select type="text" placeholder="Your Gender" name="Gender"  required>
                       <option value="">Select Your Gender </option>
                       <option value="Male"> Male </option>
                       <option value="Male"> Female </option>
                     </select>
                  </div> 

                  <div class="input">
                    <label> Telephone no </label>
                    <input type="number" placeholder=" telephone no" name="tel" required maxlength="10">
                 </div> 

                 <div class="input">
                    <label> Mobile Number </label>
                    <input type="tel" placeholder=" mobile number" name="tel-2" required maxlength="10">
                 </div> 

                 <div class="input">
                    <label> Email Address </label>
                    <input type="email" placeholder=" email id" name="email" required>
                 </div> 
              </div>
<br><br>
              <a class="next-btn"> Save & Next </a> 
            </div>

            <div id="form2" class="form-step">

               <h3> Select Your Driving Courses </h3>
            
               <select type="text" name="package" required>
                  <option value=""> Driving Course Package </option>
                  <option value="cars"> Cars Only </option>
                  <option value="bikes"> Motor Bicycles Only </option>
                  <option value="threewheel"> Three Wheels Only </option>
                  <option value="trucks"> Trucks Only </option>
                  <option value="lorry"> Lorries Only </option>
                  <option value="motor"> Motor Coach Only </option>
                  <option value="C&B"> Cars, Bikes </option>
                  <option value="C&T"> Bikes, Three Wheels </option>
                  <option value="C&B&T"> Cars, Bikes, Three Wheels </option>
                  <option value="T&L"> Trucks, Lorry </option>
                  <option value="L&M"> Motor Coach, Lorry </option>
                </select>
              <br><br>
               <a class="btn-group prev-btn">Previous</a>
               <a class="next-btn"> Save & Next </a>
            </div>

            <div class="form-step" id="form3">

               <div class="input">
                  <label> Enter a Username  :- </label>
                  <input type="text" placeholder=" Enter Username" name="user" required>
               </div> 

               <div class="input">
                  <label> Create a password  :- </label>
                  <input type="password" placeholder="Enter a Password" name="passwd" required>
               </div> 

               <div class="input">
                  <label> Confirm Password   :- </label>
                  <input type="password" placeholder="Enter a Password" required >
               </div> 
               
               <a class="btn-group prev-btn">Previous</a>
               <input type="submit" placeholder="Submit" class="btn-group">

            </div>
            </form>
            </div>
            

         </div> 

    </div>  
</section>    

<script>

const prevbtn = document.querySelectorAll(".prev-btn");
const nextbtn = document.querySelectorAll(".next-btn");
const progress = document.getElementById(".progress");
const formStep = document.querySelectorAll(".form-step");
const ProgressSteps = document.querySelectorAll(".progress-step");

let formstepnum = 0;

nextbtn.forEach((btn) => {
   btn.addEventListener("click", () => {
     formstepnum++;
     UpdateFormSteps();
     ChangeProgressBar();
   });
});

prevbtn.forEach((btn) => {
   btn.addEventListener("click", () => {
     formstepnum--;
     UpdateFormSteps();
     ChangeProgressBar();
   });
});

function UpdateFormSteps() {

   formStep.forEach(formstep => {
      formstep.classList.contains("form-step-active") &&
      formstep.classList.remove("form-step-active");
   });

   formStep[formstepnum].classList.add("form-step-active");
}

function ChangeProgressBar() {
  ProgressSteps.forEach((progressStep, count) => {
      if (count < formstepnum + 1) {
         progressStep.classList.add("progress-step-active");
      } else {
         progressStep.classList.remove("progress-step-active")
      }
  });
}

</script>

<!--<select> 
                  <option selected disabled> Select Your Course </option>
                  <option value=""> Car Driving </option>
                  <option value=""> Motor Cycles </option>
                  <option value=""> Three Wheels </option>
                  <option value=""> Lorry Driving </option>
                  <option value=""> Motor Coach </option>
               </select>-->

</body>
</html>