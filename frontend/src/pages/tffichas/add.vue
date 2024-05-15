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
                                                    Tipo Ficha 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrltipo_ficha" v-model.trim="formData.tipo_ficha"  label="Tipo Ficha" type="text" placeholder="Escribir Tipo Ficha"      
                                                    class="" :error="isFieldValid('tipo_ficha')" :error-message="getFieldError('tipo_ficha')">
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
                                                    Dc 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrldc" v-model.trim="formData.dc"  label="Dc" type="text" placeholder="Escribir Dc"      
                                                    class="" :error="isFieldValid('dc')" :error-message="getFieldError('dc')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Nume Ficha Lote 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlnume_ficha_lote" v-model.trim="formData.nume_ficha_lote"  label="Nume Ficha Lote" type="text" placeholder="Escribir Nume Ficha Lote"      
                                                    class="" :error="isFieldValid('nume_ficha_lote')" :error-message="getFieldError('nume_ficha_lote')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Declarante 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrldeclarante" v-model.trim="formData.declarante"  label="Declarante" type="text" placeholder="Escribir Declarante"      
                                                    class="" :error="isFieldValid('declarante')" :error-message="getFieldError('declarante')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Fecha Declarante 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input  ref="ctrlfecha_declarante" v-model="formData.fecha_declarante" label="Fecha Declarante"    :error="isFieldValid('fecha_declarante')" :error-message="getFieldError('fecha_declarante')">
                                                    <template v-slot:append>
                                                        <q-icon name="date_range" class="cursor-pointer">
                                                        <q-popup-proxy ref="ctrlfecha_declarante" transition-show="scale" transition-hide="scale">
                                                        <q-date    mask="YYYY-MM-DD" v-model="formData.fecha_declarante" @input="$refs.ctrlfecha_declarante.hide()" />
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
                                                    Supervisor 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlsupervisor" v-model.trim="formData.supervisor"  label="Supervisor" type="text" placeholder="Escribir Supervisor"      
                                                    class="" :error="isFieldValid('supervisor')" :error-message="getFieldError('supervisor')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Fecha Supervision 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input  ref="ctrlfecha_supervision" v-model="formData.fecha_supervision" label="Fecha Supervision"    :error="isFieldValid('fecha_supervision')" :error-message="getFieldError('fecha_supervision')">
                                                    <template v-slot:append>
                                                        <q-icon name="date_range" class="cursor-pointer">
                                                        <q-popup-proxy ref="ctrlfecha_supervision" transition-show="scale" transition-hide="scale">
                                                        <q-date    mask="YYYY-MM-DD" v-model="formData.fecha_supervision" @input="$refs.ctrlfecha_supervision.hide()" />
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
                                                    Tecnico 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrltecnico" v-model.trim="formData.tecnico"  label="Tecnico" type="text" placeholder="Escribir Tecnico"      
                                                    class="" :error="isFieldValid('tecnico')" :error-message="getFieldError('tecnico')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Fecha Levantamiento 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input  ref="ctrlfecha_levantamiento" v-model="formData.fecha_levantamiento" label="Fecha Levantamiento"    :error="isFieldValid('fecha_levantamiento')" :error-message="getFieldError('fecha_levantamiento')">
                                                    <template v-slot:append>
                                                        <q-icon name="date_range" class="cursor-pointer">
                                                        <q-popup-proxy ref="ctrlfecha_levantamiento" transition-show="scale" transition-hide="scale">
                                                        <q-date    mask="YYYY-MM-DD" v-model="formData.fecha_levantamiento" @input="$refs.ctrlfecha_levantamiento.hide()" />
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
                                                    Verificador 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlverificador" v-model.trim="formData.verificador"  label="Verificador" type="text" placeholder="Escribir Verificador"      
                                                    class="" :error="isFieldValid('verificador')" :error-message="getFieldError('verificador')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Fecha Verificacion 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input  ref="ctrlfecha_verificacion" v-model="formData.fecha_verificacion" label="Fecha Verificacion"    :error="isFieldValid('fecha_verificacion')" :error-message="getFieldError('fecha_verificacion')">
                                                    <template v-slot:append>
                                                        <q-icon name="date_range" class="cursor-pointer">
                                                        <q-popup-proxy ref="ctrlfecha_verificacion" transition-show="scale" transition-hide="scale">
                                                        <q-date    mask="YYYY-MM-DD" v-model="formData.fecha_verificacion" @input="$refs.ctrlfecha_verificacion.hide()" />
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
                                                    Nume Registro 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlnume_registro" v-model.trim="formData.nume_registro"  label="Nume Registro" type="text" placeholder="Escribir Nume Registro"      
                                                    class="" :error="isFieldValid('nume_registro')" :error-message="getFieldError('nume_registro')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Id Uni Cat 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <api-data-source @loaded="response => mapOptionField(response, 'id_uni_cat')"  api-path="components_data/id_uni_cat_option_list"  v-slot="req">
                                                        <nice-select     :loading="req.loading"   ref="ctrlid_uni_cat" v-model="formData.id_uni_cat" :options="req.response" label="Id Uni Cat"  :error="isFieldValid('id_uni_cat')" :error-message="getFieldError('id_uni_cat')">
                                                        </nice-select>  
                                                    </api-data-source>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Id Usuario 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <api-data-source @loaded="response => mapOptionField(response, 'id_usuario')"  api-path="components_data/id_usuario_option_list"  v-slot="req">
                                                        <nice-select     :loading="req.loading"   ref="ctrlid_usuario" v-model="formData.id_usuario" :options="req.response" label="Id Usuario"  :error="isFieldValid('id_usuario')" :error-message="getFieldError('id_usuario')">
                                                        </nice-select>  
                                                    </api-data-source>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Fecha Grabado 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input  ref="ctrlfecha_grabado" v-model="formData.fecha_grabado"    :error="isFieldValid('fecha_grabado')" :error-message="getFieldError('fecha_grabado')">
                                                    <template v-slot:prepend>
                                                        <q-icon name="date_range" class="cursor-pointer">
                                                        <q-popup-proxy transition-show="scale" transition-hide="scale">
                                                        <q-date      mask="YYYY-MM-DD HH:mm" v-model="formData.fecha_grabado" />
                                                        </q-popup-proxy>
                                                        </q-icon>
                                                    </template>
                                                    <template v-slot:append>
                                                        <q-icon name="access_time" class="cursor-pointer">
                                                        <q-popup-proxy transition-show="scale" transition-hide="scale">
                                                        <q-time v-model="formData.fecha_grabado" mask="YYYY-MM-DD HH:mm" />
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
                                                    Activo 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlactivo" v-model.trim="formData.activo"  label="Activo" type="number" placeholder="Escribir Activo"   step="0.1"    
                                                    class="" :error="isFieldValid('activo')" :error-message="getFieldError('activo')">
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
			default : 'tffichas',
		},
		pageStoreKey: {
			type: String,
			default: 'TFFICHAS',
		},
		routeName : {
			type : String,
			default : 'tffichasadd',
		},
		apiPath : {
			type : String,
			default : 'tffichas/add',
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
		tipo_ficha: "", 
		nume_ficha: "", 
		id_lote: "", 
		dc: "", 
		nume_ficha_lote: "", 
		declarante: "", 
		fecha_declarante: new Date(), 
		supervisor: "", 
		fecha_supervision: new Date(), 
		tecnico: "", 
		fecha_levantamiento: new Date(), 
		verificador: "", 
		fecha_verificacion: new Date(), 
		nume_registro: "", 
		id_uni_cat: "", 
		id_usuario: "", 
		fecha_grabado: new Date(), 
		activo: "", 
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
		activo: { numeric }
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
			app.navigateTo(`/tffichas`);
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
