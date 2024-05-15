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
                                                    Id Uni Cat *
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlid_uni_cat" v-model.trim="formData.id_uni_cat"  label="Id Uni Cat" type="text" placeholder="Escribir Id Uni Cat"      
                                                    class="" :error="isFieldValid('id_uni_cat')" :error-message="getFieldError('id_uni_cat')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Id Lote 
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
                                                    Id Edificacion 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <api-data-source @loaded="response => mapOptionField(response, 'id_edificacion')"  api-path="components_data/id_edificacion_option_list"  v-slot="req">
                                                        <nice-select     :loading="req.loading"   ref="ctrlid_edificacion" v-model="formData.id_edificacion" :options="req.response" label="Id Edificacion"  :error="isFieldValid('id_edificacion')" :error-message="getFieldError('id_edificacion')">
                                                        </nice-select>  
                                                    </api-data-source>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Codi Entrada 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlcodi_entrada" v-model.trim="formData.codi_entrada"  label="Codi Entrada" type="text" placeholder="Escribir Codi Entrada"      
                                                    class="" :error="isFieldValid('codi_entrada')" :error-message="getFieldError('codi_entrada')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Codi Piso 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlcodi_piso" v-model.trim="formData.codi_piso"  label="Codi Piso" type="text" placeholder="Escribir Codi Piso"      
                                                    class="" :error="isFieldValid('codi_piso')" :error-message="getFieldError('codi_piso')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Codi Unidad 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlcodi_unidad" v-model.trim="formData.codi_unidad"  label="Codi Unidad" type="text" placeholder="Escribir Codi Unidad"      
                                                    class="" :error="isFieldValid('codi_unidad')" :error-message="getFieldError('codi_unidad')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Tipo Interior 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrltipo_interior" v-model.trim="formData.tipo_interior"  label="Tipo Interior" type="text" placeholder="Escribir Tipo Interior"      
                                                    class="" :error="isFieldValid('tipo_interior')" :error-message="getFieldError('tipo_interior')">
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
                                                    Cuc Antecedente 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlcuc_antecedente" v-model.trim="formData.cuc_antecedente"  label="Cuc Antecedente" type="text" placeholder="Escribir Cuc Antecedente"      
                                                    class="" :error="isFieldValid('cuc_antecedente')" :error-message="getFieldError('cuc_antecedente')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Codi Hoja Catastral 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlcodi_hoja_catastral" v-model.trim="formData.codi_hoja_catastral"  label="Codi Hoja Catastral" type="text" placeholder="Escribir Codi Hoja Catastral"      
                                                    class="" :error="isFieldValid('codi_hoja_catastral')" :error-message="getFieldError('codi_hoja_catastral')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Codi Pred Rentas 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlcodi_pred_rentas" v-model.trim="formData.codi_pred_rentas"  label="Codi Pred Rentas" type="text" placeholder="Escribir Codi Pred Rentas"      
                                                    class="" :error="isFieldValid('codi_pred_rentas')" :error-message="getFieldError('codi_pred_rentas')">
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
                                                    Unid Acum Rentas 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlunid_acum_rentas" v-model.trim="formData.unid_acum_rentas"  label="Unid Acum Rentas" type="text" placeholder="Escribir Unid Acum Rentas"      
                                                    class="" :error="isFieldValid('unid_acum_rentas')" :error-message="getFieldError('unid_acum_rentas')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Codi Cont Rentas 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlcodi_cont_rentas" v-model.trim="formData.codi_cont_rentas"  label="Codi Cont Rentas" type="text" placeholder="Escribir Codi Cont Rentas"      
                                                    class="" :error="isFieldValid('codi_cont_rentas')" :error-message="getFieldError('codi_cont_rentas')">
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
			default: 'tfunicat',
		},
		pageStoreKey: {
			type: String,
			default: 'TFUNICAT',
		},
		routeName: {
			type: String,
			default: 'tfunicatedit',
		},
		pagePath: {
			type : String,
			default : 'tfunicat/edit',
		},
		apiPath: {
			type: String,
			default: 'tfunicat/edit',
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
		id_uni_cat: "", 
		id_lote: "", 
		id_edificacion: "", 
		codi_entrada: "", 
		codi_piso: "", 
		codi_unidad: "", 
		tipo_interior: "", 
		cuc: "", 
		cuc_antecedente: "", 
		codi_hoja_catastral: "", 
		codi_pred_rentas: "", 
		nume_interior: "", 
		unid_acum_rentas: "", 
		codi_cont_rentas: "", 
	}, props.pageData);
	
	const formData = reactive({ ...formDefaultValues });
	
	//event raised after form submit
	function afterSubmit(response) {
		app.flashMsg(props.msgTitle, props.msgAfterSave);
		if(app.isDialogOpen()){
			app.closeDialogs(); // if page is open as dialog, close dialog
		}
		else if(props.redirect){
			app.navigateTo(`/tfunicat`);
		}
	}
	
	//vuelidate form validation rules
	const rules = computed(() => {
		return {
			id_uni_cat: { required }
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
