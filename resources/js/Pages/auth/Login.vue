<script setup>
import { ref } from 'vue'
import { Input } from '@/components/ui/input'
import { Label } from '@/components/ui/label'
import { Button } from '@/components/ui/button'

const email = ref('')
const password = ref('')
</script>

<template>
  <div class="dark min-h-screen bg-background flex flex-col">

    <!-- Main content -->
    <div class="flex-1 flex items-center justify-center p-4">
      <div
        class="w-full max-w-4xl grid grid-cols-1 md:grid-cols-2 gap-0 rounded-xl overflow-hidden border border-border">

        <!-- Left: Form -->
        <div class="bg-card p-10 flex flex-col justify-center">
          <div class="mb-8 text-start">
            <h1 class="text-2xl font-bold text-foreground">Welcome back</h1>
            <p class="text-muted-foreground text-sm mt-1">Login to your Acme Inc account</p>
          </div>

          <div class="space-y-5">
            <!-- Email -->
            <div class="space-y-1.5">
              <Label for="email" class="font-semibold">Email</Label>
              <Input id="email" v-model="email" type="email" placeholder="example@email.com" class="bg-background" />
            </div>

            <!-- Password -->
            <div class="space-y-1.5">
              <div class="flex items-center justify-between">
                <Label for="password" class="font-semibold">Password</Label>

              </div>
              <Input id="password" v-model="password" type="password" placeholder="· · · · · · · · · · · · ·"
                class="bg-background" />
            </div>

            <!-- Login Button -->
            <Button class="w-full font-semibold">Login</Button>

            <!-- Divider -->
            <div class="flex items-center gap-3">
              <div class="flex-1 h-px bg-border"></div>
              <span class="text-xs text-muted-foreground">Or continue with</span>
              <div class="flex-1 h-px bg-border"></div>
            </div>

            <!-- Social Buttons -->
            <div class="grid grid-cols-3 gap-3">
              <!-- Apple -->
              <Button variant="outline" class="w-full">
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                  <path
                    d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.8-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z" />
                </svg>
              </Button>
              <!-- Google -->
              <Button variant="outline" class="w-full">
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                  <path
                    d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"
                    fill="#4285F4" />
                  <path
                    d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"
                    fill="#34A853" />
                  <path
                    d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"
                    fill="#FBBC05" />
                  <path
                    d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"
                    fill="#EA4335" />
                </svg>
              </Button>
              <!-- Meta -->
              <Button variant="outline" class="w-full">
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                  <path
                    d="M12 2C6.477 2 2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.879V14.89h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.989C18.343 21.129 22 16.99 22 12c0-5.523-4.477-10-10-10z" />
                </svg>
              </Button>
            </div>

            <!-- Sign up -->
            <p class="text-center text-sm text-muted-foreground">
              Don't have an account?
              <a href="#" class="text-foreground underline underline-offset-4 hover:text-primary">Sign up</a>
            </p>
          </div>
        </div>

        <!-- Right: Placeholder image panel -->
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