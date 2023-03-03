import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  server: {
    hmr: {
        host: 'localhost',
    },
},
    plugins: [
        laravel([
          'resources/js/app.js',
          'resources/sass/app.scss',
          'resources/css/app.css',


      ]),
      {
        name: 'blade',
        handleHotUpdate({ file, server }) {
            if (file.endsWith('.blade.php')) {
                server.ws.send({
                    type: 'full-reload',
                    path: '*',
                });
            }
        },
    }
    ],
    resolve: {
      alias: {
          '@': '/resources/sass',
          find: /^~(.*)$/,
          replacement: '$1',
      }
    }

});
