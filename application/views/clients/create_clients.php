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

        <form action="<?php echo base_url("clients_controller/create_client/")?>" method="post" class="was-validated">
        <h1>Client aanmaken</h1>
            <div class="form-group">
                <label for="clientfirstname">Client firstname:</label>
                <input type="text" name="clientfirstname" class="form-control" placeholder="Client firstname" required>
            </div>

            <div class="form-group">
                <label for="clientlastname">Client lastname:</label>
                <input type="text" name="clientlastname" class="form-control" placeholder="Client lastname" required>
            </div>

            <div class="form-group">
                <label for="client_email">Client email:</label>
                <input type="text" name="client_email" class="form-control" placeholder="Client email" required>
            </div>

            <div class="form-group">
                <label for="client_number">Client number:</label>
                <input type="text" name="client_number" class="form-control" placeholder="Client number" minlength="10" required>
            </div>

            <input type="submit" class="btn btn-primary" name="submit" value="submit">

        </form>

    </div>
</div>

</body>
</html>