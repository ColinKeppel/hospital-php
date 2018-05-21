<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Hospital</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<h1>Hospital</h1>
<ul>
    <li><a href="<?php echo base_url("patients_controller/index")?>">Patiënts</a></li>
    <li><a href="<?php echo base_url("clients_controller/index")?>">Clients</a></li>
    <li><a href="<?php echo base_url("species_controller/index")?>">Species</a></li>
</ul>

<h2>Species</h2>
<table>
    <thead>
    <tr>
        <th>#</th>
        <th>Description</th>
        <th colspan="2">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($dataview as $value): ?>
    <tr>
        <td><?php echo $value['species_id']?></td>
        <td><?php echo $value['species_description']?></td>
        <td><a href="<?php echo base_url("species_controller/edit_species/").$value['species_id']?>">Edit</a>|<a href="<?php echo base_url("species_controller/delete/").$value['species_id']?>">Delete</a></a></td>

    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<p><a href="<?php echo base_url("species_controller/create_species/") ?>">Create</a></p>
<p><a href="<?php echo base_url("species_controller/index")?>">Home</a></p>
</body>
</html>