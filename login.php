<?php include "includes/header.php";
if(!isset($_SESSION["username"])) {  ?>
    <div class="login-wrapper">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="frm-login">
            <label>Email Address</label>
            <input type="text" autofocus name="email" class="email inptxt" />
            <label>Password</label>
            <input type="password" name="password" class="password inptxt" />
            <label>User Type</label>
            <select class="inptxtsel" name="usertype">
                <option value="superadmin">Editor</option>
                <option value="admin">Sub Editor</option>
                <option value="user" selected>Reporter</option>
            </select>
            <input type="submit" name="btn-login" class="btn-login btn-common" value="LOGIN"/>
        </form> 
    </div>
<?php
    if(isset($_POST['btn-login']))
    { 
        require_once("includes/userlogin.php");
    }
    
} else {
    header("Location: dashboard.php");
} 
include "includes/footer.php";?>