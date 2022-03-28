<template>
    <div
        class="relative w-full z-30"
        :class="aspect_ratio"
        >
        <div class="hidden video-cover absolute inset-0 w-full h-full bg-center bg-cover transition-opacity transition-200 z-10 opacity-100" :class="{ 'video-playing': videoPlay }" v-bind:style="styles">
            <div class="video-overlay absolute inset-0 flex items-center justify-center w-full h-full" :class="{ 'video-playing': videoPlay }" tabindex="0">
                <button class="video-play-button" tabindex="0" aria-label="play" id="videoPlayButton" @click="togglePlay">
                    <svg class="icon-play fill-current" aria-hidden="true" focusable="false" role="presentation" xmlns="http://www.w3.org/2000/svg" width="77" height="77" viewBox="0 0 77 77"><path fill="currentColor" fill-rule="nonzero" d="M38.5 76.5c-20.987 0-38-17.013-38-38s17.013-38 38-38 38 17.013 38 38-17.013 38-38 38zm0-3c19.33 0 35-15.67 35-35s-15.67-35-35-35-35 15.67-35 35 15.67 35 35 35zm-7.68-20.588c-1.007.572-1.82.22-1.82-.792V24.88c0-1.01.811-1.366 1.82-.792l23.426 13.374c1.003.572 1.008 1.5 0 2.075L30.819 52.912z"></path>
                    </svg>
                </button>
            </div>
        </div>
        <video
            v-if="isIntersecting && src"
            class="vide absolute inset-0 flex items-center justify-center outline-none focus:outline-none w-full h-full "
            id="video"
            preload="metadata"
            playsinline muted autoplay loop>
            <source :src="src" type="video/mp4">
        </video>
    </div>
</template>

<script>
import { intersectingMixin } from '../../mixins/intersecting.js'

export default {
    name: 'VideoComponent',
    mixins: [intersectingMixin],
    props: {
        src: {
            type: String,
            required: true
        },
       background: {
            type: String,
        },
        aspect_ratio: {
            type: String,
            required: true
        }
    },
    data: () => ({
        videoPlay: false,
    }),
    methods : {
        togglePlay() {
            this.$el.querySelector('video').play();
            this.videoPlay = true;
        }
    },
    computed: {
        styles: function() {
            let backgroundImage = `url('${this.$props.background}')`;

            return {
                'background-image' : backgroundImage
            }
        }
    }
};
</script>

<style scoped>

    .video-cover .video-playing {
        opacity: 0;
        z-index:0;
    }

    .video-overlay {
        background-color: rgba(0,0,0,0.4);
    }

    .video-overlay .videoplaying{
        z-index:0;
    }

    .video-play-button {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 3.8125rem;
        height: 3.8125rem;
        transform: scale(1);
        transition: transform 0.12s cubic-bezier(0.3, 0, 0, 1);
        padding: 0;
        margin:0;
        color:white;
        outline: 2px solid transparent;
        outline-offset: 2px;
        background-color: transparent;
        cursor: pointer;
    }

    .video-play-button:focus{
        outline:none;
    }

    .video-play-button:hover{
        color: #EE2C82;
        transform: scale(1.1);
    }
</style>
