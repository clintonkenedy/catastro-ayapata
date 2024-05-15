<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// api routes that need auth

Route::middleware(['auth:api'])->group(function () {


});

Route::get('home', 'HomeController@index');


/* routes for TfActividades Controller  */	
	Route::get('tfactividades/', 'TfActividadesController@index');
	Route::get('tfactividades/index', 'TfActividadesController@index');
	Route::get('tfactividades/index/{filter?}/{filtervalue?}', 'TfActividadesController@index');	
	Route::get('tfactividades/view/{rec_id}', 'TfActividadesController@view');	
	Route::post('tfactividades/add', 'TfActividadesController@add');	
	Route::any('tfactividades/edit/{rec_id}', 'TfActividadesController@edit');	
	Route::any('tfactividades/delete/{rec_id}', 'TfActividadesController@delete');

/* routes for TfAutorizacionesAnuncios Controller  */	
	Route::get('tfautorizacionesanuncios/', 'TfAutorizacionesAnunciosController@index');
	Route::get('tfautorizacionesanuncios/index', 'TfAutorizacionesAnunciosController@index');
	Route::get('tfautorizacionesanuncios/index/{filter?}/{filtervalue?}', 'TfAutorizacionesAnunciosController@index');	
	Route::get('tfautorizacionesanuncios/view/{rec_id}', 'TfAutorizacionesAnunciosController@view');	
	Route::post('tfautorizacionesanuncios/add', 'TfAutorizacionesAnunciosController@add');	
	Route::any('tfautorizacionesanuncios/edit/{rec_id}', 'TfAutorizacionesAnunciosController@edit');	
	Route::any('tfautorizacionesanuncios/delete/{rec_id}', 'TfAutorizacionesAnunciosController@delete');

/* routes for TfAutorizacionesFuncionamiento Controller  */	
	Route::get('tfautorizacionesfuncionamiento/', 'TfAutorizacionesFuncionamientoController@index');
	Route::get('tfautorizacionesfuncionamiento/index', 'TfAutorizacionesFuncionamientoController@index');
	Route::get('tfautorizacionesfuncionamiento/index/{filter?}/{filtervalue?}', 'TfAutorizacionesFuncionamientoController@index');	
	Route::get('tfautorizacionesfuncionamiento/view/{rec_id}', 'TfAutorizacionesFuncionamientoController@view');	
	Route::post('tfautorizacionesfuncionamiento/add', 'TfAutorizacionesFuncionamientoController@add');	
	Route::any('tfautorizacionesfuncionamiento/edit/{rec_id}', 'TfAutorizacionesFuncionamientoController@edit');	
	Route::any('tfautorizacionesfuncionamiento/delete/{rec_id}', 'TfAutorizacionesFuncionamientoController@delete');

/* routes for TfCodigosInstalaciones Controller  */	
	Route::get('tfcodigosinstalaciones/', 'TfCodigosInstalacionesController@index');
	Route::get('tfcodigosinstalaciones/index', 'TfCodigosInstalacionesController@index');
	Route::get('tfcodigosinstalaciones/index/{filter?}/{filtervalue?}', 'TfCodigosInstalacionesController@index');	
	Route::get('tfcodigosinstalaciones/view/{rec_id}', 'TfCodigosInstalacionesController@view');	
	Route::post('tfcodigosinstalaciones/add', 'TfCodigosInstalacionesController@add');	
	Route::any('tfcodigosinstalaciones/edit/{rec_id}', 'TfCodigosInstalacionesController@edit');	
	Route::any('tfcodigosinstalaciones/delete/{rec_id}', 'TfCodigosInstalacionesController@delete');

/* routes for TfConductores Controller  */	
	Route::get('tfconductores/', 'TfConductoresController@index');
	Route::get('tfconductores/index', 'TfConductoresController@index');
	Route::get('tfconductores/index/{filter?}/{filtervalue?}', 'TfConductoresController@index');	
	Route::get('tfconductores/view/{rec_id}', 'TfConductoresController@view');	
	Route::post('tfconductores/add', 'TfConductoresController@add');	
	Route::any('tfconductores/edit/{rec_id}', 'TfConductoresController@edit');	
	Route::any('tfconductores/delete/{rec_id}', 'TfConductoresController@delete');

/* routes for TfConstrucciones Controller  */	
	Route::get('tfconstrucciones/', 'TfConstruccionesController@index');
	Route::get('tfconstrucciones/index', 'TfConstruccionesController@index');
	Route::get('tfconstrucciones/index/{filter?}/{filtervalue?}', 'TfConstruccionesController@index');	
	Route::get('tfconstrucciones/view/{rec_id}', 'TfConstruccionesController@view');	
	Route::post('tfconstrucciones/add', 'TfConstruccionesController@add');	
	Route::any('tfconstrucciones/edit/{rec_id}', 'TfConstruccionesController@edit');	
	Route::any('tfconstrucciones/delete/{rec_id}', 'TfConstruccionesController@delete');

/* routes for TfDocumentosAdjuntos Controller  */	
	Route::get('tfdocumentosadjuntos/', 'TfDocumentosAdjuntosController@index');
	Route::get('tfdocumentosadjuntos/index', 'TfDocumentosAdjuntosController@index');
	Route::get('tfdocumentosadjuntos/index/{filter?}/{filtervalue?}', 'TfDocumentosAdjuntosController@index');	
	Route::get('tfdocumentosadjuntos/view/{rec_id}', 'TfDocumentosAdjuntosController@view');	
	Route::post('tfdocumentosadjuntos/add', 'TfDocumentosAdjuntosController@add');	
	Route::any('tfdocumentosadjuntos/edit/{rec_id}', 'TfDocumentosAdjuntosController@edit');	
	Route::any('tfdocumentosadjuntos/delete/{rec_id}', 'TfDocumentosAdjuntosController@delete');

/* routes for TfDomicilioTitulares Controller  */	
	Route::get('tfdomiciliotitulares/', 'TfDomicilioTitularesController@index');
	Route::get('tfdomiciliotitulares/index', 'TfDomicilioTitularesController@index');
	Route::get('tfdomiciliotitulares/index/{filter?}/{filtervalue?}', 'TfDomicilioTitularesController@index');	
	Route::get('tfdomiciliotitulares/view/{rec_id}', 'TfDomicilioTitularesController@view');	
	Route::post('tfdomiciliotitulares/add', 'TfDomicilioTitularesController@add');	
	Route::any('tfdomiciliotitulares/edit/{rec_id}', 'TfDomicilioTitularesController@edit');	
	Route::any('tfdomiciliotitulares/delete/{rec_id}', 'TfDomicilioTitularesController@delete');

/* routes for TfEdificaciones Controller  */	
	Route::get('tfedificaciones/', 'TfEdificacionesController@index');
	Route::get('tfedificaciones/index', 'TfEdificacionesController@index');
	Route::get('tfedificaciones/index/{filter?}/{filtervalue?}', 'TfEdificacionesController@index');	
	Route::get('tfedificaciones/view/{rec_id}', 'TfEdificacionesController@view');	
	Route::post('tfedificaciones/add', 'TfEdificacionesController@add');	
	Route::any('tfedificaciones/edit/{rec_id}', 'TfEdificacionesController@edit');	
	Route::any('tfedificaciones/delete/{rec_id}', 'TfEdificacionesController@delete');

/* routes for TfExoneracionesPredio Controller  */	
	Route::get('tfexoneracionespredio/', 'TfExoneracionesPredioController@index');
	Route::get('tfexoneracionespredio/index', 'TfExoneracionesPredioController@index');
	Route::get('tfexoneracionespredio/index/{filter?}/{filtervalue?}', 'TfExoneracionesPredioController@index');	
	Route::get('tfexoneracionespredio/view/{rec_id}', 'TfExoneracionesPredioController@view');	
	Route::post('tfexoneracionespredio/add', 'TfExoneracionesPredioController@add');	
	Route::any('tfexoneracionespredio/edit/{rec_id}', 'TfExoneracionesPredioController@edit');	
	Route::any('tfexoneracionespredio/delete/{rec_id}', 'TfExoneracionesPredioController@delete');

/* routes for TfExoneracionesTitular Controller  */	
	Route::get('tfexoneracionestitular/', 'TfExoneracionesTitularController@index');
	Route::get('tfexoneracionestitular/index', 'TfExoneracionesTitularController@index');
	Route::get('tfexoneracionestitular/index/{filter?}/{filtervalue?}', 'TfExoneracionesTitularController@index');	
	Route::get('tfexoneracionestitular/view/{rec_id}', 'TfExoneracionesTitularController@view');	
	Route::post('tfexoneracionestitular/add', 'TfExoneracionesTitularController@add');	
	Route::any('tfexoneracionestitular/edit/{rec_id}', 'TfExoneracionesTitularController@edit');	
	Route::any('tfexoneracionestitular/delete/{rec_id}', 'TfExoneracionesTitularController@delete');

/* routes for TfFichas Controller  */	
	Route::get('tffichas/', 'TfFichasController@index');
	Route::get('tffichas/index', 'TfFichasController@index');
	Route::get('tffichas/index/{filter?}/{filtervalue?}', 'TfFichasController@index');	
	Route::get('tffichas/view/{rec_id}', 'TfFichasController@view');	
	Route::post('tffichas/add', 'TfFichasController@add');	
	Route::any('tffichas/edit/{rec_id}', 'TfFichasController@edit');	
	Route::any('tffichas/delete/{rec_id}', 'TfFichasController@delete');

/* routes for TfFichasBienesComunes Controller  */	
	Route::get('tffichasbienescomunes/', 'TfFichasBienesComunesController@index');
	Route::get('tffichasbienescomunes/index', 'TfFichasBienesComunesController@index');
	Route::get('tffichasbienescomunes/index/{filter?}/{filtervalue?}', 'TfFichasBienesComunesController@index');	
	Route::get('tffichasbienescomunes/view/{rec_id}', 'TfFichasBienesComunesController@view');	
	Route::post('tffichasbienescomunes/add', 'TfFichasBienesComunesController@add');	
	Route::any('tffichasbienescomunes/edit/{rec_id}', 'TfFichasBienesComunesController@edit');	
	Route::any('tffichasbienescomunes/delete/{rec_id}', 'TfFichasBienesComunesController@delete');

/* routes for TfFichasCotitularidades Controller  */	
	Route::get('tffichascotitularidades/', 'TfFichasCotitularidadesController@index');
	Route::get('tffichascotitularidades/index', 'TfFichasCotitularidadesController@index');
	Route::get('tffichascotitularidades/index/{filter?}/{filtervalue?}', 'TfFichasCotitularidadesController@index');	
	Route::get('tffichascotitularidades/view/{rec_id}', 'TfFichasCotitularidadesController@view');	
	Route::post('tffichascotitularidades/add', 'TfFichasCotitularidadesController@add');	
	Route::any('tffichascotitularidades/edit/{rec_id}', 'TfFichasCotitularidadesController@edit');	
	Route::any('tffichascotitularidades/delete/{rec_id}', 'TfFichasCotitularidadesController@delete');

/* routes for TfFichasEconomicas Controller  */	
	Route::get('tffichaseconomicas/', 'TfFichasEconomicasController@index');
	Route::get('tffichaseconomicas/index', 'TfFichasEconomicasController@index');
	Route::get('tffichaseconomicas/index/{filter?}/{filtervalue?}', 'TfFichasEconomicasController@index');	
	Route::get('tffichaseconomicas/view/{rec_id}', 'TfFichasEconomicasController@view');	
	Route::post('tffichaseconomicas/add', 'TfFichasEconomicasController@add');	
	Route::any('tffichaseconomicas/edit/{rec_id}', 'TfFichasEconomicasController@edit');	
	Route::any('tffichaseconomicas/delete/{rec_id}', 'TfFichasEconomicasController@delete');

/* routes for TfFichasIndividuales Controller  */	
	Route::get('tffichasindividuales/', 'TfFichasIndividualesController@index');
	Route::get('tffichasindividuales/index', 'TfFichasIndividualesController@index');
	Route::get('tffichasindividuales/index/{filter?}/{filtervalue?}', 'TfFichasIndividualesController@index');	
	Route::get('tffichasindividuales/view/{rec_id}', 'TfFichasIndividualesController@view');	
	Route::post('tffichasindividuales/add', 'TfFichasIndividualesController@add');	
	Route::any('tffichasindividuales/edit/{rec_id}', 'TfFichasIndividualesController@edit');	
	Route::any('tffichasindividuales/delete/{rec_id}', 'TfFichasIndividualesController@delete');

/* routes for TfHabUrbana Controller  */	
	Route::get('tfhaburbana/', 'TfHabUrbanaController@index');
	Route::get('tfhaburbana/index', 'TfHabUrbanaController@index');
	Route::get('tfhaburbana/index/{filter?}/{filtervalue?}', 'TfHabUrbanaController@index');	
	Route::get('tfhaburbana/view/{rec_id}', 'TfHabUrbanaController@view');	
	Route::post('tfhaburbana/add', 'TfHabUrbanaController@add');	
	Route::any('tfhaburbana/edit/{rec_id}', 'TfHabUrbanaController@edit');	
	Route::any('tfhaburbana/delete/{rec_id}', 'TfHabUrbanaController@delete');

/* routes for TfHistoriaVia Controller  */	
	Route::get('tfhistoriavia/', 'TfHistoriaViaController@index');
	Route::get('tfhistoriavia/index', 'TfHistoriaViaController@index');
	Route::get('tfhistoriavia/index/{filter?}/{filtervalue?}', 'TfHistoriaViaController@index');	
	Route::get('tfhistoriavia/view/{rec_id}', 'TfHistoriaViaController@view');	
	Route::post('tfhistoriavia/add', 'TfHistoriaViaController@add');	
	Route::any('tfhistoriavia/edit/{rec_id}', 'TfHistoriaViaController@edit');	
	Route::any('tfhistoriavia/delete/{rec_id}', 'TfHistoriaViaController@delete');

/* routes for TfIngresos Controller  */	
	Route::get('tfingresos/', 'TfIngresosController@index');
	Route::get('tfingresos/index', 'TfIngresosController@index');
	Route::get('tfingresos/index/{filter?}/{filtervalue?}', 'TfIngresosController@index');	
	Route::get('tfingresos/view/{rec_id}', 'TfIngresosController@view');	
	Route::post('tfingresos/add', 'TfIngresosController@add');	
	Route::any('tfingresos/edit/{rec_id}', 'TfIngresosController@edit');	
	Route::any('tfingresos/delete/{rec_id}', 'TfIngresosController@delete');

/* routes for TfInstalaciones Controller  */	
	Route::get('tfinstalaciones/', 'TfInstalacionesController@index');
	Route::get('tfinstalaciones/index', 'TfInstalacionesController@index');
	Route::get('tfinstalaciones/index/{filter?}/{filtervalue?}', 'TfInstalacionesController@index');	
	Route::get('tfinstalaciones/view/{rec_id}', 'TfInstalacionesController@view');	
	Route::post('tfinstalaciones/add', 'TfInstalacionesController@add');	
	Route::any('tfinstalaciones/edit/{rec_id}', 'TfInstalacionesController@edit');	
	Route::any('tfinstalaciones/delete/{rec_id}', 'TfInstalacionesController@delete');

/* routes for TfInstitucion Controller  */	
	Route::get('tfinstitucion/', 'TfInstitucionController@index');
	Route::get('tfinstitucion/index', 'TfInstitucionController@index');
	Route::get('tfinstitucion/index/{filter?}/{filtervalue?}', 'TfInstitucionController@index');	
	Route::get('tfinstitucion/view/{rec_id}', 'TfInstitucionController@view');	
	Route::post('tfinstitucion/add', 'TfInstitucionController@add');	
	Route::any('tfinstitucion/edit/{rec_id}', 'TfInstitucionController@edit');	
	Route::any('tfinstitucion/delete/{rec_id}', 'TfInstitucionController@delete');

/* routes for TfLinderos Controller  */	
	Route::get('tflinderos/', 'TfLinderosController@index');
	Route::get('tflinderos/index', 'TfLinderosController@index');
	Route::get('tflinderos/index/{filter?}/{filtervalue?}', 'TfLinderosController@index');	
	Route::get('tflinderos/view/{rec_id}', 'TfLinderosController@view');	
	Route::post('tflinderos/add', 'TfLinderosController@add');	
	Route::any('tflinderos/edit/{rec_id}', 'TfLinderosController@edit');	
	Route::any('tflinderos/delete/{rec_id}', 'TfLinderosController@delete');

/* routes for TfLitigantes Controller  */	
	Route::get('tflitigantes/', 'TfLitigantesController@index');
	Route::get('tflitigantes/index', 'TfLitigantesController@index');
	Route::get('tflitigantes/index/{filter?}/{filtervalue?}', 'TfLitigantesController@index');	
	Route::get('tflitigantes/view/{rec_id}', 'TfLitigantesController@view');	
	Route::post('tflitigantes/add', 'TfLitigantesController@add');	
	Route::any('tflitigantes/edit/{rec_id}', 'TfLitigantesController@edit');	
	Route::any('tflitigantes/delete/{rec_id}', 'TfLitigantesController@delete');

/* routes for TfLotes Controller  */	
	Route::get('tflotes/', 'TfLotesController@index');
	Route::get('tflotes/index', 'TfLotesController@index');
	Route::get('tflotes/index/{filter?}/{filtervalue?}', 'TfLotesController@index');	
	Route::get('tflotes/view/{rec_id}', 'TfLotesController@view');	
	Route::post('tflotes/add', 'TfLotesController@add');	
	Route::any('tflotes/edit/{rec_id}', 'TfLotesController@edit');	
	Route::any('tflotes/delete/{rec_id}', 'TfLotesController@delete');

/* routes for TfManzanas Controller  */	
	Route::get('tfmanzanas/', 'TfManzanasController@index');
	Route::get('tfmanzanas/index', 'TfManzanasController@index');
	Route::get('tfmanzanas/index/{filter?}/{filtervalue?}', 'TfManzanasController@index');	
	Route::get('tfmanzanas/view/{rec_id}', 'TfManzanasController@view');	
	Route::post('tfmanzanas/add', 'TfManzanasController@add');	
	Route::any('tfmanzanas/edit/{rec_id}', 'TfManzanasController@edit');	
	Route::any('tfmanzanas/delete/{rec_id}', 'TfManzanasController@delete');

/* routes for TfNotarias Controller  */	
	Route::get('tfnotarias/', 'TfNotariasController@index');
	Route::get('tfnotarias/index', 'TfNotariasController@index');
	Route::get('tfnotarias/index/{filter?}/{filtervalue?}', 'TfNotariasController@index');	
	Route::get('tfnotarias/view/{rec_id}', 'TfNotariasController@view');	
	Route::post('tfnotarias/add', 'TfNotariasController@add');	
	Route::any('tfnotarias/edit/{rec_id}', 'TfNotariasController@edit');	
	Route::any('tfnotarias/delete/{rec_id}', 'TfNotariasController@delete');

/* routes for TfPersonas Controller  */	
	Route::get('tfpersonas/', 'TfPersonasController@index');
	Route::get('tfpersonas/index', 'TfPersonasController@index');
	Route::get('tfpersonas/index/{filter?}/{filtervalue?}', 'TfPersonasController@index');	
	Route::get('tfpersonas/view/{rec_id}', 'TfPersonasController@view');	
	Route::post('tfpersonas/add', 'TfPersonasController@add');	
	Route::any('tfpersonas/edit/{rec_id}', 'TfPersonasController@edit');	
	Route::any('tfpersonas/delete/{rec_id}', 'TfPersonasController@delete');

/* routes for TfPuertas Controller  */	
	Route::get('tfpuertas/', 'TfPuertasController@index');
	Route::get('tfpuertas/index', 'TfPuertasController@index');
	Route::get('tfpuertas/index/{filter?}/{filtervalue?}', 'TfPuertasController@index');	
	Route::get('tfpuertas/view/{rec_id}', 'TfPuertasController@view');	
	Route::post('tfpuertas/add', 'TfPuertasController@add');	
	Route::any('tfpuertas/edit/{rec_id}', 'TfPuertasController@edit');	
	Route::any('tfpuertas/delete/{rec_id}', 'TfPuertasController@delete');

/* routes for TfRecapBbcc Controller  */	
	Route::get('tfrecapbbcc/', 'TfRecapBbccController@index');
	Route::get('tfrecapbbcc/index', 'TfRecapBbccController@index');
	Route::get('tfrecapbbcc/index/{filter?}/{filtervalue?}', 'TfRecapBbccController@index');	
	Route::get('tfrecapbbcc/view/{rec_id}', 'TfRecapBbccController@view');	
	Route::post('tfrecapbbcc/add', 'TfRecapBbccController@add');	
	Route::any('tfrecapbbcc/edit/{rec_id}', 'TfRecapBbccController@edit');	
	Route::any('tfrecapbbcc/delete/{rec_id}', 'TfRecapBbccController@delete');

/* routes for TfRecapEdificio Controller  */	
	Route::get('tfrecapedificio/', 'TfRecapEdificioController@index');
	Route::get('tfrecapedificio/index', 'TfRecapEdificioController@index');
	Route::get('tfrecapedificio/index/{filter?}/{filtervalue?}', 'TfRecapEdificioController@index');	
	Route::get('tfrecapedificio/view/{rec_id}', 'TfRecapEdificioController@view');	
	Route::post('tfrecapedificio/add', 'TfRecapEdificioController@add');	
	Route::any('tfrecapedificio/edit/{rec_id}', 'TfRecapEdificioController@edit');	
	Route::any('tfrecapedificio/delete/{rec_id}', 'TfRecapEdificioController@delete');

/* routes for TfRegistroLegal Controller  */	
	Route::get('tfregistrolegal/', 'TfRegistroLegalController@index');
	Route::get('tfregistrolegal/index', 'TfRegistroLegalController@index');
	Route::get('tfregistrolegal/index/{filter?}/{filtervalue?}', 'TfRegistroLegalController@index');	
	Route::get('tfregistrolegal/view/{rec_id}', 'TfRegistroLegalController@view');	
	Route::post('tfregistrolegal/add', 'TfRegistroLegalController@add');	
	Route::any('tfregistrolegal/edit/{rec_id}', 'TfRegistroLegalController@edit');	
	Route::any('tfregistrolegal/delete/{rec_id}', 'TfRegistroLegalController@delete');

/* routes for TfSectores Controller  */	
	Route::get('tfsectores/', 'TfSectoresController@index');
	Route::get('tfsectores/index', 'TfSectoresController@index');
	Route::get('tfsectores/index/{filter?}/{filtervalue?}', 'TfSectoresController@index');	
	Route::get('tfsectores/view/{rec_id}', 'TfSectoresController@view');	
	Route::post('tfsectores/add', 'TfSectoresController@add');	
	Route::any('tfsectores/edit/{rec_id}', 'TfSectoresController@edit');	
	Route::any('tfsectores/delete/{rec_id}', 'TfSectoresController@delete');

/* routes for TfServiciosBasicos Controller  */	
	Route::get('tfserviciosbasicos/', 'TfServiciosBasicosController@index');
	Route::get('tfserviciosbasicos/index', 'TfServiciosBasicosController@index');
	Route::get('tfserviciosbasicos/index/{filter?}/{filtervalue?}', 'TfServiciosBasicosController@index');	
	Route::get('tfserviciosbasicos/view/{rec_id}', 'TfServiciosBasicosController@view');	
	Route::post('tfserviciosbasicos/add', 'TfServiciosBasicosController@add');	
	Route::any('tfserviciosbasicos/edit/{rec_id}', 'TfServiciosBasicosController@edit');	
	Route::any('tfserviciosbasicos/delete/{rec_id}', 'TfServiciosBasicosController@delete');

/* routes for TfSunarp Controller  */	
	Route::get('tfsunarp/', 'TfSunarpController@index');
	Route::get('tfsunarp/index', 'TfSunarpController@index');
	Route::get('tfsunarp/index/{filter?}/{filtervalue?}', 'TfSunarpController@index');	
	Route::get('tfsunarp/view/{rec_id}', 'TfSunarpController@view');	
	Route::post('tfsunarp/add', 'TfSunarpController@add');	
	Route::any('tfsunarp/edit/{rec_id}', 'TfSunarpController@edit');	
	Route::any('tfsunarp/delete/{rec_id}', 'TfSunarpController@delete');

/* routes for TfTablas Controller  */	
	Route::get('tftablas/', 'TfTablasController@index');
	Route::get('tftablas/index', 'TfTablasController@index');
	Route::get('tftablas/index/{filter?}/{filtervalue?}', 'TfTablasController@index');	
	Route::get('tftablas/view/{rec_id}', 'TfTablasController@view');	
	Route::post('tftablas/add', 'TfTablasController@add');	
	Route::any('tftablas/edit/{rec_id}', 'TfTablasController@edit');	
	Route::any('tftablas/delete/{rec_id}', 'TfTablasController@delete');

/* routes for TfTablasCodigos Controller  */	
	Route::get('tftablascodigos/', 'TfTablasCodigosController@index');
	Route::get('tftablascodigos/index', 'TfTablasCodigosController@index');
	Route::get('tftablascodigos/index/{filter?}/{filtervalue?}', 'TfTablasCodigosController@index');	
	Route::get('tftablascodigos/view/{rec_id}', 'TfTablasCodigosController@view');	
	Route::post('tftablascodigos/add', 'TfTablasCodigosController@add');	
	Route::any('tftablascodigos/edit/{rec_id}', 'TfTablasCodigosController@edit');	
	Route::any('tftablascodigos/delete/{rec_id}', 'TfTablasCodigosController@delete');

/* routes for TfTitulares Controller  */	
	Route::get('tftitulares/', 'TfTitularesController@index');
	Route::get('tftitulares/index', 'TfTitularesController@index');
	Route::get('tftitulares/index/{filter?}/{filtervalue?}', 'TfTitularesController@index');	
	Route::get('tftitulares/view/{rec_id}', 'TfTitularesController@view');	
	Route::post('tftitulares/add', 'TfTitularesController@add');	
	Route::any('tftitulares/edit/{rec_id}', 'TfTitularesController@edit');	
	Route::any('tftitulares/delete/{rec_id}', 'TfTitularesController@delete');

/* routes for TfUbigeo Controller  */	
	Route::get('tfubigeo/', 'TfUbigeoController@index');
	Route::get('tfubigeo/index', 'TfUbigeoController@index');
	Route::get('tfubigeo/index/{filter?}/{filtervalue?}', 'TfUbigeoController@index');	
	Route::get('tfubigeo/view/{rec_id}', 'TfUbigeoController@view');	
	Route::post('tfubigeo/add', 'TfUbigeoController@add');	
	Route::any('tfubigeo/edit/{rec_id}', 'TfUbigeoController@edit');	
	Route::any('tfubigeo/delete/{rec_id}', 'TfUbigeoController@delete');

/* routes for TfUbigeos Controller  */	
	Route::get('tfubigeos/', 'TfUbigeosController@index');
	Route::get('tfubigeos/index', 'TfUbigeosController@index');
	Route::get('tfubigeos/index/{filter?}/{filtervalue?}', 'TfUbigeosController@index');	
	Route::get('tfubigeos/view/{rec_id}', 'TfUbigeosController@view');	
	Route::post('tfubigeos/add', 'TfUbigeosController@add');	
	Route::any('tfubigeos/edit/{rec_id}', 'TfUbigeosController@edit');	
	Route::any('tfubigeos/delete/{rec_id}', 'TfUbigeosController@delete');

/* routes for TfUniCat Controller  */	
	Route::get('tfunicat/', 'TfUniCatController@index');
	Route::get('tfunicat/index', 'TfUniCatController@index');
	Route::get('tfunicat/index/{filter?}/{filtervalue?}', 'TfUniCatController@index');	
	Route::get('tfunicat/view/{rec_id}', 'TfUniCatController@view');	
	Route::post('tfunicat/add', 'TfUniCatController@add');	
	Route::any('tfunicat/edit/{rec_id}', 'TfUniCatController@edit');	
	Route::any('tfunicat/delete/{rec_id}', 'TfUniCatController@delete');

/* routes for TfUsos Controller  */	
	Route::get('tfusos/', 'TfUsosController@index');
	Route::get('tfusos/index', 'TfUsosController@index');
	Route::get('tfusos/index/{filter?}/{filtervalue?}', 'TfUsosController@index');	
	Route::get('tfusos/view/{rec_id}', 'TfUsosController@view');	
	Route::post('tfusos/add', 'TfUsosController@add');	
	Route::any('tfusos/edit/{rec_id}', 'TfUsosController@edit');	
	Route::any('tfusos/delete/{rec_id}', 'TfUsosController@delete');

/* routes for TfUsosBc Controller  */	
	Route::get('tfusosbc/', 'TfUsosBcController@index');
	Route::get('tfusosbc/index', 'TfUsosBcController@index');
	Route::get('tfusosbc/index/{filter?}/{filtervalue?}', 'TfUsosBcController@index');	
	Route::get('tfusosbc/view/{rec_id}', 'TfUsosBcController@view');	
	Route::post('tfusosbc/add', 'TfUsosBcController@add');	
	Route::any('tfusosbc/edit/{rec_id}', 'TfUsosBcController@edit');	
	Route::any('tfusosbc/delete/{rec_id}', 'TfUsosBcController@delete');

/* routes for TfUsuarios Controller  */	
	Route::get('tfusuarios/', 'TfUsuariosController@index');
	Route::get('tfusuarios/index', 'TfUsuariosController@index');
	Route::get('tfusuarios/index/{filter?}/{filtervalue?}', 'TfUsuariosController@index');	
	Route::get('tfusuarios/view/{rec_id}', 'TfUsuariosController@view');	
	Route::post('tfusuarios/add', 'TfUsuariosController@add');	
	Route::any('tfusuarios/edit/{rec_id}', 'TfUsuariosController@edit');	
	Route::any('tfusuarios/delete/{rec_id}', 'TfUsuariosController@delete');

/* routes for TfVias Controller  */	
	Route::get('tfvias/', 'TfViasController@index');
	Route::get('tfvias/index', 'TfViasController@index');
	Route::get('tfvias/index/{filter?}/{filtervalue?}', 'TfViasController@index');	
	Route::get('tfvias/view/{rec_id}', 'TfViasController@view');	
	Route::post('tfvias/add', 'TfViasController@add');	
	Route::any('tfvias/edit/{rec_id}', 'TfViasController@edit');	
	Route::any('tfvias/delete/{rec_id}', 'TfViasController@delete');

/* routes for TfViasHabUrba Controller  */	
	Route::get('tfviashaburba/', 'TfViasHabUrbaController@index');
	Route::get('tfviashaburba/index', 'TfViasHabUrbaController@index');
	Route::get('tfviashaburba/index/{filter?}/{filtervalue?}', 'TfViasHabUrbaController@index');	
	Route::get('tfviashaburba/view/{rec_id}', 'TfViasHabUrbaController@view');	
	Route::post('tfviashaburba/add', 'TfViasHabUrbaController@add');	
	Route::any('tfviashaburba/edit/{rec_id}', 'TfViasHabUrbaController@edit');	
	Route::any('tfviashaburba/delete/{rec_id}', 'TfViasHabUrbaController@delete');
	
	Route::get('components_data/id_ficha_option_list/{arg1?}', 'Components_dataController@id_ficha_option_list');	
	Route::get('components_data/codi_actividad_option_list/{arg1?}', 'Components_dataController@codi_actividad_option_list');	
	Route::get('components_data/id_persona_option_list/{arg1?}', 'Components_dataController@id_persona_option_list');	
	Route::get('components_data/id_lote_option_list/{arg1?}', 'Components_dataController@id_lote_option_list');	
	Route::get('components_data/id_ficha_option_list_2/{arg1?}', 'Components_dataController@id_ficha_option_list_2');	
	Route::get('components_data/id_uni_cat_option_list/{arg1?}', 'Components_dataController@id_uni_cat_option_list');	
	Route::get('components_data/id_usuario_option_list/{arg1?}', 'Components_dataController@id_usuario_option_list');	
	Route::get('components_data/codi_uso_option_list/{arg1?}', 'Components_dataController@codi_uso_option_list');	
	Route::get('components_data/codi_uso_option_list_2/{arg1?}', 'Components_dataController@codi_uso_option_list_2');	
	Route::get('components_data/id_ubi_geo_option_list/{arg1?}', 'Components_dataController@id_ubi_geo_option_list');	
	Route::get('components_data/id_via_option_list/{arg1?}', 'Components_dataController@id_via_option_list');	
	Route::get('components_data/id_puerta_option_list/{arg1?}', 'Components_dataController@id_puerta_option_list');	
	Route::get('components_data/codi_instalacion_option_list/{arg1?}', 'Components_dataController@codi_instalacion_option_list');	
	Route::get('components_data/id_mzna_option_list/{arg1?}', 'Components_dataController@id_mzna_option_list');	
	Route::get('components_data/id_sector_option_list/{arg1?}', 'Components_dataController@id_sector_option_list');	
	Route::get('components_data/id_notaria_option_list/{arg1?}', 'Components_dataController@id_notaria_option_list');	
	Route::get('components_data/id_tabla_option_list/{arg1?}', 'Components_dataController@id_tabla_option_list');	
	Route::get('components_data/id_edificacion_option_list/{arg1?}', 'Components_dataController@id_edificacion_option_list');	
	Route::get('components_data/id_hab_urba_option_list/{arg1?}', 'Components_dataController@id_hab_urba_option_list');	
	Route::get('components_data/getcount_tfactividades/{arg1?}', 'Components_dataController@getcount_tfactividades');


/* routes for FileUpload Controller  */	
Route::post('fileuploader/upload/{fieldname}', 'FileUploaderController@upload');
Route::post('fileuploader/s3upload/{fieldname}', 'FileUploaderController@s3upload');
Route::post('fileuploader/remove_temp_file', 'FileUploaderController@remove_temp_file');