<?php
use App\Newsletter;
use App\Http\Controllers\Newslettercontroller;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Rotas menu acesso as paginas

Route::get('/','HomeController@home');

Route::get('/home','HomeController@home');

Route::get('/sobre', 'SobreController@sobre');

Route::get('/contato', 'ContatoController@contato');

Route::post('/contato', 'ContatoController@sendMail');

Route::get('/mapa', 'MapaController@mapa');

Route::get('/faq', 'FaqController@faq');

Route::get('/loja', 'LojaController@loja');

Route::get('/privacidade', 'PrivacidadeController@privacidade');

Route::get('/termos', 'TermosController@termos');

Route::get('/blog', 'BlogController@blog');

Route::get('/blog-details/{id}', 'BlogController@blogdetails');

Route::get('/post/{id}', 'BlogController@blogdetails');

Route::get('/como-reciclar', 'ReciclarController@comoReciclar');

Route::get('/tabelaReciclaveis', 'ReciclarController@tabelaReciclar');

Route::get('/onde-reciclar', 'ReciclarController@ondeReciclar');

Route::get('/editar-userPerfil', 'UserPerfilController@userPerfil');

Route::post('/editar-userPerfil', 'UserPerfilController@editarPerfil')->name('userPerfil.editar');


// Rotas loja

Route::get('/carrinho', 'CarrinhoController@carrinhoProduto');

Route::get('/finalizada', 'FinalizadaController@finalizada');

Route::get('/internaProduto/{id}', 'InternaLojaController@exibirProdutoUnico');

Route::get('/carrinho/{id}', 'CarrinhoController@carrinhoProduto');

Route::get('/carrinho/remover/{id}', 'CarrinhoController@remover');

Route::get('/dadoscompra', 'DadosCompraController@dadosCompra')->middleware('acesso');

Route::get('/adicionarCarrinho/{id}', 'CarrinhoController@addCarrinho');


// rotas internas do mapa de acesso ao banco de dados

Route::get('/marcadores/{cidade}/{materiaisIds}', 'MarcadoresController@marcadores')->name('marcadores');

Route::get('/cidades', 'CidadeController@obterJson');


// rotas incluir registros


Route::get('/add-cidade', 'CidadeController@addCidade')->middleware('acesso');

Route::get('/add-material', 'MaterialController@addMaterial')->middleware('acesso');

Route::get('/add-empresa', 'EmpresaController@addEmpresa')->middleware('acesso');

Route::get('/add-produto', 'ProdutoController@addProduto')->middleware('acesso');

Route::get('/add-newsletter', 'NewsletterController@addnewsletter')->middleware('acesso');

Route::get('/add-categoria', 'CategoriaController@categorias')->middleware('acesso');

Route::get('/add-postagens', 'BlogController@addPostagem');

Route::get('/add-tagBlog', 'BlogController@addTag');

Route::get('/add-pagamento', 'PagamentoController@addPagamento');

//Route::get('/registerPainel','Auth\RegisterController@addUser');

Route::get('/add-admin','AdminController@addAdmin')->middleware('acesso');

Route::get('/add-user','Auth\RegisterController@addUser')->middleware('acesso');


// rotas cadastrar registros


Route::post('/cadastrartagblog', 'BlogController@cadastrarPostagem')->name('tagBlog.cadastrar');

Route::post('/cadastrarpostagem', 'BlogController@cadastrarPostagem')->name('postagem.cadastrar');

Route::post('/cadastrarProduto', 'ProdutoController@cadastrarProduto')->name('produto.cadastrar')->middleware('acesso');

Route::post('/cadastrarempresa', 'EmpresaController@cadastrarEmpresa')->name('empresa.cadastrar')->middleware('acesso');

Route::post('/cadastrarmaterial', 'MaterialController@cadastrarMaterial')->name('material.cadastrar')->middleware('acesso');

Route::post('/cadastrarcidade', 'CidadeController@cadastrarCidade')->name('cidade.cadastrar')->middleware('acesso');

Route::post('/cadastrarnewsletter', 'NewsletterController@cadastrarNewsletter')->name('newsletter.cadastrar')->middleware('acesso');

Route::post('/cadastrarAdmin','AdminController@cadastrarAdmin')->name('admin.cadastrar')->middleware('acesso');

Route::post('/cadastrarcategoria','CategoriaController@cadastrarCategoria')->name('categoria.cadastrar')->middleware('acesso');

Route::post('/cadastrarusuario','RegisterController@create')->middleware('acesso');

Route::post('/cadastrarPagamento', 'PagamentoController@cadastrarPagamento')->name('pagamento.cadastrar');


// rotas deletar registros


Route::get('/apagarpostagem/{id}','BlogController@apagarPost');

Route::get('/apagarmaterial/{id}','MaterialController@apagarMaterial');

Route::get('/apagarempresa/{id}','EmpresaController@apagarEmpresa');

Route::get('/apagarcidade/{id}','CidadeController@apagarCidade');

Route::get('/apagarnews/{id}', 'Newslettercontroller@apagarNews');

Route::get('/apagarAdmin/{id}', 'AdminController@deletarAdmin')->middleware('acesso');

Route::get('/apagarUser/{id}', 'Auth\RegisterController@deletarUser')->middleware('acesso');

Route::get('/apagarProduto/{id}', 'ProdutoController@apagarProduto');

Route::get('/apagarCategoria/{id}', 'CategoriaController@apagarCategoria');

Route::get('/apagarPagamento/{id}', 'PagamentoController@apagarPagamento');


// rotas editar registros Get


Route::get('/editar-material/{id}','MaterialController@ViewEditarMaterial');

Route::get('/editar-empresa/{id}','EmpresaController@ViewEditarEmpresa');

Route::get('/editar-cidade/{id}','CidadeController@ViewEditarCidade');

Route::get('/editar-post/{id}','BlogController@ViewEditarPost');

Route::get('/editar-news/{id}', 'NewsletterController@editarNews');

Route::get('/editar-admin/{id}', 'AdminController@viewEditarAdmin')->middleware('acesso');

Route::post('/editar-admin/{id}', 'AdminController@editarAdmin')->middleware('acesso');

Route::get('/editar-user/{id}', 'Auth\RegisterController@viewEditarUser')->middleware('acesso');

Route::post('/editar-user/{id}', 'Auth\RegisterController@editarUser')->middleware('acesso');

Route::get('/editar-produto/{id}', 'ProdutoController@viewEditarProduto');

Route::get('/editar-categoria/{id}', 'CategoriaController@viewEditarCategoria');

Route::get('/editar-Pagamento/{id}', 'PagamentoController@viewEditarPagamento');





// rotas editar registros Post


Route::post('/editado/{id}','MaterialController@editarMaterial');

Route::post('/editadoempresa/{id}','EmpresaController@editarEmpresa');

Route::post('/editadocidade/{id}','CidadeController@editarCidade');

Route::post('/editadopost/{id}','BlogController@editarPost');

Route::post('/editar-news/{id}', 'NewsletterController@editarNews');

Route::post('/editadoProduto/{id}', 'ProdutoController@editarProduto');

Route::post('/editadoCategoria/{id}', 'CategoriaController@editarCategoria');

Route::post('/editadoPagamento/{id}', 'PagamentoController@editarPagamento');



// rotas relatórios


Route::get('/relatorio-Users', 'RelatoriosController@relatorioUsers')->middleware('acesso');

Route::get('/relatorio-Admins', 'RelatoriosController@relatorioAdmins')->middleware('acesso');

Route::get('/relatorio-Empresas', 'RelatoriosController@relatorioEmpresas')->middleware('acesso');

Route::get('/relatorio-Cidades', 'RelatoriosController@relatorioCidades')->middleware('acesso');

Route::get('/relatorio-Posts', 'RelatoriosController@relatorioPosts');//->middleware('acesso');

Route::get('/relatorio-Materiais', 'RelatoriosController@relatorioMateriais')->middleware('acesso');

Route::get('/relatorio-Newsletter', 'RelatoriosController@relatorioNewsletter')->middleware('acesso');

Route::get('/relatorio-Produtos', 'RelatoriosController@relatorioProdutos');

Route::get('/relatorio-Categorias', 'RelatoriosController@relatorioCategorias');

Route::get('/relatorio-Pagamentos', 'RelatoriosController@relatorioPagamentos');

// Rotas de autenticação


Auth::routes();
Route::get('/painel', 'PainelController@painel')->name('painel')->middleware('acesso');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'NewsletterController@home')->name('home');

Route::post('/home', 'NewsletterController@home');

Route::get('/registerPainel','Auth\RegisterController@addUser');

Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');

Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');



//Rotas Socialite Google
// Route::get('redirect/{driver}', 'Auth\LoginController@redirectToProvider')
//     ->name('login.provider')
//     ->where('driver', implode('|', config('auth.socialite.drivers')));

// Route::get('{driver}/callback', 'Auth\LoginController@handleProviderCallback')
//     ->name('login.callback')
//     ->where('driver', implode('|', config('auth.socialite.drivers')));


//Rota adminlista apenas teste
Route::get('/adminlista','AdminController@mostrarLista')->middleware('acesso');







