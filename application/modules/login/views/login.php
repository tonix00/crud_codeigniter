
<form action="/login/checkLogin" method="post" class="form">
    <label for="user-id" class="form-title">USERNAME</label>
    <input type="text" id="email" name="email" class="input input-text">
    <label for="password" class="form-title">PASSWORD</label>
    <input type="text" id="password" name="password" class="input input-text">

   <?php if(isset($error_login)){ ?>
        <div class="alert alert-danger alert-block" style="margin-top: 20px">
            <strong><?php echo $error_login; ?></strong>
        </div>
   <?php } ?>
    
    <label for="submit" class="form-button">
        <div class="button">
            <p class="button-text">Login</p>
        </div>
    </label>
    <input type="submit" id="submit" class="input input-submit">
</form>