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
                                                    Codi Actividad *
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrlcodi_actividad" v-model.trim="formData.codi_actividad"  label="Codi Actividad" type="text" placeholder="Escribir Codi Actividad"      
                                                    class="" :error="isFieldValid('codi_actividad')" :error-message="getFieldError('codi_actividad')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Desc Actividad 
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <q-input   ref="ctrldesc_actividad" v-model.trim="formData.desc_actividad"  label="Desc Actividad" type="text" placeholder="Escribir Desc Actividad"      
                                                    class="" :error="isFieldValid('desc_actividad')" :error-message="getFieldError('desc_actividad')">
                                                    </q-input>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--[form-content-end]-->
                                    <div v-if="showSubmitButton" class="text-right q-my-md">
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
			default: 'tfactividades',
		},
		pageStoreKey: {
			type: String,
			default: 'TFACTIVIDADES',
		},
		routeName: {
			type: String,
			default: 'tfactividadesedit',
		},
		pagePath: {
			type : String,
			default : 'tfactividades/edit',
		},
		apiPath: {
			type: String,
			default: 'tfactividades/edit',
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
		codi_actividad: "", 
		desc_actividad: "", 
	}, props.pageData);
	const formData = reactive({ ...formDefaultValues });
	//event raised after form submit
	function afterSubmit(response) {
		app.flashMsg(props.msgTitle, props.msgAfterSave);
		if(app.isDialogOpen()){
			app.closeDialogs(); // if page is open as dialog, close dialog
		}
		else if(props.redirect){
			app.navigateTo(`/tfactividades`);
		}
	}
	//vuelidate form validation rules
	const rules = computed(() => {
		return {
			codi_actividad: { required }
		}
	});
	const page = useEditPage({ store, props, formData, rules, afterSubmit });
	const {  saving, loading, pageReady,   } = toRefs(page.state);
	const {  currentRecord: editRecord } = toRefs(store.state);
	const { load, submitForm, isFieldValid, getFieldError,  } = page.methods;
	useMeta(() => {
		return {
			//set browser title
			title: "Editar"
		}
	});
</script>
<style scoped>
</style>
<style scoped>

</style>
