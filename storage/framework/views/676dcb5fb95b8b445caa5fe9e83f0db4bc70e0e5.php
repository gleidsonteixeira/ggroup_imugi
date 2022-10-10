<?php $__env->startComponent('mail::layout'); ?>
    
    <?php $__env->slot('header'); ?>
        <?php $__env->startComponent('mail::header', ['url' => config('app.url')]); ?>
                <?php echo e(__('Recuperação de Senha Imugi Tecnologia e Educação'  )); ?>

        <?php echo $__env->renderComponent(); ?>
    <?php $__env->endSlot(); ?>

    
    <?php echo e($slot); ?>


    
    <?php if(isset($subcopy)): ?>
        <?php $__env->slot('subcopy'); ?>
            <?php $__env->startComponent('mail::subcopy'); ?>
                <?php echo e($subcopy); ?>

            <?php echo $__env->renderComponent(); ?>
        <?php $__env->endSlot(); ?>
    <?php endif; ?>

    
    <?php $__env->slot('footer'); ?>
        <?php $__env->startComponent('mail::footer'); ?>
            © <?php echo e(date('Y')); ?> <?php echo e(__('Imugi Tecnologia e Educação'  )); ?>. <?php echo app('translator')->getFromJson('Todos os direitos reservados.'); ?>
        <?php echo $__env->renderComponent(); ?>
    <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/vendor/mail/html/message.blade.php ENDPATH**/ ?>