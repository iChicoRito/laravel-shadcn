import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers'
import { Toaster } from '@/components/ui/sonner'
import 'vue-sonner/style.css'

createInertiaApp({
    resolve: name =>
        resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob('./Pages/**/*.vue')
        ),
    setup({ el, App, props, plugin }) {
        const app = createApp({
            render: () => h('div', [
                h(App, props),
                h(Toaster, {
                    theme: 'dark',
                    position: 'bottom-right',
                    duration: 5000,
                })
            ])
        })
        
        app.use(plugin)
        app.mount(el)
    },
})