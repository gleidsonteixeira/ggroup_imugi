@extends('layouts.template')
@section('titulo','Corel Draw | Aula 16 – PowerTRACE')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="photoshop-corel" data-unidade="unidade2" data-etapa="aula33">
			<h3 class="barlow">COREL DRAW</h3>
			 <div class="clear"></div>
            <h5 class="barlow">Aula 16 – PowerTRACE </h5>
                <figure>
                    <img src="{{ asset('assets/img/photoshop/corel/aula16/imagem1.jpg') }}" alt="guia" style="width:55%!important; margin: 0 auto;" >
                </figure>
            <div style="margin-top:30px">
            <div class="metade esquerda">
                <figure>
                    <img src="{{ asset('assets/img/photoshop/corel/aula16/imagem2.jpg') }}" alt="guia" style="width:75%!important;" >
                </figure>
            </div>
            <div class="metade direita">
               <p>Ao lado temos duas imagems a foto original a esquerda e a direita o resultado 
               utilizando os controles do PowerTRACE.</p>
               <p><strong> Modo de visualização aperfeiçoado. </strong></p>
               <p>Abaixo temos as mesmas imagens porem no modo de exibição de aramado onde é possível
                  notar os detalhes da vetorização.</p>
                <p>Nota para melhor aproveitamento do efeito você pode refi nar depois desagrupando os
                 objetos e misturando as formas para uma vetorização mais proxima ao real...</p>
            </div>
            <div class="clear"></div>
            <div style="margin-top:16px">
                <h5 class="barlow">Atividades</h5>
                <p>Faça a vetorização de uma ou mais imagens diponibilizadas pelo professor(a) e após salve em .cdr
Após uma ou mais imagens vetorizadas faça uma composição de imagens criando uma arte com diferentes
tipos de vetores, modificações e tamanhos.</p>  
<p>O CorelDRAW permite inserir códigos QR (Quick Response) com informações integradas, como um endereço
da Web, endereço de e-mail, número de telefone, mensagem de texto, localização geográfica ou texto simples.
Após inserir um código QR, você pode editá-lo e validá-lo.</p>
<p>Utilizando a barra de menus abaixo segue o caminho para insirir o Código QR, você também pode personalizar
o seu Código QR criando preenchimentos personalizados.</p>
                <figure>
                    <img src="{{ asset('assets/img/photoshop/corel/aula16/imagem3.jpg') }}" alt="guia" style="width:75%!important;" >
                </figure>
                <p>Painel de propriedades para personalizar e aplicar configurações do seu Código QR.</p>
            </div>
            <div class="clear"></div>
            <div style="margin-top:30px">
            <div class="metade esquerda">
                <figure>
                    <img src="{{ asset('assets/img/photoshop/corel/aula16/imagem4.jpg') }}" alt="guia" style="width:95%!important;" >
                </figure>
            </div>
            <div class="metade direita">
               <p>Posicione a camera do seu smartphone ou utilize um aplicativo
                    que leia QRcode, para acessar o código ao lado.</p>
                <p>Ao lado note um exemplo de código QR personalizado.</p>
                <p><strong> Nota </strong> não esqueça de validar o Código QR sempre que fi nalinaz as
                    edições, caso contrário o código não irá funcionar.</p>
            </div>
            <div class="clear"></div>
            <p style="margin-top:30px;"><strong> Os códigos QR podem ser utilizados para: </strong></p>
            <p><strong> URL: </strong> Utilizar endereços de sites da internet ou websites.</p>
            <p><strong> E-mail: </strong> Utilizar endereços de e-mails e até gerar e-mail em branco.</p>
            <p><strong> Número de telefone: </strong> Utilizar número de telefones, dependendo do tipo de leitor
de QRcode pode ligar diretamente.</p>
<p> <strong> SMS (Short Message Service): </strong> Utilizar o serviço de sms utilizando um número de telefone, dependendo
do tipo de leitor de QRcode pode enviar mensagem para o número de telefone especificado.</p>
<p><strong> Contato: </strong> Utilizar informações de contato em formato vCard ou meCard. Na caixa de listagem Tipo de cartão
de contato, escolha vCard ou meCard e digite as informações de contato nas caixas apropriadas. dependendo
do tipo de leitor de QRcode pode ser automaticamente adicionadas ao livro de endereços em seu telefone.</p>
        </div>
    </div>
</main>

<script>
	activeMenu();
</script>

@endsection
