<template>
    <div class="container">
        <el-alert show-icon
                  :title="message.title"
                  :type="getType(message)"
                  v-for="(message, index) in messages"
                  :class="{'mb-3':(index != messages.length - 1)}"
                  :key="index"
        >
            <span v-html="message.message"></span>
        </el-alert>
    </div>
</template>

<script>
    export default {
        props: {
            messages: {required: false, type: Array},
        },
        computed: {},
        methods: {
            getType(message) {
                switch (message.level) {
                    case "success":
                        return "success";
                    case "warning":
                        return "warning";
                    case "danger":
                        return "error";
                }

                return "success";
            }
        }
    }
</script>
