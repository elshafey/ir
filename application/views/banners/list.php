
<table id="table" class="display" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>Template Name</th>
            <?php if (is_super_admin()) { ?>
                <th>Branch</th>
            <?php } ?>
            <th>Language</th>
            <th>Type</th>
            <th>Created by</th>
            <th>Last Modified at</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($banners as $key => $banner) { ?>
            <tr>
                <td><?php echo $banner->template_name; ?></td>
                <?php if (is_super_admin()) { ?>
                    <td><?php echo $banner->branch; ?></td>
                <?php } ?>
                <td><?php echo $banner->language; ?></td>
                <td><?php echo get_banner_type($banner->type); ?></td>
                <td><?php echo $banner->user; ?></td>
                <td><?php echo substr($banner->modified_at,0,10); ?></td>
                <td><a href="<?php echo site_url('banner/preview/' . $banner->id)  ?>">Preview</a></td>
            </tr>
        <?php } ?>
    </tbody></table>

<script>
    $(document).ready(function() {
        $('#table').dataTable({
//                searching: false,
<?php if (count($banners) <= 10) { ?>
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