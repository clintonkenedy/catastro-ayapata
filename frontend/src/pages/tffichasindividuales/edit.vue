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
                                    Editar
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
                                <q-card  :flat="isSubPage" class="q-pa-md nice-shadow-6">
                                    <q-form ref="observer"  @submit.prevent="submitForm()">
                                    <!--[form-content-start]-->
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
                                                    Codi Uso *
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <api-data-source @loaded="response => mapOptionField(response, 'codi_uso')"  api-path="components_data/codi_uso_option_list_2"  v-slot="req">
                                                        <nice-select     :loading="req.loading"   ref="ctrlcodi_uso" v-model="formData.codi_uso" :options="req.response" label="Codi Uso"  :error="isFieldValid('codi_uso')" :error-message="getFieldError('codi_uso')">
                                                        </nice-select>  
                                                    </api-data-source>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Cont En 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlcont_en" v-model.trim="formData.cont_en"  label="Cont En" type="text" placeholder="Escribir Cont En"      
                                                    class="" :error="isFieldValid('cont_en')" :error-message="getFieldError('cont_en')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Clasificacion 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlclasificacion" v-model.trim="formData.clasificacion"  label="Clasificacion" type="text" placeholder="Escribir Clasificacion"      
                                                    class="" :error="isFieldValid('clasificacion')" :error-message="getFieldError('clasificacion')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Area Titulo 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlarea_titulo" v-model.trim="formData.area_titulo"  label="Area Titulo" type="number" placeholder="Escribir Area Titulo"   step="0.1"    
                                                    class="" :error="isFieldValid('area_titulo')" :error-message="getFieldError('area_titulo')">
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
                                                    Porc Bc Terr Legal 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlporc_bc_terr_legal" v-model.trim="formData.porc_bc_terr_legal"  label="Porc Bc Terr Legal" type="number" placeholder="Escribir Porc Bc Terr Legal"   step="0.1"    
                                                    class="" :error="isFieldValid('porc_bc_terr_legal')" :error-message="getFieldError('porc_bc_terr_legal')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Porc Bc Terr Fisc 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlporc_bc_terr_fisc" v-model.trim="formData.porc_bc_terr_fisc"  label="Porc Bc Terr Fisc" type="number" placeholder="Escribir Porc Bc Terr Fisc"   step="0.1"    
                                                    class="" :error="isFieldValid('porc_bc_terr_fisc')" :error-message="getFieldError('porc_bc_terr_fisc')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Porc Bc Const Legal 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlporc_bc_const_legal" v-model.trim="formData.porc_bc_const_legal"  label="Porc Bc Const Legal" type="number" placeholder="Escribir Porc Bc Const Legal"   step="0.1"    
                                                    class="" :error="isFieldValid('porc_bc_const_legal')" :error-message="getFieldError('porc_bc_const_legal')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Porc Bc Const Fisc 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlporc_bc_const_fisc" v-model.trim="formData.porc_bc_const_fisc"  label="Porc Bc Const Fisc" type="number" placeholder="Escribir Porc Bc Const Fisc"   step="0.1"    
                                                    class="" :error="isFieldValid('porc_bc_const_fisc')" :error-message="getFieldError('porc_bc_const_fisc')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Evaluacion 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlevaluacion" v-model.trim="formData.evaluacion"  label="Evaluacion" type="text" placeholder="Escribir Evaluacion"      
                                                    class="" :error="isFieldValid('evaluacion')" :error-message="getFieldError('evaluacion')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    En Colindante 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlen_colindante" v-model.trim="formData.en_colindante"  label="En Colindante" type="number" placeholder="Escribir En Colindante"   step="0.1"    
                                                    class="" :error="isFieldValid('en_colindante')" :error-message="getFieldError('en_colindante')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    En Jardin Aislamiento 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlen_jardin_aislamiento" v-model.trim="formData.en_jardin_aislamiento"  label="En Jardin Aislamiento" type="number" placeholder="Escribir En Jardin Aislamiento"   step="0.1"    
                                                    class="" :error="isFieldValid('en_jardin_aislamiento')" :error-message="getFieldError('en_jardin_aislamiento')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    En Area Publica 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlen_area_publica" v-model.trim="formData.en_area_publica"  label="En Area Publica" type="number" placeholder="Escribir En Area Publica"   step="0.1"    
                                                    class="" :error="isFieldValid('en_area_publica')" :error-message="getFieldError('en_area_publica')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    En Area Intangible 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlen_area_intangible" v-model.trim="formData.en_area_intangible"  label="En Area Intangible" type="number" placeholder="Escribir En Area Intangible"   step="0.1"    
                                                    class="" :error="isFieldValid('en_area_intangible')" :error-message="getFieldError('en_area_intangible')">
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
                                                    Nume Habitantes 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlnume_habitantes" v-model.trim="formData.nume_habitantes"  label="Nume Habitantes" type="number" placeholder="Escribir Nume Habitantes"   step="any"    
                                                    class="" :error="isFieldValid('nume_habitantes')" :error-message="getFieldError('nume_habitantes')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Nume Familias 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlnume_familias" v-model.trim="formData.nume_familias"  label="Nume Familias" type="number" placeholder="Escribir Nume Familias"   step="any"    
                                                    class="" :error="isFieldValid('nume_familias')" :error-message="getFieldError('nume_familias')">
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
                                    <!--[form-content-end]-->
                                    <div v-if="showSubmitButton" class="text-center q-my-md">
                                        <q-btn    :rounded="false"  color="primary"  no-caps  unelevated   type="submit" icon-right="send" :loading="saving">
                                            {{ submitButtonLabel }}
                                            <template v-slot:loading>
                                                <q-spinner-oval />
                                            </template>
                                        </q-btn>
                                    </div>
                                    </q-form>
                                    <slot :submit="submitForm" :saving="saving"></slot>
                                </q-card>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </template>
        <template v-if="loading">
            <div style="min-height:200px" class="q-pa-sm text-center relative-position">
                <q-inner-loading color="primary" label="Cargando..." showing></q-inner-loading>
            </div>
        </template>
    </main>
</template>
<script setup>
	import {  computed, ref, reactive, toRefs } from 'vue';
	import { required, numeric, } from 'src/services/validators';
	import { useMeta } from 'quasar';
	import { useApp } from 'src/composables/app';
	import { useEditPage } from 'src/composables/editpage';
	import { usePageStore } from 'src/stores/page';
	
	const props = defineProps({
		id: [String, Number],
		pageName: {
			type: String,
			default: 'tffichasindividuales',
		},
		pageStoreKey: {
			type: String,
			default: 'TFFICHASINDIVIDUALES',
		},
		routeName: {
			type: String,
			default: 'tffichasindividualesedit',
		},
		pagePath: {
			type : String,
			default : 'tffichasindividuales/edit',
		},
		apiPath: {
			type: String,
			default: 'tffichasindividuales/edit',
		},
		submitButtonLabel: {
			type: String,
			default: "Actualizar",
		},
		msgTitle: {
			type: String,
			default: "Actualizar registro",
		},
		msgBeforeSave: {
			type: String,
			default: "",
		},
		msgAfterSave: {
			type: String,
			default: "Registro actualizado con éxito",
		},
		formValidationError: {
			type: String,
			default: "El formulario no es válido",
		},
		formValidationMsg: {
			type: String,
			default: "Por favor complete el formulario",
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
	});
	
	const store = usePageStore(props.pageStoreKey);
	const app = useApp();
	
	const formDefaultValues = Object.assign({
		id_ficha: "", 
		codi_uso: "", 
		cont_en: "", 
		clasificacion: "", 
		area_titulo: "", 
		area_declarada: "", 
		area_verificada: "", 
		porc_bc_terr_legal: "", 
		porc_bc_terr_fisc: "", 
		porc_bc_const_legal: "", 
		porc_bc_const_fisc: "", 
		evaluacion: "", 
		en_colindante: "", 
		en_jardin_aislamiento: "", 
		en_area_publica: "", 
		en_area_intangible: "", 
		cond_declarante: "", 
		esta_llenado: "", 
		nume_habitantes: "", 
		nume_familias: "", 
		mantenimiento: "", 
		observaciones: "", 
		nume_ficha: "", 
	}, props.pageData);
	
	const formData = reactive({ ...formDefaultValues });
	
	//event raised after form submit
	function afterSubmit(response) {
		app.flashMsg(props.msgTitle, props.msgAfterSave);
		if(app.isDialogOpen()){
			app.closeDialogs(); // if page is open as dialog, close dialog
		}
		else if(props.redirect){
			app.navigateTo(`/tffichasindividuales`);
		}
	}
	
	//vuelidate form validation rules
	const rules = computed(() => {
		return {
			id_ficha: { required },
		codi_uso: { required },
		area_titulo: { numeric },
		area_declarada: { numeric },
		area_verificada: { numeric },
		porc_bc_terr_legal: { numeric },
		porc_bc_terr_fisc: { numeric },
		porc_bc_const_legal: { numeric },
		porc_bc_const_fisc: { numeric },
		en_colindante: { numeric },
		en_jardin_aislamiento: { numeric },
		en_area_publica: { numeric },
		en_area_intangible: { numeric },
		nume_habitantes: { numeric },
		nume_familias: { numeric }
		}
	});
	
	const page = useEditPage({ store, props, formData, rules, afterSubmit });
	
	const {  saving, loading, pageReady,   } = toRefs(page.state);
	
	const {  currentRecord: editRecord } = toRefs(store.state);
	
	const { load, submitForm, isFieldValid, getFieldError, mapOptionField, } = page.methods;
	
	useMeta(() => {
		return {
			//set browser title
			title: "Editar"
		}
	});
</script>
<style scoped>
</style>
