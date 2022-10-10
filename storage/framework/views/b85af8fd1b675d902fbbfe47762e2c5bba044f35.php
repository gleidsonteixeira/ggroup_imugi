
<?php $__env->startSection('titulo','Unit 16 | Pronunciation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade16" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 16 - Akira’S STUDENTS</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/unit16/pronunciation/completo.ogg')); ?>" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A - Observe the difference in the pronounciation of letters “P” and “B”.</h5>
				<ul class="lista-inline">
					<li><p><b>PUT</b></p></li>
					<li><p><b>UP</b></p></li>
					<li><p><b>PAIN</b></p></li>
					<li><p><b>LAP</b></p></li>
					<li><p><b>PEN</b></p></li>
					<li><p><b>TAP</b></p></li>
				</ul>
				<ul class="lista-inline">					
					<li><p><b>BUT</b></p></li>
					<li><p><b>JOB</b></p></li>
					<li><p><b>BALL</b></p></li>
					<li><p><b>RUB</b></p></li>
					<li><p><b>BURN</b></p></li>
					<li><p><b>CURB</b></p></li>
				</ul>                
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade16/pronunciation.blade.php ENDPATH**/ ?>