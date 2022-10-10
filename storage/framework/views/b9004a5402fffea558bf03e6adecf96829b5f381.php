
<?php $__env->startSection('titulo','Unit 3 | Pronunciation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade3" data-etapa="pronunciation">
            <h3 class="barlow">UNIT 03</h3>
            <h5 class="barlow">4 - PRONUNCIATION</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="<?php echo e(asset('assets/audio/apostila2/UNIT 3/4. PRONUNCIATION/PRONUNCIATION.ogg')); ?>" type="audio/ogg">
            </audio>
            <div class="clear"></div>
            <p style="margin-top:16px">There are 6 <b>STOP CONSIONANTS</b> in English: <b>P,T,K,B,D,G.</b></p>

            <ul class="lista-inline" style="margin-top:32px">
                <li>
                    <p>PHOTO SHO<b><u>P</u></b></p>
                </li>
                <li>
                    <p>NO<b><u>T</u></b></p>
                </li>
                <li>
                    <p>SPEN<b><u>T</u></b></p>
                </li>
                <li>
                    <p>WOR<b><u>K</u></b></p>
                </li>
                <li>
                    <p>BO<b><u>B</u></b></p>
                </li>
                <li>
                    <p>SECON<b><u>D</u></b></p>
                </li>
                <li>
                    <p>AN<b><u>D</u></b></p>
                </li>
                <li>
                    <p>BU<b><u>G</u></b></p>
                </li>
            </ul>

            <p>I <b>spent</b> two hours to set up my photo <b>shop</b> in my computer. It’s the <b>second</b> time <b>Bob</b> installs it for me but it doesn’t <b>work</b>. I <b>think</b> it’s a <b>bug</b>.</p>

        </div>
    </div>
</main>
<script>
    activeMenu();
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila2/unidade3/pronunciation.blade.php ENDPATH**/ ?>