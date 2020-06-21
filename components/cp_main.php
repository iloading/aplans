 <main class="topRedondo bg-index d-flex flex-column align-items-start">

     <article class="container d-flex flex-column p-0 mb-5 alturaMain">

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

     <article class="w-100">


         <section class="m-4 mb-4 ml-0 pl-sm-0">

             <div class="col-12 d-flex text-center divBotoesMargin border-top border-bottom">
                 <a href="#" class="col-3 p-4 botoesMain">MAIN</a>
                 <a href="#" class="col-3 p-4 botoesMain">PEOPLE</a>
                 <a href="#" class="col-3 p-4 botoesMain">TASKS</a>
                 <a href="#" class="col-3 p-4 botoesMain">CHAT</a>

             </div>

         </section>
     </article>




     <div class="w-100 h-100">
         <button class="tablink" onclick="openPage('Home', this, 'red')">Home</button>
         <button class="tablink" onclick="openPage('News', this, 'green')" id="defaultOpen">News</button>
         <button class="tablink" onclick="openPage('Contact', this, 'blue')">Contact</button>
         <button class="tablink" onclick="openPage('About', this, 'orange')">About</button>

         <div id="Home" class="tabcontent">
             <h3>Home</h3>
             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo qui voluptatum maiores debitis vel maxime architecto beatae dolorum, assumenda ab! Suscipit saepe qui soluta nemo sint praesentium doloremque provident dicta.</p>
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