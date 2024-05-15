<template>
    <div id="master-detailpage">
        <q-tabs  inline-label v-model="selectedTab" active-color="primary" indicator-color="primary" align="left">
            <q-tab no-caps name="tfautorizacionesanuncios" icon="extension" label="Tf Ficha Tf Autorizaciones Anuncios" />
        </q-tabs>
        <q-separator></q-separator>
        <q-tab-panels keep-alive v-model="selectedTab" animated>
            <q-tab-panel class="q-pa-none" name="tfautorizacionesanuncios">
                <div class="reset-grid">
                    <list-tfautorizacionesanuncios-page ref="tfautorizacionesanunciosListPage"  field-name="tf_autorizaciones_anuncios.id_ficha" :field-value="masterRecord.id_ficha" :show-header="false" :show-breadcrumbs="false" isSubPage>
                        </list-tfautorizacionesanuncios-page>
                    </div>
                </q-tab-panel>
            </q-tab-panels>
        </div>
</template>
<script setup>
import { watch, computed, ref, onMounted } from 'vue';
import { usePageStore } from 'src/stores/page';
import { useApp } from 'src/composables/app.js';
import listTfautorizacionesanunciosPage from "../tfautorizacionesanuncios/list.vue";
const props = defineProps({
	isSubPage: {
		type : Boolean,
		default : true,
	},
	scrollIntoView: {
		type : Boolean,
		default : false,
	},
});
const app = useApp();
const store = usePageStore('TFFICHAS');
const masterRecord = computed(() => store.state.currentRecord);
const pageReady = computed(() => masterRecord.value != null);
const selectedTab = ref("tfautorizacionesanuncios");
function scrollToDetailPage() {
	if (props.scrollIntoView) {
		const pageElement = document.getElementById('master-detailpage');
		if(pageElement){
			pageElement.scrollIntoView({behavior:'smooth', block:'start'});
		}
	}
}
// pass form data from master to detail
function setDetailPageFormData(){
	const record = masterRecord.value;
	 
	// set tfautorizacionesanuncios form data
	const tfautorizacionesanunciosStore = usePageStore('tfautorizacionesanuncios');
	tfautorizacionesanunciosStore.setFormData({ id_ficha:record?.id_ficha });
}
watch(() => masterRecord, (current) => {
		setDetailPageFormData();
		scrollToDetailPage();
	},
	{ deep: true, immediate: true }
);
onMounted(()=>{
    scrollToDetailPage();
});
</script>
