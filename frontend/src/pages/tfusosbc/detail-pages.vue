<template>
    <div id="master-detailpage">
        <q-tabs  inline-label v-model="selectedTab" active-color="primary" indicator-color="primary" align="left">
            <q-tab no-caps name="tffichasbienescomunes" icon="extension" label="Tf Usos Bc Tf Fichas Bienes Comunes" />
        </q-tabs>
        <q-separator></q-separator>
        <q-tab-panels keep-alive v-model="selectedTab" animated>
            <q-tab-panel class="q-pa-none" name="tffichasbienescomunes">
                <div class="reset-grid">
                    <list-tffichasbienescomunes-page ref="tffichasbienescomunesListPage"  field-name="tf_fichas_bienes_comunes.codi_uso" :field-value="masterRecord.codi_uso" :show-header="false" :show-breadcrumbs="false" isSubPage>
                        </list-tffichasbienescomunes-page>
                    </div>
                </q-tab-panel>
            </q-tab-panels>
        </div>
</template>
<script setup>
import { watch, computed, ref, onMounted } from 'vue';
import { usePageStore } from 'src/stores/page';
import { useApp } from 'src/composables/app.js';
import listTffichasbienescomunesPage from "../tffichasbienescomunes/list.vue";
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
const store = usePageStore('TFUSOSBC');
const masterRecord = computed(() => store.state.currentRecord);
const pageReady = computed(() => masterRecord.value != null);
const selectedTab = ref("tffichasbienescomunes");
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
	 
	// set tffichasbienescomunes form data
	const tffichasbienescomunesStore = usePageStore('tffichasbienescomunes');
	tffichasbienescomunesStore.setFormData({ codi_uso:record?.codi_uso });
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
