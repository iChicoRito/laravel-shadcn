﻿<script setup>
import { ref } from 'vue'
import { Input } from '@/components/ui/input'
import { Label } from '@/components/ui/label'
import { Button } from '@/components/ui/button'
import { AlertCircleIcon, CheckCircle2Icon, PopcornIcon } from 'lucide-vue-next'
import { Alert, AlertDescription, AlertTitle, } from '@/components/ui/alert'
const email = ref('')
const password = ref('')
</script>

<template>
  <div class="dark min-h-screen bg-background flex flex-col">
    <div class="flex-1 flex items-center justify-center p-4">
      <div class="w-full max-w-md rounded-xl overflow-hidden border border-border bg-card p-10">

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
    </div>
  </div>
</template>