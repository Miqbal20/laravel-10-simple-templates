<template>
    <header class="border-b border-gray-400">
        <div class="container max-auto">
            <nav class="p-4 flex items-center justify-between">
                <div class="text-lg"><Link href="/">Home</Link></div>
            </nav>
        </div>
    </header>
    <main class="container mx-auto p4">

        <slot>Default</slot>
    </main>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'

</script>
