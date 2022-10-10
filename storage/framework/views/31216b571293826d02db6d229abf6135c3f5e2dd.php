<?php $__env->startSection('titulo','Portal do Aluno | Editar Perfil'); ?>

<?php $__env->startSection('conteudo'); ?>

<?php echo $__env->make('layouts.portal.menus.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div id="main-wrapper">

	<div id="main" class="ajaxable layout-wide">

    <?php echo $__env->make('layouts.portal.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		<!-- END HEADER -->



<div class="header-hero-section">

</div>

<div id="content" class="no-sidebar-page">

<div id="content-wrap" class="page-builder">

	<section id="page-content">

	<div class="clearfix">

		<div class="carousel slide">

					  <div class="carousel-inner">

					    <div class="item active">

						<form method="GET" action="http://fpeduc.com/aluno-portal/<?php echo e(Auth::user()->name); ?>/<?php echo e(Auth::user()->email); ?>/<?php echo e(Auth::user()->matricula); ?>/<?php if($aluno->turma): ?><?php echo e($aluno->turma->cod_unidade); ?><?php else: ?> 0 <?php endif; ?>" target="_blank" style="background-color:#fff; margin-top:-20px;">

						<input type="image" src="<?php echo e(asset('assets/portal/images/aovivo/aovivo.jpg')); ?>" alt="Submit" style="width:100%;">

					</form>

					    </div>

					  </div>

			</div>

		<div class="be-section clearfix" data-headerscheme="background--light" style="background-image: url(<?php echo e(asset('assets/portal/images/bg.gif')); ?>);">

			<div class="be-section-pad clearfix pading-bt-100">

				<div class="be-row be-wrap clearfix">

					<div class="one-col column-block clearfix">

						<h2 class="text-center"><strong><span class="color-white">INFORMAÇÕES PESSOAIS</span></strong></h2>

						<p class="text-center">

							<span class="dados_pessoais">edite seus dados pessoais.</span>

						</p>

						<p class="text-center">

							<a href="https://www.facebook.com/imugieducacao/" target="_blank" class="icon-shortcode " data-animation="fadeIn"><i class="font-icon icon-facebook" style="background-color: inherit; color: #fff; font-size: 26px;" data-animation="fadeIn" data-bg-color="inherit" data-color="fff" data-hover-color="#fff" data-border-color="#fff" data-hover-border-color="#000"></i></a>



							<a href="https://www.instagram.com/imugieducacao/" target="_blank" class="icon-shortcode " data-animation="fadeIn"><i class="font-icon icon-instagram" style="background-color: inherit; color: #fff; font-size: 28px;" data-animation="fadeIn" data-bg-color="inherit" data-color="#fff" data-hover-color="#fff" data-border-color="#fff" data-hover-border-color="#000"></i></a>



							<a href="https://www.youtube.com/channel/UC93pN5GQ5bswL8cyMHMNb0g" target="_blank" class="icon-shortcode" data-animation="fadeIn"><i class="font-icon icon-youtube" style="background-color: inherit; color: #fff; font-size: 28px;" data-animation="fadeIn" data-bg-color="inherit"  data-color="#fff" data-hover-color="#fff" data-border-color="#fff" data-hover-border-color="#000"></i></a>

						</p>

					</div>

				</div>

			</div>

		</div>

	</section>

</div>



		 <div class="be-section  clearfix" data-headerscheme="background--dark">

			                    <div class="clearfix padding-100">

			                        <div class="col-md-2"></div>

			                            <div class="col-md-6 column-block" style="">



			                                <h3><i class="fa fa-user"></i> Meu Perfil</h3>

			                                <p>informações pessoais .</p>

			                                <div class="wpcf7">

			                                   <div class="span3">

											   <?php if(count($errors) > 0): ?>

													<div class="alert alert-danger">

													<button type="button" class="close" data-dismiss="alert">×</button>

													<ul>

													<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

													<li><?php echo e($error); ?></li>

													<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

													</ul>

													</div>

												<?php endif; ?>

												<?php if($message = Session::get('success')): ?>

												<div class="alert alert-success alert-block">

													<button type="button" class="close" data-dismiss="alert">×</button>

														<strong><?php echo e($message); ?></strong>

												</div>

												<?php endif; ?>

											

												    <form method="post" action="<?php echo e(url('/atualizar-perfil', $aluno->id)); ?>">

														<?php echo e(csrf_field()); ?>


													

												    <label>Nome (*) </label>

												    <input type="text" name="nome" class="span3"   value="<?php echo e($aluno->name); ?>">

												    <label>Matricula(*) </label>

												    <input type="text" name="matricula" class="span3" readonly required value="<?php echo e($aluno->matricula); ?>">

												    <label>Email (*)</label>

												    <input type="text" name="email" class="span3" required value="<?php echo e($aluno->email); ?>">
													<?php if($aluno->matricula != 123456): ?>
												    <label>Senha(*)</label>

												    <input type="password" name="nova_senha" class="span3" value="<?php echo e($aluno->password); ?>">
													<?php endif; ?>
												    <input type="submit" value="Editar Informações" class="btn_salvar">

												    <div class="clearfix"></div>

												    </form>

													

												</div>

			                                </div>

			                            </div>

			                    </div>

			                </div>

			            </div>

                        <?php echo $__env->make('layouts.portal.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

			         </div>

	</div>

</div>

<a href="#" id="back-to-top"><i class="font-icon icon-up-open-big"></i></a>

</div>

 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.portal.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/portal/editarAluno/index.blade.php ENDPATH**/ ?>