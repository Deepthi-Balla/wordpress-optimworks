/**
 * OptimWorks front-end interactions (ported from React hooks / Craft / Header).
 */
(function () {
  "use strict";

  var REDUCED =
    typeof window !== "undefined" &&
    window.matchMedia("(prefers-reduced-motion: reduce)").matches;

  function isDesktop() {
    return window.matchMedia("(min-width: 1140px)").matches;
  }

  /* ── Scroll progress + sticky header ── */
  function initScrollChrome() {
    var bar = document.getElementById("bar");
    var sprog = document.querySelector(".sprog span");
    var hdr = document.getElementById("hdr");

    function onScroll() {
      var d = document.documentElement;
      var max = Math.max(1, d.scrollHeight - d.clientHeight);
      var p = d.scrollTop / max;
      var pct = p * 100;
      if (bar) bar.style.width = pct + "%";
      if (sprog) sprog.style.transform = "scaleX(" + p + ")";
      if (hdr) hdr.classList.toggle("on", window.scrollY > 60);
    }

    onScroll();
    window.addEventListener("scroll", onScroll, { passive: true });
    window.addEventListener("resize", onScroll);
  }

  /* ── Reveal / stagger ── */
  function initReveal() {
    var nodes = Array.prototype.slice.call(
      document.querySelectorAll(".reveal, .stag")
    );
    if (!nodes.length) return;
    if (REDUCED || typeof IntersectionObserver === "undefined") {
      nodes.forEach(function (el) {
        el.classList.add("in");
      });
      return;
    }
    var io = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (e) {
          if (e.isIntersecting) {
            e.target.classList.add("in");
            io.unobserve(e.target);
          }
        });
      },
      { threshold: 0.12 }
    );
    nodes.forEach(function (el) {
      io.observe(el);
    });
  }

  /* ── Mega menu + burger ── */
  function initNav() {
    var siteNav = document.getElementById("site-nav");
    var burger = document.querySelector(".burger");
    var burgerIcon = burger && burger.querySelector("[data-burger-icon] use");
    var navItems = Array.prototype.slice.call(
      document.querySelectorAll(".navitem[data-nav-key]")
    );
    var hideTimer;

    function setNavOpen(open) {
      if (!siteNav || !burger) return;
      siteNav.classList.toggle("open", open);
      burger.setAttribute("aria-expanded", open ? "true" : "false");
      burger.setAttribute("aria-label", open ? "Close menu" : "Open menu");
      if (burgerIcon) {
        burgerIcon.setAttribute("href", open ? "#i-x" : "#i-menu");
        burgerIcon.setAttribute("xlink:href", open ? "#i-x" : "#i-menu");
      }
      document.body.style.overflow =
        open && !isDesktop() ? "hidden" : "";
    }

    function closeAllItems() {
      navItems.forEach(function (item) {
        item.classList.remove("open");
        var link = item.querySelector(".toplink");
        if (link) link.setAttribute("aria-expanded", "false");
      });
    }

    function openItem(item) {
      closeAllItems();
      if (!item) return;
      item.classList.add("open");
      var link = item.querySelector(".toplink");
      if (link) link.setAttribute("aria-expanded", "true");
    }

    if (burger) {
      burger.addEventListener("click", function () {
        setNavOpen(!(siteNav && siteNav.classList.contains("open")));
      });
    }

    navItems.forEach(function (item) {
      item.addEventListener("mouseenter", function () {
        if (!isDesktop()) return;
        window.clearTimeout(hideTimer);
        openItem(item);
      });
      item.addEventListener("mouseleave", function () {
        if (!isDesktop()) return;
        hideTimer = window.setTimeout(function () {
          closeAllItems();
        }, 220);
      });

      var toplink = item.querySelector(".toplink");
      if (toplink) {
        toplink.addEventListener("click", function (e) {
          if (isDesktop()) return;
          e.preventDefault();
          if (item.classList.contains("open")) {
            item.classList.remove("open");
            toplink.setAttribute("aria-expanded", "false");
          } else {
            openItem(item);
          }
        });
      }
    });

    // Service mega tabs
    var tabs = Array.prototype.slice.call(document.querySelectorAll(".mtab"));
    var panes = Array.prototype.slice.call(document.querySelectorAll(".mpane"));

    function activateTab(key) {
      tabs.forEach(function (tab) {
        var on = tab.getAttribute("data-mtab") === key;
        tab.classList.toggle("on", on);
        tab.setAttribute("aria-selected", on ? "true" : "false");
      });
      panes.forEach(function (pane) {
        pane.classList.toggle("on", pane.getAttribute("data-mpane") === key);
      });
    }

    tabs.forEach(function (tab) {
      var key = tab.getAttribute("data-mtab");
      tab.addEventListener("mouseenter", function () {
        activateTab(key);
      });
      tab.addEventListener("focus", function () {
        activateTab(key);
      });
      tab.addEventListener("click", function () {
        activateTab(key);
      });
    });

    window.addEventListener("keydown", function (e) {
      if (e.key !== "Escape") return;
      closeAllItems();
      setNavOpen(false);
    });

    window.addEventListener("resize", function () {
      if (isDesktop()) {
        document.body.style.overflow = "";
        if (siteNav) siteNav.classList.remove("open");
        if (burger) {
          burger.setAttribute("aria-expanded", "false");
          burger.setAttribute("aria-label", "Open menu");
        }
        if (burgerIcon) {
          burgerIcon.setAttribute("href", "#i-menu");
          burgerIcon.setAttribute("xlink:href", "#i-menu");
        }
      }
    });
  }

  /* ── Hero wires (useWires) ── */
  function initHeroWires() {
    var stage = document.querySelector("[data-hero-stage]");
    var svg = document.querySelector("[data-hero-svg]");
    var core = document.querySelector("[data-hero-core]");
    var shield = document.querySelector("[data-hero-shield]");
    var wrap = document.querySelector("[data-hero-inputs]");
    if (!stage || !svg || !core || !shield || !wrap) return;

    var NS = "http://www.w3.org/2000/svg";

    function draw() {
      if (getComputedStyle(svg).display === "none") return;
      var cards = Array.prototype.slice.call(wrap.querySelectorAll(".icard"));
      var s = stage.getBoundingClientRect();
      var c = core.getBoundingClientRect();
      var sh = shield.getBoundingClientRect();
      if (!s.width) return;

      svg.setAttribute("width", String(s.width));
      svg.setAttribute("height", String(s.height));
      while (svg.firstChild) svg.removeChild(svg.firstChild);

      var cl = c.left - s.left;
      var cr = cl + c.width;
      var cy = c.top - s.top + c.height / 2;

      cards.forEach(function (card, i) {
        var r = card.getBoundingClientRect();
        var col = card.getAttribute("data-c") || "#FF5A1F";
        var x = r.right - s.left;
        var y = r.top - s.top + r.height / 2;
        var mx = x + (cl - x) * 0.55;
        var d =
          "M " + x + " " + y + " C " + mx + " " + y + ", " + mx + " " + cy + ", " + cl + " " + cy;

        var base = document.createElementNS(NS, "path");
        base.setAttribute("d", d);
        base.setAttribute("fill", "none");
        base.setAttribute("stroke", col);
        base.setAttribute("stroke-width", "1");
        base.setAttribute("opacity", "0.3");
        svg.appendChild(base);

        var flow = document.createElementNS(NS, "path");
        flow.setAttribute("class", "flow");
        flow.setAttribute("d", d);
        flow.setAttribute("fill", "none");
        flow.setAttribute("stroke", col);
        flow.setAttribute("stroke-width", "1.4");
        flow.setAttribute("opacity", "0.9");
        svg.appendChild(flow);

        var dot = document.createElementNS(NS, "circle");
        dot.setAttribute("r", "3.3");
        dot.setAttribute("fill", col);
        dot.setAttribute("style", "filter:drop-shadow(0 0 5px " + col + ")");
        var motion = document.createElementNS(NS, "animateMotion");
        motion.setAttribute("dur", "3s");
        motion.setAttribute("begin", i * 0.42 + "s");
        motion.setAttribute("repeatCount", "indefinite");
        motion.setAttribute("path", d);
        dot.appendChild(motion);
        svg.appendChild(dot);
      });

      var out = document.createElementNS(NS, "path");
      out.setAttribute("class", "trunk");
      out.setAttribute(
        "d",
        "M " + cr + " " + cy + " L " + (sh.left - s.left) + " " + cy
      );
      svg.appendChild(out);
    }

    draw();
    if (typeof ResizeObserver !== "undefined") {
      var ro = new ResizeObserver(draw);
      ro.observe(stage);
    }
    window.addEventListener("resize", draw);
    window.setTimeout(draw, 280);
  }

  /* ── Metric count-up ── */
  function initCountUp() {
    var nums = Array.prototype.slice.call(
      document.querySelectorAll(".metric-num[data-count]")
    );
    if (!nums.length) return;

    function animate(el) {
      var target = parseInt(el.getAttribute("data-count"), 10) || 0;
      var valEl = el.closest(".val");
      if (REDUCED) {
        el.textContent = String(target);
        return;
      }
      var start = null;
      function step(ts) {
        if (start === null) start = ts;
        var p = Math.min((ts - start) / 1500, 1);
        var eased = 1 - Math.pow(1 - p, 3);
        el.textContent = String(Math.round(eased * target));
        if (p < 1) {
          requestAnimationFrame(step);
        } else if (valEl) {
          valEl.classList.add("pop");
          window.setTimeout(function () {
            valEl.classList.remove("pop");
          }, 320);
        }
      }
      requestAnimationFrame(step);
    }

    if (typeof IntersectionObserver === "undefined") {
      nums.forEach(animate);
      return;
    }

    var io = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (e) {
          if (!e.isIntersecting) return;
          io.unobserve(e.target);
          var num = e.target.querySelector
            ? e.target.querySelector(".metric-num[data-count]")
            : null;
          // Observe .metric parent when possible
          if (e.target.classList.contains("metric-num")) {
            animate(e.target);
          } else if (num) {
            animate(num);
          }
        });
      },
      { threshold: 0.5 }
    );

    nums.forEach(function (el) {
      var metric = el.closest(".metric") || el;
      io.observe(metric);
    });
  }

  /* ── Quality loop launch cycle ── */
  function initQualityLoop() {
    var stage = document.querySelector("[data-launch-cycle]");
    if (!stage) return;

    var duration = parseInt(stage.getAttribute("data-duration"), 10) || 13000;
    var hold = parseInt(stage.getAttribute("data-hold"), 10) || 1600;
    var fill = stage.querySelector(".qj-fill");
    var rocket = stage.querySelector(".qj-rocket");
    var phases = Array.prototype.slice.call(stage.querySelectorAll(".qj-phase"));
    var phaseCount = phases.length || 6;

    if (REDUCED) {
      if (fill) fill.style.transform = "scaleX(1)";
      if (rocket) {
        rocket.style.left = "100%";
        rocket.setAttribute("data-lit", "1");
      }
      phases.forEach(function (li) {
        li.classList.add("done");
      });
      return;
    }

    var raf = 0;
    var t0 = 0;
    var running = false;

    function apply(p) {
      if (fill) {
        fill.style.transform = "scaleX(" + p + ")";
        fill.setAttribute("data-progress", String(p));
      }
      if (rocket) {
        rocket.style.left = p * 100 + "%";
        rocket.setAttribute("data-lit", p > 0.02 ? "1" : "0");
      }
      var reached = Math.min(phaseCount, Math.floor(p * phaseCount + 0.35));
      phases.forEach(function (li, i) {
        li.classList.toggle("done", i < reached);
        li.classList.toggle("qj-now", i === reached - 1);
      });
    }

    function frame(ts) {
      if (!t0) t0 = ts;
      var elapsed = ts - t0;
      var cycle = duration + hold;
      var inCycle = elapsed % cycle;
      var p = inCycle > duration ? 1 : inCycle / duration;
      apply(p);
      raf = requestAnimationFrame(frame);
    }

    if (typeof IntersectionObserver === "undefined") {
      running = true;
      raf = requestAnimationFrame(frame);
      return;
    }

    var io = new IntersectionObserver(
      function (entries) {
        var vis = entries.some(function (e) {
          return e.isIntersecting;
        });
        if (vis && !running) {
          running = true;
          t0 = 0;
          raf = requestAnimationFrame(frame);
        } else if (!vis && running) {
          running = false;
          cancelAnimationFrame(raf);
          raf = 0;
          t0 = 0;
        }
      },
      { threshold: 0.16 }
    );
    io.observe(stage);
  }

  /* ── Quote carousel ── */
  function initQuotes() {
    var wrap = document.querySelector("[data-quotes]");
    if (!wrap) return;
    var quotes = Array.prototype.slice.call(wrap.querySelectorAll(".quote"));
    var dots = Array.prototype.slice.call(wrap.querySelectorAll(".qdot"));
    if (!quotes.length) return;

    var cur = 0;
    var paused = false;

    function show(i) {
      cur = ((i % quotes.length) + quotes.length) % quotes.length;
      quotes.forEach(function (q, idx) {
        q.classList.toggle("on", idx === cur);
      });
      dots.forEach(function (d, idx) {
        d.classList.toggle("on", idx === cur);
      });
    }

    dots.forEach(function (dot, i) {
      dot.addEventListener("click", function () {
        show(i);
      });
      dot.addEventListener("keydown", function (e) {
        if (e.key === "Enter" || e.key === " ") {
          e.preventDefault();
          show(i);
        }
      });
    });

    wrap.addEventListener("mouseenter", function () {
      paused = true;
    });
    wrap.addEventListener("mouseleave", function () {
      paused = false;
    });

    window.setInterval(function () {
      if (!paused) show(cur + 1);
    }, 6500);
  }

  /* ── Spotlight on cards ── */
  function initSpotlight() {
    if (REDUCED) return;
    var SEL =
      ".scard,.acard,.wcard,.pstep,.proof-card,.metric,.ctapath";
    window.addEventListener(
      "pointermove",
      function (e) {
        var t = e.target && e.target.closest ? e.target.closest(SEL) : null;
        if (!t) return;
        var r = t.getBoundingClientRect();
        t.style.setProperty("--mx", e.clientX - r.left + "px");
        t.style.setProperty("--my", e.clientY - r.top + "px");
      },
      { passive: true }
    );
  }

  /* ── Section rail active state ── */
  function initSectionRail() {
    var rail = document.querySelector(".srail");
    if (!rail) return;
    var links = Array.prototype.slice.call(rail.querySelectorAll("a[href^='#']"));
    if (!links.length) return;

    var ids = links
      .map(function (a) {
        return a.getAttribute("href").slice(1);
      })
      .filter(Boolean);

    var els = ids
      .map(function (id) {
        return document.getElementById(id);
      })
      .filter(Boolean);

    if (!els.length || typeof IntersectionObserver === "undefined") return;

    var io = new IntersectionObserver(
      function (entries) {
        var vis = entries
          .filter(function (e) {
            return e.isIntersecting;
          })
          .sort(function (a, b) {
            return b.intersectionRatio - a.intersectionRatio;
          })[0];
        if (!vis) return;
        var id = vis.target.id;
        links.forEach(function (a) {
          a.classList.toggle("on", a.getAttribute("href") === "#" + id);
        });
      },
      { rootMargin: "-40% 0px -50% 0px", threshold: [0, 0.2, 0.6] }
    );

    els.forEach(function (el) {
      io.observe(el);
    });
  }

  /* ── Word reveal (statement) ── */
  function initWordReveal() {
    var nodes = Array.prototype.slice.call(document.querySelectorAll(".wrev"));
    if (!nodes.length) return;
    if (REDUCED || typeof IntersectionObserver === "undefined") {
      nodes.forEach(function (el) {
        el.classList.add("on");
      });
      return;
    }
    var io = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (e) {
          if (e.isIntersecting) {
            e.target.classList.add("on");
            io.unobserve(e.target);
          }
        });
      },
      { threshold: 0.35 }
    );
    nodes.forEach(function (el) {
      // Restart reveal when JS loads if already marked on for no-JS
      el.classList.remove("on");
      io.observe(el);
    });
  }

  function ready(fn) {
    if (document.readyState === "loading") {
      document.addEventListener("DOMContentLoaded", fn);
    } else {
      fn();
    }
  }

  ready(function () {
    initScrollChrome();
    initReveal();
    initNav();
    initHeroWires();
    initCountUp();
    initQualityLoop();
    initQuotes();
    initSpotlight();
    initSectionRail();
    initWordReveal();
  });
})();
