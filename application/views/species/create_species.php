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

        <form action="<?php echo base_url("species_controller/create_species/")?>" method="post" class="was-validated">
            <h1>Species aanmaken</h1>
            <div class="form-group">
                <label for="speciesdescription">Species description :</label>
                <input type="text" name="speciesdescription" class="form-control" placeholder="Species description" required>
            </div>

            <input type="submit" class="btn btn-primary" name="submit" value="submit" required>

        </form>

    </div>
</div>

</body>
</html>