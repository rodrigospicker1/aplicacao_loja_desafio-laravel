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

                <div class="container-fluid my-3 py-3">
                    <div class="row mb-5">
                        <div class="col-lg-12 mt-lg-0 mt-4">

                            <div class="card mt-4" id="basic-info">
                                <div class="card-header">
                                    <h5>Criar produto</h5>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-12">
                                            <label class="form-label text-danger">Nome do produto *</label>
                                            <div class="input-group">
                                                <input id="firstName" name="firstName" class="form-control"
                                                    type="text" placeholder="Digite aqui..." maxlength="50">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-sm-12">
                                            <label class="form-label text-danger">Unidade de medida *</label>
                                            <select class="form-control" id="">
                                                <option>Litro</option>
                                                <option>Quilograma</option>
                                                <option>Unidade</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-sm-12">
                                            <label class="form-label">Unidade</label>
                                            <div class="input-group">
                                                <input id="" name="" class="form-control"
                                                    type="number" placeholder="Digite aqui...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label class="form-label text-danger">Preço *</label>
                                            <div class="input-group">
                                                <input id="confirmation" name="confirmation" class="form-control"
                                                    type="text" placeholder="Digite aqui..">
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <label class="form-label text-danger">Prduto perecível *</label>
                                            <div class="input-group">
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    <option>Sim</option>
                                                    <option>Não</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <label class="form-label text-danger">Data de validade *</label>
                                            <div class="input-group">
                                                <input id="confirmation" name="confirmation" class="form-control"
                                                    type="text" placeholder="Digite aqui..">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <label class="form-label text-danger">Data de fabricação *</label>
                                            <div class="input-group">
                                                <input id="confirmation" name="confirmation" class="form-control"
                                                    type="text" placeholder="Digite aqui..">
                                            </div>
                                        </div>
                                    </div>
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
