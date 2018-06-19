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

        <form action="<?php echo base_url("patients_controller/create_patients/")?>" method="post" class="was-validated">
            <h1>Create patient</h1>
            <div class="form-group">
                <label for="patient_name">Patient name:</label>
                <input type="text" name="patient_name" class="form-control" placeholder="Patient name" required>
            </div>

            <div class="form-group">
                <label for="species_description">Patient description:</label>
                <select name="species_id" required>
                    <?php foreach ($speciesdata as $dieren){  ?>
                        <option  value="<?php echo $dieren['species_id']; ?>"><?php echo $dieren['species_description']; ?></option>
                    <?php } ?>
            </div>

            <div class="form-group">
                <label for="patient_status">Patient status:</label>
                <textarea required name="patient_status" class="form-control" rows="5" id="patient_status"></textarea>
            </div>

            <div class="form-group">
                <label for="client_name">Client name:</label>
                <select name="client_id" required>
                    <?php foreach ($clientdata as $personen){  ?>
                        <option  value="<?php echo $personen['client_id']; ?>"><?php echo $personen['client_firstname']; ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label for="gender">Gender:</label>
                        <div class="radio">
                            <label><input required type="radio" value="male" name="gender">Male:</label>
                        </div>
                        <div class="radio">
                            <label><input required type="radio" value="female" name="gender" >Female:</label>
                        </div>
            </div>

            <input type="submit" class="btn btn-primary" name="submit" value="submit">

        </form>

    </div>
</div>

</body>
</html>