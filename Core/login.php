<?php
$errors = array();
if ($_SERVER['REQUEST_METHOD'] == 'post')
{
    var_dump($_POST);
    /*
    if (isset($_POST['username'],$_POST['password']))
    {
        echo "<h2>Welcome</h2>";
    } else
    {
        $errors['emptyValue'] = "Please, Entre a values and re-try again !";
        header('location: ../index.php?p=login&error='.$errors['emptyValue']);
        exit();
    }
    */
} else
{
    $errors['notAllowed'] = "Please enter your infos for acces to your account.";
    header('location: ../index.php?p=login&error='.$errors['notAllowed']);
    exit();
}