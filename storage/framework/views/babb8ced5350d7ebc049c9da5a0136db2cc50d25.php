
<?php $__env->startSection('titulo','Unit 12 | Conversation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade12" data-etapa="conversation">
			<h3 class="barlow">UNIT 12</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
                <source src="<?php echo e(asset('assets/audio/apostila3/LESSON 12/02_CONVERSATION/CONVERSATION_12.mp3')); ?>" type="audio/mp3">
            </audio>
			<div class="clear"></div>
			<p style="margin-top :16px"><b>Jake : </b>Hey, What’s up fellas? Welcome back to the class. Let’s start?</p>
			<p><b>Students : </b>For sure teacher.</p>
			<p><b>Jake : </b>Did you think of strategies to decide who your audience is or is gonna be?</p>
			<p>
				<b>Akira : </b>Yes teacher. I researched some tools on the net and many Digital Marketing
				Specialists use one tool called Empathy Map. It’s a very nice technique. There are
				many videos on Youtube explaining how to use it but basically, If you ask appropriate
				questions about your audience, you’ll get some insights about who this audience is
				likely to be.
			</p>
			<p><b>Laura : </b>Cool. What kind of questions Akira? Could you give us some examples?</p>
			<p>
				<b>Akira : </b>For sure. For example: How do my audience think and feel? What do they hear
				? What do they see? What do they say? What do they do and what do they need or
				want to do? If you spend enough time answering these questions you can understand
				better who your audience is.
			</p>
			<p>
				<b>John : </b>Wow. If I had used this Map when I started my first Youtube channel, I would
				have reached much more people.
			</p>
			<p>
				<b>Akira : </b>Yeah John. I thought the same. Cause I just started shooting some videos and
				uploading them. The result was good but it could be better.
			</p>
			<p>
				<b>Jake : </b>Well. It’s not too late for doing that guys. I would invest some time thinking
				about these questions If I had a channel as you guys have.
			</p>
			<p><b>Laura : </b>Me too. Since I have no channel, I can start from zero.</p>
			<p><b>John & Akira : </b>Great idea. So, let’s start thinking about the questions.</p>
			<p><b>Jake : </b>Great guys. (to be continued)</p>
			<div style="margin-top:36px">
				<figure>
					<img src="<?php echo e(asset('assets/img/masteroflanguage/unit12/conversation.jpg')); ?>" alt="entrevista vetor">
				</figure>
			</div>
		</div>
	</div>
</main>

<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila3/unidade12/conversation.blade.php ENDPATH**/ ?>