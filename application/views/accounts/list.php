
<ul>
    <li>

    </li>
    <li>
        <table id="table" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th><?php echo trim(lang('accounts_create_name'),':') ?></th>
                    <th><?php echo trim(lang('accounts_create_title'),':') ?></th>
                    <th><?php echo trim(lang('accounts_create_tel'),':') ?></th>
                    <th><?php echo trim(lang('accounts_create_direct'),':') ?></th>
                    <th><?php echo trim(lang('accounts_create_fax'),':') ?></th>
                    <th><?php echo trim(lang('accounts_create_charity'),':') ?></th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th><?php echo trim(lang('accounts_create_name'),':') ?></th>
                    <th><?php echo trim(lang('accounts_create_title'),':') ?></th>
                    <th><?php echo trim(lang('accounts_create_tel'),':') ?></th>
                    <th><?php echo trim(lang('accounts_create_direct'),':') ?></th>
                    <th><?php echo trim(lang('accounts_create_fax'),':') ?></th>
                    <th><?php echo trim(lang('accounts_create_charity'),':') ?></th>
                </tr>
            </tfoot>
            <tbody>
                <?php foreach ($users as $key => $user) {?>
                <tr>
                    <td><?php echo $user->name_en.' - '.$user->name_ar; ?></td>
                    <td><?php echo $user->title_en.' - '.$user->title_ar; ?></td>
                    <td><?php echo $user->tel; ?></td>
                    <td><?php echo $user->direct; ?></td>
                    <td><?php echo $user->fax; ?></td>
                    <td><?php echo $user->charity; ?></td>
                </tr>
                <?php } ?>
            </tbody></table>
    </li>
</ul>
<script>
    $(document).ready(function() {
        $('#table').dataTable();
    });
</script>