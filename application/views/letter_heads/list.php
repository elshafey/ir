
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
        <?php foreach ($letter_heads as $key => $letter_head) { ?>
            <tr>
                <td><?php echo $letter_head->template_name; ?></td>
                <?php if (is_super_admin()) { ?>
                    <td><?php echo $letter_head->branch; ?></td>
                <?php } ?>
                <td><?php echo $letter_head->language; ?></td>
                <td><?php echo $letter_head->user; ?></td>
                <td><?php echo substr($letter_head->modified_at,0,10); ?></td>
                <td><a href="<?php echo site_url('letter_head/preview/' . $letter_head->id)  ?>">Preview</a></td>
            </tr>
        <?php } ?>
    </tbody></table>

<script>
    $(document).ready(function() {
        $('#table').dataTable({
//                searching: false,
<?php if (count($letter_heads) <= 10) { ?>
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