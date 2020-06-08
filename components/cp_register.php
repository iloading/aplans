<div class="col-lg-6 col-12">
    <div class="my__account__wrapper">
        <h3 class="account__title">Registo</h3>

        <form method="post" role="form" id="register-form" action="scripts/sc_register.php">
            <div class="account__form">

                <div class="input__box">
                    <label>Email adress<span>*</span></label>
                    <input type="email" name="email" required="required" onchange="email_validate(this.value);">
                </div>
                <div class="input__box">
                    <label>Password<span>*</span></label>
                    <input type="password" id="password" name="password" required="required" onkeyup="checkPass(); return false;">
                </div>
                <div class="input__box">
                    <label>Verify Password<span>*</span></label>
                    <div>
                        <input type="password" id="password_confirm" required="required" onkeyup="checkPass(); return false;">
                        <span id="confirmMessage" class="confirmMessage"></span>
                    </div>
                </div>
                <div class="input__box">
                    <label>Nome<span>*</span></label>
                    <input name="nome" type="text" required>
                </div>
                <div class="input__box">
                    <label>Apelido<span>*</span></label>
                    <input name="apelido" type="text" required>
                </div>
                <div class="input__box">
                    <label>Data de Nascimento<span>*</span></label>
                    <input name="data" type="date" required>
                </div>
                <div class="input__box">
                    <label>Telemóvel<span>*</span></label>
                    <input name="tel" type="tel" required>
                </div>
                <div class="input__box">
                    <label>Morada<span>*</span></label>
                    <input name="morada" type="text" required>
                </div>
                <div class="input__box">
                    <label>Código Postal<span>*</span></label>
                    <input name="cp" type="number" required>
                </div>
                <div class="input__box">
                    <label>Localidade<span>*</span></label>
                    <input name="localidade" type="text" required>
                </div>
                <div class="input__box">
                    <label>NIF<span>*</span></label>
                    <input name="nif" type="number" required>
                </div>
                <div class="form-group">
                    <div class="form__btn">
                        <button class="mx-auto col-sm-12 p-1 " type="submit">Register</button>
                    </div>

                </div>
            </div>
        </form>


    </div>
</div>