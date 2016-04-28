<div class="row">
    <div class="col-md-6 col-md-offset-3 content-sign-up">
        <h2 class="sign-up-title"><?php echo $title; ?></h2>
        <?php echo form_open('inscription', 'class="form-horizontal"'); ?>
            <div class="form-group">
                <?php echo form_error('v_userName'); ?>
                <label for="v_userName" class="col-sm-2 control-label">Username</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="v_userName" name="v_userName" value="<?php echo set_value('v_userName'); ?>" placeholder="user name">
                </div>
            </div>
            <div class="form-group">
                <?php echo form_error('v_email'); ?>
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="v_email" name="v_email" value="<?php echo set_value('v_email'); ?>" placeholder="email">
                </div>
            </div>
            <div class="form-group">
                <?php echo form_error('v_passWord'); ?>
                <label for="password" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="v_passWord" name="v_passWord" placeholder="Password">
                </div>
            </div>
            <button type="submit" name="submit" class="btn btn-default">Send</button>
        </form>
    </div>
</div>