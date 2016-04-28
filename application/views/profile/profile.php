<h1>Profile: <?php echo $this->session->userName ?></h1>

<p>e-mail: <?php echo $this->session->email ?></p>

<?php echo form_open('profile/passwordChange'); ?>
    <label for="text">old password: </label>
    <input type="input" name="v_oldPassWord"/><br/>

    <label for="text">new password: </label>
    <input type="input" name="v_newPassWord"/><br/>

    <label for="text">repeat new password: </label>
    <input type="input" name="v_RepeatNewPassWord"/><br/>

    <input type="submit" name="submit" value="Change Password"/>
</form>