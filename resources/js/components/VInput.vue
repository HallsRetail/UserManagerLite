<template>
    <div :id="id + '-input'" class="mb-3">
        <label :for="id" class="form-label">{{ label }}</label>
        <input :type="type" class="form-control" :class="error" :id="id" :name="name" :value="value" :placeholder="placeholder" />
        <slot />
    </div>
</template>

<script>
export default {
    name: "VInput",
    props: ['id', 'type', 'name', 'value', 'error', 'label', 'placeholder']
}
</script>
