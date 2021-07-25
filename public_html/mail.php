<?php 

    if(isset($_POST['submit']))
    {
       $email = $_POST['email'];
       $name = $_POST['name'];
       $message = $_POST['message'];
    


$subject = "From Website";
$headers = "From Website" . "\r\n" .
"CC: $email ";
       
$msg= "
Email= $email
Name= $name
Message=$message ";

//  Editable


// This mail for augustmanley@gmail.com 
$to			= "info@novaboosting.com";
$from		= $email;
$headers	= "From:$from\r\nReturn-path:$from";

 $sent= mail($to,$subject,$msg,$headers);

// This is not editable
          if($sent){
            header("Location:index.html");
          } else {
			  echo "Email not sent";
		  }


    }         
  
?>