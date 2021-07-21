import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

import Forum from "../components/forum/forum";
import createPost from "../components/forum/createPost";

const routes = [
  // { path: '/foo', component: Foo }
  {
    path: "/forum",
    component: Forum,
    name: "forum"
  },
  {
    path: "/createPost",
    component: createPost,
    name: "createPost"
  }
];

const router = new VueRouter({
  routes, // short for `routes: routes`
  hashbang: false,
  mode: "history"
});

export default router;
