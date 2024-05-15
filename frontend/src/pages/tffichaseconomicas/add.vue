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
                                                    Nomb Comercial 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlnomb_comercial" v-model.trim="formData.nomb_comercial"  label="Nomb Comercial" type="text" placeholder="Escribir Nomb Comercial"      
                                                    class="" :error="isFieldValid('nomb_comercial')" :error-message="getFieldError('nomb_comercial')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Pred Area Autor 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlpred_area_autor" v-model.trim="formData.pred_area_autor"  label="Pred Area Autor" type="number" placeholder="Escribir Pred Area Autor"   step="0.1"    
                                                    class="" :error="isFieldValid('pred_area_autor')" :error-message="getFieldError('pred_area_autor')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Viap Area Autor 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlviap_area_autor" v-model.trim="formData.viap_area_autor"  label="Viap Area Autor" type="number" placeholder="Escribir Viap Area Autor"   step="0.1"    
                                                    class="" :error="isFieldValid('viap_area_autor')" :error-message="getFieldError('viap_area_autor')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Viap Area Verif 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlviap_area_verif" v-model.trim="formData.viap_area_verif"  label="Viap Area Verif" type="number" placeholder="Escribir Viap Area Verif"   step="0.1"    
                                                    class="" :error="isFieldValid('viap_area_verif')" :error-message="getFieldError('viap_area_verif')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Bc Area Autor 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlbc_area_autor" v-model.trim="formData.bc_area_autor"  label="Bc Area Autor" type="number" placeholder="Escribir Bc Area Autor"   step="0.1"    
                                                    class="" :error="isFieldValid('bc_area_autor')" :error-message="getFieldError('bc_area_autor')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Bc Area Verif 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlbc_area_verif" v-model.trim="formData.bc_area_verif"  label="Bc Area Verif" type="number" placeholder="Escribir Bc Area Verif"   step="0.1"    
                                                    class="" :error="isFieldValid('bc_area_verif')" :error-message="getFieldError('bc_area_verif')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Nume Expediente 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlnume_expediente" v-model.trim="formData.nume_expediente"  label="Nume Expediente" type="text" placeholder="Escribir Nume Expediente"      
                                                    class="" :error="isFieldValid('nume_expediente')" :error-message="getFieldError('nume_expediente')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Nume Licencia 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlnume_licencia" v-model.trim="formData.nume_licencia"  label="Nume Licencia" type="text" placeholder="Escribir Nume Licencia"      
                                                    class="" :error="isFieldValid('nume_licencia')" :error-message="getFieldError('nume_licencia')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Fecha Expedicion 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input  ref="ctrlfecha_expedicion" v-model="formData.fecha_expedicion" label="Fecha Expedicion"    :error="isFieldValid('fecha_expedicion')" :error-message="getFieldError('fecha_expedicion')">
                                                    <template v-slot:append>
                                                        <q-icon name="date_range" class="cursor-pointer">
                                                        <q-popup-proxy ref="ctrlfecha_expedicion" transition-show="scale" transition-hide="scale">
                                                        <q-date    mask="YYYY-MM-DD" v-model="formData.fecha_expedicion" @input="$refs.ctrlfecha_expedicion.hide()" />
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
                                                    Fecha Vencimiento 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input  ref="ctrlfecha_vencimiento" v-model="formData.fecha_vencimiento" label="Fecha Vencimiento"    :error="isFieldValid('fecha_vencimiento')" :error-message="getFieldError('fecha_vencimiento')">
                                                    <template v-slot:append>
                                                        <q-icon name="date_range" class="cursor-pointer">
                                                        <q-popup-proxy ref="ctrlfecha_vencimiento" transition-show="scale" transition-hide="scale">
                                                        <q-date    mask="YYYY-MM-DD" v-model="formData.fecha_vencimiento" @input="$refs.ctrlfecha_vencimiento.hide()" />
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
                                                    Inic Actividad 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input  ref="ctrlinic_actividad" v-model="formData.inic_actividad" label="Inic Actividad"    :error="isFieldValid('inic_actividad')" :error-message="getFieldError('inic_actividad')">
                                                    <template v-slot:append>
                                                        <q-icon name="date_range" class="cursor-pointer">
                                                        <q-popup-proxy ref="ctrlinic_actividad" transition-show="scale" transition-hide="scale">
                                                        <q-date    mask="YYYY-MM-DD" v-model="formData.inic_actividad" @input="$refs.ctrlinic_actividad.hide()" />
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
                                                    Cond Declarante 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlcond_declarante" v-model.trim="formData.cond_declarante"  label="Cond Declarante" type="text" placeholder="Escribir Cond Declarante"      
                                                    class="" :error="isFieldValid('cond_declarante')" :error-message="getFieldError('cond_declarante')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Esta Llenado 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlesta_llenado" v-model.trim="formData.esta_llenado"  label="Esta Llenado" type="text" placeholder="Escribir Esta Llenado"      
                                                    class="" :error="isFieldValid('esta_llenado')" :error-message="getFieldError('esta_llenado')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Mantenimiento 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlmantenimiento" v-model.trim="formData.mantenimiento"  label="Mantenimiento" type="text" placeholder="Escribir Mantenimiento"      
                                                    class="" :error="isFieldValid('mantenimiento')" :error-message="getFieldError('mantenimiento')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Docu Presentado 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrldocu_presentado" v-model.trim="formData.docu_presentado"  label="Docu Presentado" type="text" placeholder="Escribir Docu Presentado"      
                                                    class="" :error="isFieldValid('docu_presentado')" :error-message="getFieldError('docu_presentado')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Pred Area Verif 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlpred_area_verif" v-model.trim="formData.pred_area_verif"  label="Pred Area Verif" type="number" placeholder="Escribir Pred Area Verif"   step="0.1"    
                                                    class="" :error="isFieldValid('pred_area_verif')" :error-message="getFieldError('pred_area_verif')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Observaciones 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlobservaciones" v-model.trim="formData.observaciones"  label="Observaciones" type="text" placeholder="Escribir Observaciones"      
                                                    class="" :error="isFieldValid('observaciones')" :error-message="getFieldError('observaciones')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Nume Ficha 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlnume_ficha" v-model.trim="formData.nume_ficha"  label="Nume Ficha" type="text" placeholder="Escribir Nume Ficha"      
                                                    class="" :error="isFieldValid('nume_ficha')" :error-message="getFieldError('nume_ficha')">
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
			default : 'tffichaseconomicas',
		},
		pageStoreKey: {
			type: String,
			default: 'TFFICHASECONOMICAS',
		},
		routeName : {
			type : String,
			default : 'tffichaseconomicasadd',
		},
		apiPath : {
			type : String,
			default : 'tffichaseconomicas/add',
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
		nomb_comercial: "", 
		pred_area_autor: "", 
		viap_area_autor: "", 
		viap_area_verif: "", 
		bc_area_autor: "", 
		bc_area_verif: "", 
		nume_expediente: "", 
		nume_licencia: "", 
		fecha_expedicion: new Date(), 
		fecha_vencimiento: new Date(), 
		inic_actividad: new Date(), 
		cond_declarante: "", 
		esta_llenado: "", 
		mantenimiento: "", 
		docu_presentado: "", 
		pred_area_verif: "", 
		observaciones: "", 
		nume_ficha: "", 
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
		pred_area_autor: { numeric },
		viap_area_autor: { numeric },
		viap_area_verif: { numeric },
		bc_area_autor: { numeric },
		bc_area_verif: { numeric },
		pred_area_verif: { numeric }
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
			app.navigateTo(`/tffichaseconomicas`);
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
