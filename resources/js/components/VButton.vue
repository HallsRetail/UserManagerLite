<template>
    <button :id="id" :class="'btn btn-' + variant" :type="type">
        <slot />
    </button>
</template>

<script>
export default {
    name: "VButton",
    props: ['id', 'variant', 'type']
}
</script>
