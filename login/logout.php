<?php

session_start();
unset($_SESSION['ses_id']);
unset($_SESSION['name']);
unset($_SESSION['status']);
session_destroy();
echo "<meta http-equiv='refresh' content ='1;URL=index.html'>";





?>
