@extends('layout/contain')

    @section('titrePage')
        Moyen de Retrait
    @endsection

    @section('contain') 

        <section class="container mt-3 d-flex justify-content-between align-items-center entete  ">
            <div class="">
                <a href="/retrait">
                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="20" viewBox="0 0 13 20" fill="none">
                        <path d="M9.98615 0.775511L9.988 0.777443L11.31 2.16338C11.6765 2.54769 11.6739 3.17453 11.3118 3.55014L11.3096 3.55245L5.67662 9.47027L5.34815 9.81536L5.67698 10.1601L11.3158 16.0718C11.6824 16.4561 11.6798 17.0829 11.3177 17.4585L11.3151 17.4613L9.99385 18.8526C9.99371 18.8527 9.99358 18.8528 9.99345 18.853C9.63951 19.2236 9.08182 19.2206 8.73635 18.8545L8.73451 18.8526L0.779314 10.5124L0.77748 10.5105C0.408226 10.1275 0.408133 9.50059 0.773459 9.11759L8.72866 0.777443C9.08257 0.406408 9.64055 0.409276 9.98615 0.775511Z" fill="white" stroke="white"/>
                    </svg>
                </a>
            </div>
            <div class="">
                <p class="paragra">
                    Moyen de retrait
                </p>
            </div>
            <div class="ms-3 text-center entete1">
                <p class="paragra">
                    
                </p>
            </div>
            
        </section>

        <section  class="mt-5 container d-flex justify-content-center mb-5">
            <div class="">



                <div class="card mb-5 border  carddim">
                        <div class=" ">
                             
                            <div class="d-flex justify-content-center card-body">
                                <form action="/moyenRetraitValid" class="form-data formaction mb-5 mt-3">
  
                                    <input class="form-control mb-4 inputtext" type="text" placeholder="Entrez votre Prénom" aria-label="default input example" required>
                                    <input class="form-control inputtext mb-4" type="text" placeholder="Entrez votre Nom" aria-label="default input example" required>
                                    <select class="form-select form-select-lg  inputtext texte1" aria-label="Large select example" required>
                                        <option selected>Entrez votre moyen de retrait</option>
                                        <option value="1">MTN</option>
                                        <option value="2">Orange</option>
                                    </select>
                                    <input class="form-control inputtext mt-4 mb-4" type="number" placeholder="Entrez votre numero du retrait" aria-label="default input example" required>
                                    <button class="btn btn-primary btns2" type="submit">Button</button>

                                </form>
                            </div>
                            
                    </div>
                </div>
            </div>
        </section>

    @endsection