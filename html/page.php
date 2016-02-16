<!DOCTYPE html>
<?php
include('arrayinclude.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Applebee's Menu</title>
</head>
<body>

    <?php
        $maincat = filter_var($_REQUEST['category'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
echo 'cake';
        
    ?>
</body>
</html>
