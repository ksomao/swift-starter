export const site = {
  _loaded: () => {
    document.addEventListener("DOMContentLoaded", () => {})
  },

  _beforeLeaving: () => {
    window.addEventListener("beforeunload", () => {});
  },
}
