
<?php $__env->startSection('titulo','Unit 45 | Pronunciation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade45" data-etapa="pronunciation">
            <h3 class="barlow">UNIT 45</h3>
            <h5 class="barlow">4 - PRONUNCIATION</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="<?php echo e(asset('assets/audio/apostila2/UNIT 45/4. PRONUNCIATION/PRONUNCIATION.ogg')); ?>" type="audio/ogg">
            </audio>
            <div class="clear"></div>
            <h5 class="barlow" style="margin-top:16px">Improving pronunciation - / tt / / dd /.</h5>
            <div class="metade">
                <div class="metade esquerda">
                    <p>Ma<b>tt</b>er</p>
                    <p>Ba<b>tt</b>leBi<b>tt</b>er</p>
                    <p>Li<b>tt</b>le</p>
                </div>
                <div class="metade direita">
                    <p>Da<b>dd</b>y</p>
                    <p>Su<b>dd</b>enly</p>
                    <p>Di<b>dd</b>lo</p>
                    <p>A<b>dd</b> it</p>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</main>
<script>
    activeMenu();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila2/unidade45/pronunciation.blade.php ENDPATH**/ ?>