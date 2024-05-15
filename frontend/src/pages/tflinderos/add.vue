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
                                                    Id Ficha *
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <api-data-source @loaded="response => mapOptionField(response, 'id_ficha')"  api-path="components_data/id_ficha_option_list"  v-slot="req">
                                                        <nice-select     :loading="req.loading"   ref="ctrlid_ficha" v-model="formData.id_ficha" :options="req.response" label="Id Ficha"  :error="isFieldValid('id_ficha')" :error-message="getFieldError('id_ficha')">
                                                        </nice-select>  
                                                    </api-data-source>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Fren Campo 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlfren_campo" v-model.trim="formData.fren_campo"  label="Fren Campo" type="text" placeholder="Escribir Fren Campo"      
                                                    class="" :error="isFieldValid('fren_campo')" :error-message="getFieldError('fren_campo')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Fren Titulo 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlfren_titulo" v-model.trim="formData.fren_titulo"  label="Fren Titulo" type="text" placeholder="Escribir Fren Titulo"      
                                                    class="" :error="isFieldValid('fren_titulo')" :error-message="getFieldError('fren_titulo')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Fren Colinda Campo 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlfren_colinda_campo" v-model.trim="formData.fren_colinda_campo"  label="Fren Colinda Campo" type="text" placeholder="Escribir Fren Colinda Campo"      
                                                    class="" :error="isFieldValid('fren_colinda_campo')" :error-message="getFieldError('fren_colinda_campo')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Fren Colinda Titulo 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlfren_colinda_titulo" v-model.trim="formData.fren_colinda_titulo"  label="Fren Colinda Titulo" type="text" placeholder="Escribir Fren Colinda Titulo"      
                                                    class="" :error="isFieldValid('fren_colinda_titulo')" :error-message="getFieldError('fren_colinda_titulo')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Dere Campo 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrldere_campo" v-model.trim="formData.dere_campo"  label="Dere Campo" type="text" placeholder="Escribir Dere Campo"      
                                                    class="" :error="isFieldValid('dere_campo')" :error-message="getFieldError('dere_campo')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Dere Titulo 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrldere_titulo" v-model.trim="formData.dere_titulo"  label="Dere Titulo" type="text" placeholder="Escribir Dere Titulo"      
                                                    class="" :error="isFieldValid('dere_titulo')" :error-message="getFieldError('dere_titulo')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Dere Colinda Campo 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrldere_colinda_campo" v-model.trim="formData.dere_colinda_campo"  label="Dere Colinda Campo" type="text" placeholder="Escribir Dere Colinda Campo"      
                                                    class="" :error="isFieldValid('dere_colinda_campo')" :error-message="getFieldError('dere_colinda_campo')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Dere Colinda Titulo 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrldere_colinda_titulo" v-model.trim="formData.dere_colinda_titulo"  label="Dere Colinda Titulo" type="text" placeholder="Escribir Dere Colinda Titulo"      
                                                    class="" :error="isFieldValid('dere_colinda_titulo')" :error-message="getFieldError('dere_colinda_titulo')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Izqu Campo 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlizqu_campo" v-model.trim="formData.izqu_campo"  label="Izqu Campo" type="text" placeholder="Escribir Izqu Campo"      
                                                    class="" :error="isFieldValid('izqu_campo')" :error-message="getFieldError('izqu_campo')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Izqu Titulo 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlizqu_titulo" v-model.trim="formData.izqu_titulo"  label="Izqu Titulo" type="text" placeholder="Escribir Izqu Titulo"      
                                                    class="" :error="isFieldValid('izqu_titulo')" :error-message="getFieldError('izqu_titulo')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Izqu Colinda Campo 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlizqu_colinda_campo" v-model.trim="formData.izqu_colinda_campo"  label="Izqu Colinda Campo" type="text" placeholder="Escribir Izqu Colinda Campo"      
                                                    class="" :error="isFieldValid('izqu_colinda_campo')" :error-message="getFieldError('izqu_colinda_campo')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Izqu Colinda Titulo 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlizqu_colinda_titulo" v-model.trim="formData.izqu_colinda_titulo"  label="Izqu Colinda Titulo" type="text" placeholder="Escribir Izqu Colinda Titulo"      
                                                    class="" :error="isFieldValid('izqu_colinda_titulo')" :error-message="getFieldError('izqu_colinda_titulo')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Fond Titulo 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlfond_titulo" v-model.trim="formData.fond_titulo"  label="Fond Titulo" type="text" placeholder="Escribir Fond Titulo"      
                                                    class="" :error="isFieldValid('fond_titulo')" :error-message="getFieldError('fond_titulo')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Fond Campo 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlfond_campo" v-model.trim="formData.fond_campo"  label="Fond Campo" type="text" placeholder="Escribir Fond Campo"      
                                                    class="" :error="isFieldValid('fond_campo')" :error-message="getFieldError('fond_campo')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Fond Colinda Campo 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlfond_colinda_campo" v-model.trim="formData.fond_colinda_campo"  label="Fond Colinda Campo" type="text" placeholder="Escribir Fond Colinda Campo"      
                                                    class="" :error="isFieldValid('fond_colinda_campo')" :error-message="getFieldError('fond_colinda_campo')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Fond Colinda Titulo 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlfond_colinda_titulo" v-model.trim="formData.fond_colinda_titulo"  label="Fond Colinda Titulo" type="text" placeholder="Escribir Fond Colinda Titulo"      
                                                    class="" :error="isFieldValid('fond_colinda_titulo')" :error-message="getFieldError('fond_colinda_titulo')">
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
			default : 'tflinderos',
		},
		pageStoreKey: {
			type: String,
			default: 'TFLINDEROS',
		},
		routeName : {
			type : String,
			default : 'tflinderosadd',
		},
		apiPath : {
			type : String,
			default : 'tflinderos/add',
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
		id_ficha: "", 
		fren_campo: "", 
		fren_titulo: "", 
		fren_colinda_campo: "", 
		fren_colinda_titulo: "", 
		dere_campo: "", 
		dere_titulo: "", 
		dere_colinda_campo: "", 
		dere_colinda_titulo: "", 
		izqu_campo: "", 
		izqu_titulo: "", 
		izqu_colinda_campo: "", 
		izqu_colinda_titulo: "", 
		fond_titulo: "", 
		fond_campo: "", 
		fond_colinda_campo: "", 
		fond_colinda_titulo: "", 
			})
		},
	});
	const store = usePageStore(props.pageStoreKey);
	const app = useApp();// application state and methods
	
	const formData = reactive({ ...props.pageData });
	
	
	//vuelidate form validation rules
	const rules = computed(() => {
		return {
			id_ficha: { required }
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
			app.navigateTo(`/tflinderos`);
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
