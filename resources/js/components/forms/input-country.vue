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
        <div class="col-md-6">
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
                        v-for="country in countries"
                        :key="country.name_en"
                        :label="country.name_en"
                        :value="country.name_en">
                    <span style="float: left">{{ country.name_en }}</span>
                    <span style="float: right; color: #8492a6; font-size: 13px">{{ country.code_iso3 }}</span>
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
    import countries from '../../data/countries.json';
    import CommonInput from './common/input-default.vue';

    export default {
        extends: CommonInput,
        data() {
            return {
                countries: countries
            }
        }
    }
</script>
