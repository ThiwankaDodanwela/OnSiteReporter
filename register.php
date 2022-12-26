<?php include "includes/header.php";
if(!isset($_SESSION["username"])) {  ?>
    <div class="registration-wrapper">
        <ul class="registration-info">
            <li>Please fill the below form to creat an Super Admin account for your Media Company.</li>
            <li>You will be the authorised person to create users  and handle there accounts after you registered with this application.</li>
            <li>You can have only one Super admin account for a specfic company.</li>
        </ul>
        <div class="registration-form-wrapper">
            <form action="" method="post" id="form-register">
                <div class="col-1">
                    <label class="lab-fname">First Name</label>
                    <input type="text" autofocus name="fname" class="fname inptxt" />
                    <label class="lab-lname">Last Name</label>
                    <input type="text" name="lname" class="lname inptxt" />
                    <label class="lab-email">Email Address</label>
                    <input type="email" name="email" class="email inptxt" />
                </div>
                <div class="col-2">
                    <label class="lab-medianame">Media Name</label>
                    <input type="text" name="medianame" class="medianame inptxt" />
                    <label class="lab-mediatype">Media Type</label>
                    <select class="inptxtsel mediatype">
                        <option value="newspublisher" selected>News Publisher</option>
                        <option value="tvbroadcaster">TV Broadcaster</option>
                        <option value="radiobroadcaster">Radio Broadcaster</option>
                        <option value="webnewschannel">Web News Channel</option>
                    </select>
                    <label class="lab-regno">Registration No.</label>
                    <input type="text" name="regno" class="regno inptxt" />
                </div>
                <div class="col-3">
                    <label class="lab-password">Password</label>
                    <input type="password" name="password" class="password inptxt" />
                    <label class="lab-conpassword">Confirm Password</label>
                    <input type="password" name="conpassword" class="conpassword inptxt" />
                    <div class="captcha"><div class="g-recaptcha" data-sitekey="6LfUuwwTAAAAAFmkE3abo6wNqOg8Es1NvK7rNdDN"></div></div>
                    <input type="hidden" name="error-count" id="error-count"/>
                    <input type="button" name="btn-register" class="btn-register btn-common" id="register" value="REGISTER"/>
                </div>
            </form>
        </div>
    </div> 
<?php } else {
    header("Location: dashboard.php");
} 
include "includes/footer.php";?>