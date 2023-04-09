<template>
    <div class="w-full mx-auto max-w-xs mt-5 border border-gray-200 shadow-md">
        <form class="bg-white rounded px-8 pt-6 pb-8 mb-4" @submit.prevent="login">
            <input type="hidden" name="_token" :value="$page.props.csrf">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Email 
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="email" type="text" placeholder="Email" v-model="form.email">
                <p v-if="form.errors.email" class="text-red-500 text-xs italic">{{ form.errors.email }}</p>
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Password
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="password" type="password" placeholder="********" v-model="form.password">
                <p v-if="form.errors.password" class="text-red-500 text-xs italic">{{ form.errors.password }}</p>
            </div>
            <div class="flex items-center justify-between">
                <button
                    class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Login
                </button>
            </div>
            <div class="flex items-center justify-between mt-5">
                <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
                    Register
                </a>
                <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
                    Forgot Password?
                </a>
            </div>
        </form>
    </div>
</template>

<script setup>
import { useForm, Link } from '@inertiajs/vue3'

const form = useForm(
    {
        email: null,
        password: null
    }
)

const login = () => form.post(route('login.store'))
</script>
