<div class="col-lg-6 col-12 " id="login1">
    <div class="my__account__wrapper">
        <h3 class="account__title">Login</h3>
        <form role="form" action="scripts/sc_login.php" method="post">
            <div class="account__form">
                <div class="input__box">
                    <label class=" form-control-label">Email address <span>*</span></label>
                    <input name="email" type="email" required="required">
                </div>
                <div class="input__box">
                    <label>Password<span>*</span></label>
                    <input name="password" type="password" required>
                </div>

                <div class="form__btn">
                    <button type="submit">Login</button>
                    <label class="label-for-checkbox">
                        <input id="rememberme" class="input-checkbox" name="rememberme" value="forever" type="checkbox">
                        <span>Remember me</span>
                    </label>
                </div>
                <a class="forget_pass" href="#">Lost your password?</a>
            </div>
        </form>
    </div>
</div>