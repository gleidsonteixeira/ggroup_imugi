@extends('layouts.portal.template')
@section('titulo','Portal do Aluno | Notas')
@section('conteudo')
@include('layouts.portal.menus.sidebar')

<div id="main-wrapper">
	<div id="main" class="ajaxable layout-wide">
    @include('layouts.portal.header')
	@if($aluno->turma == "")

		<div class="alert alert-warning" style="margin:0!important;">

    		<strong>Atenção!</strong> Para acesso completo ao portal aguarde o prazo de até 48h.

  		</div>

  	@endif
		<div  class="carousel slide">
			<div class="carousel-inner">

				<div class="item active">

				<a href="http://fpeduc.com/aluno-portal/{{ Auth::user()->name}}/{{ Auth::user()->email}}/{{ Auth::user()->matricula}}/@if($aluno->turma){{$aluno->turma->cod_unidade}}@else 0 @endif" target="_blank" style="background-color:#fff; margin-top:-20px;">

<input type="image" src="{{asset('assets/portal/images/aovivo/aovivo.jpg')}}" alt="Submit" style="width:100%;">

</a>

				</div>

			</div>
			<div class="carousel slide">
				<div class="carousel-inner">
					<div class="item active">
					    <img src="{{asset('assets/portal/images/notas.jpg')}}" alt="Notas">
					</div>
				</div>
			    <div class="be-section-pad clearfix" style="padding-top:10px;padding-bottom:40px; background-color: #ffffff;">
               		<div class="be-row be-wrap clear">
 					    <div class="col-md-6" style="margin-top: 90px;">
							@if(sizeOf($alunos) > 0)
								@foreach($alunos as $aluno)
									<h3><strong> Aluno(a): {{$aluno->nome}} </strong></h3>
									<h3><strong> Nome da Turma: {{$aluno->turma}} </h3>
									<h3><strong> Matricula: {{$aluno->matricula}} </h3>
									<h3><strong> Módulo: {{$aluno->curso}} </h3>
								@endforeach
							@else
							Suas infomações estão sendo processadas
							@endif
						</div>
					</div>
				</div>
			</div>
			
			<div class="be-section-pad clearfix" style="padding-top:10px;padding-bottom:40px; background-color: #ffffff;" id="table_notas">
				<div class="be-row be-wrap clear">
					<div class="col-lg-12" style="margin-top: 50px;">
						<table class="table table-striped  table-responsive">
							<thead>
								<tr class="title-table">
									<th>Modulos</th>
									<th style="text-align: center;">Prova Teórica</th>
									<th style="text-align: center;">Prova Prática</th>
									<th style="text-align: center;">Trabalhos</th>
									<th style="text-align: center;">Média</th>
								</tr>
							</thead>
							<tbody>
							@if(count(Auth::user()->notas) > 0)
								
								<tr>
									<th>PLAY GO</th>
									<td>{{ isset($boletim[0]["trabalho"]) ? $boletim[0]["trabalho"] : "--" }}</td>
									<td>{{ isset($boletim[0]["pratica"]) ? $boletim[0]["pratica"] : "--" }}</td>
									<td>{{ isset($boletim[0]["teorica"]) ? $boletim[0]["teorica"] : "--" }}</td>
									<td>{{ round(($boletim[0]["trabalho"] + $boletim[0]["pratica"] +$boletim[0]["teorica"]) / 3) }}</td>
								</tr>
								
								<tr>
									<th>PHOTOSHOP</th>
									<td>{{ $boletim[1]["trabalho"] > 0 ? $boletim[1]["trabalho"] : "--" }}</td>
									<td>{{ $boletim[1]["pratica"] > 0 ? $boletim[1]["pratica"] : "--" }}</td>
									<td>{{ $boletim[1]["teorica"] > 0 ? $boletim[1]["teorica"] : "--" }}</td>
									<td>{{ round(($boletim[1]["trabalho"] + $boletim[1]["pratica"] +$boletim[1]["teorica"]) / 3) }}</td>
								</tr>
								
								<tr>
									<th>DOMINATING</th>
									<td>{{ $boletim[2]["trabalho"] > 0 ? $boletim[2]["trabalho"] : "--" }}</td>
									<td>{{ $boletim[2]["pratica"] > 0 ? $boletim[2]["pratica"] : "--" }}</td>
									<td>{{ $boletim[2]["teorica"] > 0 ? $boletim[2]["teorica"] : "--" }}</td>
									<td>{{ round(($boletim[2]["trabalho"] + $boletim[2]["pratica"] +$boletim[2]["teorica"]) / 3) }}</td>
								</tr>
								
								<tr>
									<th>GAME AND ANIMATION</th>
									<td>{{ $boletim[3]["trabalho"] > 0 ? $boletim[3]["trabalho"] : "--" }}</td>
									<td>{{ $boletim[3]["pratica"] > 0 ? $boletim[3]["pratica"] : "--" }}</td>
									<td>{{ $boletim[3]["teorica"] > 0 ? $boletim[3]["teorica"] : "--" }}</td>
									<td>{{ round(($boletim[3]["trabalho"] + $boletim[3]["pratica"] +$boletim[3]["teorica"]) / 3) }}</td>
								</tr>
								
								<tr>
									<th>MASTER OF LANGUAGE</th>
									<td>{{ $boletim[4]["trabalho"] > 0 ? $boletim[4]["trabalho"] : "--" }}</td>
									<td>{{ $boletim[4]["pratica"] > 0 ? $boletim[4]["pratica"] : "--" }}</td>
									<td>{{ $boletim[4]["teorica"] > 0 ? $boletim[4]["teorica"] : "--" }}</td>
									<td>{{ round(($boletim[4]["trabalho"] + $boletim[4]["pratica"] +$boletim[4]["teorica"]) / 3) }}</td>
								</tr>
								
								<tr>
									<th>VIDEO EDITION</th>
									<td>{{ $boletim[5]["trabalho"] > 0 ? $boletim[5]["trabalho"] : "--" }}</td>
									<td>{{ $boletim[5]["pratica"] > 0 ? $boletim[5]["pratica"] : "--" }}</td>
									<td>{{ $boletim[5]["teorica"] > 0 ? $boletim[5]["teorica"] : "--" }}</td>
									<td>{{ round(($boletim[5]["trabalho"] + $boletim[5]["pratica"] +$boletim[5]["teorica"]) / 3) }}</td>
								</tr>
								
							@else
							<tr>
								<th colspan="5"><p class="text-center">Não Possue Notas</p></th>
							</tr>
							@endif
							</tbody>
						</table>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	@include('layouts.portal.footer')
</div>	

	<a href="#" id="back-to-top"><i class="font-icon icon-up-open-big"></i></a>

 @endsection