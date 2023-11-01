<?php


$HOSTNAME = 'db';
$USER = 'root';
$PASSWORD = '';
$DB = 'lemp_db';

$conn = mysqli_connect($HOSTNAME, $USER, $PASSWORD, $DB);

$sql = 'SELECT * FROM blog';
$result = mysqli_query($conn, $sql);

while($blog = mysqli_fetch_assoc($result)) 
{
?>

<h2><?php echo $blog['title']; ?></h2>
<p><?php echo $blog['content']; ?></p>
<p>Fecha: <?php echo $blog['date']; ?></p>
<hr>




<?php } ?>