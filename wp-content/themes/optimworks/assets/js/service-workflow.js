/**
 * ServiceWorkflow — shared animated service hero.
 */
(function () {
  "use strict";

  var STEP_MS = 1700;
  var HOLD_MS = 3200;

  var ICONS = [
    '<rect x="7" y="4" width="10" height="16" rx="2" /><path d="M10 9h4M10 12h3" />',
    '<path d="M14 4H8a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V8Z" /><path d="m11 15 4-4" />',
    '<circle cx="11" cy="11" r="6" /><path d="m20 20-4.5-4.5" />',
    '<circle cx="12" cy="12" r="8" /><path d="m8.5 12 2.5 2.5 4.5-5" />',
    '<rect x="4" y="7" width="16" height="12" rx="2" /><path d="M9 7V5h6v2M4 12h16" />',
    '<circle cx="12" cy="12" r="3" /><path d="M12 2v3M12 19v3M2 12h3M19 12h3M4.9 4.9l2.1 2.1M17 17l2.1 2.1M19.1 4.9 17 7M7 17l-2.1 2.1" />'
  ];

  var SCENES = {"security": {"caption": "Attack surface secured", "base": "M32 6 12 14v14c0 13 9 24 20 29 11-5 20-16 20-29V14Z", "parts": [["M32 6 12 14v14c0 13 9 24 20 29 11-5 20-16 20-29V14Z"], ["M16 24h32M16 32h32M18 40h28"], ["M23 24a1.5 1.5 0 1 0 0 .1M40 32a1.5 1.5 0 1 0 0 .1M28 40a1.5 1.5 0 1 0 0 .1"], ["M25 30v-4a7 7 0 0 1 14 0v4M23 30h18v12H23Z"], ["m27 36 4 4 7-7"]]}, "performance": {"caption": "Capacity proven", "base": "M10 54h46M10 54V10", "parts": [["M16 54V44"], ["M26 54V36"], ["M36 54V26"], ["M46 54V20"], ["M12 48 22 40l10-6 10-8 12-8M50 14l5 4-5 3"]]}, "api": {"caption": "Contracts verified", "base": "M6 22h18v20H6ZM40 22h18v20H40Z", "parts": [["M6 22h18v20H6Z"], ["M24 28h16m-4-4 4 4-4 4"], ["M40 22h18v20H40Z"], ["M40 36H24m4-4-4 4 4 4"], ["m25 52 4 4 9-9"]]}, "a11y": {"caption": "Usable by everyone", "base": "M32 6a26 26 0 1 0 .1 0Z", "parts": [["M32 13a3.5 3.5 0 1 0 .1 0Z"], ["M19 23h26M32 23v12"], ["m32 35-7 14M32 35l7 14"], ["M32 6a26 26 0 1 0 .1 0Z"], ["M10 58h44"]]}, "pipeline": {"caption": "Suite runs in CI", "base": "M8 32h48", "parts": [["M8 26h10v12H8Z"], ["M18 32h9M27 26h10v12H27Z"], ["M37 32h9M46 26h10v12H46Z"], ["M13 18c0-8 38-8 38 0m-4-3 4 3 4-3"], ["m24 50 5 5 11-11"]]}, "checklist": {"caption": "Cases ready to run", "base": "M14 6h28l8 8v44H14Z", "parts": [["M14 6h28l8 8v44H14Z"], ["m20 22 3 3 5-5M32 23h12"], ["m20 33 3 3 5-5M32 34h12"], ["m20 44 3 3 5-5M32 45h12"], ["M38 6v10h12"]]}, "data": {"caption": "Data trusted end-to-end", "base": "M6 18c0-4 14-4 14 0v28c0 4-14 4-14 0ZM44 18c0-4 14-4 14 0v28c0 4-14 4-14 0Z", "parts": [["M6 18c0-4 14-4 14 0v28c0 4-14 4-14 0ZM6 18c0 4 14 4 14 0"], ["M20 32h6M26 24h12v16H26Z"], ["m29 32 3 3 4-6"], ["M38 32h6M44 18c0-4 14-4 14 0v28c0 4-14 4-14 0ZM44 18c0 4 14 4 14 0"], ["M6 56h52"]]}, "ai": {"caption": "Answers grounded & safe", "base": "M6 10h34v18H18l-6 6v-6H6ZM24 34h34v18h-6v6l-6-6H24Z", "parts": [["M6 10h34v18H18l-6 6v-6H6Z"], ["M12 17h22M12 22h14"], ["M24 34h34v18h-6v6l-6-6H24Z"], ["M30 41h22M30 46h12"], ["m46 44 3 3 6-6"]]}, "mobile": {"caption": "Works on every device", "base": "M20 4h24v56H20Z", "parts": [["M20 4h24v56H20Z"], ["M26 12h12v8H26Z"], ["M26 26h12M26 31h8"], ["M30 54h4M8 24h6v20H8ZM50 24h6v20h-6Z"], ["m27 41 4 4 7-7"]]}, "visual": {"caption": "Pixel drift caught", "base": "M4 14h26v36H4ZM34 14h26v36H34Z", "parts": [["M4 14h26v36H4ZM8 20h18M8 26h12"], ["M34 14h26v36H34ZM38 20h18M38 26h12"], ["M38 32h14v10H38Z"], ["M32 8v48"], ["m40 37 3 3 6-6"]]}, "chaos": {"caption": "Recovers under failure", "base": "M32 8a6 6 0 1 0 .1 0ZM12 44a6 6 0 1 0 .1 0ZM52 44a6 6 0 1 0 .1 0Z", "parts": [["M32 8a6 6 0 1 0 .1 0ZM12 44a6 6 0 1 0 .1 0ZM52 44a6 6 0 1 0 .1 0Z"], ["M28 19 15 39M36 19l13 20M18 50h28"], ["m48 46 8 8m0-8-8 8"], ["M44 30c8 0 12 6 10 12m1-5-1 5-5-1"], ["m25 30 4 4 7-7"]]}, "risk": {"caption": "Risk ranked before release", "base": "M32 6a26 26 0 1 0 .1 0ZM32 18a14 14 0 1 0 .1 0Z", "parts": [["M32 6a26 26 0 1 0 .1 0Z"], ["M32 18a14 14 0 1 0 .1 0Z"], ["M32 32 50 14"], ["M44 21a2.5 2.5 0 1 0 .1 0ZM22 40a2 2 0 1 0 .1 0ZM40 44a2 2 0 1 0 .1 0Z"], ["M32 29a3 3 0 1 0 .1 0Z"]]}, "chain": {"caption": "Contracts audited", "base": "M4 24h14v16H4ZM25 24h14v16H25ZM46 24h14v16H46Z", "parts": [["M4 24h14v16H4Z"], ["M18 32h7M25 24h14v16H25Z"], ["M39 32h7M46 24h14v16H46Z"], ["M11 18V12h42v6"], ["m25 50 5 5 10-10"]]}, "roadmap": {"caption": "Roadmap you can act on", "base": "M8 56h48", "parts": [["M12 56V44h8v12"], ["M24 56V36h8v20"], ["M36 56V26h8v30"], ["M48 56V14h8v42"], ["M14 36 26 26l12-6 14-12m-6 0h6v6"]]}, "cycle": {"caption": "Quality every sprint", "base": "M32 8a24 24 0 1 0 .1 0Z", "parts": [["M32 8a24 24 0 0 1 24 24"], ["M56 32a24 24 0 0 1-24 24"], ["M32 56A24 24 0 0 1 8 32"], ["M8 32A24 24 0 0 1 32 8m-5-4 5 4-5 4"], ["m24 32 5 5 11-11"]]}, "signal": {"caption": "Calls stay clear", "base": "M6 22h12v20H6ZM46 22h12v20H46Z", "parts": [["M6 22h12v20H6Z"], ["M22 26c3 4 3 8 0 12M27 22c5 6 5 14 0 20"], ["M42 26c-3 4-3 8 0 12M37 22c-5 6-5 14 0 20"], ["M46 22h12v20H46Z"], ["m25 52 5 5 10-10"]]}, "impact": {"caption": "Only affected tests run", "base": "M32 6a5 5 0 1 0 .1 0ZM14 30a5 5 0 1 0 .1 0ZM50 30a5 5 0 1 0 .1 0ZM14 54a5 5 0 1 0 .1 0ZM50 54a5 5 0 1 0 .1 0Z", "parts": [["M32 6a5 5 0 1 0 .1 0Z"], ["M28 14 17 26M36 14l11 12"], ["M50 30a5 5 0 1 0 .1 0Z"], ["M50 40v9"], ["M50 54a5 5 0 1 0 .1 0Z"]]}, "tdm": {"caption": "Safe data on demand", "base": "M12 14c0-6 32-6 32 0v32c0 6-32 6-32 0Z", "parts": [["M12 14c0-6 32-6 32 0v32c0 6-32 6-32 0ZM12 14c0 6 32 6 32 0"], ["M12 26c0 6 32 6 32 0M12 38c0 6 32 6 32 0"], ["M40 40h14v12H40Z"], ["M43 40v-4a4 4 0 0 1 8 0v4"], ["m44 46 2 2 4-4"]]}};

  var RULES = [
    [/secur|penetration/, "security"],
    [/performance|load/, "performance"],
    [/api/, "api"],
    [/accessib/, "a11y"],
    [/test case/, "checklist"],
    [/impact/, "impact"],
    [/test data/, "tdm"],
    [/etl|pipeline|data quality|model & data|model and data/, "data"],
    [/visual/, "visual"],
    [/chaos|resilien/, "chaos"],
    [/predictive|risk/, "risk"],
    [/blockchain|smart contract/, "chain"],
    [/real-?time|communication|webrtc/, "signal"],
    [/mobile|iot|device/, "mobile"],
    [/genai|llm|prompt|hallucination|conversational|agent|generated code/, "ai"],
    [/agile|continuous/, "cycle"],
    [/strategy|consult|advisory|readiness|assessment|coe|centre|center/, "roadmap"],
    [/automation/, "pipeline"],
    [/functional|regression/, "checklist"]
  ];

  function pickScene(hint) {
    var h = String(hint || "").toLowerCase();
    for (var i = 0; i < RULES.length; i++) {
      if (RULES[i][0].test(h)) {
        return SCENES[RULES[i][1]] || SCENES.checklist;
      }
    }
    return SCENES.checklist;
  }

  function el(tag, attrs, html) {
    var node = document.createElement(tag);
    if (attrs) {
      Object.keys(attrs).forEach(function (k) {
        if (attrs[k] === undefined || attrs[k] === null) return;
        if (k === "className") node.className = attrs[k];
        else node.setAttribute(k, attrs[k]);
      });
    }
    if (html !== undefined) node.innerHTML = html;
    return node;
  }

  function svgEl(tag, attrs, html) {
    var node = document.createElementNS("http://www.w3.org/2000/svg", tag);
    if (attrs) {
      Object.keys(attrs).forEach(function (k) {
        if (attrs[k] === undefined || attrs[k] === null) return;
        node.setAttribute(k, attrs[k]);
      });
    }
    if (html !== undefined) node.innerHTML = html;
    return node;
  }

  function pathGroup(paths, className) {
    var g = svgEl("g", { class: className || "" });
    (paths || []).forEach(function (d) {
      var p = svgEl("path", { d: d, pathLength: "1" });
      g.appendChild(p);
    });
    return g;
  }

  function curve(y) {
    return "M0 " + y + " C 70 " + y + ", 60 200, 130 200";
  }

  function mount(root) {
    var cfg = null;
    var cfgId = root.getAttribute("data-config-id");
    if (cfgId) {
      var cfgNode = document.getElementById(cfgId);
      if (cfgNode) {
        try { cfg = JSON.parse(cfgNode.textContent || "{}"); } catch (e1) { cfg = null; }
      }
    }
    if (!cfg) {
      var raw = root.getAttribute("data-config");
      if (raw) {
        try { cfg = JSON.parse(raw); } catch (e2) { cfg = null; }
      }
    }
    if (!cfg) return;

    var flow = cfg.flow;
    var stages = flow && flow.steps ? flow.steps.map(function (s) { return s[0]; }) : (cfg.stages || []);
    var n = stages.length;
    if (!n) return;

    var heads = cfg.heads || ["Scope", "Delivery", "Handover"];
    var coreName = (flow && flow.core) || cfg.coreName || "Optimworks";
    var coreSub = cfg.coreSub || "Delivery live";
    var outTitle = (flow && flow.out && flow.out[0]) || cfg.outTitle || "Owned pack";
    var outSub = (flow && flow.out && flow.out[1]) || cfg.outSub || "Handed over · Owned";
    var aria = cfg.aria || root.getAttribute("aria-label") || "";
    var scene = pickScene(aria + " " + (cfg.image || "") + " " + coreName);
    var k = scene.parts.length;
    var t = 0;

    root.setAttribute("aria-label", aria);

    var headsEl, body, pillNodes, wireNodes, progressFill, partNodes, coreSmall, coreStep, out;

    try {
      headsEl = el("div", { className: "acx-heads", "aria-hidden": "true" });
      heads.forEach(function (h) { headsEl.appendChild(el("span", null, h)); });

      body = el("div", { className: "acx-body", "aria-hidden": "true" });
      var pills = el("ol", { className: "acx-pills" });
      pillNodes = [];
      stages.forEach(function (label, i) {
        var li = el("li");
        li.appendChild(el("span", { className: "acx-ico" }, '<svg viewBox="0 0 24 24" fill="none">' + ICONS[i % ICONS.length] + "</svg>"));
        li.appendChild(el("span", { className: "acx-lbl" }, "<em>" + String(i + 1).padStart(2, "0") + "</em>" + label));
        li.appendChild(el("span", { className: "acx-state" }, '<svg viewBox="0 0 12 12" fill="none"><path d="m3 6.2 2 2 4-4.4" pathLength="1" /></svg>'));
        pills.appendChild(li);
        pillNodes.push(li);
      });
      body.appendChild(pills);

      var wires = svgEl("svg", { class: "acx-wires", viewBox: "0 0 130 400", preserveAspectRatio: "none", fill: "none" });
      wireNodes = [];
      var ys = stages.map(function (_, i) { return Math.round((400 * (i + 0.5)) / n); });
      ys.forEach(function (y) {
        var g = svgEl("g");
        g.appendChild(svgEl("path", { d: curve(y), class: "acx-wire", "vector-effect": "non-scaling-stroke" }));
        g.appendChild(svgEl("path", { d: curve(y), class: "acx-wire-flow", "vector-effect": "non-scaling-stroke" }));
        wires.appendChild(g);
        wireNodes.push(g);
      });
      body.appendChild(wires);

      var core = el("div", { className: "acx-core" });
      var progress = svgEl("svg", { class: "acx-progress", viewBox: "0 0 100 100", fill: "none" });
      progress.appendChild(svgEl("circle", { cx: "50", cy: "50", r: "48", class: "acx-progress-track" }));
      progressFill = svgEl("circle", { cx: "50", cy: "50", r: "48", pathLength: "1", class: "acx-progress-fill" });
      progress.appendChild(progressFill);
      core.appendChild(progress);

      var coreIn = el("div", { className: "acx-core-in" });
      var sceneSvg = svgEl("svg", { class: "acx-scene", viewBox: "0 0 64 64", fill: "none" });
      sceneSvg.appendChild(pathGroup([scene.base], "acx-scene-base"));
      partNodes = [];
      scene.parts.forEach(function (paths) {
        var g = pathGroup(paths, "acx-scene-part");
        sceneSvg.appendChild(g);
        partNodes.push(g);
      });
      coreIn.appendChild(sceneSvg);
      coreIn.appendChild(el("b", null, coreName));
      coreSmall = el("small", null, flow ? stages[0] : coreSub);
      coreStep = el("span", { className: "acx-core-step" }, flow ? (flow.steps[0] && flow.steps[0][1]) : stages[0]);
      coreIn.appendChild(coreSmall);
      coreIn.appendChild(coreStep);
      core.appendChild(coreIn);
      body.appendChild(core);

      body.appendChild(el("span", { className: "acx-out-line" }, "<i></i>"));
      out = el("div", { className: "acx-out" });
      out.appendChild(el("span", { className: "acx-shield" }, '<svg viewBox="0 0 24 24" fill="none"><path d="M12 3 5 6v5c0 4.5 3 8.3 7 10 4-1.7 7-5.5 7-10V6Z" /><path d="m9 12 2 2 4-4" pathLength="1" class="acx-out-tick" /></svg>'));
      out.appendChild(el("strong", null, outTitle));
      out.appendChild(el("small", null, outSub));
      body.appendChild(out);
    } catch (buildErr) {
      return;
    }

    root.innerHTML = "";
    root.appendChild(headsEl);
    root.appendChild(body);

    function render() {
      var done = t >= n;
      var drawn = done ? k : Math.floor(((t + 1) * k) / n);
      root.classList.toggle("is-done", done);
      pillNodes.forEach(function (li, i) {
        li.classList.toggle("on", i === t);
        li.classList.toggle("done", i < t);
      });
      wireNodes.forEach(function (g, i) {
        g.classList.toggle("on", i === t);
        g.classList.toggle("done", i < t);
      });
      progressFill.style.strokeDashoffset = String(1 - Math.min(t, n) / n);
      partNodes.forEach(function (g, i) {
        g.classList.toggle("drawn", i < drawn);
      });
      var idx = Math.min(t, n - 1);
      if (flow) {
        coreSmall.textContent = stages[idx] || "";
        var stepTxt = (flow.steps[idx] && flow.steps[idx][1]) || stages[idx] || "";
        var fresh = el("span", { className: "acx-core-step" }, stepTxt);
        coreStep.parentNode.replaceChild(fresh, coreStep);
        coreStep = fresh;
      } else {
        var fresh2 = el("span", { className: "acx-core-step" }, stages[idx] || "");
        coreStep.parentNode.replaceChild(fresh2, coreStep);
        coreStep = fresh2;
      }
      out.classList.toggle("on", done);
    }

    render();

    if (window.matchMedia && window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
      t = n;
      render();
      return;
    }

    var visible = true;
    if (typeof IntersectionObserver !== "undefined") {
      var io = new IntersectionObserver(function (entries) {
        visible = !!(entries[0] && entries[0].isIntersecting);
      }, { threshold: 0.1 });
      io.observe(root);
    }

    function tick() {
      if (visible && !document.hidden) {
        t = t >= n ? 0 : t + 1;
        render();
      }
      window.setTimeout(tick, t >= n ? HOLD_MS : STEP_MS);
    }
    window.setTimeout(tick, STEP_MS);
  }

  function boot() {
    var nodes = document.querySelectorAll("[data-service-workflow]");
    for (var i = 0; i < nodes.length; i++) {
      try { mount(nodes[i]); } catch (err) { /* keep server skeleton */ }
    }
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", boot);
  } else {
    boot();
  }
})();
