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
                                                    Id Persona *
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlid_persona" v-model.trim="formData.id_persona"  label="Id Persona" type="text" placeholder="Escribir Id Persona"      
                                                    class="" :error="isFieldValid('id_persona')" :error-message="getFieldError('id_persona')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Nume Doc 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlnume_doc" v-model.trim="formData.nume_doc"  label="Nume Doc" type="text" placeholder="Escribir Nume Doc"      
                                                    class="" :error="isFieldValid('nume_doc')" :error-message="getFieldError('nume_doc')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Tipo Doc 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrltipo_doc" v-model.trim="formData.tipo_doc"  label="Tipo Doc" type="text" placeholder="Escribir Tipo Doc"      
                                                    class="" :error="isFieldValid('tipo_doc')" :error-message="getFieldError('tipo_doc')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Tipo Persona 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrltipo_persona" v-model.trim="formData.tipo_persona"  label="Tipo Persona" type="text" placeholder="Escribir Tipo Persona"      
                                                    class="" :error="isFieldValid('tipo_persona')" :error-message="getFieldError('tipo_persona')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Nombres 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlnombres" v-model.trim="formData.nombres"  label="Nombres" type="text" placeholder="Escribir Nombres"      
                                                    class="" :error="isFieldValid('nombres')" :error-message="getFieldError('nombres')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Ape Paterno 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlape_paterno" v-model.trim="formData.ape_paterno"  label="Ape Paterno" type="text" placeholder="Escribir Ape Paterno"      
                                                    class="" :error="isFieldValid('ape_paterno')" :error-message="getFieldError('ape_paterno')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Ape Materno 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlape_materno" v-model.trim="formData.ape_materno"  label="Ape Materno" type="text" placeholder="Escribir Ape Materno"      
                                                    class="" :error="isFieldValid('ape_materno')" :error-message="getFieldError('ape_materno')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Tipo Persona Juridica 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrltipo_persona_juridica" v-model.trim="formData.tipo_persona_juridica"  label="Tipo Persona Juridica" type="text" placeholder="Escribir Tipo Persona Juridica"      
                                                    class="" :error="isFieldValid('tipo_persona_juridica')" :error-message="getFieldError('tipo_persona_juridica')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Tipo Funcion 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrltipo_funcion" v-model.trim="formData.tipo_funcion"  label="Tipo Funcion" type="text" placeholder="Escribir Tipo Funcion"      
                                                    class="" :error="isFieldValid('tipo_funcion')" :error-message="getFieldError('tipo_funcion')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Razon Social 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlrazon_social" v-model.trim="formData.razon_social"  label="Razon Social" type="text" placeholder="Escribir Razon Social"      
                                                    class="" :error="isFieldValid('razon_social')" :error-message="getFieldError('razon_social')">
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
			default : 'tfpersonas',
		},
		pageStoreKey: {
			type: String,
			default: 'TFPERSONAS',
		},
		routeName : {
			type : String,
			default : 'tfpersonasadd',
		},
		apiPath : {
			type : String,
			default : 'tfpersonas/add',
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
		id_persona: "", 
		nume_doc: "", 
		tipo_doc: "", 
		tipo_persona: "", 
		nombres: "", 
		ape_paterno: "", 
		ape_materno: "", 
		tipo_persona_juridica: "", 
		tipo_funcion: "", 
		razon_social: "", 
			})
		},
	});
	const store = usePageStore(props.pageStoreKey);
	const app = useApp();// application state and methods
	
	const formData = reactive({ ...props.pageData });
	
	
	//vuelidate form validation rules
	const rules = computed(() => {
		return {
			id_persona: { required }
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
			app.navigateTo(`/tfpersonas`);
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
