<template>
    <div id="master-detailpage">
        <q-tabs  inline-label v-model="selectedTab" active-color="primary" indicator-color="primary" align="left">
            <q-tab no-caps name="tfinstalaciones" icon="extension" label="Tf Codigos Instalacione Tf Instalaciones" />
        </q-tabs>
        <q-separator></q-separator>
        <q-tab-panels keep-alive v-model="selectedTab" animated>
            <q-tab-panel class="q-pa-none" name="tfinstalaciones">
                <div class="reset-grid">
                    <list-tfinstalaciones-page ref="tfinstalacionesListPage"  field-name="tf_instalaciones.codi_instalacion" :field-value="masterRecord.codi_instalacion" :show-header="false" :show-breadcrumbs="false" isSubPage>
                        </list-tfinstalaciones-page>
                    </div>
                </q-tab-panel>
            </q-tab-panels>
        </div>
</template>
<script setup>
import { watch, computed, ref, onMounted } from 'vue';
import { usePageStore } from 'src/stores/page';
import { useApp } from 'src/composables/app.js';
import listTfinstalacionesPage from "../tfinstalaciones/list.vue";
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
const store = usePageStore('TFCODIGOSINSTALACIONES');
const masterRecord = computed(() => store.state.currentRecord);
const pageReady = computed(() => masterRecord.value != null);
const selectedTab = ref("tfinstalaciones");
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
	 
	// set tfinstalaciones form data
	const tfinstalacionesStore = usePageStore('tfinstalaciones');
	tfinstalacionesStore.setFormData({ codi_instalacion:record?.codi_instalacion });
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
