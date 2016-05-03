<div class="container content-profil">
    <div class="row">
        <div class="col-md-3">
            <h3>Profile : <?php echo $this->session->userName ?></h3>

            <p>e-mail: <?php echo $this->session->email ?></p>

            <div class="content-info-profil">
                <img src="http://lorempicsum.com/futurama/180/180/2" alt="character" class="img-rounded">
            </div>


            <div class="panel-group">

                <a data-toggle="collapse" href="#passwordChangepanel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            Change password <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
                        </h4>
                    </div>
                </a>
                    <div id="passwordChangepanel" class="panel-collapse collapse">
                        <?php echo form_open('profile/passwordChange'); ?>

                        <label for="text">old password: </label>
                        <input type="input" name="v_oldPassWord"/><br/>

                        <label for="text">new password: </label>
                        <input type="input" name="v_newPassWord"/><br/>

                        <label for="text">repeat new password: </label>
                        <input type="input" name="v_RepeatNewPassWord"/><br/>

                        </br>
                        <input type="submit" name="submit" value="Change Password"/>

                        </form>
                    </div>
                </div>

            <a data-toggle="collapse" href="#userNamePanel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            username change <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
                        </h4>
                    </div>
            </a>
            <div id="userNamePanel" class="panel-collapse collapse">
                <?php echo form_open('profile/passwordChange'); ?>

                <label for="text">old username: </label>
                <input type="input" name="v_oldUsername"/><br/>

                <label for="text">new username: </label>
                <input type="input" name="v_newUsername"/><br/>

                <label for="text">repeat new password: </label>
                <input type="input" name="v_RepeatNewUsername"/><br/>

                </br>
                <input type="submit" name="submit" value="Change Username"/>

                </form>
            </div>
        </div>


            </div>


        </div>
    </div>
</div>