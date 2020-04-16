<template>
    <ValidationObserver tag="div"
                        class="vue-form"
                        ref="observer"
    >
        <form ref="form"
              :method="method=='GET'?'GET':'POST'"
              :action="action"
              @submit.prevent="beforeSubmit">
            <input type="hidden" name="_token" :value="csrf">
            <input type="hidden" name="_method" :value="method" v-if="method!='GET'&&method!='POST'">
            <slot></slot>
        </form>
    </ValidationObserver>
</template>

<script>
    import {ValidationObserver} from 'vee-validate';

    export default {
        components: {
            ValidationObserver
        },
        props: {
            method: {required: false, type: String, default: 'POST'},
            action: {required: false, type: String},
            callback: {required: false, type: Function, default: null},
        },
        data() {
            return {
                csrf: window.csrf,
            }
        },
        mounted() {

        },
        methods: {
            async beforeSubmit() {
                const isValid = await this.$refs.observer.validate();
                if (isValid) {
                    if (this.callback != null) {
                        this.callback();
                    } else {
                        this.$refs.form.submit();
                    }
                }
            }
        },
        computed: {}
    }
</script>
