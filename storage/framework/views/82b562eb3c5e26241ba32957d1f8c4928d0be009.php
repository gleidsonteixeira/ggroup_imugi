<?php $__env->startSection('titulo','Unit 5 | Conversation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade5" data-etapa="conversation">
				<h3 class="barlow">UNIT 05 - BURN TOOL</h3>
				<h5 class="barlow">2 - CONVERSATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/unit5/conversation/conversation.ogg')); ?>" type="audio/ogg">
				</audio>
				<div class="clear"></div>
				<div class="espacamento">
					<p><b>Sophia :</b> What’s up everyone? I have an interesting tool to teach you today. It is called Burn Tool.</p>
					<p><b>Sophia :</b> Do any of you know what it is used for?</p>
					<p><b>Lee Steve :</b> Professor, I think I know. Is it used to make a picture brighter?</p>
					<p><b>Beatriz Lima :</b> I think it’s to make a picture darker.</p>
					<p><b>Sophia : </b>  I’m sorry Lee, but Beatriz is right. Burn tool is used when an area in your picture is bright and you want to make it darker.</p>
				</div>
				<figure>
					<img src="<?php echo e(asset('assets/img/playgo/unit5/ilust_05.jpg')); ?>" alt="Garotos festejando" class="img-e">
				</figure>
				<div class="video-pratica">
					<video controls="" poster="<?php echo e(asset('assets/portal/images/play-video.jpg')); ?>" controlslist="nodownload" disablepictureinpicture="" src="https://fpeduc.com/assets/videos/playgo5.mp4"></video>
				</div>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade5/conversation.blade.php ENDPATH**/ ?>