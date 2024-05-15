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
                                                    Id Construccion *
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlid_construccion" v-model.trim="formData.id_construccion"  label="Id Construccion" type="text" placeholder="Escribir Id Construccion"      
                                                    class="" :error="isFieldValid('id_construccion')" :error-message="getFieldError('id_construccion')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
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
                                                    Codi Construccion *
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlcodi_construccion" v-model.trim="formData.codi_construccion"  label="Codi Construccion" type="number" placeholder="Escribir Codi Construccion"   step="any"    
                                                    class="" :error="isFieldValid('codi_construccion')" :error-message="getFieldError('codi_construccion')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Nume Piso 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlnume_piso" v-model.trim="formData.nume_piso"  label="Nume Piso" type="text" placeholder="Escribir Nume Piso"      
                                                    class="" :error="isFieldValid('nume_piso')" :error-message="getFieldError('nume_piso')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Fecha 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input  ref="ctrlfecha" v-model="formData.fecha" label="Fecha"    :error="isFieldValid('fecha')" :error-message="getFieldError('fecha')">
                                                    <template v-slot:append>
                                                        <q-icon name="date_range" class="cursor-pointer">
                                                        <q-popup-proxy ref="ctrlfecha" transition-show="scale" transition-hide="scale">
                                                        <q-date    mask="YYYY-MM-DD" v-model="formData.fecha" @input="$refs.ctrlfecha.hide()" />
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
                                                    Mep 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlmep" v-model.trim="formData.mep"  label="Mep" type="text" placeholder="Escribir Mep"      
                                                    class="" :error="isFieldValid('mep')" :error-message="getFieldError('mep')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Ecs 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlecs" v-model.trim="formData.ecs"  label="Ecs" type="text" placeholder="Escribir Ecs"      
                                                    class="" :error="isFieldValid('ecs')" :error-message="getFieldError('ecs')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Ecc 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlecc" v-model.trim="formData.ecc"  label="Ecc" type="text" placeholder="Escribir Ecc"      
                                                    class="" :error="isFieldValid('ecc')" :error-message="getFieldError('ecc')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Estr Muro Col 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlestr_muro_col" v-model.trim="formData.estr_muro_col"  label="Estr Muro Col" type="text" placeholder="Escribir Estr Muro Col"      
                                                    class="" :error="isFieldValid('estr_muro_col')" :error-message="getFieldError('estr_muro_col')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Estr Techo 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlestr_techo" v-model.trim="formData.estr_techo"  label="Estr Techo" type="text" placeholder="Escribir Estr Techo"      
                                                    class="" :error="isFieldValid('estr_techo')" :error-message="getFieldError('estr_techo')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Acab Piso 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlacab_piso" v-model.trim="formData.acab_piso"  label="Acab Piso" type="text" placeholder="Escribir Acab Piso"      
                                                    class="" :error="isFieldValid('acab_piso')" :error-message="getFieldError('acab_piso')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Acab Puerta Ven 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlacab_puerta_ven" v-model.trim="formData.acab_puerta_ven"  label="Acab Puerta Ven" type="text" placeholder="Escribir Acab Puerta Ven"      
                                                    class="" :error="isFieldValid('acab_puerta_ven')" :error-message="getFieldError('acab_puerta_ven')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Acab Revest 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlacab_revest" v-model.trim="formData.acab_revest"  label="Acab Revest" type="text" placeholder="Escribir Acab Revest"      
                                                    class="" :error="isFieldValid('acab_revest')" :error-message="getFieldError('acab_revest')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Acab Bano 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlacab_bano" v-model.trim="formData.acab_bano"  label="Acab Bano" type="text" placeholder="Escribir Acab Bano"      
                                                    class="" :error="isFieldValid('acab_bano')" :error-message="getFieldError('acab_bano')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Inst Elect Sanita 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlinst_elect_sanita" v-model.trim="formData.inst_elect_sanita"  label="Inst Elect Sanita" type="text" placeholder="Escribir Inst Elect Sanita"      
                                                    class="" :error="isFieldValid('inst_elect_sanita')" :error-message="getFieldError('inst_elect_sanita')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Area Declarada 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlarea_declarada" v-model.trim="formData.area_declarada"  label="Area Declarada" type="number" placeholder="Escribir Area Declarada"   step="0.1"    
                                                    class="" :error="isFieldValid('area_declarada')" :error-message="getFieldError('area_declarada')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Area Verificada 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlarea_verificada" v-model.trim="formData.area_verificada"  label="Area Verificada" type="number" placeholder="Escribir Area Verificada"   step="0.1"    
                                                    class="" :error="isFieldValid('area_verificada')" :error-message="getFieldError('area_verificada')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Uca 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrluca" v-model.trim="formData.uca"  label="Uca" type="text" placeholder="Escribir Uca"      
                                                    class="" :error="isFieldValid('uca')" :error-message="getFieldError('uca')">
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
			default : 'tfconstrucciones',
		},
		pageStoreKey: {
			type: String,
			default: 'TFCONSTRUCCIONES',
		},
		routeName : {
			type : String,
			default : 'tfconstruccionesadd',
		},
		apiPath : {
			type : String,
			default : 'tfconstrucciones/add',
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
		id_construccion: "", 
		id_ficha: "", 
		codi_construccion: "", 
		nume_piso: "", 
		fecha: new Date(), 
		mep: "", 
		ecs: "", 
		ecc: "", 
		estr_muro_col: "", 
		estr_techo: "", 
		acab_piso: "", 
		acab_puerta_ven: "", 
		acab_revest: "", 
		acab_bano: "", 
		inst_elect_sanita: "", 
		area_declarada: "", 
		area_verificada: "", 
		uca: "", 
			})
		},
	});
	const store = usePageStore(props.pageStoreKey);
	const app = useApp();// application state and methods
	
	const formData = reactive({ ...props.pageData });
	
	
	//vuelidate form validation rules
	const rules = computed(() => {
		return {
			id_construccion: { required },
		id_ficha: { required },
		codi_construccion: { required, numeric },
		area_declarada: { numeric },
		area_verificada: { numeric }
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
			app.navigateTo(`/tfconstrucciones`);
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
