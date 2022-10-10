
<?php $__env->startSection('titulo','Unit 15 | Pronunciation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade15" data-etapa="pronunciation">
            <h3 class="barlow">UNIT 15</h3>
            <h5 class="barlow">4 - PRONUNCIATION</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="<?php echo e(asset('assets/audio/apostila2/UNIT 15/3. PRONUNCIATION/PRONUNCIATION.ogg')); ?>" type="audio/ogg">
            </audio>
            <div class="clear espacamento"></div>
            <h5 class="barlow">Ed sounds</h5>
            <table class="metade center-align">
                <tr>
                    <td>
                        <h5 class="barlow">As <b>/t/</b> after <b>s,f,sh,ch,p,k</b></h5>
                    </td>
                    <td>
                        <h5 class="barlow">As <b>/d/</b></h5>
                    </td>
                    <td>
                        <h5 class="barlow">As <b>/id/</b> after <b>/d/</b> or <b>/t/</b></h5>
                </tr>
                <tr>
                    <td>
                        <p>Stopp<b>ed</b></p>
                    </td>
                    <td>
                        <p>Remember<b>ed</b></p>
                    </td>
                    <td>
                        <p>Visit<b>ed</b></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Work<b>ed</b></p>
                    </td>
                    <td>
                        <p>Studi<b>ed</b></p>
                    </td>
                    <td>
                        <p>Wait<b>ed</b></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Watch<b>ed</b></p>
                    </td>
                    <td>
                        <p>travel<b>ed</b></p>
                    </td>
                    <td>
                        <p>Offend<b>ed</b></p>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</main>
<script>
    activeMenu();
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila2/unidade15/pronunciation.blade.php ENDPATH**/ ?>