
<?php $__env->startSection('titulo','Unit 6 | Pronunciation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade6" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 06 - Brush and Red Eye Correction</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/unit6/pronuciation/completo.ogg')); ?>" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A - Observe how in the suffix “ing” the letter “g” is not pronounced.</h5>
				<ul class="lista-inline">
                    <li><b class="upper">Touching up</b></li>
                    <li><b class="upper">Healing</b></li>
                    <li><b class="upper">Editing</b></li>
                    <li><b class="upper">Opening</b></li>
                    <li><b class="upper">Adding</b></li>
                </ul>
                <h5 class="barlow" style="margin-top: 16px">B - Read the sentence out loud to practice pronunciation.</h5>
                <div class="espacamento">
                    <p>"Touching up personal photos by adding healing brush effects is common."</p>
                </div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade6/pronunciation.blade.php ENDPATH**/ ?>