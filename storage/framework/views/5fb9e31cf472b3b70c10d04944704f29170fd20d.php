
<?php $__env->startSection('titulo','Unit 27 | Vocabulary'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade27" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 27 - PROFESSOR VICTOR</h3>
				<p><b>Goal: </b> Have Students Understand The Market For Video Editors And Show Them How Photoshop May Be Useful When Taking The First Steps.</p>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/unit27/vocabulary/completo.ogg')); ?>" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><p><b>ABOUT</b></p></li>
					<li><p><b>GRADUATE</b></p></li>
					<li><p><b>WELL-KNOWN</b></p></li>
					<li><p><b>USEFUL</b></p></li>
					<li><p><b>SETTING</b></p></li>
					<li><p><b>LEARN</b></p></li>
					<li><p><b>SHOW</b></p></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade27/vocabulary.blade.php ENDPATH**/ ?>