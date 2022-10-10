
<?php $__env->startSection('titulo','Unit 25 | Vocabulary'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box"  data-apostila="apostila1" data-unidade="unidade25" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 25 - PEN TOOLS</h3>
				<p><b>Lesson goal:</b> Compare and contrst pen tools and brush tools.</p>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/unit25/vocabulary/completo.ogg')); ?>" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><p><b>NOTICE</b></p></li>
					<li><p><b>PRECISE</b></p></li>
					<li><p><b>FIGURE</b></p></li>
					<li><p><b>CHOICE</b></p></li>
					<li><p><b>GREAT</b></p></li>
					<li><p><b>EVEN</b></p></li>
					<li><p><b>APPRECIATE</b></p></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade25/vocabulary.blade.php ENDPATH**/ ?>