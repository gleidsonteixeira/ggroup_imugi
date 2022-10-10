
<?php $__env->startSection('titulo','Unit 42 | Conversation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade42" data-etapa="conversation">
			<h3 class="barlow">UNIT 42</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="<?php echo e(asset('assets/audio/apostila2/UNIT 42/2. CONVERSATION/CONVERSATION.ogg')); ?>" type="audio/ogg">
			</audio>
			<p style="margin-top:16px"><b>Gleen: </b>Guys, we have to start talking about the project ok. What can you tell us about it?</p>
			<p><b>Laura: </b>Well teacher, after watching the animations we came up with a lot of crazy ideas.
				Then, we decided to filter all of them according to the hints you gave us on the skills we
				have and the tools we master.</p>
			<p><b>John: </b>Yes teacher. Your advice was extremely important to help us organize our ideas.
				In the beginning, we thought about creating something medieval but after debating a
				lot we made up our minds.</p>
			<p><b>Akira: </b>Yeah teacher. The story is going to happen in a countryside city where some
				people have strange powers. They don’t know each other but they are kind of connected by their minds. They can feel each other. The story happened in a time when people
				were very conservative and intolerant with different people. That’s why they try to hide
				themselves.</p>
			<p><b>Gleen: </b>Wow. I’m curious to know more about the story. Ok guys, next class I’d like to
				have more details about the story ok. See you in the next class.</p>
			<figure class="manipulaimagem">
				<img src="<?php echo e(asset('assets/img/dominating/unit42/conversation.PNG')); ?>" alt="Garotos festejando">
			</figure>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila2/unidade42/conversation.blade.php ENDPATH**/ ?>