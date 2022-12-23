<?php 
if(isset($_POST['firstName'])||isset($_POST['lastName']))//||isset($_POST['email']
{
   $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName']; 
    //$email = $_POST['email'];
}
$errors = [
    'firstNameError'=>'',
    'lastNameError'=>'',
];
if(isset($_POST['submit']))
{
    //echo  $firstName . ' ' . $lastName . ' ' . $email;
    


    if(empty( $firstName))
    { 
        $errors['firstNameError'] = 'يرجى ادخال الاسم الاول';
        

    } if(empty( $lastName))
    {
        $errors['lastNameError'] = 'يرجى ادخال الاسم الأخير';


    }
    if(!array_filter($errors))
    {
        $firstName = mysqli_real_escape_string($conn ,$_POST['firstName']);
        $lastName = mysqli_real_escape_string($conn , $_POST['lastName']);
        $sql = "INSERT INTO users(firstName ,lastName ) 
        VALUES ('$firstName' , '$lastName' )"; 
          if( mysqli_query($conn , $sql))
          {
              header('location:'. $_SERVER['PHP_SELF'] );
          }else 
          {
              echo 'Error :' . mysqli_error($conn);
      
          }
    }
    
}
