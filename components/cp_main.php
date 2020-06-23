 <main class="topRedondo bg-index d-flex flex-column align-items-start">

     <article class="container d-flex flex-column pl-5 pr-5 pt-4 pb-4 alturaMain" style="max-width:inherit;">

         <div class="d-flex align-itens-center justify-content-between">
             <div class="d-flex flex-column mr-3">
                 <div>
                     <h1 class="font-weight-bold display-3 text-azul-aplans">Outdoor Cinema</h1>
                 </div>

                 <div>
                     <h2 class="text-secondary">10 pm, august 4, 2020</h2>
                 </div>
             </div>

             <div class=" avatar-circular">
                 <img src="assets/avatar.png">
             </div>

         </div>


     </article>

     <!--<article class="w-100">


         <section class="m-4 mb-4 ml-0 pl-sm-0">

             <div class="col-12 d-flex text-center divBotoesMargin border-top border-bottom">
                 <a href="#" class="col-3 p-4 botoesMain">MAIN</a>
                 <a href="#" class="col-3 p-4 botoesMain">PEOPLE</a>
                 <a href="#" class="col-3 p-4 botoesMain">TASKS</a>
                 <a href="#" class="col-3 p-4 botoesMain">CHAT</a>

             </div>

         </section>
     </article>-->




     <div class="w-100 h-100">
         <button class="tablink" onclick="openPage('Home')" id="defaultOpen">Home</button>
         <button class="tablink" onclick="openPage('News')">News</button>
         <button class="tablink" onclick="openPage('Contact')">Contact</button>
         <button class="tablink" onclick="openPage('About')">About</button>

         <div id="Home" class="tabcontent">
             <h1 class="display-3 font-weight-bold mt-4 ml-4">Descrição</h1>
             <p class="descricaoFont pt-4 pl-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo qui voluptatum maiores debitis vel maxime architecto beatae dolorum, assumenda ab! Suscipit saepe qui soluta nemo sint praesentium doloremque provident dicta.</p>

             <div class="pl-4 pt-4">

                 <p class="descricaoFont font-weight-bold">Slots</p>

                 <div id="myProgress1">
                     <div id="myBar1"></div>
                 </div>

             </div>

             <div class="container-fluid pl-4 pt-4">

                 <div class="row">

                     <div class="col-6">
                         <h3 class="pt-3">8/10</h3>
                     </div>
                     <div class="col-6 text-right">
                         <h3 class="pt-3">View More +</h3>
                     </div>

                 </div>

             </div>

             <div class="pl-4 pt-4 marginT">
                 <p class="descricaoFont font-weight-bold">Tarefas Restantes</p>
             </div>

             <div class="container-fluid ml-3 pl-4 pt-4">
                 <div class="row">
                     <div class="col-6 mainTasks">
                         <h1 class="pt-4 pb-1">Projetor</h1>
                         <h1 class="pb-4 text-muted">Trazer o projector man</h1>
                     </div>

                     <div class="col-6">
                         <div class="form-check selectMargin">
                             <input class="selectSize" type="checkbox" value="" id="defaultCheck1">
                         </div>
                     </div>
                 </div>
             </div>





         </div>

         <div id="News" class="tabcontent">
             <h3>News</h3>
             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo qui voluptatum maiores debitis vel maxime architecto beatae dolorum, assumenda ab! Suscipit saepe qui soluta nemo sint praesentium doloremque provident dicta.</p>
         </div>

         <div id="Contact" class="tabcontent">
             <h3>Contact</h3>
             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo qui voluptatum maiores debitis vel maxime architecto beatae dolorum, assumenda ab! Suscipit saepe qui soluta nemo sint praesentium doloremque provident dicta.</p>
         </div>

         <div id="About" class="tabcontent">
             <h3>About</h3>
             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo qui voluptatum maiores debitis vel maxime architecto beatae dolorum, assumenda ab! Suscipit saepe qui soluta nemo sint praesentium doloremque provident dicta.</p>
         </div>

     </div>



 </main>