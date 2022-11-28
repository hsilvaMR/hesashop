<!-- Footer -->
<footer class="text-center text-lg-start  footer-loja  text-muted">

    <!-- Section: Links  -->
    <section class="mt-3">
        <div class="container border-bottom border-2 text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3 catFooter">
                <!-- Grid newsletter -->
                <div class="col-md-3 col-lg-4 col-xl-4 mx-auto mb-4 mt-4 p-0">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        <img src="{{ asset('loja/img/newslettersvg.svg') }}" height="100" width="149" alt="MDB Logo"
                            loading="lazy" style="margin-top: -1px;">
                    </h6>
                    <h5 class="text-start">
                        Subscreva a Nossa Newsletter Para Ficar a Par de todas as Novidades Promoções, e Muito Mais.
                    </h5>
                    {{-- formulario newsletter --}}

                    <div class="row form-subscrever">
                        {{-- field text --}}
                        <div class="col-xl-8 box-field-newsletter ">
                            <input type="text" id="txtSubscrever" placeholder="EX. mail@domain.com"
                                aria-required="true">
                        </div>
                        {{-- btn subscrerver --}}
                        <div class="col-xl-3 box-btn-newsletter">
                            <div class="p-2 ">
                                <span>SUBSCREVER</span>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Grid column -->

                <!-- Grid column  Links úteis-->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 mt-4">
                    <!--  Links úteis  -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Links úteis
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">SOBRE NÓS</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">DEVOLUÇÕES</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">POLITICA DE PRIVACIDADE</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">PARCEIROS</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">LIVRO DE RECLAMAÇÃO</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">PAGAMENTO E SEGURANÇA</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column  Categorias-->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 mt-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Categorias
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">TELEMÓVEL</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">COMPUTADOR</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">TV & VÍDEO</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">TABLET</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">SMART WATCH</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">ACESSÓRIO DE INFORMÁTICA</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column Contacto -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 mt-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">Contacto</h6>
                    <p><i class="fas fa-home me-3 text-secondary"></i> New York, NY 10012, US</p>
                    <p>
                        <i class="fas fa-envelope me-3 text-secondary"></i>
                        info@hesashop.com
                    </p>
                    <p><i class="fas fa-phone me-3 text-secondary"></i> + 01 234 567 88</p>
                    <p><i class="fas fa-print me-3 text-secondary"></i> + 01 234 567 89</p>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>

        {{--   metodos de pagamentos  | idioma --}}
        <div class="container border-bottom border-2">

            <div class="row">

                <div class="col-xl-9 text-start mt-1 p-0">

                    <h6 class="mt-1"style="color:#FCFCFC;">Métodos de Pagamento</h6>
                    <div class="d-flex mb-1">
                        {{-- visa --}}
                        <div class="p-1">
                            <img src="{{ asset('loja/img/visa.svg') }}" height="60" width="60" alt="MDB Logo"
                                loading="lazy" >
                        </div>
                        {{-- mastercard --}}
                        <div class="p-1">
                            <img src="{{ asset('loja/img/mastercard.svg') }}" height="60" width="60"
                                alt="MDB Logo" loading="lazy" >
                        </div>
                        {{-- mbway --}}
                        <div class="p-1">
                            <img src="{{ asset('loja/img/mbway.svg') }}" height="60" width="60" alt="MDB Logo"
                                loading="lazy" >
                        </div>
                        {{-- paypal --}}
                        <div class="p-1">
                            <img src="{{ asset('loja/img/paypal.svg') }}" height="60" width="60" alt="MDB Logo"
                                loading="lazy" >
                        </div>
                    </div>
                </div>
                {{--  IDIOMA --}}
                <div class="col-xl-3 text-end mt-1 align-self-center">
                    <div class="dropdown idioma">
                        <button class="btn  dropdown-toggle" type="button" id="dropdownMenu2" data-mdb-toggle="dropdown" aria-expanded="false">
                          <span > IDIOMA </span> 
                          <img src="{{ asset('loja/img/ptBandeira.svg') }}" height="30" width="30" alt="MDB Logo"
                          loading="lazy" style="margin-top: -1px;" class="ms-2">
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                          <li><button class="dropdown-item" type="button">PT</button></li>
                          <li><button class="dropdown-item" type="button">EN</button></li>
                          <li><button class="dropdown-item" type="button">FR</button></li>
                        </ul>
                      </div>
                </div>

            </div>

        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="container text-start mt-2" style=" color:#2256F7">
        © 2022 Copyright:
        <a class="text-reset " href="https://hesashop.com/">hesashop.com Todos Direitos Reservados</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->
