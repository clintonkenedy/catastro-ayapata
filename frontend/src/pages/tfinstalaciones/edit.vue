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
                                                    Id Instalacion *
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlid_instalacion" v-model.trim="formData.id_instalacion"  label="Id Instalacion" type="text" placeholder="Escribir Id Instalacion"      
                                                    class="" :error="isFieldValid('id_instalacion')" :error-message="getFieldError('id_instalacion')">
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
                                                    Codi Instalacion *
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <api-data-source @loaded="response => mapOptionField(response, 'codi_instalacion')"  api-path="components_data/codi_instalacion_option_list"  v-slot="req">
                                                        <nice-select     :loading="req.loading"   ref="ctrlcodi_instalacion" v-model="formData.codi_instalacion" :options="req.response" label="Codi Instalacion"  :error="isFieldValid('codi_instalacion')" :error-message="getFieldError('codi_instalacion')">
                                                        </nice-select>  
                                                    </api-data-source>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Codi Obra *
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlcodi_obra" v-model.trim="formData.codi_obra"  label="Codi Obra" type="number" placeholder="Escribir Codi Obra"   step="any"    
                                                    class="" :error="isFieldValid('codi_obra')" :error-message="getFieldError('codi_obra')">
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
                                                    Dime Largo 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrldime_largo" v-model.trim="formData.dime_largo"  label="Dime Largo" type="number" placeholder="Escribir Dime Largo"   step="0.1"    
                                                    class="" :error="isFieldValid('dime_largo')" :error-message="getFieldError('dime_largo')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Dime Ancho 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrldime_ancho" v-model.trim="formData.dime_ancho"  label="Dime Ancho" type="number" placeholder="Escribir Dime Ancho"   step="0.1"    
                                                    class="" :error="isFieldValid('dime_ancho')" :error-message="getFieldError('dime_ancho')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Dime Alto 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrldime_alto" v-model.trim="formData.dime_alto"  label="Dime Alto" type="number" placeholder="Escribir Dime Alto"   step="0.1"    
                                                    class="" :error="isFieldValid('dime_alto')" :error-message="getFieldError('dime_alto')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Prod Total 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlprod_total" v-model.trim="formData.prod_total"  label="Prod Total" type="number" placeholder="Escribir Prod Total"   step="0.1"    
                                                    class="" :error="isFieldValid('prod_total')" :error-message="getFieldError('prod_total')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Uni Med 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrluni_med" v-model.trim="formData.uni_med"  label="Uni Med" type="text" placeholder="Escribir Uni Med"      
                                                    class="" :error="isFieldValid('uni_med')" :error-message="getFieldError('uni_med')">
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
			default: 'tfinstalaciones',
		},
		pageStoreKey: {
			type: String,
			default: 'TFINSTALACIONES',
		},
		routeName: {
			type: String,
			default: 'tfinstalacionesedit',
		},
		pagePath: {
			type : String,
			default : 'tfinstalaciones/edit',
		},
		apiPath: {
			type: String,
			default: 'tfinstalaciones/edit',
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
		id_instalacion: "", 
		id_ficha: "", 
		codi_instalacion: "", 
		codi_obra: "", 
		fecha: new Date(), 
		mep: "", 
		ecs: "", 
		ecc: "", 
		dime_largo: "", 
		dime_ancho: "", 
		dime_alto: "", 
		prod_total: "", 
		uni_med: "", 
		uca: "", 
	}, props.pageData);
	
	const formData = reactive({ ...formDefaultValues });
	
	//event raised after form submit
	function afterSubmit(response) {
		app.flashMsg(props.msgTitle, props.msgAfterSave);
		if(app.isDialogOpen()){
			app.closeDialogs(); // if page is open as dialog, close dialog
		}
		else if(props.redirect){
			app.navigateTo(`/tfinstalaciones`);
		}
	}
	
	//vuelidate form validation rules
	const rules = computed(() => {
		return {
			id_instalacion: { required },
		id_ficha: { required },
		codi_instalacion: { required },
		codi_obra: { required, numeric },
		dime_largo: { numeric },
		dime_ancho: { numeric },
		dime_alto: { numeric },
		prod_total: { numeric }
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
