<template>
    <ValidationProvider :class="[this.className,'form-group','row']"
                        tag="div" :rules="validation"
                        v-slot="{ errors, valid }" mode="lazy" :name="name">
        <label class="col-md-4 col-form-label text-md-right" v-if="label" :for="name">
            {{label}}
        </label>
        <div class="col-md-6">
            <el-select v-model="value" placeholder="Select"
                       :class="{'invalid':!valid}"
                       @input="emitInput"
                       @change="emitChange"
                       @focus="$emit('focus')"
                       @blur="$emit('blur')"
                       :disabled="disabled"
            >
                <el-option
                        v-for="item in options"
                        :key="item.value"
                        :label="item.label"
                        :value="item.value"
                        :id="item.value">
                    {{item.label}}
                </el-option>
            </el-select>
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
            defaultValue: {required: false},
        },
        computed: {
            defaultVal() {
                if (this.defaultValue != null && this.defaultValue != undefined) {
                    return this.defaultValue ? "1" : "0";
                }
                if (this.oldValue && this.$root.oldInput && this.$root.oldInput[this.name]) {
                    return this.$root.oldInput[this.name] ? "1" : "0";
                }

                return null;
            }
        },
        data() {
            return {
                options: [
                    {
                        label: "Yes",
                        value: "1"
                    },
                    {
                        label: "No",
                        value: "0"
                    }
                ],
            }
        }
    }
</script>
