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
        <el-select v-model="value" filterable
                   :id="name"
                   :placeholder="placeholder"
                   :class="{'invalid':errors.has(name),'animated pulse':pulse&&errors.has(name)}"
                   @input="emitInput"
                   @change="emitChange"
                   @focus="$emit('focus')"
                   @blur="$emit('blur')"
                   :disabled="disabled"
        >
            <el-option
                    v-for="country in countries"
                    :key="country.code_iso3"
                    :label="country.name_en"
                    :value="country.code_iso3">
                <span style="float: left">{{ country.name_en }}</span>
                <span style="float: right; color: #8492a6; font-size: 13px">{{ country.code_iso3 }}</span>
            </el-option>
        </el-select>
        <small v-if="errors.has(name)" :id="name+'Error'" class="form-text text-danger">
            {{ errors.first(name) }}
        </small>
    </div>
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
