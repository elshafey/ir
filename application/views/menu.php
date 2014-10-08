<div class="dropdown">
    <a class="account" >
        <span>Hi, <?php echo get_user_name() ?></span>
    </a>
    <div class="submenu" style="display: none; ">

        <ul class="root">
            <li >
                <a href="<?php echo site_url('accounts/edit') ?>" >Edit My Profile</a>
            </li>
            <li >
                <a href="<?php echo site_url('accounts/password') ?>">Change Password</a>
            </li>
            <li>
                <a href="<?php echo site_url('accounts/create') ?>">Add User</a>
            </li>
            <li>
                <a href="<?php echo site_url('accounts/logout') ?>">Sign Out</a>
            </li>
        </ul>
    </div>
</div>