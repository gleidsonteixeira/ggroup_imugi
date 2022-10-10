<?php

Auth::routes();
Route::get('/', function () {
    return view('site.home.index');
});

Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('/login');
});

// ROTAS SITE
Route::namespace("Site")->group(function () {
    Route::get('/', 'SiteController@index')->name("site");
    Route::get('/cg-fly', 'SiteController@cgfly')->name("cgfly");
    Route::get('/depoimentos', 'SiteController@depoimentos')->name("depoimentos");
    Route::get('/aprimorar', 'SiteController@aprimorar')->name("aprimorar");
    Route::get('/unidades', 'SiteController@unidades')->name("unidades");
    Route::get('/seja-franqueado', 'SiteController@franqueado')->name("seja-franqueado");
    Route::get('/politica-de-privacidade', 'SiteController@politicas')->name("politicas");

});


Route::get('/aprovar', 'HomeController@aprovar')->name('aprovar');
Route::get('/franquia-imugi', 'HomeController@franquiaCota')->name('franquia-imugi');
Route::get('/cursos/cgfly', 'HomeController@cgfly')->name('cg-fly');
Route::get('/cursos/codeblock', 'HomeController@codeblock')->name('code-block');
Route::get('/site/programa-aprimorar', 'HomeController@aprimorar')->name('aprimorar');
Route::get('/site/depoimentos', 'HomeController@depoimentos')->name('depoimentos');
Route::get('/site/contato', 'ContatoController@siteContato')->name('siteContato');
Route::get('/site/portaldoaluno', 'HomeController@portalAluno')->name('portalAluno');
Route::get('/site/franquia', 'ContatoController@franquia')->name('franquia');
Route::post('/contato-aluno', 'ContatoController@contatoAluno')->name('alunoContato');
Route::post('/contato-franquia', 'ContatoController@contatoFranquia')->name('contatoFranquia');
Route::post('/enviar', 'ContatoController@enviar')->name('enviarContato');
Route::get('/site/politica-de-privacidade', 'ContatoController@privacidade')->name('privacidade');

// ROTAS PORTAL

Route::middleware(['auth', 'portal'])->group(function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/acesso-material', 'HomeController@acessomaterial')->name('home');
    Route::get('/portal', 'HomeController@homePortal')->name('portal');
    Route::get('/material', 'HomeController@materialDidatico')->name('material');
    Route::get('/nota', 'NotaController@index')->name('nota');
    Route::get('/notas', 'NotaController@notas')->name('notas');
    Route::post('/notas', 'NotaController@store');
    Route::get('/search/{matricula}', 'NotaController@search');
    Route::get('/frequencia', 'FrequenciaController@index')->name('frequencia');
    Route::get('/financeiro', 'FinanceiroController@index')->name('financeiro');
    Route::get('/contato', 'ContatoController@index')->name('contato');
    Route::get('/perfil', 'UserController@edit')->name('perfil');
    Route::post('/enviar-email', 'ContatoController@enviar');
    Route::post('/enviar-frequencia', 'FrequenciaController@enviar');
    Route::post('/atualizar-perfil/{id}', 'UserController@update');
    Route::get('/atualiza-senha','UserController@atualizaSenha');
});

// recuperar senha
Route::post('/api-recuperar', 'ApiUserController@recuperar')->name('recuperarSenha');
/******************************************************************Rotas Gestao Professor e Coordenador**************************************************************/

// Route::get('menus', 'AdminController@menusLista');
Route::get('gestao-frequencia', 'frequenciaController@listafrequencia');
// Route::resource('topicos', 'TopicoController');
// Route::resource('conteudos', 'ConteudoController');
// Route::resource('pdf', 'PdfController');
// Route::resource('usuarios', 'UserController');
// Route::resource('noticias', 'NoticiaController');

// Route::post('conteudoImagem', 'ConteudoController@subirImagem')->name('conteudoImagem');
// Route::post('conteudoAvaliacao', 'ConteudoController@foiUtil')->name('conteudoAvaliacao');
// Route::post('noticiaImagem', 'NoticiaController@subirImagem')->name('noticiaImagem');
// Route::get('noticia/{noticia_id}', 'NoticiaController@lerNoticia')->name('lerNoticia');


// Route::prefix('categorias')->name('categorias.')->group(function(){
//     Route::get('/', 'CategoriaController@index')->name('index');
//     Route::get('/{categoria_id}', 'CategoriaController@show')->name('show');
//     Route::post('/store', 'CategoriaController@store')->name('store');
//     Route::get('/destroy{categoria_id}', 'CategoriaController@destroy')->name('destroy');
// });

//paginas para campanha de leads
Route::get('/socio-investidor', 'ContatoController@socioInvestidor')->name('socio-investidor');
Route::get('/nosso-franqueado', 'ContatoController@nossoFranqueado')->name('nosso-franqueado');
Route::post('/contato-socio', 'ContatoController@contatoSocioInvestidor')->name('contatoSocio');
Route::post('/contato-franqueado', 'ContatoController@contatoFranqueado')->name('contatoFranqueado');

//todos os usuarios
Route::resource('/api-users', 'ApiUserController');
//usuario especifico de acordo login
Route::get('/api-login/{email}/{senha}', 'ApiUserController@login');
//recuperar senha do usuario especifico de acordo email
Route::get('/api-recuperar/{email}', 'ApiUserController@recuperar');
Route::post('/api-frequencia', 'ApiUserController@frequencia');
Route::post('/api-segundaVia', 'ApiUserController@segundaVia');
Route::get('/api-notas/{matricula}', 'ApiUserController@notas');

//Rotas API
Route::get('/api-leads/{unidade?}', 'ApiController@index');
Route::get('/api-leads-do-mes', 'ApiController@apiLeadsDoMes');
Route::get('/quantidade', 'ApiController@quantidade');
Route::get('unidades/{id}', 'ApiController@unidadeEstado');
Route::get('/api-users/{matricula?}', 'ApiController@apiAluno');
Route::post('/editar', 'ApiController@editar');
Route::get('/leads-estado', 'ApiController@leadsEstado');
Route::get('/leads-unidades/{estado?}', 'ApiController@leadsUnidade');
Route::post('/consultar-periodo', 'ApiController@carregarPeriodo');

// ROTA PAGINA 404
// Route::fallback('AdminController@notFound');

// ROTAS ADMIN
Route::namespace("Admin")->prefix("admin")->group(function () {
    //AUTENTICACAO
    Route::middleware(['auth', 'admin'])->group(function () {
    //DASHBOARD
    Route::get('/', 'AdminController@index')->name("admin");
    //CARGOS
    Route::get('/cargos', 'CargoController@index');
    Route::get('/cargos-list', 'CargoController@list');
    Route::post('/cargos', 'CargoController@store');
    Route::post('/cargos/{id}', 'CargoController@update');
    Route::delete('/cargos/{id}', 'CargoController@destroy');
    //UNIDADES
    Route::get('/unidades', 'UnidadeController@index');
    Route::get('/unidades/{id}', 'UnidadeController@show');
    Route::get('/unidades-list', 'UnidadeController@list');
    Route::post('/unidades', 'UnidadeController@store');
    Route::post('/unidades/{id}', 'UnidadeController@update');
    Route::delete('/unidades/{id}', 'UnidadeController@destroy');
    //FUNCIONARIOS
    Route::get('/funcionarios', 'FuncionarioController@index');
    Route::get('/funcionarios/add-cargo', 'FuncionarioController@addCargo');
    Route::get('/funcionarios-list', 'FuncionarioController@list');
    Route::post('/funcionarios', 'FuncionarioController@store');
    Route::post('/funcionarios/{id}', 'FuncionarioController@update');
    Route::delete('/funcionarios/{id}', 'FuncionarioController@destroy');
    });
});

// ROTAS RANKING
Route::namespace("Ranking")->prefix("ranking")->group(function () {
    //AUTENTICADO
    Route::middleware(['auth', 'ranking'])->group(function () {
        //RANKING
        Route::get('/', 'RankingController@index')->name("ranking");
        Route::get('/filtro/{de}/{ate}', 'RankingController@filtro');
        Route::get('/unidade/{id}', 'RankingController@unidade');
        Route::get('/unidade/{id}/filtro/{de}/{ate}', 'RankingController@unidadeFiltro');
        Route::get('/vendedores', 'RankingController@vendedores')->name("vendedores");
        Route::get('/vendedores/filtro/{de}/{ate}', 'RankingController@filtroVendedores');
        Route::get('/telemarketing', 'RankingController@telemarketing')->name("telemarketing");
        Route::get('/telemarketing/filtro/{de}/{ate}', 'RankingController@filtroTelemarketing');
        Route::get('/ciclos', 'RankingController@ciclos');
        //DADOS
        Route::get('/dados', 'DadoController@index');
        Route::get('/dados-list', 'DadoController@list');
        Route::post('/dados', 'DadoController@store');
        Route::post('/dados/{id}', 'DadoController@update');
        Route::delete('/dados/{id}', 'DadoController@destroy');
        //FUNCIONARIOS
        Route::get('/funcionarios', 'FuncionarioController@index');
        Route::get('/funcionarios-list', 'FuncionarioController@list');
        Route::post('/funcionarios', 'FuncionarioController@store');
        Route::post('/funcionarios/{id}', 'FuncionarioController@update');
        Route::delete('/funcionarios/{id}', 'FuncionarioController@destroy');
    });
});


// ROTAS APOSTILA

Route::get('/apostila1/{unidade}/{item}', "ApostilaController@apostila1")->name('apostila1');
Route::get('/apostila2/{unidade}/{item}', "ApostilaController@apostila2")->name('apostila2');
Route::get('/apostila3/{unidade}/{item}', "ApostilaController@apostila3")->name('apostila3');
Route::get('/apostila4/{unidade}/{item}', "ApostilaController@apostila4")->name('apostila4');
Route::get('/apostila5/{unidade}/{item}', "ApostilaController@apostila5")->name('apostila5');
Route::get('/apostila6/{unidade}/{item}', "ApostilaController@apostila6")->name('apostila6');

/* ROTAS PARA O CRUD APOSTILA 01 */
//UNIDADE 1
Route::post('/apostila1/unidade1/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade1/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade1/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade1/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade1/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade1/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 2
Route::post('/apostila1/unidade2/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade2/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade2/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade2/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade2/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade2/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 3
Route::post('/apostila1/unidade3/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade3/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade3/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade3/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade3/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade3/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 4
Route::post('/apostila1/unidade4/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade4/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade4/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade4/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade4/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade4/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 5
Route::post('/apostila1/unidade5/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade5/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade5/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade5/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade5/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade5/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 6
Route::post('/apostila1/unidade6/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade6/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade6/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade6/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade6/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade6/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 7
Route::post('/apostila1/unidade7/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade7/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade7/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade7/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade7/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade7/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 8
Route::post('/apostila1/unidade8/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade8/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade8/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade8/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade8/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade8/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 9
Route::post('/apostila1/unidade9/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade9/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade9/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade9/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade9/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade9/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 10
Route::post('/apostila1/unidade10/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade10/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade10/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade10/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade10/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade10/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 11
Route::post('/apostila1/unidade11/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade11/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade11/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade11/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade11/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade11/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 12
Route::post('/apostila1/unidade12/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade12/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade12/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade12/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade12/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade12/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 13
Route::post('/apostila1/unidade13/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade13/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade13/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade13/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade13/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade13/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 14
Route::post('/apostila1/unidade14/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade14/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade14/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade14/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade14/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade14/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 15
Route::post('/apostila1/unidade15/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade15/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade15/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade15/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade15/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade15/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 16
Route::post('/apostila1/unidade16/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade16/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade16/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade16/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade16/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade16/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 17
Route::post('/apostila1/unidade17/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade17/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade17/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade17/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade17/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade17/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 18
Route::post('/apostila1/unidade18/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade18/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade18/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade18/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade18/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade18/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 19
Route::post('/apostila1/unidade19/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade19/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade19/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade19/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade19/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade19/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 20
Route::post('/apostila1/unidade20/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade20/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade20/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade20/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade20/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade20/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 21
Route::post('/apostila1/unidade21/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade21/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade21/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade21/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade21/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade21/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 22
Route::post('/apostila1/unidade22/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade22/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade22/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade22/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade22/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade22/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 23
Route::post('/apostila1/unidade23/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade23/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade23/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade23/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade23/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade23/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 24
Route::post('/apostila1/unidade24/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade24/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade24/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade24/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade24/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade24/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 25
Route::post('/apostila1/unidade25/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade25/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade25/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade25/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade25/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade25/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 26
Route::post('/apostila1/unidade26/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade26/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade26/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade26/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade26/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade26/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 27
Route::post('/apostila1/unidade27/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade27/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade27/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade27/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade27/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade27/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 28
Route::post('/apostila1/unidade28/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade28/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade28/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade28/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade28/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade28/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 29
Route::post('/apostila1/unidade29/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade29/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade29/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade29/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade29/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade29/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 30
Route::post('/apostila1/unidade30/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade30/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade30/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade30/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade30/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade30/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 31
Route::post('/apostila1/unidade31/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade31/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade31/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade31/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade31/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade31/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 32
Route::post('/apostila1/unidade32/grammar/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade32/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade32/listening/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade32/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila1/unidade32/understanding/respostas', 'RespostaController@store');
Route::get('/apostila1/unidade32/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

/* ROTAS PARA O CRUD APOSTILA 02 */
//UNIDADE 1
Route::post('/apostila2/unidade1/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade1/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade1/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade1/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade1/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade1/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 2
Route::post('/apostila2/unidade2/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade2/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade2/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade2/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade2/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade2/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 3
Route::post('/apostila2/unidade3/vocabulary/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade3/vocabulary/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade3/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade3/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade3/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade3/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade3/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade3/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 4
Route::post('/apostila2/unidade4/vocabulary/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade4/vocabulary/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade4/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade4/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade4/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade4/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade4/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade4/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 5
Route::post('/apostila2/unidade5/vocabulary/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade5/vocabulary/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade5/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade5/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade5/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade5/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade5/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade5/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 6
Route::post('/apostila2/unidade6/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade6/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade6/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade6/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade6/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade6/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 7
Route::post('/apostila2/unidade7/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade7/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade7/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade7/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade7/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade7/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 8
Route::post('/apostila2/unidade8/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade8/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade8/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade8/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade8/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade8/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 9
Route::post('/apostila2/unidade9/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade9/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade9/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade9/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade9/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade9/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 10
Route::post('/apostila2/unidade10/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade10/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade10/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade10/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade10/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade10/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 11
Route::post('/apostila2/unidade11/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade11/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade11/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade11/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade11/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade11/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 12
Route::post('/apostila2/unidade12/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade12/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade12/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade12/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade12/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade12/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 13
Route::post('/apostila2/unidade13/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade13/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade13/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade13/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade13/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade13/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 14
Route::post('/apostila2/unidade14/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade14/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade14/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade14/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade14/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade14/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 15
Route::post('/apostila2/unidade15/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade15/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade15/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade15/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade15/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade15/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 16
Route::post('/apostila2/unidade16/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade16/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade16/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade16/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade16/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade16/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 17
Route::post('/apostila2/unidade17/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade17/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade17/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade17/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade17/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade17/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 18
Route::post('/apostila2/unidade18/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade18/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade18/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade18/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade18/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade18/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 19
Route::post('/apostila2/unidade19/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade19/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade19/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade19/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade19/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade19/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 20
Route::post('/apostila2/unidade20/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade20/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade20/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade20/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade20/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade20/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 21
Route::post('/apostila2/unidade21/vocabulary/respostas', 'RespostaController@store');
Route::get('/apostila2/unidad21/vocabulary/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade21/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade21/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade21/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade21/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade21/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade21/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 22
Route::post('/apostila2/unidade22/vocabulary/respostas', 'RespostaController@store');
Route::get('/apostila2/unidad22/vocabulary/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade22/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade22/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade22/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade22/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade22/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade22/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 23
Route::post('/apostila2/unidade23/vocabulary/respostas', 'RespostaController@store');
Route::get('/apostila2/unidad23/vocabulary/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade23/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade23/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade23/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade23/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade23/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade23/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 24
Route::post('/apostila2/unidade24/vocabulary/respostas', 'RespostaController@store');
Route::get('/apostila2/unidad24/vocabulary/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade24/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade24/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade24/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade24/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade24/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade24/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 25
Route::post('/apostila2/unidade25/vocabulary/respostas', 'RespostaController@store');
Route::get('/apostila2/unidad25/vocabulary/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade25/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade25/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade25/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade25/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade25/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade25/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 26
Route::post('/apostila2/unidade26/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade26/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade26/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade26/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade26/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade26/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 27
Route::post('/apostila2/unidade27/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade27/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade27/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade27/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade27/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade27/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 28
Route::post('/apostila2/unidade28/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade28/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade28/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade28/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade28/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade28/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 29
Route::post('/apostila2/unidade29/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade29/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade29/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade29/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade29/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade29/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 30
Route::post('/apostila2/unidade30/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade30/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade30/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade30/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade30/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade30/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 31
Route::post('/apostila2/unidade31/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade31/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade31/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade31/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade31/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade31/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 32
Route::post('/apostila2/unidade32/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade32/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade32/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade32/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade32/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade32/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 33
Route::post('/apostila2/unidade33/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade33/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade33/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade33/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade33/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade33/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 34
Route::post('/apostila2/unidade34/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade34/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade34/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade34/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade34/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade34/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 35
Route::post('/apostila2/unidade35/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade35/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade35/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade35/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade35/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade35/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 36
Route::post('/apostila2/unidade36/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade36/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade36/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade36/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade36/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade36/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 37
Route::post('/apostila2/unidade37/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade37/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade37/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade37/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade37/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade37/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 38
Route::post('/apostila2/unidade38/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade38/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade38/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade38/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade38/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade38/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 39
Route::post('/apostila2/unidade39/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade39/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade39/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade39/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade39/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade39/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 40
Route::post('/apostila2/unidade40/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade40/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade40/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade40/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade40/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade40/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 41
Route::post('/apostila2/unidade41/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade41/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade41/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade41/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade41/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade41/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 42
Route::post('/apostila2/unidade42/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade42/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade42/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade42/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade42/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade42/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 43
Route::post('/apostila2/unidade43/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade43/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade43/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade43/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade43/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade43/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 44
Route::post('/apostila2/unidade44/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade44/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade44/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade44/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade44/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade44/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 45
Route::post('/apostila2/unidade45/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade45/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade45/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade45/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade45/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade45/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 46
Route::post('/apostila2/unidade46/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade46/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade46/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade46/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade46/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade46/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 47
Route::post('/apostila2/unidade47/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade47/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade47/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade47/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade47/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade47/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 48
Route::post('/apostila2/unidade48/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade48/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade48/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade48/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade48/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade48/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 49
Route::post('/apostila2/unidade49/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade49/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade49/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade49/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade49/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade49/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 50
Route::post('/apostila2/unidade50/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade50/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade50/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade50/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade50/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade50/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 51
Route::post('/apostila2/unidade51/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade51/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade51/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade51/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade51/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade51/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 52
Route::post('/apostila2/unidade52/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade52/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade52/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade52/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade52/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade52/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 53
Route::post('/apostila2/unidade53/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade53/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade53/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade53/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade53/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade53/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 54
Route::post('/apostila2/unidade54/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade54/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade54/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade54/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade54/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade54/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 55
Route::post('/apostila2/unidade55/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade55/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade55/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade55/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade55/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade55/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 56
Route::post('/apostila2/unidade56/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade56/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade56/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade56/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade56/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade56/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 57
Route::post('/apostila2/unidade57/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade57/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade57/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade57/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade57/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade57/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 58
Route::post('/apostila2/unidade58/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade58/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade58/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade58/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade58/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade58/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 59
Route::post('/apostila2/unidade59/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade59/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade59/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade59/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade59/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade59/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 60
Route::post('/apostila2/unidade60/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade60/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade60/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade60/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade60/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade60/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 61
Route::post('/apostila2/unidade61/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade61/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade61/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade61/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade61/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade61/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 62
Route::post('/apostila2/unidade62/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade62/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade62/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade62/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade62/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade62/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 63
Route::post('/apostila2/unidade63/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade63/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade63/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade63/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade63/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade63/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 64
Route::post('/apostila2/unidade64/grammar/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade64/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade64/listening/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade64/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila2/unidade64/understanding/respostas', 'RespostaController@store');
Route::get('/apostila2/unidade64/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

/***********************************************************************************************************************************************/

/* ROTAS PARA O CRUD APOSTILA 03 */
//UNIDADE 1
Route::post('/apostila3/unidade1/grammar/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade1/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade1/pronunciation/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade1/pronunciation/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade1/listening/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade1/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade1/understanding/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade1/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 2
Route::post('/apostila3/unidade2/grammar/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade2/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade2/pronunciation/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade2/pronunciation/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade2/listening/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade2/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade2/understanding/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade2/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 3
Route::post('/apostila3/unidade3/grammar/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade3/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade3/pronunciation/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade3/pronunciation/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade3/listening/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade3/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade3/understanding/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade3/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 4
Route::post('/apostila3/unidade4/grammar/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade4/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade4/pronunciation/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade4/pronunciation/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade4/listening/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade4/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade4/understanding/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade4/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 5
Route::post('/apostila3/unidade5/grammar/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade5/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade5/pronunciation/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade5/pronunciation/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade5/listening/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade5/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade5/understanding/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade5/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');
//UNIDADE 6
Route::post('/apostila3/unidade6/grammar/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade6/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade6/pronunciation/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade6/pronunciation/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade6/listening/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade6/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade6/understanding/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade6/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');
//UNIDADE 7
Route::post('/apostila3/unidade7/grammar/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade7/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade7/pronunciation/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade7/pronunciation/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade7/listening/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade7/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade7/understanding/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade7/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');
//UNIDADE 8
Route::post('/apostila3/unidade8/grammar/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade8/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade8/pronunciation/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade8/pronunciation/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade8/listening/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade8/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade8/understanding/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade8/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');
//UNIDADE 9
Route::post('/apostila3/unidade9/grammar/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade9/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade9/pronunciation/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade9/pronunciation/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade9/listening/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade9/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade9/understanding/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade9/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');
//UNIDADE 10
Route::post('/apostila3/unidade10/grammar/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade10/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade10/pronunciation/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade10/pronunciation/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade10/listening/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade10/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade10/understanding/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade10/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');
//UNIDADE 11
Route::post('/apostila3/unidade11/grammar/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade11/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade11/pronunciation/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade11/pronunciation/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade11/listening/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade11/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade11/understanding/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade11/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');
//UNIDADE 12
Route::post('/apostila3/unidade12/grammar/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade12/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade12/pronunciation/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade12/pronunciation/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade12/listening/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade12/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade12/understanding/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade12/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');
//UNIDADE 13
Route::post('/apostila3/unidade13/grammar/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade13/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade13/pronunciation/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade13/pronunciation/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade13/listening/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade13/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade13/understanding/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade13/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');
//UNIDADE 14
Route::post('/apostila3/unidade14/grammar/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade14/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade14/pronunciation/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade14/pronunciation/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade14/listening/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade14/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade14/understanding/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade14/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');
//UNIDADE 15
Route::post('/apostila3/unidade15/grammar/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade15/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade15/pronunciation/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade15/pronunciation/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade15/listening/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade15/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade15/understanding/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade15/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');
//UNIDADE 16
Route::post('/apostila3/unidade16/grammar/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade16/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade16/listening/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade16/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade16/understanding/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade16/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 17
Route::post('/apostila3/unidade17/grammar/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade17/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade17/listening/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade17/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade17/understanding/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade17/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 18
Route::post('/apostila3/unidade18/grammar/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade18/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade18/listening/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade18/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade18/understanding/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade18/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 19
Route::post('/apostila3/unidade19/grammar/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade19/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade19/listening/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade19/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade19/understanding/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade19/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 20
Route::post('/apostila3/unidade20/grammar/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade20/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade20/listening/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade20/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade20/understanding/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade20/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 21
Route::post('/apostila3/unidade21/grammar/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade21/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade21/listening/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade21/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade21/understanding/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade21/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 22
Route::post('/apostila3/unidade22/grammar/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade22/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade22/listening/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade22/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade22/understanding/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade22/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 23
Route::post('/apostila3/unidade23/grammar/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade23/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade23/listening/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade23/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade23/understanding/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade23/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 24
Route::post('/apostila3/unidade24/grammar/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade24/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade24/listening/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade24/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade24/understanding/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade24/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 25
Route::post('/apostila3/unidade25/grammar/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade25/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade25/listening/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade25/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade25/understanding/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade25/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 26
Route::post('/apostila3/unidade26/grammar/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade26/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade26/listening/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade26/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade26/understanding/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade26/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 27
Route::post('/apostila3/unidade27/grammar/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade27/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade27/listening/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade27/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade27/understanding/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade27/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 28
Route::post('/apostila3/unidade28/grammar/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade28/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade28/listening/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade28/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade28/understanding/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade28/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 29
Route::post('/apostila3/unidade29/grammar/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade29/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade29/listening/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade29/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade29/understanding/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade29/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 30
Route::post('/apostila3/unidade30/grammar/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade30/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade30/listening/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade30/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade30/understanding/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade30/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 31
Route::post('/apostila3/unidade31/grammar/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade31/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade31/listening/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade31/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade31/understanding/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade31/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

//UNIDADE 32
Route::post('/apostila3/unidade32/grammar/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade32/grammar/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade32/listening/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade32/listening/respostasCheck/{atividade_id}', 'RespostaController@check');
Route::post('/apostila3/unidade32/understanding/respostas', 'RespostaController@store');
Route::get('/apostila3/unidade32/understanding/respostasCheck/{atividade_id}', 'RespostaController@check');

/***********************************************************************************************************************************************/

/* ROTAS PARA O CRUD APOSTILA 05 */
//UNIDADE 1
Route::post('/apostila5/unidade1/atividades/respostas', 'RespostaController@store');
Route::get('/apostila5/unidade1/atividades/respostasCheck/{atividade_id}', 'RespostaController@check');
//UNIDADE 7
Route::post('/apostila5/unidade7/atividades/respostas', 'RespostaController@store');
Route::get('/apostila5/unidade7/atividades/respostasCheck/{atividade_id}', 'RespostaController@check');
//UNIDADE 8
Route::post('/apostila5/unidade8/atividades/respostas', 'RespostaController@store');
Route::get('/apostila5/unidade8/atividades/respostasCheck/{atividade_id}', 'RespostaController@check');
//UNIDADE 9
Route::post('/apostila5/unidade9/atividades/respostas', 'RespostaController@store');
Route::get('/apostila5/unidade9/atividades/respostasCheck/{atividade_id}', 'RespostaController@check');
//UNIDADE 10
Route::post('/apostila5/unidade10/atividades/respostas', 'RespostaController@store');
Route::get('/apostila5/unidade10/atividades/respostasCheck/{atividade_id}', 'RespostaController@check');
//UNIDADE 11
Route::post('/apostila5/unidade11/atividades/respostas', 'RespostaController@store');
Route::get('/apostila5/unidade11/atividades/respostasCheck/{atividade_id}', 'RespostaController@check');
//UNIDADE 12
Route::post('/apostila5/unidade12/atividades/respostas', 'RespostaController@store');
Route::get('/apostila5/unidade12/atividades/respostasCheck/{atividade_id}', 'RespostaController@check');
//UNIDADE 13
Route::post('/apostila5/unidade13/atividades/respostas', 'RespostaController@store');
Route::get('/apostila5/unidade13/atividades/respostasCheck/{atividade_id}', 'RespostaController@check');
//UNIDADE 14
Route::post('/apostila5/unidade14/atividades/respostas', 'RespostaController@store');
Route::get('/apostila5/unidade14/atividades/respostasCheck/{atividade_id}', 'RespostaController@check');
//UNIDADE 15
Route::post('/apostila5/unidade15/atividades/respostas', 'RespostaController@store');
Route::get('/apostila5/unidade15/atividades/respostasCheck/{atividade_id}', 'RespostaController@check');
//UNIDADE 16
Route::post('/apostila5/unidade16/atividades/respostas', 'RespostaController@store');
Route::get('/apostila5/unidade16/atividades/respostasCheck/{atividade_id}', 'RespostaController@check');
//UNIDADE 17
Route::post('/apostila5/unidade17/atividades/respostas', 'RespostaController@store');
Route::get('/apostila5/unidade17/atividades/respostasCheck/{atividade_id}', 'RespostaController@check');
//UNIDADE 18
Route::post('/apostila5/unidade18/atividades/respostas', 'RespostaController@store');
Route::get('/apostila5/unidade18/atividades/respostasCheck/{atividade_id}', 'RespostaController@check');
//UNIDADE 19
Route::post('/apostila5/unidade19/atividades/respostas', 'RespostaController@store');
Route::get('/apostila5/unidade19/atividades/respostasCheck/{atividade_id}', 'RespostaController@check');
//UNIDADE 20
Route::post('/apostila5/unidade20/atividades/respostas', 'RespostaController@store');
Route::get('/apostila5/unidade20/atividades/respostasCheck/{atividade_id}', 'RespostaController@check');
//UNIDADE 21
Route::post('/apostila5/unidade21/atividades/respostas', 'RespostaController@store');
Route::get('/apostila5/unidade21/atividades/respostasCheck/{atividade_id}', 'RespostaController@check');
//UNIDADE 22
Route::post('/apostila5/unidade22/atividades/respostas', 'RespostaController@store');
Route::get('/apostila5/unidade22/atividades/respostasCheck/{atividade_id}', 'RespostaController@check');
//UNIDADE 23
Route::post('/apostila5/unidade23/atividades/respostas', 'RespostaController@store');
Route::get('/apostila5/unidade23/atividades/respostasCheck/{atividade_id}', 'RespostaController@check');
//UNIDADE 24
Route::post('/apostila5/unidade24/atividades/respostas', 'RespostaController@store');
Route::get('/apostila5/unidade24/atividades/respostasCheck/{atividade_id}', 'RespostaController@check');
//UNIDADE 25
Route::post('/apostila5/unidade25/atividades/respostas', 'RespostaController@store');
Route::get('/apostila5/unidade25/atividades/respostasCheck/{atividade_id}', 'RespostaController@check');
//UNIDADE 26
Route::post('/apostila5/unidade26/atividades/respostas', 'RespostaController@store');
Route::get('/apostila5/unidade26/atividades/respostasCheck/{atividade_id}', 'RespostaController@check');
//UNIDADE 27
Route::post('/apostila5/unidade27/atividades/respostas', 'RespostaController@store');
Route::get('/apostila5/unidade27/atividades/respostasCheck/{atividade_id}', 'RespostaController@check');
//UNIDADE 28
Route::post('/apostila5/unidade28/atividades/respostas', 'RespostaController@store');
Route::get('/apostila5/unidade28/atividades/respostasCheck/{atividade_id}', 'RespostaController@check');
//UNIDADE 29
Route::post('/apostila5/unidade29/atividades/respostas', 'RespostaController@store');
Route::get('/apostila5/unidade29/atividades/respostasCheck/{atividade_id}', 'RespostaController@check');
//UNIDADE 30
Route::post('/apostila5/unidade30/atividades/respostas', 'RespostaController@store');
Route::get('/apostila5/unidade30/atividades/respostasCheck/{atividade_id}', 'RespostaController@check');
//UNIDADE 31
Route::post('/apostila5/unidade31/atividades/respostas', 'RespostaController@store');
Route::get('/apostila5/unidade31/atividades/respostasCheck/{atividade_id}', 'RespostaController@check');
//UNIDADE 32
Route::post('/apostila5/unidade32/atividades/respostas', 'RespostaController@store');
Route::get('/apostila5/unidade32/atividades/respostasCheck/{atividade_id}', 'RespostaController@check');


/***********************************************************************************************************************************************/
