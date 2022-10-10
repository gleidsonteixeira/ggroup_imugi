<?php echo $__env->make('layouts.admin.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script>$("title").text("Cargos");</script>

<main>
    <div id="admin" class="box">
        <h3>Cargos <div class="criar suave click"><span>Novo cargo</span><i class="material-icons">add_circle</i></div></h3>
        <table id="tabela" class="stripe">
            <thead>
                <tr>
                    <td class="mini-title upper">#</td>
                    <td class="mini-title upper">Cargo</td>
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
            <input type="text" name="cargo_nome" placeholder="Nome" required />
            <button type="submit" class="click suave"><span>Salvar</span></button>
        </form>
    </div>
    <div id="editar" class="content suave">
        <h4>Editar <i class="material-icons click suave fechar" translate="no">close</i></h4>
        <form id="formEditar">
            <input type="hidden" name="cargo_id">
            <label>Nome</label>
            <input type="text" name="cargo_nome" placeholder="Nome" required/>
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
                url: '/admin/cargos-list',
                dataSrc: ''
            },
            columns: [
                {data: "cargo_id", width: "60px", className: "dt-body-center dt-head-center"},
                {data: "cargo_nome"},
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
            $("#formEditar input[name='cargo_id']").val(data.cargo_id);
            $("#formEditar input[name='cargo_nome']").val(data.cargo_nome);
        });

        var delete_id;
        $(document).on("click", ".deletar", function(){
            var data = table.row($(this).parents("tr")).data();
            delete_id = data.cargo_id;
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
            url: '/admin/cargos',
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
                if(data.status == 202){
                    $("#lateral, #lateral .content").removeClass("active");
                    $("#formCriar")[0].reset();
                    $("#formCriar button").prop("disabled", false);
                    $("#formCriar button span").text("Salvar");
                    alerta(data.message);
                }else{
                    $("#lateral, #lateral .content").removeClass("active");
                    $("#formCriar")[0].reset();
                    $("#formCriar button").prop("disabled", false);
                    $("#formCriar button span").text("Salvar");
                    alerta("Registro criado com sucesso!");
                    recarregar();
                }
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
            url: '/admin/cargos/' + form.get("cargo_id"),
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
            url: '/admin/cargos/' + id,
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
<?php /**PATH C:\xampp\htdocs\imugi\resources\views/admin/cargos.blade.php ENDPATH**/ ?>