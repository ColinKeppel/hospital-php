<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Hospital</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<h1>Hospital</h1>
<ul>
    <li><a href="<?php echo base_url("patients_controller/index")?>">Patiënts</a></li>
    <li><a href="<?php echo base_url("clients_controller/index")?>">Clients</a></li>
    <li><a href="<?php echo base_url("species_controller/index")?>">Species</a></li>
</ul>

<h2>Patiënts</h2>
<table class="table" id="patientsTable">
    <thead>
    <tr>
        <th onclick="sortTable(0)">Name</th>
        <th onclick="sortTable(1)">Species</th>
        <th>Status</th>
        <th onclick="sortTable(2)">Client</th>
        <th onclick="sortTable(3)">Gender</th>
        <th colspan="2">Action</th>
    </tr>
    </thead>
    <?php foreach ($patientsdata as $value): ?>
    <tbody>
    <tr>
        <td><?php echo $value['patient_name']?></td>
        <td><?php echo $value['species_name']?></td>
        <td><?php echo $value['patient_status']?></td>
        <td><?php echo $value['client_name'] ?></td>
        <td><?php echo $value['gender']?></td>
        <td class="center"><a href="<?php echo base_url("patients_controller/edit_patients/").$value['patient_id']?>">edit</a>|<a href="<?php echo base_url("patients_controller/delete/").$value['patient_id']?>">delete</a></td>
    </tr>
    </tbody>
    <?php endforeach; ?>
</table>
<p><a href="<?php echo base_url("patients_controller/create_patients/") ?>">Create</a></p>
<p><a href="<?php echo base_url("patients_controller/index")?>">Home</a></p>
</body>
<style>
    body {
        width: 1000px;
        margin: auto;
    }
    th {
        cursor: pointer;
    }
</style>
<script>
    function sortTable(n) {
        var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
        table = document.getElementById("patientsTable");
        switching = true;
        // Set the sorting direction to ascending:
        dir = "asc";
        /* Make a loop that will continue until
        no switching has been done: */
        while (switching) {
            // Start by saying: no switching is done:
            switching = false;
            rows = table.getElementsByTagName("TR");
            /* Loop through all table rows (except the
            first, which contains table headers): */
            for (i = 1; i < (rows.length - 1); i++) {
                // Start by saying there should be no switching:
                shouldSwitch = false;
                /* Get the two elements you want to compare,
                one from current row and one from the next: */
                x = rows[i].getElementsByTagName("TD")[n];
                y = rows[i + 1].getElementsByTagName("TD")[n];
                /* Check if the two rows should switch place,
                based on the direction, asc or desc: */
                if (dir == "asc") {
                    if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                        // If so, mark as a switch and break the loop:
                        shouldSwitch = true;
                        break;
                    }
                } else if (dir == "desc") {
                    if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                        // If so, mark as a switch and break the loop:
                        shouldSwitch = true;
                        break;
                    }
                }
            }
            if (shouldSwitch) {
                /* If a switch has been marked, make the switch
                and mark that a switch has been done: */
                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                switching = true;
                // Each time a switch is done, increase this count by 1:
                switchcount ++;
            } else {
                /* If no switching has been done AND the direction is "asc",
                set the direction to "desc" and run the while loop again. */
                if (switchcount == 0 && dir == "asc") {
                    dir = "desc";
                    switching = true;
                }
            }
        }
    }
</script>
</html>