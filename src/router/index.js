import { createRouter, createWebHistory } from "vue-router";
import HomeView from "../views/HomeView.vue";
import AboutView from "../views/AboutView.vue";
import IllustrationenView from "../views/IllustrationenView.vue";
import CharacterDesignView from "../views/CharacterDesignView.vue";

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: "/",
      name: "home",
      component: HomeView,
    },
    {
      path: "/about",
      name: "about",
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: AboutView,
    },
    {
      path: "/illustrationen",
      name: "illustrationen",
      component: IllustrationenView,
    },
    {
      path: "/characterdesign",
      name: "characterdesign",
      component: CharacterDesignView,
    },
  ],
});

export default router;
