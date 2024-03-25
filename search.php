<?php
    // Validate and sanitize search term
    $searchTerm = isset($_POST['search']) ? htmlentities($_POST['search'], ENT_QUOTES, 'UTF-8') : '';
    echo"
    <script> windows.location.href='home_page.php' ;</script>";
    

$search=$_POST['search'];
echo $search;
echo '<script>
     window.location.href="index.html";
     </script>';


?>