<template>
    <div @click="modalOpen"></div>
</template>

<script>
export default {
    props: {
        time: {
            type: String,
            default: null
        }
    },
    methods: {
        modalOpen() {
            this.$emit('open-modal', this.time);
        }
    }
};
</script>
