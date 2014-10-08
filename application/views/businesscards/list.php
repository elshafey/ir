
<table id="table" class="display" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>Template Name</th>
            <?php if (is_super_admin()) { ?>
                <th>Branch</th>
            <?php } ?>
            <th>Language</th>
            <th>Created by</th>
            <th>Last Modified at</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($businesscards as $key => $businesscard) { ?>
            <tr>
                <td><?php echo $businesscard->template_name; ?></td>
                <?php if (is_super_admin()) { ?>
                    <td><?php echo $businesscard->branch; ?></td>
                <?php } ?>
                <td><?php echo $businesscard->language; ?></td>
                <td><?php echo $businesscard->user; ?></td>
                <td><?php echo substr($businesscard->modified_at,0,10); ?></td>
                <td><a href="<?php echo site_url('business_cards/preview/' . $businesscard->id)  ?>">Preview</a></td>
            </tr>
        <?php } ?>
    </tbody></table>

<script>
    $(document).ready(function() {
        $('#table').dataTable({
//                searching: false,
<?php if (count($businesscards) <= 10) { ?>
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