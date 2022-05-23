<?php
      if(isset($_POST['submit'])){
        $name = htmlspecialchars(stripslashes(trim($_POST['name'])));
        // $subject = htmlspecialchars(stripslashes(trim($_POST['subject'])));
        $email = htmlspecialchars(stripslashes(trim($_POST['email'])));
        $message = htmlspecialchars(stripslashes(trim($_POST['message'])));
        if(!preg_match("/^[A-Za-z .'-]+$/", $name)){
          $name_error = 'Invalid name';
        }
       
        if(!preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/", $email)){
          $email_error = 'Invalid email';
        }
        if(strlen($message) === 0){
          $message_error = 'Your message should not be empty';
        }
      }
      if(isset($_POST['submit']) && !isset($name_error) && !isset($subject_error) && !isset($email_error) && !isset($message_error)){
        $to = 'youremail@addres.com'; // edit here
        $body = " Name: $name\n E-mail: $email\n Message:\n $message";
        if(mail($to, $subject, $body)){
          echo '<p style="color: green">Message sent</p>';
        }else{
          echo '<p>Error occurred, please try again later</p>';
        }
      }
    ?>
    
    
  