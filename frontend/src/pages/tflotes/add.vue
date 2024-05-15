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
                                    Agregar nuevo
                                </div>
                            </div>
                            <!--topcardactiontemplates-->
                        </div>
                    </div>
                </section>
            </template>
            <section class="page-section " >
                <div class="container">
                    <div class="row q-col-gutter-x-md">
                        <div  class="col-md-9 col-12 comp-grid" >
                            <div >
                                <q-form ref="observer" @submit.prevent="submitForm()">
                                <q-card  :flat="isSubPage" class="q-pa-md nice-shadow-6">
                                    <div class="row q-col-gutter-x-md">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Id Lote *
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlid_lote" v-model.trim="formData.id_lote"  label="Id Lote" type="text" placeholder="Escribir Id Lote"      
                                                    class="" :error="isFieldValid('id_lote')" :error-message="getFieldError('id_lote')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Id Mzna 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <api-data-source @loaded="response => mapOptionField(response, 'id_mzna')"  api-path="components_data/id_mzna_option_list"  v-slot="req">
                                                        <nice-select     :loading="req.loading"   ref="ctrlid_mzna" v-model="formData.id_mzna" :options="req.response" label="Id Mzna"  :error="isFieldValid('id_mzna')" :error-message="getFieldError('id_mzna')">
                                                        </nice-select>  
                                                    </api-data-source>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Codi Lote 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlcodi_lote" v-model.trim="formData.codi_lote"  label="Codi Lote" type="text" placeholder="Escribir Codi Lote"      
                                                    class="" :error="isFieldValid('codi_lote')" :error-message="getFieldError('codi_lote')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Id Hab Urba 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlid_hab_urba" v-model.trim="formData.id_hab_urba"  label="Id Hab Urba" type="text" placeholder="Escribir Id Hab Urba"      
                                                    class="" :error="isFieldValid('id_hab_urba')" :error-message="getFieldError('id_hab_urba')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Mzna Dist 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlmzna_dist" v-model.trim="formData.mzna_dist"  label="Mzna Dist" type="text" placeholder="Escribir Mzna Dist"      
                                                    class="" :error="isFieldValid('mzna_dist')" :error-message="getFieldError('mzna_dist')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Lote Dist 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrllote_dist" v-model.trim="formData.lote_dist"  label="Lote Dist" type="text" placeholder="Escribir Lote Dist"      
                                                    class="" :error="isFieldValid('lote_dist')" :error-message="getFieldError('lote_dist')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Sub Lote Dist 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlsub_lote_dist" v-model.trim="formData.sub_lote_dist"  label="Sub Lote Dist" type="text" placeholder="Escribir Sub Lote Dist"      
                                                    class="" :error="isFieldValid('sub_lote_dist')" :error-message="getFieldError('sub_lote_dist')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Estructuracion 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlestructuracion" v-model.trim="formData.estructuracion"  label="Estructuracion" type="text" placeholder="Escribir Estructuracion"      
                                                    class="" :error="isFieldValid('estructuracion')" :error-message="getFieldError('estructuracion')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Zonificacion 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlzonificacion" v-model.trim="formData.zonificacion"  label="Zonificacion" type="text" placeholder="Escribir Zonificacion"      
                                                    class="" :error="isFieldValid('zonificacion')" :error-message="getFieldError('zonificacion')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Cuc 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlcuc" v-model.trim="formData.cuc"  label="Cuc" type="text" placeholder="Escribir Cuc"      
                                                    class="" :error="isFieldValid('cuc')" :error-message="getFieldError('cuc')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Zona Dist 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlzona_dist" v-model.trim="formData.zona_dist"  label="Zona Dist" type="text" placeholder="Escribir Zona Dist"      
                                                    class="" :error="isFieldValid('zona_dist')" :error-message="getFieldError('zona_dist')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div v-if="showSubmitButton" class="text-center q-my-md">
                                        <q-btn type="submit"    :rounded="false"  color="primary"  no-caps  unelevated    icon-right="send" :loading="saving">
                                            {{ submitButtonLabel }}
                                            <template v-slot:loading>
                                                <q-spinner-oval />
                                            </template>
                                        </q-btn>
                                    </div>
                                </q-card>
                                </q-form>
                                <slot :submit="submitForm" :saving="saving"></slot>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </template>
    </main>
</template>
<script setup>
	import {  computed, ref, reactive, toRefs } from 'vue';
	import { required, } from 'src/services/validators';
	import { usePageStore } from 'src/stores/page';
	import { useMeta } from 'quasar';
	import { useApp } from 'src/composables/app';
	import { useAddPage } from 'src/composables/addpage';
	
	const props = defineProps({
		pageName : {
			type : String,
			default : 'tflotes',
		},
		pageStoreKey: {
			type: String,
			default: 'TFLOTES',
		},
		routeName : {
			type : String,
			default : 'tflotesadd',
		},
		apiPath : {
			type : String,
			default : 'tflotes/add',
		},
		submitButtonLabel: {
			type: String,
			default: "Entregar",
		},
		formValidationError: {
			type: String,
			default: "El formulario no es válido",
		},
		formValidationMsg: {
			type: String,
			default: "Por favor complete el formulario",
		},
		msgTitle: {
			type: String,
			default: "Crear registro",
		},
		msgAfterSave: {
			type: String,
			default: "Grabar agregado exitosamente",
		},
		msgBeforeSave: {
			type: String,
			default: "",
		},
		showHeader: {
			type: Boolean,
			default: true,
		},
		showSubmitButton: {
			type: Boolean,
			default: true,
		},
		redirect: {
			type : Boolean,
			default : true,
		},
		isSubPage: {
			type : Boolean,
			default : false,
		},
		pageData: { // use to set formData default values from another page
			type: Object,
			default: () => ({
		id_lote: "", 
		id_mzna: "", 
		codi_lote: "", 
		id_hab_urba: "", 
		mzna_dist: "", 
		lote_dist: "", 
		sub_lote_dist: "", 
		estructuracion: "", 
		zonificacion: "", 
		cuc: "", 
		zona_dist: "", 
			})
		},
	});
	const store = usePageStore(props.pageStoreKey);
	const app = useApp();// application state and methods
	
	const formData = reactive({ ...props.pageData });
	
	
	//vuelidate form validation rules
	const rules = computed(() => {
		return {
			id_lote: { required }
		}
	});
	
	const page = useAddPage({ store, props, formData, rules, beforeSubmit, afterSubmit });// page form hook
	
	//event raised before form submit
	function beforeSubmit(){
		return true;
	}
	//event raised after form submit
	function afterSubmit(response) {
		app.flashMsg(props.msgTitle, props.msgAfterSave);
		page.setFormDefaultValues(); // reset form data
		if(app.isDialogOpen()){
			app.closeDialogs(); // if page is open as dialog, close dialog
		}
		else if(props.redirect){
			app.navigateTo(`/tflotes`);
		}
	}
	
	const {  saving, pageReady,   } = toRefs(page.state);
	
	const { submitForm, isFieldValid, getFieldError, mapOptionField } = page.methods;
	
	useMeta(() => {
		return {
			//set browser title
			title: "Agregar nuevo"
		}
	});
	
	// expose page object for other components access
	defineExpose({
		page
	});
</script>
<style scoped>
</style>
