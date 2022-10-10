
<?php $__env->startSection('titulo','Unit 12 | Pronunciation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade12" data-etapa="pronunciation">
            <h3 class="barlow">UNIT 12</h3>
            <h5 class="barlow">4 - PRONUNCIATION</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="<?php echo e(asset('assets/audio/apostila2/UNIT 12/4. PRONUNCIATION/PRONUNCIATION.ogg')); ?>" type="audio/ogg">
            </audio>
            <div class="clear"></div>
            <ul class="lista-inline upper" style="margin-top:16px">
                <li>
                    <p><b>long u /ju/</p></b>
                </li>
                <li>
                    <p>Youth</p>
                </li>
                <li>
                    <p>University</p>
                </li>
                <li>
                    <p>Usually</p>
                </li>
                <li>
                    <p>Huge</p>
                </li>
                <li>
                    <p>Future</p>
                </li>
                <li>
                    <p>music</p>
                </li>
            </ul>
            <p style="margin-top:32px"><b><u>You</u></b>th <b><u>u</u></b>sually study m<b><u>u</u></b>sic in h<b><u>u</u></b>ge <b><u>u</u></b>niversities.</p>
        </div>
    </div>
</main>
<script>
    activeMenu();
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila2/unidade12/pronunciation.blade.php ENDPATH**/ ?>