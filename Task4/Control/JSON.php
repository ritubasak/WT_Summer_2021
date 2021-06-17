<?php
    $validatename = "";
    $validateemail = $validatepass = $validatecmt= "";
    $validatecheckbox = "";
    $validateradio = "";
    $h1 = $h2 = $h3 = $infoh = $infog = $target_file=  "";
    $name = $email = $gender = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $name = $_REQUEST["fname"];
        $email = $_REQUEST["email"];
        $cmt = $_REQUEST["comment"];

        if (empty($_REQUEST["fname"]) || (strlen($_REQUEST["fname"]) < 3))
        {
            $validatename = "Please enter your name!";

        }
        else
        {
            $validatename = "Your name is " . $name;
        }

        if (empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email))
        {
            $validateemail = "Please enter your email!";
        }
        else
        {
            $validateemail = "Your email is " . $email;
        }

        if (empty($_REQUEST["comment"]) || (strlen($_REQUEST["comment"]) < 3))
        {
            $validatecmt = "Please write something!";

        }
        else
        {
            $validatecmt = "Your comment is " . $cmt;
        }
        
        if(isset($_POST['password'])) {
            $password = $_POST['password'];
            
            $number = preg_match('@[0-9]@', $password);
            $uppercase = preg_match('@[A-Z]@', $password);
            $lowercase = preg_match('@[a-z]@', $password);
            
            if(strlen($password) < 6 || !$number || !$uppercase || !$lowercase) {
                $validatepass = "Password must be at least 6 characters and must contain at least one Number, one Upper case & one Lower case letter";
            } else {
                $validatepass = "Your password is entered";
            }
        }

        if (!isset($_REQUEST["hobby1"]) && !isset($_REQUEST["hobby2"]) && !isset($_REQUEST["hobby3"]))
        {
            $validatecheckbox = "Please select at least one hobby!";

        }
        else
        {
            $infoh = "Please choose! ";
            if (isset($_REQUEST["hobby1"]))
            {
                $h1 = $_REQUEST["hobby1"];
            }
            if (isset($_REQUEST["hobby2"]))
            {
                $h2 = $_REQUEST["hobby2"];
            }
            if (isset($_REQUEST["hobby3"]))
            {
                $h3 = $_REQUEST["hobby3"];
            }
        }
        if (isset($_REQUEST["gender"]))
        {
            $infog = "Your are ";
            $validateradio = $_REQUEST["gender"];
        }
        else
        {
            $validateradio = "Please select your gender!";
        }
        $target_file = "files/".$_FILES["file"]["name"];

        if(move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)){
            echo "Your file is uploaded successfully!".$_FILES["file"]["name"];
            echo "<img src=".$target_file.">";
        } else{
            echo "Sorry, there was an error uploading your file.";
        }

    }

$formdata = array('fname'=>$_POST['fname'],
				  'email'=>$_POST['email'],
				  'password'=>$_POST['password'],
				  'comment'=>$_POST['comment'],
				  'gender'=>$_POST['gender'],
				  'hobby1'=>$_POST['hobby1'],
				  'hobby1'=>$_POST['hobby1'],
				  'hobby2'=>$_POST['hobby2'],
				  'hobby3'=>$_POST['hobby3'],
				  'file'=>$_POST['file']
				  );
		
$jsondata = json_encode($formdata, JSON_PRETTY_PRINT);

if(file_put_contents("data.json",$jsondata))
{
	echo "Data is successfully saved!";
}
else
	echo "no data is saved!";

?>
