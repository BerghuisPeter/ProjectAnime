<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('inscription'); ?>

<label for="username">username</label>
<input type="input" name="v_userName" value="<?php echo set_value('v_userName'); ?>"/><br/>

<label for="email">email</label>
<input type="input" name="v_email" value="<?php echo set_value('v_email'); ?>"/><br/>

<label for="text">password</label>
<input type="input" name="v_passWord"/><br/>

<input type="submit" name="submit" value="Login"/>

</form>