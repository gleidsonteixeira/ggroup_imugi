<?php $__env->startSection('titulo','Portal do Aluno | Frequencia / Reposição'); ?>
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
			<div class="header-hero-section"></div>
		<section id="content" class="no-sidebar-page">
		<div id="content-wrap" class="page-builder">
			<section id="page-content">
			<div class="clearfix">
				<div class="carousel slide">
					<div class="carousel-inner">
						<div class="item active">
							<img src="<?php echo e(asset('assets/portal/images/alunos.jpg')); ?>" alt="Notas">
						</div>
					</div>
				</div>
			</div>	
				<div class="be-section-pad clearfix area-frequencia">
					<div class="be-row be-wrap clear">
						<div class="col-lg-6 espacamento-frequencia">
							<h1 class="font-34"><strong>Frequência</strong></h1>
							<span class="font-16">
									<?php $__currentLoopData = $alunos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aluno): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<strong> Aluno (a): <?php echo e($aluno->nome); ?>  <br>
											Turma: <?php echo e($aluno->turma); ?> <br>
											Unidade: <?php echo e($aluno->unidade); ?>

									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</span>
						</div>
						<div class="col-lg-6 mt-50">
							<?php $__currentLoopData = $frequencia; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $freq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<p class="circle porcentagem-frequencia"><strong> <?php echo e($freq->per_presenca); ?>%</strong></p>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
					</div>
				</div>
			</section>
		</div>
		 <div class="be-section  clearfix" data-headerscheme="background--dark">
			                    <div class="clearfix padding-100">
			                        <div class="col-md-2"></div>
			                            <div class="col-md-6 column-block" style="">
			                                <h3>Solicite sua <br>
						Reposição de Aula.</h3>
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

												    <form method="post" action="<?php echo e(url('enviar-frequencia')); ?>">
													<?php echo e(csrf_field()); ?>

												    
													<label>Nome (*) </label>
												    <input type="text" name="nome" class="<?php if ($errors->has('nome')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nome'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" value="<?php echo e(old('nome')); ?>"  autofocus>
												    
													<label>Telefone (*)</label>
												    <input type="text" name="telefone" class="<?php if ($errors->has('telefone')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('telefone'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" value="<?php echo e(old('telefone')); ?>" autofocus>
							
												   	<label style="margin-top: 20px;">Email(*)</label>
												    <input type="email" name="email" class="<?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" value="<?php echo e(old('email')); ?>" autofocus>
												    
													<label style="margin-top: 20px;">Nº de Aulas Perdidas(*)</label>
													<input type="text" name="aula_perdida" class="<?php if ($errors->has('aula_perdida')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('aula_perdida'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" value="<?php echo e(old('aula_perdida')); ?>"  autocomplete="aula_perdida" autofocus  maxlength="3">

													<label class="mt-20">Obs.:</label>
												   	<textarea name="mensagem" class="<?php if ($errors->has('mensagem')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('mensagem'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" value="<?php echo e(old('mensagem')); ?>"  autocomplete="mensagem" autofocus>
												   		
												   	</textarea>
												    <input type="submit" value="Enviar"  class="btn_salvar">
												    </form>
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
	<a href="" id="back-to-top"><i class="font-icon icon-up-open-big"></i></a>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.portal.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/portal/frequencia/index.blade.php ENDPATH**/ ?>