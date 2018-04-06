<div class="container">

    <h2>Species</h2>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Description</th>
            <th colspan="2" scope="col">Action</th>
        </tr>
        </thead>
        <?php foreach ($metadata as $value): ?>
        </tbody>
        <tr>
            <td><?php echo $value['id']; ?></td>
            <td><?php echo $value['description']; ?></td>
            <td class="center"><a href="<?php echo base_url("species/edit_species/".$value['id'])?>">edit</a></td>
            <td class="center"><a href="<?php echo base_url("species/delete_species/".$value['id'])?>">delete</a></td>
        </tr>
        </tbody>
        <?php endforeach; ?>
    </table>



    <p><a href="<?php echo base_url('species/create_species') ?>">Create</a></p>
</div>