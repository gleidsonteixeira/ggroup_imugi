
<?php $__env->startSection('titulo','Unit 19 | Pronunciation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade19" data-etapa="pronunciation">
            <h3 class="barlow">UNIT 19</h3>
            <h5 class="barlow">4 - PRONUNCIATION</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="<?php echo e(asset('assets/audio/apostila2/UNIT 19/3. PRONUNCIATION/PRONUNCIATION.ogg')); ?>" type="audio/ogg">
            </audio>
            <div class="clear espacamento"></div>
            <ul class="lista-inline upper" style="margin-top:16px">
                <li>
                    <p><b>ow sound /aʊ/</b></p>
                </li>
                <li>
                    <p><b>Found House</b></p>
                </li>
                <li>
                    <p><b>Brown</b></p>
                </li>
                <li>
                    <p><b>South</b></p>
                </li>
                <li>
                    <p><b>Down</b></p>
                </li>
                <li>
                    <p><b>Town</b></p>
                </li>
            </ul>
            <div class="clear"></div>
            <p style="margin-top:32px">I found a brown house in south down town.</p>
        </div>
    </div>
</main>
<script>
    activeMenu();
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila2/unidade19/pronunciation.blade.php ENDPATH**/ ?>