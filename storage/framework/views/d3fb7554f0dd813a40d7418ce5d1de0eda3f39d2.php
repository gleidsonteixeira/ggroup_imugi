
<?php $__env->startSection('titulo','Unit 4 | Pronunciation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade4" data-etapa="pronunciation">
            <h3 class="barlow">UNIT 04</h3>
            <h5 class="barlow">4 - PRONUNCIATION</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="<?php echo e(asset('assets/audio/apostila2/UNIT 4/4. PRONUNCIATION/PRONUNCIATION.ogg')); ?>" type="audio/ogg">
            </audio>
            <div class="clear"></div>

            <ul class="lista-inline upper" style="margin-top:16px">
                <li>
                    <p><b>long a /eɪ/</b></p>
                </li>
                <li>
                    <p>GATE</p>
                </li>
                <li>
                    <p>LATE</p>
                </li>
                <li>
                    <p>FAIL</p>
                </li>
                <li>
                    <p>PLACE</p>
                </li>
                <li>
                    <p>WAIT</p>
                </li>
                <li>
                    <p>GREAT</p>
                </li>
            </ul>

            <p style="margin-top:32px">J<b>a</b>ne’s f<b>a</b>ce looks gre<b>a</b>t while she w<b>a</b>its in the gre<b>a</b>t g<b>a</b>te</p>

        </div>
    </div>
</main>
<script>
    activeMenu();
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila2/unidade4/pronunciation.blade.php ENDPATH**/ ?>