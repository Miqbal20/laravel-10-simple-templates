<template>
    <div class="w-full mx-auto max-w-xs mt-5 border border-gray-200 shadow-md">
        <form class="bg-white rounded px-8 pt-6 pb-8 mb-4" @submit.prevent="register">            
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Email 
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="email" type="text" placeholder="Email" v-model="form.email">
                <p v-if="form.errors.email" class="text-red-500 text-xs italic">{{ form.errors.email }}</p>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Full Name 
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="name" type="text" placeholder="Full Name" v-model="form.name">
                <p v-if="form.errors.name" class="text-red-500 text-xs italic">{{ form.errors.name }}</p>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Password
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="password" type="password" placeholder="Password" v-model="form.password">
                <p v-if="form.errors.password" class="text-red-500 text-xs italic">{{ form.errors.password }}</p>
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Confirm Password
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="password_confirmation" type="password" placeholder="Confirm Password" v-model="form.password_confirmation">
                <p v-if="form.errors.password_confirmation" class="text-red-500 text-xs italic">{{ form.errors.password_confirmation }}</p>
            </div>
            <div class="flex items-center justify-between">
                <button
                    class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Register
                </button>
            </div>
            <div class="flex items-center justify-between mt-5">
                <Link class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" :href="route('login')">
                    Already have account ? Login here
                </Link>
            </div>
        </form>
    </div>
</template>

<script setup>
import { useForm, Link } from '@inertiajs/vue3'

const form = useForm(
    {
        email: null,
        name: null,
        password: null,
        password_confirmation : null,
    }
)

const register = () => form.post(route('register.store'))
</script>
