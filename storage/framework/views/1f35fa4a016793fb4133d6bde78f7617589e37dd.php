
<?php $__env->startSection('titulo','Unit 19 | Pronunciation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade19" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 19 - TEXT FORMATING</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/unit19/pronunciation/completo.ogg')); ?>" type="audio/ogg">
                </audio>
                <div class="clear"></div> <br>                
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A - Notice how the letters “Ch” sometimes has two different pronounciations.</h5>
				<ul class="lista-inline">
					<li><p><b>CHAT</b></p></li>
					<li><p><b>CHIP</b></p></li>
					<li><p><b>RICH</b></p></li>
					<li><p><b>BEACH</b></p></li>
					<li><p><b>PITCH</b></p></li>
					<li><h5 class="barlow">X</h5></li>
					<li><p><b>CHARACTER</b></p></li>
					<li><p><b>MECHANIC</b></p></li>
					<li><p><b>CHEMISTRY</b></p></li>
				</ul>												                
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade19/pronunciation.blade.php ENDPATH**/ ?>