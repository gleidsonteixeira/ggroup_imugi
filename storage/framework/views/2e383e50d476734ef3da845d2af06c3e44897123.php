
<?php $__env->startSection('titulo','Unit 21 | Vocabulary'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade21" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 21 - PROFESSOR SARAH HENDRIX</h3>
				<p><b>Goal:</b> Provide Students With An Understanding Of The Field Of Ilustration.</p>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/unit21/vocabulary/completo.ogg')); ?>" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><p><b>THOUGH</b></p></li>
					<li><p><b>MOVE</b></p></li>
					<li><p><b>SPECIALIZE</b></p></li>
					<li><p><b>DRAW</b></p></li>
					<li><p><b>NOWADAYS</b></p></li>
					<li><p><b>VARIETY</b></p></li>
					<li><p><b>DURING</b></p></li>
					<li><p><b>SUCH AS</b></p></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade21/vocabulary.blade.php ENDPATH**/ ?>