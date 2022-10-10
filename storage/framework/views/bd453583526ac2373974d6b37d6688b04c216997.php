
<?php $__env->startSection('titulo','Unit 13 | Pronunciation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade13" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 13 - LAYER STYLE</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/unit13/pronunciation/pronunciation.ogg')); ?>" type="audio/ogg">
                </audio>
				<div class="clear"></div>
				<div class="espacamento">
					<p>
						Teacher’s note: Explain to students the difficulty of the particular pronunciation matter. Call out on a few students to check their previous knowledge of pronunciation (do
						not correct them). After that, read all of the words and have them repeat the words
						until the group comes close to perfection. Go over the meanings as well (don’t spend
						much time on it).
					</p>
				</div>
                <h5 class="barlow" style="margin-top: 16px">A. Observe That “Ed” Someti mes Sounds Like A “T”, “D”, Or Just “Ed”. It Depends On The Use Of Your Voice At The End Of The Verb.</h5>
				<div class="metade espacamento">
					<div class="umterco">
						<p><b>/T/</b></p>
						<p>WORKED</p>
						<p>LIKED</p>
						<p>HELPED</p>
					</div>
					<div class="umterco">
						<p><b>/D/</b></p>
						<p>SHOWED</p>
						<p>LEARNED</p>
						<p>PLAYED</p>
					</div>
					<div class="umterco">
						<p><b>/ED/</b></p>
						<p>WAITED</p>
						<p>DECIDED</p>
						<p>WANTED</p>
					</div>
				</div>
				<div class="clear"></div>
				<h5 class="barlow" style="margin-top: 16px">B. Practice By Reading The Following Sentences.</h5>
				<div class="espacamento">
					<p class="lower">1 - MY TEACHER SHOWED US HOW TO USE LAYER STYLE.</p>
					<p class="lower">2 - I DECIDED TO CREATE A COSTUMIZED TEXT.</p>
					<p class="lower">3 - HE WANTED TO USE PHOTOSHOP TO DEVELOP THE FLYER.</p>
					<p class="lower">4 - THEY LIKED THE PROJECT.</p>
					<p class="lower">5 - I HELPED HER WITH THE EXERCISE.</p>
				</div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade13/pronunciation.blade.php ENDPATH**/ ?>