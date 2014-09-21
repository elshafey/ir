<form method="POST">
    <ul>
        <li>
            <?php echo lang('accounts_login_password_new', 'password') ?>
            <input name="password" id="password" class="txtbox" type="password" />
            <?php echo form_error('password') ?>
        </li>
        <li class="btns">
            <input name="save" value="Login" type="submit" />
        </li>
    </ul>
</form>