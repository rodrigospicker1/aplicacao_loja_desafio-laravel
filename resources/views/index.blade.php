<x-html.html>

    <body class="g-sidenav-show  bg-gray-100">
        <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

            <div class="container_main" style="display:flex;flex-direction:row">

                <x-navbar.navbar-left>
                </x-navbar.navbar-left>

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
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Modal excluir campo -->
                <div class="modal fade" id="modal_excluir_produto" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-body p-0">
                        <div class="card card-plain text-center">
                            <div class="card-header pb-0 text-left">
                            <h3 class="font-weight-bolder text-black">Você tem certeza que seja excluir o produto?</h3>
                            </div>
                            <div class="card-body">
                            <form role="form text-left">
                                <input type="hidden" id="id_produto_excluir" name="" value="" >
                                <div id="div_nome_campo" >
                                    <div class="collumn justify-content-center">

                                        <div class="col-md-12">
                                            <input type="button" onclick="remove_produto()" id="btn_excluir_campo" name="btn_excluir_campo" value="Excluir"
                                            class="btn bg-danger col-12 text-white" >
                                        </div>

                                        <div class="col-md-12">
                                                <input type="button" onclick="$('#modal_excluir_produto').modal('hide')" id="" name="" value="Cancelar"
                                                class="btn bg-secondary col-12 text-white" >
                                        </div>

                                    </div>
                                </div>
                            </form>
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

<script>

    $(document).ready(function()
    {
        atualiza_lista_produtos()
    });
    
    function capitalize(s)
    {
        return s[0].toUpperCase() + s.slice(1);
    }

    function delete_confirmation(id)
    {
        $("#modal_excluir_produto").modal("show");
        $("#id_produto_excluir").val(id)
    }

    function remove_produto()
    {
        $("#modal_excluir_produto").modal("hide");
        let produtos_existentes = jQuery.parseJSON(localStorage.getItem('produtos'));
        let id_produto_para_excluir = $("#id_produto_excluir").val();
        let lista_produtos = [];
        let achou = false;
        if(produtos_existentes != null){
            produtos_existentes.forEach(element => {
                if( element.id != id_produto_para_excluir )
                {
                    lista_produtos.push(element)
                }else{
                    achou = true
                }
            });
        }

        
        let color = 'var(--bs-main_green)';
        let mensagem = ""
        if(achou == true)
        {
            mensagem = "Produto excluído com sucesso"
        }else{
            color = 'var(--bs-red)';
            mensagem = "Produto não encontrado"
        }

        $("#small_messages").append(
            `
            <div class="m-2">
            <div class="toast show p-2" role="alert" style="background:`+color+`" aria-live="assertive" id="successToast" aria-atomic="true">
                <div class="toast-header border-0" style="background:`+color+`" >
                    <span class="me-auto font-weight-bold text-white" id="span_success_not">`+mensagem+`</span>
                    <i class="fas fa-times text-weight-bold text-md ms-3 cursor-pointer text-white" data-bs-dismiss="toast" aria-label="Close"></i>
                </div>
            </div>
            </div>
            `
        );

        localStorage.setItem("produtos", JSON.stringify(lista_produtos) );
        atualiza_lista_produtos();
    }

    function atualiza_lista_produtos()
    {
        $("#list_products").html(`<center id="loader_modal_agenda">
                                        <div class="spinner-border" role="status">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                    </center>`)
        let produtos = jQuery.parseJSON(localStorage.getItem('produtos'));
        let html_produtos = "";
        if(produtos != null){
            produtos.forEach(element => {
                let link = '{{ url("/edit") }}/'+element.id;
                html_produtos += 
                `
                    <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                        <div class="avatar me-3 border-radius-lg shadow">
                            <i class="fa fa-box" style="color:black"></i>
                        </div>
                        <div class="d-flex align-items-start flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">`+capitalize(element.nome_produto)+`</h6>
                            <p class="mb-0 text-xs">`+element.quant_unidade_medida+` - `+element.tipo_unidade_medida+` | data validade: `+element.data_validade+`</p>
                        </div>
                        <a class="btn mb-0 ms-auto" style="margin-right:10px" href="`+link+`">
                            <i class="fa fa-edit" style="color:black"></i>
                        </a>
                        <a class="btn mb-0" onclick="delete_confirmation('`+element.id+`')">
                            <i class="fa fa-trash" style="color:black"></i>
                        </a>
                    </li>
                `;
            })
        }
        if(html_produtos != "")
        {
            $("#list_products").html(html_produtos)
        }else{
            $("#list_products").html(`<center><h5>Nenhum produto cadastrado</h5></center>`)
        }
    }
</script>
