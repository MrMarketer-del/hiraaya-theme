import { defineConfig } from 'vite';
import { resolve } from 'path';

export default defineConfig({
  build: {
    rollupOptions: {
      input: {
        main: resolve(__dirname, 'index.html'),
        about: resolve(__dirname, 'about.html'),
        services: resolve(__dirname, 'services.html'),
        sectors: resolve(__dirname, 'sectors.html'),
        perspective: resolve(__dirname, 'perspective.html'),
        work: resolve(__dirname, 'work.html'),
        contact: resolve(__dirname, 'contact.html')
      }
    }
  }
});
