<div class="choose-template">
    <span>Accounts Management</span>
</div>
<ul>
    <li><a href="<?php echo site_url('accounts') ?>">List Profiles</a></li>
    <li><a href="<?php echo site_url('accounts/create') ?>">Add User</a></li>
    <li><a href="<?php echo site_url('accounts/password') ?>">Change Password</a></li>
    <li><a href="<?php echo site_url('accounts/edit') ?>">Edit My Profile</a></li>
    <?php if(is_super_admin()){ ?>
    <li><a href="<?php echo site_url('accounts/add_language') ?>">Add Language</a></li>
    <li><a href="<?php echo site_url('accounts/languages') ?>">List Languages</a></li>
    <li><a href="<?php echo site_url('accounts/add_branch') ?>">Add Branch</a></li>
    <li><a href="<?php echo site_url('accounts/branches') ?>">List Branches</a></li>
    <?php } ?>
</ul>