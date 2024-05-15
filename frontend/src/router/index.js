
import { route } from 'quasar/wrappers'
import { createRouter, createMemoryHistory, createWebHistory, createWebHashHistory } from 'vue-router'

/*
 * If not building with SSR mode, you can
 * directly export the Router instantiation;
 *
 * The function below can be async too; either use
 * async/await or return a Promise which resolves
 * with the Router instance.
 */


function passRouteToProps(route){
	return {
		queryParams: route.query,
		fieldName: route.params.fieldName, 
		fieldValue: route.params.fieldValue
	}
}


let routes = [{
	name: 'main',
	path: '/',
	component: () => import('layouts/MainLayout.vue'),
	children: [
		
		{ 
			path: '/home',
			name: 'home', 
			component: () => import('pages/home/home.vue'), 
			props: true 
		},//Dashboard routes


//tfactividades routes
		{
			path: '/tfactividades/:fieldName?/:fieldValue?',
			name: 'tfactividadeslist',
			component: () => import('pages/tfactividades/list.vue'),
			props: route => passRouteToProps(route)
		},
		{ 
			path: '/tfactividades/view/:id', 
			name: 'tfactividadesview', 
			component: () => import('pages/tfactividades/view.vue'), 
			props: true 
		},
		{ 
			path: '/tfactividades/add', 
			name: 'tfactividadesadd', 
			component: () => import('pages/tfactividades/add.vue'), 
			props: true 
		},
		{ 
			path: '/tfactividades/edit/:id', 
			name: 'tfactividadesedit', 
			component: () => import('pages/tfactividades/edit.vue'), 
			props: true 
		},

//tfautorizacionesanuncios routes
		{
			path: '/tfautorizacionesanuncios/:fieldName?/:fieldValue?',
			name: 'tfautorizacionesanuncioslist',
			component: () => import('pages/tfautorizacionesanuncios/list.vue'),
			props: route => passRouteToProps(route)
		},
		{ 
			path: '/tfautorizacionesanuncios/view/:id', 
			name: 'tfautorizacionesanunciosview', 
			component: () => import('pages/tfautorizacionesanuncios/view.vue'), 
			props: true 
		},
		{ 
			path: '/tfautorizacionesanuncios/add', 
			name: 'tfautorizacionesanunciosadd', 
			component: () => import('pages/tfautorizacionesanuncios/add.vue'), 
			props: true 
		},
		{ 
			path: '/tfautorizacionesanuncios/edit/:id', 
			name: 'tfautorizacionesanunciosedit', 
			component: () => import('pages/tfautorizacionesanuncios/edit.vue'), 
			props: true 
		},

//tfautorizacionesfuncionamiento routes
		{
			path: '/tfautorizacionesfuncionamiento/:fieldName?/:fieldValue?',
			name: 'tfautorizacionesfuncionamientolist',
			component: () => import('pages/tfautorizacionesfuncionamiento/list.vue'),
			props: route => passRouteToProps(route)
		},
		{ 
			path: '/tfautorizacionesfuncionamiento/view/:id', 
			name: 'tfautorizacionesfuncionamientoview', 
			component: () => import('pages/tfautorizacionesfuncionamiento/view.vue'), 
			props: true 
		},
		{ 
			path: '/tfautorizacionesfuncionamiento/add', 
			name: 'tfautorizacionesfuncionamientoadd', 
			component: () => import('pages/tfautorizacionesfuncionamiento/add.vue'), 
			props: true 
		},
		{ 
			path: '/tfautorizacionesfuncionamiento/edit/:id', 
			name: 'tfautorizacionesfuncionamientoedit', 
			component: () => import('pages/tfautorizacionesfuncionamiento/edit.vue'), 
			props: true 
		},

//tfcodigosinstalaciones routes
		{
			path: '/tfcodigosinstalaciones/:fieldName?/:fieldValue?',
			name: 'tfcodigosinstalacioneslist',
			component: () => import('pages/tfcodigosinstalaciones/list.vue'),
			props: route => passRouteToProps(route)
		},
		{ 
			path: '/tfcodigosinstalaciones/view/:id', 
			name: 'tfcodigosinstalacionesview', 
			component: () => import('pages/tfcodigosinstalaciones/view.vue'), 
			props: true 
		},
		{ 
			path: '/tfcodigosinstalaciones/add', 
			name: 'tfcodigosinstalacionesadd', 
			component: () => import('pages/tfcodigosinstalaciones/add.vue'), 
			props: true 
		},
		{ 
			path: '/tfcodigosinstalaciones/edit/:id', 
			name: 'tfcodigosinstalacionesedit', 
			component: () => import('pages/tfcodigosinstalaciones/edit.vue'), 
			props: true 
		},

//tfconductores routes
		{
			path: '/tfconductores/:fieldName?/:fieldValue?',
			name: 'tfconductoreslist',
			component: () => import('pages/tfconductores/list.vue'),
			props: route => passRouteToProps(route)
		},
		{ 
			path: '/tfconductores/view/:id', 
			name: 'tfconductoresview', 
			component: () => import('pages/tfconductores/view.vue'), 
			props: true 
		},
		{ 
			path: '/tfconductores/add', 
			name: 'tfconductoresadd', 
			component: () => import('pages/tfconductores/add.vue'), 
			props: true 
		},
		{ 
			path: '/tfconductores/edit/:id', 
			name: 'tfconductoresedit', 
			component: () => import('pages/tfconductores/edit.vue'), 
			props: true 
		},

//tfconstrucciones routes
		{
			path: '/tfconstrucciones/:fieldName?/:fieldValue?',
			name: 'tfconstruccioneslist',
			component: () => import('pages/tfconstrucciones/list.vue'),
			props: route => passRouteToProps(route)
		},
		{ 
			path: '/tfconstrucciones/view/:id', 
			name: 'tfconstruccionesview', 
			component: () => import('pages/tfconstrucciones/view.vue'), 
			props: true 
		},
		{ 
			path: '/tfconstrucciones/add', 
			name: 'tfconstruccionesadd', 
			component: () => import('pages/tfconstrucciones/add.vue'), 
			props: true 
		},
		{ 
			path: '/tfconstrucciones/edit/:id', 
			name: 'tfconstruccionesedit', 
			component: () => import('pages/tfconstrucciones/edit.vue'), 
			props: true 
		},

//tfdocumentosadjuntos routes
		{
			path: '/tfdocumentosadjuntos/:fieldName?/:fieldValue?',
			name: 'tfdocumentosadjuntoslist',
			component: () => import('pages/tfdocumentosadjuntos/list.vue'),
			props: route => passRouteToProps(route)
		},
		{ 
			path: '/tfdocumentosadjuntos/view/:id', 
			name: 'tfdocumentosadjuntosview', 
			component: () => import('pages/tfdocumentosadjuntos/view.vue'), 
			props: true 
		},
		{ 
			path: '/tfdocumentosadjuntos/add', 
			name: 'tfdocumentosadjuntosadd', 
			component: () => import('pages/tfdocumentosadjuntos/add.vue'), 
			props: true 
		},
		{ 
			path: '/tfdocumentosadjuntos/edit/:id', 
			name: 'tfdocumentosadjuntosedit', 
			component: () => import('pages/tfdocumentosadjuntos/edit.vue'), 
			props: true 
		},

//tfdomiciliotitulares routes
		{
			path: '/tfdomiciliotitulares/:fieldName?/:fieldValue?',
			name: 'tfdomiciliotitulareslist',
			component: () => import('pages/tfdomiciliotitulares/list.vue'),
			props: route => passRouteToProps(route)
		},
		{ 
			path: '/tfdomiciliotitulares/view/:id', 
			name: 'tfdomiciliotitularesview', 
			component: () => import('pages/tfdomiciliotitulares/view.vue'), 
			props: true 
		},
		{ 
			path: '/tfdomiciliotitulares/add', 
			name: 'tfdomiciliotitularesadd', 
			component: () => import('pages/tfdomiciliotitulares/add.vue'), 
			props: true 
		},
		{ 
			path: '/tfdomiciliotitulares/edit/:id', 
			name: 'tfdomiciliotitularesedit', 
			component: () => import('pages/tfdomiciliotitulares/edit.vue'), 
			props: true 
		},

//tfedificaciones routes
		{
			path: '/tfedificaciones/:fieldName?/:fieldValue?',
			name: 'tfedificacioneslist',
			component: () => import('pages/tfedificaciones/list.vue'),
			props: route => passRouteToProps(route)
		},
		{ 
			path: '/tfedificaciones/view/:id', 
			name: 'tfedificacionesview', 
			component: () => import('pages/tfedificaciones/view.vue'), 
			props: true 
		},
		{ 
			path: '/tfedificaciones/add', 
			name: 'tfedificacionesadd', 
			component: () => import('pages/tfedificaciones/add.vue'), 
			props: true 
		},
		{ 
			path: '/tfedificaciones/edit/:id', 
			name: 'tfedificacionesedit', 
			component: () => import('pages/tfedificaciones/edit.vue'), 
			props: true 
		},

//tfexoneracionespredio routes
		{
			path: '/tfexoneracionespredio/:fieldName?/:fieldValue?',
			name: 'tfexoneracionesprediolist',
			component: () => import('pages/tfexoneracionespredio/list.vue'),
			props: route => passRouteToProps(route)
		},
		{ 
			path: '/tfexoneracionespredio/view/:id', 
			name: 'tfexoneracionespredioview', 
			component: () => import('pages/tfexoneracionespredio/view.vue'), 
			props: true 
		},
		{ 
			path: '/tfexoneracionespredio/add', 
			name: 'tfexoneracionespredioadd', 
			component: () => import('pages/tfexoneracionespredio/add.vue'), 
			props: true 
		},
		{ 
			path: '/tfexoneracionespredio/edit/:id', 
			name: 'tfexoneracionespredioedit', 
			component: () => import('pages/tfexoneracionespredio/edit.vue'), 
			props: true 
		},

//tfexoneracionestitular routes
		{
			path: '/tfexoneracionestitular/:fieldName?/:fieldValue?',
			name: 'tfexoneracionestitularlist',
			component: () => import('pages/tfexoneracionestitular/list.vue'),
			props: route => passRouteToProps(route)
		},
		{ 
			path: '/tfexoneracionestitular/view/:id', 
			name: 'tfexoneracionestitularview', 
			component: () => import('pages/tfexoneracionestitular/view.vue'), 
			props: true 
		},
		{ 
			path: '/tfexoneracionestitular/add', 
			name: 'tfexoneracionestitularadd', 
			component: () => import('pages/tfexoneracionestitular/add.vue'), 
			props: true 
		},
		{ 
			path: '/tfexoneracionestitular/edit/:id', 
			name: 'tfexoneracionestitularedit', 
			component: () => import('pages/tfexoneracionestitular/edit.vue'), 
			props: true 
		},

//tffichas routes
		{
			path: '/tffichas/:fieldName?/:fieldValue?',
			name: 'tffichaslist',
			component: () => import('pages/tffichas/list.vue'),
			props: route => passRouteToProps(route)
		},
		{ 
			path: '/tffichas/view/:id', 
			name: 'tffichasview', 
			component: () => import('pages/tffichas/view.vue'), 
			props: true 
		},
		{ 
			path: '/tffichas/add', 
			name: 'tffichasadd', 
			component: () => import('pages/tffichas/add.vue'), 
			props: true 
		},
		{ 
			path: '/tffichas/edit/:id', 
			name: 'tffichasedit', 
			component: () => import('pages/tffichas/edit.vue'), 
			props: true 
		},

//tffichasbienescomunes routes
		{
			path: '/tffichasbienescomunes/:fieldName?/:fieldValue?',
			name: 'tffichasbienescomuneslist',
			component: () => import('pages/tffichasbienescomunes/list.vue'),
			props: route => passRouteToProps(route)
		},
		{ 
			path: '/tffichasbienescomunes/view/:id', 
			name: 'tffichasbienescomunesview', 
			component: () => import('pages/tffichasbienescomunes/view.vue'), 
			props: true 
		},
		{ 
			path: '/tffichasbienescomunes/add', 
			name: 'tffichasbienescomunesadd', 
			component: () => import('pages/tffichasbienescomunes/add.vue'), 
			props: true 
		},
		{ 
			path: '/tffichasbienescomunes/edit/:id', 
			name: 'tffichasbienescomunesedit', 
			component: () => import('pages/tffichasbienescomunes/edit.vue'), 
			props: true 
		},

//tffichascotitularidades routes
		{
			path: '/tffichascotitularidades/:fieldName?/:fieldValue?',
			name: 'tffichascotitularidadeslist',
			component: () => import('pages/tffichascotitularidades/list.vue'),
			props: route => passRouteToProps(route)
		},
		{ 
			path: '/tffichascotitularidades/view/:id', 
			name: 'tffichascotitularidadesview', 
			component: () => import('pages/tffichascotitularidades/view.vue'), 
			props: true 
		},
		{ 
			path: '/tffichascotitularidades/add', 
			name: 'tffichascotitularidadesadd', 
			component: () => import('pages/tffichascotitularidades/add.vue'), 
			props: true 
		},
		{ 
			path: '/tffichascotitularidades/edit/:id', 
			name: 'tffichascotitularidadesedit', 
			component: () => import('pages/tffichascotitularidades/edit.vue'), 
			props: true 
		},

//tffichaseconomicas routes
		{
			path: '/tffichaseconomicas/:fieldName?/:fieldValue?',
			name: 'tffichaseconomicaslist',
			component: () => import('pages/tffichaseconomicas/list.vue'),
			props: route => passRouteToProps(route)
		},
		{ 
			path: '/tffichaseconomicas/view/:id', 
			name: 'tffichaseconomicasview', 
			component: () => import('pages/tffichaseconomicas/view.vue'), 
			props: true 
		},
		{ 
			path: '/tffichaseconomicas/add', 
			name: 'tffichaseconomicasadd', 
			component: () => import('pages/tffichaseconomicas/add.vue'), 
			props: true 
		},
		{ 
			path: '/tffichaseconomicas/edit/:id', 
			name: 'tffichaseconomicasedit', 
			component: () => import('pages/tffichaseconomicas/edit.vue'), 
			props: true 
		},

//tffichasindividuales routes
		{
			path: '/tffichasindividuales/:fieldName?/:fieldValue?',
			name: 'tffichasindividualeslist',
			component: () => import('pages/tffichasindividuales/list.vue'),
			props: route => passRouteToProps(route)
		},
		{ 
			path: '/tffichasindividuales/view/:id', 
			name: 'tffichasindividualesview', 
			component: () => import('pages/tffichasindividuales/view.vue'), 
			props: true 
		},
		{ 
			path: '/tffichasindividuales/add', 
			name: 'tffichasindividualesadd', 
			component: () => import('pages/tffichasindividuales/add.vue'), 
			props: true 
		},
		{ 
			path: '/tffichasindividuales/edit/:id', 
			name: 'tffichasindividualesedit', 
			component: () => import('pages/tffichasindividuales/edit.vue'), 
			props: true 
		},

//tfhaburbana routes
		{
			path: '/tfhaburbana/:fieldName?/:fieldValue?',
			name: 'tfhaburbanalist',
			component: () => import('pages/tfhaburbana/list.vue'),
			props: route => passRouteToProps(route)
		},
		{ 
			path: '/tfhaburbana/view/:id', 
			name: 'tfhaburbanaview', 
			component: () => import('pages/tfhaburbana/view.vue'), 
			props: true 
		},
		{ 
			path: '/tfhaburbana/add', 
			name: 'tfhaburbanaadd', 
			component: () => import('pages/tfhaburbana/add.vue'), 
			props: true 
		},
		{ 
			path: '/tfhaburbana/edit/:id', 
			name: 'tfhaburbanaedit', 
			component: () => import('pages/tfhaburbana/edit.vue'), 
			props: true 
		},

//tfhistoriavia routes
		{
			path: '/tfhistoriavia/:fieldName?/:fieldValue?',
			name: 'tfhistoriavialist',
			component: () => import('pages/tfhistoriavia/list.vue'),
			props: route => passRouteToProps(route)
		},
		{ 
			path: '/tfhistoriavia/view/:id', 
			name: 'tfhistoriaviaview', 
			component: () => import('pages/tfhistoriavia/view.vue'), 
			props: true 
		},
		{ 
			path: '/tfhistoriavia/add', 
			name: 'tfhistoriaviaadd', 
			component: () => import('pages/tfhistoriavia/add.vue'), 
			props: true 
		},
		{ 
			path: '/tfhistoriavia/edit/:id', 
			name: 'tfhistoriaviaedit', 
			component: () => import('pages/tfhistoriavia/edit.vue'), 
			props: true 
		},

//tfingresos routes
		{
			path: '/tfingresos/:fieldName?/:fieldValue?',
			name: 'tfingresoslist',
			component: () => import('pages/tfingresos/list.vue'),
			props: route => passRouteToProps(route)
		},
		{ 
			path: '/tfingresos/view/:id', 
			name: 'tfingresosview', 
			component: () => import('pages/tfingresos/view.vue'), 
			props: true 
		},
		{ 
			path: '/tfingresos/add', 
			name: 'tfingresosadd', 
			component: () => import('pages/tfingresos/add.vue'), 
			props: true 
		},
		{ 
			path: '/tfingresos/edit/:id', 
			name: 'tfingresosedit', 
			component: () => import('pages/tfingresos/edit.vue'), 
			props: true 
		},

//tfinstalaciones routes
		{
			path: '/tfinstalaciones/:fieldName?/:fieldValue?',
			name: 'tfinstalacioneslist',
			component: () => import('pages/tfinstalaciones/list.vue'),
			props: route => passRouteToProps(route)
		},
		{ 
			path: '/tfinstalaciones/view/:id', 
			name: 'tfinstalacionesview', 
			component: () => import('pages/tfinstalaciones/view.vue'), 
			props: true 
		},
		{ 
			path: '/tfinstalaciones/add', 
			name: 'tfinstalacionesadd', 
			component: () => import('pages/tfinstalaciones/add.vue'), 
			props: true 
		},
		{ 
			path: '/tfinstalaciones/edit/:id', 
			name: 'tfinstalacionesedit', 
			component: () => import('pages/tfinstalaciones/edit.vue'), 
			props: true 
		},

//tfinstitucion routes
		{
			path: '/tfinstitucion/:fieldName?/:fieldValue?',
			name: 'tfinstitucionlist',
			component: () => import('pages/tfinstitucion/list.vue'),
			props: route => passRouteToProps(route)
		},
		{ 
			path: '/tfinstitucion/view/:id', 
			name: 'tfinstitucionview', 
			component: () => import('pages/tfinstitucion/view.vue'), 
			props: true 
		},
		{ 
			path: '/tfinstitucion/add', 
			name: 'tfinstitucionadd', 
			component: () => import('pages/tfinstitucion/add.vue'), 
			props: true 
		},
		{ 
			path: '/tfinstitucion/edit/:id', 
			name: 'tfinstitucionedit', 
			component: () => import('pages/tfinstitucion/edit.vue'), 
			props: true 
		},

//tflinderos routes
		{
			path: '/tflinderos/:fieldName?/:fieldValue?',
			name: 'tflinderoslist',
			component: () => import('pages/tflinderos/list.vue'),
			props: route => passRouteToProps(route)
		},
		{ 
			path: '/tflinderos/view/:id', 
			name: 'tflinderosview', 
			component: () => import('pages/tflinderos/view.vue'), 
			props: true 
		},
		{ 
			path: '/tflinderos/add', 
			name: 'tflinderosadd', 
			component: () => import('pages/tflinderos/add.vue'), 
			props: true 
		},
		{ 
			path: '/tflinderos/edit/:id', 
			name: 'tflinderosedit', 
			component: () => import('pages/tflinderos/edit.vue'), 
			props: true 
		},

//tflitigantes routes
		{
			path: '/tflitigantes/:fieldName?/:fieldValue?',
			name: 'tflitiganteslist',
			component: () => import('pages/tflitigantes/list.vue'),
			props: route => passRouteToProps(route)
		},
		{ 
			path: '/tflitigantes/view/:id', 
			name: 'tflitigantesview', 
			component: () => import('pages/tflitigantes/view.vue'), 
			props: true 
		},
		{ 
			path: '/tflitigantes/add', 
			name: 'tflitigantesadd', 
			component: () => import('pages/tflitigantes/add.vue'), 
			props: true 
		},
		{ 
			path: '/tflitigantes/edit/:id', 
			name: 'tflitigantesedit', 
			component: () => import('pages/tflitigantes/edit.vue'), 
			props: true 
		},

//tflotes routes
		{
			path: '/tflotes/:fieldName?/:fieldValue?',
			name: 'tfloteslist',
			component: () => import('pages/tflotes/list.vue'),
			props: route => passRouteToProps(route)
		},
		{ 
			path: '/tflotes/view/:id', 
			name: 'tflotesview', 
			component: () => import('pages/tflotes/view.vue'), 
			props: true 
		},
		{ 
			path: '/tflotes/add', 
			name: 'tflotesadd', 
			component: () => import('pages/tflotes/add.vue'), 
			props: true 
		},
		{ 
			path: '/tflotes/edit/:id', 
			name: 'tflotesedit', 
			component: () => import('pages/tflotes/edit.vue'), 
			props: true 
		},

//tfmanzanas routes
		{
			path: '/tfmanzanas/:fieldName?/:fieldValue?',
			name: 'tfmanzanaslist',
			component: () => import('pages/tfmanzanas/list.vue'),
			props: route => passRouteToProps(route)
		},
		{ 
			path: '/tfmanzanas/view/:id', 
			name: 'tfmanzanasview', 
			component: () => import('pages/tfmanzanas/view.vue'), 
			props: true 
		},
		{ 
			path: '/tfmanzanas/add', 
			name: 'tfmanzanasadd', 
			component: () => import('pages/tfmanzanas/add.vue'), 
			props: true 
		},
		{ 
			path: '/tfmanzanas/edit/:id', 
			name: 'tfmanzanasedit', 
			component: () => import('pages/tfmanzanas/edit.vue'), 
			props: true 
		},

//tfnotarias routes
		{
			path: '/tfnotarias/:fieldName?/:fieldValue?',
			name: 'tfnotariaslist',
			component: () => import('pages/tfnotarias/list.vue'),
			props: route => passRouteToProps(route)
		},
		{ 
			path: '/tfnotarias/view/:id', 
			name: 'tfnotariasview', 
			component: () => import('pages/tfnotarias/view.vue'), 
			props: true 
		},
		{ 
			path: '/tfnotarias/add', 
			name: 'tfnotariasadd', 
			component: () => import('pages/tfnotarias/add.vue'), 
			props: true 
		},
		{ 
			path: '/tfnotarias/edit/:id', 
			name: 'tfnotariasedit', 
			component: () => import('pages/tfnotarias/edit.vue'), 
			props: true 
		},

//tfpersonas routes
		{
			path: '/tfpersonas/:fieldName?/:fieldValue?',
			name: 'tfpersonaslist',
			component: () => import('pages/tfpersonas/list.vue'),
			props: route => passRouteToProps(route)
		},
		{ 
			path: '/tfpersonas/view/:id', 
			name: 'tfpersonasview', 
			component: () => import('pages/tfpersonas/view.vue'), 
			props: true 
		},
		{ 
			path: '/tfpersonas/add', 
			name: 'tfpersonasadd', 
			component: () => import('pages/tfpersonas/add.vue'), 
			props: true 
		},
		{ 
			path: '/tfpersonas/edit/:id', 
			name: 'tfpersonasedit', 
			component: () => import('pages/tfpersonas/edit.vue'), 
			props: true 
		},

//tfpuertas routes
		{
			path: '/tfpuertas/:fieldName?/:fieldValue?',
			name: 'tfpuertaslist',
			component: () => import('pages/tfpuertas/list.vue'),
			props: route => passRouteToProps(route)
		},
		{ 
			path: '/tfpuertas/view/:id', 
			name: 'tfpuertasview', 
			component: () => import('pages/tfpuertas/view.vue'), 
			props: true 
		},
		{ 
			path: '/tfpuertas/add', 
			name: 'tfpuertasadd', 
			component: () => import('pages/tfpuertas/add.vue'), 
			props: true 
		},
		{ 
			path: '/tfpuertas/edit/:id', 
			name: 'tfpuertasedit', 
			component: () => import('pages/tfpuertas/edit.vue'), 
			props: true 
		},

//tfrecapbbcc routes
		{
			path: '/tfrecapbbcc/:fieldName?/:fieldValue?',
			name: 'tfrecapbbcclist',
			component: () => import('pages/tfrecapbbcc/list.vue'),
			props: route => passRouteToProps(route)
		},
		{ 
			path: '/tfrecapbbcc/view/:id', 
			name: 'tfrecapbbccview', 
			component: () => import('pages/tfrecapbbcc/view.vue'), 
			props: true 
		},
		{ 
			path: '/tfrecapbbcc/add', 
			name: 'tfrecapbbccadd', 
			component: () => import('pages/tfrecapbbcc/add.vue'), 
			props: true 
		},
		{ 
			path: '/tfrecapbbcc/edit/:id', 
			name: 'tfrecapbbccedit', 
			component: () => import('pages/tfrecapbbcc/edit.vue'), 
			props: true 
		},

//tfrecapedificio routes
		{
			path: '/tfrecapedificio/:fieldName?/:fieldValue?',
			name: 'tfrecapedificiolist',
			component: () => import('pages/tfrecapedificio/list.vue'),
			props: route => passRouteToProps(route)
		},
		{ 
			path: '/tfrecapedificio/view/:id', 
			name: 'tfrecapedificioview', 
			component: () => import('pages/tfrecapedificio/view.vue'), 
			props: true 
		},
		{ 
			path: '/tfrecapedificio/add', 
			name: 'tfrecapedificioadd', 
			component: () => import('pages/tfrecapedificio/add.vue'), 
			props: true 
		},
		{ 
			path: '/tfrecapedificio/edit/:id', 
			name: 'tfrecapedificioedit', 
			component: () => import('pages/tfrecapedificio/edit.vue'), 
			props: true 
		},

//tfregistrolegal routes
		{
			path: '/tfregistrolegal/:fieldName?/:fieldValue?',
			name: 'tfregistrolegallist',
			component: () => import('pages/tfregistrolegal/list.vue'),
			props: route => passRouteToProps(route)
		},
		{ 
			path: '/tfregistrolegal/view/:id', 
			name: 'tfregistrolegalview', 
			component: () => import('pages/tfregistrolegal/view.vue'), 
			props: true 
		},
		{ 
			path: '/tfregistrolegal/add', 
			name: 'tfregistrolegaladd', 
			component: () => import('pages/tfregistrolegal/add.vue'), 
			props: true 
		},
		{ 
			path: '/tfregistrolegal/edit/:id', 
			name: 'tfregistrolegaledit', 
			component: () => import('pages/tfregistrolegal/edit.vue'), 
			props: true 
		},

//tfsectores routes
		{
			path: '/tfsectores/:fieldName?/:fieldValue?',
			name: 'tfsectoreslist',
			component: () => import('pages/tfsectores/list.vue'),
			props: route => passRouteToProps(route)
		},
		{ 
			path: '/tfsectores/view/:id', 
			name: 'tfsectoresview', 
			component: () => import('pages/tfsectores/view.vue'), 
			props: true 
		},
		{ 
			path: '/tfsectores/add', 
			name: 'tfsectoresadd', 
			component: () => import('pages/tfsectores/add.vue'), 
			props: true 
		},
		{ 
			path: '/tfsectores/edit/:id', 
			name: 'tfsectoresedit', 
			component: () => import('pages/tfsectores/edit.vue'), 
			props: true 
		},

//tfserviciosbasicos routes
		{
			path: '/tfserviciosbasicos/:fieldName?/:fieldValue?',
			name: 'tfserviciosbasicoslist',
			component: () => import('pages/tfserviciosbasicos/list.vue'),
			props: route => passRouteToProps(route)
		},
		{ 
			path: '/tfserviciosbasicos/view/:id', 
			name: 'tfserviciosbasicosview', 
			component: () => import('pages/tfserviciosbasicos/view.vue'), 
			props: true 
		},
		{ 
			path: '/tfserviciosbasicos/add', 
			name: 'tfserviciosbasicosadd', 
			component: () => import('pages/tfserviciosbasicos/add.vue'), 
			props: true 
		},
		{ 
			path: '/tfserviciosbasicos/edit/:id', 
			name: 'tfserviciosbasicosedit', 
			component: () => import('pages/tfserviciosbasicos/edit.vue'), 
			props: true 
		},

//tfsunarp routes
		{
			path: '/tfsunarp/:fieldName?/:fieldValue?',
			name: 'tfsunarplist',
			component: () => import('pages/tfsunarp/list.vue'),
			props: route => passRouteToProps(route)
		},
		{ 
			path: '/tfsunarp/view/:id', 
			name: 'tfsunarpview', 
			component: () => import('pages/tfsunarp/view.vue'), 
			props: true 
		},
		{ 
			path: '/tfsunarp/add', 
			name: 'tfsunarpadd', 
			component: () => import('pages/tfsunarp/add.vue'), 
			props: true 
		},
		{ 
			path: '/tfsunarp/edit/:id', 
			name: 'tfsunarpedit', 
			component: () => import('pages/tfsunarp/edit.vue'), 
			props: true 
		},

//tftablas routes
		{
			path: '/tftablas/:fieldName?/:fieldValue?',
			name: 'tftablaslist',
			component: () => import('pages/tftablas/list.vue'),
			props: route => passRouteToProps(route)
		},
		{ 
			path: '/tftablas/view/:id', 
			name: 'tftablasview', 
			component: () => import('pages/tftablas/view.vue'), 
			props: true 
		},
		{ 
			path: '/tftablas/add', 
			name: 'tftablasadd', 
			component: () => import('pages/tftablas/add.vue'), 
			props: true 
		},
		{ 
			path: '/tftablas/edit/:id', 
			name: 'tftablasedit', 
			component: () => import('pages/tftablas/edit.vue'), 
			props: true 
		},

//tftablascodigos routes
		{
			path: '/tftablascodigos/:fieldName?/:fieldValue?',
			name: 'tftablascodigoslist',
			component: () => import('pages/tftablascodigos/list.vue'),
			props: route => passRouteToProps(route)
		},
		{ 
			path: '/tftablascodigos/view/:id', 
			name: 'tftablascodigosview', 
			component: () => import('pages/tftablascodigos/view.vue'), 
			props: true 
		},
		{ 
			path: '/tftablascodigos/add', 
			name: 'tftablascodigosadd', 
			component: () => import('pages/tftablascodigos/add.vue'), 
			props: true 
		},
		{ 
			path: '/tftablascodigos/edit/:id', 
			name: 'tftablascodigosedit', 
			component: () => import('pages/tftablascodigos/edit.vue'), 
			props: true 
		},

//tftitulares routes
		{
			path: '/tftitulares/:fieldName?/:fieldValue?',
			name: 'tftitulareslist',
			component: () => import('pages/tftitulares/list.vue'),
			props: route => passRouteToProps(route)
		},
		{ 
			path: '/tftitulares/view/:id', 
			name: 'tftitularesview', 
			component: () => import('pages/tftitulares/view.vue'), 
			props: true 
		},
		{ 
			path: '/tftitulares/add', 
			name: 'tftitularesadd', 
			component: () => import('pages/tftitulares/add.vue'), 
			props: true 
		},
		{ 
			path: '/tftitulares/edit/:id', 
			name: 'tftitularesedit', 
			component: () => import('pages/tftitulares/edit.vue'), 
			props: true 
		},

//tfubigeo routes
		{
			path: '/tfubigeo/:fieldName?/:fieldValue?',
			name: 'tfubigeolist',
			component: () => import('pages/tfubigeo/list.vue'),
			props: route => passRouteToProps(route)
		},
		{ 
			path: '/tfubigeo/view/:id', 
			name: 'tfubigeoview', 
			component: () => import('pages/tfubigeo/view.vue'), 
			props: true 
		},
		{ 
			path: '/tfubigeo/add', 
			name: 'tfubigeoadd', 
			component: () => import('pages/tfubigeo/add.vue'), 
			props: true 
		},
		{ 
			path: '/tfubigeo/edit/:id', 
			name: 'tfubigeoedit', 
			component: () => import('pages/tfubigeo/edit.vue'), 
			props: true 
		},

//tfubigeos routes
		{
			path: '/tfubigeos/:fieldName?/:fieldValue?',
			name: 'tfubigeoslist',
			component: () => import('pages/tfubigeos/list.vue'),
			props: route => passRouteToProps(route)
		},
		{ 
			path: '/tfubigeos/view/:id', 
			name: 'tfubigeosview', 
			component: () => import('pages/tfubigeos/view.vue'), 
			props: true 
		},
		{ 
			path: '/tfubigeos/add', 
			name: 'tfubigeosadd', 
			component: () => import('pages/tfubigeos/add.vue'), 
			props: true 
		},
		{ 
			path: '/tfubigeos/edit/:id', 
			name: 'tfubigeosedit', 
			component: () => import('pages/tfubigeos/edit.vue'), 
			props: true 
		},

//tfunicat routes
		{
			path: '/tfunicat/:fieldName?/:fieldValue?',
			name: 'tfunicatlist',
			component: () => import('pages/tfunicat/list.vue'),
			props: route => passRouteToProps(route)
		},
		{ 
			path: '/tfunicat/view/:id', 
			name: 'tfunicatview', 
			component: () => import('pages/tfunicat/view.vue'), 
			props: true 
		},
		{ 
			path: '/tfunicat/add', 
			name: 'tfunicatadd', 
			component: () => import('pages/tfunicat/add.vue'), 
			props: true 
		},
		{ 
			path: '/tfunicat/edit/:id', 
			name: 'tfunicatedit', 
			component: () => import('pages/tfunicat/edit.vue'), 
			props: true 
		},

//tfusos routes
		{
			path: '/tfusos/:fieldName?/:fieldValue?',
			name: 'tfusoslist',
			component: () => import('pages/tfusos/list.vue'),
			props: route => passRouteToProps(route)
		},
		{ 
			path: '/tfusos/view/:id', 
			name: 'tfusosview', 
			component: () => import('pages/tfusos/view.vue'), 
			props: true 
		},
		{ 
			path: '/tfusos/add', 
			name: 'tfusosadd', 
			component: () => import('pages/tfusos/add.vue'), 
			props: true 
		},
		{ 
			path: '/tfusos/edit/:id', 
			name: 'tfusosedit', 
			component: () => import('pages/tfusos/edit.vue'), 
			props: true 
		},

//tfusosbc routes
		{
			path: '/tfusosbc/:fieldName?/:fieldValue?',
			name: 'tfusosbclist',
			component: () => import('pages/tfusosbc/list.vue'),
			props: route => passRouteToProps(route)
		},
		{ 
			path: '/tfusosbc/view/:id', 
			name: 'tfusosbcview', 
			component: () => import('pages/tfusosbc/view.vue'), 
			props: true 
		},
		{ 
			path: '/tfusosbc/add', 
			name: 'tfusosbcadd', 
			component: () => import('pages/tfusosbc/add.vue'), 
			props: true 
		},
		{ 
			path: '/tfusosbc/edit/:id', 
			name: 'tfusosbcedit', 
			component: () => import('pages/tfusosbc/edit.vue'), 
			props: true 
		},

//tfusuarios routes
		{
			path: '/tfusuarios/:fieldName?/:fieldValue?',
			name: 'tfusuarioslist',
			component: () => import('pages/tfusuarios/list.vue'),
			props: route => passRouteToProps(route)
		},
		{ 
			path: '/tfusuarios/view/:id', 
			name: 'tfusuariosview', 
			component: () => import('pages/tfusuarios/view.vue'), 
			props: true 
		},
		{ 
			path: '/tfusuarios/add', 
			name: 'tfusuariosadd', 
			component: () => import('pages/tfusuarios/add.vue'), 
			props: true 
		},
		{ 
			path: '/tfusuarios/edit/:id', 
			name: 'tfusuariosedit', 
			component: () => import('pages/tfusuarios/edit.vue'), 
			props: true 
		},

//tfvias routes
		{
			path: '/tfvias/:fieldName?/:fieldValue?',
			name: 'tfviaslist',
			component: () => import('pages/tfvias/list.vue'),
			props: route => passRouteToProps(route)
		},
		{ 
			path: '/tfvias/view/:id', 
			name: 'tfviasview', 
			component: () => import('pages/tfvias/view.vue'), 
			props: true 
		},
		{ 
			path: '/tfvias/add', 
			name: 'tfviasadd', 
			component: () => import('pages/tfvias/add.vue'), 
			props: true 
		},
		{ 
			path: '/tfvias/edit/:id', 
			name: 'tfviasedit', 
			component: () => import('pages/tfvias/edit.vue'), 
			props: true 
		},

//tfviashaburba routes
		{
			path: '/tfviashaburba/:fieldName?/:fieldValue?',
			name: 'tfviashaburbalist',
			component: () => import('pages/tfviashaburba/list.vue'),
			props: route => passRouteToProps(route)
		},
		{ 
			path: '/tfviashaburba/view/:id', 
			name: 'tfviashaburbaview', 
			component: () => import('pages/tfviashaburba/view.vue'), 
			props: true 
		},
		{ 
			path: '/tfviashaburba/add', 
			name: 'tfviashaburbaadd', 
			component: () => import('pages/tfviashaburba/add.vue'), 
			props: true 
		},
		{ 
			path: '/tfviashaburba/edit/:id', 
			name: 'tfviashaburbaedit', 
			component: () => import('pages/tfviashaburba/edit.vue'), 
			props: true 
		},

		
		
		
		

		//Error pages
		{ path:  '/error/forbidden', name: 'forbidden',  component: () => import('pages/errors/forbidden.vue') },
		{ path: '/error/notfound',  name: 'notfound', component: () => import('pages/errors/pagenotfound.vue') }
	],
	
	},
	{ path: '/:catchAll(.*)*', component: () => import('pages/errors/pagenotfound.vue') }
];

export default route(async function () {
  const createHistory = process.env.SERVER
    ? createMemoryHistory
    : (process.env.VUE_ROUTER_MODE == 'history' ? createWebHistory : createWebHashHistory)
	
	const mainRoute = routes.find(x => x.name = "main");
	
	
	const Router = createRouter({
	scrollBehavior(to, from, savedPostion){
		if(savedPostion) return savedPostion;
		return { top:0 }
	},
    routes,
    // Leave this as is and make changes in quasar.conf.js instead!
    // quasar.conf.js -> build -> vueRouterMode
    // quasar.conf.js -> build -> publicPath
    history: createHistory(process.env.VUE_ROUTER_BASE)
  })
  return Router
})

