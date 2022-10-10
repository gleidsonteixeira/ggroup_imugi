
<?php $__env->startSection('titulo','Depoimentos'); ?>
<?php $__env->startSection('conteudo'); ?>
<?php echo $__env->make('layouts.site.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>

    <section id="depoimentos-banner">
        <div class="item" data-aos="fade-left" data-aos-once="true">
            <div class="content">
                <h1 class="upper">O que nossos <br>alunos dizem sobre a </h1>
                <h2 class="arista">Imugi</h2>
            </div>
        </div>
        <div class="item" data-aos="fade-right" data-aos-once="true">
            <img src="<?php echo e(asset('assets/site/images/aluna-imugi.png')); ?>" alt="aluna imugi" />
        </div>
    </section>

    <section id="depoimentos-video">
        <div class="item video">
            <img src="<?php echo e(asset('assets/site/images/video-bg.jpg')); ?>" alt="Portal de alunos" />
            <a href="https://www.youtube.com/watch?v=oS2BG66RVic" target="_blank"><i class="material-icons click suave" translate="no">play_circle</i></a>
        </div>
        <div class="item">
            <img src="<?php echo e(asset('assets/site/images/prev.png')); ?>" alt="Anterior" class="suave click prev" />
            <ul>
                <li position="1" class="suave active">
                    <p>"Estou no meu primeiro módulo do CG Fly na Imugi aprendendo Design. Cada vez mais motivado com vontade de aprender, através dos professores, a me tornar um profissional diferenciado."</p>
                    <h6>Marcone Aires</h6>
                </li>
                <li position="2" class="suave">
                    <p>"Desde de quando comecei o curso até agora a minha evolução foi muito boa. Saí de um completo leigo tanto na área da computação gráfica quanto no inglês para uma pessoa que hoje enxerga progresso nessas habilidades."</p>
                    <h6>Jose Walter</h6>
                </li>
                <li position="3" class="suave">
                    <p>"Tenho 19 anos e através dos cursos da Imugi aprendi: modelagem para games, tratamento de imagens, edição de vídeo e muito mais . Foram com esses conhecimentos que consegui entrar no mercado de trabalho."</p>
                    <h6>Guilherme Gomes</h6>
                </li>
                <li position="4" class="suave">
                    <p>"Obtive facilmente minha entrada no mercado de trabalho como Designer, encaminhado pelo Programa Aprimorar que é o setor responsável por construir uma ponte entre nós alunos e as várias oportunidades existentes."</p>
                    <h6>Henrique Alexandro</h6>
                </li>
                <li position="5" class="suave">
                    <p>"A aplicação prática e a ementa do curso são ótimas. Ele é dividido em três níveis: Iniciante, Médio e Avançado, possibilitando nivelamento entre os alunos e um maior aproveitamento das aulas nas turmas."</p>
                    <h6>Thiago Brew</h6>
                </li>
                <li position="6" class="suave">
                    <p>"Acho o curso bastante completo tanto o de Design como o de Inglês. O que aprendemos em um, aplicamos no outro, como: edição de vídeo, fotografia, criação de jogos, modelagem 3D, programação e tratamento de imagens. Todos em softwares internacionais . A diversidade de conteúdos possibilita a ampliação das oportunidades para minha entrada no mercado de trabalho."</p>
                    <h6>Chistian Alves</h6>
                </li>
            </ul>
            <img src="<?php echo e(asset('assets/site/images/next.png')); ?>" alt="Próximo" class="suave click next" />
        </div>
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

    //DEPOIMENTOS
    $("#depoimentos-video .next").click(function(){
        let position = parseInt($("#depoimentos-video li.active").attr("position"));
        let lis = $("#depoimentos-video li").length;
        if(position < lis){
            $("#depoimentos-video li").removeClass("active");
            $("#depoimentos-video li[position="+(position + 1)+"]").addClass("active");
        }
    });

    $("#depoimentos-video .prev").click(function(){
        let position = parseInt($("#depoimentos-video li.active").attr("position"));
        if(position > 1){
            $("#depoimentos-video li").removeClass("active");
            $("#depoimentos-video li[position="+(position - 1)+"]").addClass("active");
        }else{
            $("#depoimentos-video li").removeClass("active");
            $("#depoimentos-video li[position=1]").addClass("active");
        }
    });
    
</script>

<?php echo $__env->make('layouts.site.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.site.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\imugi2\resources\views/site/depoimentos.blade.php ENDPATH**/ ?>