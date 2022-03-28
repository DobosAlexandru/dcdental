<template>
    <div class="o-media-image" :class="aspect_ratio">
        <picture>
            <source :srcset="img_xl" media="(min-width: 1248px)" >
            <source :srcset="img_lg" media="(min-width: 1024px)" >
            <source :srcset="img_md" media="(min-width: 768px)" >
            <source :srcset="img_sm" media="(min-width: 300px)" >
            <img :src="src" alt="" v-if="src">
        </picture>
    </div>
</template>

<script>
import { intersectingMixin } from '../../mixins/intersecting.js'

export default {
    name: 'ImageResponsive',
    mixins: [intersectingMixin],
    props: {
        img_sm: {
            type: String,
        },
        img_md: {
            type: String,
        },
        img_lg: {
            type: String,
        },
        img_xl: {
            type: String,
        },
        src: {
            type: String,
        },
        aspect_ratio: {
            type: String,
        }
    },
    data() {
        return {

        }
    },
};
</script>

<style>

.o-media-image {
    width: 100%;
    height: 0;
    overflow: hidden;
    position: relative;
    margin: 0;
    background: black;
}

.o-media-image img {
    width: 100%;
    min-height: 100%;
    position: absolute;
    top: 0;
    left: 0;
}

.o-media-image span {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 30px;
    text-align: center;
    line-height: 40px;
    color: white;
}
</style>
