<x-html.html>

    <body class="g-sidenav-show  bg-gray-100">
        <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

            <div class="">

                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                                <a class="nav-link" href="#">Features</a>
                            </div>
                        </div>
                    </div>
                </nav>

                <div class="container-fluid py-4">
                    <div class="row mt-3">
                        
                        <div class="col-12 col-xl-12 mt-xl-0 mt-4">
                            <div class="card h-100">
                                <div class="card-header pb-0 p-3">
                                    <a href="{{ route('create_view') }}">
                                        <button style="border-radius: 10px;background: #40f740;border:none">
                                            <i class="fa fa-plus" style="color:white" ></i>
                                        </button>
                                    </a>
                                    <span class="mb-0">Produtos</span>
                                </div>
                                <div class="card-body p-3">
                                    <ul class="list-group" id="list_products">
                                        <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                                            <div class="avatar me-3 border-radius-lg shadow">
                                                <i class="fa fa-box" style="color:black"></i>
                                            </div>
                                            <div class="d-flex align-items-start flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">Sophie B.</h6>
                                                <p class="mb-0 text-xs">Hi! I need more information..</p>
                                            </div>
                                            <a class="btn mb-0 ms-auto" style="margin-right:10px" href="">
                                                <i class="fa fa-edit" style="color:black"></i>
                                            </a>
                                            <a class="btn mb-0" href="">
                                                <i class="fa fa-trash" style="color:black"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                {{-- FOTTER --}}
                <x.html.footer>
                </x.html.footer>
            </div>
        </main>
        <x-html.js>
        </x-html.js>
    </body>
</x-html.html>

<script>
    
    $(document).ready(function()
    {
        $("#list_products").html('')
        let produtos = jQuery.parseJSON(localStorage.getItem('produtos'));
        if(produtos.length > 0){
            produtos.forEach(element => {
                let link = '{{ url("/edit") }}/'+element.id;
                //let link = "{!! route('edit_view', "+element.id+") !!}"
                $("#list_products").append(`
                    <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                        <div class="avatar me-3 border-radius-lg shadow">
                            <i class="fa fa-box" style="color:black"></i>
                        </div>
                        <div class="d-flex align-items-start flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">`+element.nome_produto+`</h6>
                            <p class="mb-0 text-xs">`+element.quant_unidade_medida+` - `+element.tipo_unidade_medida+` | data validade: `+element.data_validade+`</p>
                        </div>
                        <a class="btn mb-0 ms-auto" style="margin-right:10px" href="`+link+`">
                            <i class="fa fa-edit" style="color:black"></i>
                        </a>
                        <a class="btn mb-0" href="{{ route('edit_view', '123') }}">
                            <i class="fa fa-trash" style="color:black"></i>
                        </a>
                    </li>
                `)
            })
        }
    });
</script>
