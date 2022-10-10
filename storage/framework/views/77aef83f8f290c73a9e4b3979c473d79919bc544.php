
<?php $__env->startSection('titulo','Franqueado'); ?>
<?php $__env->startSection('conteudo'); ?>
<?php echo $__env->make('layouts.site.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>

    <section id="unidades-banner">
        <img src="<?php echo e(asset('assets/site/images/banner-franqueado.png')); ?>" alt="Bem-vindo" />
        <div class="content">
            <img src="<?php echo e(asset('assets/site/images/logo-franqueado.png')); ?>" alt="Franqueado" />
            <h2 class="upper">Seja nosso <br><b>Franqueado</b></h2>
        </div>
    </section>

    <section id="franqueado-quem">
        <div class="item video" data-aos="fade-right" data-aos-once="true">
            <img src="<?php echo e(asset('assets/site/images/video-bg.jpg')); ?>" alt="Portal de alunos" />
            <a href="https://www.youtube.com/watch?v=UZZNKbCucIU" target="_blank"><i class="material-icons click suave" translate="no">play_circle</i></a>
        </div>
        <div class="item" data-aos="fade-left" data-aos-once="true">
            <div class="content">
                <h2>Quem Somos</h2>
                <p><b>Fazemos parte do GGroup que possui mais de 10 anos de <br> experiência</b> no mercado administrando redes com escolas <br> próprias e franqueadas por todas as regiões do Brasil.</p>
                <p><b>A Imugi  é uma escola de Tecnologia e Educação</b> que utiliza <br>uma <b>metodologia de ensino única</b> abordando <br>interdisciplinarmente conteúdos das áreas de: <b>Robótica, <br>Desenvolvimento de Games, Programação, Inglês e Computação Gráfica.</b></p>
                <p>Um novo mundo cria novas oportunidades!</p>
            </div>
        </div>
    </section>

    <section id="franqueado-sec1">
        <div class="item">
            <h2 class="upper">A <span class="arista upper">imugi</span> oferece <br><b>para o investidor</b></h2>
            <div class="content">
                <div>
                    <img src="<?php echo e(asset('assets/site/images/franqueado-bg2.png')); ?>" alt="">
                </div>
                <div>
                    <h3>Franqueado</h3>
                    <p><b>Realiza o investimento para a aquisição, <br>montagem e operação da unidade <br>escolar.</b> Receberá treinamento, Know How de <br>todo o negócio e ficará responsável por <br>100% da operação.</p>
                </div>
            </div>
        </div>
        <div class="imagem">
            <img src="<?php echo e(asset('assets/site/images/franqueado-bg.png')); ?>" alt="">
        </div>
    </section>
    
    <section id="franqueado-sec2">
        <div class="imagem">
            <img src="<?php echo e(asset('assets/site/images/franqueado-bg3.png')); ?>" alt="">
        </div>
        <div class="item">
            <h2>Números de uma<span class="upper">franquia de sucesso</span></h2>
            <div class="content">
                <div>
                    <h3>Previsão de Faturamento:</h3>
                    <h4>R$150 Mil Reais Mensais</h4>
                </div>
                <div>
                    <img src="<?php echo e(asset('assets/site/images/franqueado-bg5.png')); ?>" alt="">
                </div>
            </div>
            <div class="content">
                <div>
                    <h3>Lucro:</h3>
                    <h4>25%</h4>
                </div>
                <div>
                    <img src="<?php echo e(asset('assets/site/images/franqueado-bg6.png')); ?>" alt="">
                </div>
            </div>
        </div>
    </section>
    
    <section id="franqueado-sec3">
        <div class="item">
            <div class="content">
                <div>
                    <img src="<?php echo e(asset('assets/site/images/franqueado-bg9.png')); ?>" alt="">
                </div>
                <div>
                    <h3>Investimento</h3>
                    <h4 class="upper">do franqueado</h4>
                </div>
            </div>
            <div class="sub-content">
                <div>
                    <img src="<?php echo e(asset('assets/site/images/franqueado-bg10.png')); ?>" alt="">
                </div>
                <div>
                    <h3>Taxa de franquia:</h3>
                    <h4>R$50.000,00</h4>
                </div>
            </div>
            <div class="sub-content">
                <div>
                    <img src="<?php echo e(asset('assets/site/images/franqueado-bg10.png')); ?>" alt="">
                </div>
                <div>
                    <h3>Prazo médio de retorno no investimento:</h3>
                    <h4>14 a 18 meses</h4>
                </div>
            </div>
            <div class="sub-content">
                <div>
                    <img src="<?php echo e(asset('assets/site/images/franqueado-bg10.png')); ?>" alt="">
                </div>
                <div>
                    <h3>Área mínima:</h3>
                    <h4>180m²</h4>
                </div>
            </div>
            <div class="sub-content">
                <div>
                    <img src="<?php echo e(asset('assets/site/images/franqueado-bg10.png')); ?>" alt="">
                </div>
                <div>
                    <h3>Investimento Total estimado:</h3>
                    <h4>R$200 Mil</h4>
                </div>
            </div>
        </div>
        <div class="imagem">
            <img src="<?php echo e(asset('assets/site/images/franqueado-bg8.png')); ?>" alt="">
        </div>
    </section>
    
    <section id="franqueado-royalties">
        <div class="item">
            <div>
                <img src="<?php echo e(asset('assets/site/images/franqueado-bg11.png')); ?>" alt="">
            </div>
            <div>
                <h3>Royalties: <br><span>6% de Faturamento</span></h3>
            </div>
        </div>
        <div class="item">
            <div>
                <img src="<?php echo e(asset('assets/site/images/franqueado-bg12.png')); ?>" alt="">
            </div>
            <div>
                <h3>Publicidade: <br><span>2% de Faturamento</span></h3>
            </div>
        </div>
    </section>

    <section id="franqueado-diferenciais">
        <h2 class="upper">Diferenciais da imugi</h2>
        <ul>
            <li data-aos="fade-left" data-aos-delay="300" data-aos-once="true">
                <img src="<?php echo e(asset('assets/site/images/diferencial1.png')); ?>" />
                <p class="arista upper">universidade<br>corporativa</p>
            </li>
            <li data-aos="fade-left" data-aos-delay="500" data-aos-once="true">
                <img src="<?php echo e(asset('assets/site/images/diferencial2.png')); ?>" />
                <p class="arista upper">análise de<br>ponto comercial</p>
            </li>
            <li data-aos="fade-left" data-aos-delay="700" data-aos-once="true">
                <img src="<?php echo e(asset('assets/site/images/diferencial3.png')); ?>" />
                <p class="arista upper">média de lucratividade<br>25% a 30%</p>
            </li>
            <li data-aos="fade-left" data-aos-delay="900" data-aos-once="true">
                <img src="<?php echo e(asset('assets/site/images/diferencial4.png')); ?>" />
                <p class="arista upper">seleção e contratação<br>da primeira equipe</p>
            </li>
            <li data-aos="fade-left" data-aos-delay="1200" data-aos-once="true">
                <img src="<?php echo e(asset('assets/site/images/diferencial5.png')); ?>" />
                <p class="arista upper">consultor de<br>treinamento</p>
            </li>
        </ul>
    </section>

    <section id="franqueado-depoimento">
        <h2 class="upper">depoimento do franqueado</h2>
        <p>“Optei pela franquia da Imugi porque enxerguei a possibilidade de tornar-me um parceiro estratégico em uma marca que tem uma forma inovadora de trabalhar em um mercado em
ascensão. Fiquei surpreendido com a qualidade do treinamento baseado nos manuais de ponto comercial, sistema, operação, gestão, arquitetônico e implantação.
<br><b>O suporte da franqueadora é incrível.</b>”</p>
        <h6><b>- Michel Bezerra</b> Franqueado - Unidade Maceió - AL</h6>
        <a href="#!" class="suave upper">quero saber mais</a>
    </section>

    <div style="height: 30px;display: block;"></div>

</main>

<script>
    //INICIALIZADOR DAS ANIMAÇÕES
    AOS.init();

    

</script>

<?php echo $__env->make('layouts.site.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.site.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\imugi2\resources\views/site/franqueado.blade.php ENDPATH**/ ?>