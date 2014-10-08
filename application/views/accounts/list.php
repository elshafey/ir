
<table id="table" class="display" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th><?php echo trim(lang('accounts_create_name'), ':') ?></th>
            <th><?php echo trim(lang('accounts_create_title'), ':') ?></th>
            <?php if (is_super_admin()) { ?>
                <th>Branch</th>
            <?php } ?>
            <th>Email</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $key => $user) { ?>
            <tr>
                <td><?php echo $user->name; ?></td>
                <td><?php echo $user->title; ?></td>
                <?php if (is_super_admin()) { ?>
                    <td><?php echo $user->branch; ?></td>
                <?php } ?>
                <td><?php echo $user->email; ?></td>
                <td><a href="<?php echo site_url('accounts/edit/' . $user->id) ?>">Edit</a></td>
            </tr>
        <?php } ?>
    </tbody></table>

<script>
    $(document).ready(function() {
        $('#table').dataTable({
//                searching: false,
<?php if (count($users) <= 10) { ?>
            paging:false,
<?php } ?>
        });
    });
</script>
<style>
    #table_length{
        display: none;
    }
</style>