<?php
/**
 * Created by IntelliJ IDEA.
 * User: poznye
 * Date: 3/13/2017
 * Time: 12:22 PM
 */
if ( isset( $_POST ['contact'] ) ) {
	$service = new ServiceDriver();
	$service->sendMail();
}

?><div class="contact-us-to-hide">
<div style="text-align: center" class="modal-header custom-header-one"><?php echo $header; ?></div>
<div class="container modal-content" style="margin: auto; background-color: #f3f3f4">
<form class="form-horizontal" id="email_form" action="" method="post">
    <fieldset>

            <!-- Form Name -->
            <legend style="text-align: center;"><h3></h3>
            </legend>


            <!-- Name -->
            <div class="form-group">
                <label class="col-md-4 control-label" required><i style="font-size:30px; color: #2756de;"
                                                                  class="glyphicon glyphicon-user"></i></label>
                <div class="col-md-4">
                    <p>

                        <input style="background-color: #e7e7e7; width: 43%;" style="background-color: #e7e7e7"
                               name="inputName"
                               type="text" required="required"
                               class="validate[required,custom[onlyLetter],length[0,100]] feedback-input"
                               placeholder="Name"/>
                    </p>
                </div>
            </div>


            <!-- Email -->
            <div class="form-group">
                <label class="col-md-4 control-label" required><i style="font-size:30px; color: #2756de;"
                                                                  class="glyphicon glyphicon-envelope"></i></label>
                <div class="col-md-4">
                    <p class="email">
                        <input style="background-color: #e7e7e7; width: 43%;" name="inputEmail" type="email"
                               required="required"
                               class="validate[required,custom[email]] feedback-input"
                               placeholder="Email"/>
                    </p>
                </div>
            </div>

            <!-- Comment -->
            <div class="form-group">
                <label class="col-md-4 control-label" required><i style="font-size:30px; color: #2756de;"
                                                                  class="glyphicon glyphicon-comment"></i></label>
                <div class="col-md-4">
                    <p class="text">
                        <textarea style="background-color: #e7e7e7; width: 43%;" name="Comment" required="required"
                                  class="validate[required,length[6,300]] feedback-input"
                                  placeholder="Any Additional Comments (Required)"></textarea>
                    </p>
                </div>
            </div>

            <!--reCaptcha -->
            <div class="form-group">
                <label class="col-md-4 control-label" required></label>
                <div class="col-md-4">
                    <div class="g-recaptcha" data-sitekey="6LcNzRgUAAAAALXda9wKU7l1iOj5HvdY-eLxqCRY"></div>
                </div>

            </div>

            <!-- Button -->
            <div class="form-group" style="margin-left=50%; text-align: center">
                <div class="col-md-4">
                    <button class="btn-danger" name="contact" required>SEND</button>
                </div>
            </div>


    </fieldset>
</form>
</div>
<br>
</div>