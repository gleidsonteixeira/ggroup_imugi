@extends('layouts.site.template')
@section('titulo','CG Fly')
@section('conteudo')
@include('layouts.site.menu')

<main>

    <section id="banner">
        <img src="{{ asset('assets/site/images/banner-cgfly.png') }}" alt="Bem-vindo"/>
        <div class="content">
            <h5>Curso</h5>
            <img src="{{ asset('assets/site/images/cgfly-logo.png') }}" alt="CG Fly"/>
            <p><b>Agende uma aula experimental</b> na escola mais próxima!</p>
            <form id="formAgenda">
                <input type="text" name="nome" placeholder="Nome" />
                <input type="text" name="telefone" placeholder="Telefone" />
                <select name="unidade">
                    <option value="#">Escolha a Imugi mais próxima ;)</option>
                </select>
                <button type="submit" class="suave click">Quero agendar<b>a minha aula</b></button>
            </form>
            <h6>*Nossa equipe irá entrar em contato para marcar o melhor horário para agendar sua aula</h6>
        </div>
    </section>

    <section id="vantagens-curso">
        <div class="item" data-aos="fade-right" data-aos-once="true">
            <img src="{{ asset('assets/site/images/cgfly-icon1.png') }}" alt="3 módulos">
            <h5 class="arista">3 Módulos</h5>
        </div>
        <div class="item" data-aos="fade-right" data-aos-once="true" data-aos-delay="300">
            <img src="{{ asset('assets/site/images/cgfly-icon2.png') }}" alt="32 meses">
            <h5 class="arista">32 Meses</h5>
        </div>
        <div class="item" data-aos="fade-right" data-aos-once="true" data-aos-delay="600">
            <img src="{{ asset('assets/site/images/cgfly-icon3.png') }}" alt="384 horas">
            <h5 class="arista">384 Horas</h5>
        </div>
        <div class="item" data-aos="fade-right" data-aos-once="true" data-aos-delay="900">
            <img src="{{ asset('assets/site/images/cgfly-icon4.png') }}" alt="idade mínima">
            <h5 class="arista">Idade Mínima <span>12 Anos</span></h5>
        </div>
    </section>

    <section id="etapas">
        <div class="content">
            <h2 data-aos="fade-right" data-aos-once="true">Seja CG Bilingue</h2>
            <p data-aos="fade-right" data-aos-once="true" data-aos-delay="100">Aprenda <b>Inglês e Computação Gráfica</b> na <span class="arista upper">Imugi</span></p>
            <h5 data-aos="fade-right" data-aos-once="true" data-aos-delay="200">Se prepare para o <br><span>mercado de trabalho internacional</span></h5>
            <div class="image image1" data-aos="fade-right" data-aos-once="true" data-aos-delay="300">
                <img src="{{ asset('assets/site/images/curso-cgfly-etapas1.png') }}" alt="CG Fly"/>
            </div>
            <div class="image image2" data-aos="fade-right" data-aos-once="true" data-aos-delay="400">
                <img src="{{ asset('assets/site/images/curso-cgfly-etapas2.png') }}" alt="CG Fly"/>
            </div>
            <div class="image image3" data-aos="fade-right" data-aos-once="true" data-aos-delay="500">
                <img src="{{ asset('assets/site/images/curso-cgfly-etapas3.png') }}" alt="CG Fly"/>
            </div>
        </div>
        <img src="{{ asset('assets/site/images/cgfly-etapas-bg.png') }}" alt="CG Fly"/>
    </section>
    
    <section id="descricao">
        <img src="{{ asset('assets/site/images/banner-computacao-grafica.png') }}" alt="CG"/>
        <div class="item" data-aos="fade-right" data-aos-once="true">
            <h2>Computação<br>Gráfica</h2>
            <p><b>Vivemos em um mundo digital,</b> onde a interatividade <br>está cada vez mais presente na vida das pessoas.</p>
            <p><b>Com as ferramentas certas do CG você irá dominar <br>esse universo.</b></p>
        </div>
        <div class="item" data-aos="fade-left" data-aos-once="true">
            <h2>Língua<br>inglesa</h2>
            <p><b>Inglês é a língua mais falada do mundo</b> por não <br>nativos. <b>70% das empresas internacionais do Brasil buscam <br>profissionais que falam inglês</b> podendo <br>oferecer salário 30% a 50% maior daqueles sem o idioma.</p>
        </div>
    </section>

    <section id="mercado">
        <div class="item" data-aos="fade-right" data-aos-once="true">
            <div class="content">
                <h3>Faça a escolha certa!</h3>
                <h2 class="upper">Tecnologia <br>e educação</h2>
                <h4>Mercado de Trabalho:</h4>
                <p>Quadrinhos, infografia, Diagramação, Publicidade, Ilustração, Fotografia, Moda, Arte Final, Impressão, Artes Gráficas, Direção de Arte, Designer Gráfico, Web Design, Animação 2D, Web Publish, Modelagem e Animação 3D, Texturização, Cinema e TV, Composição, Edição Audiovisual, Design de Games</p>
            </div>
        </div>
        <div class="item" data-aos="fade-left" data-aos-once="true">
            <img src="{{ asset('assets/site/images/mercado-bg.png') }}" alt=""/>
        </div>
    </section>

    <section id="extras">
        <ul>
            <li>
                <img src="{{ asset('assets/site/images/extra1.png') }}" alt="">
                <h6 class="arista upper">Material<br>didático</h6>
                <p><b>Altamente tecnológico e sempre atualizado </b>por professores atuantes no mercado.</p>
            </li>
            <li>
                <img src="{{ asset('assets/site/images/extra2.png') }}" alt="">
                <h6 class="arista upper">Central <br>de estágios</h6>
                <p><b>Realiza uma ponte </b>entre nossos alunos e o <b>mercado de trabalho</b>.</p>
            </li>
            <li>
                <img src="{{ asset('assets/site/images/extra3.png') }}" alt="">
                <h6 class="arista upper">Programa<br>aprimorar</h6>
                <p><b>Cronograma de palestras extracurriculares </b>com conteúdos <b>necessários para uma carreira profissional </b>abordados interdisciplinarmente.</p>
            </li>
            <li>
                <img src="{{ asset('assets/site/images/extra4.png') }}" alt="">
                <h6 class="arista upper">Reposição<br>de aula</h6>
                <p><b>Os alunos receberão aulas de reposição </b>para faltas justificadas e todo um <b>acompanhamento pedagógico </b>no decorrer do curso.</p>
            </li>
        </ul>
    </section>

</main>

<script>
    //INICIALIZADOR DAS ANIMAÇÕES
    AOS.init();
</script>

@include('layouts.site.footer')
@endsection