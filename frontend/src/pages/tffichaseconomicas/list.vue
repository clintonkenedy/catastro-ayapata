<template>
    <main class="main-page" id="">
        <template v-if="showHeader">
            <section class="page-section q-pa-md" >
                <div class="container-fluid">
                    <div class="row justify-between items-center q-col-gutter-md">
                        <div  class="col " >
                            <div class=" text-h6 text-primary" >
                                Tf Fichas Economicas
                            </div>
                        </div>
                        <div  class="col-md-auto col-12 " >
                            <q-btn       :rounded="false"  size=""  color="primary" no-caps  unelevated   :to="`/tffichaseconomicas/add`" class="full-width" >
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
                                    <q-breadcrumbs-el icon="arrow_back" class="text-capitalize" :label="pageBreadCrumb.fieldName" to="/tffichaseconomicas"></q-breadcrumbs-el>
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
                            :columns="app.menus.tffichaseconomicaslistheader" 
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
                                        <q-btn v-if="props.row.id_ficha" @click="app.openPageDialog({ page: 'tffichas/view', url: `/tffichas/view/${props.row.id_ficha}` , closeBtn: true })" padding="xs" flat color="primary" no-caps >
                                            <q-icon name="visibility" size="xs"  class="q-mr-xs"></q-icon>  Tf Fichas
                                        </q-btn>
                                    </q-td>
                                    <q-td  key="nomb_comercial" :props="props">
                                        {{ props.row.nomb_comercial }}
                                    </q-td>
                                    <q-td  key="pred_area_autor" :props="props">
                                        {{ props.row.pred_area_autor }}
                                    </q-td>
                                    <q-td  key="viap_area_autor" :props="props">
                                        {{ props.row.viap_area_autor }}
                                    </q-td>
                                    <q-td  key="viap_area_verif" :props="props">
                                        {{ props.row.viap_area_verif }}
                                    </q-td>
                                    <q-td  key="bc_area_autor" :props="props">
                                        {{ props.row.bc_area_autor }}
                                    </q-td>
                                    <q-td  key="bc_area_verif" :props="props">
                                        {{ props.row.bc_area_verif }}
                                    </q-td>
                                    <q-td  key="nume_expediente" :props="props">
                                        {{ props.row.nume_expediente }}
                                    </q-td>
                                    <q-td  key="nume_licencia" :props="props">
                                        {{ props.row.nume_licencia }}
                                    </q-td>
                                    <q-td  key="fecha_expedicion" :props="props">
                                        {{ props.row.fecha_expedicion }}
                                    </q-td>
                                    <q-td  key="fecha_vencimiento" :props="props">
                                        {{ props.row.fecha_vencimiento }}
                                    </q-td>
                                    <q-td  key="inic_actividad" :props="props">
                                        {{ props.row.inic_actividad }}
                                    </q-td>
                                    <q-td  key="cond_declarante" :props="props">
                                        {{ props.row.cond_declarante }}
                                    </q-td>
                                    <q-td  key="esta_llenado" :props="props">
                                        {{ props.row.esta_llenado }}
                                    </q-td>
                                    <q-td  key="mantenimiento" :props="props">
                                        {{ props.row.mantenimiento }}
                                    </q-td>
                                    <q-td  key="docu_presentado" :props="props">
                                        {{ props.row.docu_presentado }}
                                    </q-td>
                                    <q-td  key="pred_area_verif" :props="props">
                                        {{ props.row.pred_area_verif }}
                                    </q-td>
                                    <q-td  key="observaciones" :props="props">
                                        {{ props.row.observaciones }}
                                    </q-td>
                                    <q-td  key="nume_ficha" :props="props">
                                        {{ props.row.nume_ficha }}
                                    </q-td>
                                    <q-td key="btnactions" :props="props" auto-width>
                                        <div class="row q-col-gutter-xs justify-end">
                                            <q-btn icon="menu" padding="xs" round flat color="grey">
                                                <q-menu auto-close transition-show="flip-right"  transition-hide="flip-left" self="center middle" anchor="center middle">
                                                    <q-list dense rounded nav>
                                                        <q-item link clickable v-ripple :to="`/tffichaseconomicas/view/${props.row.id_ficha}`">
                                                            <q-item-section>
                                                                <q-icon color="primary" size="sm" name="visibility"></q-icon>
                                                            </q-item-section>
                                                            <q-item-section>View</q-item-section>
                                                        </q-item>
                                                        <q-item link clickable v-ripple :to="`/tffichaseconomicas/edit/${props.row.id_ficha}`">
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
                                                    <q-btn v-if="props.row.id_ficha" @click="app.openPageDialog({ page: 'tffichas/view', url: `/tffichas/view/${props.row.id_ficha}` , closeBtn: true })" padding="xs" flat color="primary" no-caps >
                                                        <q-icon name="visibility" size="xs"  class="q-mr-xs"></q-icon>  Tf Fichas
                                                    </q-btn>
                                                </div>
                                            </div>
                                            <div class="row q-py-sm q-col-gutter-md justify-content-between">
                                                <div class="col-auto text-caption">
                                                    Nomb Comercial
                                                </div>
                                                <div class="col text-right">
                                                    {{ props.row.nomb_comercial }}
                                                </div>
                                            </div>
                                            <div class="row q-py-sm q-col-gutter-md justify-content-between">
                                                <div class="col-auto text-caption">
                                                    Pred Area Autor
                                                </div>
                                                <div class="col text-right">
                                                    {{ props.row.pred_area_autor }}
                                                </div>
                                            </div>
                                            <div class="row q-py-sm q-col-gutter-md justify-content-between">
                                                <div class="col-auto text-caption">
                                                    Viap Area Autor
                                                </div>
                                                <div class="col text-right">
                                                    {{ props.row.viap_area_autor }}
                                                </div>
                                            </div>
                                            <div class="row q-py-sm q-col-gutter-md justify-content-between">
                                                <div class="col-auto text-caption">
                                                    Viap Area Verif
                                                </div>
                                                <div class="col text-right">
                                                    {{ props.row.viap_area_verif }}
                                                </div>
                                            </div>
                                            <div class="row q-py-sm q-col-gutter-md justify-content-between">
                                                <div class="col-auto text-caption">
                                                    Bc Area Autor
                                                </div>
                                                <div class="col text-right">
                                                    {{ props.row.bc_area_autor }}
                                                </div>
                                            </div>
                                            <div class="row q-py-sm q-col-gutter-md justify-content-between">
                                                <div class="col-auto text-caption">
                                                    Bc Area Verif
                                                </div>
                                                <div class="col text-right">
                                                    {{ props.row.bc_area_verif }}
                                                </div>
                                            </div>
                                            <div class="row q-py-sm q-col-gutter-md justify-content-between">
                                                <div class="col-auto text-caption">
                                                    Nume Expediente
                                                </div>
                                                <div class="col text-right">
                                                    {{ props.row.nume_expediente }}
                                                </div>
                                            </div>
                                            <div class="row q-py-sm q-col-gutter-md justify-content-between">
                                                <div class="col-auto text-caption">
                                                    Nume Licencia
                                                </div>
                                                <div class="col text-right">
                                                    {{ props.row.nume_licencia }}
                                                </div>
                                            </div>
                                            <div class="row q-py-sm q-col-gutter-md justify-content-between">
                                                <div class="col-auto text-caption">
                                                    Fecha Expedicion
                                                </div>
                                                <div class="col text-right">
                                                    {{ props.row.fecha_expedicion }}
                                                </div>
                                            </div>
                                            <div class="row q-py-sm q-col-gutter-md justify-content-between">
                                                <div class="col-auto text-caption">
                                                    Fecha Vencimiento
                                                </div>
                                                <div class="col text-right">
                                                    {{ props.row.fecha_vencimiento }}
                                                </div>
                                            </div>
                                            <div class="row q-py-sm q-col-gutter-md justify-content-between">
                                                <div class="col-auto text-caption">
                                                    Inic Actividad
                                                </div>
                                                <div class="col text-right">
                                                    {{ props.row.inic_actividad }}
                                                </div>
                                            </div>
                                            <div class="row q-py-sm q-col-gutter-md justify-content-between">
                                                <div class="col-auto text-caption">
                                                    Cond Declarante
                                                </div>
                                                <div class="col text-right">
                                                    {{ props.row.cond_declarante }}
                                                </div>
                                            </div>
                                            <div class="row q-py-sm q-col-gutter-md justify-content-between">
                                                <div class="col-auto text-caption">
                                                    Esta Llenado
                                                </div>
                                                <div class="col text-right">
                                                    {{ props.row.esta_llenado }}
                                                </div>
                                            </div>
                                            <div class="row q-py-sm q-col-gutter-md justify-content-between">
                                                <div class="col-auto text-caption">
                                                    Mantenimiento
                                                </div>
                                                <div class="col text-right">
                                                    {{ props.row.mantenimiento }}
                                                </div>
                                            </div>
                                            <div class="row q-py-sm q-col-gutter-md justify-content-between">
                                                <div class="col-auto text-caption">
                                                    Docu Presentado
                                                </div>
                                                <div class="col text-right">
                                                    {{ props.row.docu_presentado }}
                                                </div>
                                            </div>
                                            <div class="row q-py-sm q-col-gutter-md justify-content-between">
                                                <div class="col-auto text-caption">
                                                    Pred Area Verif
                                                </div>
                                                <div class="col text-right">
                                                    {{ props.row.pred_area_verif }}
                                                </div>
                                            </div>
                                            <div class="row q-py-sm q-col-gutter-md justify-content-between">
                                                <div class="col-auto text-caption">
                                                    Observaciones
                                                </div>
                                                <div class="col text-right">
                                                    {{ props.row.observaciones }}
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
                                        </q-card-section>
                                        <q-separator></q-separator>
                                        <div class="row justify-between">
                                            <div class="q-pa-sm"><q-checkbox  dense v-model="props.selected"></q-checkbox></div>
                                            <q-card-actions auto-width>
                                                <div class="row q-col-gutter-xs justify-end">
                                                    <q-btn icon="menu" padding="xs" round flat color="grey">
                                                        <q-menu auto-close transition-show="flip-right"  transition-hide="flip-left" self="center middle" anchor="center middle">
                                                            <q-list dense rounded nav>
                                                                <q-item link clickable v-ripple :to="`/tffichaseconomicas/view/${props.row.id_ficha}`">
                                                                    <q-item-section>
                                                                        <q-icon color="primary" size="sm" name="visibility"></q-icon>
                                                                    </q-item-section>
                                                                    <q-item-section>View</q-item-section>
                                                                </q-item>
                                                                <q-item link clickable v-ripple :to="`/tffichaseconomicas/edit/${props.row.id_ficha}`">
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
			default: 'TFFICHASECONOMICAS',
		},
		pageName : {
			type : String,
			default : 'tffichaseconomicas',
		},
		routeName : {
			type : String,
			default : 'tffichaseconomicaslist',
		},
		apiPath : {
			type : String,
			default : 'tffichaseconomicas/index',
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
			return "Tf Fichas Economicas"
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
