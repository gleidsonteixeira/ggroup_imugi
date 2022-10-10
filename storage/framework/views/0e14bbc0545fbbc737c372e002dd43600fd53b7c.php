
<?php $__env->startSection('titulo','Unit 17 | Pronunciation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade17" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 17 - LAYERS AND GUIDES</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/unit17/pronunciation/completo.ogg')); ?>" type="audio/ogg">
                </audio>              
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A - Pay attention to the sound of the underlined letters.</h5>
				<ul class="lista-inline">
					<li><p><b>EXAMPLE</b></p></li>
					<li><p><b>EXACT</b></p></li>
					<li><p><b>EXEMPT</b></p></li>
					<li><p><b>EXIT</b></p></li>
					<li><p><b>EXIST</b></p></li>
				</ul>
				<h5 class="barlow" style="margin-top: 16px">B - Read the sentences to practice pronounciation.</h5>
				<div class="espacamento">
					<p><b>1 - </b>He Is Exempt From This Responsibility.</p>
					<p><b>2 - </b>They Are Examples Of Professionals.</p>
					<p><b>3 - </b>She Is Exactly The Person I Need.</p>
					<p><b>4 - </b>The Exit Is Over There.</p>
					<p><b>5 - </b>Ghosts Don’t Exist.</p>				                
				</div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade17/pronunciation.blade.php ENDPATH**/ ?>