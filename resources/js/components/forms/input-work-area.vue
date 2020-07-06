<template>
    <ValidationProvider :class="[this.className,'form-group','row']"
                        tag="div" :rules="validation"
                        v-slot="{ errors, valid }" mode="lazy" :name="name">
        <label class="col-md-4 col-form-label text-md-right" v-if="label" :for="name">
            {{label}}
        </label>
        <input type="hidden"
               :name="name"
               :value="value"
               :ref="name"
        >
        <div :class="{'col-md-6':label,'col-md-12':!label}">
            <el-select v-model="value" filterable
                       :id="name"
                       :placeholder="placeholder"
                       :class="{'invalid':!valid}"
                       @input="emitInput"
                       @change="emitChange"
                       @focus="$emit('focus')"
                       @blur="$emit('blur')"
                       :disabled="disabled"
            >
                <el-option
                    v-if="allowAny"
                    label="All"
                    value="all">
                    All
                </el-option>
                <el-option
                        v-for="area in work_areas"
                        :key="area"
                        :label="area"
                        :value="area">
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
    import work_areas from '../../data/work_areas.json';
    import CommonInput from './common/input-default.vue';

    export default {
        props: {
            allowAny: {type:Boolean,default:false}
        },
        extends: CommonInput,
        data() {
            return {
                work_areas: Object.keys(work_areas)
            }
        }
    }
</script>
