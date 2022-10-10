@include('layouts.admin.head')
<script>$("title").text("Alunos");</script>

<main>
    <div id="alunos" class="box">
        <h3>Alunos</h3>
        <table id="tabela" class="stripe">
            <thead>
                <tr>
                    <td class="mini-title upper">#</td>
                    <td class="mini-title upper">Nome</td>
                    <td class="mini-title upper">Email</td>
                    <td class="mini-title upper">Telefone</td>
                    <td class="mini-title upper">Matricula</td>
                    <td class="mini-title upper">Ações</td>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
</main>

<div id="lateral" class="suave">
    <div class="overlay suave"></div>
    <div id="materiais" class="content suave">
        <h4>Materiais <i class="material-icons click suave fechar" translate="no">close</i></h4>
        <form id="formMaterial">
            <input type="hidden" name="matricula" value="">
            <label for="nivel">Nível</label>
            <select name="nivel">
                <option value="1">Nível 1</option>
                <option value="2">Nível 2</option>
                <option value="3">Nível 3</option>
            </select>
            <button type="submit" class="click suave"><span class="suave">Salvar</span></button>
        </form>
    </div>
    <div id="notas" class="content suave">
        <h4>Notas <i class="material-icons click suave fechar" translate="no">close</i></h4>
        <form id="formNota">
            <input type="hidden" name="user_id" value="">
            <input type="hidden" name="turma_id" value="">
            <label for="modulo_id">Módulo</label>
            <select name="modulo_id">
                @foreach($modulos as $m)
                <option value="{{ $m->modulo_id }}">{{ $m->modulo_nome }}</option>
                @endforeach
            </select>
            <label for="resultado_trabalho">Nota por Trabalhos</label>
            <input type="number" name="resultado_trabalho" mim="0">
            <label for="resultado_pratica">Nota por Prova Prática</label>
            <input type="number" name="resultado_pratica" mim="0">
            <label for="resultado_teorica">Nota por Prova Teórica</label>
            <input type="number" name="resultado_teorica" mim="0">
            <button type="submit" class="click suave"><span class="suave">Salvar</span></button>
            <label style="margin-top: 26px;">Notas</label>
            <ul class="notas"></ul>
        </form>
    </div>
    <div id="prensenca" class="content suave">
        <h4>Presenças <i class="material-icons click suave fechar" translate="no">close</i></h4>
        <form id="formPresenca">
            <input type="hidden" name="user_id" value="">
            <label for="modulo_id">Módulo</label>
            <select name="modulo_id">
                @foreach($modulos as $m)
                <option value="{{ $m->modulo_id }}">{{ $m->modulo_nome }}</option>
                @endforeach
            </select>
            <label for="presenca_presencas">Presenças</label>
            <input type="number" name="presenca_presencas" min="0">
            <button type="submit" class="click suave"><span class="suave">Salvar</span></button>
            <label style="margin-top: 26px;">Presenças</label>
            <ul class="presencas"></ul>
        </form>
    </div>
    <div id="editar" class="content suave">
        <h4>Editar <i class="material-icons click suave fechar" translate="no">close</i></h4>
        <form id="formEditar">
            <input type="hidden" name="id" value="">
            <label for="name">Nome</label>
            <input type="text" name="name" placeholder="Nome" required/>
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="Email" required/>
            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" placeholder="(00) 00000-0000"/>
            <label for="status">Ativo</label>
            <select name="status">
                <option value="1">Sim</option>
                <option value="0">Não</option>
            </select>
            <button type="submit" class="click suave"><span class="suave">Salvar</span></button>
        </form>
    </div>
</div>

<div id="confirmar" class="suave">
    <p>Deseja realmente deletar este item?</p>
    <div class="opcoes right-align">
        <button class="mini-title upper click suave confirmar">sim</button>
        <button class="mini-title upper click suave cancelar">não</button>
    </div>
</div>

<script>

    $("#formEditar input[name='telefone']").mask("(00) 00000-0000", {reverse: false});
    
    $("#formMaterial").submit(function(e){
        e.preventDefault();
        $("#formMaterial button").prop('disabled', true);
        $("#formMaterial button span").text('Aguarde...');
        material();
    });
    
    $("#formPresenca").submit(function(e){
        e.preventDefault();
        $("#formPresenca button").prop('disabled', true);
        $("#formPresenca button span").text('Aguarde...');
        presenca();
    });
    
    $("#formNota").submit(function(e){
        e.preventDefault();
        $("#formNota button").prop('disabled', true);
        $("#formNota button span").text('Aguarde...');
        nota();
    });

    $("#formEditar").submit(function(e){
        e.preventDefault();
        $("#formEditar button").prop('disabled', true);
        $("#formEditar button span").text('Aguarde...');
        editar();
    });
    
    $("#lateral .fechar").click(function(){
        $("#lateral, #lateral .content").removeClass("active");
    });

    $("#confirmar .cancelar").click(function(){
        $("#confirmar").removeClass("active");
    });

    var table;

    function carregar() {
        table = $('#tabela').DataTable({
            ajax: {
                url: 'alunos-list',
                dataSrc: ''
            },
            columns: [
                {data: 'id', width: "60px", className: 'dt-body-center dt-head-center'},
                {data: 'name'},
                {data: 'email'},
                {data: 'telefone', width: "100px", className: 'dt-body-center dt-head-center', 'defaultContent': '---'},
                {data: 'matricula', width: "100px", className: 'dt-body-center dt-head-center', 'defaultContent': '000000'},
                {data: ''},
            ],
            columnDefs: [{
                targets: -1,
                width: "80px",
                className: 'dt-body-center dt-head-center',
                data: null,
                defaultContent: '<i class="acao material-icons click suave materiais" translate="no" title="Materiais">auto_stories</i><i class="acao material-icons click suave notas" translate="no" title="Notas">checklist</i><i class="acao material-icons click suave presencas" translate="no" title="Presenças">check_circle</i><i class="acao material-icons click suave editar" translate="no" title="Editar">create</i>'
            }],
            language: {
                processing: "Carregando",
                search: "Pesquisar",
                lengthMenu: "Mostrando _MENU_ registros",
                info: "De _START_ à _END_ de _TOTAL_ registros",
                paginate: {
                    first: "Primeiro",
                    previous: "Anterior",
                    next: "Próximo",
                    last: "Último"
                },
                emptyTable: "Nenhum registro cadastrado!",
                zeroRecords: "Nenhum registro encontrado!",
                loadingRecords: "Carregando...",
                infoEmpty: "Nenhum registro encontrado",
                infoFiltered: "(filtrado de _MAX_ cadastros)",
            }
        });

        $(document).on("click", ".materiais", function(){
            var data = table.row($(this).parents("tr")).data();
            $("#lateral, #materiais").addClass("active");
            $("#formMaterial input[name='matricula']").val(data.matricula);
            $('#formMaterial select[name="nivel"] option[value="'+data.material.nivel+'"]').prop("selected", true);
        });

        $(document).on("click", ".notas", function(){
            var data = table.row($(this).parents("tr")).data();
            $("#lateral, #notas").addClass("active");
            $("#formNota input[name='user_id']").val(data.id);
            if(data.turma_id){
                $("#formNota input[name='turma_id']").val(data.turma_id);
            }else{
                $("#formNota input[name='turma_id']").val(0);
            }
            $("#formNota .notas").empty();
            if(data.notas){
                data.notas.forEach( (n) => {
                    let li =    "<li>"+
                                    "<b>"+n.modulo.modulo_nome+"</b>"+
                                    "<span>Trabalhos:<div>"+n.resultado_trabalho+"</div></span>"+
                                    "<span>P. Prática:<div>"+n.resultado_pratica+"</div></span>"+
                                    "<span>P. Teórica:<div>"+n.resultado_teorica+"</div></span>"+
                                    "<span>Média:<div>"+((n.resultado_trabalho + n.resultado_pratica + n.resultado_teorica) / 3).toFixed(1)+"</div></span>"+
                                "</li>";
                    $("#formNota .notas").append(li);
                });
            }else{
                let li =    "<li>"+
                                "<b>Nenhuma nota lançada</b>"+
                            "</li>";
                $("#formNota .notas").append(li);
            }
        });

        $(document).on("click", ".presencas", function(){
            var data = table.row($(this).parents("tr")).data();
            $("#lateral, #prensenca").addClass("active");
            $("#formPresenca input[name='user_id']").val(data.id);
            $("#formPresenca .presencas").empty();
            if(data.presencas){
                data.presencas.forEach( (p) => {
                    let li = "<li><b>"+p.modulo.modulo_nome+"</b><span>"+p.presenca_presencas+"</span></li>";
                    $("#formPresenca .presencas").append(li);
                });
            }else{
                let li =    "<li>"+
                                "<b>Nenhuma prensença lançada</b>"+
                            "</li>";
                $("#formPresenca .presencas").append(li);
            }
        });

        $(document).on("click", ".editar", function(){
            var data = table.row($(this).parents("tr")).data();
            $("#lateral, #editar").addClass("active");
            $('#formEditar input[name="user_id"]').val(data.id);
            $('#formEditar input[name="name"]').val(data.name);
            $('#formEditar input[name="email"]').val(data.email);
            $('#formEditar input[name="telefone"]').val(data.telefone);
            $('#formEditar select[name="status"] option[value="'+data.status+'"]').prop("selected", true);
        });
    }
    carregar();

    function recarregar(){
        table.ajax.reload(null, false);
    }

    function material(){
        var form = new FormData($("#formMaterial")[0]);
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/admin/material',
            data: form,
            type: 'post',
            contentType: false,
            processData: false,
            error: function(){
                $("#formMaterial button").prop('disabled', false);
                $("#formMaterial button span").text('Salvar');
                alerta("Falha no registro!");
            },
            success: function(data, textStatus, xhr) {
                $("#lateral, #lateral .content").removeClass("active");
                $("#formMaterial")[0].reset();
                $("#formMaterial button").prop('disabled', false);
                $("#formMaterial button span").text('Salvar');
                alerta("Registro criado com sucesso!");
                recarregar();
            },
            complete: function(xhr, textStatus) {} 
        });
    }

    function nota(){
        var form = new FormData($("#formNota")[0]);
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/admin/nota',
            data: form,
            type: 'post',
            contentType: false,
            processData: false,
            error: function(){
                $("#formNota button").prop('disabled', false);
                $("#formNota button span").text('Salvar');
                alerta("Falha no registro!");
            },
            success: function(data, textStatus, xhr) {
                $("#lateral, #lateral .content").removeClass("active");
                $("#formNota")[0].reset();
                $("#formNota button").prop('disabled', false);
                $("#formNota button span").text('Salvar');
                alerta("Registro criado com sucesso!");
                recarregar();
            },
            complete: function(xhr, textStatus) {} 
        });
    }
    
    function presenca(){
        var form = new FormData($("#formPresenca")[0]);
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/admin/presencas',
            data: form,
            type: 'post',
            contentType: false,
            processData: false,
            error: function(){
                $("#formPresenca button").prop('disabled', false);
                $("#formPresenca button span").text('Salvar');
                alerta("Falha no registro!");
            },
            success: function(data, textStatus, xhr) {
                $("#lateral, #lateral .content").removeClass("active");
                $("#formPresenca")[0].reset();
                $("#formPresenca button").prop('disabled', false);
                $("#formPresenca button span").text('Salvar');
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
            url: '/admin/alunos/' + form.get("id"),
            data: form,
            type: 'post',
            contentType: false,
            processData: false,
            error: function(){
                $("#formEditar button").prop('disabled', false);
                $("#formEditar button span").text('Salvar');
                alerta("Falha ao editar!");
            },
            success: function(data, textStatus, xhr) {
                $("#lateral, #lateral .content").removeClass("active");
                $("#formEditar")[0].reset();
                $("#formEditar button").prop('disabled', false);
                $("#formEditar button span").text('Salvar');
                alerta("Registro atualizado com sucesso!");
                recarregar();
            },
            complete: function(xhr, textStatus) {} 
        });
    }

</script>