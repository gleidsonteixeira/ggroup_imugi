
<?php $__env->startSection('titulo','Unit 21 | Conversation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade21" data-etapa="conversation">
			<h3 class="barlow">UNIT 21</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
                <source src="<?php echo e(asset('assets/audio/apostila3/LESSON 21/02_CONVERSATION/CONVERSATION_04.mp3')); ?>" type="audio/mp3">
            </audio>
            <div class="clear"></div>
            <p style="margin-top: 16px">
                <p>
                    <b>Jake :</b> Hello my dear friends. How’s it going? Lets’ start the class?
                    </p>
                <p>
                    <b>John :</b> Yes teacher. What are we going to study today? The last class was very nice.
                    When I arrived home, I checked all the sites we talked about.
                </p>
                <p>
                    <b>Jake :</b> Did you like them John?
                    </p>
                <p>
                    <b>John :</b> I loved them! Now, the problem is to decide what course to take first. I was
                    talking to my brother about the platforms and he said that a colleague of his office
                    had already taken courses on Coursera and on Udemy.
                </p>
                <p><b>Akira :</b> Very nice. What else did he say?</p>
                <p>
                    <b>John :</b> He told me that his friend works as a computer programmer and that he
                    needed to learn how to code with Python, a different coding language, and that the
                    regular course was extremely expensive. He said that when his friend was searching
                    for places to take a programming course, he came across an ad on the net and
                    decided to take the online course first. The investment was not very high, so he bet on taking it.
                </p>
                <p><b>Laura :</b> And did he like?</p>
                <p>
                    <b>John :</b> Yes, and he reported that the quality of the course was awesome. After this
                    online course, he didn’t have to take another one.
                </p>
                <p><b>Students :</b> Wow. Great.</p>
                <p>
                    <b>Jake :</b> Sometimes, we got surprised with the quality of some products. That’s the power of the web.
                    Freedom to choose what’s the best for you. (To be continued)
                </p>
            </p>
			<div style="margin-top: 36px">
				<figure>
					<img src="<?php echo e(asset('assets/img/masteroflanguage/unit21/conversation.jpg')); ?>" alt="aula">
				</figure>
			</div>
		</div>
	</div>
</main>

<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila3/unidade21/conversation.blade.php ENDPATH**/ ?>