<template>
    <div :class="getClass">
        <label v-if="label" :for="name">
            {{label}}
        </label>
        <input type="hidden"
               :name="name"
               v-validate="validation"
               :value="selected"
               v-if="name"
        >

        <el-select v-model="selected" placeholder="Select"
                   :class="{'invalid':errors.has(name),'animated pulse':pulse&&errors.has(name)}"
                   :remote-method="remoteMethod"
                   :loading="loading"
                   :placeholder="placeholder"
                   filterable
                   remote
                   @change="emitChange"
                   @input="emitInput"
                   @focus="$emit('focus')"
                   @blur="$emit('blur')"
                   :disabled="disabled"

        >
            <el-option
                    v-for="item in items"
                    :key="item.id"
                    :label="item.full_name"
                    :value="item.id"
                    class="input-item-option"
                    v-if="items.length > 0"
            >
                {{item.full_name}}
            </el-option>
        </el-select>

        <small v-if="errors.has(name)" :id="name+'Error'" class="form-text text-danger">
            {{ errors.first(name) }}
        </small>
    </div>
</template>

<script>
    export default {
        inject: ['$validator'],
        props: {
            label: {required: false, type: String},
            name: {required: false, type: String},
            model: {required: true, type: String},
            defaultValue: {required: false},
            className: {required: false, type: String},
            validation: {required: false, type: String},
            placeholder: {required: false, type: String},
            oldValue: {required: false, type: Boolean, default: true},
            disabled: {required: false, type: Boolean, default: false},
        },
        computed: {
            getClass() {
                return this.className ? ('form-group input-item ' + this.className) : 'form-group input-item';
            },
            pulse() {
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
        data() {
            return {
                loading: false,
                items: [],
                selected: null,
            }
        },
        methods: {
            remoteMethod(query) {
                if (query == null || query == "") return;
                this.$http.post(this.route('api.search.namesearch'), {
                    value: query,
                    mode: 'auto',
                    limit: 20,
                    model: this.model
                })
                    .then((response)=>{
                        // Pass results to autocomplete
                        this.items = response.data;
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            },
            emitChange(value) {
                this.$emit('change',value);
            },
            emitInput(value) {
                this.$emit('input',value);
            }
        },
        mounted() {
            let defaultId = this.defaultVal;

            if (defaultId != null) {

                this.loading = true;

                this.$http.post(this.route('api.search.namesearch-default'),{
                    value: defaultId,
                    model: this.model
                })
                .then(response => {
                    this.items = [response.data];
                    this.loading = false;
                    this.selected = defaultId;
                })
            }

        }
    }
</script>
