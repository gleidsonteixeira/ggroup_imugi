@extends('layouts.portal.template')
@section('titulo','Portal do Aluno | Notas')
@section('conteudo')
@include('layouts.portal.menus.sidebar')

<div id="main-wrapper" style="background-color: #FFF;overflow: auto;padding: 0 60px;padding-top: 60px;box-sizing: border-box;height: 100vh;">
    
    <h2>Adicionar notas</h2>
    <form id="formNotas" style="width: 300px;margin: 0 auto;">
        <label style="display:block;">Matrícula</label>
        <input type="text" name="matricula" placeholder="000000" maxlength="6" required style="margin-bottom: 10px;padding: 0px;height: 45px;width: 72%;background-color: #efefef;border: none;color: #555;font-size: 14px;border: 1px solid #dedede;font-weight: bold;text-indent: 10px;letter-spacing: 1px;text-transform: uppercase;width: 100%;"/>
        <label style="display:block;">Aluno</label>
        <input type="text" name="nome" disabled style="margin-bottom: 10px;width: 100%;"/>
        <label style="display:block;">Tipo de avaliação</label>
        <select name="avaliacao" style="margin-bottom: 10px;">
            <option value="TRABALHOS">Trabalho</option>
            <option value="PROVA PRATICA">Prova Prática</option>
            <option value="PROVA TEORICA">Prova Teórica</option>
        </select>
        <label style="display:block;">Módulo</label>
        <select name="etapa" style="margin-bottom: 10px;">
            <option value="1">PLAY GO</option>
            <option value="2">PHOTOSHOP</option>
            <option value="3">DOMINATING</option>
            <option value="4">GAME AND ANIMATION</option>
            <option value="5">MASTER OF LANGUAGE</option>
            <option value="6">VIDEO EDITION</option>
        </select>
        <label style="display:block;">Nota</label>
        <input type="number" name="notas" placeholder="0.0" required  style="margin-bottom: 10px;padding: 0px;height: 45px;width: 72%;background-color: #efefef;border: none;color: #555;font-size: 14px;border: 1px solid #dedede;font-weight: bold;text-indent: 10px;letter-spacing: 1px;text-transform: uppercase;width: 100%;"/> 
        <input type="submit" value="Salvar" class="btn_salvar">
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script>
    $("#formNotas input[name='matricula']").keyup(function(){
        let tam = $(this).val().length;
        if(tam == 6){
            pesquisar($(this).val());
        }
    });

    $("#formNotas").submit(function(e){
        e.preventDefault();
        let tam = $("#formNotas input[name='matricula']").val().length;
        if(tam == 6){
            $("#formNotas input[type='submit']").val("Salvando...").prop('disabled', true);
            criar();
        }else{
            alert("A matrícula precisa ter 6 digitos");
        }
    });

    function pesquisar(matricula){
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'search/'+matricula,
            type: 'get',
            error: function(){
                alert("Falha ao pesquisar!");
            },
            success: function(data, textStatus, xhr) {
                if(data.name){
                    $("#formNotas input[name='nome']").val(data.name);
                }else{
                    $("#formNotas input[name='nome']").val("");
                }
            },
            complete: function(xhr, textStatus) {} 
        });
    }

    function criar(){
        var form = new FormData($("#formNotas")[0]);
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'notas',
            data: form,
            type: 'post',
            contentType: false,
            processData: false,
            error: function(){
                alert("Falha ao criar!");
                $("#formNotas input[type='submit']").val("Salvar").prop('disabled', true);
            },
            success: function(data, textStatus, xhr) {
                $("#formNotas")[0].reset();
                $("#formNotas input[type='submit']").val("Salvar").prop('disabled', false);
                alert("Registro criado com sucesso!");
            },
            complete: function(xhr, textStatus) {} 
        });
    }
</script>