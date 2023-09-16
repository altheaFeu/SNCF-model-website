<?php
    session_start();
    session_destroy();
    header('Location:../pages-site/home.html');
    die();