<!-- start header -->
<header>
            <!-- start navigation -->
            <nav style="z-index:1000;" class="navbar navbar-default bootsnav navbar-top  background-white black-link navbar-expand-lg box-shadow">
                <div class="container nav-header-container">
                    <!-- start logo -->
                    <div class="col-auto pl-lg-0">
                        <a href="<?php echo e(route('site')); ?>" title="Imugi Tecnologia e Educação" class="logo"><img src="<?php echo e(asset('assets/site/images/logo.png')); ?>" data-rjs="<?php echo e(asset('assets/site/images/logo@2x.png')); ?>" class="logo-dark" alt="Logo Imugi"><img src="<?php echo e(asset('assets/site/images/logo.png')); ?>" data-rjs="<?php echo e(asset('assets/site/images/logo.png')); ?>" alt="Logo FP" class="logo-light default"></a>
                    </div>
                    <!-- end logo -->
                    <div class="col accordion-menu pr-0">
                        <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbar-collapse-toggle-1">
                            <span class="sr-only">toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="navbar-collapse collapse justify-content-end" id="navbar-collapse-toggle-1">
                            <ul id="accordion" class="nav navbar-nav no-margin alt-font text-normal">
                              
                                <!-- start menu item -->
                                <li class="<?php if(Route::current()->getName() == 'site'): ?> ativo <?php endif; ?>">
                                    <a href="<?php echo e(route('site')); ?>">Home
                                    </a>
                                </li>
                                 <!-- end menu item -->
                                 <li class="dropdown simple-dropdown " ><a href="#"  data-toggle="dropdown">Cursos <i class="fas fa-angle-down text-dark"></i> </a>
                                    <!-- start sub menu -->
                                    <i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i> 
                                    <ul class="dropdown-menu menu" role="menu" style="top:50px!important;">
                                        <li><a  href="<?php echo e(route('cg-fly')); ?>"> CG FLY <i class="fas fa-angle-right"></i></a>
                                        </li>
                                        <li><a href="<?php echo e(route('code-block')); ?>"> CODE BLOCK <i class="fas fa-angle-right"></i></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="<?php if(Route::current()->getName() == 'depoimentos'): ?> ativo <?php endif; ?>">
                                    <a href="<?php echo e(route('depoimentos')); ?>">Depoimentos</a>
                                </li>
                                <li class="<?php if(Route::current()->getName() == 'aprimorar'): ?> ativo <?php endif; ?>">
                                    <a href="<?php echo e(route('aprimorar')); ?>">Aprimorar</a>
                                </li>
                               
                                <li class="<?php if(Route::current()->getName() == 'siteContato'): ?> ativo <?php endif; ?>">
                                    <a href="<?php echo e(route('siteContato')); ?>"> Unidades </a>          
                                </li>
                                 <!-- end menu item -->
                                 <li class="dropdown simple-dropdown " ><a href="#"  data-toggle="dropdown">Franquia<i class="fas fa-angle-down text-dark"></i> </a>
                                    <!-- start sub menu -->
                                    <i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i> 
                                    <ul class="dropdown-menu menu" role="menu" style="top:50px!important;">
                                        <li><a  href="<?php echo e(route('franquia')); ?>"> SEJA FRANQUEADO <i class="fas fa-angle-right"></i></a>
                                        </li>
                                        <li><a href="http://unimugi.com.br/" target="_blank"> UNIMUGI <i class="fas fa-angle-right"></i></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="<?php if(Route::current()->getName() == 'portalAluno'): ?> ativo <?php endif; ?>">
                                    <a href="<?php echo e(route('login')); ?>" target="_blank">Portal do Aluno</a>
                                </li>
                        </div>
                    </div>
                    <div class="col-auto pr-lg-0">
                        <div class="header-social-icon d-none d-md-inline-block">
                            <a href="https://www.facebook.com/imugieducacao/" title="Facebook" target="_blank">
                                <img src="<?php echo e(asset('assets/site/images/icone_face_1.png')); ?>" width="25" alt="">
                            </a>
                            <a href="https://www.instagram.com/imugieducacao/" title="Instagram" target="_blank">
                                <img src="<?php echo e(asset('assets/site/images/icone_insta_1.png')); ?>" width="25" alt="">
                            </a>
                            <a href="https://www.linkedin.com/company/imugi/" title="LinkedIn" target="_blank">
                                <img src="<?php echo e(asset('assets/site/images/icone_lkd_1.png')); ?>" width="25" alt="">
                            </a>  
                            <a href="https://www.youtube.com/channel/UC93pN5GQ5bswL8cyMHMNb0g/videos" title="Youtube" target="_blank">
                                <img src="<?php echo e(asset('assets/site/images/icone_youtube_1.png')); ?>" width="25" alt="">
                            </a>                          
                        </div>
                    </div>

                </div>
            </nav>
            <!-- end navigation --> 
        </header>
        <!-- end header --><?php /**PATH C:\xampp\htdocs\imugi\resources\views/layouts/site/menus/header.blade.php ENDPATH**/ ?>