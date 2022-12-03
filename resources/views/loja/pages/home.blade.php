@extends('loja/template/loja')

@section('content')
    <div class="homePage container">
        {{-- sub menu  --}}
        <div class="row">
            {{-- menu esquerda  --}}
            <div class="col-4 menu-esquerda mt-4">
                <div class="d-flex flex-column mb-3">
                    <div class="p-2 catTitulo">
                        Categoria
                        <img src="{{ asset('loja/img/setaBaixo.svg') }} " class="mt-2" height="19" width="19"
                            loading="lazy">
                    </div>
                    <div class="p-2 catItem">
                        <i class="fa-solid fa-mobile-screen-button"></i>
                        Telemóvel
                    </div>
                    <div class="p-2 catItem">Flex item 3</div>
                    <div class="p-2 catItem">Flex item 3</div>
                </div>
            </div>
            {{-- menu direita  --}}
            <div class="col-8 menu-direita ">
                <div class="d-flex flex-row align-items-center">
                    <div class="p-2 text-center ">
                        <img src="{{ asset('loja/img/home.svg') }}" id="imgHome" height="15" width="15" loading="lazy">
                        <label class="me-1" for="imgHome"> Home</label> 
                    </div>
                    <div class="p-2">
                        <img src="{{ asset('loja/img/favorito.svg') }} " height="15" width="15" loading="lazy">
                        <label for="" class="me-1"> Favoritos</label> 
                    </div>
                    <div class="p-2">
                        <img src="{{ asset('loja/img/promo.svg') }} " height="15" width="15" loading="lazy">
                        <label for="" class="me-1"> Promoção</label> 
                    </div>
                    <div class="p-2  clientArea">
                        <img src="{{ asset('loja/img/login.svg') }} " height="15" width="15" loading="lazy">
                        <label for="" class=""> Área de Cliente</label> 
                    </div>
                    {{-- carrinho  --}}
                    <div class="p-2 carrinho mx-auto">
                        <img src="{{ asset('loja/img/carinho.svg') }}" class="me-2" height="15" width="15" loading="lazy">
                       Carrinho <label for="" id="carTotalItem" class="pe-2 ps-2"> (0) </label>  Item(s) 
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- @include('loja/includes/modal') --}}
@endsection
