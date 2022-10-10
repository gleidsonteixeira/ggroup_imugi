  <!-- start footer --> 
  <footer class="footer-classic-dark bg-extra-dark-gray" style="background:url(<?php echo e(asset('assets/site/images/bg_footer.png')); ?>); 
        background-repeat: no-repeat; background-position: top; margin-top: -120px;">
                <!-- <figure style="position:absolute; top:622%; margin-left:64.5%;" class="bola_rodape">
                    <img src="<?php echo e(asset('assets/site/images/bola_1_rodape.png')); ?>">
                    <img src="<?php echo e(asset('assets/site/images/bola_2_rodape.png')); ?>">
                </figure> -->
            <div style="height: 100px;"></div>
            <div class="footer-widget-area padding-five-top padding-30px-bottom sm-padding-30px-top" id="footer">
                <div class="container">
                    <div class="row">
                        <!-- start about -->
                        <div class="col-lg-2 col-md-6 widget md-margin-30px-bottom text-center text-md-left last-paragraph-no-margin">
                            <div class="widget-title alt-font text-small text-medium-gray text-uppercase margin-15px-bottom font-weight-600">
                                <img src="<?php echo e(asset('assets/site/images/logo-imugi-branco.png')); ?>" alt="" width="150">
                            </div>
                            <p class="text-small width-95 sm-width-100 text-white">
                                Escola de tecnologia <br>
                                e educação que utiliza <br> 
                                uma metodologia de <br>
                                ensino única 
                            </p>
                        </div>
                        <!-- end about -->
                        <!-- start blog post -->
                        <div class="col-lg-2 col-md-6 widget md-margin-30px-bottom">
                            <ul class="latest-post position-relative">
                                <li class="media">
                                    <a href="<?php echo e(route('site')); ?>" class="text-white menu_rodape">Home</a>
                                </li>
                                <li class="media">
                                    <a href="<?php echo e(route('franquia')); ?>" class="text-white menu_rodape">Seja Franqueado</a>
                                </li>
                                <?php if(Route::current()->getName() == 'site'): ?> 
                                <li class="media">
                                    <a href="#curso" class="text-white menu_rodape">Cursos</a>
                                </li>
                                <?php endif; ?>
                                <li class="media">
                                    <a href="<?php echo e(route('siteContato')); ?>" class="text-white menu_rodape">Contato</a>
                                </li>
                                <li class="media">
                                    <a href="<?php echo e(route('login')); ?>" class="text-white menu_rodape">Portal do Aluno</a>
                                </li>
                            </ul>
                        </div>
                         <!-- start blog post -->
                         <div class="col-lg-2 col-md-6 widget md-margin-30px-bottom">
                            <ul class="latest-post position-relative">
                               
                                <li class="media suporte">
                                    <span class="text-white">Suporte 
                                        <a href="https://api.whatsapp.com/send?1=pt_BR&phone=554184608944" target="_blank">
                                            <img src="<?php echo e(asset('assets/site/images/icone_what.png')); ?>" alt="">
                                        </a>
                                    </span>
                                </li>
                                <li class="media mt-4">
                                    <span class="text-white">Baixe nosso app <br> 
                                        <a href="https://play.google.com/store/apps/details?id=com.developer.guilherme&hl=pt_BR" target="_blank">
                                            <img src="<?php echo e(asset('assets/site/images/play_store.png')); ?>" alt="" class="icone_play_footer">
                                        </a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <!-- end blog post -->
                        <!-- start newsletter -->
                        <div class="col-lg-2 col-md-6 widget md-margin-30px-bottom text-center text-md-left">
                            <div class="text-white">
                               <span class="texto_franqueado"> Seja um  </span>
                               <div style="height: 2px;"></div>
                               <span class="texto_franqueado_2"> Franqueado </span>
                            </div>
                            <a href="<?php echo e(route('franquia')); ?>">
                                <button class="mt-4 btn_franquia">Quero ter uma imugi</button>
                            </a>
                        </div>
                        <!-- end newsletter -->
                        <!-- start instagram -->
                        <div class="col-lg-3 col-md-6 widget md-margin-5px-bottom text-center text-md-left">
                            <div class="widget-title alt-font text-small text-white text-uppercase margin-20px-bottom font-weight-600">Curta e compartilhe</div>
                            <a href="https://www.facebook.com/imugieducacao/" target="_blank"> 
                                <img src="<?php echo e(asset('assets/site/images/icone_face.png')); ?>" alt="" width="40"> 
                            </a>
                            <a href="https://www.instagram.com/imugieducacao/" target="_blank">
                                <img src="<?php echo e(asset('assets/site/images/icone_insta.png')); ?>" alt="" width="40">
                            </a>
                            <a href="https://www.linkedin.com/company/imugi/" target="_blank">
                                <img src="<?php echo e(asset('assets/site/images/icone_lkd.png')); ?>" alt="" width="40">
                            </a>
                            <a href="https://www.youtube.com/channel/UC93pN5GQ5bswL8cyMHMNb0g/videos" target="_blank">
                                <img src="<?php echo e(asset('assets/site/images/icone_youtube.png')); ?>" alt="" width="40">
                            </a>
                        </div>
                        <!-- end instagram -->
                    </div>
                </div>
            </div>
            <div style="background-color: #1e570e;" class="">
                <div class="container">
                    <div class="footer-bottom">
                        <div class="row">
                            <!-- start copyright -->
                            <div class="col-lg-12 col-md-12 text-small text-center text-white" style="padding: 10px;"> &copy; Copyright Imugi. Todos os
                                direitos reservados
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->
        <!-- start scroll to top -->
        <a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
        <!-- end scroll to top  -->
        <?php /**PATH C:\xampp\htdocs\apostila-imugi\resources\views/layouts/site/footer.blade.php ENDPATH**/ ?>