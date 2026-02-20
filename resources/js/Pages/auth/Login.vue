<script setup>
import { ref } from 'vue'
import { Input } from '@/components/ui/input'
import { Label } from '@/components/ui/label'
import { Button } from '@/components/ui/button'
import { AlertCircleIcon, CheckCircle2Icon, PopcornIcon } from 'lucide-vue-next'
import {
  Alert,
  AlertDescription,
  AlertTitle,
} from '@/components/ui/alert'
const email = ref('')
const password = ref('')
</script>

<template>
  <div class="dark min-h-screen bg-background flex flex-col">
    <div class="flex-1 flex items-center justify-center p-4">
      <div class="w-full max-w-4xl grid grid-cols-1 md:grid-cols-2 gap-0 rounded-xl overflow-hidden border border-border">
        <div class="bg-card p-10 flex flex-col justify-center">

          <Alert class="mb-4">
            <CheckCircle2Icon />
            <AlertTitle>Success! Your changes have been saved</AlertTitle>
            <AlertDescription>
              This is an alert with icon, title and description.
            </AlertDescription>
          </Alert>
          
          <div class="mb-8 text-start">
            <h1 class="text-2xl font-bold text-foreground">Welcome back</h1>
            <p class="text-muted-foreground text-sm mt-1">Login to your Acme Inc account</p>
          </div>

          <div class="space-y-5">
            <div class="space-y-1.5">
              <Label for="email" class="font-semibold">Email</Label>
              <Input id="email" v-model="email" type="email" placeholder="example@email.com" class="bg-background" />
            </div>

            <div class="space-y-1.5">
              <div class="flex items-center justify-between">
                <Label for="password" class="font-semibold">Password</Label>
                <a href="#" class="text-xs text-muted-foreground hover:text-foreground">Forgot password?</a>
              </div>
              <Input id="password" v-model="password" type="password" placeholder="············"
                class="bg-background" />
            </div>

            <Button class="w-full font-semibold">Login</Button>

            <p class="text-center text-sm text-muted-foreground"> Don't have an account?
              <a href="register" class="text-foreground underline underline-offset-4 hover:text-primary">Sign up</a>
            </p>
          </div>
        </div>

        <div class="hidden md:flex bg-muted items-center justify-center">
          <div class="text-muted-foreground flex flex-col items-center gap-2 opacity-30">
            <svg class="w-12 h-12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
              <rect x="3" y="3" width="18" height="18" rx="2" />
              <path d="m3 9 4-4 4 4 4-4 4 4" />
              <circle cx="8.5" cy="13.5" r="1.5" />
            </svg>
          </div>
        </div>

      </div>
    </div>

    <!-- Footer -->
    <div class="py-4 text-center text-xs text-muted-foreground">
      By clicking continue, you agree to our
      <a href="#" class="underline underline-offset-4 hover:text-foreground">Terms of Service</a>
      and
      <a href="#" class="underline underline-offset-4 hover:text-foreground">Privacy Policy</a>.
    </div>

  </div>
</template>