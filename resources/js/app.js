import "./bootstrap";
import "../css/app.css";
// import 'flowbite';
import 'daisyui'
import { createInertiaApp, Head, Link } from '@inertiajs/inertia-vue3';
import { createApp, h } from "vue";
import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";

// import AuthNav from '@/Layouts/components/AuthNav.vue';
createInertiaApp({
  title: (title) => `${title} - ${appName}`,
  resolve: (name) =>
    resolvePageComponent(
      `./Pages/${name}.vue`,
      import.meta.glob("./Pages/**/*.vue")
    ),
  setup({ el, app, props, plugin }) {
    return createApp({ render: () => h(app, props) })
      .use(plugin)
      .component("Link", Link)
      .component("Head", Head)
      .mount(el);
  },
});
