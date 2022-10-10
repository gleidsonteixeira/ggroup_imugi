
<?php $__env->startSection('titulo','Unit 42 | Pronunciation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade42" data-etapa="pronunciation">
            <h3 class="barlow">UNIT 42</h3>
            <h5 class="barlow">4 - PRONUNCIATION</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="<?php echo e(asset('assets/audio/apostila2/UNIT 42/4. PRONUNCIATION/PRONUNCIATION.ogg')); ?>" type="audio/ogg">
            </audio>
            <div class="clear"></div>
            <ul class="lista-inline upper" style="margin-top:16px">
                <li>
                    <p><b>k sound /k/</b></p>
                </li>
                <li>
                    <p>Keep
                </li>
                <li>
                    <p>Client
                </li>
                <li>
                    <p>Account
                </li>
                <li>
                    <p>Second
                </li>
                <li>
                    <p>Bank
                </li>
                <li>
                    <p>Unique
                </li>
            </ul>
            <p style="margin-top:32px">The <b><u>c</u></b>lient wants to <b><u>k</u></b>eep his se<b><u>c</u></b>ond a<b><u>cc</u></b>ount in the ban<b><u>k</u></b> as his uni<b><u>que</u></b> investment.</p>
        </div>
    </div>
</main>
<script>
    activeMenu();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila2/unidade42/pronunciation.blade.php ENDPATH**/ ?>