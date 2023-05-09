<?php

 require_once "library/PHPMailer.php";
 require_once "library/Exception.php";
 require_once "library/OAuth.php";
 require_once "library/POP3.php";
 require_once "library/SMTP.php";

 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;

 $name = $_POST['name'];
 $email = $_POST['email'];
 $subject = $_POST['subject'];
 $message = $_POST['message'];

   $mail = new PHPMailer;
   //Enable SMTP debugging. 
   $mail->SMTPDebug = 2;                               
   //Set PHPMailer to use SMTP.
   $mail->isSMTP();            
   //Set SMTP host name                          
   $mail->Host = 'smtp.gmail.com'; //host mail server
   //Set this to true if SMTP host requires authentication to send email
   $mail->SMTPAuth = true;                          
   //Provide username and password     
   $mail->Username = 'admiralteam0004@gmail.com';   //nama-email smtp          
   $mail->Password = 'tgjlwntrryrsbljs';           //password email smtp
   //If SMTP requires TLS encryption then set it
   $mail->SMTPSecure = 'tls';                           
   //Set TCP port to connect to 
   $mail->Port = 587;                                   

   $mail->From = 'Admiral@gmail.com'; //email pengirim
   $mail->FromName = "Thanks your message is being viewed !"; //nama pengirim

	$mail->addAddress($_POST['email'], $_POST['name']); //email penerima

   $mail->isHTML(true);

   $mail->Subject = $_POST['subject']; //subject
   $mail->Body    = $_POST['message']; //isi email
	   $mail->AltBody = "PHP mailer"; //body email (optional)

	   if(!$mail->send()) 
	   {
		   echo "Mailer Error: " . $mail->ErrorInfo;
	   } 
	   else 
	   {
		   echo "<h1>Email has been send !</h1> <a href='index.html'>return to Home</a>";
	   }
	
	    echo "<script>alert('Check your email notification !')</script>";
		echo "<script type='text/javascript'> document.location = 'index.html?page=index.html';</script>";

<<<<<<< HEAD
      // catatan jika ingin add di db :

      // if(isset($_POST["Daftar"])){

         // yang daftar di post itu adalah name di button, lalu di index.html diubah jadi index.php
         // kemudian, yg di echo script type diatas ganti index.html jadi index.php

         // $nama_user = $_POST["name"];
         // $email = $_POST["email"];
         // $subject = $_POST["subject"];
         // $deskripsi = $_POST["message"];
         
         // $query_sql = "INSERT INTO message (Nama_User, Email, Subject_User,Deskripsi_User) 
         //                                     VALUES ('$nama_user', '$email', '$subject','$deskripsi')";
         
         // if (mysqli_query($conn, $query_sql)) {
         //       echo "<h1>message berhasil terdaftar</h1>
                    
         //          ";
         // } else {
         //       echo "Message Gagal : " . mysqli_error($conn);
         // }
         // } 
         
         // /* menutup koneksi */
         // mysqli_close($conn);
          
         // }
=======
>>>>>>> d6764541807015c5fe024c2d25a9ebd069488305

?>