<?php

require('connection.php');
session_start();

# for login
if(isset($_POST['login']))
{
    $query="SELECT * FROM registered_users WHERE email='$_POST[email_username]' OR username='$_POST[email_username]'";
    $result=mysqli_query($con,$query);

    $result_fetch=mysqli_fetch_assoc($result);
    if(password_verify($_POST['password'],$result_fetch['password']))
    {
        $_SESSION['logged_in']=true;
        $_SESSION['username']=$result_fetch['username'];
        header("location: home_page.php");
    }
    else
    {
        echo"
        <script>alert('Incorrect Password');
        window.location.href='index.php';
        </script>
        ";
    }
}


# for registration
if(isset($_POST['register']))
{
    $password=password_hash($_POST['password'],PASSWORD_BCRYPT);
    $query="INSERT INTO registered_users(full_name, username, email, password) VALUES ('$_POST[fullname]','$_POST[username]','$_POST[email]','$password')";
    if(mysqli_query($con,$query))
    {
        echo"
        <script>alert('Registration Successful');
        window.location.href='index.php';
        </script>
        ";
    }
    else
    {
        echo"
        <script>alert('Cannot Run Query');
        window.location.href='index.php';
        </script>
        ";
    }
}
?>