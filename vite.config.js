import { defineConfig } from 'vite';

export default defineConfig({
  server: {
    port: 3000,
    proxy: {
      '^/(?!@vite|src|node_modules|@modules)': {
        target: 'http://designo.local',
        changeOrigin: true,
        secure: false,
      },
    },
  },
  build: {
    outDir: './', 
    emptyOutDir: false,
    assetsDir: '',
    rollupOptions: {
      input: './style.css',
      output: {
        assetFileNames: '[name].[ext]',
      },
    },
  },
});