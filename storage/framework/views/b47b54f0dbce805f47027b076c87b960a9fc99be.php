
<?php $__env->startSection('titulo','Unit 3 | Conversation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">

		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade3" data-etapa="conversation">
			<h3 class="barlow">UNIT 03</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>

			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="<?php echo e(asset('assets/audio/apostila2/UNIT 3/2. CONVERSATION/CONVERSATION.ogg')); ?>" type="audio/ogg">
			</audio>
			<p style="margin-top:16px"><b>Gleen:</b> Hello guys. How’s everything today? Well I want to start this class talking a little bit about the market and its challenges. Please, I need your help. Tell us about your job,
				what you like about it and what your main challenge is.</p>
			<p><b>Gleen:</b> You Laura; Do you want to start?</p>
			<p><b>Laura:</b> Yes, that’s ok for me. Well, I’m a freelancer video maker. I produce videos for many different things. Marketing campaigns, Youtubers, sites, musicians and many other
				things. I love what I do. Every day is a different day. I’m never bored. My challenge is to learn all the new tools to make my work better. But I like to study and take courses.
				I always meet new friends in my courses around the World.</p>
			<p><b>Gleen:</b> You John, tell us about yourself.</p>
			<p><b>John:</b> I’m a graphic designer teacher. I work for a magazine. I like to use different softwares to produce nice photos for the magazine articles. One thing that is difficult for
				me is to participate of the meetings with the editor. Many times he asks me to change details and this annoys me a little bit. But in the end the result is always very good.</p>
			<p><b>Gleen:</b> And you Akira, it’s your turn now.</p>
			<p><b>Akira:</b> Hi guys, I’m Akira and I work as a game developer. I don’t work by myself. I work with an incredible team of game developers. The best part is that we have a lot of fun and
				we are very creative together. My biggest challenge is to finish my work on time. It’s very important because other people depend on my work to continue producing the game.</p>
			<figure class="metade esquerda">
				<img src="<?php echo e(asset('assets/img/dominating/unit3/conversation1.jpg')); ?>" alt="amigos">
			</figure>
			<figure class="metade direita">
				<img src="<?php echo e(asset('assets/img/dominating/unit3/conversation2.jpg')); ?>" alt="amigos">
			</figure>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila2/unidade3/conversation.blade.php ENDPATH**/ ?>