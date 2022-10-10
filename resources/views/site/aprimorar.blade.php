@extends('layouts.site.template')
@section('titulo','Aprimorar')
@section('conteudo')
@include('layouts.site.menu')

<main>

    <section id="aprimorar-banner">
        <img src="{{ asset('assets/site/images/banner-aprimorar.png') }}" alt="Bem-vindo" />
        <div class="content">
            <img src="{{ asset('assets/site/images/logo_aprimorar.png') }}" alt="Aprimorar" />
            <p><b>A oportunidade</b> para você <br> iniciar sua <b>carreira profissional.</b></p>
        </div>
    </section>

    <section id="aprimorar-vantagens">
        <div class="item">
            <img src="{{ asset('assets/site/images/aluna2-imugi.png') }}" alt="Aluna" data-aos="fade" data-aos-once="true" />
            <div class="bandeiras">
                <img src="{{ asset('assets/site/images/bandeira1.png') }}" alt="Inglaterra" data-aos="fade-right" data-aos-delay="300" data-aos-once="true" />
                <img src="{{ asset('assets/site/images/bandeira2.png') }}" alt="EUA" data-aos="fade-right" data-aos-delay="500" data-aos-once="true" />
                <img src="{{ asset('assets/site/images/bandeira3.png') }}" alt="Espanhol" data-aos="fade-right" data-aos-delay="700" data-aos-once="true" />
            </div>
        </div>
        <div class="item">
            <div class="content" data-aos="fade" data-aos-once="true">
                <h2 class="upper">Programa de orientação<br> para o mercado de trabalho</h2>
                <p><b>Um dos grandes diferenciais da Imugi</b> é o exclusivo <b>programa<br> de orientação</b> para o mercado de trabalhoque tem como<br> objetivo: <b>Indicar e, sempre que possível, encaminhar alunos<br> para empresas parceiras,</b> bem como orientá-los a se portar<br> nas entrevistas de emprego.</p>
                <p><b>Os alunos são preparados</b> para disputar as vagas do mercado<br> de trabalho com <b>seriedade e profissionalismo.</b></p>
            </div>
        </div>
    </section>

    <section id="aprimorar-como">
        <h2 class="upper">Como Funciona?</h2>
        <ul>
            <li data-aos="fade-left" data-aos-delay="300" data-aos-once="true">
                <span>1º</span>
                <p class="arista upper">inscrição<br>na escola</p>
            </li>
            <li data-aos="fade-left" data-aos-delay="500" data-aos-once="true">
                <span>2º</span>
                <p class="arista upper">ciclo<br>de palestras</p>
            </li>
            <li data-aos="fade-left" data-aos-delay="700" data-aos-once="true">
                <span>3º</span>
                <p class="arista upper">cadastro<br>do currículo</p>
            </li>
            <li data-aos="fade-left" data-aos-delay="900" data-aos-once="true">
                <span>4º</span>
                <p class="arista upper">entrevista<br>de emprego</p>
            </li>
            <li data-aos="fade-left" data-aos-delay="1200" data-aos-once="true">
                <span>5º</span>
                <p class="arista upper">mercado<br>de trabalho</p>
            </li>
        </ul>
    </section>

    <section id="aprimorar-alunos">
        <h2 class="upper">Alunos Encaminhados</h2>
        <div class="content">
            <div class="click prev">
                <img src="{{ asset('assets/site/images/prev.png') }}" alt="Anterior" class="suave" />
            </div>
            <div class="carrosel">
                <ul>
                    <li>
                        <img src="{{ asset('assets/site/images/bandeira1.png') }}" alt="Aluno" />
                    </li>
                    <li>
                        <img src="{{ asset('assets/site/images/bandeira1.png') }}" alt="Aluno" />
                    </li>
                    <li>
                        <img src="{{ asset('assets/site/images/bandeira1.png') }}" alt="Aluno" />
                    </li>
                    <li>
                        <img src="{{ asset('assets/site/images/bandeira1.png') }}" alt="Aluno" />
                    </li>
                    <li>
                        <img src="{{ asset('assets/site/images/bandeira1.png') }}" alt="Aluno" />
                    </li>
                    <li>
                        <img src="{{ asset('assets/site/images/bandeira1.png') }}" alt="Aluno" />
                    </li>
                </ul>
            </div>
            <div class="click next">
                <img src="{{ asset('assets/site/images/next.png') }}" alt="Próximo" class="suave" />
            </div>
        </div>
    </section>

    <section id="aprimorar-como">
        <h2 class="upper">Como Funciona?</h2>
        <ul>
            <li data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
                <img src="{{ asset('assets/site/images/atuacao1.png') }}" alt="">
                <p class="arista upper">publicidade</p>
            </li>
            <li data-aos="fade-up" data-aos-delay="500" data-aos-once="true">
                <img src="{{ asset('assets/site/images/atuacao2.png') }}" alt="">
                <p class="arista upper">ilustração</p>
            </li>
            <li data-aos="fade-up" data-aos-delay="700" data-aos-once="true">
                <img src="{{ asset('assets/site/images/atuacao3.png') }}" alt="">
                <p class="arista upper">fotográfia</p>
            </li>
            <li data-aos="fade-up" data-aos-delay="900" data-aos-once="true">
                <img src="{{ asset('assets/site/images/atuacao4.png') }}" alt="">
                <p class="arista upper">design<br>gráfico</p>
            </li>
            <li data-aos="fade-up" data-aos-delay="1200" data-aos-once="true">
                <img src="{{ asset('assets/site/images/atuacao5.png') }}" alt="">
                <p class="arista upper">arte<br>final</p>
            </li>
        </ul>
        <ul>
            <li data-aos="fade-up" data-aos-delay="1500" data-aos-once="true">
                <img src="{{ asset('assets/site/images/atuacao6.png') }}" alt="">
                <p class="arista upper">edição<br>de fotos</p>
            </li>
            <li data-aos="fade-up" data-aos-delay="1700" data-aos-once="true">
                <img src="{{ asset('assets/site/images/atuacao7.png') }}" alt="">
                <p class="arista upper">direção<br>de arte</p>
            </li>
            <li data-aos="fade-up" data-aos-delay="1900" data-aos-once="true">
                <img src="{{ asset('assets/site/images/atuacao8.png') }}" alt="">
                <p class="arista upper">web<br>design</p>
            </li>
            <li data-aos="fade-up" data-aos-delay="2100" data-aos-once="true">
                <img src="{{ asset('assets/site/images/atuacao9.png') }}" alt="">
                <p class="arista upper">edição<br>audiovisual</p>
            </li>
            <li data-aos="fade-up" data-aos-delay="2300" data-aos-once="true">
                <img src="{{ asset('assets/site/images/atuacao10.png') }}" alt="">
                <p class="arista upper">social<br>media</p>
            </li>
        </ul>
    </section>

    <section id="aprimorar-conquistas">
        <div class="content" data-aos="fade-right" data-aos-once="true">
            <h2 class="upper">Estamos aqui para <br>ajudar na sua conquista</h2>
            <p><b>Torne seu currículo mais atraente</b> com o que há <br>de mais moderno e tecnológico.</p>
        </div>
        <img src="{{ asset('assets/site/images/conquista-banner.png') }}" alt="conquista" data-aos="fade-right" data-aos-delay="300" data-aos-once="true">
        <ul class="numeros">
            <li data-aos="fade-left" data-aos-delay="1200" data-aos-once="true">
                <h3 class="upper">57 mil</h3>
                <h4>Vagas disponíveis</h4>
            </li>
            <li data-aos="fade-left" data-aos-delay="900" data-aos-once="true">
                <h3 class="upper">+5180</h3>
                <h4>Alunos contratados</h4>
            </li>
            <li data-aos="fade-left" data-aos-delay="600" data-aos-once="true">
                <h3 class="upper">+6240</h3>
                <h4>Alunos encamihados</h4>
            </li>
        </ul>
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
                <p>"Referência em curso de inglês com computação gráfica, uma experiência que transformou minha vida profissional."</p>
                <h6>- Vitor Rodrigues</h6>
            </li>
        </ul>
    </section>

</main>

<script>
    //INICIALIZADOR DAS ANIMAÇÕES
    AOS.init();

    let carroselItems = $("#aprimorar-alunos li").length;
    let carroselSizeItem = $("#aprimorar-alunos li").width();
    let window_width = $(window).width();
    if(window_width > 400){
        $("#aprimorar-alunos ul").width(carroselSizeItem * carroselItems);
        $("#aprimorar-alunos .carrosel").width(carroselSizeItem * 4);
    }else{
        $("#aprimorar-alunos ul").width(200 * carroselItems);
        $("#aprimorar-alunos .carrosel").width(200);
    }
    $("#aprimorar-alunos .next").click(function(e){
        e.stopImmediatePropagation();
        var left = $("#aprimorar-alunos .carrosel").scrollLeft();
        if(window_width > 400){
            $("#aprimorar-alunos .carrosel").animate({
                scrollLeft: (left + carroselSizeItem),
            }, 300);
        }else{
            $("#aprimorar-alunos .carrosel").animate({
                scrollLeft: (left + 200),
            }, 300);
        }
    });
    $("#aprimorar-alunos .prev").click(function(e){
        e.stopImmediatePropagation();
        var left = $("#aprimorar-alunos .carrosel").scrollLeft();
        if(window_width > 400){
            $("#aprimorar-alunos .carrosel").animate({
                scrollLeft: (left - carroselSizeItem),
            }, 300);
        }else{
            $("#aprimorar-alunos .carrosel").animate({
                scrollLeft: (left - 200),
            }, 300);
        }
    });


</script>

@include('layouts.site.footer')
@endsection