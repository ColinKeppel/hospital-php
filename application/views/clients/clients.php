<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Hospital</title>
    <link rel="stylesheet" href="../../../style.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<h1>Hospital</h1>
<ul>
    <li><a href="<?php echo base_url("patients_controller/index")?>">Patiënts</a></li>
    <li><a href="<?php echo base_url("clients_controller/index")?>">Clients</a></li>
    <li><a href="<?php echo base_url("species_controller/index")?>">Species</a></li>
</ul>

<?php if(($this->session->flashdata('error'))) { ?>
<div class="alert alert-danger">
    <?php echo $this->session->flashdata('error'); ?>
</div>
<?php } ?>


<h2>Clients</h2>
<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Client</th>
        <th>Email</th>
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
            <td><?php echo $value['client_email']?></td>
            <td><?php echo $value['client_number']?></td>
            <td><a href="<?php echo base_url("clients_controller/edit_client/").$value['client_id']?>">Edit</a>|<a href="<?php echo base_url("clients_controller/delete/").$value['client_id']?>">Delete</a></a></td>

        </tr>
        </tbody>
    <?php endforeach; ?>
</table>
</div>
<p><a href="<?php echo base_url("clients_controller/create_client/") ?>">Create</a></p>
<p><a href="<?php echo base_url("clients_controller/index")?>">Home</a></p>


</body>
<style>
    body {
        width: 1000px;
        margin: auto;
    }
    th {
        cursor: pointer;
    }
</style>
</html>
