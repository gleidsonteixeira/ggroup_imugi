
<?php $__env->startSection('titulo','Unit 6 | Conversation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade6" data-etapa="conversation">
			<h3 class="barlow">UNIT 6</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="<?php echo e(asset('assets/audio/apostila2/UNIT 6/2. CONVERSATION/CONVERSATION.ogg')); ?>" type="audio/ogg">
			</audio>
			<p style="margin-top: 16px">
				<b>Gleen :</b> My dear students. How are you guys? I hope everything is ok. Let’s start the class? Today Akira and Laura have something to share with us. Do you guys have your
				notes? John is all set for today.
			</p>
			<p><b>Akira and Laura :</b> Yes teacher we are ready.</p>
			<p><b>Akira :</b> Ladies first. (LOL)</p>
			<p><b>Laura :</b> Thank you Akira. You are very smart but no problem teacher, I’m ready.</p>
			<p><b>Gleen :</b> Great Laura. Go ahead.</p>
			<p>
				<b>Laura :</b> Guys, the first thing I do is to decide with my client what type of video he needs. Second,
				I prepare a story board and discuss the details with the client. Then we list everything
				we need. The takes, the scenarios, the people involved, material, scripts and etc. When
				the material is ready, it’s time to plan how we are going to work on the video. I decide what
				softwares and effects I want to use. Zooming, Fading, Rotating, special effects like shades,
				different colors, backgrounds and etc. I apply all these tools and effects and finish the video.
				Finally, I arrange a meeting with my client and show him the final result. That’s it.
			</p>
			<p><b>Gleen :</b> Awesome Laura. A lot of steps. And you Akira.</p>
			<p>
				<b>Akira :</b> Well guys, we almost always start with a brainstorm. We have an idea about one
				game or one phase of the game and we brainstorm how we want to create it. After that,
				it’s time for the story-telling technique. A good game has a good story behind it. So, we
				write the story. When all these elements are ok, it’s time to sit and start programming.
				We also decide what software to use, what tools and etc. An FPS game for example we
				need to plan things like Navigation and orientation inside the game. Well, basically this
				is the way we develop the games.
			</p>
			<p>
				<b>Gleen :</b> Guys, you rock. That’s is for today. Next class we’re going to talk about your
				current jobs. Things that you are producing, creating or developing ok. See you
				tomorrow folks.
			</p>
			<div style="margin-top: 36px">
				<figure>
					<img src="<?php echo e(asset('assets/img/dominating/unit6/conversation.jpg')); ?>" alt="ToyStory">
				</figure>
			</div>
		</div>
	</div>
</main>

<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila2/unidade6/conversation.blade.php ENDPATH**/ ?>