<?php
session_start();
session_destroy();
print("<script>window.location.href = 'Register.php';</script>")
?>