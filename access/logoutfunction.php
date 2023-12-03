<?php

require_once "./sessionconfig.php";


// session_destroy();

destroysession("email");
destroysession("password");
destroysession("id");
destroysession("role");

session_destroy();

header("Location:./../signup.php");