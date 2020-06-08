 <main class="alturaMainLogin text-white bg-index d-flex flex-column align-items-center">
     <article class="container-fluid d-flex p-0 mainCentro landingCentro">
         <div class="w-100">


             <div class="container-fluid w-100 bg-index">
                 <div class="w-100">
                     <div class="card animated bounceInDown myForm w-100 bg-index borderNone">
                         <div class="text-center mb-4">
                             <img class="div-logo-landingPage div-logo-landingPage-img" src="assets/aplans.png">

                         </div>


                         <div class="card-header bg-index borderNone">
                             <ul class="nav nav-tabs row navModal m-0" role="tablist">
                                 <li class=" mb-1 col-6 text-center" role="presentation"><a class="tabsTexto loginTit" href="#loginTab" aria-controls="loginTab" role="tab" data-toggle="tab">Login</a>

                                 </li>

                                 <li class=" mb-1 col-6 text-center" role="presentation" class="active"><a class="tabsTexto loginTit" href="#registerTab" aria-controls="registerTab" role="tab" data-toggle="tab">Sign Up</a>

                                 </li>

                             </ul>
                         </div>
                         <div class="card-body">
                             <div class="tab-content">
                                 <div role="tabpanel" class="tab-pane container-fluid p-0" id="registerTab">
                                     <form action="index.html" method="get" id="form1">
                                         <div id="dynamic_container">
                                             <div class="input-group">
                                            
                                                 <input type="text" placeholder="Username" class="form-control" required />
                                             </div>
                                             <div class="input-group mt-3">
                                                
                                                 <input type="password" placeholder="Password" class="form-control" required />
                                             </div>
                                             <div class="input-group mt-3">
                                                
                                                 <input type="email" placeholder="Email" class="form-control" required />
                                             </div>
                                         </div>

                                     </form>
                                     <div class="card-footer p-0 pt-3 borderNone bg-index w-100">
                                         <a class="btn btn-secondary btn-sm submit_btn add-event m-0" id="add_more">+</a>
                                         <a class="btn btn-secondary btn-sm submit_btn add-event m-0" id="remove_more">-</a>
                                     </div>
                                     <div class="mt-3">
                                         <button type="submit" form="form1" value="Submit" class="btn btn-success btn-sm float-right submit_btn w-100">Sign Up</button>
                                     </div>
                                 </div>


                                 <div role="tabpanel" class="tab-pane active container-fluid p-0" id="loginTab">
                                     <form action="index.html" method="get" id="form2">
                                         <div id="dynamic_container">

                                             <div class="input-group mt-3">
                                                 
                                                 <input type="text" placeholder="Email Adress" class="form-control" required />
                                             </div>
                                             <div class="input-group mt-3">
                                                 
                                                 <input type="password" placeholder="Password" class="form-control" required />
                                             </div>
                                         </div>
                                         <div class="mt-3">
                                             <button type="submit" form="form2" value="Submit" class="btn btn-success btn-sm float-right submit_btn w-100">Login</button>
                                         </div>
                                     </form>
                                 </div>
                                 
                             </div>
                             
                         </div>

                     </div>
                 </div>
             </div>
             <div class="text-center">
                <p class="mb-0">You are completely safe.</p>
                <p style="color: #BAE4AC;">Read our Terms & Conditions</p>
            </div>
         </div>
         
     </article>


 </main>