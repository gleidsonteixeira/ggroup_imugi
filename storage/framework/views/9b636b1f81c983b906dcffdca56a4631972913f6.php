
<?php $__env->startSection('titulo','Unit 43 | Conversation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade43" data-etapa="conversation">
			<h3 class="barlow">UNIT 43</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="<?php echo e(asset('assets/audio/apostila2/UNIT 43/2. CONVERSATION/CONVERSATION.ogg')); ?>" type="audio/ogg">
			</audio>
			<p style="margin-top:16px"><b>Gleen: </b>Hey you guys, what’s up? Can I tell you something?</p>
			<p><b>Students: </b>Yes teacher. What’s going on?</p>
			<p><b>Gleen: </b>Guys, I’m extremely curious to know more about the story. I got really excited
				with the ideas. Besides that, I believe that if you work hard on the creation of the
				characters’ personality, on the scenarios and on the connection of ideas, It’s gonna be
				simply fantastic.</p>
			<p><b>Akira: </b>Teacher, we started drawing the characters and also writing about them . There
				are three in the story. Each one represents one of us. One for me , one for Laura and one
				for John. We are following some RPG ideas to create them and give them some super
				powers.</p>
			<p><b>John: </b>it’s gonna be fun teacher. Wait and see.
				(to be continued)</p>
			<figure>
				<img src="<?php echo e(asset('assets/img/dominating/unit43/conversation.png')); ?>" alt="Garotos festejando">
			</figure>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila2/unidade43/conversation.blade.php ENDPATH**/ ?>