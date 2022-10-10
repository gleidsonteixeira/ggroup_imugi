<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- title -->
    <title></title>
    <!-- metas -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="theme-color" content="#0C0F08">
    <meta name="msapplication-navbutton-color" content="#0C0F08">
    <meta name="apple-mobile-web-app-status-bar-style" content="#0C0F08">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="shortcut icon" href="<?php echo e(asset('assets/portal/images/icon/logo-imugi.png')); ?>">
    <!-- css -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.21/b-1.6.2/datatables.min.css"/>
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/admin.css')); ?>">
    <!-- scripts -->
    <script src="<?php echo e(asset('assets/admin/js/jquery.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/js/mask.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/js/scripts.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/js/chart.min.js')); ?>"></script>
    <script src="https://cdn.ckeditor.com/4.6.2/full/ckeditor.js"></script>
    <script src="https://cdn.datatables.net/v/dt/dt-1.10.21/b-1.6.2/datatables.min.js"></script>
    
</head>

<body>
<?php if(request()->route()->getName() != "ranking-notfound"): ?>
    <?php echo $__env->make('layouts.ranking.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\imugi\resources\views/layouts/ranking/head.blade.php ENDPATH**/ ?>