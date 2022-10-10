
<?php $__env->startSection('titulo','Unit 11 | Pronunciation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade11" data-etapa="pronunciation">
            <h3 class="barlow">UNIT 11</h3>
            <h5 class="barlow">4 - PRONUNCIATION</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="<?php echo e(asset('assets/audio/apostila2/UNIT 11/4. PRONUNCIATION/PRONUNCIATION.ogg')); ?>" type="audio/ogg">
            </audio>
            <div class="clear"></div>
            <ul class="lista-inline upper" style="margin-top:16px">
                <li>
                    <p><b>short o /ɑ/</p></b>
                </li>
                <li>
                    <p>Stop</p>
                </li>
                <li>
                    <p>Lock</p>
                </li>
                <li>
                    <p>Farm</p>
                </li>
                <li>
                    <p>Want</p>
                </li>
                <li>
                    <p>Possible</p>
                </li>
                <li>
                    <p>Got</p>
                </li>
            </ul>
            <p style="margin-top:32px">If p<b><u>o</u></b>ssible,I want to l<b><u>o</u></b>ck everything I g<b><u>o</u></b>t after I st<b><u>o</u></b>p</p>
        </div>
    </div>
</main>
<script>
    activeMenu();
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila2/unidade11/pronunciation.blade.php ENDPATH**/ ?>