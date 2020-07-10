<div class="w-100 d-flex flex-column">
    <div class="position-fixed" style="width: inherit; background-color: #F1F3F6; z-index:2">
        <article class="container d-flex flex-column pl-3 pr-3 pt-4 pb-4" style="max-width:inherit;">

      



            <div class="d-flex align-items-center">
                <div class="d-none justify-content-between" id="organizador">
                    <span class="pl-2 pr-2 pt-1 pb-1" style="background-color: rgba(109, 63, 230, 0.2); border-radius: 20px; color: #6F41E9; font-weight: 500;">Organizador</span>
                    <div class="pl-4 d-flex align-items-center"> <img style="width: 1.5rem; height:1.5rem" src="images/settings/gear.png"> </div>
                </div>

                
                    <div class="d-flex justify-content-center dropdown" id="imagem">
                        <div  class="avatar-circular d-flex"> 
                            <img  onclick="myFunction()" class="dropbtn" src="assets/avatar.png"> 
                        </div>
                        <div id="myDropdown" class="dropdown-content">
                            <a href="#">Link 1</a>
                            <a href="#">Link 2</a>
                            <a href="#">Link 3</a>
                        </div>
                    </div>
                   
                

                <div class="d-flex flex-column pl-3 justify-items-center">
                    <div id="titulo">
                        <h2 class="font-weight-bold text-branco-evento"> Outdoor Cinema</h2>
                    </div>
                    <div id="data_evento">
                        <span style="color: #F1F3F6;">10 pm, august 4, 2020</span>
                    </div>
                </div>

                <div class="d-none justify-content-center" id="botoes_evento">
                    <button type="button" class="botaoParticipar">+ Participar</button>
                    <button type="button" class="botaoAbandonar">- Abandonar</button>
                </div>
            </div>


        </article>

        <button class="tablink" id="defaultOpen" style="font-size:1.2rem;">Home</button>
        <button class="tablink" style="font-size:1.2rem;">Pessoas</button>
        <button class="tablink" style="font-size:1.2rem;">Tarefas</button>
        <button class="tablink" style="font-size:1.2rem;">Chat</button>
    </div>
    <div class="w-100 h-100" style="margin-top: 13rem;">
        <div id="Home" class="tabcontent container-fluid">
            <h2 class="font-weight-bold mt-4 ml-2">Descrição</h2>
            <p class="descricaoFont pt-3 ml-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo qui voluptatum maiores debitis vel maxime architecto beatae dolorum, assumenda ab! Suscipit saepe qui soluta nemo sint praesentium doloremque provident dicta.</p>
            <div class="ml-2 mr-2 marginT">
                <h3 class="font-weight-bold">Participantes</h3>
                <div id="myProgressHome1">
                    <div id="myBarHome1"></div>
                </div>
            </div>
            <div class="container-fluid pt-2">
                <div class="row">
                    <div class="col-6">
                        <h6 class="pt-2 font-weight-bold" style="color:grey;">8/10</h6>
                    </div>
                    <div class="col-6 d-flex align-items-center" style="justify-content: flex-end"> <a href="#" class="font-weight-bold" style="font-size: 1rem;text-decoration: none;color:grey;font-style:bold;">Ver mais +</a> </div>
                </div>
            </div>
            <div class=" ml-2 marginT">
                <h3 class="font-weight-bold">Tarefas Restantes</h3>
            </div>
            <div class="container-fluid p-4">
                <div class="row">
                    <div class="col-6 mainTasks">
                        <h5 class="pb-1">Projetor</h5> <span class="text-muted">Trazer o projector man</span>
                    </div>
                    <div class="col-6 d-flex align-items-center justify-content-end">
                        <div class="form-check text-right"> <input class="selectSize" type="checkbox" value="" id="defaultCheck1"> </div>
                    </div>
                </div>
            </div>


        </div>
        <div id="Pessoas" class="tabcontent container-fluid">
            <div class="d-flex ml-2 mt-4">
                <h2 class="font-weight-bold pl-0">4 participantes</h2>
                <div class="d-flex align-items-center justify-content-end ml-auto"> <button type="button" class="p-1" style="border: 2px; border-style: dashed; border-color: #6F41E9; border-radius: 10px; width: 2.5rem; height: 2.5rem;"><img src="images/people/plus.png" width="15" height="15"></button> </div>
            </div>
            <div class="row mb-2 pt-3 pb-3">
                <div class="pl-0 pt-2 pb-2 pr-0 ml-4 d-flex align-items-center col-2">
                    <div class=" avatar-circular"> <img src="images/people/avatar1.jpg"> </div>
                </div>
                <div class="pl-3 d-flex align-items-center col-8 pr-0">
                    <div class="row">
                        <div class="col-12 pr-0"> <span class="font-weight-normal" style="font-size:1.4rem">Miguel Costa</span> <span class="pl-2 pr-2 pt-1 pb-1" style="background-color: rgba(109, 63, 230, 0.2); border-radius: 20px; color: #6F41E9; font-weight: 500;">Organizador</span> </div>
                        <p class="col-12 font-weight-light" style="margin-bottom: 8px;">Traficante de Pipocas</p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row mb-2 pt-3 pb-3">
                <div class="pl-0 pt-2 pb-2 pr-0 ml-4 d-flex align-items-center col-2">
                    <div class=" avatar-circular"> <img src="images/people/avatar2.jpg"> </div>
                </div>
                <div class="pl-3 d-flex align-items-center col-8 pr-0">
                    <div class="row">
                        <div class="col-12 pr-0"> <span class="font-weight-normal" style="font-size:1.4rem">José Marques</span> </div>
                        <p class="col-12 font-weight-light" style="margin-bottom: 8px;">Dono do Projetor</p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row mb-2 pt-3 pb-3">
                <div class="pl-0 pt-2 pb-2 pr-0 ml-4 d-flex align-items-center col-2">
                    <div class=" avatar-circular"> <img src="images/people/avatar3.jpg"> </div>
                </div>
                <div class="pl-3 d-flex align-items-center col-8 pr-0">
                    <div class="row">
                        <div class="col-12 pr-0"> <span class="font-weight-normal" style="font-size:1.4rem">Pedro Matias</span> </div>
                        <p class="col-12 font-weight-light" style="margin-bottom: 8px;">Encarregado dos Snacks</p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row mb-2 pt-3 pb-3">
                <div class="pl-0 pt-2 pb-2 pr-0 ml-4 d-flex align-items-center col-2">
                    <div class=" avatar-circular"> <img src="images/people/avatar4.jpg"> </div>
                </div>
                <div class="pl-3 d-flex align-items-center col-8 pr-0">
                    <div class="row">
                        <div class="col-12 pr-0"> <span class="font-weight-normal" style="font-size:1.4rem">Diana Sofia</span> </div>
                        <p class="col-12 font-weight-light" style="margin-bottom: 8px;">O critíco</p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="p-3 d-flex align-items-center justify-content-center ml-auto"> <button type="button" class="p-1" style="border: 2px; border-style: dashed; border-color: #6F41E9; border-radius: 20px; font-size: 1rem; width: 10rem; height: 3rem; color:#6F41E9;">Invite Friends <img src="images/people/plus.png" class="pl-2 pb-2" width="22" height="22"></button> </div>
        </div>
        <div id="Tarefas" class="tabcontent container-fluid">
            <div class="d-flex mt-4">
                <h2 class="font-weight-bold ml-2">6 Tarefas</h2>
                <div class="p-0 d-flex align-items-center justify-content-end ml-auto"> <button type="button" class="p-1" style="border: 2px; border-style: dashed; border-color: #6F41E9; border-radius: 10px; width: 2.5rem; height: 2.5rem;"><img src="images/people/plus.png" width="15" height="15"></button> </div>
            </div>
            <div class="container-fluid p-4">
                <div class="row">
                    <div class="col-6 mainTasks">
                        <h5 class="pb-1">Projetor</h5> <span class="text-muted">Trazer o projector man</span>
                    </div>
                    <div class="col-6 pr-1 d-flex align-items-center justify-content-end">
                        <div class="form-check text-right"> <input class="selectSize" type="checkbox" value="" id="defaultCheck1"> </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="Chat" class="tabcontent container-fluid pt-0 pl-4 pr-4">
            <ul class="container-fluid p-0">
                <div class="row mt-4 d-flex align-items-center">
                    <div class=" avatar-circular ml-3 mr-4"> <img src="images/people/avatar4.jpg"> </div>
                    <li class="him">Como é que estão todos?</li>
                </div>
                <div class="row mt-4 d-flex align-items-center flex-row-reverse">
                    <div class=" avatar-circular ml-3 mr-4"> <img src="assets/avatar.png"> </div>
                    <li class="me">Pronto para a festa!</li>
                </div>
                <div class="row mt-4 d-flex align-items-center">
                    <div class=" avatar-circular ml-3 mr-4"> <img src="images/people/avatar3.jpg"> </div>
                    <li class="him">Qual é o filme? Tenho uma sugestão!</li>
                </div>
                <div class="row mt-4 d-flex align-items-center">
                    <div class=" avatar-circular ml-3 mr-4"> <img src="images/people/avatar2.jpg"> </div>
                    <li class="him">Pipocas Doces ou Salgadas</li>
                </div>
                <div class="row mt-4 d-flex align-items-center flex-row-reverse">
                    <div class=" avatar-circular ml-3 mr-4"> <img src="assets/avatar.png"> </div>
                    <li class="me">Pipocas doces FOSHOU</li>
                </div>
                <div class="row mt-4 d-flex align-items-center flex-row-reverse">
                    <div class=" avatar-circular ml-3 mr-4"> <img src="assets/avatar.png"> </div>
                    <li class="me">LMAO</li>
                </div>
                <div class="row mt-4 d-flex align-items-center flex-row-reverse">
                    <div class=" avatar-circular ml-3 mr-4"> <img src="assets/avatar.png"> </div>
                    <li class="me">LMAO</li>
                </div>
                <div class="row mt-4 d-flex align-items-center flex-row-reverse">
                    <div class=" avatar-circular ml-3 mr-4"> <img src="assets/avatar.png"> </div>
                    <li class="me">LMAO</li>
                </div>
                <div class="row mt-4 d-flex align-items-center flex-row-reverse">
                    <div class=" avatar-circular ml-3 mr-4"> <img src="assets/avatar.png"> </div>
                    <li class="me">LMAO</li>
                </div>
                <div class="row mt-4 d-flex align-items-center flex-row-reverse">
                    <div class=" avatar-circular ml-3 mr-4"> <img src="assets/avatar.png"> </div>
                    <li class="me">LMAO</li>
                </div>
                <div class="row mt-4 d-flex align-items-center flex-row-reverse">
                    <div class=" avatar-circular ml-3 mr-4"> <img src="assets/avatar.png"> </div>
                    <li class="me">LMAO</li>
                </div>
                <div class="row mt-4 d-flex align-items-center flex-row-reverse">
                    <div class=" avatar-circular ml-3 mr-4"> <img src="assets/avatar.png"> </div>
                    <li class="me">LMAO</li>
                </div>
                <div class="row mt-4 d-flex align-items-center flex-row-reverse">
                    <div class=" avatar-circular ml-3 mr-4"> <img src="assets/avatar.png"> </div>
                    <li class="me">LMAO</li>
                </div>
                <div class="row mt-4 d-flex align-items-center flex-row-reverse">
                    <div class=" avatar-circular ml-3 mr-4"> <img src="assets/avatar.png"> </div>
                    <li class="me">LMAO</li>
                </div>
                <div class="row mt-4 d-flex align-items-center flex-row-reverse">
                    <div class=" avatar-circular ml-3 mr-4"> <img src="assets/avatar.png"> </div>
                    <li class="me">LMAO</li>
                </div>
                <div class="row mt-4 d-flex align-items-center flex-row-reverse">
                    <div class=" avatar-circular ml-3 mr-4"> <img src="assets/avatar.png"> </div>
                    <li class="me">LMAO</li>
                </div>
                <div class="row mt-4 d-flex align-items-center flex-row-reverse">
                    <div class=" avatar-circular ml-3 mr-4"> <img src="assets/avatar.png"> </div>
                    <li class="me">LMAO</li>
                </div>
            </ul>
            <div style="position: relative; bottom: 0; width: 100%;">
                <hr>
                <div class="pl-3 pr-3 pb-3 pt-0 d-flex align-items-center justify-content-left ml-auto"> <input type="text" placeholder="Escreve algo" class="p-1" style="border: none; border-radius: 20px; font-size: 1rem; width: 100rem; height: 3rem;"> </div>
            </div>
        </div>



    </div>

    </main>

