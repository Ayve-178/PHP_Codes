<?php //include('partials/header.php'); //will give warning if the file doesn't exist.
?>
<!--Another way-->
<?php //require('partials/header.php'); //will give fatal error if the file doesn't exist.
include_once('partials/header.php');
//If we include two times the header will show two times. But if we use include_once, doesn't matter how many times we include the header, It will be included only once.

?>  

<h3>Georgia, Tbilisi 5&#8451;</h3>
<h1>Welcome to my cool website</h1>
<?php include_once('partials/footer.php'); ?>
