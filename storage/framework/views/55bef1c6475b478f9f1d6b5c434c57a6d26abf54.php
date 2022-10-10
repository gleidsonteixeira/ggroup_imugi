<?php echo $__env->make('layouts.ranking.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('titulo','Dados'); ?>

<main>
    <div id="ranking" class="box">
        <h3>Dados<div class="criar suave click"><span>Novo dado</span><i class="material-icons" translate="no">add_circle</i></div></h3>
        <table id="tabela" class="stripe">
            <thead>
                <tr>
                    <td class="mini-title upper">#</td>
                    <td class="mini-title upper">Funcionário</td>
                    <td class="mini-title upper">Visitas</td>
                    <td class="mini-title upper">MRT</td>
                    <td class="mini-title upper">CE</td>
                    <td class="mini-title upper">CONV</td>
                    <td class="mini-title upper">Data</td>
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
            <label>Funcionário</label>
            <select name="funcionario_id">
                <?php $__currentLoopData = $funcionarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($f->funcionario_id); ?>"><?php echo e($f->funcionario_nome); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <label>Visitas</label>
            <input type="number" name="dado_visitas" min="0" />
            <label>MRT</label>
            <input type="number" name="dado_mrt" min="0" />
            <label>CE</label>
            <input type="number" name="dado_elleve" min="0" />
            <label>Data</label>
            <input type="date" name="dado_data" />
            <button type="submit" class="click suave"><span>Salvar</span></button>
        </form>
    </div>
    <div id="editar" class="content suave">
        <h4>Editar <i class="material-icons click suave fechar" translate="no">close</i></h4>
        <form id="formEditar">
            <input type="hidden" name="dado_id" />
            <label>Funcionário</label>
            <select name="funcionario_id">
                <?php $__currentLoopData = $funcionarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($f->funcionario_id); ?>"><?php echo e($f->funcionario_nome); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <label>Visitas</label>
            <input type="number" name="dado_visitas" min="0" />
            <label>MRT</label>
            <input type="number" name="dado_mrt" min="0" />
            <label>CE</label>
            <input type="number" name="dado_elleve" min="0" />
            <label>Data</label>
            <input type="date" name="dado_data" />
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
                url: '/ranking/dados-list',
                dataSrc: ''
            },
            columns: [
                {data: "dado_id", width: "60px", className: "dt-body-center dt-head-center"},
                {data: "funcionario.funcionario_nome"},
                {data: "dado_visitas", width: "80px", className: "dt-body-center dt-head-center", "defaultContent": "0"},
                {data: "dado_mrt", width: "80px", className: "dt-body-center dt-head-center", "defaultContent": "0"},
                {data: "dado_elleve", width: "80px", className: "dt-body-center dt-head-center", "defaultContent": "0"},
                {data: "dado_apr", width: "80px", className: "dt-body-center dt-head-center", "defaultContent": "0",
                    render: function(data, type, row){
                        let total = row.dado_mrt + row.dado_elleve
                        if(total == 0){
                            return "0";
                        }else{
                            return (row.dado_visitas / total).toFixed(2);
                        }
                    }
                },
                {data: "dado_data", width: "80px", className: "dt-body-center dt-head-center"},
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
            $("#formEditar input[name='dado_id']").val(data.dado_id);
            $("#formEditar input[name='dado_visitas']").val(data.dado_visitas);
            $("#formEditar input[name='dado_mrt']").val(data.dado_mrt);
            $("#formEditar input[name='dado_elleve']").val(data.dado_elleve);
            let d = data.dado_data.split("/");
            console.log(d);
            $("#formEditar input[name='dado_data']").val(d[2]+"-"+d[1]+"-"+d[0]);
            $("#formEditar select[name='funcionario_id'] option[value="+data.funcionario_id+"]").prop("selected", true);
        });

        var delete_id;
        $(document).on("click", ".deletar", function(){
            var data = table.row($(this).parents("tr")).data();
            delete_id = data.dado_id;
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
            url: '/ranking/dados',
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
            url: '/ranking/dados/' + form.get("dado_id"),
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
            url: '/ranking/dados/' + id,
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
<?php /**PATH C:\xampp\htdocs\imugi\resources\views/ranking/dados.blade.php ENDPATH**/ ?>