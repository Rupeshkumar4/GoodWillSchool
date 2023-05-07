<?php
$name = $_POST['Name'];
$visitor_email = $_POST['Email'];
$subject = $_POST['Subject'];
$message = $_POST['Message'];

 $email_from = 'geniusrupeshkumar@gmail.com';
 $email_subject = 'New From Submission';
 $email_body = "User Name: $name.\n".
                 "User Email: $visitor_email.\n".
                     "Subject: $subject.\n".
                     "User Message: $message.\n";


$to = 'mailto:geniusrupeshkumar@gmail.com';

 $headers = "From: $email_from \r\n";

 $headers .= "Reply-To: $visitor_email \r\n";

 mail($to, $email_subject,$email_body,$headers);

 

//  header("Location: contact.html");

$conn = new mysqli('localhost', 'root', '' , 'users_mail'); 
// password is blank 
// test is database name
if($conn->connect_error){
     die('Connection Failed : '.$conn->connect_error);
}
else{
     $stmt = $conn->prepare("insert into message(name,visitor_email,subject,message)
     values(?,?,?,?)");
     $stmt->bind_param("ssss",$name, $visitor_email,$subject, $message);
     $stmt->execute();
     echo "Submitted Successfully.....";
     
     $stmt->close();
     header("Location: home.php");
     $conn->close();
}
?>












<!-- ================================================================================ -->
<!-- <?php 

// if(isset($_POST(submit)))
// {
//      $name = $_POST['Name'];
//      $visitor_email = $_POST['Email'];
//      $subject = $_POST['Subject'];
//      $message = $_POST['Message'];

//      $FromName = "GoodWill"; // website name

//      $fromEmail = "geniusrupeshkumar@gmail.com"; // official email or website email

//      $replyTo = $visitor_email; // visitor email

//      $toemail = "geniusrupeshkumar@gmail.com"; // to whom send mail
     
//      $subject = "New form submission";

//      $email_body = "User Name: .$Name.\n" // <br> to next line
//                 "User Email: .$visitor_email.\n"
//                      "Subject: .$subject.\n"
//                      "User Message: .$message\n";

//       $headers = "MIME-Version: 1.0\n";
//       $headers = "Content-type: text/html; charset=iso-8859-1\n";
//       $headers = "From " ".$FromName." < ".$FromEmail.">\n";
//       $headers  = "Reply-To" .$replyTo."\n";
//       $headers .= "X-Sender: <.$FromEmail.">\n";
//       $headers .= "Cc: testsite <mail@testsite.com>\n"; 
      
//       $headers .= 'X-Mailer: PHP/' . phpversion();
//       $headers .= "X-Priority: 1\n"; 
//       $headers .= "Return-Path: <".$FromEmail.">\n"; 

//       if(mail($toemail,$subject,$message,$headers,'-f',.$fromEmail))
//       {
//           echo "Thanyou <strong> '.$name.', Your message has be sent. We will reply soon as possiable";
//       }
//       else{
//           echo "Sorroy server fail to connect try again after some time";
//       }


// }
// ?> -->