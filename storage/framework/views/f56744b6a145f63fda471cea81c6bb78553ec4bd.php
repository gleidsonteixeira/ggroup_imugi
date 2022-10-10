
<?php $__env->startSection('titulo','Unit 11 | Pronunciation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade11" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 11 - COLOR TOOLS</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/unit11/pronunciation/pronunciation.wav')); ?>" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A. Listen to your teacher read the words below, repeat after Him/Her. Observe the pronunciation of the underlined letters. Notice that the letter ‘G’ at the end is not pronounced.</h5>
                <ul class="lista-inline">
					<li><p><b>STUDYING</b></p></li>
					<li><p><b>CREATING</b></p></li>
					<li><p><b>DEVELOPING</b></p></li>
					<li><p><b>TRYING</b></p></li>
				</ul>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade11/pronunciation.blade.php ENDPATH**/ ?>