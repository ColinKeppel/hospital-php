<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
<div class="container">
    <h1>Hospital</h1>
    <nav>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" href="<?php echo base_url("home/index") ?>">Clients</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url("species/index") ?>">Spieces</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=<?php echo base_url("patients/index") ?>>Patients</a>
            </li>
        </ul>
    </nav>

<!--    <p class="alert-success">-->
<!--        --><?php //if ($this->session->flashdata('record_succes')) {
//            echo $this->session->flashdata('record_succes');
//        } ?>
<!--    </p>-->
<!---->
<!--    <p class="alert-danger">-->
<!--        --><?php //if ($this->session->flashdata('record_failed')){
//            echo $this->session->flashdata('record_failed');
//        } ?>
<!--    </p>-->



</div>