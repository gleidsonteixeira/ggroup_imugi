
<?php $__env->startSection('titulo','Unit 25 | Pronunciation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade34" data-etapa="pronunciation">
            <h3 class="barlow">UNIT 34</h3>
            <h5 class="barlow">4 - PRONUNCIATION</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="<?php echo e(asset('assets/audio/apostila2/UNIT 34/4. PRONUNCIATION/PRONUNCIATION.ogg')); ?>" type="audio/ogg">
            </audio>
            <div class="clear"></div>

            <ul class="lista-inline upper" style="margin-top:16px">
                <li>
                    <p><b>t sound /t/</b></p>
                </li>
                <li>
                    <p>TEACHER</p>
                </li>
                <li>
                    <p>TOMORROW</p>
                </li>
                <li>
                    <p>PARTICIPATE</p>
                </li>
                <li>
                    <p>EXPECTATION</p>
                </li>
                <li>
                    <p>SECRET</p>
                </li>
                <li>
                    <p>LIMIT</p>
                </li>
            </ul>
            <p style="margin-top:32px">
                <b>T</b>omorrow the <b>t</b>eacher wan<b>t</b>s to go beyond the limi<b>t</b>. Our par<b>t</b>icipation is a secre<b>t</b>. The
                expec<b>t</b>ation for ou<b>r</b> presen<b>ta</b>tion is very high.
            </p>
        </div>
    </div>
</main>
<script>
    activeMenu();
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila2/unidade34/pronunciation.blade.php ENDPATH**/ ?>