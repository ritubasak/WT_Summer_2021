<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Validation</title>
  </head>
  <body>
  
  <?php
         
         $Rname = $Rmail = $Rgender = $Rpass = $Rcomment = "";
         $name = $email = $pass = $gender = $comment = $hobby = "";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") 
		 {
            if (empty($_POST["name"])) 
			{
               $Rname = "Name is required";
            }
			else 
			{
               $name = test_input($_POST["name"]);
            }
            
            if (empty($_POST["email"])) 
			{
               $Rmail = "Email is required";
            }
			else 
			{
               $email = test_input($_POST["email"]);

            }
            
            if (empty($_POST["pass"])) 
			{
               $Rpass = "Password is required";
            }
			else 
			{
               $pass = test_input($_POST["pass"]);
            }
            
            if (empty($_POST["comment"])) 
			{
               $Rcomment = "Comment is required";
            }
			else 
			{
               $comment = test_input($_POST["comment"]);
            }
            
            if (empty($_POST["gender"])) 
			{
               $Rgender = "Gender is required";
            }
			else 
			{
               $gender = test_input($_POST["gender"]);
            }
         }
         
         function test_input($data) 
		 {
			 $data = trim($data);
             $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
      ?>
	  
	  
  <form action="" method="POST">
    <fieldset>
      <legend><h2>Registration Form</h2></legend>
     
     
      <?php 
         echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
    
    <table border="0">

      <tr>
       
        <td>Full Name:</td>
		<td></td>
		<td></td>
        <td><input name="name" type="text">
		<span class = "error">* <?php echo $Rname;?></span>
		</td>		
      </tr>

      <tr>
       
        <td>E-mail:</td>
		<td></td>
		<td></td>
        <td><input name="email" type="text">
		<span class = "error">* <?php echo $Rmail;?></span>
		</td>

      </tr>
	  
	   <tr>
        
        <td>Password:</td>
		<td></td>
		<td></td>
        <td><input name="pass" type="password">
		<span class = "error">* <?php echo $Rpass;?></span>
		</td>

      </tr>
	  
	  <tr>
       
        <td>Comment:</td>
		<td></td>
		<td></td>
        <td><textarea name="Basak" id="5" cols="40" rows="6">Enter your comment here!</textarea>
		<span class = "error">* <?php echo $Rcomment;?></span>
        </td>

      </tr>
	  <tr>
        
        <td>Gender:</td>
		<td></td>
		<td></td>
		<td>
        <input type="radio" name="gender">Female
		<input type="radio" name="gender">Male
		<input type="radio" name="gender">Other
		<span class = "error">* <?php echo $Rgender;?></span>

		</td>

      </tr>
	  
	   <tr>
        
        <td>Please Choose a hobby:</td>
		<td></td>
		<td></td>
        <td>
		<input type="checkbox" name="hobby">Singing
		<input type="checkbox" name="hobby">Danching
		<input type="checkbox" name="hobby">Reading
		</td>

      </tr>
	  
	  <tr>
       
        <td>Please Choose a file:</td>
		<td></td>
		<td></td>
        <td> <input type="file"</td>
      </tr>

    </table>
	
	  <input type="submit" value="Submit">
	  <input type="reset">
	  
	</fieldset>
  </form>
  
  <?php
         echo "<h2>Entered Data are:</h2>";
         echo $name;
         echo "<br>";
         
         echo $email;
         echo "<br>";
         
         echo $pass;
         echo "<br>";
         
         echo $comment;
         echo "<br>";
         
         echo $gender;
		 echo "<br>";
		 
		 echo $hobby;

      ?>
	  
  </body>
</html>
