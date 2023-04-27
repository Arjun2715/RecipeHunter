<template>
    <div class="flex flex-row justify-between">
        <div class="font-bold text-transparent lg:text-4xl md:text-xl bg-clip-text bg-gradient-to-r from-lemon to-green">
            {{ title }}
        </div>
    </div>
</template>
<script scope>
export default {
    props: {
        title: String
    }
}
</script>