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
    <li><a href="<?php echo base_url("patients/patients/")?>">Patiënts</a></li>
    <li><a href="<?php echo base_url("clients/clients/")?>">Clients</a></li>
    <li><a href="<?php echo base_url("species/species/")?>">Species</a></li>
</ul>

<h2>Patiënts</h2>
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
            <td><?php echo $value['client_firstname'] ?></td>
            <td><?php echo $value['client_lastname'] ?></td>
            <td><a href="<?php echo base_url("clients_controller/edit_client/").$value['client_id']?>">Edit</a>|<!--<a href="<?php /*echo base_url("boek/verwijderen/").$value['client_id']*/?>">delete</a></a></td>-->

        </tr>
        </tbody>
    <?php endforeach; ?>
</table>
</div>
<p id="aanmaakTekst">
    <a href="<?php echo base_url("clients_controller/create_client/") ?>">Create</a>
</p>

</body>
</html>
