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
        <el-select v-model="value"
                   :placeholder="placeholder"
                   :id="name"
                   :class="{'invalid':errors.has(name),'animated pulse':pulse&&errors.has(name)}"
                   @input="emitInput"
                   @change="emitChange"
                   @focus="$emit('focus')"
                   @blur="$emit('blur')"
                   :disabled="disabled"
        >
            <el-option
                    v-for="currency in currencies"
                    :key="currency.cc"
                    :label="currency.symbol +' - '+currency.name"
                    :value="currency.cc"
                    :id="name">
                <span style="float: left">{{ currency.name }}</span>
                <span style="float: right; color: #8492a6; font-size: 13px">{{ currency.symbol }} - {{ currency.cc }}</span>
            </el-option>
        </el-select>
        <small v-if="errors.has(name)" :id="name+'Error'" class="form-text text-danger">
            {{ errors.first(name) }}
        </small>
    </div>
</template>

<script>
    import currencies from '../../data/currencies.json';
    import CommonInput from './common/input-default.vue';

    export default {
        extends: CommonInput,
        data() {
            return {
                currencies: currencies,
            }
        }
    }
</script>
