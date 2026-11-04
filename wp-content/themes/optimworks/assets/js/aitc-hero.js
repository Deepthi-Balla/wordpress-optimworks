/**
 * AI case hero — cycle Intake → Draft → Review → Approve → Suite Pack.
 * Port of AiCaseWorkflow.tsx (visibility-aware interval).
 */
(function () {
  "use strict";

  var root = document.querySelector("[data-acx-flow]");
  if (!root) return;

  var stages = ["Intake", "Draft", "Review", "Approve", "Suite Pack"];
  var pills = Array.prototype.slice.call(root.querySelectorAll("[data-acx-stage]"));
  var wires = Array.prototype.slice.call(root.querySelectorAll("[data-acx-wire]"));
  var stepEl = root.querySelector("[data-acx-step]");
  var outEl = root.querySelector("[data-acx-out]");
  var active = 0;
  var visible = true;
  var timer = null;

  function setActive(next) {
    active = next;
    pills.forEach(function (el, i) {
      el.classList.toggle("on", i === active);
      el.classList.toggle("done", i < active);
    });
    wires.forEach(function (el, i) {
      el.classList.toggle("on", i === active);
    });
    if (stepEl) {
      // Remount text so CSS enter animation can replay.
      var label = stages[active] || "";
      var fresh = document.createElement("span");
      fresh.className = "acx-core-step";
      fresh.setAttribute("data-acx-step", "");
      fresh.textContent = label;
      stepEl.parentNode.replaceChild(fresh, stepEl);
      stepEl = fresh;
    }
    if (outEl) {
      outEl.classList.toggle("on", active === 4);
    }
  }

  function tick() {
    if (!visible || document.hidden) return;
    setActive((active + 1) % stages.length);
  }

  function start() {
    if (timer !== null) return;
    timer = window.setInterval(tick, 1800);
  }

  function stop() {
    if (timer === null) return;
    window.clearInterval(timer);
    timer = null;
  }

  setActive(0);

  if (
    typeof window.matchMedia === "function" &&
    window.matchMedia("(prefers-reduced-motion: reduce)").matches
  ) {
    return;
  }

  if (typeof window.IntersectionObserver !== "undefined") {
    var io = new window.IntersectionObserver(
      function (entries) {
        visible = !!(entries[0] && entries[0].isIntersecting);
      },
      { threshold: 0.1 }
    );
    io.observe(root);
  }

  document.addEventListener("visibilitychange", function () {
    if (document.hidden) stop();
    else start();
  });

  start();
})();
