
<?php $__env->startSection('titulo','Unit 11 | Conversation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade11" data-etapa="conversation">
			<h3 class="barlow">UNIT 11</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
                <source src="<?php echo e(asset('assets/audio/apostila3/LESSON 11/02_CONVERSATION/CONVERSATION_11.mp3')); ?>" type="audio/mp3">
            </audio>
			<div class="clear"></div>
			<p style="margin-top :16px">
				<b>Jake : </b>So guys, let’s start talking about how to build a nice audience on the web. We
				have brainstormed some ideas so far and now it’s time to dive deep into these ideas.
				Besides that, it’s time to have a more pragmatic behavior regarding this universe. If
				you really want to learn, it’s time to start working hard.
			</p>
			<p><b>Students : </b>What is it to be “pragmatic” Teacher?</p>
			<p>
				<b>Jake : </b>It is to be very practical and use everything we are gonna talk about . It’s to
				learn the theory and use it to build something really meaningful.
			</p>
			<p>
				<b>Students : </b>Oh Great. Studying the theory is great, however , if we don’t try to use all
				the concepts we are gonna learn, we’ll forget them.
			</p>
			<p>
				<b>Akira : </b>Yeah. For instance, we experienced a nice learning process in the last project
				because of this hands on behavior.
			</p>
			<p>
				<b>Laura : </b>It was fantastic. We could really learn things such as editing or adding a nice
				soundtrack to a video by doing it.
			</p>
			<p><b>John : </b>Yeah. We made a lot of mistakes but we learned a lot from them.</p>
			<p>
				<b>Jake : </b>That’s it guys. So, for the next class I’d like to have some ideas on how to identify
				your target audience ok. You guys have to think of strategies to do that and bring
				these ideas to the class.
			</p>
			<p><b>Students : </b>Ok teacher.</p>
			<p><b>Jake : </b>That’s it for today. I see you in the next class.</p>

			<div style="margin-top :36px">
				<figure>
					<img src="<?php echo e(asset('assets/img/masteroflanguage/unit11/conversation.jpg')); ?>" alt="arco e flecha">
				</figure>
			</div>
		</div>
	</div>
</main>

<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila3/unidade11/conversation.blade.php ENDPATH**/ ?>