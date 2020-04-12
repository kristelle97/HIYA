<template>
    <div :class="getClass">
        <label v-if="label" :for="name">
            {{label}}
        </label>
        <!-- Load the input only if the file is loaded, otherwise  -->
        <input v-if="srcLoaded && (hasFile || imageRemoved)" type="hidden" :value="value" :name="name" :ref="name"/>
        <div class="row">
            <div class="pl-3">
                <croppa v-model="myCroppa"
                        :zoom-speed="6"
                        :width="width"
                        :height="height"
                        @loading-end="imageRemoved=false;loadImage()"
                        @image-remove="hasFile=false;loadImage()"
                        @draw="loadImage()"
                        v-if="srcLoaded"
                        :initial-image="defaultValue"
                        canvas-color="white"
                        @input="emitInput"
                        @change="emitChange"
                        @focus="$emit('focus')"
                        @blur="$emit('blur')"
                        :disabled="disabled"
                ></croppa>
                <div class="btns" v-if="hasFile">
                    <button class="btn btn-sm btn-tikehau-light" @click.prevent="myCroppa.rotate()"><i
                            class="fas fa-redo"></i></button>
                    <button class="btn btn-sm btn-tikehau-light" @click.prevent="myCroppa.zoomIn()"><i
                            class="fas fa-search-plus"></i></button>
                    <button class="btn btn-sm btn-tikehau-light" @click.prevent="myCroppa.zoomOut()"><i
                            class="fas fa-search-minus"></i></button>
                </div>
            </div>
            <div class="col">
                <P class="text-gray"  v-if="hasFile">
                You can scroll on the picture to zoom, or use the mouse to drag the picture around.
                </P>
            </div>
        </div>

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
            height: {required: false, default: 200},
            width: {required: false, default: 200},
        },
        data() {
            return {
                hasFile: false ,
                imageRemoved: false,
                value: null,
                myCroppa: {},
                // Show image picker only once image was loaded
                srcLoaded: false
            }
        },
        mounted() {
            if (this.defaultValue=='' || this.defaultValue==null) {
                this.srcLoaded = true;
            } else {
                let img = new Image();
                img.onload = e => {
                    this.srcLoaded = true;
                    this.hasFile = true;
                };
                img.src = this.defaultValue;
            }

        },
        methods: {
            loadImage(){
                this.value = this.myCroppa.generateDataUrl('image/jpeg', 0.8);
                if (this.value != null && this.value != "") {
                    this.hasFile=true;
                } else {
                    this.imageRemoved=true;
                }
            }
        },
    }
</script>
