<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Hospital</title>
    <link rel="stylesheet" href="../../../style.css" type="text/css">
</head>
<body>
<h1>Hospital</h1>
<ul>
    <li><a href="<?php echo base_url("patients_controller/index")?>">Patiënts</a></li>
    <li><a href="<?php echo base_url("clients_controller/index")?>">Clients</a></li>
    <li><a href="<?php echo base_url("species_controller/index")?>">Species</a></li>
</ul>

<h2>Clients</h2>
<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Species</th>
        <th>Status</th>
        <th>Client</th>
        <th colspan="2">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($dataview as $value): ?>

        <tbody>
        <tr>
            <td><?php echo $value['client_firstname']?></td>
            <td><?php echo $value['client_lastname']?></td>
            <td><a href="<?php echo base_url("clients_controller/edit_client/").$value['client_id']?>">Edit</a>|<a href="<?php echo base_url("clients_controller/delete/").$value['client_id']?>">Delete</a></a></td>

        </tr>
        </tbody>
    <?php endforeach; ?>
</table>
</div>
<p><a href="<?php echo base_url("clients_controller/create_client/") ?>">Create</a></p>
<p><a href="<?php echo base_url("clients_controller/index")?>">Home</a></p>


</body>
</html>
