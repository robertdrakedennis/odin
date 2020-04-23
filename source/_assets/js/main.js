try {
  window.Popper = require("popper.js").default;

  // require('./fontawesome');
  // require('./light');
} catch (e) {}

import Vue from "vue";

window.vue = require("vue");

import VueTippy, { TippyComponent } from "vue-tippy";
import "tippy.js/themes/light.css";

Vue.use(VueTippy);

Vue.component("tippy", TippyComponent);

const app = new Vue({
  el: "#app__odin",
});
