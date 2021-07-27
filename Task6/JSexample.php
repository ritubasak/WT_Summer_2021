<html>
<head>
<script src="js/validation.js"></script>
</head>
<body>

<form action="" onsubmit="return validateForm()" method="post">
  <fieldset><table>
  First Name: <input type="text" id="fname" onkeyup="nameval()" name="fname"><br><br><p id="errorfname"></p>
  Password: <input type="password" id="pass" name="pass"><br><br><p id="errorpass"></p>
  Email: <input type="text" id="email" name="email"><br><br><p id="errormail"></p>
  Comment:<textarea name="comment" id="5" cols="40" rows="6" id="comment" ></textarea><p id="errorcomment"></p>
  Gender:<input type="radio" name="gender">Female
		<input type="radio" name="gender">Male
		<input type="radio" name="gender">Other
		
 <br> 
 Please Choose a hobby:
        <input type="checkbox" name="hobby">Singing
		<input type="checkbox" name="hobby">Danching
		<input type="checkbox" name="hobby">Reading<br>
  Please Choose a file:	<input type="file">	<br>
  <input type="submit" value="Submit">
  <button id="btn" onclick="myfunc()" >Click </button>
</table></fieldset></form>



</body>
</html>
