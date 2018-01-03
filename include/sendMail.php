<?php
if(isset($_POST['submit'])) 
{
 
    $firstname = $_POST['firstname']; 
    $lastname = $_POST['lastname']; 
    $email_from = $_POST['email']; 
    $message = $_POST['message']; 
 
   // Function to validate against any email injection attempts
  function IsInjected($str)
  {
    $injections = array('(\n+)',
                '(\r+)',
                '(\t+)',
                '(%0A+)',
                '(%0D+)',
                '(%08+)',
                '(%09+)'
                );
    $inject = join('|', $injections);
    $inject = "/$inject/i";
    if(preg_match($inject,$str))
      {
      return true;
      }
      else
        {
        return false;
      }     
  }

  //Validate the form 
  if(empty($firstname) || empty($lastname) || empty($email_from) || empty($message)) 
  {
      echo ('<script type="text/javascript">alert("Please fill in all the form fields!"); window.location.href = "../index.php#contact";</script>');
  }
  else if(IsInjected($email_from))
  {
      echo "IsInjected stuck";
      echo ('<script type="text/javascript">');
      echo ('alert("Please enter a valid e-mail adress!");');
      echo ('window.location.href = "../index.php#contact";');
      echo ('</script>');
  }
  else 
  { 
    $email_to = "esmeraldatijhoff@yahoo.com";
    $email_subject = "New message from my Portfolio website";
    $email_body = "$firstname $lastname has send you a message.\n".
         "Please send a respons to $email_from.\n".
         "Here is the message.\n\n".
        "$message\n".
       
      // create email headers
      $headers = 'From: '.$email_from."\r\n".
      'Reply-To: '.$email_from."\r\n" .
      'X-Mailer: PHP/' . phpversion();
      mail($email_to, $email_subject, $email_body, $headers);  
      
      // empty the form
      $_POST=array();
      
      echo ('<script type="text/javascript">alert("Your message has been send!"); window.location.href = "../index.php";</script>');
    }  
  } 

  else 
  {
    //This page should not be accessed directly. Need to submit the form.
    echo ('<script type="text/javascript">alert("Error, you need to fill in the contact form.");   window.location.href = "../index.php#contact";</script>');
  }
?>