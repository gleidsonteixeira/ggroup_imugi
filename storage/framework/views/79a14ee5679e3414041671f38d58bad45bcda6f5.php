
<?php $__env->startSection('titulo','Unit 14 | Conversation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade14" data-etapa="conversation">
			<h3 class="barlow">UNIT 14</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
                <source src="<?php echo e(asset('assets/audio/apostila3/LESSON 14/02_CONVERSATION/CONVERSATION_14.mp3')); ?>" type="audio/mp3">
            </audio>
			<div class="clear"></div>
			<p style="margin-top:16px"><b>Jake : </b>Hey you guys, how’s everything?</p>
			<p><b>Students : </b>Great teacher.</p>
			<p><b>Jake : </b>Did you have time to see the videos Akira sent?</p>
			<p>
				<b>Laura : </b>I saw them teacher. It was simply eye opening. It is much more clear for me how I
				can approach my audience. I neither knew who my audience was nor what they liked. I was
				really lost with that.
			</p>
			<p>
				<b>John : </b>I watched the videos as well. Teacher, I have some doubts on what’s the best way to
				ask those questions. What tool is more efficient to reach interested people?
			</p>
			<p>
				<b>Jake : </b>Very good question John. Let me share with you guys what we used in the company.
				There are many effective ways to do that. If you already have some followers on any Social
				Media, like Facebook or Instagram, you can either ask them directly to participate of a poll
				or you can post something related to the topic and test the reaction of the audience asking
				them to comment on the post. These two strategies are useful if you have a good number
				of followers. But if you are starting from zero, a good way to start is by producingnice
				content, preferably in video, to introduce the topic and draw attention to what you want to
				communicate. Both strategies, the one for a person who has followers and the one for a
				person who doesn’t have any , are very used in the market.
			</p>
			<p><b>Students : </b>Great teacher.</p>
			<p><b>Akira : </b>Teacher, Do you suggest any tool for carrying out a poll ?</p>
			<p>
				<b>Jake : </b>Yes, for sure. You guys can either use Google forms or SurveyMonkey. Not only Google
				forms but also SurveyMonkey are extremely intuiti ve and off er many resources to make
				the carrying out of a poll a very simple task. Google forms is simpler . Surveymonkey is a
				bit more complicated , however it offers many different features to make your polls very
				professional.
			</p>
			<p><b>Students : </b>Great teacher. (to be continued)</p>
			<div style="margin-top:32px">
				<figure>
					<img src="<?php echo e(asset('assets/img/masteroflanguage/unit14/conversation.jpg')); ?>" alt="folha">
				</figure>
			</div>
		</div>
	</div>
</main>

<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila3/unidade14/conversation.blade.php ENDPATH**/ ?>