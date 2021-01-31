<template>
    <span class="definition-sound">
        <a class="text-3xl" href="#" @click.prevent="play">
            🔊
        </a>
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
