<div class="container">

    <h2>Species</h2>
    <?php foreach ($metadata as $value): ?>
    <table>
        <thead>
        <tr>
            <th>#</th>
            <th>Description</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        </tbody>
        <tr>
            <td><?php echo $value['id']; ?></td>
            <td><?php echo $value['description']; ?></td>
            <td class="center"><a href="<?php echo base_url("species/edit_species/".$value['id'])?>">edit</a></td>
            <td class="center"><a href="<?php echo base_url("species/delete_species/".$value['id'])?>">delete</a></td>
        </tr>
        </tbody>
    </table>

    <?php endforeach; ?>

    <p><a href="<?php echo base_url('species/create_species') ?>">Create</a></p>
</div>