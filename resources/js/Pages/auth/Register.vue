<script setup>
import { ref } from 'vue'
import { useForm } from '@inertiajs/vue3'
import { toast } from 'vue-sonner'
import { Input } from '@/components/ui/input'
import { Label } from '@/components/ui/label'
import { Button } from '@/components/ui/button'
import { Checkbox } from '@/components/ui/checkbox'

const acceptTerms = ref(false)

const form = useForm({
    username: '',
    email: '',
    password: '',
    password_confirmation: '',
})

const submit = () => {
    form.post('/auth/register', {
        onSuccess: () => {
            toast.success('Account created!', {
                description: 'Your account has been successfully created. You can now log in.',
            })
            setTimeout(() => {
                window.location.href = 'login'
            }, 5000)
        },
        onError: (errors) => {
            // Show the first error message
            const firstError = Object.values(errors)[0]
            toast.error('Registration failed', {
                description: firstError || 'Please check your information and try again.',
            })
        },
    })
}
</script>

<template>
    <div class="dark min-h-screen bg-background flex flex-col">
        <div class="flex-1 flex items-center justify-center p-4">
            <div class="w-full max-w-md rounded-xl overflow-hidden border border-border bg-card p-10">
                <div class="mb-8 text-start">
                    <h1 class="text-2xl font-bold text-foreground">Create an account</h1>
                    <p class="text-muted-foreground text-sm mt-1">Sign up to your first platform account</p>
                </div>

                <div class="space-y-5">
                    <div class="space-y-1.5">
                        <Label for="username" class="font-semibold">Username</Label>
                        <Input id="username" v-model="form.username" type="text" placeholder="johndoe" class="bg-background" :disabled="form.processing" />
                        <p v-if="form.errors.username" class="text-sm text-destructive">{{ form.errors.username }}</p>
                    </div>

                    <div class="space-y-1.5">
                        <Label for="email" class="font-semibold">Email address</Label>
                        <Input id="email" v-model="form.email" type="email" placeholder="example@email.com" class="bg-background" :disabled="form.processing" />
                        <p v-if="form.errors.email" class="text-sm text-destructive">{{ form.errors.email }}</p>
                    </div>

                    <div class="space-y-1.5">
                        <Label for="password" class="font-semibold">Password</Label>
                        <Input id="password" v-model="form.password" type="password" placeholder="············" class="bg-background" :disabled="form.processing" />
                        <p v-if="form.errors.password" class="text-sm text-destructive">{{ form.errors.password }}</p>
                    </div>

                    <div class="space-y-1.5">
                        <Label for="confirm-password" class="font-semibold">Confirm password</Label>
                        <Input id="confirm-password" v-model="form.password_confirmation" type="password" placeholder="············" class="bg-background" :disabled="form.processing" />
                    </div>

                    <div class="flex items-center space-x-2">
                        <Checkbox id="terms" v-model="acceptTerms" :disabled="form.processing" />
                        <Label for="terms" class="text-sm text-muted-foreground">
                            I accept the
                            <a href="#" class="text-foreground underline underline-offset-4 hover:text-primary">Terms of Service</a> and
                            <a href="#" class="text-foreground underline underline-offset-4 hover:text-primary">Privacy Policy</a>
                        </Label>
                    </div>

                    <Button class="w-full font-semibold" :disabled="!acceptTerms || form.processing" @click="submit">
                        {{ form.processing ? 'Creating account...' : 'Create account' }}
                    </Button>

                    <p class="text-center text-sm text-muted-foreground"> Already have an account?
                        <a href="login" class="text-foreground underline underline-offset-4 hover:text-primary">Sign in</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>