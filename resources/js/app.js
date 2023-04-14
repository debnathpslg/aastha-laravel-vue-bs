import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/vue3";
import CommonLayout from "./Layouts/CommonLayout.vue";
import { ZiggyVue } from 'ziggy';

createInertiaApp({
    resolve: async (name) => {
        const pages = import.meta.glob("./Pages/**/*.vue", { eager: true });
        const page = await pages[`./Pages/${name}.vue`];

        page.default.layout = page.default.layout || CommonLayout;

        return page;
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .mount(el);
    },
    progress: {
        delay: 0,
        color: "#D0D",
        includeCSS: true,
        showSpinner: true,
    },
});
