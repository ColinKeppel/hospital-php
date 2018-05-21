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
    <?php foreach ($patientsdata as $value): ?>
    <tbody>
    <tr>
        <td><?php echo $value['patient_name']?></td>
        <td><?php echo $value['species_name']?></td>
        <td><?php echo $value['patient_status']?></td>
        <td><?php echo $value['client_name']?></td>
        <td class="center"><a href="<?php echo base_url("patients_controller/edit_patients/").$value['patient_id']?>">edit</a>|<a href="<?php echo base_url("patients_controller/delete/").$value['patient_id']?>">delete</a></td>
    </tr>
    </tbody>
    <?php endforeach; ?>
</table>
<p><a href="<?php echo base_url("patients_controller/create_patients/") ?>">Create</a></p>
<p><a href="<?php echo base_url("patients_controller/index")?>">Home</a></p>
</body>
</html>