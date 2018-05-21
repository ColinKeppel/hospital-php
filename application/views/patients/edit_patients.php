<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<?php
foreach($id as $result):
    ?>
    <div class="container">
        <h2>Edit patient</h2>
        <form action="<?php echo base_url('patients_controller/update') ?>" method="post">
            <input type="hidden" name="id" value="<?php echo $result['patient_id']; ?>">
            <div class="form-group">
                <label for="patientname">Patient name:</label>
                <input type="text" class="form-control" name="patientname" value="<?php echo $result['patient_name']; ?>">
            </div>

            <div class="form-group">
                <label for="patientstatus">Patient status:</label>
                <input type="text" class="form-control" name="patientstatus" value="<?php echo $result['patient_status']; ?>">
            </div>



            <input type="submit" class="btn btn-primary" name="sumbit" value="update">

        </form>
    </div>
<?php endforeach; ?>
</body>
</html>