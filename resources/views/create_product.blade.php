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
                                
                                <form action="{{ route('create') }}" method="POST" id="form_cricao_produto">
                                    @csrf
                                    <div class="card-body pt-0">
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-12">
                                                <label class="form-label text-danger">Nome do produto *</label>
                                                <div class="input-group">
                                                    <input id="nome_produto" name="nome_produto" class="form-control @error('nome_produto') is-invalid @enderror"
                                                        type="text" placeholder="Digite aqui..." maxlength="50">
                                                    @error('nome_produto')
                                                        <div id="validationServerUsernameFeedback" class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-sm-12">
                                                <label class="form-label text-danger">Unidade de medida *</label>
                                                <select class="form-control @error('tipo_unidade_medida') is-invalid @enderror" id="tipo_unidade_medida" name="tipo_unidade_medida">
                                                    <option value="litro" >Litro</option>
                                                    <option value="quilograma" >Quilograma</option>
                                                    <option value="unidade" >Unidade</option>
                                                </select>
                                                @error('tipo_unidade_medida')
                                                    <div id="validationServerUsernameFeedback" class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-lg-4 col-sm-12">
                                                <label class="form-label">Unidade</label>
                                                <div class="input-group mb-3" style="justify-content: flex-end">
                                                    <input type="text" class="form-control @error('quant_unidade_medida') is-invalid @enderror" aria-label="" id="quant_unidade_medida" name="quant_unidade_medida">
                                                    <span class="input-group-text" id="addon_type_unit" style="z-index:9">.00</span>
                                                </div>
                                                @error('quant_unidade_medida')
                                                    <div id="validationServerUsernameFeedback" class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="form-label text-danger">Preço *</label>
                                                <div class="input-group">
                                                    <input id="preco" name="preco" class="form-control @error('preco') is-invalid @enderror"
                                                        type="text" placeholder="Digite aqui..">
                                                        @error('preco')
                                                            <div id="validationServerUsernameFeedback" class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <label class="form-label text-danger">Prduto perecível *</label>
                                                <div class="input-group">
                                                    <select class="form-control @error('perecivel') is-invalid @enderror" id="perecivel" name="perecivel">
                                                        <option>Sim</option>
                                                        <option>Não</option>
                                                    </select>
                                                    @error('perecivel')
                                                        <div id="validationServerUsernameFeedback" class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <label class="form-label text-danger">Data de validade *</label>
                                                <div class="input-group">
                                                    <input id="data_validade" name="data_validade" class="form-control @error('data_validade') is-invalid @enderror"
                                                        type="text" placeholder="__/__/____">
                                                    @error('data_validade')
                                                        <div id="validationServerUsernameFeedback" class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <label class="form-label text-danger">Data de fabricação *</label>
                                                <div class="input-group">
                                                    <input id="data_fabricação" name="data_fabricação" class="form-control @error('data_fabricação') is-invalid @enderror"
                                                        type="text" placeholder="__/__/____">
                                                    @error('data_fabricação')
                                                        <div id="validationServerUsernameFeedback" class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row justify-content-between">
                                            <div class="col-lg-2 col-sm-12 text-center">
                                                <a href="{{ route('index') }}">
                                                <button type="button" class="btn bg-gradient-faded-danger w-100 my-6 mb-2 text-white">Cancelar</button>
                                                </a>
                                            </div>
                                            <div class="col-lg-2 col-sm-12 text-center">
                                                <button type="submit" class="btn bg-gradient-faded-success w-100 my-6 mb-2 text-white">Salvar</button>
                                            </div>
                                        </div>

                                    </div>
                                    
                                </form>
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
    filtro_unidade_medida()
    $("#data_fabricação").mask("99/99/9999");
    $("#data_validade").mask("99/99/9999");
  });

  $("#tipo_unidade_medida").on("change", function(){
    filtro_unidade_medida();
  })

  function filtro_unidade_medida()
  {
    let tipo_unidade = '';
    if($("#tipo_unidade_medida").val() == "litro"){
        tipo_unidade = 'lt';
        $('#quant_unidade_medida').mask('000.000.000,000', {reverse: true});
        $('#quant_unidade_medida').attr("placeholder", "0,000");
    }else if($("#tipo_unidade_medida").val() == "quilograma"){
        tipo_unidade = 'kg';
        $('#quant_unidade_medida').mask('000.000.000,000', {reverse: true});
        $('#quant_unidade_medida').attr("placeholder", "0,000");
    }else if($("#tipo_unidade_medida").val() == "unidade"){
        tipo_unidade = 'un';
        $('#quant_unidade_medida').mask('000.000.000', {reverse: true});
        $('#quant_unidade_medida').attr("placeholder", "0");
    }
    $("#addon_type_unit").html(tipo_unidade)
  }

</script>