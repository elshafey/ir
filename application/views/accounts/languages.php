<table id="table" class="display" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>Name</th>
            <th>Direction</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($languages as $key => $languag) { ?>
            <tr>
                <td><?php echo $languag->name; ?></td>
                <td><?php echo $languag->direction=='ltr'? 'Left to Right':'Right o Left'; ?></td>
                <td><a href="<?php echo site_url('accounts/edit_language/' . $languag->id) ?>">Edit</a></td>
            </tr>
        <?php } ?>
    </tbody></table>

<script>
    $(document).ready(function() {
        $('#table').dataTable({
//                searching: false,
                <?php if(count($languages)<=10){ ?>
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