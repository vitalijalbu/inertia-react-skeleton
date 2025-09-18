import { createInertiaApp } from "@inertiajs/react";
import * as React from "react";
import { createRoot } from "react-dom/client";
import "../scss/index.scss";
import AppLayout from "./layouts/app-layout.jsx";
import { ConfigProvider } from "antd";
import theme from "../scss/theme.json";
import dayjs from "dayjs";
import 'dayjs/locale/en';
import en_GB from 'antd/locale/en_GB';

const appName = import.meta.env.VITE_APP_NAME;


createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: name => {
        const pages = import.meta.glob('./pages/**/*.jsx', { eager: true })
        let page = pages[`./pages/${name}.jsx`]
        //console.log({page})
        page.default.layout = page?.default?.layout || (page => <AppLayout children={page} />)
        return page
    },
    setup({ el, App, props }) {
        const root = createRoot(el);
        root.render(
            <ConfigProvider theme={theme} locale={en_GB}>
                <App {...props} />
            </ConfigProvider>
        );
    },
    progress: {
        color: "#0045c2",
    },
});
