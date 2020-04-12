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
        <vue-editor
                :class="{'invalid':errors.has(name),'animated pulse':pulse&&errors.has(name)}"
                :id="name"
                :placeholder="placeholder"
                :editorToolbar="customToolbar"
                v-model="value"
                @input="emitInput"
                @change="emitChange"
                @focus="$emit('focus')"
                @blur="$emit('blur')"
                :disabled="disabled"
        ></vue-editor>
        <small v-if="errors.has(name)" :id="name+'Error'" class="form-text text-danger">
            {{ errors.first(name) }}
        </small>
    </div>
</template>

<script>
    import {VueEditor} from "vue2-editor";
    import CommonInput from './common/input-default.vue';

    export default {
        extends: CommonInput,
        props: {
            customToolbar: {
                required: false, type: Array, default: function () {
                    return [[{header: [1, 2, false]}], ['bold', 'italic', 'underline'],
                        ['link'],[{'list': 'ordered'}, {'list': 'bullet'}],];
                }
            },
        },
    }
</script>
