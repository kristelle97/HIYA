<template>
    <ValidationObserver tag="form"
                        class="vue-form"
                        ref="form"
                        :method="method=='GET'?'GET':'POST'"
                        :action="action"
                        @submit.prevent="beforeSubmit">
        <input type="hidden" name="_token" :value="csrf">
        <input type="hidden" name="_method" :value="method" v-if="method!='GET'&&method!='POST'">
        <slot :pulse="pulse"></slot>
    </ValidationObserver>
</template>

<script>
    import { ValidationObserver } from 'vee-validate';

    export default {
        components: {
            ValidationObserver
        },
        props: {
            method: {required:false, type:String,default:'POST'},
            action: {required:false, type:String},
            callback: {required:false, type: Function, default:null},
        },
        data() {
            return {
                csrf: window.csrf,
                pulse: false,
            }
        },
        mounted() {

        },
        methods: {
            beforeSubmit() {
                const isValid = this.$refs.form.validate();
                console.log(isValid)
                if (isValid) {
                    if (this.callback!=null) {
                        this.callback();
                    } else {
                        this.$refs.form.submit();
                    }
                    return;
                } else {
                    this.pulse = true;
                    console.log("pulse")
                    setTimeout(() => { this.pulse = false;}, 1000);
                }
            }
        },
        computed: {

        }
    }
</script>
