
<script>
    /**
     *
     * Default component used by all inputs
     *
     * Template must be defined by child
     *
     */
    import { ValidationProvider } from 'vee-validate/dist/vee-validate.full';
    import { extend } from 'vee-validate';

    extend('required', value => !!value);

    export default {
        components: {
            ValidationProvider
        },
        props: {
            disabled: {required: false, type: Boolean, default: false},
            label: {required: false, type: String},
            name: {required: true, type: String},
            defaultValue: {required: false},
            className: {required: false, type: String},
            validation: {required: false, type: String},
            placeholder: {required: false, type: String},
            oldValue: {required: false, type: Boolean, default: true},
        },
        computed: {
            pulse(){
                return this.$parent.pulse;
            },
            defaultVal() {
                if (this.defaultValue != null && this.defaultValue != undefined) {
                    return this.defaultValue;
                }
                if (this.oldValue && this.$root.oldInput && this.$root.oldInput[this.name]) {
                    return this.$root.oldInput[this.name];
                }

                return null;
            }
        },
        mounted(){
            this.value = this.defaultVal
        },
        data() {
            return {
                value: null,
            }
        },
        methods: {
            emitChange() {
                this.$emit('change',this.value);
            },
            emitInput(value) {
                this.$emit('input',this.value);
            }
        },
        watch: {
            defaultValue: function(newVal) {
                // Warning: on change of the default value, the value is also updated (controlled by parent)
                this.value = newVal;
            }
        }
    }
</script>
