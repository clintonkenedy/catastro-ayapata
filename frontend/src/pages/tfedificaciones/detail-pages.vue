<template>
    <div id="master-detailpage">
        <q-tabs  inline-label v-model="selectedTab" active-color="primary" indicator-color="primary" align="left">
            <q-tab no-caps name="tfunicat" icon="extension" label="Tf Edificacione Tf Uni Cat" />
        </q-tabs>
        <q-separator></q-separator>
        <q-tab-panels keep-alive v-model="selectedTab" animated>
            <q-tab-panel class="q-pa-none" name="tfunicat">
                <div class="reset-grid">
                    <list-tfunicat-page ref="tfunicatListPage"  field-name="tf_uni_cat.id_edificacion" :field-value="masterRecord.id_edificacion" :show-header="false" :show-breadcrumbs="false" isSubPage>
                        </list-tfunicat-page>
                    </div>
                </q-tab-panel>
            </q-tab-panels>
        </div>
</template>
<script setup>
import { watch, computed, ref, onMounted } from 'vue';
import { usePageStore } from 'src/stores/page';
import { useApp } from 'src/composables/app.js';
import listTfunicatPage from "../tfunicat/list.vue";
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
const store = usePageStore('TFEDIFICACIONES');
const masterRecord = computed(() => store.state.currentRecord);
const pageReady = computed(() => masterRecord.value != null);
const selectedTab = ref("tfunicat");
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
	 
	// set tfunicat form data
	const tfunicatStore = usePageStore('tfunicat');
	tfunicatStore.setFormData({ id_edificacion:record?.id_edificacion });
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
