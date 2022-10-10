
<?php $__env->startSection('titulo','Unit 63 | Conversation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade63" data-etapa="conversation">
			<h3 class="barlow">UNIT 63</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="<?php echo e(asset('assets/audio/apostila2/UNIT 63/2. CONVERSATION/CONVERSATION.ogg')); ?>" type="audio/ogg">
			</audio>
			<p style="margin-top: 16px">
				<b>Gleen :</b> I’m very happy to see that you got more than just technical knowledge. To make a
				difference, you gotta be critical. You have to ask questions that were not asked yet. Every
				time you have the chance to make a difference. It all depends on how you see yourself in the
				process. If you come to the game decided to win, you’re gonna find a way to do so. Be bold,
				be creative, be hungry to think out of the box. Don’t see things from a trivial point of view.
				Go beyond, walk the extra mile. There is less people in the extra mile and it’s there that the winners like to be.
			</p>
			<p>
				<b>Students :</b> Wow teacher, thanks for all these advices. We’ll take them with us in our journey.
			</p>
			<p>
				<b>Gleen :</b> Awesome guys. Ok, its time to present your video. Lets’ see it?
				Students: Ok. Let’s see it. Fasten your seat belts. (to be continued)
			</p>
			<div style="margin-top: 36px">
				<figure>
					<img src="<?php echo e(asset('assets/img/dominating/unit63/conversation.png')); ?>" alt="amigos">
				</figure>
			</div>
		</div>
	</div>
</main>

<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila2/unidade63/conversation.blade.php ENDPATH**/ ?>