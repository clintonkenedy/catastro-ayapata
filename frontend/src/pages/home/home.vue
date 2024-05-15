<template>
    <q-page class="main-page"  id="">
        <section class="page-section q-pa-md" >
            <div class="container-fluid">
                <div class="row q-col-gutter-x-md">
                    <div  class="col comp-grid" >
                        <div class=" text-h6 text-bold" >
                            Home
                        </div>
                    </div>
                    <div  class="col-md-3 col-12 comp-grid" >
                        <record-count api-path="components_data/getcount_tfactividades" max="" v-slot="record">
                        <q-btn align="left"  unelevated    :rounded="false"  block no-caps text-color="blue" color="blue-1" :to="`/tfactividades`" padding="md" class="full-width animated zoomIn" >
                            <q-icon class=" q-mr-md" color="blue" style="opacity:1" size="40px" name="extension"></q-icon>
                            <div class="flex-column text-left">
                                <div class="text-bold">Tf Actividades</div>
                                <div class="text-caption">Total Tf Actividades</div>
                            </div>
                            <div class="text-h5 absolute-top-right q-ma-md q-mt-lg">
                                <span v-if="!record.loading">{{ record.num }}</span>
                                <q-spinner v-else size="14px" />
                            </div>
                        </q-btn>
                        </record-count>
                    </div>
                </div>
            </div>
        </section>
    </q-page>

</template>
<script setup>
	import {  computed, ref } from 'vue';
	
	
	import { useApp } from 'src/composables/app.js';
	
	
	
	const props = defineProps({
		pageName: {
			type: String,
			default: 'home',
		},
		routeName: {
			type: String,
			default: 'home',
		},
		isSubPage: {
			type : Boolean,
			default : false,
		},
	});
	const app = useApp();
	
	const pageReady = ref(true);
	
</script>
<style scoped>
</style>
