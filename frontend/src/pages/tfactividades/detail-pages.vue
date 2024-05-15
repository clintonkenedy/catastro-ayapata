<template>
    <div id="master-detailpage">
        <q-tabs  inline-label v-model="selectedTab" active-color="primary" indicator-color="primary" align="left">
            <q-tab no-caps name="tfautorizacionesfuncionamiento" icon="extension" label="Tf Actividade Tf Autorizaciones Funcionamiento" />
        </q-tabs>
        <q-separator></q-separator>
        <q-tab-panels keep-alive v-model="selectedTab" animated>
            <q-tab-panel class="q-pa-none" name="tfautorizacionesfuncionamiento">
                <div class="reset-grid">
                    <list-tfautorizacionesfuncionamiento-page ref="tfautorizacionesfuncionamientoListPage"  field-name="tf_autorizaciones_funcionamiento.codi_actividad" :field-value="masterRecord.codi_actividad" :show-header="false" :show-breadcrumbs="false" isSubPage>
                        </list-tfautorizacionesfuncionamiento-page>
                    </div>
                </q-tab-panel>
            </q-tab-panels>
        </div>
</template>
<script setup>
import { watch, computed, ref, onMounted } from 'vue';
import { usePageStore } from 'src/stores/page';
import { useApp } from 'src/composables/app.js';
import listTfautorizacionesfuncionamientoPage from "../tfautorizacionesfuncionamiento/list.vue";
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
const store = usePageStore('TFACTIVIDADES');
const masterRecord = computed(() => store.state.currentRecord);
const pageReady = computed(() => masterRecord.value != null);
const selectedTab = ref("tfautorizacionesfuncionamiento");
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
	 
	// set tfautorizacionesfuncionamiento form data
	const tfautorizacionesfuncionamientoStore = usePageStore('tfautorizacionesfuncionamiento');
	tfautorizacionesfuncionamientoStore.setFormData({ codi_actividad:record?.codi_actividad });
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
