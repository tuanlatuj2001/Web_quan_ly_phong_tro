<?php
session_start();
session_destroy();
echo header("refresh: 0; url ='../index.php'");
