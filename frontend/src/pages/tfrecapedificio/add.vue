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
                                                    <q-input   ref="ctrlid_ficha" v-model.trim="formData.id_ficha"  label="Id Ficha" type="text" placeholder="Escribir Id Ficha"      
                                                    class="" :error="isFieldValid('id_ficha')" :error-message="getFieldError('id_ficha')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Edificio *
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrledificio" v-model.trim="formData.edificio"  label="Edificio" type="text" placeholder="Escribir Edificio"      
                                                    class="" :error="isFieldValid('edificio')" :error-message="getFieldError('edificio')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Total Porcentaje 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrltotal_porcentaje" v-model.trim="formData.total_porcentaje"  label="Total Porcentaje" type="number" placeholder="Escribir Total Porcentaje"   step="0.1"    
                                                    class="" :error="isFieldValid('total_porcentaje')" :error-message="getFieldError('total_porcentaje')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Total Atc 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrltotal_atc" v-model.trim="formData.total_atc"  label="Total Atc" type="number" placeholder="Escribir Total Atc"   step="0.1"    
                                                    class="" :error="isFieldValid('total_atc')" :error-message="getFieldError('total_atc')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Total Acc 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrltotal_acc" v-model.trim="formData.total_acc"  label="Total Acc" type="number" placeholder="Escribir Total Acc"   step="0.1"    
                                                    class="" :error="isFieldValid('total_acc')" :error-message="getFieldError('total_acc')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Total Aoic 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrltotal_aoic" v-model.trim="formData.total_aoic"  label="Total Aoic" type="number" placeholder="Escribir Total Aoic"   step="0.1"    
                                                    class="" :error="isFieldValid('total_aoic')" :error-message="getFieldError('total_aoic')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Id Recap 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlid_recap" v-model.trim="formData.id_recap"  label="Id Recap" type="number" placeholder="Escribir Id Recap"   step="any"    
                                                    class="" :error="isFieldValid('id_recap')" :error-message="getFieldError('id_recap')">
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
	import { required, numeric, } from 'src/services/validators';
	import { usePageStore } from 'src/stores/page';
	import { useMeta } from 'quasar';
	import { useApp } from 'src/composables/app';
	import { useAddPage } from 'src/composables/addpage';
	
	const props = defineProps({
		pageName : {
			type : String,
			default : 'tfrecapedificio',
		},
		pageStoreKey: {
			type: String,
			default: 'TFRECAPEDIFICIO',
		},
		routeName : {
			type : String,
			default : 'tfrecapedificioadd',
		},
		apiPath : {
			type : String,
			default : 'tfrecapedificio/add',
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
		edificio: "", 
		total_porcentaje: "", 
		total_atc: "", 
		total_acc: "", 
		total_aoic: "", 
		id_recap: "", 
			})
		},
	});
	const store = usePageStore(props.pageStoreKey);
	const app = useApp();// application state and methods
	
	const formData = reactive({ ...props.pageData });
	
	
	//vuelidate form validation rules
	const rules = computed(() => {
		return {
			id_ficha: { required },
		edificio: { required },
		total_porcentaje: { numeric },
		total_atc: { numeric },
		total_acc: { numeric },
		total_aoic: { numeric },
		id_recap: { numeric }
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
			app.navigateTo(`/tfrecapedificio`);
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
