<?php

if(isset($_COOKIE["user"]))
{
    echo "Welcome Back! Repeated User";
}
else
{
    setcookie("user", "Nishar", time()+3600);
    echo "Welcome! New User";
}

?>