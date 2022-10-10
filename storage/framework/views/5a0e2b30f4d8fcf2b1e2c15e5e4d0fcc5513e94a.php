
<?php $__env->startSection('titulo','Unit 23 | Vocabulary'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade23" data-etapa="vocabulary">

			<h3 class="barlow">UNIT 23</h3>
			<h5 class="barlow">1 - VOCABULARY</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="<?php echo e(asset('assets/audio/apostila2/UNIT 23/1. VOCABULARY/1. VOCABULARY.ogg')); ?>" type="audio/ogg">
			</audio>
			<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>
			<div class="espacamento">
				<p><b>TO KISS </b>/ somebody / cheeks / hands</p>
				<p><b>TO PICK </b>/ the nose / on somebody / up somebody</p>
				<p><b>TO READ </b>/ a book / the newspaper / a magazine / a comic book / a blog</p>
			</div>
			<h5 class="barlow" style="margin-top: 16px">B - WORDS IN CONTEXT</h5>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="<?php echo e(asset('assets/audio/apostila2/UNIT 23/1. VOCABULARY/2. VOCABULARY.ogg')); ?>" type="audio/ogg">
			</audio>

			<ul class="lista-inline upper" style="margin-top:16px">
				<li>
					<p><b>STUFF</b></p>
				</li>
				<li>
					<p><b>MATTER</b></p>
				</li>
				<li>
					<p><b>REARRANGE</b></p>
				</li>
				<li>
					<p><b>FITS</b></p>
				</li>
				<li>
					<p><b>CORNER</b></p>
				</li>
				<li>
					<p><b>CHANGE</b></p>
				</li>
				<li>
					<p><b>PLUG</b></p>
				</li>
				<li>
					<p><b>SET UP</p>
				</li>
				<li>
					<p><b>FIND OUT</b></p>
				</li>
			</ul>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila2/unidade23/vocabulary.blade.php ENDPATH**/ ?>