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
        <h2>Edit species</h2>
        <form action="<?php echo base_url('species_controller/update') ?>" method="post" class="was-validated">
            <input type="hidden" name="id" value="<?php echo $result['species_id']; ?>">
            <div class="form-group">
                <label for="species_description">Species description :</label>
                <input type="text" class="form-control" name="species_description" value="<?php echo $result['species_description']; ?>">
            </div>

            <input type="submit" class="btn btn-primary" name="sumbit" value="update">

        </form>
    </div>
<?php endforeach; ?>
</body>
</html>