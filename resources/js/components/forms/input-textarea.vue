<template>
    <ValidationProvider :class="[this.className,'form-group','row']"
                        tag="div" :rules="validation"
                        v-slot="{ errors, valid }" mode="lazy" :name="name">
        <label class="col-md-4 col-form-label text-md-right" v-if="label" :for="name">
            {{label}}
        </label>
        <div :class="{'col-md-6':label,'col':!label}">
            <textarea :type="type"
                   :class="{'form-control':true,'invalid':!valid}"
                   :id="name"
                   :name="name"
                   :placeholder="placeholder"
                   v-model="value"
                   @change="emitChange"
                   @input="emitInput"
                   @focus="$emit('focus')"
                   @blur="$emit('blur')"
                   :disabled="disabled"
            ></textarea>
            <transition name="fade">
                <small v-if="errors.length" :id="name+'Error'" class="form-text text-danger">
                    <span v-for="error in errors">{{ error }}</span>
                </small>
            </transition>
        </div>
    </ValidationProvider>
</template>

<script>
    import CommonInput from './common/input-default.vue';

    export default {
        extends: CommonInput,
        props: {
            type: {required: false, type: String, default: 'text'},
        },
    }
</script>

<style lang="scss">
    textarea { resize: vertical; }
</style>
