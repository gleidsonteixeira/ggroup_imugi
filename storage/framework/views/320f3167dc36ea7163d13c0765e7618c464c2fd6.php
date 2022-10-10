
<?php $__env->startSection('titulo','Unit 16 | Conversation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade16" data-etapa="conversation">
			<h3 class="barlow">UNIT 16</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="<?php echo e(asset('assets/audio/apostila2/UNIT 16/2. CONVERSATION/CONVERSATION.ogg')); ?>" type="audio/ogg">
			</audio>
			<p style="margin-top:16px"><b>Gleen: </b>MY-DEAR-FRIENDS . OH-MY-GOD! I don’t know how to start this class. I’m so
				impressed by Comic con, that I’m kind of speechless. The organization was fantastic.
				The workshops? No comments about each one of them. Everything was fantastic.
				I really enjoyed every single minute I spent there. What about you guys? I Know you
				Akira and you john were there. Laura told me She didn’t go because she had some
				meeting with some clients to close another deal for producing her next job.
				Tell us guys. What did you like the most?</p>
			<p><b>Akira: </b>Guess what I liked the most guys. For sure Kris’s workshop. It was a milestone
				for me. I took notes of everything he spoke. My work is not gonna be the same after
				this Comic Con edition, specially after his workshop. I got extremely impressed with his
				knowledge, skills and story. I bought some books he recommended and signed up for
				some sites he recommended.</p>
			<p><b>Gleen: </b>And you John?</p>
			<p><b>John: </b>Well, It was my first time in an event this big. I visited many stands and got
				shocked with the amount of nice things to see. In my opinion 4 days is too few to see
				everything. The most important thing for me was the immersion in this new huge field.
				I felt the vibe and understood the needs of the market. It’s going to be great for my
				new job.</p>
			<p><b>Gleen: </b>Great guys. Thanks for sharing. We go on in the next class ok.</p>

			<figure style="margin-top:px">
				<img src="<?php echo e(asset('assets/img/dominating/unit16/conversation.png')); ?>" alt="Comic-Con">
			</figure>
		</div>

	</div>
</main>
<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila2/unidade16/conversation.blade.php ENDPATH**/ ?>