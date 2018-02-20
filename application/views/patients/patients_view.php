<div class="container">
        <h2>Patiënts</h2>
    <?php foreach ($metadata as $value): ?>
    <table>
        <thead>
        <tr>
            <th>Name</th>
            <th>Species</th>
            <th>Status</th>
            <th>Client</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        </tbody>
        <tr>
            <td><?php echo $value['patient_name'] ?></td>
            <td><?php echo $value['species_id'] ?></td>
            <td><?php echo $value['patient_status'] ?></td>
            <td><?php echo $value['client_id'] ?></td>
            <td class="center"><a href="<?php echo base_url("patients/edit_patients/".$value['patient_id'])?>">edit</a></td>
            <td class="center"><a href="<?php echo base_url("patients/delete_patients/".$value['patient_id'])?>">delete</a></td>
        </tr>
        </tbody>
    </table>

    <?php endforeach; ?>

    <p><a href="<?php echo base_url('patients/create_patients')?>">Create</a></p>
    <p><a href="#">Home</a></p>
</div>