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
        <h2>Edit client</h2>
        <form action="<?php echo base_url('clients_controller/update') ?>" method="post">
            <input type="hidden" name="id" value="<?php echo $result['client_id']; ?>">
            <div class="form-group">
                <label for="clientfirstname">Client firstname:</label>
                <input type="text" class="form-control" name="clientfirstname" value="<?php echo $result['client_firstname']; ?>">
            </div>

            <div class="form-group">
                <label for="clientlastname">Client lastname:</label>
                <input type="text" class="form-control" name="clientlastname" value="<?php echo $result['client_lastname']; ?>">
            </div>
            <input type="submit" class="btn btn-primary" name="sumbit" value="update">

        </form>
    </div>
<?php endforeach; ?>
</body>
</html>