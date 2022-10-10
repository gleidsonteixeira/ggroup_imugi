
<?php $__env->startSection('titulo','Unit 11 | Grammar'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade11" data-etapa="grammar">
            <h3 class="barlow">UNIT 11 </h3>
            <h5 class="barlow">3 - GRAMAR</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="<?php echo e(asset('assets/audio/apostila3/LESSON 11/03_GRAMMAR/GRAMMAR_11.mp3')); ?>" type="audio/mp3">
            </audio>
            <div class="clear"></div>
            <h5 class="barlow" style="margin-top:16px">A -  CONECTORS – REVIEW</h5>
            <table class="espacamento left-align bordered" style="margin-top:32px;">
                <tr>
                    <td colspan="2"><h5 class="barlow center-align">Connectors</h5></td>
                    <td><h5 class="barlow center-align">Examples</h5></td>
                </tr>
                <tr class="bordered">
                    <td><p>Addition</p></td>
                    <td><p><b>And</b></p> <p><b>Besides that</b></p> <p><b>Moreover</b></p> <p><b>Furthermore</b></p></td>
                    <td><p>Akira loves comic books <b>and</b>  he’s also a fan of GOT.
                    Youtube is a great tool. <b>Besides that</b> it’s free.
                    A good content is the secret for a good audience.
                    <b>Moreover</b>, it helps you to add value to your brand.
                    Facebook is still the most powerful social media.
                    <b>Furthermore</b> it has fantastic metric tools.</p></td>
                </tr>
                <tr class="bordered">
                    <td><p>Contrast</p></td>
                    <td>
                        <p><b>But</b></p>
                        <p><b>Although/even though</b></p>
                        <p><b>However</b></p>
                        <p><b>Despite</b></p>
                    </td>
                    <td>
                        <p>PhotoShop is awesome <b>but</b> it difficult to memorize all the</p>
                        <p>available tools for treating photos.</p>
                        <p><b>Although/Even though</b> Photoshop is awesome, it’s difficult to</p>
                        <p>memorize all the available tools for treating photos.</p>
                        <p>Photoshop is awesome. <b>However</b>, it’s difficult to memorize all the</p>
                        <p>available tools for treating photos.</p>
                        <p><b>Despite</b> being awesome, It’s difficult to memorize all Photo Shop</p>
                        <p>available tools for treating photos.</p>
                    </td>
                </tr>
                <tr class="bordered">
                    <td><p>Conclusion</p></td>
                    <td>
                        <p><b>So</b></p>
                        <p><b>As a conclusion</b></p>
                        <p><b>As we have seen</b></p>
                        <p><b>Because of that</b></p>
                    </td>
                    <td>
                        <p>Youtube is an outstanding branding tool. <b>So</b> I think we should</p>
                        <p>invest in a nice channel for the company.</p>
                        <p>Youtube is an outstanding branding tool. <b>As a conclusion</b>, I think</p>
                        <p>we should invest in a nice channel for the company.</p>
                        <p><b>As we have seen</b>, Youtube is an outstanding branding tool.</p>
                        <p><b>Because of that</b>, I think we should invest in a nice channel for the company.</p>
                    </td>
                </tr>
                <tr class="bordered">
                    <td><p>Exemplification</p></td>
                    <td>
                        <p><b>For instance</b></p>
                        <p><b>As an example</b></p>
                        <p><b>Such as</b></p>
                    </td>
                    <td>
                        <p>There are many good channels on Youtube. <b>For instance</b>, Lucas Neto</p>
                        <p>channel is awesome for kids.</p>
                        <p>There are many good channels on Youtube. <b>As an example</b>, adobe</p>
                        <p>has a great tutorial channel.</p>
                        <p>There are many good channels on Youtube. You can access funny</p>
                        <p>channels <b>such as</b> Whindesron Nunes channel.</p>
                    </td>
                </tr>
            </table>
            <h5 class="barlow" style="margin-top:32px"><b>EXERCISES</b></h5>
            <h5 class="barlow">1 -  In groups, create a dialogue and use at least one connector of each type: adding,
            contrasting, concluding and giving examples. Use the topics below or any other you find interesting. </h5>
            <p>• Visiting Youtube headquarters.</p>
            <p>• Preparing yourself for your 3rd Comic.com.</p>
            <p>• Deciding on what program to use in a project. </p>
            <form id="unidade11grammar563" method="post">
                <textarea name="grammar552-1" class="metade left-align" placeholder="Responda aqui" required></textarea>
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="11">
                <input type="hidden" name="atividade_id" value="563">
                <div class="clear"></div>
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <h5 class="barlow">2 -  Based on the topics below, create one sentence for each type of connector.</h5>
            <p>• Home office work.</p>
            <p>• Living abroad.</p>
            <p>• Working for a company x being a self-employee.</p>
            <form id="unidade11grammar564" method="post" class="metade">
                <p>1. <input type="text" name="grammar564-1" class="full left-align" placeholder="Responda aqui" required></p>
                <p>2. <input type="text" name="grammar564-2" class="full left-align" placeholder="Responda aqui" required></p>
                <p>3. <input type="text" name="grammar564-3" class="full left-align" placeholder="Responda aqui" required></p>
                <p>4. <input type="text" name="grammar564-4" class="full left-align" placeholder="Responda aqui" required></p>
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="11">
                <input type="hidden" name="atividade_id" value="564">
                <div class="clear"></div>
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
        </div>
    </div>
</main>
<script>
    activeMenu();

    $("form").each(function() {
        var atividade_id = $(this).find('input[name="atividade_id"]').val();
        checkAtividade(atividade_id);
    });


        $("#unidade11grammar563").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{"'+$('#unidade11grammar563 textarea').attr("name")+'":"'+$('#unidade11grammar563 textarea').val()+'"}';
            if($('#unidade11grammar563 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade11grammar563'), respostas);
            }else{
                enviarAtividade($('#unidade11grammar563'), respostas);
            }
        });

        $("#unidade11grammar564").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade11grammar564 input[type="text"]').each(function(index){
                if(($('#unidade11grammar564 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade11grammar564 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade11grammar564'), respostas);
            }else{
                enviarAtividade($('#unidade11grammar564'), respostas);
            }
        });


    function checkAtividade(atividade_id) {
        request = $.ajax({
            url: window.location.pathname + '/respostasCheck/' + atividade_id,
            type: 'get',
            error: function() {
                console.log("Erro de retorno de dados.");
            }
        });
        request.done(function(response) {
            if (response == 0) {
                console.log("não veio nada");
            } else {
                var objeto = JSON.parse(response[0].resposta_respostas);
                var chaves = Object.keys(objeto);
                var respostas = Object.values(objeto);
                for (j = 0; j < respostas.length; j++) {
                    $('#unidade11grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade11grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                    $('#unidade11grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade11grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);

                }
                $('#unidade11grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade11grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
            }
        });
    }

    function enviarAtividade(formId, respostas) {
        var atividade = {
            "_token": formId.find('input[name="_token"]').val(),
            "resposta_respostas": respostas,
            "atividade_id": formId.find('input[name="atividade_id"]').val(),
            "unidade_id": formId.find('input[name="unidade_id"]').val()
        };
        request = $.ajax({
            url: window.location.pathname + '/respostas',
            data: atividade,
            type: 'post',
            error: function() {
                console.log("Erro de envio.");
            }
        });
        request.done(function(response) {
            if (response == "1") {
                alert("Respostas salvas");
                window.location.reload();
            } else if (response == 2) {
                alert("Respostas atualizadas");
                window.location.reload();
            }
        });
    }

    function atualizarAtividade(formId, respostas) {
        var resposta = {
            "_token": formId.find('input[name="_token"]').val(),
            "resposta_id": formId.find('input[name="resposta_id"]').val(),
            "resposta_respostas": respostas
        };
        request = $.ajax({
            url: window.location.pathname + '/respostas',
            data: resposta,
            type: 'post',
            error: function() {
                console.log("Erro de envio.");
            }
        });
        request.done(function(response) {
            if (response == "1") {
                alert("Respostas salvas");
                window.location.reload();
            } else if (response == 2) {
                alert("Respostas atualizadas");
                window.location.reload();
            }
        });
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila3/unidade11/grammar.blade.php ENDPATH**/ ?>