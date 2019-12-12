
<?php


if(isset($_POST["emailid"]))
{
 $email = '';
 $password = '';
 $con-pass = '';
 $name = '';
 $birth = '';
 $gen = '';

 $email_error = '';
 $password_error = '';
 $con-pass_error = '';
 $name_error = '';
 $birth_error = '';
 $gen_error = '';
 $captcha_error = '';

 if(empty($_POST["emailid"]))
 {
  $email_error = 'Email name is required';
 }
 else
 {
  $email = $_POST["emailid"];
 }

 if(empty($_POST["password"]))
 {
  $password_error = 'Password name is required';
 }
 else
 {
  $password = $_POST["password"];
 }
 if(empty($_POST["cpassword"]))
 {
  $email_error = 'Password Confirmation is required';
 }
 
 if(empty($_POST["mem_name"]))
 {
  $name_error = ' name is required';
 }
 else
 {
  $name = $_POST["mem_name"];
 }
    
     if(empty($_POST["bdate"]))
 {
  $birth_error = 'Date of Birth name is required';
 }
 else
 {
  $birth = $_POST["bdate"];
 }
    
    
 if(empty($_POST["gender"]))
 {
  $gen_error = 'Password is required';
 }
 else
 {
  $gen = $_POST["gender"];
 }

 if(empty($_POST['g-recaptcha-response']))
 {
  $captcha_error = 'Captcha is required';
 }
 else
 {
  $secret_key = '6Ld0s8YUAAAAAMlQP-aWWnzEzyYeivWjb5ZaX_CP';

  $response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$_POST['g-recaptcha-response']);

  $response_data = json_decode($response);

  if(!$response_data->success)
  {
   $captcha_error = 'Captcha verification failed';
  }
 }

 if( $email_error == '' && $password_error == ''&& $con-pass_error == '' && $name_error == '' && $birth_error == '' && $gen_error == '' && $captcha_error == '' &&)
 {
  $data = array(
   'success'  => true
  );
 }
 else
 {
  $data = array(
   'email_error' => $email_error,
   'password_error' => $password_error,
   'con-pass_error '  => $con-pass_error,
   'name_error' => $name_error,
   'birth_error' => $birth_error,
   'gen_error' => $gen_error,
   'captcha_error'  => $captcha_error
  );
 }

 echo json_encode($data);
}

?>
