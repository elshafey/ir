
<table id="table" class="display" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>Name</th>
            <th>Address</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($branches as $key => $branch) { ?>
            <tr>
                <td><?php echo $branch->name; ?></td>
                <td><?php echo $branch->address; ?></td>
                <td><a href="<?php echo site_url('accounts/edit_branch/' . $branch->id) ?>">Edit</a></td>
            </tr>
        <?php } ?>
    </tbody></table>

<script>
    $(document).ready(function() {
        $('#table').dataTable({
//                searching: false,
                <?php if(count($branches)<=10){ ?>
                paging:false,
                <?php }?>
        });
    });
</script>
<style>
    #table_length{
        display: none;
    }
</style>