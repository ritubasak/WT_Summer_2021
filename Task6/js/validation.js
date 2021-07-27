
function validateForm() {
    var fname = document.getElementById("fname").value;
    var pass = document.getElementById("pass").value;
    var email = document.getElementById("email").value;
    var comment = document.getElementById("comment").value;
	
    var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var res = patt.test(email);
    
    if (fname == "" || fname.length < 6 ) {
     document.getElementById("errorfname").innerHTML="Please fill out full name";
      return false;
    }
if ( pass == "" ) {
     document.getElementById("errorpass").innerHTML="Please fill out password";
      return false;
    }
   if(!res)
    {
      document.getElementById("errormail").innerHTML="Email format is not correct";
      return false; 
    }
	
    if ( comment == "" ) {
     document.getElementById("errorcomment").innerHTML="Please fill out comment section";
      return false;
    }
  }



  function myfunc()
  {
alert("hellow world");
  }