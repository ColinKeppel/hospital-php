<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<?php
foreach ($patientsdata as $result) {
    $dierendata = $result->client_id;
    $personendata = $result->species_id;
}
?>
<div class="container">
    <div class="col-sm-6">
        <form action="<?php echo base_url("patients_controller/update/")?>" method="post">
            <h1>Edit patient</h1>
            <div class="form-group">
                <label for="patient_name">Client firstname:</label>
                <input type="text" class="form-control" name="patient_name" value="<?php echo $result->patient_name; ?>">
            </div>

            <div class="form-group">
                <label for="patient_status">Species description:</label>
                <select name="species_id">
                    <?php foreach ($speciesdata as $dieren){  ?>
                        <option <?php echo ($dierendata == $dieren['species_id'] ? "selected" : ""); ?> value="<?php echo $dieren['species_id']; ?>"><?php echo $dieren['species_description']; ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label for="patient_status">Patient status:</label>
                <textarea name="patient_status" class="form-control" rows="5" id="patient_status"><?php echo $result->patient_status; ?></textarea>
            </div>

            <div class="form-group">
                <label for="client_name">Client name:</label>
                <select name="client_id">
                    <?php foreach ($clientdata as $personen){  ?>
                        <option <?php echo ($personendata == $personen['client_id'] ? "selected" : ""); ?> value="<?php echo $personen['client_id']; ?>"><?php echo $personen['client_firstname']; ?></option>
                    <?php } ?>
                </select>
            </div>
                    <input type="hidden" name="id" value="<?php echo $result->patient_id; ?>">
            <input type="submit" class="btn btn-primary" name="submit" value="submit">
        </form>
    </div>
</div>

</body>
</html>