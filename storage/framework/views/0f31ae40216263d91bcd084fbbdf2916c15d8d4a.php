<div class="sb-slidebar sb-left" style="width:280px!important;">

	<div id="sb-slidebar-content" class="sb-slidebar-content ajaxable">

		<div id="logo-sidebar">

			<a href=""><img class="transparent-logo dark-scheme-logo" src="<?php echo e(asset('assets/portal/images/logo-white.png')); ?>" alt=""/></a>

		</div>

        <nav id='cssmenu'>

            <ul>

                <li  class="<?php if(Route::current()->getName() == 'portal'): ?> active <?php endif; ?>">

                    <a href='/portal'>

                        <i class="icon_house_alt font-16" style=""></i>

                        <span class="century left font-14"> HOME</span>

                    </a>

                </li>

                <?php if($aluno->turma != ""): ?>

                <li class="<?php if(Route::current()->getName() == 'material'): ?> active <?php endif; ?>">

                    <a href="/material">

                        <i class="icon_book font-16"></i>

                        <span class="century left font-14"> MATERIAL DIDÁTICO</span>

                    </a>

                </li>

                <?php endif; ?>

                <?php if($aluno->nivel == 2): ?>

                <li class="<?php if(Route::current()->getName() == 'notas'): ?> active <?php endif; ?>">

                    <a href="/notas">

                        <i class="icon_book font-16"></i>

                        <span class="century left font-14"> ADICIONAR NOTAS</span>

                    </a>

                </li>

                <?php endif; ?>

                <li class="<?php if(Route::current()->getName() == 'nota'): ?> active <?php endif; ?>">

                    <a href="/nota">

                        <i class="icon-desktop font-16"></i>

                        <span class="century left font-14"> NOTAS</span>

                    </a>

                </li>

                <li class="<?php if(Route::current()->getName() == 'frequencia'): ?> active <?php endif; ?>">

                    <a href='/frequencia'>

                        <i class="icon_comment_alt font-16"></i>

                        <span class="century left font-14"> FREQUÊNCIA / REPOSIÇÃO</span>

                    </a>

                </li>

                <li class="<?php if(Route::current()->getName() == 'financeiro'): ?> active <?php endif; ?>">

                    <a href='/financeiro'>

                        <i class="icon-money font-16"></i>

                        <span class="century left font-14"> FINANCEIRO</span>

                    </a>

                </li>

                <li class="<?php if(Route::current()->getName() == 'contato'): ?> active <?php endif; ?>">

                    <a href='/contato'>

                        <i class="icon icon_group font-16"></i>

                        <span class="century left font-14"> CONTATO</span>

                    </a>

                </li>

                <?php if($aluno->turma != ""): ?>

                <li class="<?php if(Route::current()->getName() == 'perfil'): ?> active <?php endif; ?>">

                    <a href='/perfil'>

                        <i class="icon icon_cog font-16"></i>

                        <span class="century left font-14"> CONFIGURACÕES</span>

                    </a>

                </li>

                <?php endif; ?>

                

            </ul>

        </nav>

        <div class="widget_text widget">

            <span class="font area-social">CURTA E <br> COMPARTILHE:

                <figure class="icones-social">

                    <a href="https://www.facebook.com/imugieducacao/" target="_blank">

                        <img src="<?php echo e(asset('assets/portal/images/icon/icone-face.png')); ?>" width="30">

                    </a>

                    <a href="https://www.instagram.com/imugieducacao/" target="_blank">

                        <img src="<?php echo e(asset('assets/portal/images/icon/icone-instagram.png')); ?>" width="30">

                    </a>

                    <a href="https://www.youtube.com/channel/UC93pN5GQ5bswL8cyMHMNb0g" target="_blank">

                        <img src="<?php echo e(asset('assets/portal/images/icon/icone-youtube.png')); ?>" width="30">

                    </a>

                </figure>

            </span>	

            <br>

            <div class="portais imugi-portal">

                    <ul>

                        <li>

                            <a href="/perfil"><p class="century"><i class="icon icon-user"></i> Olá, <?php echo e(Auth::user()->name); ?>  </p></a>

                            <a href=""><p class="century">|</p></a>

                            <a href="<?php echo e(route('logout')); ?>"

        onclick="event.preventDefault();document.getElementById('logout-form').submit();"><p class="century"><i class="fa fa-sign-out"></i> Sair</p></a>

                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">

                                <?php echo e(csrf_field()); ?>


                            </form>

                        </li>

                    </ul>

                </div>

            <div class="textwidget col-md-8" style=" padding: 0!important;">

                <p class="titulo-rodape">

                            &copy; <?php echo e(date('Y')); ?> Imugi Todos os Direitos Reservados 

                </p>

            </div>

		</div>

	</div>

</div><?php /**PATH C:\xampp\htdocs\imugi\resources\views/layouts/portal/menus/sidebar.blade.php ENDPATH**/ ?>