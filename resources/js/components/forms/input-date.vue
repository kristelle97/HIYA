<template>
    <div :class="getClass">
        <label v-if="label" :for="name">
            {{label}}
        </label>
        <input type="hidden"
               :name="name"
               v-validate="validation"
               :value="value"
               :ref="name"
        >
        <el-date-picker
                :class="{'invalid':errors.has(name),'animated pulse':pulse&&errors.has(name)}"
                v-model="value"
                :type="type"
                :format="format"
                :value-format="valueFormat"
                :placeholder="placeholder"
                :id="name"
                :disabled="disabled"
                @change="emitChange"
                @input="emitInput"
                @focus="$emit('focus')"
                @blur="$emit('blur')"
                :picker-options="pickerOptions"
        >
        </el-date-picker>
        <small v-if="errors.has(name)" :id="name+'Error'" class="form-text text-danger">
            {{ errors.first(name) }}
        </small>
    </div>
</template>

<script>
    import CommonInput from './common/input-default.vue';

    export default {
        extends: CommonInput,
        props: {
            type: {required: false, type: String},
            defaultValueFormat: {required: false, type: String},
            format: {required: false, type: String},
            valueFormat: {required: false, type: String},
            pickerOptions: {required:false, type: Object},
        },
        data() {
            return {
                value: null,
            }
        },
        mounted(){
            if (typeof this.defaultVal === 'object') {
                this.value = this.defaultVal?(new this.$moment(this.defaultVal.date)).format(this.defaultValueFormat):null
            } else {
                this.value = this.defaultVal
            }
        },
    }
</script>
