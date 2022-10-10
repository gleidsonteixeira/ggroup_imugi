
<?php $__env->startSection('titulo','Unit 09 | Conversation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade9" data-etapa="conversation">
			<h3 class="barlow">UNIT 9</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
                <source src="<?php echo e(asset('assets/audio/apostila3/LESSON 09/02_CONVERSATION/CONVERSATION_09.mp3')); ?>" type="audio/mp3">
            </audio>
			<div class="clear"></div>
			<p style="margin-top:16px"><b>Jake : </b>Welcome back my dear potential youtubers. How are you guys?</p>
			<p><b>Students : </b>Great teacher. Everything is ok.</p>
			<p><b>Akira : </b>Thoughtful about the power my voice can have teacher. I’m really concerned with that.</p>
			<p>
				<b>Laura : </b>Me too . You know what? It’s the first time I think I have the power to change
				something. That’s a great feeling.
			</p>
			<p>
				<b>John : </b>I have to confess that it frightens me a little. But I could come up with an idea
				that resonates with me. In the next month I want to start a channel to show info on
				how to treat images with free software. The idea is to show interested people how
				they can start designing without spending too much money.
			</p>
			<p>
				<b>Akira : </b>I’m gonna start a channel about FPS game leadership. I want to show how the
				military techniques can be used in the games and how people can develop leadership skills playing games.
			</p>
			<p><b>Jake : </b>And What about you Laura?</p>
			<p>
				<b>Laura :</b> Well, I want to teach people techniques to make videos with simple cell
				phones and as John said, how to edit them using free software.
			</p>
			<p>
				<b>Jake : </b>Wow. Great ideas. Well, based on that I just had an idea. In the next class I’ll
				bring some ideas on how to plan the beginning of your channel ok. What do you think about it?
			</p>
			<p>
				<b>Students : </b>Fantastic. If we dedicate ourselves, by the end of the course we will have
				uploaded our first video. That’s great.
			</p>
			<p>
				<b>Jake : </b>Great guys. I’ll be working on that during this weekend and we talk in the next
				class ok. That’s it for today. I see you in the next class.
			</p>
			<p><b>Students : </b>Thank you teacher. See you in the next class.</p>
			<div style="margin-top : 36px">
				<figure>
					<img src="<?php echo e(asset('assets/img/masteroflanguage/unit9/conversation.jpg')); ?>" alt="fantasia">
				</figure>
			</div>
		</div>
	</div>
</main>

<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila3/unidade9/conversation.blade.php ENDPATH**/ ?>