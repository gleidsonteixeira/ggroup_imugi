
<?php $__env->startSection('titulo','Unit 31 | Conversation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">

		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade31" data-etapa="conversation">
			<h3 class="barlow">UNIT 31</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>

			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="<?php echo e(asset('assets/audio/apostila2/UNIT 31/2. CONVERSATION/CONVERSATION.ogg')); ?>" type="audio/ogg">
			</audio>
			<p style="margin-top:16px"><b>Gleen:</b> And what about you Akira? What are you into, these days?</p>
			<p><b>Akira:</b> This week we are having a lot of meetings to define some final details for the game we are developing.
				Meetings are really necessary but I would rather be programming or brainstorming with my friends than spending my time in endless
				meetings. Meetings for me are a pain in the neck but that’s ok. It’s part of the job.</p>
			<p><b>Gleen:</b> Akira, tell us. Do you have any preference regarding cities to work or live?</p>
			<p><b>Akira:</b> Teacher, I love New York, because of the city vibe. San Francisco is awesome as
				well but I prefer to live in Japan or Singapore. Japan is a dream for any gamer and I believe I would learn a lot of nice tricks there.
				Besides that, it would be great to be in the anime paradise.</p>
			<p><b>Gleen:</b> Great guys. In the next two classes we are gonna have a nice review of everything we saw so far ok. See you guys.</p>

			<figure class="metade esquerda">
				<img src="<?php echo e(asset('assets/img/dominating/unit31/conversation1.jpg')); ?>" alt="new york">
			</figure>
			<figure class="metade direita">
				<img src="<?php echo e(asset('assets/img/dominating/unit31/conversation2.jpg')); ?>" alt="ponte USA">
			</figure>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila2/unidade31/conversation.blade.php ENDPATH**/ ?>