<?php $__env->startSection('titulo','Imugi Tecnologia e Educação'); ?>
<?php $__env->startSection('conteudo'); ?>
<?php echo $__env->make('layouts.site.menus.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<section class="wow fadeIn bem_vindo_img" id="matricula"
    style="background-image: url(<?php echo e(asset('assets/site/images/bg_home.jpg')); ?>); background-repeat:no-repeat; background-position: center;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 text-center md-margin-50px-bottom sm-margin-30px-bottom">
                <div class="text-center text-lg-left md-no-padding-lr">
                    <h5 class="educacao text-white-2">
                        Educação com
                        <div style="height:10px;"></div>
                        <span class="titulo_2"> Tecnologia </span>
                        <div style="height:25px;"></div>
                        <span class="titulo_3"> e Inglês </span>
                    </h5>
                    <p class="text-extra-large width-90 font-weight-300 text-white md-width-100">
                        Se prepare para o <br> mercado de trabalho <br> internacional
                    </p>
                    <p class="text-white">Baixe nosso App</p>
                    <a href="https://play.google.com/store/apps/details?id=com.pombocriativo.imugi" target="_blank">
                        <img src="<?php echo e(asset('assets/site/images/play_store.png')); ?>" alt="" class="icone_play">
                    </a>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-xs-4 col-lg-4">
                <div class="card lead" style="z-index:400;">
                    <div class="card-body">
                        <p class="titulo_lead">Quero ser aluno Imugi</p>
                        <p class="obs_lead">Preencha corretamente as informações abaixo e retornaremos o seu contato o mais breve possível.</p>
                        <form method="POST" action="<?php echo e(route('alunoContato')); ?>">
                            <?php echo e(csrf_field()); ?>

                            <div class="form-group">
                                <input type="text" required class="form-control btn_lead" name="nome" placeholder="Nome"/>
                            </div>
                            <div class="form-group">
                                <input type="text" required class="form-control btn_lead" name="email" placeholder="Email"/>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" required class="telefone form-control btn_lead" name="whatsapp" placeholder="Whatsapp">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" class="telefone form-control btn_lead" name="telefone" placeholder="Telefone(Opcional)">
                                </div>
                            </div>
                            <select name="como" class="btn_lead_select">
                                <option value="--" selected>Como conheceu a Imugi</option>
                                <option value="Site">Site</option>
                                <option value="Midias Digitais">Midias Digitais</option>
                                <option value="Redes Sociais">Redes Sociais</option>
                                <option value="Outros">Outros</option>
                            </select>
                            <select name="unidade" class="btn_lead_select">
                                <option value="--" selected>Estado</option>
                                <option value="Anápolis">Anápolis / GO</option>
                                <option value="Arapiraca">Arapiraca / AL</option>
                                <option value="Belém">Belém/ PA</option>
                                <option value="Fortaleza Centro"> Fortaleza / CE </option>
                                <option value="Lauro de Freitas"> Lauro de Freitas / BA</option>
                                <option value="Macéio">Macéio / AL</option>
                                <option value="Manaus">Manaus / AM </option>
                                <option value="Natal">Natal / RN </option>
                                <option value="Fortaleza Messejana">Messejana / CE</option>
                                <option value="São Luís">São Luís / MA</option>
                                <option value="Sorocaba">Sorocaba / SP</option>
                                <option value="Teresina">Teresina / PI</option>
                                <option value="Vitória">Vitória / ES</option>
                            </select>
                            <div class="form-group">
                                <textarea type="text" required class="telefone form-control btn_lead" name="mensagem" placeholder="Mensagem(Opcional)"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="g-recaptcha" data-sitekey="6Le0ShAfAAAAAIbh9K6Fnjb1rmaMJcWpFQce-pPh"></div>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn_submit_lead btn-block" value="Enviar Cadastro">
                            </div>
                        </form>
                        <!-- <p class="obs_lead">*Nossa equipe irá entrar em contato para marcar o melhor dia e horário para
                            agendar sua aula</p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<img src="<?php echo e(asset('assets/site/images/quadrado_3.png')); ?>" alt="" class="quadrado_3">
<section class="wow fadeIn bg_bvd"
    style="background-image: url(<?php echo e(asset('assets/site/images/bg-bemvindo.png')); ?>);  background-repeat: no-repeat; background-position: bottom; background-size: 100% 18%;">
    <div class="container ">
        <div class="row align-items-center">
            <div class="col-12 col-lg-5 md-margin-50px-bottom">
                <h5 class="bem_vindo text-extra-dark-gray font-weight-600">Bem Vindo a Imugi</h5>
                <p class="texto_bemvindo">
                    Escola de tecnologia e educação que utiliza uma <br> metodologia de ensino única
                    abordando conteúdos <br> das áreas de Robótica, Game, Programação,
                    Inglês <br> e Computação Gráfica.
                </p>
                <p class="texto_bemvindo_2">
                    Um novo mundo cria novas oportunidades <br> Be Imugi, Be Diferent
                </p>
            </div>
            <div class="col-12 col-lg-7 text-center">
                <a class="popup-youtube" href="https://www.youtube.com/watch?v=ykNaUMOa_Jk">
                    <img src="<?php echo e(asset('assets/site/images/video-institucional.jpg')); ?>" alt="" class="w-100">
                    <div class="icon-play">
                        <div class="absolute-middle-center">
                            <img src="<?php echo e(asset('assets/site/images/icon-play.png')); ?>" alt="">
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div style="height: 50px;"></div>
        <div class="row mt-4">
            <!-- start features box item -->
            <div
                class="col-12 col-lg-4 col-md-6 text-center md-margin-50px-bottom sm-margin-30px-bottom wow fadeInUp last-paragraph-no-margin">
                <img src="<?php echo e(asset('assets/site/images/icone-cg.png')); ?>" alt="" width="200">
                <div class=" text-uppercase font-weight-600 titulo_vantagens margin-5px-bottom mt-4">Computação Gráfica
                </div>
                <p class="">
                    1. Graphic and Photography: Photoshop <br>
                    2. Games and Animation: Cinema 4D <br>
                    3. Video Edition: Premiere + After Effects
                </p>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div
                class="col-12 col-lg-4 col-md-6 text-center md-margin-50px-bottom sm-margin-30px-bottom wow fadeInUp last-paragraph-no-margin">
                <img src="<?php echo e(asset('assets/site/images/icone-ingles.png')); ?>" alt="" width="200">
                <div class=" text-uppercase font-weight-600 titulo_vantagens margin-5px-bottom mt-4">Inglês</div>
                <p class="">
                    1. Play Go: Inglês Iniciante CG <br>
                    2. Dominating: Dominando os termos técnicos <br>
                    3. Master of Language: Fluência
                </p>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div
                class="col-12 col-lg-4 col-md-6 text-center md-margin-50px-bottom sm-margin-30px-bottom wow fadeInUp last-paragraph-no-margin">
                <img src="<?php echo e(asset('assets/site/images/icone-aprimorar.png')); ?>" alt="" width="160">
                <div class=" text-uppercase font-weight-600 titulo_vantagens margin-5px-bottom mt-4">Programa Aprimorar
                </div>
                <p class="">ferramenta de orientação e <br> encaminhamento ao mercado de trabalho <br> exclusiva para os
                    alunos imugi.</p>
            </div>
            <!-- end features box item -->
        </div>
        <div style="height: 160px;"></div>
    </div>
</section>
<!-- end information section -->
<!-- start parallax feature box -->
<section class="p-0 wow fadeIn bg-light-gray" id="curso">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-6 cover-background md-height-400px wow fadeInRight"
                style="background-image:url(<?php echo e(asset('assets/site/images/bg-cg-fly.jpg')); ?>);"></div>
            <div
                class="col-12 col-lg-6 wow fadeInLeft padding-four-all md-padding-eight-all md-padding-15px-lr sm-padding-50px-tb">
                <div class="row m-0">
                    <div
                        class="col-12 col-xl-10 margin-six-bottom lg-margin-six-bottom md-margin-30px-bottom sm-no-margin-bottom">
                        <img src="<?php echo e(asset('assets/site/images/logo-cg-fly.png')); ?>" alt="" width="360">
                        <p>
                            Curso projetado para artistas ou amadores que <br>
                            procuram treinamento de efeitos gráficos e visuais <br>
                            ensinado interdisciplinarmente com a língua inglesa. <br>
                            Utilizando uma metodologia de ensino única.
                        </p>
                        <a class="btn_curso text-white" href="#matricula">Quero Agendar Minha Aula</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="<?php echo e(asset('assets/site/images/quadro_2.png')); ?>" alt="" class="quadrado_2">
</section>

<section class="p-0 wow fadeIn bg-light-gray">
    <div class="container-fluid">
        <div class="row">
            <div
                class="col-12 col-lg-6 wow fadeInLeft padding-four-all md-padding-eight-all md-padding-15px-lr sm-padding-50px-tb">
                <div class="row m-0">
                    <div style="margin-left: 240px;"
                        class="col-12 col-xl-10 code_b margin-six-bottom lg-margin-six-bottom md-margin-30px-bottom sm-no-margin-bottom">
                        <img src="<?php echo e(asset('assets/site/images/logo-code.png')); ?>" alt="">
                        <p class="mt-4">
                            Aborda as possibilidades espectaculares <br>
                            da criação para o mundo da Programação, Game <br>
                            e Robótica desenvolvendo o raciocínio lógico.
                        </p>
                        <a class="btn_curso text-white" href="#matricula">Quero Agendar Minha Aula</a>
                        <!-- end feature box item -->
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 cover-background md-height-400px wow fadeInRight"
                style="background-image:url(<?php echo e(asset('assets/site/images/bg-code-block.jpg')); ?>)"></div>
        </div>
    </div>
</section>
<!-- start parallax feature box -->
<section class="p-0 wow fadeIn bg-light-gray" id="curso">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-6 cover-background md-height-400px wow fadeInRight"
                style="background-image:url(<?php echo e(asset('assets/site/images/game-dev.png')); ?>);"></div>
            <div
                class="col-12 col-lg-6 wow fadeInLeft padding-four-all md-padding-eight-all md-padding-15px-lr sm-padding-50px-tb">
                <div class="row m-0">
                    <div
                        class="col-12 col-xl-10 margin-six-bottom lg-margin-six-bottom md-margin-30px-bottom sm-no-margin-bottom">
                        <img src="<?php echo e(asset('assets/site/images/logo-dev.png')); ?>" alt="" width="360">
                        <p>
                            Curso voltado para profissionais da área de desenvolvimento de jogos digitais, ampliando
                            conhecimentos e também para iniciantes que desejam ingressar nesse mercado em crescimento no
                            mundo. O aluno aprenderá a planejar e desenvolver jogos utilizando as melhores ferramentas,
                            tornando-o um expert em projeto e programação de games.
                        </p>
                        <a class="btn_curso text-white" href="#matricula">Quero Agendar Minha Aula</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="<?php echo e(asset('assets/site/images/quadro_2.png')); ?>" alt="" class="quadrado_2">
</section>
<!-- start section -->
<section class="wow fadeIn"
    style="background-image: url(<?php echo e(asset('assets/site/images/bg_portal_aluno.jpg')); ?>); background-repeat:no-repeat;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-7 wow fadeInRight last-paragraph-no-margin" data-wow-delay="0.2s">
                <div class="padding-eight-lr text-center text-lg-left sm-no-padding w-100">
                    <span class="titulo_portal">
                        Portal do
                    </span>
                    <div style="height: 10px;"></div>
                    <span class="titulo_portal">
                        Aluno Imugi
                    </span>
                    <p class="text-white texto_portal">
                        Acesse agora seu Portal do Aluno e confira <br>
                        seu Material Didático, Audiobooks, Notas, <br>
                        Frequência e Pagamentos.
                    </p>
                </div>
            </div>
            <div class="col-12 col-lg-5 text-center md-margin-50px-bottom wow fadeInLeft">
                <a class="popup-youtube" href="https://www.youtube.com/watch?v=uf_m3lJ0F-M">
                    <img src="<?php echo e(asset('assets/site/images/portal_aluno.jpg')); ?>" alt="">
                    <div class="icon-play">
                        <div class="absolute-middle-center">
                            <img src="<?php echo e(asset('assets/site/images/icon-play.png')); ?>" alt="">
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="wow fadeIn" style="padding: 50px 0!important">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-5 text-center wow fadeInLeft">
                <a class="popup-youtube" href="https://www.youtube.com/watch?v=U-vopjv-HNk">
                    <img src="<?php echo e(asset('assets/site/images/centro_autorizado.jpg')); ?>" alt="" class="w-100">
                    <div class="icon-play">
                        <div class="absolute-middle-center">
                            <img src="<?php echo e(asset('assets/site/images/icon-play.png')); ?>" alt="">
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-lg-7 wow fadeInRight last-paragraph-no-margin" data-wow-delay="0.2s">
                <div class="padding-eight-lr text-center text-lg-left sm-no-padding w-100">
                    <div class="top_centro"></div>
                    <span class="titulo_centro">
                        Centro
                    </span>
                    <div style="height: 10px;"></div>
                    <span class="titulo_centro">
                        Autorizado FP
                    </span>
                    <p class="mt-4">
                        A Imugi é um Centro Autorizado FP que é uma Edtech, <br>
                        startup de tecnologia educacional. Tem como propósito <br>
                        impactar vidas atráves da educação fornecendo os <br>
                        melhores conteúdos para complementar a didática <br>
                        presencial das escolas parceiras.
                    </p>
                    <figure class="mt-2">
                        <img src="<?php echo e(asset('assets/site/images/centrofp.png')); ?>" alt="" width="140">
                        <img src="<?php echo e(asset('assets/site/images/logofp.png')); ?>" alt="" width="100" class="ml-4">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- start testimonial slider section -->
<section class="wow fadeIn"
    style="background-image: url(<?php echo e(asset('assets/site/images/depoimentos.png')); ?>); background-repeat:no-repeat; background-position: bottom; background-position-x: top;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center wow fadeIn">
                <h5 class="text-uppercase depoimentos">
                    O QUE DIZEM NOSSOS ALUNOS ;)
                </h5>
            </div>
        </div>
        <div class="row position-relative margin-100px-top md-margin-70px-top sm-margin-50px-top">
            <div class="swiper-container swiper-pagination-bottom black-move blog-slider swiper-three-slides">
                <div class="swiper-wrapper">
                    <!-- start testimonial item -->
                    <div class="col-12 col-lg-4 col-md-6 swiper-slide md-margin-four-bottom">
                        <div
                            class="margin-half-all bg-white box-shadow-light text-center padding-fourteen-all sm-padding-30px-all">
                            <p class="md-margin-15px-bottom sm-margin-20px-bottom"> A escola é maravilhosa e possui
                                ótimos professores.</p>
                            <span
                                class="text-extra-dark-gray text-small text-uppercase d-block line-height-10 alt-font font-weight-600">ANA
                                VITÓRIA</span>
                        </div>
                    </div>
                    <!-- end testimonial item -->
                    <!-- start testimonial item -->
                    <div class="col-12 col-lg-4 col-md-6 swiper-slide md-margin-four-bottom">
                        <div
                            class="margin-half-all bg-white box-shadow-light text-center padding-fourteen-all sm-padding-30px-all">
                            <p class="md-margin-15px-bottom sm-margin-20px-bottom">Ambiente agradável e tecnológico com
                                ótimos cursos.</p>
                            <span
                                class="text-extra-dark-gray text-small text-uppercase d-block line-height-10 alt-font font-weight-600">PEDRO
                                HENRIQUE</span>
                        </div>
                    </div>
                    <!-- end testimonial item -->
                    <!-- start testimonial item -->
                    <div class="col-12 col-lg-4 col-md-6 swiper-slide md-margin-four-bottom">
                        <div
                            class="margin-half-all bg-white box-shadow-light text-center padding-fourteen-all sm-padding-30px-all">
                            <p class="md-margin-15px-bottom sm-margin-20px-bottom">Referência em curso de inglês com
                                computação gráfica,
                                uma experiência que transformou minha vida profissional.</p>
                            <span
                                class="text-extra-dark-gray text-small text-uppercase d-block line-height-10 alt-font font-weight-600">VITOR
                                RODRIGUES</span>
                        </div>
                    </div>
                    <!-- end testimonial item -->
                </div>
                <div class="swiper-pagination swiper-pagination-three-slides h-auto"></div>
            </div>
        </div>
    </div>
</section>
<?php echo $__env->make('layouts.site.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.site.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/site/home/index.blade.php ENDPATH**/ ?>