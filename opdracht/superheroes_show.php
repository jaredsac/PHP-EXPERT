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
<a href="superheroes_index.php">Back to all Heroes</a>
<h4 class="display-4"> Superheroes Info</h4>
<table class="table">
    <?php foreach($database_gegevens as $key => $heroes):?>
        <tr>
            <th><?php echo $key . ":" ?></th> 
            <td><?php echo $heroes; ?></td>
        </tr>
    <?php endforeach;?>
</table>
