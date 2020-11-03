<?php
    require 'database.php';

    $sql = "SELECT *FROM uperheroes limit 30";
    $statement = $db_conn->prepare($sql);
    $statement->execute();
    $database_gegevens = $statement->fetchAll(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuperHeroes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Alignment</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach($database_gegevens as $superheroes ): ?>

                    <tr>
                        <td><?php echo $superheroes ['ID']?></td>
                        <td><?php echo $superheroes ['Title']?></td>
                        <td><?php echo $superheroes ['Alignment']?></td>
                        <td>
                            <a href="superheroes_show.php?id=<?php echo $superheroes ['ID']?>">Bekijken</a>
                        </td>
                        <td>
                            <a href="superheroes_edit.php?id=<?php echo $superheroes ['ID']?>">Updaten/wijzigen</a>
                        </td>
                        <td>
                            <a href="superheroes_delete.php?id=<?php echo $superheroes ['ID']?>">Delete</a>
                        </td>
                    </tr>
             <?php endforeach; ?>    
            </tbod>
        </table>
    </div>
      
</body>
</html>