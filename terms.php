<!DOCTYPE html>
<html lang="en">

<head>

  <?php
  require_once "helpers/hp_head.php";
  ?>

  <title>Bloop | </title>


</head>




<body>

  <!--NAV-->
  <?php
  require_once "components/cp_nav.php";
  ?>
  <!--/NAV-->


  <main class="alturaMain text-white bg-30 d-flex flex-column align-items-start">
    <article class="container p-0 mainCentro mb-5 alturaMain">
      <section class="row mt-4 mb-4 ml-0 pl-3 pl-sm-0">

        <div class="col-2 col-sm-1 text-left pr-0 pl-0">
          <img src="imagens/terms/terms_amarelo.png" width="80" height="80">
        </div>
        <div class="col-9 col-sm-11 align-self-center pl-3 pl-sm-5 pr-0">
          <p class="m-0 h1 text-left tituloTerms">Terms and Conditions</p>

        </div>
      </section>



      <div class="container-fluid p-0 mt-4 m-0">
        <div id="accordion" class="accordion">
          <div class="card m-b-0 border-preto border-bottom-preto">
            <div class="card-header collapsed2:before bg-preto" aria-expanded="true" data-toggle="collapse" data-patent="#accordion" href="#collapse1">
              <a class="card-title">
                Termination
              </a>

            </div>
            <div class="card-block collapsed p-3 bg-30" id="collapse1">
              <p>This Agreement shall be subject to termination in the absolute discretion of the Representatives, by notice given to the Company prior to delivery of and payment for the Securities, if at any time prior to such delivery and payment (i) trading in the Company’s Common Stock shall have been suspended by the Commission or the New York Stock Exchange or trading in securities generally on the New York Stock Exchange shall have been suspended or limited or minimum prices shall have been established on such exchange, (ii) a banking moratorium shall have been declared either by Federal or New York State authorities.</p>
            </div>

            <div class="card-header collapsed bg-preto" aria-expanded="true" data-toggle="collapse" data-patent="#accordion" href="#collapse2">
              <a class="card-title">
                Copyright
              </a>

            </div>
            <div class="card-block collapse p-3 bg-30" id="collapse2">
              <p>Terms and Conditions agreements act as a legal contract between you (the company) who has the website or mobile app and the user who access your website and mobile app.
                Having a Terms and Conditions agreement is completely optional. No laws require you to have one. Not even the super-strict and wide-reaching General Data Protection Regulation (GDPR).
                It’s up to you to set the rules and guidelines that the user must agree to. You can think of your Terms and Conditions agreement as the legal agreement where you maintain your rights to exclude users from your app in the event that they abuse your app, where you maintain your legal rights against potential app abusers, and so on.
                Terms and Conditions are also known as Terms of Service or Terms of Use.</p>
            </div>

            <div class="card-header collapsed bg-preto" aria-expanded="true" data-toggle="collapse" data-patent="#accordion" href="#collapse3">
              <a class="card-title">
                Accounts
              </a>

            </div>
            <div class="card-block collapse p-3 bg-30" id="collapse3">
              <p>This document, along with any other documents we give you pertaining to your account(s), is a contract that establishes rules, which control your account(s) with us. Please read this carefully. If you sign the signature card or open or continue to have your account with us, you agree to these rules. You will receive a separate schedule of rates, qualifying balances, and fees if they are not included in this document. If you have any questions, please call us.
                This agreement is subject to applicable federal laws and the laws of the state of Illinois (except to the extent that this agreement can and does vary such rules or laws). The body of state and federal law that governs our relationship with you, however, is too large and complex to be reproduced here. The purpose of this document is to:
                1.summarize some laws that apply to common transactions;
                2.establish rules to cover transactions or events which the law does not regulate;
                3.establish rules for certain transactions or events which the law regulates but permits variation by agreement; and
                4.give you disclosures of some of our policies to which you may be entitled or in which you may be interested.
                If any provision of this document is found to be unenforceable according to its terms, all remaining provisions will continue in full force and effect. We may permit some variations from our standard agreement, but we must agree to any variation in writing either on the signature card for your account or in some other document.
                As used in this document the words 'we,' 'our,' and 'us" mean the financial institution and the words 'you' and 'your' mean the account holder(s) and anyone else with the authority to deposit, withdraw, or exercise control over the funds in the account. The headings in this document are for convenience or reference only and will not govern the interpretation of the provisions. Unless it would be inconsistent to do so, words and phrases used in this document should be construed so the singular includes the plural and the plural includes the singular.</p>
            </div>

            <div class="card-header collapsed bg-preto" aria-expanded="true" data-toggle="collapse" data-patent="#accordion" href="#collapse4">
              <a class="card-title">
                Privacy
              </a>

            </div>
            <div class="card-block collapse p-3 bg-30" id="collapse4">
              <p>If your website or app (regardless if it’s a mobile app or a desktop app) collects and uses any kind of personal information from users, you’re required by law to have the Privacy Policy agreement and make it available to your users, preferably before they start using your website or app.
                “Personal information” can include any information that can be used to identify an individual, such as a name, email address, mailing address, birthdate, IP address, etc.
                In the United States, for example, California’s Online Privacy Protection Act (CalOPPA) requires businesses that collect any personal information from users in California to have a Privacy Policy agreement.
                And, due to the widely accessible nature of online businesses (like e-commerce stores), CalOPPA in effect means that any websites or apps (especially US businesses) that collect personal information from users must have this legal agreement since limiting a California audience is not feasible.
                CalOPPA requires that this agreement is conspicuously posted on the website or through the app, to include the word “Privacy” in the title of the agreement and in the link’s text that links to this legal page.</p>
            </div>








          </div>



        </div>
      </div>


    </article>

    <?php
    require_once "components/cp_footer.php"
    ?>

  </main>



  <article class="navBotttom container-fluid fixed-bottom navbar navbar-dark bg-preto justify-content-center">
    <div class="row w-100 pt-2 pb-2 text-center">

      <div class="col-4 p-0">
        <a href="myaccount.html"><img class="userLogo" src="Imagens/user_branco.png" alt=""></a>
      </div>

      <div class="col-4 p-0">
        <a href="index.html"><i class="fas fa-home fa-2x" style="color:white"></i></a>
      </div>

      <div class="col-4 p-0">
        <a href="search.html"><i class="fas fa-search fa-2x" style="color:white"></i></a>
      </div>
    </div>
  </article>

  <?php 
  require_once "helpers/hp_js.php"
  ?>






</body>

</html>