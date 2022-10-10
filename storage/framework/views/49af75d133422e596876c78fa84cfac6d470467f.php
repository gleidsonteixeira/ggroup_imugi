
<?php $__env->startSection('titulo','Unit 44 | Pronunciation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade44" data-etapa="pronunciation">
            <h3 class="barlow">UNIT 44</h3>
            <h5 class="barlow">4 - PRONUNCIATION</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="<?php echo e(asset('assets/audio/apostila2/UNIT 44/4. PRONUNCIATION/PRONUNCIATION.ogg')); ?>" type="audio/ogg">
            </audio>
            <div class="clear espacamento"></div>
            <h5 class="barlow" style="margin-top:16px">Improving pronunciation - / k / / q /.</h5>
            <div class="metade">
                <div class="metade esquerda">
                    <p><b>K</b>angaroo</p>
                    <p>Wa<b>k</b>e</p>
                    <p><b>K</b>oo<b>k</b></p>
                </div>
                <div class="metade direita">
                    <p><b>K</b>now</p>
                    <p><b>Quo</b>te</p>
                    <p><b>Que</b>stion</p>
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

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila2/unidade44/pronunciation.blade.php ENDPATH**/ ?>