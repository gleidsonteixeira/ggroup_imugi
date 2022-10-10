
<?php $__env->startSection('titulo','Unit 44 | Conversation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade44" data-etapa="conversation">
			<h3 class="barlow">UNIT 44</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="<?php echo e(asset('assets/audio/apostila2/UNIT 44/2. CONVERSATION/CONVERSATION.ogg')); ?>" type="audio/ogg">
			</audio>
			<p style="margin-top:16px"><b>Laura: </b>My character is going to be a high school student. She’s extremely shy and
				introspective. In school , her friends think she is weird. She lives with her parents. They
				are completely different of her. Her mother is talkative and loves parties and social
				events. Her father is a sales person and knows everybody in the city. Although she’s shy
				and introspective, she’s addicted to guitars. She has a guitar that she calls Four Seasons.
				Whenever she feels that something is wrong she can play different accords and she may
				change the weather just with the sound of it. When she plays, she becomes completely
				different. She becomes confident, strong, bold and is able to solve problems very easily.
				On the other hand, she becomes very impatient with dumb people.</p>
			<p><b>Gleen: </b>Oh my goodness. I loved the guitar stuff And the personality traits. Cool Laura.
				(to be continued)</p>
			<figure>
				<img src="<?php echo e(asset('assets/img/dominating/unit44/conversation.png')); ?>" alt="Garotos festejando">
			</figure>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila2/unidade44/conversation.blade.php ENDPATH**/ ?>