/**
 * Sequential intake → suite pack hero.
 * Stages and connector draws are timed here; motion itself is CSS.
 */
(function () {
  "use strict";

  var root = document.querySelector("[data-aitc-flow]");
  if (!root) return;

  var reduced =
    typeof window.matchMedia === "function" &&
    window.matchMedia("(prefers-reduced-motion: reduce)").matches;
  if (reduced) return;

  var stages = Array.prototype.slice.call(root.querySelectorAll(".aitc-stage"));
  var lines = Array.prototype.slice.call(root.querySelectorAll(".aitc-wires .line"));
  var joints = Array.prototype.slice.call(root.querySelectorAll(".aitc-wires .joint"));
  var timers = [];
  var started = false;

  function clearTimers() {
    timers.forEach(function (id) {
      window.clearTimeout(id);
    });
    timers = [];
  }

  function later(ms, fn) {
    timers.push(window.setTimeout(fn, ms));
  }

  function resetProgress() {
    stages.forEach(function (el) {
      el.classList.remove("is-on", "is-active", "is-done");
    });
    lines.forEach(function (el) {
      el.classList.remove("is-drawn");
    });
    joints.forEach(function (el) {
      el.classList.remove("is-on");
    });
  }

  function reveal(index) {
    stages.forEach(function (el, i) {
      if (i < index) {
        el.classList.add("is-on", "is-done");
        el.classList.remove("is-active");
      } else if (i === index) {
        el.classList.add("is-on", "is-active");
        el.classList.remove("is-done");
      } else {
        el.classList.remove("is-on", "is-active", "is-done");
      }
    });
  }

  function draw(index) {
    if (lines[index]) lines[index].classList.add("is-drawn");
    joints.forEach(function (node) {
      if (node.getAttribute("data-line") === String(index)) {
        node.classList.add("is-on");
      }
    });
  }

  function schedule() {
    later(1520, function () { draw(0); });
    later(2140, function () { reveal(1); });
    later(3660, function () { draw(1); });
    later(4280, function () { reveal(2); });
    later(5920, function () { draw(2); });
    later(6540, function () { reveal(3); });
    later(8280, function () { draw(3); });
    later(8900, function () { reveal(4); });
    later(11400, function () { root.classList.add("is-fading"); });
    later(12220, restart);
  }

  function restart() {
    clearTimers();
    root.classList.add("is-hold");
    root.classList.remove("is-fading");
    resetProgress();
    window.requestAnimationFrame(function () {
      window.requestAnimationFrame(function () {
        root.classList.remove("is-hold");
        reveal(0);
        schedule();
      });
    });
  }

  function play() {
    if (started) return;
    started = true;
    window.requestAnimationFrame(function () {
      window.requestAnimationFrame(function () {
        reveal(0);
        schedule();
      });
    });
  }

  if (typeof window.IntersectionObserver === "undefined") {
    play();
    return;
  }

  var io = new window.IntersectionObserver(
    function (entries) {
      if (entries.some(function (entry) { return entry.isIntersecting; })) {
        play();
        io.disconnect();
      }
    },
    { threshold: 0.28 }
  );
  io.observe(root);
})();
