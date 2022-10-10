<?php $__env->startSection('titulo','Portal do Aluno | Contato'); ?>
<?php $__env->startSection('conteudo'); ?>
<?php echo $__env->make('layouts.portal.menus.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div id="main-wrapper">
	<div id="main" class="ajaxable layout-wide">
        <?php echo $__env->make('layouts.portal.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php if($aluno->turma == ""): ?>
		<div class="alert alert-warning" style="margin:0!important;">
            <strong>Atenção!</strong> Para acesso completo ao portal aguarde o prazo de até 48h.
        </div>
        <?php endif; ?>
		<div class="carousel slide">
					  <div class="carousel-inner">
					    <div class="item active">
						<form method="GET" action="http://fpeduc.com/aluno-portal/<?php echo e(Auth::user()->name); ?>/<?php echo e(Auth::user()->email); ?>/<?php echo e(Auth::user()->matricula); ?>/<?php if($aluno->turma): ?><?php echo e($aluno->turma->cod_unidade); ?><?php else: ?> 0 <?php endif; ?>" target="_blank" style="background-color:#fff; margin-top:-20px;">
						<input type="image" src="<?php echo e(asset('assets/portal/images/aovivo/aovivo.jpg')); ?>" alt="Submit" style="width:100%;">
					</form>
					    </div>
					  </div>

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
			      <img src="<?php echo e(asset('assets/portal/images/fale-conosco.jpg')); ?>" alt="Fale Conosco">
			    </div>
			  </div>
		</div>
	</section>
</div>
		 <div class="be-section  clearfix" data-headerscheme="background--dark">
			                    <div class="clearfix padding-100">
			                        <div class="col-md-2"></div>
			                            <div class="col-md-6 column-block" style="">
			                                <h3>Fale Conosco</h3>
			                                <p>Preencha o formulário abaixo que entraremos em contato com você o mais rápido possível.</p>
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
												<form method="post" action="<?php echo e(url('/enviar-email')); ?>">
													<?php echo e(csrf_field()); ?>

													
													<label>Nome (*)</label>
													<input type="text" name="nome" class="span3" value="" />
													
													<label>Telefone (*) </label>
													<input type="text" name="telefone" class="span3" value="" />

													<label>Estado (*) </label>
													<input type="text" name="estado" class="span3" value="" />

													<label>Cidade (*) </label>
													<input type="text" name="cidade" class="span3" value="" />
													
													<label>Sua Mensagem :)</label>
													<textarea type="text" name="mensagem" class="span3" required="">
													</textarea>
													<input type="submit" name="send" style="margin: 20px auto; display: block;">
													
												</form>
												</div>
			                                </div>
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
<?php echo $__env->make('layouts.portal.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/portal/contato/index.blade.php ENDPATH**/ ?>