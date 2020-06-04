<div class="container p-3">
    <section class="row d-flex" style="align-items: baseline;">
        <div class="col-6 text-left" style="height: 100%;">
            <div class="div-logo"><a href="index.php"><img src="assets/aplans.png" alt="logotipo"></a></div>
        </div>
        <div class="col-6 text-right" style="height:100%">
            <div class="avatar-circular"><img src="assets/avatar.png" alt="avatar"></div>
        </div>
    </section>
</div>
<div class="container p-3">
    <section class="row pl-3">
        <p class="index-titulos">Created Plans</p>
    </section>
    <section class="row d-flex" style="align-items: center;">

        <div class="col-8 text-center ">
            <div class="events container">
                <div class="row">
                    <?php
                    echo '<p class="col-12">' . $_SESSION['username'] . ' </p>'
                    ?>
                </div>
            </div>
        </div>

        <div class="col-4 text-center ">
            
            <a class="btn btn-lg bg-verde" href="./scripts/sc_logout.php">ADMIN</a>
        </div>




    </section>
</div>