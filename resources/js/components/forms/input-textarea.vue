<template>
    <ValidationProvider :class="[this.className,'form-group','row']"
                        tag="div" :rules="validation"
                        v-slot="{ errors, valid }" mode="lazy" :name="name">
        <label class="col-md-4 col-form-label text-md-right" v-if="label" :for="name">
            {{label}}
        </label>
        <div :class="{'col-md-6':label,'col':!label}">
            <textarea :type="type"
                   :class="{'flex-grow w-full h-12 pt-2 h-20 px-4 mb-3 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none md:mr-2 md:mb-0 focus:border-blue-intami focus:outline-none':true,'invalid':!valid}"
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
