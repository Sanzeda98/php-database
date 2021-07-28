<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
  </head>
  <body>
  	<center>
  		
	    <h1>Registration Form</h1>

	    <?php
	      $firstNameErr = $lastNameErr = $genderErr = $dobErr=$errorMessage=$religionErr =$emailErr=$successfulMessage=$userNameErr=$passwordErr="";

	      $firstName = ""; 
	      $lastName = "";
	      $gender = "";
	      $dob="";
	      $religion= "";
	      $present_address="";
	      $parmanent_address="";
	      $phone="";
	      $email="";
	      $link="";
	      $userName="";
	      $password="";

	      $successfulMessage=$errorMessage="";
             $flag=false;
             

	      if($_SERVER["REQUEST_METHOD"] == "POST")
	       //{

	        if(empty($_POST['fname'])) {
	          $firstNameErr = "*Please fill up the first name properly";
	        }
	        else {
	          $firstName = $_POST['fname'];
	        }

	        if(empty($_POST['lname'])) {
	          $lastNameErr = "*Please fill up the last name properly";
	        }
	        else {
	          $lastName = $_POST['lname'];
	        }

	        if(empty($_POST['dob']))
                {
                    $dobErr="*Date of birth can not be  empty.";
                      
                }
                if(empty($_POST['religion']))
                {
                    $religionErr="*Religion can not be empty";
                }

	        if(empty($_POST['email']))
                {
                    $emailErr="* Email can not be  empty.";
                    
                    
                }
                if(empty($_POST['username']))
                {
                    $userNameErr="* User name can not be empty.";
                    
                }
                if(empty($_POST['password']))
                {
                    $passwordErr="* Password can not be  empty.";
                    
                    
                }
	      

	    ?>

	    <form action="databaseInsertion.php" method="POST">
	      <fieldset>
	        <legend>Basic Information: </legend>

	        <label for="fname">FirstName:</label>
	        <input type="text" name="fname" id="fname" value="<?php echo $firstName;?>">
	        <br>
	        <p style="color:red"><?php echo $firstNameErr; ?></p>

	        <label for="lname">LastName:</label>
	        <input type="text" name="lname" id="lname" value="<?php echo $lastName ?>">
	        <br>
	        <p style="color:red"><?php echo $lastNameErr; ?></p>

	        <label for="gender">Choose Gender:</label>

	        <input type="radio" name="gender" 
	        <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male 

	        <input type="radio" name="gender" 
	        <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female 

	        <input type="radio" name="gender" 
	        <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other
	        <p style="color:red"><?php echo $genderErr; ?></p>

	        <label for="dob">Date of Birth:</label>

                <input type="date" id="dob" name="dob" ><span id="dobErr" style="color : red;"><?php echo $dobErr; ?></span>
                <br><br>
                <label for="religion">Religion:</label>
                <select name="religion" id="religion" >
                    <option value="None">None</option>
                    <option value="Islam">Islam</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Cristan">Cristan</option>
                    <option value="Buddhism">Buddhism</option>
                </select>
                <span id="religionErr" style="color : red;"><?php echo $religionErr; ?></span>

	      </fieldset>
	      <br>
	     <fieldset>
                <legend>Contact Information:</legend>
                <label for="address">Present Address:</label>
                <br>
                <textarea name="address" id="address" cols="40" rows="3"></textarea>
                <br>
                <label for="paddress">Parmanent Address:</label>
                <br>
                <textarea name="paddress" id="paddress" cols="40" rows="3"></textarea>
                <br><br>
                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" placeholder="01700-554435" pattern="[0-9]{5}[0-9]{6}">
                <br><br>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" placeholder="abcd@gmail.com" pattern=".+@+.+.com" ><span id="emailErr" style="color : red;"><?php echo $emailErr; ?></span>
                <br><br>
                <label for="link">Personal Website Link(url):</label>
                <input type="url" name="link" id="link" placeholder="https://example.com">
                <br>
                <br>
                

            </fieldset>
	      <fieldset>
                <legend>Account Information:</legend>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" ><span style="color : red;"><?php echo $userNameErr; ?></span>
                <br><br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" pattern=".{4,}" ><span style="color : red;"><?php echo $passwordErr; ?></span>
                <br><br>
                
                <br><br>
                <span style =" color : red;"><?php echo "<b>" .$successfulMessage  ."</b>"; ?></span>
                <span style =" color : red;"><?php echo "<b>" .$errorMessage  ."</b>"; ?></span>
            </fieldset>
			<br>

			<input type="submit" value="Submit">

			</form>
			<br>
		</center>

		<style>
			fieldset{
				width: 35%;
				margin: auto;
			}
		</style>

    </body>
</html>