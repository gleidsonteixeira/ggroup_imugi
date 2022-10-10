
<?php $__env->startSection('titulo','Unit 31 | Pronunciation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade31" data-etapa="pronunciation">
            <h3 class="barlow">UNIT 31</h3>
            <h5 class="barlow">4 - PRONUNCIATION</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="<?php echo e(asset('assets/audio/apostila2/UNIT 31/3. PRONUNCIATION/PRONUNCIATION.ogg')); ?>" type="audio/ogg">
            </audio>
            <div class="clear"></div>
            <h5 class="barlow" style="margin-top:16px">Improving pronunciation - / <b>ch</b> / / <b>sh</b> /</h5>

            <table class="metade left-align">
                <tr>
                    <td>
                        <p><b>Sh</b>aron</p>
                    </td>
                    <td>
                        <p><b>Ch</b>arles</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>Sh</b>e</p>
                    </td>
                    <td>
                        <p><b>Sh</b>aron</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>Sh</b>y</p>
                    </td>
                    <td>
                        <p><b>Sh</b>e</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>Sh</b>op</p>
                    </td>
                    <td>
                        <p><b>Sh</b>y</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>Sh</b>ips</p>
                    </td>
                    <td>
                        <p><b>Sh</b>op</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>Sh</b>eet</p>
                    </td>
                    <td>
                        <p><b>Sh</b>ips</p>
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
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila2/unidade31/pronunciation.blade.php ENDPATH**/ ?>