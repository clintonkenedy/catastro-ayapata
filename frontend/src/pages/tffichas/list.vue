<template>
    <main class="main-page" id="">
        <template v-if="showHeader">
            <section class="page-section q-pa-md" >
                <div class="container-fluid">
                    <div class="row justify-between items-center q-col-gutter-md">
                        <div  class="col " >
                            <div class=" text-h6 text-primary" >
                                Tf Fichas
                            </div>
                        </div>
                        <div  class="col-md-auto col-12 " >
                            <q-btn       :rounded="false"  size=""  color="primary" no-caps  unelevated   :to="`/tffichas/add`" class="full-width" >
                                <q-icon name="add"></q-icon>                                
                                Agregar nuevo 
                            </q-btn>
                        </div>
                        <div  class="col-md-auto col-12 " >
                            <q-input debounce="1000"  placeholder="Buscar" v-model="filters.search.value" >
                            <template v-slot:append>
                                <q-icon name="search"></q-icon>
                            </template>
                            </q-input>
                        </div>
                        <!--topcardactiontemplates-->
                    </div>
                </div>
            </section>
        </template>
        <section class="page-section " >
            <div class="container-fluid">
                <div class="row q-col-gutter-x-md">
                    <div  class="col comp-grid" >
                        <div class="row q-gutter-sm">
                            <filter-tags :controller="page.filterController" />
                        </div>
                        <div >
                            <template v-if="showBreadcrumbs && pageBreadCrumb.fieldName">
                                <q-card class="q-pa-md q-mb-sm text-bold nice-shadow-6">
                                    <q-breadcrumbs>
                                    <q-breadcrumbs-el icon="arrow_back" class="text-capitalize" :label="pageBreadCrumb.fieldName" to="/tffichas"></q-breadcrumbs-el>
                                    <q-breadcrumbs-el :label="pageBreadCrumb.fieldValue" ></q-breadcrumbs-el>
                                </q-breadcrumbs>
                            </q-card>
                        </template>
                        <!-- page records template -->
                        <div >
                            <q-table 
                            :grid="$q.screen.lt.md"
                            :flat="$q.screen.gt.md"
                            table-header-class="text-h4 bg-grey-2"
                            :bordered="false"
                            :columns="app.menus.tffichaslistheader" 
                            :rows="records"
                            :binary-state-sort="true"
                            separator="horizontal"
                            :dense="true"
                            v-model:selected="selectedItems"
                            selection="multiple"
                            row-key="id_ficha" 
                            v-model:pagination="pagination"
                            hide-bottom
                            @request="setPagination"
                            :loading="loading">
                            <!-- Start of Table Layout -->
                            <template v-slot:body="props">
                                <q-tr :class="{selected: isCurrentRecord(props.row)}" :props="props">
                                    <q-td auto-width>
                                        <q-checkbox dense v-model="props.selected"></q-checkbox>
                                    </q-td>
                                    <q-td  key="id_ficha" :props="props">
                                        <q-btn padding="xs"   :rounded="false"  color="primary"  no-caps  unelevated   flat :to="`/tffichas/view/${props.row.id_ficha}`">{{ props.row.id_ficha }}</q-btn>
                                    </q-td>
                                    <q-td  key="tipo_ficha" :props="props">
                                        {{ props.row.tipo_ficha }}
                                    </q-td>
                                    <q-td  key="nume_ficha" :props="props">
                                        {{ props.row.nume_ficha }}
                                    </q-td>
                                    <q-td  key="id_lote" :props="props">
                                        {{ props.row.id_lote }}
                                    </q-td>
                                    <q-td  key="dc" :props="props">
                                        {{ props.row.dc }}
                                    </q-td>
                                    <q-td  key="nume_ficha_lote" :props="props">
                                        {{ props.row.nume_ficha_lote }}
                                    </q-td>
                                    <q-td  key="declarante" :props="props">
                                        {{ props.row.declarante }}
                                    </q-td>
                                    <q-td  key="fecha_declarante" :props="props">
                                        {{ props.row.fecha_declarante }}
                                    </q-td>
                                    <q-td  key="supervisor" :props="props">
                                        {{ props.row.supervisor }}
                                    </q-td>
                                    <q-td  key="fecha_supervision" :props="props">
                                        {{ props.row.fecha_supervision }}
                                    </q-td>
                                    <q-td  key="tecnico" :props="props">
                                        {{ props.row.tecnico }}
                                    </q-td>
                                    <q-td  key="fecha_levantamiento" :props="props">
                                        {{ props.row.fecha_levantamiento }}
                                    </q-td>
                                    <q-td  key="verificador" :props="props">
                                        {{ props.row.verificador }}
                                    </q-td>
                                    <q-td  key="fecha_verificacion" :props="props">
                                        {{ props.row.fecha_verificacion }}
                                    </q-td>
                                    <q-td  key="nume_registro" :props="props">
                                        {{ props.row.nume_registro }}
                                    </q-td>
                                    <q-td  key="id_uni_cat" :props="props">
                                        <q-btn v-if="props.row.id_uni_cat" @click="app.openPageDialog({ page: 'tfunicat/view', url: `/tfunicat/view/${props.row.id_uni_cat}` , closeBtn: true })" padding="xs" flat color="primary" no-caps >
                                            <q-icon name="visibility" size="xs"  class="q-mr-xs"></q-icon>  Tf Uni Cat
                                        </q-btn>
                                    </q-td>
                                    <q-td  key="id_usuario" :props="props">
                                        <q-btn v-if="props.row.id_usuario" @click="app.openPageDialog({ page: 'tfusuarios/view', url: `/tfusuarios/view/${props.row.id_usuario}` , closeBtn: true })" padding="xs" flat color="primary" no-caps >
                                            <q-icon name="visibility" size="xs"  class="q-mr-xs"></q-icon>  Tf Usuarios
                                        </q-btn>
                                    </q-td>
                                    <q-td  key="fecha_grabado" :props="props">
                                        {{ props.row.fecha_grabado }}
                                    </q-td>
                                    <q-td  key="activo" :props="props">
                                        {{ props.row.activo }}
                                    </q-td>
                                    <q-td key="btnactions" :props="props" auto-width>
                                        <div class="row q-col-gutter-xs justify-end">
                                            <q-btn icon="menu" padding="xs" round flat color="grey">
                                                <q-menu auto-close transition-show="flip-right"  transition-hide="flip-left" self="center middle" anchor="center middle">
                                                    <q-list dense rounded nav>
                                                        <q-item link clickable v-ripple :to="`/tffichas/view/${props.row.id_ficha}`">
                                                            <q-item-section>
                                                                <q-icon color="primary" size="sm" name="visibility"></q-icon>
                                                            </q-item-section>
                                                            <q-item-section>View</q-item-section>
                                                        </q-item>
                                                        <q-item link clickable v-ripple :to="`/tffichas/edit/${props.row.id_ficha}`">
                                                            <q-item-section>
                                                                <q-icon color="positive" size="sm" name="edit"></q-icon>
                                                            </q-item-section>
                                                            <q-item-section>Edit</q-item-section>
                                                        </q-item>
                                                        <q-item link clickable v-ripple @click="deleteItem(props.row.id_ficha)">
                                                            <q-item-section>
                                                                <q-icon color="negative" size="sm" name="delete_sweep"></q-icon>
                                                            </q-item-section>
                                                            <q-item-section>Delete</q-item-section>
                                                        </q-item>
                                                    </q-list>
                                                </q-menu>
                                            </q-btn>
                                        </div>
                                    </q-td>
                                </q-tr>
                            </template>
                            <!-- End of Table Layout-->
                            <!-- Start of Mobile Grid Layout-->
                            <template v-slot:item="props">
                                <div class="q-pa-xs col-xs-12 col-sm-6 col-md-4 col-lg-3 grid-style-transition" :style="props.selected ? 'transform: scale(0.95);' : ''">
                                    <q-card  :flat="isSubPage" class="q-pa-md nice-shadow-6">
                                        <q-card-section>
                                            <div class="row q-py-sm q-col-gutter-md justify-content-between">
                                                <div class="col-auto text-caption">
                                                    Id Ficha
                                                </div>
                                                <div class="col text-right">
                                                    <q-btn padding="xs"   :rounded="false"  color="primary"  no-caps  unelevated   flat :to="`/tffichas/view/${props.row.id_ficha}`">{{ props.row.id_ficha }}</q-btn>
                                                </div>
                                            </div>
                                            <div class="row q-py-sm q-col-gutter-md justify-content-between">
                                                <div class="col-auto text-caption">
                                                    Tipo Ficha
                                                </div>
                                                <div class="col text-right">
                                                    {{ props.row.tipo_ficha }}
                                                </div>
                                            </div>
                                            <div class="row q-py-sm q-col-gutter-md justify-content-between">
                                                <div class="col-auto text-caption">
                                                    Nume Ficha
                                                </div>
                                                <div class="col text-right">
                                                    {{ props.row.nume_ficha }}
                                                </div>
                                            </div>
                                            <div class="row q-py-sm q-col-gutter-md justify-content-between">
                                                <div class="col-auto text-caption">
                                                    Id Lote
                                                </div>
                                                <div class="col text-right">
                                                    {{ props.row.id_lote }}
                                                </div>
                                            </div>
                                            <div class="row q-py-sm q-col-gutter-md justify-content-between">
                                                <div class="col-auto text-caption">
                                                    Dc
                                                </div>
                                                <div class="col text-right">
                                                    {{ props.row.dc }}
                                                </div>
                                            </div>
                                            <div class="row q-py-sm q-col-gutter-md justify-content-between">
                                                <div class="col-auto text-caption">
                                                    Nume Ficha Lote
                                                </div>
                                                <div class="col text-right">
                                                    {{ props.row.nume_ficha_lote }}
                                                </div>
                                            </div>
                                            <div class="row q-py-sm q-col-gutter-md justify-content-between">
                                                <div class="col-auto text-caption">
                                                    Declarante
                                                </div>
                                                <div class="col text-right">
                                                    {{ props.row.declarante }}
                                                </div>
                                            </div>
                                            <div class="row q-py-sm q-col-gutter-md justify-content-between">
                                                <div class="col-auto text-caption">
                                                    Fecha Declarante
                                                </div>
                                                <div class="col text-right">
                                                    {{ props.row.fecha_declarante }}
                                                </div>
                                            </div>
                                            <div class="row q-py-sm q-col-gutter-md justify-content-between">
                                                <div class="col-auto text-caption">
                                                    Supervisor
                                                </div>
                                                <div class="col text-right">
                                                    {{ props.row.supervisor }}
                                                </div>
                                            </div>
                                            <div class="row q-py-sm q-col-gutter-md justify-content-between">
                                                <div class="col-auto text-caption">
                                                    Fecha Supervision
                                                </div>
                                                <div class="col text-right">
                                                    {{ props.row.fecha_supervision }}
                                                </div>
                                            </div>
                                            <div class="row q-py-sm q-col-gutter-md justify-content-between">
                                                <div class="col-auto text-caption">
                                                    Tecnico
                                                </div>
                                                <div class="col text-right">
                                                    {{ props.row.tecnico }}
                                                </div>
                                            </div>
                                            <div class="row q-py-sm q-col-gutter-md justify-content-between">
                                                <div class="col-auto text-caption">
                                                    Fecha Levantamiento
                                                </div>
                                                <div class="col text-right">
                                                    {{ props.row.fecha_levantamiento }}
                                                </div>
                                            </div>
                                            <div class="row q-py-sm q-col-gutter-md justify-content-between">
                                                <div class="col-auto text-caption">
                                                    Verificador
                                                </div>
                                                <div class="col text-right">
                                                    {{ props.row.verificador }}
                                                </div>
                                            </div>
                                            <div class="row q-py-sm q-col-gutter-md justify-content-between">
                                                <div class="col-auto text-caption">
                                                    Fecha Verificacion
                                                </div>
                                                <div class="col text-right">
                                                    {{ props.row.fecha_verificacion }}
                                                </div>
                                            </div>
                                            <div class="row q-py-sm q-col-gutter-md justify-content-between">
                                                <div class="col-auto text-caption">
                                                    Nume Registro
                                                </div>
                                                <div class="col text-right">
                                                    {{ props.row.nume_registro }}
                                                </div>
                                            </div>
                                            <div class="row q-py-sm q-col-gutter-md justify-content-between">
                                                <div class="col-auto text-caption">
                                                    Id Uni Cat
                                                </div>
                                                <div class="col text-right">
                                                    <q-btn v-if="props.row.id_uni_cat" @click="app.openPageDialog({ page: 'tfunicat/view', url: `/tfunicat/view/${props.row.id_uni_cat}` , closeBtn: true })" padding="xs" flat color="primary" no-caps >
                                                        <q-icon name="visibility" size="xs"  class="q-mr-xs"></q-icon>  Tf Uni Cat
                                                    </q-btn>
                                                </div>
                                            </div>
                                            <div class="row q-py-sm q-col-gutter-md justify-content-between">
                                                <div class="col-auto text-caption">
                                                    Id Usuario
                                                </div>
                                                <div class="col text-right">
                                                    <q-btn v-if="props.row.id_usuario" @click="app.openPageDialog({ page: 'tfusuarios/view', url: `/tfusuarios/view/${props.row.id_usuario}` , closeBtn: true })" padding="xs" flat color="primary" no-caps >
                                                        <q-icon name="visibility" size="xs"  class="q-mr-xs"></q-icon>  Tf Usuarios
                                                    </q-btn>
                                                </div>
                                            </div>
                                            <div class="row q-py-sm q-col-gutter-md justify-content-between">
                                                <div class="col-auto text-caption">
                                                    Fecha Grabado
                                                </div>
                                                <div class="col text-right">
                                                    {{ props.row.fecha_grabado }}
                                                </div>
                                            </div>
                                            <div class="row q-py-sm q-col-gutter-md justify-content-between">
                                                <div class="col-auto text-caption">
                                                    Activo
                                                </div>
                                                <div class="col text-right">
                                                    {{ props.row.activo }}
                                                </div>
                                            </div>
                                        </q-card-section>
                                        <q-separator></q-separator>
                                        <div class="row justify-between">
                                            <div class="q-pa-sm"><q-checkbox  dense v-model="props.selected"></q-checkbox></div>
                                            <q-card-actions auto-width>
                                                <div class="row q-col-gutter-xs justify-end">
                                                    <q-btn icon="menu" padding="xs" round flat color="grey">
                                                        <q-menu auto-close transition-show="flip-right"  transition-hide="flip-left" self="center middle" anchor="center middle">
                                                            <q-list dense rounded nav>
                                                                <q-item link clickable v-ripple :to="`/tffichas/view/${props.row.id_ficha}`">
                                                                    <q-item-section>
                                                                        <q-icon color="primary" size="sm" name="visibility"></q-icon>
                                                                    </q-item-section>
                                                                    <q-item-section>View</q-item-section>
                                                                </q-item>
                                                                <q-item link clickable v-ripple :to="`/tffichas/edit/${props.row.id_ficha}`">
                                                                    <q-item-section>
                                                                        <q-icon color="positive" size="sm" name="edit"></q-icon>
                                                                    </q-item-section>
                                                                    <q-item-section>Edit</q-item-section>
                                                                </q-item>
                                                                <q-item link clickable v-ripple @click="deleteItem(props.row.id_ficha)">
                                                                    <q-item-section>
                                                                        <q-icon color="negative" size="sm" name="delete_sweep"></q-icon>
                                                                    </q-item-section>
                                                                    <q-item-section>Delete</q-item-section>
                                                                </q-item>
                                                            </q-list>
                                                        </q-menu>
                                                    </q-btn>
                                                </div>
                                            </q-card-actions>
                                        </div>
                                    </q-card>
                                </div>
                            </template>
                            <!-- End of Mobile Grid Layout-->
                            </q-table>
                            <div class="row justify-center">
                                <q-td></q-td>
                            </div>
                        </div>
                        <!-- page loading indicator template -->
                        <template v-if="loading">
                            <q-inner-loading :showing="loading">
                                <q-spinner color="primary" size="30px"> 
                                </q-spinner>
                            </q-inner-loading>
                        </template>
                        <!-- page empty record template -->
                        <template v-if="pageReady && !records.length">
                            <q-card :flat="$q.screen.gt.md">
                                <q-card-section>
                                    <div class="text-grey text-h6 text-center">
                                        ningún record fue encontrado
                                    </div>
                                </q-card-section>
                            </q-card>
                        </template>
                        <!-- page footer template-->
                        <template v-if="showFooter">
                            <div class="">
                                <div  v-show="pageReady">
                                    <div class="row items-center justify-between">
                                        <div class="row items-center q-col-gutter-md">
                                            <div>
                                                <q-btn round flat   no-caps  unelevated   color="negative" @click="deleteItem(selectedItems)" v-if="selectedItems.length" icon="delete_sweep" class="q-my-xs" title="Eliminar seleccionado">
                                                    <q-tooltip>Delete Selected Items</q-tooltip>
                                                </q-btn>
                                            </div>
                                        </div>
                                        <div v-if="paginate && totalRecords > 0" class="row  items-center justify-between">
                                            <div class="col-auto">
                                                <q-chip square>Archivos {{recordsPosition}} de {{totalRecords}}</q-chip>
                                            </div>
                                            <div v-if="totalPages > 1">
                                                <q-pagination  color="primary"  v-model="pagination.page" :direction-links="true" :boundary-links="true" :max-pages="5" :boundary-numbers="true" :max="totalPages"></q-pagination>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
</template>
<script setup>
	import {  computed, ref, toRefs } from 'vue';
	import { useMeta } from 'quasar';
	import { useApp } from 'src/composables/app';
	import { useListPage } from 'src/composables/listpage';
	import { usePageStore } from 'src/stores/page';
	
	const props = defineProps({
		primaryKey : {
			type : String,
			default : 'id_ficha',
		},
		pageStoreKey: {
			type: String,
			default: 'TFFICHAS',
		},
		pageName : {
			type : String,
			default : 'tffichas',
		},
		routeName : {
			type : String,
			default : 'tffichaslist',
		},
		apiPath : {
			type : String,
			default : 'tffichas/index',
		},
		autoLoad: {
			type: Boolean,
			default: true,
		},
		enableCache: {
			type: Boolean,
			default: false,
		},
		paginate: {
			type: Boolean,
			default: true,
		},
		scrollIntoView: {
			type: Boolean,
			default: true,
		},
		isSubPage: {
			type: Boolean,
			default: false,
		},
		showHeader: {
			type: Boolean,
			default: true,
		},
		showFooter: {
			type: Boolean,
			default: true,
		},
		showBreadcrumbs: {
			type: Boolean,
			default: true,
		},
		exportButton: {
			type: Boolean,
			default: true,
		},
		importButton: {
			type: Boolean,
			default: false,
		},
		multiCheckbox: {
			type: Boolean,
			default: true,
		},
		mergeRecords: {
			type: Boolean,
			default: false,
		},
		page: {
			type: Number,
			default: 1,
		},
		limit: {
			type: Number,
			default: 10,
		},
		search: {
			type: String,
			default: '',
		},
		fieldName: null,
		fieldValue: null,
		queryParams: { 
			type: Object,
			default: () => ({})
		},
		sortBy: {
			type: String,
			default: '',
		},
		sortType: {
			type: String,
			default: 'desc', //desc or asc
		},
		emptyRecordMsg: {
			type: String,
			default: "ningún record fue encontrado",
		},
		titleBeforeDelete: {
			type: String,
			default: "Eliminar el registro",
		},
		msgBeforeDelete: {
			type: String,
			default: "¿Seguro que quieres borrar este registro?",
		},
		msgAfterDelete: {
			type: String,
			default: "Grabar eliminado con éxito",
		},
	});
	
	const app = useApp();
	
	const defaultStoreState = {
		filters: {
			search: {
				tag: "Search",
				value: '',
				valueType: 'single',
				options: [],
			}
		},
		pagination: {
			page: props.page,
			rowsPerPage: props.limit,
			rowsNumber: 0,
			sortBy: props.sortBy,
			descending: props.sortType == 'desc'
		},
		primaryKey: props.primaryKey
	}
	const store = usePageStore(props.pageStoreKey,  defaultStoreState);
	
	// page hooks where logics resides
	const page = useListPage({ store, props });
	
	const {records, filters,  totalRecords,  selectedItems, expandedRows, pagination,} = toRefs(store.state);
	const { pageReady, loading, } = toRefs(page.state);
	
	const {  pageBreadCrumb,   totalPages, recordsPosition, } = page.computedProps;
	
	//page methods
	const { load,      setPagination, deleteItem,  isCurrentRecord,     } = page.methods;
	
	const pageTitle = computed({
		get: function () {
			return "Tf Fichas"
		}
	});
	
	useMeta(() => {
		return {
			title: pageTitle.value //set browser title
		}
	});
</script>
<style scoped>
</style>
