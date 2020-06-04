 <main class="alturaMainLogin text-white bg-index d-flex flex-column align-items-center">
     <article class="container-fluid d-flex p-0 mainCentro landingCentro">
         <div class="w-100">


             <div class="container-fluid w-100 bg-index">
                 <div class="w-100">
                     <div class="card animated bounceInDown myForm w-100 bg-index borderNone">
                         <div class="text-center mb-4">
                             <img src="imagens/logo/logo.png" width="300" height="225">

                             <p class="pt-2"><span style="color: #eab200">Streaming</span> made simple</p>
                         </div>


                         <div class="card-header bg-preto borderNone">
                             <ul class="nav nav-tabs row navModal m-0" role="tablist">
                                 <li class=" mb-1 col-6 text-center" role="presentation"><a class="tabsTexto loginTit" href="#loginTab" aria-controls="loginTab" role="tab" data-toggle="tab">Login</a>

                                 </li>

                                 <li class=" mb-1 col-6 text-center" role="presentation" class="active"><a class="tabsTexto loginTit" href="#registerTab" aria-controls="registerTab" role="tab" data-toggle="tab">Register</a>

                                 </li>

                             </ul>
                         </div>
                         <div class="card-body">
                             <div class="tab-content">
                                 <div role="tabpanel" class="tab-pane container-fluid p-0" id="registerTab">
                                     <form action="index.html" method="get" id="form1">
                                         <div id="dynamic_container">
                                             <div class="input-group">
                                                 <div class="input-group-prepend">
                                                     <span class="input-group-text br-15"><i class="fas fa-user"></i></span>
                                                 </div>
                                                 <input type="text" placeholder="Username" class="form-control" required />
                                             </div>
                                             <div class="input-group mt-3">
                                                 <div class="input-group-prepend">
                                                     <span class="input-group-text br-15"><i class="fas fa-lock"></i></span>
                                                 </div>
                                                 <input type="password" placeholder="Password" class="form-control" required />
                                             </div>
                                             <div class="input-group mt-3">
                                                 <div class="input-group-prepend">
                                                     <span class="input-group-text br-15"><i class="fas fa-at"></i></span>
                                                 </div>
                                                 <input type="email" placeholder="Email" class="form-control" required />
                                             </div>
                                         </div>

                                     </form>
                                     <div class="card-footer pl-0 borderNone bg-preto">
                                         <a class="btn btn-secondary btn-sm" id="add_more"><i class="fas fa-plus-circle"></i> Add extra details</a>
                                         <a class="btn btn-secondary btn-sm" id="remove_more"><i class="fas fa-trash-alt"></i> Remove</a>
                                     </div>
                                     <div class="mt-3">
                                         <button type="submit" form="form1" value="Submit" class="btn btn-success btn-sm float-right submit_btn"><i class="fas fa-arrow-alt-circle-right"></i> Submit</button>
                                     </div>
                                 </div>


                                 <div role="tabpanel" class="tab-pane active container-fluid p-0" id="loginTab">
                                     <form action="index.html" method="get" id="form2">
                                         <div id="dynamic_container">

                                             <div class="input-group mt-3">
                                                 <div class="input-group-prepend">
                                                     <span class="input-group-text br-15"><i class="fas fa-user"></i></span>
                                                 </div>
                                                 <input type="text" placeholder="Username" class="form-control" required />
                                             </div>
                                             <div class="input-group mt-3">
                                                 <div class="input-group-prepend">
                                                     <span class="input-group-text br-15"><i class="fas fa-lock"></i></span>
                                                 </div>
                                                 <input type="password" placeholder="Password" class="form-control" required />
                                             </div>
                                         </div>
                                         <div class="mt-3">
                                             <button type="submit" form="form2" value="Submit" class="btn btn-success btn-sm float-right submit_btn"><i class="fas fa-arrow-alt-circle-right"></i> Submit</button>
                                         </div>
                                     </form>
                                 </div>
                             </div>
                         </div>

                     </div>
                 </div>
             </div>

         </div>
     </article>


 </main>