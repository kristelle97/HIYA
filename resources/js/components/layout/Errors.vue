<template>
    <el-alert show-icon
            title="Errors"
            type="error"
    >
        <p v-html="content"></p>
    </el-alert>
</template>

<script>
    export default {
        props: {
            errors: {required: false, type: Array},
        },
        computed: {
            content() {
                var errorsMessage = '<ul style="margin-bottom: 0px!important;">';
                for (var i = 0; i < this.errors.length; i++) {
                    errorsMessage += '<li>' + this.errors[i] + '</li>'
                }
                errorsMessage += '</ul>';

                return errorsMessage;
            }
        }
    }
</script>
