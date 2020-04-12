<template>
    <div :class="getClass">
        <label v-if="label" :for="name">
            {{label}}
        </label>
        <input type="hidden" :name="name" :value="actualValue" v-validate="validation" :ref="name"
        >
        <textarea
               :class="{'form-control':true,'invalid':errors.has(name),'animated pulse':pulse&&errors.has(name)}"
               :id="name"
               :placeholder="placeholder"
               v-model="value"
               @input="emitInput"
               @change="emitChange"
               @focus="$emit('focus')"
               @blur="$emit('blur')"
               :disabled="disabled"
        ></textarea>
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
            specialCharDisabled: {required:false, default: false, type: Boolean}
        },
        computed: {
            actualValue(){
                if (!this.specialCharDisabled) return this.value;
                return this.value.replace( /\r?\n/gi, '' );
            }
        },
    }
</script>
