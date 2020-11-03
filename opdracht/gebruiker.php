<?php

require 'database.php';
 




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Naam</th>
                    <th>categorie</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($database_gegevens as $item): ?>

                    <tr>
                        <td><?php echo $item ['id']?></td>
                        <td><?php echo $item ['naam']?></td>
                        <td><?php echo $item ['categorie']?></td>
                    </tr>
             <?php endforeach; ?>    
            </tbod>
        </table>
    </div>
      
</body>
</html>



