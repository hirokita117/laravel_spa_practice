import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

import index from "./components/index.vue";

export const router = new VueRouter({
  mode: "history",
  routes: [
    {
      path: "/spa-test",
      name: "index",
      component: index
    },
  ]
});
