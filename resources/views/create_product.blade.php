<x-html.html>

    <body class="g-sidenav-show  bg-gray-100">
        <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

            <div class="container_main" style="display:flex;flex-direction:row">

                <x-navbar.navbar-left>
                </x-navbar.navbar-left>
                

                @if (Session::has('msg'))
                    @foreach (Session::get('msg') as  $erro)
                            <script>
                                let message = "{{$erro}}"
                                $("#small_messages").append(
                                    `
                                    <div class="m-2" id="error_message">
                                    <div class="toast bg-danger show p-2" role="alert" style="" aria-live="assertive" id="successToast" aria-atomic="true">
                                        <div class="toast-header bg-danger border-0" style="" >
                                            <span class="me-auto font-weight-bold text-white" id="span_success_not">`+message+`</span>
                                            <i class="fas fa-times text-weight-bold text-md ms-3 cursor-pointer text-white" data-bs-dismiss="toast" aria-label="Close"></i>
                                        </div>
                                    </div>
                                </div>
                                    `
                                );
                            </script>
                    @endforeach
                @endif



                <div class="container-fluid my-3 py-3">
                    <div class="row mb-5">
                        <div class="col-lg-12 mt-lg-0 mt-4">

                            <div class="card mt-4" id="basic-info">
                                <div class="card-header">
                                    <h5>Criar produto</h5>
                                </div>
                                
                                <form action="{{ route('create') }}" method="POST" id="form_cricao_produto">
                                    @csrf
                                    <input type="hidden" name="id_produto" id="id_produto">
                                    <div class="card-body pt-0">
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-12">
                                                <label class="form-label text-danger">Nome do produto *</label>
                                                <div class="input-group">
                                                    <input id="nome_produto" name="nome_produto" class="form-control @error('nome_produto') is-invalid @enderror"
                                                        type="text" placeholder="Digite aqui..." value="{{ old('nome_produto') }}" maxlength="50">
                                                    @error('nome_produto')
                                                        <div id="validationServerUsernameFeedback" class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-sm-12">
                                                <label class="form-label text-danger">Unidade de medida *</label>
                                                <select class="form-control @error('tipo_unidade_medida') is-invalid @enderror" id="tipo_unidade_medida" name="tipo_unidade_medida">
                                                    <option @if ( old('tipo_unidade_medida') != NULL && old('tipo_unidade_medida') == "litro") selected @endif value="litro" >Litro</option>
                                                    <option @if ( old('tipo_unidade_medida') != NULL && old('tipo_unidade_medida') == "quilograma") selected @endif value="quilograma" >Quilograma</option>
                                                    <option @if ( old('tipo_unidade_medida') != NULL && old('tipo_unidade_medida') == "unidade") selected @endif value="unidade" >Unidade</option>
                                                </select>
                                                @error('tipo_unidade_medida')
                                                    <div id="validationServerUsernameFeedback" class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-lg-4 col-sm-12">
                                                <label class="form-label">Unidade</label>
                                                <div class="input-group mb-3" style="justify-content: flex-end">
                                                    <input type="text" value="{{ old('quant_unidade_medida') }}" class="form-control @error('quant_unidade_medida') is-invalid @enderror" aria-label="" id="quant_unidade_medida" name="quant_unidade_medida">
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
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="">R$</span>
                                                    <input id="preco" name="preco" class="form-control mascara_moeda @error('preco') is-invalid @enderror"
                                                        type="text" placeholder="0,00" value="{{ old('preco') }}" maxlength="20">
                                                        @error('preco')
                                                            <div id="validationServerUsernameFeedback" class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <label class="form-label text-danger">Produto perecível *</label>
                                                <div class="input-group">
                                                    <select class="form-control @error('perecivel') is-invalid @enderror" id="perecivel" name="perecivel">
                                                        <option @if ( old('perecivel') != NULL && old('perecivel') == "1") selected @endif value="1">Sim</option>
                                                        <option @if ( old('perecivel') != NULL && old('perecivel') == "0") selected @endif value="0">Não</option>
                                                    </select>
                                                    @error('perecivel')
                                                        <div id="validationServerUsernameFeedback" class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <label class="form-label text-danger" id="data_validade_label">Data de validade *</label>
                                                <div class="input-group">
                                                    <input id="data_validade" name="data_validade" class="form-control mascara_data @error('data_validade') is-invalid @enderror"
                                                        type="text" placeholder="__/__/____" value="{{ old('data_validade') }}">
                                                    @error('data_validade')
                                                        <div id="validationServerUsernameFeedback" class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <label class="form-label text-danger">Data de fabricação *</label>
                                                <div class="input-group">
                                                    <input id="data_fabricacao" name="data_fabricacao" class="form-control mascara_data @error('data_fabricacao') is-invalid @enderror"
                                                        type="text" placeholder="__/__/____" value="{{ old('data_fabricacao') }}">
                                                    @error('data_fabricacao')
                                                        <div id="validationServerUsernameFeedback" class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row justify-content-between">
                                            <div class="col-lg-2 col-sm-12 text-center">
                                                <button type="submit" id="text_button_submit" class="btn bg-gradient-faded-success w-100 my-6 mb-2 text-white">Salvar</button>
                                            </div>
                                            <div class="col-lg-2 col-sm-12 text-center">
                                                <a href="{{ route('index') }}">
                                                <button type="button" class="btn bg-gradient-faded-danger w-100 my-6 mb-2 text-white">Cancelar</button>
                                                </a>
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

@if (isset($id) && $id != "")
    <script>
        produtos_existentes = localStorage.getItem('produtos');
        produtos_existentes = jQuery.parseJSON(produtos_existentes);
        let achou = false
        if(produtos_existentes != null){
            produtos_existentes.forEach(element => {
                if(element.id == "{{ $id }}")
                {
                    achou = true
                    $("#text_button_submit").html("Atualizar")
                    $("#id_produto").val(element.id)
                    $("#nome_produto").val(element.nome_produto)
                    $("#tipo_unidade_medida").val(element.tipo_unidade_medida)
                    $("#preco").val(element.preco)
                    $("#perecivel").val(element.perecivel)
                    $("#quant_unidade_medida").val(element.quant_unidade_medida)
                    $("#data_validade").val(element.data_validade)
                    $("#data_fabricacao").val(element.data_fabricacao)
                }
            });
        }
        if(achou == false)
        {
            window.location = "{{ url('/') }}";
        }
    </script>
@endif

@if (Session::has('success'))
    @if (Session::has('produtos'))  
        <?php $produtos =  json_encode(Session::get('produtos')) ?>
        <script>
            let produtos_existentes = localStorage.getItem('produtos');
            produtos_existentes = jQuery.parseJSON(produtos_existentes);
            let produto_novo = jQuery.parseJSON(`{!! $produtos !!}`)
            let lista_produtos = [];
            if(produtos_existentes != null){
                console.log(produtos_existentes)
                console.log(produto_novo)
                produtos_existentes.forEach(element => {
                    if( $("#id_produto").val() != "" )
                    {
                        if( element.id == $("#id_produto").val() )
                        {
                            lista_produtos.push(produto_novo)
                        }else{
                            lista_produtos.push(element)
                        }
                    }else{
                        lista_produtos.push(element)
                    }
                });
            }
            if( $("#id_produto").val() == "" ){
                lista_produtos.push(produto_novo)
            }
            localStorage.setItem("produtos", JSON.stringify(lista_produtos) );
            window.location = "{{ url('/') }}";
        </script>
    @endif  
@endif



<script>
    
  $(document).ready(function()
  {
    filtro_unidade_medida()
    $(".mascara_data").mask("99/99/9999");
    $(".mascara_moeda").maskMoney({allowNegative: false, thousands: '.', decimal: ',' });
  });

  $("#tipo_unidade_medida").on("change", function(){
    filtro_unidade_medida();
  })

  $("#perecivel").on("change", function(){
    if($(this).val() == "1")
    {
        $("#data_validade_label").removeClass("text-danger")
        $("#data_validade_label").addClass("text-danger")
        $("#data_validade_label").html("Data de validade *")
    }else
    {
        $("#data_validade_label").removeClass("text-danger")
        $("#data_validade_label").html("Data de validade")
    }
  })

  $("#text_button_submit").on("click", function(){
    $("#form_cricao_produto :input").prop("readonly", true);
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