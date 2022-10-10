
<?php $__env->startSection('titulo','Unit 15 | Pronunciation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade15" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 15 - PROFESSOR Akira Suzuki</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/unit15/pronunciation/pronunciation.ogg')); ?>" type="audio/ogg">
                </audio>
				<div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A - Notice how the sound of “U” and “W” are totally different. Listen and repeat.</h5>
				<ul class="lista-inline">
					<li><p><b>WHAT</b></p></li>
					<li><p><b>WET</b></p></li>
					<li><p><b>WACK</b></p></li>
					<li><p><b>WONDER</b></p></li>
					<li><p><b>X</b></p></li>
					<li><p><b>UPSET</b></p></li>
					<li><p><b>UPLOAD</b></p></li>
					<li><p><b>UTTER</b></p></li>
					<li><p><b>UPTIGHT</b></p></li>
				</ul>
				<h5 class="barlow" style="margin-top: 16px">B - Read the sentence and practice pronounciation.</h5>
				<div class="espacamento">
					<p>The Usher Was Waiting For The Wedding Guests To Arrive When An Upset Woman Started Crying.</p>
				</div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade15/pronunciation.blade.php ENDPATH**/ ?>