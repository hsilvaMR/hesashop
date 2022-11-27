<nav class="navbar  header-top navbar-expand-lg bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Logo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                {{-- <a class="nav-link active" aria-current="page" href="#">Home</a> --}}
                {{-- caixa de pesquisa --}}
                <a class="nav-link" href="#">
                    <div class="d-flex justify-content-start align-items-center box-pesquisa">
                        <img src="{{ asset('loja/img/search.svg') }}" height="16" width="22" alt="MDB Logo"
                        loading="lazy" style="margin-top: -1px;">
                        {{-- field text --}}
                        <input type="text" placeholder="EX. Iphone 13 Pro 64 GB" aria-required="true">
                    </div>
                </a>
                <a class="nav-link social-icons" href="#">
                    <i class="fa-brands fa-square-facebook"></i>
                    Facebook
                </a>
                <a class="nav-link social-icons" href="#">
                    <i class="fa-brands fa-whatsapp"></i>
                    Whatsapp
                </a>
                <a class="nav-link social-icons" href="#">
                    {{-- <i class="fa-brands fa-instagram"></i> --}}
                    <img src="{{ asset('loja/img/insta.svg') }}" height="16" width="22" alt="MDB Logo"
                        loading="lazy" style="margin-top: -1px;">
                    Instagram
                </a>
                <a class="nav-link social-icons" href="#">
                    {{-- <i class="fa-brands fa-instagram"></i> --}}
                    <img src="{{ asset('loja/img/phone.svg') }}" height="16" width="22" alt="MDB Logo"
                        loading="lazy" style="margin-top: -1px;">
                    +351 938 077 852
                </a>
            </div>
        </div>
    </div>
</nav>
