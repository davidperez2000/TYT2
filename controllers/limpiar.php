<?php
    $arch = fopen ("../views/chat.txt", "w+");
    fwrite($arch, "");
    fclose($arch);
    header("Location:ayuda.php");
    ?>