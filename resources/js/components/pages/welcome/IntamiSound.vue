<template>
    <span class="definition-sound">
        <a href="#" @click.prevent="play"><i class="fas fa-volume-up text-primary"></i></a>
        <audio id="audio-intami" src="/sound/intami.mp3"></audio>
    </span>
</template>

<script>
    export default {
        props: {
        },
        computed: {},
        methods: {
            play() {
                let audio = document.getElementById("audio-intami");
                audio.play();
            }
        }
    }
</script>
