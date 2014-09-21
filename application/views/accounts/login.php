<form method="POST">
    <ul>
        <li>
            <?php echo lang('accounts_login_username', 'username') ?>
            <input name="email" id="email" class="txtbox" />
        </li>
        <li>
            <?php echo lang('accounts_login_password', 'password') ?>
            <input name="password" id="password" class="txtbox" type="password" />
        </li>
        <li class="btns">
            <input name="save" value="Login" type="submit" />
        </li>
    </ul>
</form>

