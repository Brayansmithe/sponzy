

    @extends('layout/contain')

    @section('titrePage')
        Machines minieres
    @endsection

    @section('contain') 

        <section class="container mt-3 d-lg-flex justify-content-between align-items-center entete  ">
            <div class="entete1">
                <svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 65 65" fill="none">
                    <circle cx="32.5" cy="32.5" r="30" fill="#291E41" stroke="white" stroke-width="5"/>
                </svg>
            </div>
            <div class="ms-3 text-center entete1">
                <p class="paragra">
                    Machine Minières
                </p>
            </div>
            <div class="ms-3 text-center entete1">
                <p class="paragra">
                    
                </p>
            </div>
            
        </section>

        <section  class="mt-5 container d-flex justify-content-center mb-5">
            <div class="">

             {{--  Premier ViP ?--}}

                <div class="card mb-5 border  carddim">

                    <div class="row g-0 ">

                        <div class="border border-top-0 border-start-0 col-4 d-flex align-items-center justify-content-center">
                            <img src="assets/ma.png" height="600" width="200" class="img-fluid rounded-start" alt="...">
                        </div>

                        <div class="col-8 border border-top-0 border-end-0">
                            
                            <div class="card-body">
                            <h5 class="card-title text-center titre">MTI ViP 1 </h5>

                            <div class="d-flex justify-content-between">
                                <p class="card-text pag">Revenue: </p>
                                <p class="card-text pagor"> 300 <span>F</span></p>
                            </div>

                            <div class="d-flex justify-content-between">
                                <p class="card-text pag">Revenu total: </p>
                                <p class="card-text pagor"> 30 000 <span>F</span></p>
                            </div>

                            <div class="d-flex justify-content-between">
                                <p class="card-text pag">Limite d’achat: </p>
                                <p class="card-text pags"> 1 </p>
                            </div>

                            <div class="d-flex justify-content-between">
                                <p class="card-text pag">Péreiode de validité: </p>
                                <p class="card-text pags"> 100 <span>Jours</span></p>
                                
                            </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="card-body d-flex justify-content-between">
                        <div class="text-center d-flex align-self-center money"><p>7 500 </p><span>F</span></div>
                        <div class=" text-end "><a href="#" class="btn btn-primary btns">Acheter</a></div>

                    </div>
                </div>

                
                
                {{--  Deuxieme Vip ?--}}

                <div class="card mb-5 border  carddim">

                    <div class="row g-0 ">

                        <div class="border border-top-0 border-start-0 col-4 d-flex align-items-center justify-content-center">
                            <img src="assets/mti2.png" height="600" width="200" class="img-fluid rounded-start" alt="...">
                        </div>

                        <div class="col-8 border border-top-0 border-end-0">
                            
                            <div class="card-body">
                            <h5 class="card-title text-center titre">MTI ViP 2 </h5>

                            <div class="d-flex justify-content-between">
                                <p class="card-text pag">Revenue: </p>
                                <p class="card-text pagor"> 650 <span>F</span></p>
                            </div>

                            <div class="d-flex justify-content-between">
                                <p class="card-text pag">Revenu total: </p>
                                <p class="card-text pagor"> 65 000 <span>F</span></p>
                            </div>

                            <div class="d-flex justify-content-between">
                                <p class="card-text pag">Limite d’achat: </p>
                                <p class="card-text pags"> 1 </p>
                            </div>

                            <div class="d-flex justify-content-between">
                                <p class="card-text pag">Péreiode de validité: </p>
                                <p class="card-text pags"> 100 <span>Jours</span></p>
                                
                            </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="card-body d-flex justify-content-between">
                        <div class="text-center d-flex align-self-center money"><p>15 000 </p><span>F</span></div>
                        <div class=" text-end "><a href="#" class="btn btn-primary btns">Acheter</a></div>

                    </div>
                </div>

                {{--  Troisieme Vip ?--}}

                <div class="card mb-5 border  carddim">

                    <div class="row g-0 ">

                        <div class="border border-top-0 border-start-0 col-4 d-flex align-items-center justify-content-center">
                            <img src="assets/mti33.png" height="600" width="200" class="img-fluid rounded-start" alt="...">
                        </div>

                        <div class="col-8 border border-top-0 border-end-0">
                            
                            <div class="card-body">
                            <h5 class="card-title text-center titre">MTI ViP 3 </h5>

                            <div class="d-flex justify-content-between">
                                <p class="card-text pag">Revenue: </p>
                                <p class="card-text pagor"> 1 200 <span>F</span></p>
                            </div>

                            <div class="d-flex justify-content-between">
                                <p class="card-text pag">Revenu total: </p>
                                <p class="card-text pagor"> 120 000 <span>F</span></p>
                            </div>

                            <div class="d-flex justify-content-between">
                                <p class="card-text pag">Limite d’achat: </p>
                                <p class="card-text pags"> 1 </p>
                            </div>

                            <div class="d-flex justify-content-between">
                                <p class="card-text pag">Péreiode de validité: </p>
                                <p class="card-text pags"> 100 <span>Jours</span></p>
                                
                            </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="card-body d-flex justify-content-between">
                        <div class="text-center d-flex align-self-center money"><p>28 000 </p><span>F</span></div>
                        <div class=" text-end "><a href="#" class="btn btn-primary btns">Acheter</a></div>

                    </div>
                </div>


                {{--  Quatrieme Vip ?--}}

                <div class="card mb-5 border  carddim">

                    <div class="row g-0 ">

                        <div class="border border-top-0 border-start-0 col-4 d-flex align-items-center justify-content-center">
                            <img src="assets/mti3.png" height="600" width="200" class="img-fluid rounded-start" alt="...">
                        </div>

                        <div class="col-8 border border-top-0 border-end-0">
                            
                            <div class="card-body">
                            <h5 class="card-title text-center titre">MTI ViP 4 </h5>

                            <div class="d-flex justify-content-between">
                                <p class="card-text pag">Revenue: </p>
                                <p class="card-text pagor"> 2 500 <span>F</span></p>
                            </div>

                            <div class="d-flex justify-content-between">
                                <p class="card-text pag">Revenu total: </p>
                                <p class="card-text pagor"> 250 000 <span>F</span></p>
                            </div>

                            <div class="d-flex justify-content-between">
                                <p class="card-text pag">Limite d’achat: </p>
                                <p class="card-text pags"> 1 </p>
                            </div>

                            <div class="d-flex justify-content-between">
                                <p class="card-text pag">Péreiode de validité: </p>
                                <p class="card-text pags"> 100 <span>Jours</span></p>
                                
                            </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="card-body d-flex justify-content-between">
                        <div class="text-center d-flex align-self-center money"><p>60 000 </p><span>F</span></div>
                        <div class=" text-end "><a href="#" class="btn btn-primary btns">Acheter</a></div>

                    </div>
                </div>

                {{--  Cinquieme Vip ?--}}

                <div class="card mb-5 border  carddim">

                    <div class="row g-0 ">

                        <div class="border border-top-0 border-start-0 col-4 d-flex align-items-center justify-content-center">
                            <img src="assets/mti4.png" height="600" width="200" class="img-fluid rounded-start" alt="...">
                        </div>

                        <div class="col-8 border border-top-0 border-end-0">
                            
                            <div class="card-body">
                            <h5 class="card-title text-center titre">MTI ViP 5 </h5>

                            <div class="d-flex justify-content-between">
                                <p class="card-text pag">Revenue: </p>
                                <p class="card-text pagor"> 4 500 <span>F</span></p>
                            </div>

                            <div class="d-flex justify-content-between">
                                <p class="card-text pag">Revenu total: </p>
                                <p class="card-text pagor"> 450 000 <span>F</span></p>
                            </div>

                            <div class="d-flex justify-content-between">
                                <p class="card-text pag">Limite d’achat: </p>
                                <p class="card-text pags"> 1 </p>
                            </div>

                            <div class="d-flex justify-content-between">
                                <p class="card-text pag">Péreiode de validité: </p>
                                <p class="card-text pags"> 100 <span>Jours</span></p>
                                
                            </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="card-body d-flex justify-content-between">
                        <div class="text-center d-flex align-self-center money"><p>110 000 </p><span>F</span></div>
                        <div class=" text-end "><a href="#" class="btn btn-primary btns">Acheter</a></div>

                    </div>
                </div>

                {{--  Sixieme Vip ?--}}

                <div class="card mb-5 border  carddim">

                    <div class="row g-0 ">

                        <div class="border border-top-0 border-start-0 col-4 d-flex align-items-center justify-content-center">
                            <img src="assets/mti5.png" height="600" width="200" class="img-fluid rounded-start" alt="...">
                        </div>

                        <div class="col-8 border border-top-0 border-end-0">
                            
                            <div class="card-body">
                            <h5 class="card-title text-center titre">MTI ViP 6 </h5>

                            <div class="d-flex justify-content-between">
                                <p class="card-text pag">Revenue: </p>
                                <p class="card-text pagor"> 14 000 <span>F</span></p>
                            </div>

                            <div class="d-flex justify-content-between">
                                <p class="card-text pag">Revenu total: </p>
                                <p class="card-text pagor"> 1 400 000 <span>F</span></p>
                            </div>

                            <div class="d-flex justify-content-between">
                                <p class="card-text pag">Limite d’achat: </p>
                                <p class="card-text pags"> 1 </p>
                            </div>

                            <div class="d-flex justify-content-between">
                                <p class="card-text pag">Péreiode de validité: </p>
                                <p class="card-text pags"> 100 <span>Jours</span></p>
                                
                            </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="card-body d-flex justify-content-between">
                        <div class="text-center d-flex align-self-center money"><p>300 000 </p><span>F</span></div>
                        <div class=" text-end "><a href="#" class="btn btn-primary btns">Acheter</a></div>

                    </div>
                </div>
                

                {{--  Septieme Vip ?--}}

                <div class="card mb-5 border  carddim">

                    <div class="row g-0 ">

                        <div class="border border-top-0 border-start-0 col-4 d-flex align-items-center justify-content-center">
                            <img src="assets/mti6.png" height="600" width="200" class="img-fluid rounded-start" alt="...">
                        </div>

                        <div class="col-8 border border-top-0 border-end-0">
                            
                            <div class="card-body">
                            <h5 class="card-title text-center titre">MTI ViP 7 </h5>

                            <div class="d-flex justify-content-between">
                                <p class="card-text pag">Revenue: </p>
                                <p class="card-text pagor"> 25 000 <span>F</span></p>
                            </div>

                            <div class="d-flex justify-content-between">
                                <p class="card-text pag">Revenu total: </p>
                                <p class="card-text pagor"> 2 500 000 <span>F</span></p>
                            </div>

                            <div class="d-flex justify-content-between">
                                <p class="card-text pag">Limite d’achat: </p>
                                <p class="card-text pags"> 1 </p>
                            </div>

                            <div class="d-flex justify-content-between">
                                <p class="card-text pag">Péreiode de validité: </p>
                                <p class="card-text pags"> 100 <span>Jours</span></p>
                                
                            </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="card-body d-flex justify-content-between">
                        <div class="text-center d-flex align-self-center money"><p>550 0000 </p><span>F</span></div>
                        <div class=" text-end "><a href="#" class="btn btn-primary btns">Acheter</a></div>

                    </div>
                </div>

            </div>

        </section>

    @endsection
    
