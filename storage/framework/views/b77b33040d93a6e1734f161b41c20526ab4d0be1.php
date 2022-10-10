
<?php $__env->startSection('titulo','Unit 23 | Pronunciation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade23" data-etapa="pronunciation">
            <h3 class="barlow">UNIT 23</h3>
            <h5 class="barlow">4 - PRONUNCIATION</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="<?php echo e(asset('assets/audio/apostila2/UNIT 23/4. PRONUNCIATION/PRONUNCIATION.ogg')); ?>" type="audio/ogg">
            </audio>
            <div class="clear"></div>


            <ul class="lista-inline upper" style="margin-top:16px">
                <li>
                    <p><b>schwa+r /ɚ/</b></p>
                </li>
                <li>
                    <p>HER</p>
                </li>
                <li>
                    <p>WORK</p>
                </li>
                <li>
                    <p>SURE</p>
                </li>
                <li>
                    <p>FIRST</p>
                </li>
                <li>
                    <p>EARLY</p>
                </li>
                <li>
                    <p>WERE</p>
                </li>
            </ul>

            <p style="margin-top:32px">Fi<b><u>r</u></b>st, they w<b><u>e</u></b>re, for s<b><u>u</u></b>re, in h<b><u>e</u></b>r w<b><u>o</u></b>rk very <b><u>ea</u></b>rly.</p>
        </div>
    </div>
</main>
<script>
    activeMenu();
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila2/unidade23/pronunciation.blade.php ENDPATH**/ ?>