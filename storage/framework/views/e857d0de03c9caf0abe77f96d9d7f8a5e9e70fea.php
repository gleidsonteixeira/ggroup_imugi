
<?php $__env->startSection('titulo','Unit 24 | Conversation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">

		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade24" data-etapa="conversation">
			<h3 class="barlow">UNIT 24</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>

			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="<?php echo e(asset('assets/audio/apostila2/UNIT 24/2. CONVERSATION/CONVERSATION.ogg')); ?>" type="audio/ogg">
			</audio>
			<p style="margin-top:16px"><b>Gleen:</b> How’s everything guys? Is everything ok with the new special organization of the
				class? Laura, were you able to set up the computer for us to use.</p>
			<p><b>Akira:</b> Teacher, I liked the position of the table but we won’t be able to get closer to the
				white board from the right side of the table.</p>
			<p><b>John:</b> No problem with that Akira, we are able to write on the board anyways.</p>
			<p><b>Laura:</b> Teacher. I’m almost done with the computer. I was not able to finish everything
				yesterday because the Installing CD was locked in the drawer. But don’t worry, I’ll be able
				to finish everything up to the end of the class.</p>
			<p><b>Gleen:</b> Ok guys, thanks for your help</p>

			<figure>
				<img src="<?php echo e(asset('assets/img/dominating/unit24/conversation.jpg')); ?>" alt="computação">
			</figure>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila2/unidade24/conversation.blade.php ENDPATH**/ ?>