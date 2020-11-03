<?php
require 'database.php';
include 'header.php';
 
$id=$_GET['id'];
 
$sql = "SELECT * FROM superheroes WHERE ID = :ph_id";
$statement = $db_conn->prepare($sql);
$statement->bindParam(":ph_id", $id);
$statement->execute();
$database_gegevens = $statement->fetch(PDO::FETCH_ASSOC);
?>
<a href="superheroes_index.php">TERUG!</a>
<table class="table">
    <?php foreach($database_gegevens as $key => $hero):?>
        <tr>
            <th><?php echo $key . ":" ?></th> 
            <td><?php echo $hero; ?></td>
        </tr>
    <?php endforeach;?>
</table>
