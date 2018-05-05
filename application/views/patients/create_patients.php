<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="col-sm-6">

        <form action="<?php echo base_url("clients_controller/create_client/")?>" method="post">
        <h1>Patient aanmaken</h1>
            <div class="form-group">
                <label for="patientname">Patient</label>
                <input type="text" name="pn" class="form-control" placeholder="Patient name">
            </div>

            <div class="form-group">
                <label for="patientstatus">Status patient</label>
                <input type="text" name="ps" class="form-control" placeholder="Patient status">
            </div>

            <input type="submit" class="btn btn-primary" name="submit" value="submit">

        </form>

    </div>
</div>

</body>
</html>