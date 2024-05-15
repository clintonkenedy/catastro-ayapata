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
                                                    <q-input   ref="ctrlid_ficha" v-model.trim="formData.id_ficha"  label="Id Ficha" type="text" placeholder="Escribir Id Ficha"      
                                                    class="" :error="isFieldValid('id_ficha')" :error-message="getFieldError('id_ficha')">
                                                    </q-input>
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
                                                    Codi Via 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlcodi_via" v-model.trim="formData.codi_via"  label="Codi Via" type="text" placeholder="Escribir Codi Via"      
                                                    class="" :error="isFieldValid('codi_via')" :error-message="getFieldError('codi_via')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Tipo Via 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrltipo_via" v-model.trim="formData.tipo_via"  label="Tipo Via" type="text" placeholder="Escribir Tipo Via"      
                                                    class="" :error="isFieldValid('tipo_via')" :error-message="getFieldError('tipo_via')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Nomb Via 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlnomb_via" v-model.trim="formData.nomb_via"  label="Nomb Via" type="text" placeholder="Escribir Nomb Via"      
                                                    class="" :error="isFieldValid('nomb_via')" :error-message="getFieldError('nomb_via')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Nume Muni 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlnume_muni" v-model.trim="formData.nume_muni"  label="Nume Muni" type="text" placeholder="Escribir Nume Muni"      
                                                    class="" :error="isFieldValid('nume_muni')" :error-message="getFieldError('nume_muni')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Nomb Edificacion 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlnomb_edificacion" v-model.trim="formData.nomb_edificacion"  label="Nomb Edificacion" type="text" placeholder="Escribir Nomb Edificacion"      
                                                    class="" :error="isFieldValid('nomb_edificacion')" :error-message="getFieldError('nomb_edificacion')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Nume Interior 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlnume_interior" v-model.trim="formData.nume_interior"  label="Nume Interior" type="text" placeholder="Escribir Nume Interior"      
                                                    class="" :error="isFieldValid('nume_interior')" :error-message="getFieldError('nume_interior')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Codi Hab Urba 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlcodi_hab_urba" v-model.trim="formData.codi_hab_urba"  label="Codi Hab Urba" type="text" placeholder="Escribir Codi Hab Urba"      
                                                    class="" :error="isFieldValid('codi_hab_urba')" :error-message="getFieldError('codi_hab_urba')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Nomb Hab Urba 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlnomb_hab_urba" v-model.trim="formData.nomb_hab_urba"  label="Nomb Hab Urba" type="text" placeholder="Escribir Nomb Hab Urba"      
                                                    class="" :error="isFieldValid('nomb_hab_urba')" :error-message="getFieldError('nomb_hab_urba')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Sector 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlsector" v-model.trim="formData.sector"  label="Sector" type="text" placeholder="Escribir Sector"      
                                                    class="" :error="isFieldValid('sector')" :error-message="getFieldError('sector')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Mzna 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlmzna" v-model.trim="formData.mzna"  label="Mzna" type="text" placeholder="Escribir Mzna"      
                                                    class="" :error="isFieldValid('mzna')" :error-message="getFieldError('mzna')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Lote 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrllote" v-model.trim="formData.lote"  label="Lote" type="text" placeholder="Escribir Lote"      
                                                    class="" :error="isFieldValid('lote')" :error-message="getFieldError('lote')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Sublote 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlsublote" v-model.trim="formData.sublote"  label="Sublote" type="text" placeholder="Escribir Sublote"      
                                                    class="" :error="isFieldValid('sublote')" :error-message="getFieldError('sublote')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Codi Dep 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlcodi_dep" v-model.trim="formData.codi_dep"  label="Codi Dep" type="text" placeholder="Escribir Codi Dep"      
                                                    class="" :error="isFieldValid('codi_dep')" :error-message="getFieldError('codi_dep')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Codi Pro 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlcodi_pro" v-model.trim="formData.codi_pro"  label="Codi Pro" type="text" placeholder="Escribir Codi Pro"      
                                                    class="" :error="isFieldValid('codi_pro')" :error-message="getFieldError('codi_pro')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Codi Dis 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlcodi_dis" v-model.trim="formData.codi_dis"  label="Codi Dis" type="text" placeholder="Escribir Codi Dis"      
                                                    class="" :error="isFieldValid('codi_dis')" :error-message="getFieldError('codi_dis')">
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
	import { required, } from 'src/services/validators';
	import { useMeta } from 'quasar';
	import { useApp } from 'src/composables/app';
	import { useEditPage } from 'src/composables/editpage';
	import { usePageStore } from 'src/stores/page';
	
	const props = defineProps({
		id: [String, Number],
		pageName: {
			type: String,
			default: 'tfdomiciliotitulares',
		},
		pageStoreKey: {
			type: String,
			default: 'TFDOMICILIOTITULARES',
		},
		routeName: {
			type: String,
			default: 'tfdomiciliotitularesedit',
		},
		pagePath: {
			type : String,
			default : 'tfdomiciliotitulares/edit',
		},
		apiPath: {
			type: String,
			default: 'tfdomiciliotitulares/edit',
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
		id_persona: "", 
		codi_via: "", 
		tipo_via: "", 
		nomb_via: "", 
		nume_muni: "", 
		nomb_edificacion: "", 
		nume_interior: "", 
		codi_hab_urba: "", 
		nomb_hab_urba: "", 
		sector: "", 
		mzna: "", 
		lote: "", 
		sublote: "", 
		codi_dep: "", 
		codi_pro: "", 
		codi_dis: "", 
	}, props.pageData);
	
	const formData = reactive({ ...formDefaultValues });
	
	//event raised after form submit
	function afterSubmit(response) {
		app.flashMsg(props.msgTitle, props.msgAfterSave);
		if(app.isDialogOpen()){
			app.closeDialogs(); // if page is open as dialog, close dialog
		}
		else if(props.redirect){
			app.navigateTo(`/tfdomiciliotitulares`);
		}
	}
	
	//vuelidate form validation rules
	const rules = computed(() => {
		return {
			id_ficha: { required },
		id_persona: { required }
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
