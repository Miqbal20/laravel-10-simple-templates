<template>
    <header class="border-b border-gray-400">
        <div class="container max-auto">
            <nav class="p-4 flex items-center justify-between">
                <div class="text-xl">
                    <Link href="/">Home</Link>
                </div>
                <div v-if="$page.props.user.name" class="text-xl">
                    <Link :href="route('logout')">Logout</Link>
                </div>
                <div v-else class="text-xl">
                    <Link :href="route('login')">Login</Link>
                </div>
            </nav>
        </div>
    </header>
    <main class="container mx-auto p-4">
        <!-- Flash -->
        <div v-if="$page.props.flash.failed">
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Failed : </strong>
                <span class="block sm:inline">{{ $page.props.flash.failed }}</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <title>Close</title>
                        <path
                            d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                    </svg>
                </span>
            </div>
        </div>
        <div v-if="$page.props.flash.success">
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Success : </strong>
                <span class="block sm:inline">{{ $page.props.flash.success }}</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <title>Close</title>
                        <path
                            d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                    </svg>
                </span>
            </div>
        </div>
        <!-- Flash -->
        <slot>Default</slot>
    </main>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'


</script>
