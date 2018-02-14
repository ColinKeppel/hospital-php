<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Clients overzicht</title>
</head>
<body>

<h2>Patiënt toevoegen</h2>

<form action="<?php echo site_url('client/create'); ?>" method="post">
    <label for="text">Firstname</label><input type="text" placeholder="Firstname"><br>
    <label for="text">Lastname</label><input type="text" placeholder="Lastname"><br>

    <input type="submit" value="submit">
</form>




</body>
</html>