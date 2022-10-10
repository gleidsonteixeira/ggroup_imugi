@include('layouts.ranking.head')
@section('titulo','Funcionários')

<main>
    <div id="ranking" class="box">
        <h3>Funcionários<div class="criar suave click"><span>Novo funcionário</span><i class="material-icons" translate="no">add_circle</i></div></h3>
        <table id="tabela" class="stripe">
            <thead>
                <tr>
                    <td class="mini-title upper">#</td>
                    <td class="mini-title upper">Funcionário</td>
                    <!-- <td class="mini-title upper">Telefone</td> -->
                    <td class="mini-title upper">Cargo</td>
                    <td class="mini-title upper">Status</td>
                    <td class="mini-title upper">Ações</td>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
</main>
<div id="lateral" class="suave">
    <div id="criar" class="content suave">
        <h4>Criar <i class="material-icons click suave fechar" translate="no">close</i></h4>
        <form id="formCriar">
            <label>Nome</label>
            <input type="text" name="funcionario_nome" placeholder="Nome" required />
            <!-- <label>Telefone</label>
            <input type="text" name="funcionario_telefone" placeholder="(00) 00000-0000" /> -->
            <label>Cargo</label>
            <select name="funcionario_cargo">
                <option value="Supervisor de Vendas">Supervisor de Vendas</option>
                <option value="Vendedor">Vendedor</option>
                <option value="Trainee Vendedor">Trainee Vendedor</option>
                <option value="Supervisor de Telemarketing">Supervisor de Telemarketing</option>
                <option value="Telemarketing">Telemarketing</option>
                <option value="Trainee Telemarketing">Trainee Telemarketing</option>
            </select>
            <label>Unidade</label>
            <select name="unidade_id">
                @foreach($unidades as $u)
                    <option value="{{ $u->unidade_id }}">{{ $u->unidade_nome }}</option>
                @endforeach
            </select>
            <label>Status</label>
            <select name="funcionario_status">
                <option value="1">Ativo</option>
                <option value="2">Inativo</option>
            </select>
            <button type="submit" class="click suave"><span>Salvar</span></button>
        </form>
    </div>
    <div id="editar" class="content suave">
        <h4>Editar <i class="material-icons click suave fechar" translate="no">close</i></h4>
        <form id="formEditar">
            <input type="hidden" name="funcionario_id">
            <label>Nome</label>
            <input type="text" name="funcionario_nome" placeholder="Nome" required />
            <!-- <label>Telefone</label>
            <input type="text" name="funcionario_telefone" placeholder="(00) 00000-0000" /> -->
            <label>Cargo</label>
            <select name="funcionario_cargo">
                <option value="Supervisor de Vendas">Supervisor de Vendas</option>
                <option value="Vendedor">Vendedor</option>
                <option value="Trainee Vendedor">Trainee Vendedor</option>
                <option value="Supervisor de Telemarketing">Supervisor de Telemarketing</option>
                <option value="Telemarketing">Telemarketing</option>
                <option value="Trainee Telemarketing">Trainee Telemarketing</option>
            </select>
            <label>Unidade</label>
            <select name="unidade_id">
                @foreach($unidades as $u)
                    <option value="{{ $u->unidade_id }}">{{ $u->unidade_nome }}</option>
                @endforeach
            </select>
            <label>Status</label>
            <select name="funcionario_status">
                <option value="1">Ativo</option>
                <option value="2">Inativo</option>
            </select>
            <button type="submit" class="click suave"><span>Salvar</span></button>
        </form>
    </div>
</div>

<div id="confirmar" class="suave">
    <p>Deseja realmente deletar este item?</p>
    <div class="opcoes right-align hide">
        <button class="mini-title upper click suave confirmar">sim</button>
        <button class="mini-title upper click suave cancelar">não</button>
    </div>
</div>

<script>

    $('input[name="funcionario_telefone"]').mask("(00) 00000-0000");

    $(".criar").click(function(){
        $("#lateral, #criar").addClass("active");
    });

    $("#formCriar").submit(function(e){
        e.preventDefault();
        $("#formCriar button").prop('disabled', true);
        $("#formCriar button span").text('Aguarde...');
        criar();
    });

    $("#formEditar").submit(function(e){
        e.preventDefault();
        $("#formEditar button").prop('disabled', true);
        $("#formEditar button span").text('Aguarde...');
        editar();
    });
    
    $("#lateral .fechar").click(function(){
        $("#lateral, #lateral .content").removeClass("active");
        $("#formCriar")[0].reset();
        $("#formEditar")[0].reset();
    });

    $("#confirmar .cancelar").click(function(){
        $("#confirmar").removeClass("active");
    });
    
    var table;
    function carregar(){
        table = $('#tabela').DataTable({
            ajax: {
                url: '/ranking/funcionarios-list',
                dataSrc: ''
            },
            columns: [
                {data: "funcionario_id", width: "60px", className: "dt-body-center dt-head-center"},
                {data: "funcionario_nome"},
                // {data: "funcionario_telefone", width: "120px", className: "dt-body-center dt-head-center",
                //     render: function(data, type, row){
                //         if(data == null){
                //             return "---";
                //         }else{
                //             return data;
                //         }
                //     }
                // },
                {data: "funcionario_cargo", width: "200px", className: "dt-body-center dt-head-center",
                    render: function(data, type, row){
                        if(data == null){
                            return "---";
                        }else{
                            return data;
                        }
                    }
                },
                {data: "funcionario_status", width: "100px", className: "dt-body-center dt-head-center",
                    render: function(data, type, row){
                        if(data == 1){
                            return "Ativo";
                        }else{
                            return "Inativo";
                        }
                    }
                },
                {data: ""}
            ],
            columnDefs: [
                {
                    targets: -1,
                    width: "80px",
                    className: "dt-body-center dt-head-center",
                    data: null,
                    defaultContent: '<i class="acao material-icons click suave editar" translate="no">create</i><i class="acao material-icons click suave deletar" translate="no">delete</i>'
                }
            ],
            language: {
                processing:     "Carregando",
                search:         "Pesquisar",
                lengthMenu:     "Mostrando _MENU_ registros",
                info:           "De _START_ à _END_ de _TOTAL_ registros",
                paginate: {
                    first:      "Primeiro",
                    previous:   "Anterior",
                    next:       "Próximo",
                    last:       "Último"
                },
                emptyTable:     "Nenhum registro cadastrado!",
                zeroRecords:    "Nenhum registro encontrado!",
                loadingRecords: "Carregando...",
                infoEmpty:      "Nenhum registro encontrado",
                infoFiltered:   "(filtrado de _MAX_ cadastros)",

            }
        });

        var edit_id;
        $(document).on("click", ".editar", function(){
            var data = table.row($(this).parents("tr")).data();
            $("#lateral, #editar").addClass("active");
            $("#formEditar input[name='funcionario_id']").val(data.funcionario_id);
            $("#formEditar input[name='funcionario_nome']").val(data.funcionario_nome);
            // $("#formEditar input[name='funcionario_telefone']").val(data.funcionario_telefone);
            $("#formEditar select[name='funcionario_cargo'] option[value='"+data.funcionario_cargo+"']").prop("selected", true);
            $("#formEditar select[name='funcionario_status'] option[value="+data.funcionario_status+"]").prop("selected", true);
            $("#formEditar select[name='unidade_id'] option[value="+data.unidade_id+"]").prop("selected", true);
        });

        var delete_id;
        $(document).on("click", ".deletar", function(){
            var data = table.row($(this).parents("tr")).data();
            delete_id = data.funcionario_id;
            $("#confirmar").addClass("active");
        });

        $("#confirmar .confirmar").click(function(){
            $(this).prop('disabled', true);
            deletar(delete_id);
        });
    }carregar();
    
    function recarregar(){
        table.ajax.reload();
    }

    function criar(){
        var form = new FormData($("#formCriar")[0]);
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/ranking/funcionarios',
            data: form,
            type: 'post',
            contentType: false,
            processData: false,
            error: function(){
                $("#formCriar button").prop("disabled", false);
                $("#formCriar button span").text("Salvar");
                alerta("Ocorreu um erro, atualize a página");
            },
            success: function(data, textStatus, xhr) {
                $("#lateral, #lateral .content").removeClass("active");
                $("#formCriar")[0].reset();
                $("#formCriar button").prop("disabled", false);
                $("#formCriar button span").text("Salvar");
                alerta("Registro criado com sucesso!");
                recarregar();
            },
            complete: function(xhr, textStatus) {} 
        });
    }

    function editar(){
        var form = new FormData($("#formEditar")[0]);
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/ranking/funcionarios/' + form.get("funcionario_id"),
            data: form,
            type: 'post',
            contentType: false,
            processData: false,
            error: function(){
                $("#formEditar button").prop("disabled", false);
                $("#formEditar button span").text("Salvar");
                alerta("Ocorreu um erro, atualize a página");
            },
            success: function(data, textStatus, xhr) {
                $("#lateral, #lateral .content").removeClass("active");
                $("#formEditar")[0].reset();
                $("#formEditar button").prop("disabled", false);
                $("#formEditar button span").text("Salvar");
                alerta("Registro atualizado com sucesso!");
                recarregar();
            },
            complete: function(xhr, textStatus) {} 
        });
    }
    
    function deletar(id){
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/ranking/funcionarios/' + id,
            type: 'delete',
            error: function(){
                alerta("Ocorreu um erro, atualize a página");
            },
            success: function(data, textStatus, xhr){
                $("#confirmar").removeClass("active");
                $("#confirmar .confirmar").prop("disabled", false);
                alerta("Registro deletado com sucesso!");
                recarregar();
            },
            complete: function(xhr, textStatus) {} 
        });
    }

</script>
