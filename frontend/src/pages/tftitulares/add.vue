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
                                                    Id Persona *
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <api-data-source @loaded="response => mapOptionField(response, 'id_persona')"  api-path="components_data/id_persona_option_list"  v-slot="req">
                                                        <nice-select     :loading="req.loading"   ref="ctrlid_persona" v-model="formData.id_persona" :options="req.response" label="Id Persona"  :error="isFieldValid('id_persona')" :error-message="getFieldError('id_persona')">
                                                        </nice-select>  
                                                    </api-data-source>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Form Adquisicion 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlform_adquisicion" v-model.trim="formData.form_adquisicion"  label="Form Adquisicion" type="text" placeholder="Escribir Form Adquisicion"      
                                                    class="" :error="isFieldValid('form_adquisicion')" :error-message="getFieldError('form_adquisicion')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Fecha Adquisicion 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input  ref="ctrlfecha_adquisicion" v-model="formData.fecha_adquisicion" label="Fecha Adquisicion"    :error="isFieldValid('fecha_adquisicion')" :error-message="getFieldError('fecha_adquisicion')">
                                                    <template v-slot:append>
                                                        <q-icon name="date_range" class="cursor-pointer">
                                                        <q-popup-proxy ref="ctrlfecha_adquisicion" transition-show="scale" transition-hide="scale">
                                                        <q-date    mask="YYYY-MM-DD" v-model="formData.fecha_adquisicion" @input="$refs.ctrlfecha_adquisicion.hide()" />
                                                        </q-popup-proxy>
                                                        </q-icon>
                                                    </template>
                                                    </q-input>      
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Porc Cotitular 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlporc_cotitular" v-model.trim="formData.porc_cotitular"  label="Porc Cotitular" type="number" placeholder="Escribir Porc Cotitular"   step="0.1"    
                                                    class="" :error="isFieldValid('porc_cotitular')" :error-message="getFieldError('porc_cotitular')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Esta Civil 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlesta_civil" v-model.trim="formData.esta_civil"  label="Esta Civil" type="text" placeholder="Escribir Esta Civil"      
                                                    class="" :error="isFieldValid('esta_civil')" :error-message="getFieldError('esta_civil')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Fax 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlfax" v-model.trim="formData.fax"  label="Fax" type="text" placeholder="Escribir Fax"      
                                                    class="" :error="isFieldValid('fax')" :error-message="getFieldError('fax')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Telf 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrltelf" v-model.trim="formData.telf"  label="Telf" type="text" placeholder="Escribir Telf"      
                                                    class="" :error="isFieldValid('telf')" :error-message="getFieldError('telf')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Anexo 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlanexo" v-model.trim="formData.anexo"  label="Anexo" type="text" placeholder="Escribir Anexo"      
                                                    class="" :error="isFieldValid('anexo')" :error-message="getFieldError('anexo')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Email 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlemail" v-model.trim="formData.email"  label="Email" type="email" placeholder="Escribir Email"      
                                                    class="" :error="isFieldValid('email')" :error-message="getFieldError('email')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Nume Titular 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlnume_titular" v-model.trim="formData.nume_titular"  label="Nume Titular" type="text" placeholder="Escribir Nume Titular"      
                                                    class="" :error="isFieldValid('nume_titular')" :error-message="getFieldError('nume_titular')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Codi Contribuyente 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlcodi_contribuyente" v-model.trim="formData.codi_contribuyente"  label="Codi Contribuyente" type="text" placeholder="Escribir Codi Contribuyente"      
                                                    class="" :error="isFieldValid('codi_contribuyente')" :error-message="getFieldError('codi_contribuyente')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Cond Titular 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlcond_titular" v-model.trim="formData.cond_titular"  label="Cond Titular" type="text" placeholder="Escribir Cond Titular"      
                                                    class="" :error="isFieldValid('cond_titular')" :error-message="getFieldError('cond_titular')">
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
	import { required, email, numeric, } from 'src/services/validators';
	import { usePageStore } from 'src/stores/page';
	import { useMeta } from 'quasar';
	import { useApp } from 'src/composables/app';
	import { useAddPage } from 'src/composables/addpage';
	
	const props = defineProps({
		pageName : {
			type : String,
			default : 'tftitulares',
		},
		pageStoreKey: {
			type: String,
			default: 'TFTITULARES',
		},
		routeName : {
			type : String,
			default : 'tftitularesadd',
		},
		apiPath : {
			type : String,
			default : 'tftitulares/add',
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
		id_persona: "", 
		form_adquisicion: "", 
		fecha_adquisicion: new Date(), 
		porc_cotitular: "", 
		esta_civil: "", 
		fax: "", 
		telf: "", 
		anexo: "", 
		email: "", 
		nume_titular: "", 
		codi_contribuyente: "", 
		cond_titular: "", 
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
		id_persona: { required },
		porc_cotitular: { numeric },
		email: { email }
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
			app.navigateTo(`/tftitulares`);
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
