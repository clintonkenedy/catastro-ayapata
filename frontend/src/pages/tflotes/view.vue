<template>
    <main class="main-page" id="">
        <template v-if="pageReady">
            <template v-if="showHeader">
                <section class="page-section q-pa-md" >
                    <div class="container">
                        <div class="row justify-between items-center q-col-gutter-md">
                            <div  v-if="!isSubPage"  class="col-auto " >
                                <q-btn @click="$router.go(-1)"      flat :rounded="false"  size=""  color="primary"  no-caps  unelevated   class="" >
                                    <q-icon name="arrow_back"></q-icon>                             
                                </q-btn>
                            </div>
                            <div  class="col " >
                                <div class=" text-h6 text-primary" >
                                    Ver
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </template>
            <section class="page-section " >
                <div class="container">
                    <div class="row q-col-gutter-x-md">
                        <div  class="col comp-grid" >
                            <div >
                                <div class="q-mb-3 row justify-start q-col-gutter-sm">
                                    <div class="col-12">
                                        <q-card  class="q-pa-md nice-shadow-6">
                                            <div class="row q-col-gutter-x-md items-center">
                                                <div class="col">
                                                    <div class="text-grey text-weight-medium mb-1">Id Lote</div>
                                                    <div class="text-bold">{{ item.id_lote }}</div>
                                                </div>
                                            </div>
                                        </q-card>
                                    </div>
                                    <div class="col-12">
                                        <q-card  class="q-pa-md nice-shadow-6">
                                            <div class="row q-col-gutter-x-md items-center">
                                                <div class="col">
                                                    <div class="text-grey text-weight-medium mb-1">Id Mzna</div>
                                                    <div class="text-bold">
                                                        <q-btn v-if="item.id_mzna" @click="app.openPageDialog({ page: 'tfmanzanas/view', url: `/tfmanzanas/view/${item.id_mzna}` , closeBtn: true })" padding="xs" flat color="primary" no-caps >
                                                            <q-icon name="visibility" size="xs"  class="q-mr-xs"></q-icon>  Tf Manzanas Detail
                                                        </q-btn>
                                                    </div>
                                                </div>
                                            </div>
                                        </q-card>
                                    </div>
                                    <div class="col-12">
                                        <q-card  class="q-pa-md nice-shadow-6">
                                            <div class="row q-col-gutter-x-md items-center">
                                                <div class="col">
                                                    <div class="text-grey text-weight-medium mb-1">Codi Lote</div>
                                                    <div class="text-bold">{{ item.codi_lote }}</div>
                                                </div>
                                            </div>
                                        </q-card>
                                    </div>
                                    <div class="col-12">
                                        <q-card  class="q-pa-md nice-shadow-6">
                                            <div class="row q-col-gutter-x-md items-center">
                                                <div class="col">
                                                    <div class="text-grey text-weight-medium mb-1">Id Hab Urba</div>
                                                    <div class="text-bold">{{ item.id_hab_urba }}</div>
                                                </div>
                                            </div>
                                        </q-card>
                                    </div>
                                    <div class="col-12">
                                        <q-card  class="q-pa-md nice-shadow-6">
                                            <div class="row q-col-gutter-x-md items-center">
                                                <div class="col">
                                                    <div class="text-grey text-weight-medium mb-1">Mzna Dist</div>
                                                    <div class="text-bold">{{ item.mzna_dist }}</div>
                                                </div>
                                            </div>
                                        </q-card>
                                    </div>
                                    <div class="col-12">
                                        <q-card  class="q-pa-md nice-shadow-6">
                                            <div class="row q-col-gutter-x-md items-center">
                                                <div class="col">
                                                    <div class="text-grey text-weight-medium mb-1">Lote Dist</div>
                                                    <div class="text-bold">{{ item.lote_dist }}</div>
                                                </div>
                                            </div>
                                        </q-card>
                                    </div>
                                    <div class="col-12">
                                        <q-card  class="q-pa-md nice-shadow-6">
                                            <div class="row q-col-gutter-x-md items-center">
                                                <div class="col">
                                                    <div class="text-grey text-weight-medium mb-1">Sub Lote Dist</div>
                                                    <div class="text-bold">{{ item.sub_lote_dist }}</div>
                                                </div>
                                            </div>
                                        </q-card>
                                    </div>
                                    <div class="col-12">
                                        <q-card  class="q-pa-md nice-shadow-6">
                                            <div class="row q-col-gutter-x-md items-center">
                                                <div class="col">
                                                    <div class="text-grey text-weight-medium mb-1">Estructuracion</div>
                                                    <div class="text-bold">{{ item.estructuracion }}</div>
                                                </div>
                                            </div>
                                        </q-card>
                                    </div>
                                    <div class="col-12">
                                        <q-card  class="q-pa-md nice-shadow-6">
                                            <div class="row q-col-gutter-x-md items-center">
                                                <div class="col">
                                                    <div class="text-grey text-weight-medium mb-1">Zonificacion</div>
                                                    <div class="text-bold">{{ item.zonificacion }}</div>
                                                </div>
                                            </div>
                                        </q-card>
                                    </div>
                                    <div class="col-12">
                                        <q-card  class="q-pa-md nice-shadow-6">
                                            <div class="row q-col-gutter-x-md items-center">
                                                <div class="col">
                                                    <div class="text-grey text-weight-medium mb-1">Cuc</div>
                                                    <div class="text-bold">{{ item.cuc }}</div>
                                                </div>
                                            </div>
                                        </q-card>
                                    </div>
                                    <div class="col-12">
                                        <q-card  class="q-pa-md nice-shadow-6">
                                            <div class="row q-col-gutter-x-md items-center">
                                                <div class="col">
                                                    <div class="text-grey text-weight-medium mb-1">Zona Dist</div>
                                                    <div class="text-bold">{{ item.zona_dist }}</div>
                                                </div>
                                            </div>
                                        </q-card>
                                    </div>
                                </div>
                                <div  class=" row q-col-gutter-xs justify-start q-ma-md">
                                    <div><q-btn icon="edit" label="Edit"  outline  :rounded="false"  no-caps  unelevated   padding="xs" color="positive" title="Editar"  @click="app.openPageDialog({ page:'tflotes/edit', url: `/tflotes/edit/${item.id_lote}` , closeBtn: true })">
                                    </q-btn></div>
                                    <div><q-btn icon="delete_sweep" label="Delete"  outline  :rounded="false"  no-caps  unelevated   padding="xs" color="negative" title="Borrar"  @click="deleteItem(item.id_lote)">
                                    </q-btn></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </template>
        <template v-if="loading">
            <div style="min-height:200px" class="q-pa-sm text-center relative-position">
                <q-inner-loading color="primary" label="Cargando..." showing></q-inner-loading>
            </div>
        </template>
    </main>
</template>
<script setup>
	import {  computed, ref, toRefs } from 'vue';
	import { useMeta } from 'quasar';
	import { useApp } from 'src/composables/app.js';
	import { useViewPage } from 'src/composables/viewpage.js';
	import { usePageStore } from 'src/stores/page';
	
	const props = defineProps({
		id: [String, Number],
		primaryKey: {
			type: String,
			default: 'id_lote',
		},
		pageStoreKey: {
			type: String,
			default: 'TFLOTES',
		},
		pageName: {
			type: String,
			default: 'tflotes',
		},
		routeName: {
			type: String,
			default: 'tflotesview',
		},
		apiPath: {
			type: String,
			default: 'tflotes/view',
		},
		autoLoad: {
			type: Boolean,
			default: true,
		},
		exportButton: {
			type: Boolean,
			default: true,
		},
		scrollIntoView: {
			type: Boolean,
			default: true,
		},
		isSubPage: {
			type : Boolean,
			default : false,
		},
		showHeader: {
			type: Boolean,
			default: true,
		},
		showFooter: {
			type: Boolean,
			default: true,
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
	
	const store = usePageStore(props.pageStoreKey);
	const app = useApp(props);
	
	const page = useViewPage({store, props}); // where page logics resides
	
	const {  currentRecord } = toRefs(store.state);
	const { loading, pageReady } = toRefs(page.state);
	const item = currentRecord;
	
	const  { load, deleteItem,    } = page.methods;
	
	
	useMeta(() => {
		return {
			//set browser title
			title: "Ver"
		}
	});
</script>
<style scoped>
</style>
