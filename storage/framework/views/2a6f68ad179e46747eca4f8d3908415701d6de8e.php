
<?php $__env->startSection('titulo','Unit 1 | Pronunciation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade1" data-etapa="pronunciation">
            <h3 class="barlow">UNIT 01</h3>
            <h5 class="barlow">4 - PRONUNCIATION</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="<?php echo e(asset('assets/audio/apostila2/UNIT 1/4. PRONUNCIATION/PRONUNCIATION.ogg')); ?>" type="audio/ogg">
            </audio>
            <div class="clear"></div>
            <p style="margin-top:16px"><b>Contractions</b>: Practice the pronunciation of contracted form x non-contracted forms.</p>
            <table class="metade center-align">
                <tr>
                    <td>
                        <p>I am a ...</p>
                    </td>
                    <td>
                        <p>I'm a ...</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>He is an ...</p>
                    </td>
                    <td>
                        <p>He's an ...</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>You are an ...</p>
                    </td>
                    <td>
                        <p>You're an ...</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>We are in ...</p>
                    </td>
                    <td>
                        <p>We're in ...</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>They are on ...</p>
                    </td>
                    <td>
                        <p>They’re on ...</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Isn't ...</p>
                    </td>
                    <td>
                        <p>Aren't ...</p>
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
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila2/unidade1/pronunciation.blade.php ENDPATH**/ ?>