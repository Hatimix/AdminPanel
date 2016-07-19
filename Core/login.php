<?php
$errors = array();
if ($_SERVER['REQUEST_METHOD'] === 'post')
{
    if (isset($_POST['pseudo'],$_POST['password']) && !empty($_POST['pseudo']) && !empty($_POST['password']))
    {
        // continue
        var_dump($_POST);
    }
    else
    {
        // Stop & redirect to login page
        $errors['emptyLogin'] = "Please verify your entires and re-try again !";
        header('location: /AdminPanel/?p=login&error='.$errors['emptyLogin']);
        die();
    }
}
else
{
    $errors['notAllowed'] = "Please access to this page trought the login form !";
    header('location: /AdminPanel/?p=login&error='.$errors['notAllowed']);
}