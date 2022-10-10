<?php $__env->startSection('titulo','Unit 28 | Conversation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade28" data-etapa="conversation">
				<h3 class="barlow">UNIT 28 - VICTOR’S STUDENTS</h3>
				<h5 class="barlow">2 - CONVERSATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/unit28/conversation/completo.ogg')); ?>" type="audio/ogg">
				</audio>
				<div class="clear"></div>
				<div class="espacamento">
					<p><b>Stefany :</b> Hey everyone! I’m stefany lima. I’m from Brazil and i’m a make up tutorial youtuber. I’m 16 years old and i’m a student. And this is my sister laura fortlage. She edits my videos for me. I love her!</p>
					<p><b>Laura :</b> Hey, what’s up! As stefany already said, i’m laura and I edit videos. That’s my job. I help her edit them because she’s my sister. I’m actually a journalistic video editor. It’s nice to meet you all.</p>
					<p><b>Leon :</b> Morning there! My name is Leon fortlage. I was born in italy but i’ve lived here for the past 10 years. I’m 25. I’m a student at the university. I study marketing</p>
					<p><b>Marcelo :</b> Yo! I’m Marcelo, but you guys can call me celo. I’m 24 and I make youtube videos. They’re very funny. You all should watch them.</p>
				</div>
				<figure>
					<img src="<?php echo e(asset('assets/img/playgo/unit28/ilust_28.jpg')); ?>" alt="Stefany, Leon and Laura" class="img-e">
				</figure>
				<div class="video-pratica">
					<video poster="<?php echo e(asset('assets/portal/images/play-video.jpg')); ?>" controls="" controlslist="nodownload" disablepictureinpicture="" src="https://fpeduc.com/assets/videos/playgo28.mp4"></video>
				</div>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade28/conversation.blade.php ENDPATH**/ ?>