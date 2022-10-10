<?php $__env->startSection('titulo','Imugi Tecnologia e Educação'); ?>
<?php $__env->startSection('conteudo'); ?>
            <!-- start countdown section -->
            <section class="p-0 bg-extra-light-gray">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-6 full-screen p-0 cover-background d-none d-lg-block" style="background-image:url(<?php echo e(asset('assets/site/images/portal_imugi.jpg')); ?>);"></div>
                    <div class="store_portal">
                        Baixe nosso app <br>
                        <a href="https://play.google.com/store/apps/details?id=com.developer.guilherme&hl=pt_BR" target="_blank">
                         <img src="<?php echo e(asset('assets/site/images/play_store.png')); ?>" alt="" class="logo_store_portal">
                        </a>
                    </div>
                    <div class="col-12 col-lg-6 full-screen bg-black p-0">
                        <div class="position-relative full-screen">
                            <div class="slider-typography text-center sm-overflow-auto">
                                <div class="slider-text-middle-main">
                                    <div style="margin-top:80px;">
                                        <div class="margin-nine-bottom md-margin-50px-bottom sm-margin-15px-bottom">
                                            <img src="<?php echo e(asset('assets/site/images/logo_imugi.png')); ?>" data-rjs="<?php echo e(asset('assets/site/images/logo_imugi.png')); ?>" alt="Imugi"></div>
                                        
                                        <div  class="cadastro bg-extra-dark-gray padding-eight-all border-radius-6 width-70 lg-width-80 sm-width-100 mx-auto sm-padding-30px-all">
                                        <h6 class="text-white"> CADASTRE-SE </h6>
                                        <form method="POST" action="<?php echo e(route('register')); ?>">
                                                <?php echo csrf_field(); ?>

                                                <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <input id="matricula" type="text" class="form-control bg-transparent text-white border-color-medium-dark-gray medium-input <?php if ($errors->has('matricula')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('matricula'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="matricula" value="<?php echo e(old('matricula')); ?>" 
                                                        required autocomplete="matricula" autofocus placeholder="Matricula" maxlength="6">

                                                        <?php if ($errors->has('matricula')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('matricula'); ?>
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong><?php echo e($message); ?></strong>
                                                            </span>
                                                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <input id="name" type="text" class="form-control bg-transparent text-white border-color-medium-dark-gray medium-input <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" 
                                                        autofocus placeholder="Nome Completo">

                                                        <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?>
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong><?php echo e($message); ?></strong>
                                                            </span>
                                                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <input id="email" type="email" class="form-control bg-transparent text-white border-color-medium-dark-gray medium-input <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e(old('email')); ?>" 
                                                        required autocomplete="email" placeholder="Email">

                                                        <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong><?php echo e($message); ?></strong>
                                                            </span>
                                                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <input id="password" type="password" class="form-control bg-transparent text-white border-color-medium-dark-gray medium-input <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password" 
                                                        required autocomplete="new-password" placeholder="Senha">

                                                        <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong><?php echo e($message); ?></strong>
                                                            </span>
                                                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    
                                                    <div class="col-md-12">
                                                        <input id="password-confirm" type="password" class="form-control bg-transparent text-white border-color-medium-dark-gray medium-input" name="password_confirmation" 
                                                        required autocomplete="new-password" placeholder="Confirmar Senha">
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-0">
                                                    <div class="col-md-12">
                                                        <button type="submit" class="btn btn-success btn-rounded btn-large margin-20px-top sm-no-margin-top">
                                                            <?php echo e(__('Cadastre-se')); ?>

                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <br>
                                        <span class="mt-4 mostrar">Já possue conta? <a href="<?php echo e(url('login')); ?>" class="ocultar" style="background:none; border:none; color:#fff;">Login</a> </span>
                                        <br>
                                        <span class="mt-4 recuperar">Esqueceu a senha? <a href="<?php echo e(url('password/reset')); ?>" class="ocultar" style="background:none; border:none; color:#fff;">Recuperar</a> </span>
                                        
                                    </div>
                                </div>
                                <div class="store_portal mobile hidden">
                                    Baixe nosso app <br>
                                    <a href="https://play.google.com/store/apps/details?id=com.developer.guilherme&hl=pt_BR" target="_blank">
                                    <img src="<?php echo e(asset('assets/site/images/play_store.png')); ?>" alt="" class="logo_store_portal_mobile">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.site.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/auth/register.blade.php ENDPATH**/ ?>