
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
        <?php foreach ($compliments as $key => $compliment) { ?>
            <tr>
                <td><?php echo $compliment->template_name; ?></td>
                <?php if (is_super_admin()) { ?>
                    <td><?php echo $compliment->branch; ?></td>
                <?php } ?>
                <td><?php echo $compliment->language; ?></td>
                <td><?php echo $compliment->user; ?></td>
                <td><?php echo substr($compliment->modified_at,0,10); ?></td>
                <td><a href="<?php echo site_url('compliment/preview/' . $compliment->id)  ?>">Preview</a></td>
            </tr>
        <?php } ?>
    </tbody></table>

<script>
    $(document).ready(function() {
        $('#table').dataTable({
//                searching: false,
<?php if (count($compliments) <= 10) { ?>
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