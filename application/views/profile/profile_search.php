<div class="container content-profil">
    <div class="row">
        <div class="col-md-3">
            <div class="content-info-profil">
                <img src="http://lorempicsum.com/futurama/180/180/2" alt="character" class="img-rounded">
                <h1>Profile: <?php echo $this->session->userName ?></h1>
                <button type="button" class="btn btn-primary">Follow</button>
                <!-- SEND MESSAGE -->
                <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#exampleModal" data-whatever="@mdo">Send message</button>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"
                                        aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="exampleModalLabel">New message</h4>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="recipient-name" class="control-label">Recipient:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="control-label">Message:</label>
                                        <textarea class="form-control" id="message-text"></textarea>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Send message</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END SEND MESSAGE -->
                <br>
                <br>
                <em>0 followers</em>
                <hr>
            </div>
        </div>
        <div class="col-md-6">

        </div>
        <div class="col-md-9">
            <div class="collapse" id="collapseExample">
                <div class="well">
                    <div class="content-notif">
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="http://lorempicsum.com/futurama/100/100/1" alt="character505">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Username</h4>
                                <em>28/04/2016</em>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate commodi asperiores in odit, aspernatur amet modi, quasi quia error nesciunt, eaque illum quidem magnam. Provident suscipit dolorem quos explicabo? Atque!</p>
                            </div>
                            <div class="notif-action">
                                <a href="#">Répondre</a>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="http://lorempicsum.com/futurama/100/100/3" alt="character505">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Username2</h4>
                                <em>24/04/2016</em>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate commodi asperiores in odit, aspernatur amet modi, quasi quia error nesciunt, eaque illum quidem magnam. Provident suscipit dolorem quos explicabo? Atque!</p>
                            </div>
                            <div class="notif-action">
                                <a href="#">Répondre</a>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            <div class="collapse" id="collapsenotif">
                <div class="well">
                    <div class="content-notif">
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="http://lorempicsum.com/futurama/100/100/1" alt="character505">
                                </a>
                            </div>
                            <div class="media-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate commodi asperiores in odit, aspernatur amet modi, quasi quia error nesciunt, eaque illum quidem magnam. Provident suscipit dolorem quos explicabo? Atque!</p>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>