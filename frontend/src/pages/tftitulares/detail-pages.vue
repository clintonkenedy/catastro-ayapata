<template>
    <div id="master-detailpage">
        <q-tabs  inline-label v-model="selectedTab" active-color="primary" indicator-color="primary" align="left">
            <q-tab no-caps name="tfexoneracionestitular" icon="extension" label="Tf Titulare Tf Exoneraciones Titular" />
        </q-tabs>
        <q-separator></q-separator>
        <q-tab-panels keep-alive v-model="selectedTab" animated>
            <q-tab-panel class="q-pa-none" name="tfexoneracionestitular">
                <div class="reset-grid">
                    <list-tfexoneracionestitular-page ref="tfexoneracionestitularListPage"  field-name="tf_exoneraciones_titular.id_ficha" :field-value="masterRecord.id_ficha" :show-header="false" :show-breadcrumbs="false" isSubPage>
                        </list-tfexoneracionestitular-page>
                    </div>
                </q-tab-panel>
            </q-tab-panels>
        </div>
</template>
<script setup>
import { watch, computed, ref, onMounted } from 'vue';
import { usePageStore } from 'src/stores/page';
import { useApp } from 'src/composables/app.js';
import listTfexoneracionestitularPage from "../tfexoneracionestitular/list.vue";
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
const store = usePageStore('TFTITULARES');
const masterRecord = computed(() => store.state.currentRecord);
const pageReady = computed(() => masterRecord.value != null);
const selectedTab = ref("tfexoneracionestitular");
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
	 
	// set tfexoneracionestitular form data
	const tfexoneracionestitularStore = usePageStore('tfexoneracionestitular');
	tfexoneracionestitularStore.setFormData({ id_ficha:record?.id_ficha });
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
