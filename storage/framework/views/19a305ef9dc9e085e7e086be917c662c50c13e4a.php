
<?php $__env->startSection('titulo','Unit 2 | Pronunciation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade2" data-etapa="pronunciation">
            <h3 class="barlow">UNIT 02</h3>
            <h5 class="barlow">4 - PRONUNCIATION</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="<?php echo e(asset('assets/audio/apostila2/UNIT 2/4. PRONUNCIATION/PRONUNCIATION.ogg')); ?>" type="audio/ogg">
            </audio>
            <div class="clear"></div>
            <p style="margin-top:16px"><b>Connected Speech:</b> In spoken English the pronunciation of specific words may be changed within a sentence following two principles. Elision (When a sound disappears)
                and Assimilation (When a sound is modified).</p>

            <ul class="lista-inline" style="margin-top:32px">
                <li>
                    <p>E.g.: Goo<b><u>d</u></b></p>
                </li>
                <li>
                    <p>Goo<b><u>d m</u></b>orning</p>
                </li>
                <li>
                    <p>Goo<b><u>d a</u></b>fternoon</p>
                </li>
            </ul>

        </div>
    </div>
</main>
<script>
    activeMenu();
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila2/unidade2/pronunciation.blade.php ENDPATH**/ ?>