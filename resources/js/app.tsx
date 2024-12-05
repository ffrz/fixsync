import '../css/app.css'
import './bootstrap'

import { createInertiaApp } from '@inertiajs/react'
import { QueryClient, QueryClientProvider } from '@tanstack/react-query'
import { ReactQueryDevtools } from '@tanstack/react-query-devtools'
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers'
import { createRoot } from 'react-dom/client'

const appName = import.meta.env.VITE_APP_NAME || 'Laravel'

createInertiaApp({
  title: (title) => `${title} - ${appName}`,
  resolve: (name) =>
    resolvePageComponent(
      `./Pages/${name}.tsx`,
      import.meta.glob('./Pages/**/*.tsx')
    ),
  setup({ el, App, props }) {
    const root = createRoot(el)
    const queryClient = new QueryClient();

    root.render(
      <>
        <QueryClientProvider client={queryClient}>
          <App {...props} />
          <ReactQueryDevtools />
        </QueryClientProvider>
      </>
    )
  },
  progress: {
    color: 'magenta'
  }
})
