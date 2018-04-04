


<div class="container">
        <h2>Patiënts</h2>
<!--    echo base_url('patients/index/patient_name/desc')-->
<!--    <a id="patientNaam" href="--><?php //echo base_url('patients/index/patient_name/') ?><!--"> naam</a>-->
    <a id="patientNaam" href="<?php echo (current_url() == base_url('patients/index/patient_name/asc') ? base_url('patients/index/patient_name/desc'): base_url('patients/index/patient_name/asc')); ?>"> naam</a>
    <a id="species" href="<?php echo (current_url() == base_url('patients/index/species_id/asc') ? base_url('patients/index/species_id/desc'): base_url('patients/index/species_id/asc'));?>">species </a>
    <a id="status" href="<?php echo (current_url() == base_url('patients/index/patient_status/asc') ? base_url('patients/index/patient_status/desc'): base_url('patients/index/patient_status/asc'));?>"> status</a>
    <a id="client" href="<?php echo (current_url() == base_url('patients/index/client_id/asc') ? base_url('patients/index/client_id/desc'): base_url('patients/index/client_id/asc'));?>">client </a>


    <?php var_dump(current_url());?>



<!--    <select onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">-->
<!--        <option value="">Select...</option>-->
<!--        <option value="--><?php //echo base_url('patients/index/patient_name') ?><!--">naam</option>-->
<!--        <option value="--><?php //echo base_url('patients/index/species_id') ?><!--">species</option>-->
<!--        <option value="--><?php //echo base_url('patients/index/patient_status') ?><!--">Status</option>-->
<!--        <option value="--><?php //echo base_url('patients/index/client_id') ?><!--">client</option>-->
<!--    </select>-->



    <?php foreach ($metadata as $value): ?>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Species</th>
            <th scope="col">Status</th>
            <th scope="col">Client</th>
            <th scope="col">Gender</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
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
    </table>

    <?php endforeach; ?>

    <p><a href="<?php echo base_url('patients/create_patients')?>">Create</a></p>
    <p><a href="#">Home</a></p>
</div>