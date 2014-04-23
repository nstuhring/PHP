<html>
<body>


<?php 
$file = fopen("deploy.txt","w+");

echo $_POST["name"];
echo file_put_contents("deploy.txt", $_POST["name"]);

fclose($file);
?>
<br>




</body>
</html> 
