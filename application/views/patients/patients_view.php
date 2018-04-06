


<div class="container">
        <h2>Patiënts</h2>
    <table class="table">
        <thead>
        <tr>
            <th scope="col"><a id="patientNaam" href="<?php echo (current_url() == base_url('patients/index/patient_name/asc') ? base_url('patients/index/patient_name/desc'): base_url('patients/index/patient_name/asc')); ?>"> naam</a></th>
            <th scope="col"><a id="species" href="<?php echo (current_url() == base_url('patients/index/species_id/asc') ? base_url('patients/index/species_id/desc'): base_url('patients/index/species_id/asc'));?>">species </a></th>
            <th scope="col"><a id="status" href="<?php echo (current_url() == base_url('patients/index/patient_status/asc') ? base_url('patients/index/patient_status/desc'): base_url('patients/index/patient_status/asc'));?>"> status</a></th>
            <th scope="col"><a id="client" href="<?php echo (current_url() == base_url('patients/index/client_id/asc') ? base_url('patients/index/client_id/desc'): base_url('patients/index/client_id/asc'));?>">client </a></th>
            <th scope="col">Gender</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
    <?php foreach ($metadata as $value): ?>

        </tbody>
        <tr>
            <td><?php echo $value['patient_name'] ?></td>
            <td><?php echo $value['species_name'] ?></td>
            <td><?php echo $value['patient_status'] ?></td>
            <td><?php echo $value['client_name'] ?></td>
            <td><?php echo $value['gender'] ?></td>
            <td class="center"><a href="<?php echo base_url("patients/edit_patients/".$value['patient_id'])?>">edit</a></td>
            <td class="center"><a href="<?php echo base_url("patients/delete_patients/".$value['patient_id'])?>">delete</a></td>
        </tr>
        </tbody>
    <?php endforeach; ?>
    </table>



    <p><a href="<?php echo base_url('patients/create_patients')?>">Create</a></p>
    <p><a href="#">Home</a></p>
</div>