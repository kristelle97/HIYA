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
        <el-select v-model="value" placeholder="Select"
                   :class="{'invalid':errors.has(name),'animated pulse':pulse&&errors.has(name)}"
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
