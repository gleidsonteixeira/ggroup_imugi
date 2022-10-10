
<?php $__env->startSection('titulo','Imugi Tecnologia e Educação'); ?>
<?php $__env->startSection('conteudo'); ?>
<?php echo $__env->make('layouts.site.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>

    <section id="home">
        <img src="<?php echo e(asset('assets/site/images/banner-home.png')); ?>" alt="Bem-vindo" />
        <div class="content">
            <h1>Bem vindo a</h1>
            <h2 class="arista">Imugi</h2>
            <p><b>Escola de tecnologia e educação</b> que utiliza uma<br> metodologia de ensino única abordando
                conteúdos<br> das áreas de <b>Robótica, Game, Programação,<br> Inglês e Conputação Gráfica.</b></p>
            <h5>Um novo mundo cria novas oportunidades <b>Be Imugi, Be Diferent</b></h5>
        </div>
    </section>

    <section id="vantagens">
        <div class="item" data-aos="fade-up" data-aos-delay="500" data-aos-once="true">
            <img src="<?php echo e(asset('assets/site/images/vantagem-icon1.png')); ?>" alt="Computação gráfica">
            <h5 class="arista" data-aos="fade-up" data-aos-delay="900" data-aos-once="true">Computação gráfica</h5>
            <p data-aos="fade-up" data-aos-delay="1200" data-aos-once="true"><b>1. Graphic and Photography:</b> Photoshop + Corel Draw</p>
            <p data-aos="fade-up" data-aos-delay="1200" data-aos-once="true"><b>2. Games and Animation:</b> Cinema 4D + Unity</p>
            <p data-aos="fade-up" data-aos-delay="1200" data-aos-once="true"><b>3. Video Editing:</b> Premiere + After Effects</p>
        </div>
        <div class="item" data-aos="fade-up" data-aos-delay="700" data-aos-once="true">
            <img src="<?php echo e(asset('assets/site/images/vantagem-icon2.png')); ?>" alt="Inglês">
            <h5 class="arista" data-aos="fade-up" data-aos-delay="1000" data-aos-once="true">Inglês</h5>
            <p data-aos="fade-up" data-aos-delay="1200" data-aos-once="true"><b>1. Play Go:</b> Inglês Iniciante CG</p>
            <p data-aos="fade-up" data-aos-delay="1200" data-aos-once="true"><b>2. Dominating:</b> Dominando os Termos Técnicos</p>
            <p data-aos="fade-up" data-aos-delay="1200" data-aos-once="true"><b>3. Master of Language:</b> Fluência</p>
        </div>
        <div class="item" data-aos="fade-up" data-aos-delay="900" data-aos-once="true">
            <img src="<?php echo e(asset('assets/site/images/vantagem-icon3.png')); ?>" alt="Programa aprimorar">
            <h5 class="arista" data-aos="fade-up" data-aos-delay="1100" data-aos-once="true">Programa aprimorar</h5>
            <p data-aos="fade-up" data-aos-delay="1200" data-aos-once="true"><b>Ferramenta de Orientação e<br> Encaminhamento</b> ao mercado de<br> trabalho exclusiva para os alunos Imugi</p>
        </div>
    </section>

    <section id="ser-aluno">
        <div class="item">
            <div class="content" data-aos="fade-right" data-aos-once="true">
                <h2><span>Educação com</span>Tecnologia e inglês</h2>
                <p>Se prepare para o mercado de trabalho internacional</p>
                <a class="suave click popup-cadastro">Quero ser aluno <span class="arista">Imugi</span></a>
            </div>
        </div>
        <div class="item">
            <img src="<?php echo e(asset('assets/site/images/vantagens-bg.png')); ?>" class="bg" alt="bg">
            <img src="<?php echo e(asset('assets/site/images/ser-aluno.png')); ?>" class="icon" alt="icone" data-aos="fade-left" data-aos-once="true">
        </div>
    </section>

    <section id="cursos">
        <h2 data-aos="fade-up" data-aos-once="true">Nossos Cursos</h2>
        <ul>
            <li data-aos="fade-up" data-aos-delay="500" data-aos-once="true">
                <img class="suave" src="<?php echo e(asset('assets/site/images/curso-cgfly.png')); ?>" alt="CG Fly" />
                <a class="arista suave click" pp="cgfly">saiba mais</a>
            </li>
            <li data-aos="fade-up" data-aos-delay="750" data-aos-once="true">
                <img class="suave" src="<?php echo e(asset('assets/site/images/curso-code-block.png')); ?>" alt="Code Block" />
                <a class="arista suave click" pp="codeblock">saiba mais</a>
            </li>
            <li data-aos="fade-up" data-aos-delay="900" data-aos-once="true">
                <img class="suave" src="<?php echo e(asset('assets/site/images/curso-gamer-dev.png')); ?>" alt="Gamer DEV" />
                <a class="arista suave click" pp="gamerdev">saiba mais</a>
            </li>
        </ul>
        <div class="popup cgfly suave">
            <i class="material-icons click fechar" translate="no">close</i>
            <div class="content">
                <h5>Curso</h5>
                <img src="<?php echo e(asset('assets/site/images/cgfly-logo-color.png')); ?>" alt="CG Fly">
                <p><b>Aborda as possibilidades espetaculares da criação </b><br>para o mundo da <b>Programação, Game e Robótica</b> <br>desenvolvendo o raciocínio lógico.</p>
            </div>
            <div class="content">
                <a class="suave click popup-cadastro">Quero Agendar minha <span class="arista upper">aula</span></a>
            </div>
        </div>
        <div class="popup codeblock suave">
            <i class="material-icons click fechar" translate="no">close</i>
            <div class="content">
                <h5>Curso</h5>
                <img src="<?php echo e(asset('assets/site/images/codeblock-logo.png')); ?>" alt="Code Block">
                <p><b>Aborda as possibilidades espetaculares da criação </b><br>para o mundo da <b>Programação, Game e Robótica</b> <br>desenvolvendo o raciocínio lógico.</p>
            </div>
            <div class="content">
                <a class="suave click popup-cadastro">Quero Agendar minha <span class="arista upper">aula</span></a>
            </div>
        </div>
        <div class="popup gamerdev suave">
            <i class="material-icons click fechar" translate="no">close</i>
            <div class="content">
                <h5>Curso</h5>
                <img src="<?php echo e(asset('assets/site/images/gamerdev-logo-color.png')); ?>" alt="Gamer Dev">
                <p><b>Curso voltado para profissionais da área de desenvolvimento <br>de jogos digitais, </b>ampliando conhecimento e <b>também para<br> iniciantes que desejam ingressar nesse mercado em<br> crescimento no mundo.</b> O aluno <b>aprenderá a planejar e <br> desenvolver jogos utilizando as melhores ferramentas, <br> tornando-o expert</b> em projeto e programação de games.</p>
            </div>
            <div class="content">
                <a class="suave click popup-cadastro">Quero Agendar minha <span class="arista upper">aula</span></a>
            </div>
        </div>
    </section>

    <section id="portal">
        <div class="item video" data-aos="fade-right" data-aos-once="true">
            <img src="<?php echo e(asset('assets/site/images/video-bg.jpg')); ?>" alt="Portal de alunos" />
            <a href="https://www.youtube.com/watch?v=uf_m3lJ0F-M" target="_blank"><i class="material-icons click suave" translate="no">play_circle</i></a>
        </div>
        <div class="item" data-aos="fade-left" data-aos-once="true">
            <div class="content">
                <h1>Portal do aluno</h1>
                <h2 class="arista">Imugi</h2>
                <p><b>Acesse agora seu Portal do aluno </b> e confira seu<br> Material Didático, Audiobooks, Notas,
                    Frequência e Pagamentos</p>
                <a href="/login" class="arista suave">acesse</a>
            </div>
        </div>
    </section>

    <section id="fp">
        <div class="content">
            <h2 data-aos="fade-right" data-aos-delay="100" data-aos-once="true">centro<br>autorizado <span>fp</span></h2>
            <p data-aos="fade-right" data-aos-delay="200" data-aos-once="true">A <b>Imugi é um Centro Autorizado FP que é uma EDTECH, Startup<br> de tecnologia educacional</b>. Tem
                como propósito <b>impactar vidas <br>através da educação</b> fornecendo os melhores conteúdos para
                <br>complementar a didática presencial das escolas parceiras.
            </p>
            <img src="<?php echo e(asset('assets/site/images/centro-logo-fp.png')); ?>" alt="Centro Autorizado" data-aos="fade-right" data-aos-delay="300" data-aos-once="true" />
        </div>
        <img src="<?php echo e(asset('assets/site/images/fp-bg.png')); ?>" alt="FP" />
    </section>

    <section id="depoimentos">
        <h2 data-aos="fade-up" data-aos-once="true">O que dizem nossos alunos ;)</h2>
        <ul>
            <li data-aos="fade-right" data-aos-delay="100" data-aos-once="true">
                <p>"A escola é maravilhosa e possui ótimos professores."</p>
                <h6>- Ana Vitória</h6>
            </li>
            <li data-aos="fade-right" data-aos-delay="200" data-aos-once="true">
                <p>"Ambiente agradável e tecnológico com ótimos cursos."</p>
                <h6>- Pedro Henrique</h6>
            </li>
            <li data-aos="fade-right" data-aos-delay="300" data-aos-once="true">
                <p>"Referência em curso de inglês com computação gráfica, uma experiência que transformou minha vida
                    profissional."</p>
                <h6>- Vitor Rodrigues</h6>
            </li>
        </ul>
    </section>

    <div id="popup-cadastro" class="suave">
        <i class="material-icons click fechar" translate="no">close</i>
        <h3>Quero ser aluno <span class="arista">Imugi</span></h3>
        <p>Preencha corretamente as informações abaixo e retornaremos o seu contato o mais breve possível.</p>
        <form id="formAluno">
            <input type="text" name="nome" placeholder="Nome" required />
            <input type="text" name="email" placeholder="Email" required />
            <div class="duplo">
                <input type="text" name="whatsapp" placeholder="Whatsapp" required />
                <input type="text" name="telefone" placeholder="Telefone(opcional)" />
            </div>
            <select name="como">
                <option value="#">Como conheceu a Imugi</option>
                <option value="Site">Site</option>
                <option value="Mídias Digitais">Mídias Digitais</option>
                <option value="Redes Sociais">Redes Sociais</option>
                <option value="Outro">Outro</option>
            </select>
            <select name="estado">
                <option value="#">Estado</option>
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
            <textarea name="mensagem" placeholder="Mensagem (Opicional)" max="200"></textarea>
            <button type="submit" class="suave click">Enviar</button>
        </form>
    </div>

</main>

<script>
    //INICIALIZADOR DAS ANIMAÇÕES
    AOS.init();

    //FORM ALUNO
    $("#formAluno input[name='whatsapp']").mask("(00) 00000-0000", {reverse: false});
    $("#formAluno input[name='telefone']").mask("(00) 0000-0000", {reverse: false});

    $(".popup-cadastro").click(function(){
        fecharCursoPopup();
        $("#popup-cadastro").addClass("active");
    });

    $("#popup-cadastro .fechar").click(function(){
        $("#popup-cadastro").removeClass("active");
    });

    $("#formAluno").submit(function(e){
        e.preventDefault();
        alerta("Enviando...");
    });

    //CURSOS
    $("#cursos a").click(function(){
        let popup = $(this).attr("pp");
        switch(popup){
            case "cgfly":
                fecharCursoPopup();
                $(".cgfly").addClass("active");
            break;
            case "codeblock":
                fecharCursoPopup();
                $(".codeblock").addClass("active");
            break;
            case "gamerdev":
                fecharCursoPopup();
                $(".gamerdev").addClass("active");
            break;
        }
    });

    function fecharCursoPopup(){
        $(".cgfly, .codeblock, .gamerdev").removeClass("active");
    }
        
    $("#cursos .fechar").click(function(){
        fecharCursoPopup();
    });

    //PORTAL
    $("#portal .video i").click(function(){
        $("#portal .video-box iframe").prop("src", "https://www.youtube.com/embed/uf_m3lJ0F-M");
        $("#portal .video-box").addClass("active");
    });
</script>

<?php echo $__env->make('layouts.site.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.site.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\imugi2\resources\views/site/index.blade.php ENDPATH**/ ?>