<?php $__env->startSection('titulo','Unit 3 | Pronunciation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade3" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 03 - PHOTOGRAPHY AND PHOTOSHOP</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/unit3/pronuciation/pronuciation.ogg')); ?>" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A - Listen to and repeat the pronunciation of the following words. Observe the pronunciation of the letter "L".</h5>
				<ul class="lista-inline">
                    <li><p><b class="upper">Wildlife</b></p></li>
                    <li><p><b class="upper">Original</b></p></li>
                    <li><p><b class="upper">Old</b></p></li>
                    <li><p><b class="upper">Tool</b></p></li>
                    <li><p><b class="upper">Call</b></p></li>
                    <li><p><b class="upper">Professional</b></p></li>
                    <li><p><b class="upper">All</b></p></li>
                </ul>
                <h5 class="barlow" style="margin-top: 16px">B - Listen to and repeat the pronunciation of the following words. Pay attention to the pronunciation of “CH”.</h5>
                <ul class="lista-inline">
                    <li><p><b class="upper">Choose</b></p></li>
                    <li><p><b class="upper">Teach</b></p></li>
                    <li><p><b class="upper">Check</b></p></li>
                    <li><p><b class="upper">Touch</b></p></li>
                    <li><p><b class="upper">Change</b></p></li>
                    <li><p><b class="upper">Chat</b></p></li>
                </ul>
                <h5 class="barlow" style="margin-top: 16px">C - Listen to your teacher read the sentence, and then repeat it after him.</h5>
                <div class="espacamento">
                    <p>I teach children to use professional Photoshop tools.</p>
                </div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade3/pronunciation.blade.php ENDPATH**/ ?>