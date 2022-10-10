
<?php $__env->startSection('titulo','Unit 10 | Pronunciation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade10" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 10</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/unit10/pronunciation/pronunciation.ogg')); ?>" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A - Listen to your teacher as he reads the following words, and then repeat them. Observe the underlined letters.</h5>
				<ul class="lista-inline">
                    <li><p><b>GO</b></p></li>
                    <li><p><b>LOVE</b></p></li>
                    <li><p><b>SHOW</b></p></li>
                    <li><p><b>FROM</b></p></li>
                    <li><p><b>WORK</b></p></li>
                    <li><p><b>NICOLAS</b></p></li>
                </ul>
                <h5 class="barlow" style="margin-top: 16px">B - Read the sentence after your teacher</h5>
                <div class="espacamento">
                    <p>“I Love Going To Shows With Nicolas”</p>
                </div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade10/pronunciation.blade.php ENDPATH**/ ?>