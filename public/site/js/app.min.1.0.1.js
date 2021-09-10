!function (e) {
    "use strict";


    function r(e) {
        if (void 0 === e.length) o(e, "click", t);
        else if ("string" != typeof e && !(e instanceof String))
            for (var n = 0; n < e.length; n++) o(e[n], "click", t)
    }

    function t(e) {
        var n, t, o, i;
        return (o = (n = (e = e || window.event).currentTarget || e.srcElement).getAttribute("href")) && (i = e.ctrlKey || e.shiftKey || e.metaKey, t = n.getAttribute("target"), i || t && !d(t)) ? (r.open(o), e.preventDefault ? e.preventDefault() : e.returnValue = !1, !1) : void 0
    }

    function o(e, n, t) {
        var o, i;
        return e.addEventListener ? e.addEventListener(n, t, !1) : (o = "on" + n, void (e.attachEvent ? e.attachEvent(o, t) : e[o] ? (i = e[o], e[o] = function () {
            t(), i()
        }) : e[o] = t))
    }

    function d(e) {
        return "_top" === e || "_self" === e || "_parent" === e
    }

    var i = -1 !== navigator.userAgent.indexOf("MSIE"),
        l = window.open;
    r.open = function (e, n, t) {
        var o;
        return d(n) ? l.apply(window, arguments) : i ? ((o = l.apply(window, arguments)).opener = null, o) : function (e, n, t) {
            var o, i, r, d, l;
            return (o = document.createElement("iframe")).style.display = "none", document.body.appendChild(o), d = '"' + e + '"', n && (d += ', "' + n + '"'), t && (d += ', "' + t + '"'), (r = (i = o.contentDocument || o.contentWindow.document).createElement("script")).type = "text/javascript", r.text = "window.parent = null; window.top = null;window.frameElement = null; var child = window.open(" + d + ");child.opener = null", i.body.appendChild(r), l = o.contentWindow.child, document.body.removeChild(o), l
        }(e, n, t)
    }, r.patch = function () {
        window.open = function () {
            return r.open.apply(this, arguments)
        }
    }, "undefined" != typeof exports && ("undefined" != typeof module && module.exports ? module.exports = r : exports.blankshield = r), "function" == typeof define && "object" == typeof define.amd && define("blankshield", [], function () {
        return r
    }), e.blankshield = r
}(this), document.addEventListener("DOMContentLoaded", function () {
    blankshield(document.querySelectorAll("a[target=_blank]"))
});
var _gsScope = "undefined" != typeof module && module.exports && "undefined" != typeof global ? global : this || window;
(_gsScope._gsQueue || (_gsScope._gsQueue = [])).push(function () {
    "use strict";

    function l(t) {
        for (; t;) t.f || t.blob || (t.m = Math.round), t = t._next
    }

    var t, e, w, x, b, P, g, i, m, s;

    function y(t, e, i, s) {
        i === s && (i = s - (s - e) / 1e6), t === e && (e = t + (i - t) / 1e6), this.a = t, this.b = e, this.c = i, this.d = s, this.da = s - t, this.ca = i - t, this.ba = e - t
    }

    function O(t, e, i, s) {
        var r = {a: t},
            n = {},
            a = {},
            o = {c: s},
            l = (t + e) / 2,
            h = (e + i) / 2,
            _ = (i + s) / 2,
            u = (l + h) / 2,
            f = (h + _) / 2,
            c = (f - u) / 8;
        return r.b = l + (t - l) / 4, n.b = u + c, r.c = n.a = (r.b + n.b) / 2, n.c = a.a = (u + f) / 2, a.b = f - c, o.b = _ + (s - _) / 4, a.c = o.a = (a.b + o.b) / 2, [r, n, a, o]
    }

    function v(t, e, i, s, r) {
        var n, a, o, l, h, _, u, f, c, p, d, m, g, y = t.length - 1,
            v = 0,
            T = t[0].a;
        for (n = 0; n < y; n++) a = (h = t[v]).a, o = h.d, l = t[v + 1].d, f = r ? (d = x[n], g = ((m = b[n]) + d) * e * .25 / (s ? .5 : P[n] || .5), o - ((_ = o - (o - a) * (s ? .5 * e : 0 !== d ? g / d : 0)) + (((u = o + (l - o) * (s ? .5 * e : 0 !== m ? g / m : 0)) - _) * (3 * d / (d + m) + .5) / 4 || 0))) : o - ((_ = o - (o - a) * e * .5) + (u = o + (l - o) * e * .5)) / 2, _ += f, u += f, h.c = c = _, h.b = 0 !== n ? T : T = h.a + .6 * (h.c - h.a), h.da = o - a, h.ca = c - a, h.ba = T - a, i ? (p = O(a, T, c, o), t.splice(v, 1, p[0], p[1], p[2], p[3]), v += 4) : v++, T = u;
        (h = t[v]).b = T, h.c = T + .4 * (h.d - T), h.da = h.d - h.a, h.ca = h.c - h.a, h.ba = T - h.a, i && (p = O(h.a, T, h.c, h.d), t.splice(v, 1, p[0], p[1], p[2], p[3]))
    }

    function T(t, e, i, s) {
        var r, n, a, o, l, h, _ = [];
        if (s)
            for (n = (t = [s].concat(t)).length; -1 < --n;) "string" == typeof (h = t[n][e]) && "=" === h.charAt(1) && (t[n][e] = s[e] + Number(h.charAt(0) + h.substr(2)));
        if ((r = t.length - 2) < 0) return _[0] = new y(t[0][e], 0, 0, t[0][e]), _;
        for (n = 0; n < r; n++) a = t[n][e], o = t[n + 1][e], _[n] = new y(a, 0, 0, o), i && (l = t[n + 2][e], x[n] = (x[n] || 0) + (o - a) * (o - a), b[n] = (b[n] || 0) + (l - o) * (l - o));
        return _[n] = new y(t[n][e], 0, 0, t[n + 1][e]), _
    }

    function c(t, e, i, s, r, n) {
        var a, o, l, h, _, u, f, c, p = {},
            d = [],
            m = n || t[0];
        for (o in r = "string" == typeof r ? "," + r + "," : ",x,y,z,left,top,right,bottom,marginTop,marginLeft,marginRight,marginBottom,paddingLeft,paddingTop,paddingRight,paddingBottom,backgroundPosition,backgroundPosition_y,", null == e && (e = 1), t[0]) d.push(o);
        if (1 < t.length) {
            for (c = t[t.length - 1], f = !0, a = d.length; -1 < --a;)
                if (o = d[a], .05 < Math.abs(m[o] - c[o])) {
                    f = !1;
                    break
                }
            f && (t = t.concat(), n && t.unshift(n), t.push(t[1]), n = t[t.length - 3])
        }
        for (x.length = b.length = P.length = 0, a = d.length; -1 < --a;) o = d[a], g[o] = -1 !== r.indexOf("," + o + ","), p[o] = T(t, o, g[o], n);
        for (a = x.length; -1 < --a;) x[a] = Math.sqrt(x[a]), b[a] = Math.sqrt(b[a]);
        if (!s) {
            for (a = d.length; -1 < --a;)
                if (g[o])
                    for (u = (l = p[d[a]]).length - 1, h = 0; h < u; h++) _ = l[h + 1].da / b[h] + l[h].da / x[h] || 0, P[h] = (P[h] || 0) + _ * _;
            for (a = P.length; -1 < --a;) P[a] = Math.sqrt(P[a])
        }
        for (a = d.length, h = i ? 4 : 1; -1 < --a;) l = p[o = d[a]], v(l, e, i, s, g[o]), f && (l.splice(0, h), l.splice(l.length - h, h));
        return p
    }

    function p(t, e, i) {
        for (var s, r, n, a, o, l, h, _, u, f, c, p = 1 / i, d = t.length; -1 < --d;)
            for (n = (f = t[d]).a, a = f.d - n, o = f.c - n, l = f.b - n, s = r = 0, _ = 1; _ <= i; _++) s = r - (r = ((h = p * _) * h * a + 3 * (u = 1 - h) * (h * o + u * l)) * h), e[c = d * i + _ - 1] = (e[c] || 0) + s * s
    }

    _gsScope._gsDefine("TweenMax", ["core.Animation", "core.SimpleTimeline", "TweenLite"], function (s, _, y) {
        function m(t) {
            var e, i = [],
                s = t.length;
            for (e = 0; e !== s; i.push(t[e++])) ;
            return i
        }

        function g(t, e, i) {
            var s, r, n = t.cycle;
            for (s in n) r = n[s], t[s] = "function" == typeof r ? r(i, e[i]) : r[i % r.length];
            delete t.cycle
        }

        var v = function (t, e, i) {
                y.call(this, t, e, i), this._cycle = 0, this._yoyo = !0 === this.vars.yoyo || !!this.vars.yoyoEase, this._repeat = this.vars.repeat || 0, this._repeatDelay = this.vars.repeatDelay || 0, this._repeat && this._uncache(!0), this.render = v.prototype.render
            },
            T = 1e-10,
            x = y._internals,
            b = x.isSelector,
            w = x.isArray,
            t = v.prototype = y.to({}, .1, {}),
            P = [];
        v.version = "1.20.3", t.constructor = v, t.kill()._gc = !1, v.killTweensOf = v.killDelayedCallsTo = y.killTweensOf, v.getTweensOf = y.getTweensOf, v.lagSmoothing = y.lagSmoothing, v.ticker = y.ticker, v.render = y.render, t.invalidate = function () {
            return this._yoyo = !0 === this.vars.yoyo || !!this.vars.yoyoEase, this._repeat = this.vars.repeat || 0, this._repeatDelay = this.vars.repeatDelay || 0, this._yoyoEase = null, this._uncache(!0), y.prototype.invalidate.call(this)
        }, t.updateTo = function (t, e) {
            var i, s = this.ratio,
                r = this.vars.immediateRender || t.immediateRender;
            for (i in e && this._startTime < this._timeline._time && (this._startTime = this._timeline._time, this._uncache(!1), this._gc ? this._enabled(!0, !1) : this._timeline.insert(this, this._startTime - this._delay)), t) this.vars[i] = t[i];
            if (this._initted || r)
                if (e) this._initted = !1, r && this.render(0, !0, !0);
                else if (this._gc && this._enabled(!0, !1), this._notifyPluginsOfEnabled && this._firstPT && y._onPluginEvent("_onDisable", this), .998 < this._time / this._duration) {
                    var n = this._totalTime;
                    this.render(0, !0, !1), this._initted = !1, this.render(n, !0, !1)
                } else if (this._initted = !1, this._init(), 0 < this._time || r)
                    for (var a, o = 1 / (1 - s), l = this._firstPT; l;) a = l.s + l.c, l.c *= o, l.s = a - l.c, l = l._next;
            return this
        }, t.render = function (t, e, i) {
            this._initted || 0 === this._duration && this.vars.repeat && this.invalidate();
            var s, r, n, a, o, l, h, _, u, f = this._dirty ? this.totalDuration() : this._totalDuration,
                c = this._time,
                p = this._totalTime,
                d = this._cycle,
                m = this._duration,
                g = this._rawPrevTime;
            if (f - 1e-7 <= t && 0 <= t ? (this._totalTime = f, this._cycle = this._repeat, this._yoyo && 0 != (1 & this._cycle) ? (this._time = 0, this.ratio = this._ease._calcEnd ? this._ease.getRatio(0) : 0) : (this._time = m, this.ratio = this._ease._calcEnd ? this._ease.getRatio(1) : 1), this._reversed || (s = !0, r = "onComplete", i = i || this._timeline.autoRemoveChildren), 0 !== m || !this._initted && this.vars.lazy && !i || (this._startTime === this._timeline._duration && (t = 0), (g < 0 || t <= 0 && -1e-7 <= t || g === T && "isPause" !== this.data) && g !== t && (i = !0, T < g && (r = "onReverseComplete")), this._rawPrevTime = _ = !e || t || g === t ? t : T)) : t < 1e-7 ? (this._totalTime = this._time = this._cycle = 0, this.ratio = this._ease._calcEnd ? this._ease.getRatio(0) : 0, (0 !== p || 0 === m && 0 < g) && (r = "onReverseComplete", s = this._reversed), t < 0 && (this._active = !1, 0 !== m || !this._initted && this.vars.lazy && !i || (0 <= g && (i = !0), this._rawPrevTime = _ = !e || t || g === t ? t : T)), this._initted || (i = !0)) : (this._totalTime = this._time = t, 0 !== this._repeat && (a = m + this._repeatDelay, this._cycle = this._totalTime / a >> 0, 0 !== this._cycle && this._cycle === this._totalTime / a && p <= t && this._cycle--, this._time = this._totalTime - this._cycle * a, this._yoyo && 0 != (1 & this._cycle) && (this._time = m - this._time, (u = this._yoyoEase || this.vars.yoyoEase) && (this._yoyoEase || (!0 !== u || this._initted ? this._yoyoEase = u = !0 === u ? this._ease : u instanceof Ease ? u : Ease.map[u] : (u = this.vars.ease, this._yoyoEase = u = u ? u instanceof Ease ? u : "function" == typeof u ? new Ease(u, this.vars.easeParams) : Ease.map[u] || y.defaultEase : y.defaultEase)), this.ratio = u ? 1 - u.getRatio((m - this._time) / m) : 0)), this._time > m ? this._time = m : this._time < 0 && (this._time = 0)), this._easeType && !u ? (o = this._time / m, (1 === (l = this._easeType) || 3 === l && .5 <= o) && (o = 1 - o), 3 === l && (o *= 2), 1 === (h = this._easePower) ? o *= o : 2 === h ? o *= o * o : 3 === h ? o *= o * o * o : 4 === h && (o *= o * o * o * o), 1 === l ? this.ratio = 1 - o : 2 === l ? this.ratio = o : this._time / m < .5 ? this.ratio = o / 2 : this.ratio = 1 - o / 2) : u || (this.ratio = this._ease.getRatio(this._time / m))), c !== this._time || i || d !== this._cycle) {
                if (!this._initted) {
                    if (this._init(), !this._initted || this._gc) return;
                    if (!i && this._firstPT && (!1 !== this.vars.lazy && this._duration || this.vars.lazy && !this._duration)) return this._time = c, this._totalTime = p, this._rawPrevTime = g, this._cycle = d, x.lazyTweens.push(this), void (this._lazy = [t, e]);
                    !this._time || s || u ? s && this._ease._calcEnd && !u && (this.ratio = this._ease.getRatio(0 === this._time ? 0 : 1)) : this.ratio = this._ease.getRatio(this._time / m)
                }
                for (!1 !== this._lazy && (this._lazy = !1), this._active || !this._paused && this._time !== c && 0 <= t && (this._active = !0), 0 === p && (2 === this._initted && 0 < t && this._init(), this._startAt && (0 <= t ? this._startAt.render(t, !0, i) : r || (r = "_dummyGS")), !this.vars.onStart || 0 === this._totalTime && 0 !== m || (e || this._callback("onStart"))), n = this._firstPT; n;) n.f ? n.t[n.p](n.c * this.ratio + n.s) : n.t[n.p] = n.c * this.ratio + n.s, n = n._next;
                this._onUpdate && (t < 0 && this._startAt && this._startTime && this._startAt.render(t, !0, i), e || this._totalTime === p && !r || this._callback("onUpdate")), this._cycle !== d && (e || this._gc || this.vars.onRepeat && this._callback("onRepeat")), !r || this._gc && !i || (t < 0 && this._startAt && !this._onUpdate && this._startTime && this._startAt.render(t, !0, i), s && (this._timeline.autoRemoveChildren && this._enabled(!1, !1), this._active = !1), !e && this.vars[r] && this._callback(r), 0 === m && this._rawPrevTime === T && _ !== T && (this._rawPrevTime = 0))
            } else p !== this._totalTime && this._onUpdate && (e || this._callback("onUpdate"))
        }, v.to = function (t, e, i) {
            return new v(t, e, i)
        }, v.from = function (t, e, i) {
            return i.runBackwards = !0, i.immediateRender = 0 != i.immediateRender, new v(t, e, i)
        }, v.fromTo = function (t, e, i, s) {
            return s.startAt = i, s.immediateRender = 0 != s.immediateRender && 0 != i.immediateRender, new v(t, e, s)
        }, v.staggerTo = v.allTo = function (t, e, i, s, r, n, a) {
            s = s || 0;

            function o() {
                i.onComplete && i.onComplete.apply(i.onCompleteScope || this, arguments), r.apply(a || i.callbackScope || this, n || P)
            }

            var l, h, _, u, f = 0,
                c = [],
                p = i.cycle,
                d = i.startAt && i.startAt.cycle;
            for (w(t) || ("string" == typeof t && (t = y.selector(t) || t), b(t) && (t = m(t))), t = t || [], s < 0 && ((t = m(t)).reverse(), s *= -1), l = t.length - 1, _ = 0; _ <= l; _++) {
                for (u in h = {}, i) h[u] = i[u];
                if (p && (g(h, t, _), null != h.duration && (e = h.duration, delete h.duration)), d) {
                    for (u in d = h.startAt = {}, i.startAt) d[u] = i.startAt[u];
                    g(h.startAt, t, _)
                }
                h.delay = f + (h.delay || 0), _ === l && r && (h.onComplete = o), c[_] = new v(t[_], e, h), f += s
            }
            return c
        }, v.staggerFrom = v.allFrom = function (t, e, i, s, r, n, a) {
            return i.runBackwards = !0, i.immediateRender = 0 != i.immediateRender, v.staggerTo(t, e, i, s, r, n, a)
        }, v.staggerFromTo = v.allFromTo = function (t, e, i, s, r, n, a, o) {
            return s.startAt = i, s.immediateRender = 0 != s.immediateRender && 0 != i.immediateRender, v.staggerTo(t, e, s, r, n, a, o)
        }, v.delayedCall = function (t, e, i, s, r) {
            return new v(e, 0, {
                delay: t,
                onComplete: e,
                onCompleteParams: i,
                callbackScope: s,
                onReverseComplete: e,
                onReverseCompleteParams: i,
                immediateRender: !1,
                useFrames: r,
                overwrite: 0
            })
        }, v.set = function (t, e) {
            return new v(t, 0, e)
        }, v.isTweening = function (t) {
            return 0 < y.getTweensOf(t, !0).length
        };
        var n = function (t, e) {
                for (var i = [], s = 0, r = t._first; r;) r instanceof y ? i[s++] = r : (e && (i[s++] = r), s = (i = i.concat(n(r, e))).length), r = r._next;
                return i
            },
            u = v.getAllTweens = function (t) {
                return n(s._rootTimeline, t).concat(n(s._rootFramesTimeline, t))
            };
        v.killAll = function (t, e, i, s) {
            null == e && (e = !0), null == i && (i = !0);
            var r, n, a, o = u(0 != s),
                l = o.length,
                h = e && i && s;
            for (a = 0; a < l; a++) n = o[a], (h || n instanceof _ || (r = n.target === n.vars.onComplete) && i || e && !r) && (t ? n.totalTime(n._reversed ? 0 : n.totalDuration()) : n._enabled(!1, !1))
        }, v.killChildTweensOf = function (t, e) {
            if (null != t) {
                var i, s, r, n, a, o = x.tweenLookup;
                if ("string" == typeof t && (t = y.selector(t) || t), b(t) && (t = m(t)), w(t))
                    for (n = t.length; -1 < --n;) v.killChildTweensOf(t[n], e);
                else {
                    for (r in i = [], o)
                        for (s = o[r].target.parentNode; s;) s === t && (i = i.concat(o[r].tweens)), s = s.parentNode;
                    for (a = i.length, n = 0; n < a; n++) e && i[n].totalTime(i[n].totalDuration()), i[n]._enabled(!1, !1)
                }
            }
        };

        function r(t, e, i, s) {
            e = !1 !== e, i = !1 !== i;
            for (var r, n, a = u(s = !1 !== s), o = e && i && s, l = a.length; -1 < --l;) n = a[l], (o || n instanceof _ || (r = n.target === n.vars.onComplete) && i || e && !r) && n.paused(t)
        }

        return v.pauseAll = function (t, e, i) {
            r(!0, t, e, i)
        }, v.resumeAll = function (t, e, i) {
            r(!1, t, e, i)
        }, v.globalTimeScale = function (t) {
            var e = s._rootTimeline,
                i = y.ticker.time;
            return arguments.length ? (t = t || T, e._startTime = i - (i - e._startTime) * e._timeScale / t, e = s._rootFramesTimeline, i = y.ticker.frame, e._startTime = i - (i - e._startTime) * e._timeScale / t, e._timeScale = s._rootTimeline._timeScale = t, t) : e._timeScale
        }, t.progress = function (t, e) {
            return arguments.length ? this.totalTime(this.duration() * (this._yoyo && 0 != (1 & this._cycle) ? 1 - t : t) + this._cycle * (this._duration + this._repeatDelay), e) : this._time / this.duration()
        }, t.totalProgress = function (t, e) {
            return arguments.length ? this.totalTime(this.totalDuration() * t, e) : this._totalTime / this.totalDuration()
        }, t.time = function (t, e) {
            return arguments.length ? (this._dirty && this.totalDuration(), t > this._duration && (t = this._duration), this._yoyo && 0 != (1 & this._cycle) ? t = this._duration - t + this._cycle * (this._duration + this._repeatDelay) : 0 !== this._repeat && (t += this._cycle * (this._duration + this._repeatDelay)), this.totalTime(t, e)) : this._time
        }, t.duration = function (t) {
            return arguments.length ? s.prototype.duration.call(this, t) : this._duration
        }, t.totalDuration = function (t) {
            return arguments.length ? -1 === this._repeat ? this : this.duration((t - this._repeat * this._repeatDelay) / (this._repeat + 1)) : (this._dirty && (this._totalDuration = -1 === this._repeat ? 999999999999 : this._duration * (this._repeat + 1) + this._repeatDelay * this._repeat, this._dirty = !1), this._totalDuration)
        }, t.repeat = function (t) {
            return arguments.length ? (this._repeat = t, this._uncache(!0)) : this._repeat
        }, t.repeatDelay = function (t) {
            return arguments.length ? (this._repeatDelay = t, this._uncache(!0)) : this._repeatDelay
        }, t.yoyo = function (t) {
            return arguments.length ? (this._yoyo = t, this) : this._yoyo
        }, v
    }, !0), _gsScope._gsDefine("TimelineLite", ["core.Animation", "core.SimpleTimeline", "TweenLite"], function (_, u, f) {
        function c(t) {
            u.call(this, t), this._labels = {}, this.autoRemoveChildren = !0 === this.vars.autoRemoveChildren, this.smoothChildTiming = !0 === this.vars.smoothChildTiming, this._sortChildren = !0, this._onUpdate = this.vars.onUpdate;
            var e, i, s = this.vars;
            for (i in s) e = s[i], v(e) && -1 !== e.join("").indexOf("{self}") && (s[i] = this._swapSelfInParams(e));
            v(s.tweens) && this.add(s.tweens, 0, s.align, s.stagger)
        }

        function p(t) {
            var e, i = {};
            for (e in t) i[e] = t[e];
            return i
        }

        function d(t, e, i) {
            var s, r, n = t.cycle;
            for (s in n) r = n[s], t[s] = "function" == typeof r ? r(i, e[i]) : r[i % r.length];
            delete t.cycle
        }

        function m(t) {
            var e, i = [],
                s = t.length;
            for (e = 0; e !== s; i.push(t[e++])) ;
            return i
        }

        var g = 1e-10,
            t = f._internals,
            e = c._internals = {},
            y = t.isSelector,
            v = t.isArray,
            T = t.lazyTweens,
            x = t.lazyRender,
            a = _gsScope._gsDefine.globals,
            n = e.pauseCallback = function () {
            },
            i = c.prototype = new u;
        return c.version = "1.20.3", i.constructor = c, i.kill()._gc = i._forcingPlayhead = i._hasPause = !1, i.to = function (t, e, i, s) {
            var r = i.repeat && a.TweenMax || f;
            return e ? this.add(new r(t, e, i), s) : this.set(t, i, s)
        }, i.from = function (t, e, i, s) {
            return this.add((i.repeat && a.TweenMax || f).from(t, e, i), s)
        }, i.fromTo = function (t, e, i, s, r) {
            var n = s.repeat && a.TweenMax || f;
            return e ? this.add(n.fromTo(t, e, i, s), r) : this.set(t, s, r)
        }, i.staggerTo = function (t, e, i, s, r, n, a, o) {
            var l, h, _ = new c({
                    onComplete: n,
                    onCompleteParams: a,
                    callbackScope: o,
                    smoothChildTiming: this.smoothChildTiming
                }),
                u = i.cycle;
            for ("string" == typeof t && (t = f.selector(t) || t), y(t = t || []) && (t = m(t)), (s = s || 0) < 0 && ((t = m(t)).reverse(), s *= -1), h = 0; h < t.length; h++) (l = p(i)).startAt && (l.startAt = p(l.startAt), l.startAt.cycle && d(l.startAt, t, h)), u && (d(l, t, h), null != l.duration && (e = l.duration, delete l.duration)), _.to(t[h], e, l, h * s);
            return this.add(_, r)
        }, i.staggerFrom = function (t, e, i, s, r, n, a, o) {
            return i.immediateRender = 0 != i.immediateRender, i.runBackwards = !0, this.staggerTo(t, e, i, s, r, n, a, o)
        }, i.staggerFromTo = function (t, e, i, s, r, n, a, o, l) {
            return s.startAt = i, s.immediateRender = 0 != s.immediateRender && 0 != i.immediateRender, this.staggerTo(t, e, s, r, n, a, o, l)
        }, i.call = function (t, e, i, s) {
            return this.add(f.delayedCall(0, t, e, i), s)
        }, i.set = function (t, e, i) {
            return i = this._parseTimeOrLabel(i, 0, !0), null == e.immediateRender && (e.immediateRender = i === this._time && !this._paused), this.add(new f(t, 0, e), i)
        }, c.exportRoot = function (t, e) {
            null == (t = t || {}).smoothChildTiming && (t.smoothChildTiming = !0);
            var i, s, r, n, a = new c(t),
                o = a._timeline;
            for (null == e && (e = !0), o._remove(a, !0), a._startTime = 0, a._rawPrevTime = a._time = a._totalTime = o._time, r = o._first; r;) n = r._next, e && r instanceof f && r.target === r.vars.onComplete || ((s = r._startTime - r._delay) < 0 && (i = 1), a.add(r, s)), r = n;
            return o.add(a, 0), i && a.totalDuration(), a
        }, i.add = function (t, e, i, s) {
            var r, n, a, o, l, h;
            if ("number" != typeof e && (e = this._parseTimeOrLabel(e, 0, !0, t)), !(t instanceof _)) {
                if (t instanceof Array || t && t.push && v(t)) {
                    for (i = i || "normal", s = s || 0, r = e, n = t.length, a = 0; a < n; a++) v(o = t[a]) && (o = new c({tweens: o})), this.add(o, r), "string" != typeof o && "function" != typeof o && ("sequence" === i ? r = o._startTime + o.totalDuration() / o._timeScale : "start" === i && (o._startTime -= o.delay())), r += s;
                    return this._uncache(!0)
                }
                if ("string" == typeof t) return this.addLabel(t, e);
                if ("function" != typeof t) throw "Cannot add " + t + " into the timeline; it is not a tween, timeline, function, or string.";
                t = f.delayedCall(0, t)
            }
            if (u.prototype.add.call(this, t, e), t._time && t.render((this.rawTime() - t._startTime) * t._timeScale, !1, !1), (this._gc || this._time === this._duration) && !this._paused && this._duration < this.duration())
                for (h = (l = this).rawTime() > t._startTime; l._timeline;) h && l._timeline.smoothChildTiming ? l.totalTime(l._totalTime, !0) : l._gc && l._enabled(!0, !1), l = l._timeline;
            return this
        }, i.remove = function (t) {
            if (t instanceof _) {
                this._remove(t, !1);
                var e = t._timeline = t.vars.useFrames ? _._rootFramesTimeline : _._rootTimeline;
                return t._startTime = (t._paused ? t._pauseTime : e._time) - (t._reversed ? t.totalDuration() - t._totalTime : t._totalTime) / t._timeScale, this
            }
            if (t instanceof Array || t && t.push && v(t)) {
                for (var i = t.length; -1 < --i;) this.remove(t[i]);
                return this
            }
            return "string" == typeof t ? this.removeLabel(t) : this.kill(null, t)
        }, i._remove = function (t, e) {
            return u.prototype._remove.call(this, t, e), this._last ? this._time > this.duration() && (this._time = this._duration, this._totalTime = this._totalDuration) : this._time = this._totalTime = this._duration = this._totalDuration = 0, this
        }, i.append = function (t, e) {
            return this.add(t, this._parseTimeOrLabel(null, e, !0, t))
        }, i.insert = i.insertMultiple = function (t, e, i, s) {
            return this.add(t, e || 0, i, s)
        }, i.appendMultiple = function (t, e, i, s) {
            return this.add(t, this._parseTimeOrLabel(null, e, !0, t), i, s)
        }, i.addLabel = function (t, e) {
            return this._labels[t] = this._parseTimeOrLabel(e), this
        }, i.addPause = function (t, e, i, s) {
            var r = f.delayedCall(0, n, i, s || this);
            return r.vars.onComplete = r.vars.onReverseComplete = e, r.data = "isPause", this._hasPause = !0, this.add(r, t)
        }, i.removeLabel = function (t) {
            return delete this._labels[t], this
        }, i.getLabelTime = function (t) {
            return null != this._labels[t] ? this._labels[t] : -1
        }, i._parseTimeOrLabel = function (t, e, i, s) {
            var r, n;
            if (s instanceof _ && s.timeline === this) this.remove(s);
            else if (s && (s instanceof Array || s.push && v(s)))
                for (n = s.length; -1 < --n;) s[n] instanceof _ && s[n].timeline === this && this.remove(s[n]);
            if (r = "number" != typeof t || e ? 99999999999 < this.duration() ? this.recent().endTime(!1) : this._duration : 0, "string" == typeof e) return this._parseTimeOrLabel(e, i && "number" == typeof t && null == this._labels[e] ? t - r : 0, i);
            if (e = e || 0, "string" != typeof t || !isNaN(t) && null == this._labels[t]) null == t && (t = r);
            else {
                if (-1 === (n = t.indexOf("="))) return null == this._labels[t] ? i ? this._labels[t] = r + e : e : this._labels[t] + e;
                e = parseInt(t.charAt(n - 1) + "1", 10) * Number(t.substr(n + 1)), t = 1 < n ? this._parseTimeOrLabel(t.substr(0, n - 1), 0, i) : r
            }
            return Number(t) + e
        }, i.seek = function (t, e) {
            return this.totalTime("number" == typeof t ? t : this._parseTimeOrLabel(t), !1 !== e)
        }, i.stop = function () {
            return this.paused(!0)
        }, i.gotoAndPlay = function (t, e) {
            return this.play(t, e)
        }, i.gotoAndStop = function (t, e) {
            return this.pause(t, e)
        }, i.render = function (t, e, i) {
            this._gc && this._enabled(!0, !1);
            var s, r, n, a, o, l, h, _ = this._time,
                u = this._dirty ? this.totalDuration() : this._totalDuration,
                f = this._startTime,
                c = this._timeScale,
                p = this._paused;
            if (_ !== this._time && (t += this._time - _), u - 1e-7 <= t && 0 <= t) this._totalTime = this._time = u, this._reversed || this._hasPausedChild() || (r = !0, a = "onComplete", o = !!this._timeline.autoRemoveChildren, 0 === this._duration && (t <= 0 && -1e-7 <= t || this._rawPrevTime < 0 || this._rawPrevTime === g) && this._rawPrevTime !== t && this._first && (o = !0, this._rawPrevTime > g && (a = "onReverseComplete"))), this._rawPrevTime = this._duration || !e || t || this._rawPrevTime === t ? t : g, t = u + 1e-4;
            else if (t < 1e-7)
                if (this._totalTime = this._time = 0, (0 !== _ || 0 === this._duration && this._rawPrevTime !== g && (0 < this._rawPrevTime || t < 0 && 0 <= this._rawPrevTime)) && (a = "onReverseComplete", r = this._reversed), t < 0) this._active = !1, this._timeline.autoRemoveChildren && this._reversed ? (o = r = !0, a = "onReverseComplete") : 0 <= this._rawPrevTime && this._first && (o = !0), this._rawPrevTime = t;
                else {
                    if (this._rawPrevTime = this._duration || !e || t || this._rawPrevTime === t ? t : g, 0 === t && r)
                        for (s = this._first; s && 0 === s._startTime;) s._duration || (r = !1), s = s._next;
                    t = 0, this._initted || (o = !0)
                }
            else {
                if (this._hasPause && !this._forcingPlayhead && !e) {
                    if (_ <= t)
                        for (s = this._first; s && s._startTime <= t && !l;) s._duration || "isPause" !== s.data || s.ratio || 0 === s._startTime && 0 === this._rawPrevTime || (l = s), s = s._next;
                    else
                        for (s = this._last; s && s._startTime >= t && !l;) s._duration || "isPause" === s.data && 0 < s._rawPrevTime && (l = s), s = s._prev;
                    l && (this._time = t = l._startTime, this._totalTime = t + this._cycle * (this._totalDuration + this._repeatDelay))
                }
                this._totalTime = this._time = this._rawPrevTime = t
            }
            if (this._time !== _ && this._first || i || o || l) {
                if (this._initted || (this._initted = !0), this._active || !this._paused && this._time !== _ && 0 < t && (this._active = !0), 0 === _ && this.vars.onStart && (0 === this._time && this._duration || e || this._callback("onStart")), _ <= (h = this._time))
                    for (s = this._first; s && (n = s._next, h === this._time && (!this._paused || p));) (s._active || s._startTime <= h && !s._paused && !s._gc) && (l === s && this.pause(), s._reversed ? s.render((s._dirty ? s.totalDuration() : s._totalDuration) - (t - s._startTime) * s._timeScale, e, i) : s.render((t - s._startTime) * s._timeScale, e, i)), s = n;
                else
                    for (s = this._last; s && (n = s._prev, h === this._time && (!this._paused || p));) {
                        if (s._active || s._startTime <= _ && !s._paused && !s._gc) {
                            if (l === s) {
                                for (l = s._prev; l && l.endTime() > this._time;) l.render(l._reversed ? l.totalDuration() - (t - l._startTime) * l._timeScale : (t - l._startTime) * l._timeScale, e, i), l = l._prev;
                                l = null, this.pause()
                            }
                            s._reversed ? s.render((s._dirty ? s.totalDuration() : s._totalDuration) - (t - s._startTime) * s._timeScale, e, i) : s.render((t - s._startTime) * s._timeScale, e, i)
                        }
                        s = n
                    }
                this._onUpdate && (e || (T.length && x(), this._callback("onUpdate"))), a && (this._gc || f !== this._startTime && c === this._timeScale || !(0 === this._time || u >= this.totalDuration()) || (r && (T.length && x(), this._timeline.autoRemoveChildren && this._enabled(!1, !1), this._active = !1), !e && this.vars[a] && this._callback(a)))
            }
        }, i._hasPausedChild = function () {
            for (var t = this._first; t;) {
                if (t._paused || t instanceof c && t._hasPausedChild()) return !0;
                t = t._next
            }
            return !1
        }, i.getChildren = function (t, e, i, s) {
            s = s || -9999999999;
            for (var r = [], n = this._first, a = 0; n;) n._startTime < s || (n instanceof f ? !1 !== e && (r[a++] = n) : (!1 !== i && (r[a++] = n), !1 !== t && (a = (r = r.concat(n.getChildren(!0, e, i))).length))), n = n._next;
            return r
        }, i.getTweensOf = function (t, e) {
            var i, s, r = this._gc,
                n = [],
                a = 0;
            for (r && this._enabled(!0, !0), s = (i = f.getTweensOf(t)).length; -1 < --s;) (i[s].timeline === this || e && this._contains(i[s])) && (n[a++] = i[s]);
            return r && this._enabled(!1, !0), n
        }, i.recent = function () {
            return this._recent
        }, i._contains = function (t) {
            for (var e = t.timeline; e;) {
                if (e === this) return !0;
                e = e.timeline
            }
            return !1
        }, i.shiftChildren = function (t, e, i) {
            i = i || 0;
            for (var s, r = this._first, n = this._labels; r;) r._startTime >= i && (r._startTime += t), r = r._next;
            if (e)
                for (s in n) n[s] >= i && (n[s] += t);
            return this._uncache(!0)
        }, i._kill = function (t, e) {
            if (!t && !e) return this._enabled(!1, !1);
            for (var i = e ? this.getTweensOf(e) : this.getChildren(!0, !0, !1), s = i.length, r = !1; -1 < --s;) i[s]._kill(t, e) && (r = !0);
            return r
        }, i.clear = function (t) {
            var e = this.getChildren(!1, !0, !0),
                i = e.length;
            for (this._time = this._totalTime = 0; -1 < --i;) e[i]._enabled(!1, !1);
            return !1 !== t && (this._labels = {}), this._uncache(!0)
        }, i.invalidate = function () {
            for (var t = this._first; t;) t.invalidate(), t = t._next;
            return _.prototype.invalidate.call(this)
        }, i._enabled = function (t, e) {
            if (t === this._gc)
                for (var i = this._first; i;) i._enabled(t, !0), i = i._next;
            return u.prototype._enabled.call(this, t, e)
        }, i.totalTime = function (t, e, i) {
            this._forcingPlayhead = !0;
            var s = _.prototype.totalTime.apply(this, arguments);
            return this._forcingPlayhead = !1, s
        }, i.duration = function (t) {
            return arguments.length ? (0 !== this.duration() && 0 !== t && this.timeScale(this._duration / t), this) : (this._dirty && this.totalDuration(), this._duration)
        }, i.totalDuration = function (t) {
            if (arguments.length) return t && this.totalDuration() ? this.timeScale(this._totalDuration / t) : this;
            if (this._dirty) {
                for (var e, i, s = 0, r = this._last, n = 999999999999; r;) e = r._prev, r._dirty && r.totalDuration(), r._startTime > n && this._sortChildren && !r._paused && !this._calculatingDuration ? (this._calculatingDuration = 1, this.add(r, r._startTime - r._delay), this._calculatingDuration = 0) : n = r._startTime, r._startTime < 0 && !r._paused && (s -= r._startTime, this._timeline.smoothChildTiming && (this._startTime += r._startTime / this._timeScale, this._time -= r._startTime, this._totalTime -= r._startTime, this._rawPrevTime -= r._startTime), this.shiftChildren(-r._startTime, !1, -9999999999), n = 0), s < (i = r._startTime + r._totalDuration / r._timeScale) && (s = i), r = e;
                this._duration = this._totalDuration = s, this._dirty = !1
            }
            return this._totalDuration
        }, i.paused = function (t) {
            if (!t)
                for (var e = this._first, i = this._time; e;) e._startTime === i && "isPause" === e.data && (e._rawPrevTime = 0), e = e._next;
            return _.prototype.paused.apply(this, arguments)
        }, i.usesFrames = function () {
            for (var t = this._timeline; t._timeline;) t = t._timeline;
            return t === _._rootFramesTimeline
        }, i.rawTime = function (t) {
            return t && (this._paused || this._repeat && 0 < this.time() && this.totalProgress() < 1) ? this._totalTime % (this._duration + this._repeatDelay) : this._paused ? this._totalTime : (this._timeline.rawTime(t) - this._startTime) * this._timeScale
        }, c
    }, !0), _gsScope._gsDefine("TimelineMax", ["TimelineLite", "TweenLite", "easing.Ease"], function (e, o, t) {
        function i(t) {
            e.call(this, t), this._repeat = this.vars.repeat || 0, this._repeatDelay = this.vars.repeatDelay || 0, this._cycle = 0, this._yoyo = !0 === this.vars.yoyo, this._dirty = !0
        }

        var S = 1e-10,
            s = o._internals,
            k = s.lazyTweens,
            R = s.lazyRender,
            l = _gsScope._gsDefine.globals,
            h = new t(null, null, 1, 0),
            r = i.prototype = new e;
        return r.constructor = i, r.kill()._gc = !1, i.version = "1.20.3", r.invalidate = function () {
            return this._yoyo = !0 === this.vars.yoyo, this._repeat = this.vars.repeat || 0, this._repeatDelay = this.vars.repeatDelay || 0, this._uncache(!0), e.prototype.invalidate.call(this)
        }, r.addCallback = function (t, e, i, s) {
            return this.add(o.delayedCall(0, t, i, s), e)
        }, r.removeCallback = function (t, e) {
            if (t)
                if (null == e) this._kill(null, t);
                else
                    for (var i = this.getTweensOf(t, !1), s = i.length, r = this._parseTimeOrLabel(e); -1 < --s;) i[s]._startTime === r && i[s]._enabled(!1, !1);
            return this
        }, r.removePause = function (t) {
            return this.removeCallback(e._internals.pauseCallback, t)
        }, r.tweenTo = function (t, e) {
            e = e || {};
            var i, s, r, n = {ease: h, useFrames: this.usesFrames(), immediateRender: !1},
                a = e.repeat && l.TweenMax || o;
            for (s in e) n[s] = e[s];
            return n.time = this._parseTimeOrLabel(t), i = Math.abs(Number(n.time) - this._time) / this._timeScale || .001, r = new a(this, i, n), n.onStart = function () {
                r.target.paused(!0), r.vars.time !== r.target.time() && i === r.duration() && r.duration(Math.abs(r.vars.time - r.target.time()) / r.target._timeScale), e.onStart && e.onStart.apply(e.onStartScope || e.callbackScope || r, e.onStartParams || [])
            }, r
        }, r.tweenFromTo = function (t, e, i) {
            i = i || {}, t = this._parseTimeOrLabel(t), i.startAt = {
                onComplete: this.seek,
                onCompleteParams: [t],
                callbackScope: this
            }, i.immediateRender = !1 !== i.immediateRender;
            var s = this.tweenTo(e, i);
            return s.duration(Math.abs(s.vars.time - t) / this._timeScale || .001)
        }, r.render = function (t, e, i) {
            this._gc && this._enabled(!0, !1);
            var s, r, n, a, o, l, h, _, u = this._time,
                f = this._dirty ? this.totalDuration() : this._totalDuration,
                c = this._duration,
                p = this._totalTime,
                d = this._startTime,
                m = this._timeScale,
                g = this._rawPrevTime,
                y = this._paused,
                v = this._cycle;
            if (u !== this._time && (t += this._time - u), f - 1e-7 <= t && 0 <= t) this._locked || (this._totalTime = f, this._cycle = this._repeat), this._reversed || this._hasPausedChild() || (r = !0, a = "onComplete", o = !!this._timeline.autoRemoveChildren, 0 === this._duration && (t <= 0 && -1e-7 <= t || g < 0 || g === S) && g !== t && this._first && (o = !0, S < g && (a = "onReverseComplete"))), this._rawPrevTime = this._duration || !e || t || this._rawPrevTime === t ? t : S, this._yoyo && 0 != (1 & this._cycle) ? this._time = t = 0 : t = (this._time = c) + 1e-4;
            else if (t < 1e-7)
                if (this._locked || (this._totalTime = this._cycle = 0), ((this._time = 0) !== u || 0 === c && g !== S && (0 < g || t < 0 && 0 <= g) && !this._locked) && (a = "onReverseComplete", r = this._reversed), t < 0) this._active = !1, this._timeline.autoRemoveChildren && this._reversed ? (o = r = !0, a = "onReverseComplete") : 0 <= g && this._first && (o = !0), this._rawPrevTime = t;
                else {
                    if (this._rawPrevTime = c || !e || t || this._rawPrevTime === t ? t : S, 0 === t && r)
                        for (s = this._first; s && 0 === s._startTime;) s._duration || (r = !1), s = s._next;
                    t = 0, this._initted || (o = !0)
                }
            else if (0 === c && g < 0 && (o = !0), this._time = this._rawPrevTime = t, this._locked || (this._totalTime = t, 0 !== this._repeat && (l = c + this._repeatDelay, this._cycle = this._totalTime / l >> 0, 0 !== this._cycle && this._cycle === this._totalTime / l && p <= t && this._cycle--, this._time = this._totalTime - this._cycle * l, this._yoyo && 0 != (1 & this._cycle) && (this._time = c - this._time), this._time > c ? t = (this._time = c) + 1e-4 : this._time < 0 ? this._time = t = 0 : t = this._time)), this._hasPause && !this._forcingPlayhead && !e) {
                if (u <= (t = this._time) || this._repeat && v !== this._cycle)
                    for (s = this._first; s && s._startTime <= t && !h;) s._duration || "isPause" !== s.data || s.ratio || 0 === s._startTime && 0 === this._rawPrevTime || (h = s), s = s._next;
                else
                    for (s = this._last; s && s._startTime >= t && !h;) s._duration || "isPause" === s.data && 0 < s._rawPrevTime && (h = s), s = s._prev;
                h && h._startTime < c && (this._time = t = h._startTime, this._totalTime = t + this._cycle * (this._totalDuration + this._repeatDelay))
            }
            if (this._cycle !== v && !this._locked) {
                var T = this._yoyo && 0 != (1 & v),
                    x = T === (this._yoyo && 0 != (1 & this._cycle)),
                    b = this._totalTime,
                    w = this._cycle,
                    P = this._rawPrevTime,
                    O = this._time;
                if (this._totalTime = v * c, this._cycle < v ? T = !T : this._totalTime += c, this._time = u, this._rawPrevTime = 0 === c ? g - 1e-4 : g, this._cycle = v, this._locked = !0, u = T ? 0 : c, this.render(u, e, 0 === c), e || this._gc || this.vars.onRepeat && (this._cycle = w, this._locked = !1, this._callback("onRepeat")), u !== this._time) return;
                if (x && (this._cycle = v, this._locked = !0, u = T ? c + 1e-4 : -1e-4, this.render(u, !0, !1)), this._locked = !1, this._paused && !y) return;
                this._time = O, this._totalTime = b, this._cycle = w, this._rawPrevTime = P
            }
            if (this._time !== u && this._first || i || o || h) {
                if (this._initted || (this._initted = !0), this._active || !this._paused && this._totalTime !== p && 0 < t && (this._active = !0), 0 === p && this.vars.onStart && (0 === this._totalTime && this._totalDuration || e || this._callback("onStart")), u <= (_ = this._time))
                    for (s = this._first; s && (n = s._next, _ === this._time && (!this._paused || y));) (s._active || s._startTime <= this._time && !s._paused && !s._gc) && (h === s && this.pause(), s._reversed ? s.render((s._dirty ? s.totalDuration() : s._totalDuration) - (t - s._startTime) * s._timeScale, e, i) : s.render((t - s._startTime) * s._timeScale, e, i)), s = n;
                else
                    for (s = this._last; s && (n = s._prev, _ === this._time && (!this._paused || y));) {
                        if (s._active || s._startTime <= u && !s._paused && !s._gc) {
                            if (h === s) {
                                for (h = s._prev; h && h.endTime() > this._time;) h.render(h._reversed ? h.totalDuration() - (t - h._startTime) * h._timeScale : (t - h._startTime) * h._timeScale, e, i), h = h._prev;
                                h = null, this.pause()
                            }
                            s._reversed ? s.render((s._dirty ? s.totalDuration() : s._totalDuration) - (t - s._startTime) * s._timeScale, e, i) : s.render((t - s._startTime) * s._timeScale, e, i)
                        }
                        s = n
                    }
                this._onUpdate && (e || (k.length && R(), this._callback("onUpdate"))), a && (this._locked || this._gc || d !== this._startTime && m === this._timeScale || !(0 === this._time || f >= this.totalDuration()) || (r && (k.length && R(), this._timeline.autoRemoveChildren && this._enabled(!1, !1), this._active = !1), !e && this.vars[a] && this._callback(a)))
            } else p !== this._totalTime && this._onUpdate && (e || this._callback("onUpdate"))
        }, r.getActive = function (t, e, i) {
            null == t && (t = !0), null == e && (e = !0), null == i && (i = !1);
            var s, r, n = [],
                a = this.getChildren(t, e, i),
                o = 0,
                l = a.length;
            for (s = 0; s < l; s++) (r = a[s]).isActive() && (n[o++] = r);
            return n
        }, r.getLabelAfter = function (t) {
            t || 0 !== t && (t = this._time);
            var e, i = this.getLabelsArray(),
                s = i.length;
            for (e = 0; e < s; e++)
                if (i[e].time > t) return i[e].name;
            return null
        }, r.getLabelBefore = function (t) {
            null == t && (t = this._time);
            for (var e = this.getLabelsArray(), i = e.length; -1 < --i;)
                if (e[i].time < t) return e[i].name;
            return null
        }, r.getLabelsArray = function () {
            var t, e = [],
                i = 0;
            for (t in this._labels) e[i++] = {time: this._labels[t], name: t};
            return e.sort(function (t, e) {
                return t.time - e.time
            }), e
        }, r.invalidate = function () {
            return this._locked = !1, e.prototype.invalidate.call(this)
        }, r.progress = function (t, e) {
            return arguments.length ? this.totalTime(this.duration() * (this._yoyo && 0 != (1 & this._cycle) ? 1 - t : t) + this._cycle * (this._duration + this._repeatDelay), e) : this._time / this.duration() || 0
        }, r.totalProgress = function (t, e) {
            return arguments.length ? this.totalTime(this.totalDuration() * t, e) : this._totalTime / this.totalDuration() || 0
        }, r.totalDuration = function (t) {
            return arguments.length ? -1 !== this._repeat && t ? this.timeScale(this.totalDuration() / t) : this : (this._dirty && (e.prototype.totalDuration.call(this), this._totalDuration = -1 === this._repeat ? 999999999999 : this._duration * (this._repeat + 1) + this._repeatDelay * this._repeat), this._totalDuration)
        }, r.time = function (t, e) {
            return arguments.length ? (this._dirty && this.totalDuration(), t > this._duration && (t = this._duration), this._yoyo && 0 != (1 & this._cycle) ? t = this._duration - t + this._cycle * (this._duration + this._repeatDelay) : 0 !== this._repeat && (t += this._cycle * (this._duration + this._repeatDelay)), this.totalTime(t, e)) : this._time
        }, r.repeat = function (t) {
            return arguments.length ? (this._repeat = t, this._uncache(!0)) : this._repeat
        }, r.repeatDelay = function (t) {
            return arguments.length ? (this._repeatDelay = t, this._uncache(!0)) : this._repeatDelay
        }, r.yoyo = function (t) {
            return arguments.length ? (this._yoyo = t, this) : this._yoyo
        }, r.currentLabel = function (t) {
            return arguments.length ? this.seek(t, !0) : this.getLabelBefore(this._time + 1e-8)
        }, i
    }, !0), w = 180 / Math.PI, x = [], b = [], P = [], g = {}, i = _gsScope._gsDefine.globals, m = _gsScope._gsDefine.plugin({
        propName: "bezier",
        priority: -1,
        version: "1.3.8",
        API: 2,
        global: !0,
        init: function (t, e, i) {
            this._target = t, e instanceof Array && (e = {values: e}), this._func = {}, this._mod = {}, this._props = [], this._timeRes = null == e.timeResolution ? 6 : parseInt(e.timeResolution, 10);
            var s, r, n, a, o, l = e.values || [],
                h = {},
                _ = l[0],
                u = e.autoRotate || i.vars.orientToBezier;
            for (s in this._autoRotate = u ? u instanceof Array ? u : [
                ["x", "y", "rotation", !0 === u ? 0 : Number(u) || 0]
            ] : null, _) this._props.push(s);
            for (n = this._props.length; -1 < --n;) s = this._props[n], this._overwriteProps.push(s), r = this._func[s] = "function" == typeof t[s], h[s] = r ? t[s.indexOf("set") || "function" != typeof t["get" + s.substr(3)] ? s : "get" + s.substr(3)]() : parseFloat(t[s]), o || h[s] !== l[0][s] && (o = h);
            if (this._beziers = "cubic" !== e.type && "quadratic" !== e.type && "soft" !== e.type ? c(l, isNaN(e.curviness) ? 1 : e.curviness, !1, "thruBasic" === e.type, e.correlate, o) : function (t, e, i) {
                var s, r, n, a, o, l, h, _, u, f, c, p = {},
                    d = "cubic" === (e = e || "soft") ? 3 : 2,
                    m = "soft" === e,
                    g = [];
                if (m && i && (t = [i].concat(t)), null == t || t.length < 1 + d) throw "invalid Bezier data";
                for (u in t[0]) g.push(u);
                for (l = g.length; -1 < --l;) {
                    for (p[u = g[l]] = o = [], f = 0, _ = t.length, h = 0; h < _; h++) s = null == i ? t[h][u] : "string" == typeof (c = t[h][u]) && "=" === c.charAt(1) ? i[u] + Number(c.charAt(0) + c.substr(2)) : Number(c), m && 1 < h && h < _ - 1 && (o[f++] = (s + o[f - 2]) / 2), o[f++] = s;
                    for (_ = f - d + 1, h = f = 0; h < _; h += d) s = o[h], r = o[h + 1], n = o[h + 2], a = 2 == d ? 0 : o[h + 3], o[f++] = c = 3 == d ? new y(s, r, n, a) : new y(s, (2 * r + s) / 3, (2 * r + n) / 3, n);
                    o.length = f
                }
                return p
            }(l, e.type, h), this._segCount = this._beziers[s].length, this._timeRes) {
                var f = function (t, e) {
                    var i, s, r, n, a = [],
                        o = [],
                        l = 0,
                        h = 0,
                        _ = (e = e >> 0 || 6) - 1,
                        u = [],
                        f = [];
                    for (i in t) p(t[i], a, e);
                    for (r = a.length, s = 0; s < r; s++) l += Math.sqrt(a[s]), f[n = s % e] = l, n === _ && (h += l, u[n = s / e >> 0] = f, o[n] = h, l = 0, f = []);
                    return {length: h, lengths: o, segments: u}
                }(this._beziers, this._timeRes);
                this._length = f.length, this._lengths = f.lengths, this._segments = f.segments, this._l1 = this._li = this._s1 = this._si = 0, this._l2 = this._lengths[0], this._curSeg = this._segments[0], this._s2 = this._curSeg[0], this._prec = 1 / this._curSeg.length
            }
            if (u = this._autoRotate)
                for (this._initialRotations = [], u[0] instanceof Array || (this._autoRotate = u = [u]), n = u.length; -1 < --n;) {
                    for (a = 0; a < 3; a++) s = u[n][a], this._func[s] = "function" == typeof t[s] && t[s.indexOf("set") || "function" != typeof t["get" + s.substr(3)] ? s : "get" + s.substr(3)];
                    s = u[n][2], this._initialRotations[n] = (this._func[s] ? this._func[s].call(this._target) : this._target[s]) || 0, this._overwriteProps.push(s)
                }
            return this._startRatio = i.vars.runBackwards ? 1 : 0, !0
        },
        set: function (t) {
            var e, i, s, r, n, a, o, l, h, _, u = this._segCount,
                f = this._func,
                c = this._target,
                p = t !== this._startRatio;
            if (this._timeRes) {
                if (h = this._lengths, _ = this._curSeg, t *= this._length, s = this._li, t > this._l2 && s < u - 1) {
                    for (l = u - 1; s < l && (this._l2 = h[++s]) <= t;) ;
                    this._l1 = h[s - 1], this._li = s, this._curSeg = _ = this._segments[s], this._s2 = _[this._s1 = this._si = 0]
                } else if (t < this._l1 && 0 < s) {
                    for (; 0 < s && (this._l1 = h[--s]) >= t;) ;
                    0 === s && t < this._l1 ? this._l1 = 0 : s++, this._l2 = h[s], this._li = s, this._curSeg = _ = this._segments[s], this._s1 = _[(this._si = _.length - 1) - 1] || 0, this._s2 = _[this._si]
                }
                if (e = s, t -= this._l1, s = this._si, t > this._s2 && s < _.length - 1) {
                    for (l = _.length - 1; s < l && (this._s2 = _[++s]) <= t;) ;
                    this._s1 = _[s - 1], this._si = s
                } else if (t < this._s1 && 0 < s) {
                    for (; 0 < s && (this._s1 = _[--s]) >= t;) ;
                    0 === s && t < this._s1 ? this._s1 = 0 : s++, this._s2 = _[s], this._si = s
                }
                a = (s + (t - this._s1) / (this._s2 - this._s1)) * this._prec || 0
            } else a = (t - (e = t < 0 ? 0 : 1 <= t ? u - 1 : u * t >> 0) * (1 / u)) * u;
            for (i = 1 - a, s = this._props.length; -1 < --s;) r = this._props[s], o = (a * a * (n = this._beziers[r][e]).da + 3 * i * (a * n.ca + i * n.ba)) * a + n.a, this._mod[r] && (o = this._mod[r](o, c)), f[r] ? c[r](o) : c[r] = o;
            if (this._autoRotate) {
                var d, m, g, y, v, T, x, b = this._autoRotate;
                for (s = b.length; -1 < --s;) r = b[s][2], T = b[s][3] || 0, x = !0 === b[s][4] ? 1 : w, n = this._beziers[b[s][0]], d = this._beziers[b[s][1]], n && d && (n = n[e], d = d[e], m = n.a + (n.b - n.a) * a, m += ((y = n.b + (n.c - n.b) * a) - m) * a, y += (n.c + (n.d - n.c) * a - y) * a, g = d.a + (d.b - d.a) * a, g += ((v = d.b + (d.c - d.b) * a) - g) * a, v += (d.c + (d.d - d.c) * a - v) * a, o = p ? Math.atan2(v - g, y - m) * x + T : this._initialRotations[s], this._mod[r] && (o = this._mod[r](o, c)), f[r] ? c[r](o) : c[r] = o)
            }
        }
    }), s = m.prototype, m.bezierThrough = c, m.cubicToQuadratic = O, m._autoCSS = !0, m.quadraticToCubic = function (t, e, i) {
        return new y(t, (2 * e + t) / 3, (2 * e + i) / 3, i)
    }, m._cssRegister = function () {
        var t = i.CSSPlugin;
        if (t) {
            var e = t._internals,
                c = e._parseToProxy,
                p = e._setPluginRatio,
                d = e.CSSPropTween;
            e._registerComplexSpecialProp("bezier", {
                parser: function (t, e, i, s, r, n) {
                    e instanceof Array && (e = {values: e}), n = new m;
                    var a, o, l, h = e.values,
                        _ = h.length - 1,
                        u = [],
                        f = {};
                    if (_ < 0) return r;
                    for (a = 0; a <= _; a++) l = c(t, h[a], s, r, n, _ !== a), u[a] = l.end;
                    for (o in e) f[o] = e[o];
                    return f.values = u, (r = new d(t, "bezier", 0, 0, l.pt, 2)).data = l, r.plugin = n, r.setRatio = p, 0 === f.autoRotate && (f.autoRotate = !0), !f.autoRotate || f.autoRotate instanceof Array || (a = !0 === f.autoRotate ? 0 : Number(f.autoRotate), f.autoRotate = null != l.end.left ? [
                        ["left", "top", "rotation", a, !1]
                    ] : null != l.end.x && [
                        ["x", "y", "rotation", a, !1]
                    ]), f.autoRotate && (s._transform || s._enableTransforms(!1), l.autoRotate = s._target._gsTransform, l.proxy.rotation = l.autoRotate.rotation || 0, s._overwriteProps.push("rotation")), n._onInitTween(l.proxy, f, s._tween), r
                }
            })
        }
    }, s._mod = function (t) {
        for (var e, i = this._overwriteProps, s = i.length; -1 < --s;) (e = t[i[s]]) && "function" == typeof e && (this._mod[i[s]] = e)
    }, s._kill = function (t) {
        var e, i, s = this._props;
        for (e in this._beziers)
            if (e in t)
                for (delete this._beziers[e], delete this._func[e], i = s.length; -1 < --i;) s[i] === e && s.splice(i, 1);
        if (s = this._autoRotate)
            for (i = s.length; -1 < --i;) t[s[i][2]] && s.splice(i, 1);
        return this._super._kill.call(this, t)
    }, _gsScope._gsDefine("plugins.CSSPlugin", ["plugins.TweenPlugin", "TweenLite"], function (n, B) {
        var p, P, S, d, Y = function () {
                n.call(this, "css"), this._overwriteProps.length = 0, this.setRatio = Y.prototype.setRatio
            },
            h = _gsScope._gsDefine.globals,
            m = {},
            t = Y.prototype = new n("css");
        (t.constructor = Y).version = "1.20.3", Y.API = 2, Y.defaultTransformPerspective = 0, Y.defaultSkewType = "compensated", Y.defaultSmoothOrigin = !0, t = "px", Y.suffixMap = {
            top: t,
            right: t,
            bottom: t,
            left: t,
            width: t,
            height: t,
            fontSize: t,
            padding: t,
            margin: t,
            perspective: t,
            lineHeight: ""
        };

        function a(t, e) {
            return e.toUpperCase()
        }

        function o(t, e) {
            return tt.createElementNS ? tt.createElementNS(e || "http://www.w3.org/1999/xhtml", t) : tt.createElement(t)
        }

        function l(t) {
            return N.test("string" == typeof t ? t : (t.currentStyle ? t.currentStyle.filter : t.style.filter) || "") ? parseFloat(RegExp.$1) / 100 : 1
        }

        function g(t) {
            _gsScope.console && console.log(t)
        }

        function O(t, e) {
            var i, s, r = (e = e || et).style;
            if (void 0 !== r[t]) return t;
            for (t = t.charAt(0).toUpperCase() + t.substr(1), i = ["O", "Moz", "ms", "Ms", "Webkit"], s = 5; -1 < --s && void 0 === r[i[s] + t];) ;
            return 0 <= s ? (at = "-" + (ot = 3 === s ? "ms" : i[s]).toLowerCase() + "-", ot + t) : null
        }

        function y(t, e) {
            var i, s, r, n = {};
            if (e = e || lt(t, null))
                if (i = e.length)
                    for (; -1 < --i;) -1 !== (r = e[i]).indexOf("-transform") && Nt !== r || (n[r.replace(V, a)] = e.getPropertyValue(r));
                else
                    for (i in e) -1 !== i.indexOf("Transform") && Xt !== i || (n[i] = e[i]);
            else if (e = t.currentStyle || t.style)
                for (i in e) "string" == typeof i && void 0 === n[i] && (n[i.replace(V, a)] = e[i]);
            return nt || (n.opacity = l(t)), s = Ht(t, e, !1), n.rotation = s.rotation, n.skewX = s.skewX, n.scaleX = s.scaleX, n.scaleY = s.scaleY, n.x = s.x, n.y = s.y, Bt && (n.z = s.z, n.rotationX = s.rotationX, n.rotationY = s.rotationY, n.scaleZ = s.scaleZ), n.filters && delete n.filters, n
        }

        function v(t, e, i, s, r) {
            var n, a, o, l = {},
                h = t.style;
            for (a in i) "cssText" !== a && "length" !== a && isNaN(a) && (e[a] !== (n = i[a]) || r && r[a]) && -1 === a.indexOf("Origin") && ("number" == typeof n || "string" == typeof n) && (l[a] = "auto" !== n || "left" !== a && "top" !== a ? "" !== n && "auto" !== n && "none" !== n || "string" != typeof e[a] || "" === e[a].replace(_, "") ? n : 0 : ut(t, a), void 0 !== h[a] && (o = new xt(h, a, h[a], o)));
            if (s)
                for (a in s) "className" !== a && (l[a] = s[a]);
            return {difs: l, firstMPT: o}
        }

        function T(t, e, i) {
            if ("svg" === (t.nodeName + "").toLowerCase()) return (i || lt(t))[e] || 0;
            if (t.getCTM && Wt(t)) return t.getBBox()[e] || 0;
            var s = parseFloat("width" === e ? t.offsetWidth : t.offsetHeight),
                r = ft[e],
                n = r.length;
            for (i = i || lt(t, null); -1 < --n;) s -= parseFloat(ht(t, "padding" + r[n], i, !0)) || 0, s -= parseFloat(ht(t, "border" + r[n] + "Width", i, !0)) || 0;
            return s
        }

        function k(t, e) {
            return "function" == typeof t && (t = t(F, M)), "string" == typeof t && "=" === t.charAt(1) ? parseInt(t.charAt(0) + "1", 10) * parseFloat(t.substr(2)) : parseFloat(t) - parseFloat(e) || 0
        }

        function R(t, e) {
            return "function" == typeof t && (t = t(F, M)), null == t ? e : "string" == typeof t && "=" === t.charAt(1) ? parseInt(t.charAt(0) + "1", 10) * parseFloat(t.substr(2)) + e : parseFloat(t) || 0
        }

        function A(t, e, i, s) {
            var r, n, a, o, l;
            return "function" == typeof t && (t = t(F, M)), (o = null == t ? e : "number" == typeof t ? t : (r = 360, n = t.split("_"), a = ((l = "=" === t.charAt(1)) ? parseInt(t.charAt(0) + "1", 10) * parseFloat(n[0].substr(2)) : parseFloat(n[0])) * (-1 === t.indexOf("rad") ? 1 : K) - (l ? 0 : e), n.length && (s && (s[i] = e + a), -1 !== t.indexOf("short") && ((a %= r) !== a % 180 && (a = a < 0 ? a + r : a - r)), -1 !== t.indexOf("_cw") && a < 0 ? a = (a + 3599999999640) % r - (a / r | 0) * r : -1 !== t.indexOf("ccw") && 0 < a && (a = (a - 3599999999640) % r - (a / r | 0) * r)), e + a)) < 1e-6 && -1e-6 < o && (o = 0), o
        }

        function c(t, e, i) {
            return 255 * (6 * (t = t < 0 ? t + 1 : 1 < t ? t - 1 : t) < 1 ? e + (i - e) * t * 6 : t < .5 ? i : 3 * t < 2 ? e + (i - e) * (2 / 3 - t) * 6 : e) + .5 | 0
        }

        function s(t, e) {
            var i, s, r, n = t.match(gt) || [],
                a = 0,
                o = "";
            if (!n.length) return t;
            for (i = 0; i < n.length; i++) s = n[i], a += (r = t.substr(a, t.indexOf(s, a) - a)).length + s.length, 3 === (s = mt(s, e)).length && s.push(1), o += r + (e ? "hsla(" + s[0] + "," + s[1] + "%," + s[2] + "%," + s[3] : "rgba(" + s.join(",")) + ")";
            return o + t.substr(a)
        }

        var C, x, b, j, w, D, M, F, e, i, z = /(?:\-|\.|\b)(\d|\.|e\-)+/g,
            E = /(?:\d|\-\d|\.\d|\-\.\d|\+=\d|\-=\d|\+=.\d|\-=\.\d)+/g,
            I = /(?:\+=|\-=|\-|\b)[\d\-\.]+[a-zA-Z0-9]*(?:%|\b)/gi,
            _ = /(?![+-]?\d*\.?\d+|[+-]|e[+-]\d+)[^0-9]/g,
            X = /(?:\d|\-|\+|=|#|\.)*/g,
            N = /opacity *= *([^)]*)/i,
            L = /opacity:([^;]*)/i,
            u = /alpha\(opacity *=.+?\)/i,
            U = /^(rgb|hsl)/,
            f = /([A-Z])/g,
            V = /-([a-z])/gi,
            q = /(^(?:url\(\"|url\())|(?:(\"\))$|\)$)/gi,
            W = /(?:Left|Right|Width)/i,
            G = /(M11|M12|M21|M22)=[\d\-\.e]+/gi,
            Z = /progid\:DXImageTransform\.Microsoft\.Matrix\(.+?\)/i,
            H = /,(?=[^\)]*(?:\(|$))/gi,
            $ = /[\s,\(]/i,
            Q = Math.PI / 180,
            K = 180 / Math.PI,
            J = {},
            r = {style: {}},
            tt = _gsScope.document || {
                createElement: function () {
                    return r
                }
            },
            et = o("div"),
            it = o("img"),
            st = Y._internals = {_specialProps: m},
            rt = (_gsScope.navigator || {}).userAgent || "",
            nt = (e = rt.indexOf("Android"), i = o("a"), b = -1 !== rt.indexOf("Safari") && -1 === rt.indexOf("Chrome") && (-1 === e || 3 < parseFloat(rt.substr(e + 8, 2))), w = b && parseFloat(rt.substr(rt.indexOf("Version/") + 8, 2)) < 6, j = -1 !== rt.indexOf("Firefox"), (/MSIE ([0-9]{1,}[\.0-9]{0,})/.exec(rt) || /Trident\/.*rv:([0-9]{1,}[\.0-9]{0,})/.exec(rt)) && (D = parseFloat(RegExp.$1)), !!i && (i.style.cssText = "top:1px;opacity:.55;", /^0.55/.test(i.style.opacity))),
            at = "",
            ot = "",
            lt = tt.defaultView ? tt.defaultView.getComputedStyle : function () {
            },
            ht = Y.getStyle = function (t, e, i, s, r) {
                var n;
                return nt || "opacity" !== e ? (!s && t.style[e] ? n = t.style[e] : (i = i || lt(t)) ? n = i[e] || i.getPropertyValue(e) || i.getPropertyValue(e.replace(f, "-$1").toLowerCase()) : t.currentStyle && (n = t.currentStyle[e]), null == r || n && "none" !== n && "auto" !== n && "auto auto" !== n ? n : r) : l(t)
            },
            _t = st.convertToPixels = function (t, e, i, s, r) {
                if ("px" === s || !s && "lineHeight" !== e) return i;
                if ("auto" === s || !i) return 0;
                var n, a, o, l = W.test(e),
                    h = t,
                    _ = et.style,
                    u = i < 0,
                    f = 1 === i;
                if (u && (i = -i), f && (i *= 100), "lineHeight" !== e || s)
                    if ("%" === s && -1 !== e.indexOf("border")) n = i / 100 * (l ? t.clientWidth : t.clientHeight);
                    else {
                        if (_.cssText = "border:0 solid red;position:" + ht(t, "position") + ";line-height:0;", "%" !== s && h.appendChild && "v" !== s.charAt(0) && "rem" !== s) _[l ? "borderLeftWidth" : "borderTopWidth"] = i + s;
                        else {
                            if (h = t.parentNode || tt.body, -1 !== ht(h, "display").indexOf("flex") && (_.position = "absolute"), a = h._gsCache, o = B.ticker.frame, a && l && a.time === o) return a.width * i / 100;
                            _[l ? "width" : "height"] = i + s
                        }
                        h.appendChild(et), n = parseFloat(et[l ? "offsetWidth" : "offsetHeight"]), h.removeChild(et), l && "%" === s && !1 !== Y.cacheWidths && ((a = h._gsCache = h._gsCache || {}).time = o, a.width = n / i * 100), 0 !== n || r || (n = _t(t, e, i, s, !0))
                    }
                else a = lt(t).lineHeight, t.style.lineHeight = i, n = parseFloat(lt(t).lineHeight), t.style.lineHeight = a;
                return f && (n /= 100), u ? -n : n
            },
            ut = st.calculateOffset = function (t, e, i) {
                if ("absolute" !== ht(t, "position", i)) return 0;
                var s = "left" === e ? "Left" : "Top",
                    r = ht(t, "margin" + s, i);
                return t["offset" + s] - (_t(t, e, parseFloat(r), r.replace(X, "")) || 0)
            },
            ft = {width: ["Left", "Right"], height: ["Top", "Bottom"]},
            ct = ["marginLeft", "marginRight", "marginTop", "marginBottom"],
            pt = function (t, e) {
                if ("contain" === t || "auto" === t || "auto auto" === t) return t + " ";
                null != t && "" !== t || (t = "0 0");
                var i, s = t.split(" "),
                    r = -1 !== t.indexOf("left") ? "0%" : -1 !== t.indexOf("right") ? "100%" : s[0],
                    n = -1 !== t.indexOf("top") ? "0%" : -1 !== t.indexOf("bottom") ? "100%" : s[1];
                if (3 < s.length && !e) {
                    for (s = t.split(", ").join(",").split(","), t = [], i = 0; i < s.length; i++) t.push(pt(s[i]));
                    return t.join(",")
                }
                return null == n ? n = "center" === r ? "50%" : "0" : "center" === n && (n = "50%"), ("center" === r || isNaN(parseFloat(r)) && -1 === (r + "").indexOf("=")) && (r = "50%"), t = r + " " + n + (2 < s.length ? " " + s[2] : ""), e && (e.oxp = -1 !== r.indexOf("%"), e.oyp = -1 !== n.indexOf("%"), e.oxr = "=" === r.charAt(1), e.oyr = "=" === n.charAt(1), e.ox = parseFloat(r.replace(_, "")), e.oy = parseFloat(n.replace(_, "")), e.v = t), e || t
            },
            dt = {
                aqua: [0, 255, 255],
                lime: [0, 255, 0],
                silver: [192, 192, 192],
                black: [0, 0, 0],
                maroon: [128, 0, 0],
                teal: [0, 128, 128],
                blue: [0, 0, 255],
                navy: [0, 0, 128],
                white: [255, 255, 255],
                fuchsia: [255, 0, 255],
                olive: [128, 128, 0],
                yellow: [255, 255, 0],
                orange: [255, 165, 0],
                gray: [128, 128, 128],
                purple: [128, 0, 128],
                green: [0, 128, 0],
                red: [255, 0, 0],
                pink: [255, 192, 203],
                cyan: [0, 255, 255],
                transparent: [255, 255, 255, 0]
            },
            mt = Y.parseColor = function (t, e) {
                var i, s, r, n, a, o, l, h, _, u, f;
                if (t)
                    if ("number" == typeof t) i = [t >> 16, t >> 8 & 255, 255 & t];
                    else {
                        if ("," === t.charAt(t.length - 1) && (t = t.substr(0, t.length - 1)), dt[t]) i = dt[t];
                        else if ("#" === t.charAt(0)) 4 === t.length && (t = "#" + (s = t.charAt(1)) + s + (r = t.charAt(2)) + r + (n = t.charAt(3)) + n), i = [(t = parseInt(t.substr(1), 16)) >> 16, t >> 8 & 255, 255 & t];
                        else if ("hsl" === t.substr(0, 3))
                            if (i = f = t.match(z), e) {
                                if (-1 !== t.indexOf("=")) return t.match(E)
                            } else a = Number(i[0]) % 360 / 360, o = Number(i[1]) / 100, s = 2 * (l = Number(i[2]) / 100) - (r = l <= .5 ? l * (o + 1) : l + o - l * o), 3 < i.length && (i[3] = Number(i[3])), i[0] = c(a + 1 / 3, s, r), i[1] = c(a, s, r), i[2] = c(a - 1 / 3, s, r);
                        else i = t.match(z) || dt.transparent;
                        i[0] = Number(i[0]), i[1] = Number(i[1]), i[2] = Number(i[2]), 3 < i.length && (i[3] = Number(i[3]))
                    }
                else i = dt.black;
                return e && !f && (s = i[0] / 255, r = i[1] / 255, n = i[2] / 255, l = ((h = Math.max(s, r, n)) + (_ = Math.min(s, r, n))) / 2, h === _ ? a = o = 0 : (u = h - _, o = .5 < l ? u / (2 - h - _) : u / (h + _), a = h === s ? (r - n) / u + (r < n ? 6 : 0) : h === r ? (n - s) / u + 2 : (s - r) / u + 4, a *= 60), i[0] = a + .5 | 0, i[1] = 100 * o + .5 | 0, i[2] = 100 * l + .5 | 0), i
            },
            gt = "(?:\\b(?:(?:rgb|rgba|hsl|hsla)\\(.+?\\))|\\B#(?:[0-9a-f]{3}){1,2}\\b";
        for (t in dt) gt += "|" + t + "\\b";
        gt = new RegExp(gt + ")", "gi"), Y.colorStringFilter = function (t) {
            var e, i = t[0] + " " + t[1];
            gt.test(i) && (e = -1 !== i.indexOf("hsl(") || -1 !== i.indexOf("hsla("), t[0] = s(t[0], e), t[1] = s(t[1], e)), gt.lastIndex = 0
        }, B.defaultStringFilter || (B.defaultStringFilter = Y.colorStringFilter);

        function yt(t, e, n, a) {
            if (null == t) return function (t) {
                return t
            };
            var o, l = e ? (t.match(gt) || [""])[0] : "",
                h = t.split(l).join("").match(I) || [],
                _ = t.substr(0, t.indexOf(h[0])),
                u = ")" === t.charAt(t.length - 1) ? ")" : "",
                f = -1 !== t.indexOf(" ") ? " " : ",",
                c = h.length,
                p = 0 < c ? h[0].replace(z, "") : "";
            return c ? o = e ? function (t) {
                var e, i, s, r;
                if ("number" == typeof t) t += p;
                else if (a && H.test(t)) {
                    for (r = t.replace(H, "|").split("|"), s = 0; s < r.length; s++) r[s] = o(r[s]);
                    return r.join(",")
                }
                if (e = (t.match(gt) || [l])[0], s = (i = t.split(e).join("").match(I) || []).length, c > s--)
                    for (; ++s < c;) i[s] = n ? i[(s - 1) / 2 | 0] : h[s];
                return _ + i.join(f) + f + e + u + (-1 !== t.indexOf("inset") ? " inset" : "")
            } : function (t) {
                var e, i, s;
                if ("number" == typeof t) t += p;
                else if (a && H.test(t)) {
                    for (i = t.replace(H, "|").split("|"), s = 0; s < i.length; s++) i[s] = o(i[s]);
                    return i.join(",")
                }
                if (s = (e = t.match(I) || []).length, c > s--)
                    for (; ++s < c;) e[s] = n ? e[(s - 1) / 2 | 0] : h[s];
                return _ + e.join(f) + u
            } : function (t) {
                return t
            }
        }

        function vt(h) {
            return h = h.split(","),
                function (t, e, i, s, r, n, a) {
                    var o, l = (e + "").split(" ");
                    for (a = {}, o = 0; o < 4; o++) a[h[o]] = l[o] = l[o] || l[(o - 1) / 2 >> 0];
                    return s.parse(t, a, r, n)
                }
        }

        function Tt(t, e, i, s, r, n) {
            var a = new bt(t, e, i, s - i, r, -1, n);
            return a.b = i, a.e = a.xs0 = s, a
        }

        var xt = (st._setPluginRatio = function (t) {
                this.plugin.setRatio(t);
                for (var e, i, s, r, n, a = this.data, o = a.proxy, l = a.firstMPT; l;) e = o[l.v], l.r ? e = Math.round(e) : e < 1e-6 && -1e-6 < e && (e = 0), l.t[l.p] = e, l = l._next;
                if (a.autoRotate && (a.autoRotate.rotation = a.mod ? a.mod(o.rotation, this.t) : o.rotation), 1 === t || 0 === t)
                    for (l = a.firstMPT, n = 1 === t ? "e" : "b"; l;) {
                        if ((i = l.t).type) {
                            if (1 === i.type) {
                                for (r = i.xs0 + i.s + i.xs1, s = 1; s < i.l; s++) r += i["xn" + s] + i["xs" + (s + 1)];
                                i[n] = r
                            }
                        } else i[n] = i.s + i.xs0;
                        l = l._next
                    }
            }, function (t, e, i, s, r) {
                this.t = t, this.p = e, this.v = i, this.r = r, s && ((s._prev = this)._next = s)
            }),
            bt = (st._parseToProxy = function (t, e, i, s, r, n) {
                var a, o, l, h, _, u = s,
                    f = {},
                    c = {},
                    p = i._transform,
                    d = J;
                for (i._transform = null, J = e, s = _ = i.parse(t, e, s, r), J = d, n && (i._transform = p, u && (u._prev = null, u._prev && (u._prev._next = null))); s && s !== u;) {
                    if (s.type <= 1 && (c[o = s.p] = s.s + s.c, f[o] = s.s, n || (h = new xt(s, "s", o, h, s.r), s.c = 0), 1 === s.type))
                        for (a = s.l; 0 < --a;) l = "xn" + a, c[o = s.p + "_" + l] = s.data[l], f[o] = s[l], n || (h = new xt(s, l, o, h, s.rxp[l]));
                    s = s._next
                }
                return {proxy: f, end: c, firstMPT: h, pt: _}
            }, st.CSSPropTween = function (t, e, i, s, r, n, a, o, l, h, _) {
                this.t = t, this.p = e, this.s = i, this.c = s, this.n = a || e, t instanceof bt || d.push(this.n), this.r = o, this.type = n || 0, l && (this.pr = l, p = !0), this.b = void 0 === h ? i : h, this.e = void 0 === _ ? i + s : _, r && ((this._next = r)._prev = this)
            }),
            wt = Y.parseComplex = function (t, e, i, s, r, n, a, o, l, h) {
                i = i || n || "", "function" == typeof s && (s = s(F, M)), a = new bt(t, e, 0, 0, a, h ? 2 : 1, null, !1, o, i, s), s += "", r && gt.test(s + i) && (s = [i, s], Y.colorStringFilter(s), i = s[0], s = s[1]);
                var _, u, f, c, p, d, m, g, y, v, T, x, b, w = i.split(", ").join(",").split(" "),
                    P = s.split(", ").join(",").split(" "),
                    O = w.length,
                    S = !1 !== C;
                for (-1 === s.indexOf(",") && -1 === i.indexOf(",") || (P = -1 !== (s + i).indexOf("rgb") || -1 !== (s + i).indexOf("hsl") ? (w = w.join(" ").replace(H, ", ").split(" "), P.join(" ").replace(H, ", ").split(" ")) : (w = w.join(" ").split(",").join(", ").split(" "), P.join(" ").split(",").join(", ").split(" ")), O = w.length), O !== P.length && (O = (w = (n || "").split(" ")).length), a.plugin = l, a.setRatio = h, _ = gt.lastIndex = 0; _ < O; _++)
                    if (c = w[_], p = P[_], (g = parseFloat(c)) || 0 === g) a.appendXtra("", g, k(p, g), p.replace(E, ""), S && -1 !== p.indexOf("px"), !0);
                    else if (r && gt.test(c)) x = ")" + ((x = p.indexOf(")") + 1) ? p.substr(x) : ""), b = -1 !== p.indexOf("hsl") && nt, v = p, c = mt(c, b), p = mt(p, b), (y = 6 < c.length + p.length) && !nt && 0 === p[3] ? (a["xs" + a.l] += a.l ? " transparent" : "transparent", a.e = a.e.split(P[_]).join("transparent")) : (nt || (y = !1), b ? a.appendXtra(v.substr(0, v.indexOf("hsl")) + (y ? "hsla(" : "hsl("), c[0], k(p[0], c[0]), ",", !1, !0).appendXtra("", c[1], k(p[1], c[1]), "%,", !1).appendXtra("", c[2], k(p[2], c[2]), y ? "%," : "%" + x, !1) : a.appendXtra(v.substr(0, v.indexOf("rgb")) + (y ? "rgba(" : "rgb("), c[0], p[0] - c[0], ",", !0, !0).appendXtra("", c[1], p[1] - c[1], ",", !0).appendXtra("", c[2], p[2] - c[2], y ? "," : x, !0), y && (c = c.length < 4 ? 1 : c[3], a.appendXtra("", c, (p.length < 4 ? 1 : p[3]) - c, x, !1))), gt.lastIndex = 0;
                    else if (d = c.match(z)) {
                        if (!(m = p.match(E)) || m.length !== d.length) return a;
                        for (u = f = 0; u < d.length; u++) T = d[u], v = c.indexOf(T, f), a.appendXtra(c.substr(f, v - f), Number(T), k(m[u], T), "", S && "px" === c.substr(v + T.length, 2), 0 === u), f = v + T.length;
                        a["xs" + a.l] += c.substr(f)
                    } else a["xs" + a.l] += a.l || a["xs" + a.l] ? " " + p : p;
                if (-1 !== s.indexOf("=") && a.data) {
                    for (x = a.xs0 + a.data.s, _ = 1; _ < a.l; _++) x += a["xs" + _] + a.data["xn" + _];
                    a.e = x + a["xs" + _]
                }
                return a.l || (a.type = -1, a.xs0 = a.e), a.xfirst || a
            },
            Pt = 9;
        for ((t = bt.prototype).l = t.pr = 0; 0 < --Pt;) t["xn" + Pt] = 0, t["xs" + Pt] = "";
        t.xs0 = "", t._next = t._prev = t.xfirst = t.data = t.plugin = t.setRatio = t.rxp = null, t.appendXtra = function (t, e, i, s, r, n) {
            var a = this,
                o = a.l;
            return a["xs" + o] += n && (o || a["xs" + o]) ? " " + t : t || "", i || 0 === o || a.plugin ? (a.l++, a.type = a.setRatio ? 2 : 1, a["xs" + a.l] = s || "", 0 < o ? (a.data["xn" + o] = e + i, a.rxp["xn" + o] = r, a["xn" + o] = e, a.plugin || (a.xfirst = new bt(a, "xn" + o, e, i, a.xfirst || a, 0, a.n, r, a.pr), a.xfirst.xs0 = 0)) : (a.data = {s: e + i}, a.rxp = {}, a.s = e, a.c = i, a.r = r)) : a["xs" + o] += e + (s || ""), a
        };

        function Ot(t, e) {
            e = e || {}, this.p = e.prefix && O(t) || t, m[t] = m[this.p] = this, this.format = e.formatter || yt(e.defaultValue, e.color, e.collapsible, e.multi), e.parser && (this.parse = e.parser), this.clrs = e.color, this.multi = e.multi, this.keyword = e.keyword, this.dflt = e.defaultValue, this.pr = e.priority || 0
        }

        var St = st._registerComplexSpecialProp = function (t, e, i) {
                "object" != typeof e && (e = {parser: i});
                var s, r = t.split(","),
                    n = e.defaultValue;
                for (i = i || [n], s = 0; s < r.length; s++) e.prefix = 0 === s && e.prefix, e.defaultValue = i[s] || n, new Ot(r[s], e)
            },
            kt = st._registerPluginProp = function (t) {
                if (!m[t]) {
                    var l = t.charAt(0).toUpperCase() + t.substr(1) + "Plugin";
                    St(t, {
                        parser: function (t, e, i, s, r, n, a) {
                            var o = h.com.greensock.plugins[l];
                            return o ? (o._cssRegister(), m[i].parse(t, e, i, s, r, n, a)) : (g("Error: " + l + " js file not loaded."), r)
                        }
                    })
                }
            };
        (t = Ot.prototype).parseComplex = function (t, e, i, s, r, n) {
            var a, o, l, h, _, u, f = this.keyword;
            if (this.multi && (H.test(i) || H.test(e) ? (o = e.replace(H, "|").split("|"), l = i.replace(H, "|").split("|")) : f && (o = [e], l = [i])), l) {
                for (h = l.length > o.length ? l.length : o.length, a = 0; a < h; a++) e = o[a] = o[a] || this.dflt, i = l[a] = l[a] || this.dflt, f && ((_ = e.indexOf(f)) !== (u = i.indexOf(f)) && (-1 === u ? o[a] = o[a].split(f).join("") : -1 === _ && (o[a] += " " + f)));
                e = o.join(", "), i = l.join(", ")
            }
            return wt(t, this.p, e, i, this.clrs, this.dflt, s, this.pr, r, n)
        }, t.parse = function (t, e, i, s, r, n, a) {
            return this.parseComplex(t.style, this.format(ht(t, this.p, S, !1, this.dflt)), this.format(e), r, n)
        }, Y.registerSpecialProp = function (t, l, h) {
            St(t, {
                parser: function (t, e, i, s, r, n, a) {
                    var o = new bt(t, i, 0, 0, r, 2, i, !1, h);
                    return o.plugin = n, o.setRatio = l(t, e, s._tween, i), o
                },
                priority: h
            })
        }, Y.useSVGTransformAttr = !0;

        function Rt(t, e, i) {
            var s, r = tt.createElementNS("http://www.w3.org/2000/svg", t),
                n = /([a-z])([A-Z])/g;
            for (s in i) r.setAttributeNS(null, s.replace(n, "$1-$2").toLowerCase(), i[s]);
            return e.appendChild(r), r
        }

        function At(t, e, i, s, r, n) {
            var a, o, l, h, _, u, f, c, p, d, m, g, y, v, T = t._gsTransform,
                x = Zt(t, !0);
            T && (y = T.xOrigin, v = T.yOrigin), (!s || (a = s.split(" ")).length < 2) && (0 === (f = t.getBBox()).x && 0 === f.y && f.width + f.height === 0 && (f = {
                x: parseFloat(t.hasAttribute("x") ? t.getAttribute("x") : t.hasAttribute("cx") ? t.getAttribute("cx") : 0) || 0,
                y: parseFloat(t.hasAttribute("y") ? t.getAttribute("y") : t.hasAttribute("cy") ? t.getAttribute("cy") : 0) || 0,
                width: 0,
                height: 0
            }), a = [(-1 !== (e = pt(e).split(" "))[0].indexOf("%") ? parseFloat(e[0]) / 100 * f.width : parseFloat(e[0])) + f.x, (-1 !== e[1].indexOf("%") ? parseFloat(e[1]) / 100 * f.height : parseFloat(e[1])) + f.y]), i.xOrigin = h = parseFloat(a[0]), i.yOrigin = _ = parseFloat(a[1]), s && x !== Gt && (u = x[0], f = x[1], c = x[2], p = x[3], d = x[4], m = x[5], (g = u * p - f * c) && (o = h * (p / g) + _ * (-c / g) + (c * m - p * d) / g, l = h * (-f / g) + _ * (u / g) - (u * m - f * d) / g, h = i.xOrigin = a[0] = o, _ = i.yOrigin = a[1] = l)), T && (n && (i.xOffset = T.xOffset, i.yOffset = T.yOffset, T = i), r || !1 !== r && !1 !== Y.defaultSmoothOrigin ? (o = h - y, l = _ - v, T.xOffset += o * x[0] + l * x[2] - o, T.yOffset += o * x[1] + l * x[3] - l) : T.xOffset = T.yOffset = 0), n || t.setAttribute("data-svg-origin", a.join(" "))
        }

        function Ct(t) {
            var e, i, s = this.data,
                r = -s.rotation * Q,
                n = r + s.skewX * Q,
                a = 1e5,
                o = (Math.cos(r) * s.scaleX * a | 0) / a,
                l = (Math.sin(r) * s.scaleX * a | 0) / a,
                h = (Math.sin(n) * -s.scaleY * a | 0) / a,
                _ = (Math.cos(n) * s.scaleY * a | 0) / a,
                u = this.t.style,
                f = this.t.currentStyle;
            if (f) {
                i = l, l = -h, h = -i, e = f.filter, u.filter = "";
                var c, p, d = this.t.offsetWidth,
                    m = this.t.offsetHeight,
                    g = "absolute" !== f.position,
                    y = "progid:DXImageTransform.Microsoft.Matrix(M11=" + o + ", M12=" + l + ", M21=" + h + ", M22=" + _,
                    v = s.x + d * s.xPercent / 100,
                    T = s.y + m * s.yPercent / 100;
                if (null != s.ox && (v += (c = (s.oxp ? d * s.ox * .01 : s.ox) - d / 2) - (c * o + (p = (s.oyp ? m * s.oy * .01 : s.oy) - m / 2) * l), T += p - (c * h + p * _)), g ? y += ", Dx=" + ((c = d / 2) - (c * o + (p = m / 2) * l) + v) + ", Dy=" + (p - (c * h + p * _) + T) + ")" : y += ", sizingMethod='auto expand')", -1 !== e.indexOf("DXImageTransform.Microsoft.Matrix(") ? u.filter = e.replace(Z, y) : u.filter = y + " " + e, 0 !== t && 1 !== t || 1 != o || 0 !== l || 0 !== h || 1 != _ || (g && -1 === y.indexOf("Dx=0, Dy=0") || N.test(e) && 100 !== parseFloat(RegExp.$1) || -1 === e.indexOf(e.indexOf("Alpha")) && u.removeAttribute("filter")), !g) {
                    var x, b, w, P = D < 8 ? 1 : -1;
                    for (c = s.ieOffsetX || 0, p = s.ieOffsetY || 0, s.ieOffsetX = Math.round((d - ((o < 0 ? -o : o) * d + (l < 0 ? -l : l) * m)) / 2 + v), s.ieOffsetY = Math.round((m - ((_ < 0 ? -_ : _) * m + (h < 0 ? -h : h) * d)) / 2 + T), Pt = 0; Pt < 4; Pt++) w = (i = -1 !== (x = f[b = ct[Pt]]).indexOf("px") ? parseFloat(x) : _t(this.t, b, parseFloat(x), x.replace(X, "")) || 0) !== s[b] ? Pt < 2 ? -s.ieOffsetX : -s.ieOffsetY : Pt < 2 ? c - s.ieOffsetX : p - s.ieOffsetY, u[b] = (s[b] = Math.round(i - w * (0 === Pt || 2 === Pt ? 1 : P))) + "px"
                }
            }
        }

        var Dt, Mt, Ft, zt, Et,
            It = "scaleX,scaleY,scaleZ,x,y,z,skewX,skewY,rotation,rotationX,rotationY,perspective,xPercent,yPercent".split(","),
            Xt = O("transform"),
            Nt = at + "transform",
            Lt = O("transformOrigin"),
            Bt = null !== O("perspective"),
            Yt = st.Transform = function () {
                this.perspective = parseFloat(Y.defaultTransformPerspective) || 0, this.force3D = !(!1 === Y.defaultForce3D || !Bt) && (Y.defaultForce3D || "auto")
            },
            jt = _gsScope.SVGElement,
            Ut = tt.documentElement || {},
            Vt = (Et = D || /Android/i.test(rt) && !_gsScope.chrome, tt.createElementNS && !Et && (Mt = Rt("svg", Ut), zt = (Ft = Rt("rect", Mt, {
                width: 100,
                height: 50,
                x: 100
            })).getBoundingClientRect().width, Ft.style[Lt] = "50% 50%", Ft.style[Xt] = "scaleX(0.5)", Et = zt === Ft.getBoundingClientRect().width && !(j && Bt), Ut.removeChild(Mt)), Et),
            qt = function (t) {
                var e,
                    i = o("svg", this.ownerSVGElement && this.ownerSVGElement.getAttribute("xmlns") || "http://www.w3.org/2000/svg"),
                    s = this.parentNode,
                    r = this.nextSibling,
                    n = this.style.cssText;
                if (Ut.appendChild(i), i.appendChild(this), this.style.display = "block", t) try {
                    e = this.getBBox(), this._originalGetBBox = this.getBBox, this.getBBox = qt
                } catch (t) {
                } else this._originalGetBBox && (e = this._originalGetBBox());
                return r ? s.insertBefore(this, r) : s.appendChild(this), Ut.removeChild(i), this.style.cssText = n, e
            },
            Wt = function (t) {
                return !(!jt || !t.getCTM || t.parentNode && !t.ownerSVGElement || !function (e) {
                    try {
                        return e.getBBox()
                    } catch (t) {
                        return qt.call(e, !0)
                    }
                }(t))
            },
            Gt = [1, 0, 0, 1, 0, 0],
            Zt = function (t, e) {
                var i, s, r, n, a, o, l = t._gsTransform || new Yt,
                    h = t.style;
                if (Xt ? s = ht(t, Nt, null, !0) : t.currentStyle && (s = (s = t.currentStyle.filter.match(G)) && 4 === s.length ? [s[0].substr(4), Number(s[2].substr(4)), Number(s[1].substr(4)), s[3].substr(4), l.x || 0, l.y || 0].join(",") : ""), i = !s || "none" === s || "matrix(1, 0, 0, 1, 0, 0)" === s, !Xt || !(o = !lt(t) || "none" === lt(t).display) && t.parentNode || (o && (n = h.display, h.display = "block"), t.parentNode || (a = 1, Ut.appendChild(t)), i = !(s = ht(t, Nt, null, !0)) || "none" === s || "matrix(1, 0, 0, 1, 0, 0)" === s, n ? h.display = n : o && Jt(h, "display"), a && Ut.removeChild(t)), (l.svg || t.getCTM && Wt(t)) && (i && -1 !== (h[Xt] + "").indexOf("matrix") && (s = h[Xt], i = 0), r = t.getAttribute("transform"), i && r && (-1 !== r.indexOf("matrix") ? (s = r, i = 0) : -1 !== r.indexOf("translate") && (s = "matrix(1,0,0,1," + r.match(/(?:\-|\b)[\d\-\.e]+\b/gi).join(",") + ")", i = 0))), i) return Gt;
                for (r = (s || "").match(z) || [], Pt = r.length; -1 < --Pt;) n = Number(r[Pt]), r[Pt] = (a = n - (n |= 0)) ? (1e5 * a + (a < 0 ? -.5 : .5) | 0) / 1e5 + n : n;
                return e && 6 < r.length ? [r[0], r[1], r[4], r[5], r[12], r[13]] : r
            },
            Ht = st.getTransform = function (t, e, i, s) {
                if (t._gsTransform && i && !s) return t._gsTransform;
                var r, n, a, o, l, h, _ = i && t._gsTransform || new Yt,
                    u = _.scaleX < 0,
                    f = Bt && (parseFloat(ht(t, Lt, e, !1, "0 0 0").split(" ")[2]) || _.zOrigin) || 0,
                    c = parseFloat(Y.defaultTransformPerspective) || 0;
                if (_.svg = !(!t.getCTM || !Wt(t)), _.svg && (At(t, ht(t, Lt, e, !1, "50% 50%") + "", _, t.getAttribute("data-svg-origin")), Dt = Y.useSVGTransformAttr || Vt), (r = Zt(t)) !== Gt) {
                    if (16 === r.length) {
                        var p, d, m, g, y, v = r[0],
                            T = r[1],
                            x = r[2],
                            b = r[3],
                            w = r[4],
                            P = r[5],
                            O = r[6],
                            S = r[7],
                            k = r[8],
                            R = r[9],
                            A = r[10],
                            C = r[12],
                            D = r[13],
                            M = r[14],
                            F = r[11],
                            z = Math.atan2(O, A);
                        _.zOrigin && (C = k * (M = -_.zOrigin) - r[12], D = R * M - r[13], M = A * M + _.zOrigin - r[14]), _.rotationX = z * K, z && (p = w * (g = Math.cos(-z)) + k * (y = Math.sin(-z)), d = P * g + R * y, m = O * g + A * y, k = w * -y + k * g, R = P * -y + R * g, A = O * -y + A * g, F = S * -y + F * g, w = p, P = d, O = m), z = Math.atan2(-x, A), _.rotationY = z * K, z && (d = T * (g = Math.cos(-z)) - R * (y = Math.sin(-z)), m = x * g - A * y, R = T * y + R * g, A = x * y + A * g, F = b * y + F * g, v = p = v * g - k * y, T = d, x = m), z = Math.atan2(T, v), _.rotation = z * K, z && (p = v * (g = Math.cos(z)) + T * (y = Math.sin(z)), d = w * g + P * y, m = k * g + R * y, T = T * g - v * y, P = P * g - w * y, R = R * g - k * y, v = p, w = d, k = m), _.rotationX && 359.9 < Math.abs(_.rotationX) + Math.abs(_.rotation) && (_.rotationX = _.rotation = 0, _.rotationY = 180 - _.rotationY), z = Math.atan2(w, P), _.scaleX = (1e5 * Math.sqrt(v * v + T * T + x * x) + .5 | 0) / 1e5, _.scaleY = (1e5 * Math.sqrt(P * P + O * O) + .5 | 0) / 1e5, _.scaleZ = (1e5 * Math.sqrt(k * k + R * R + A * A) + .5 | 0) / 1e5, v /= _.scaleX, w /= _.scaleY, T /= _.scaleX, P /= _.scaleY, 2e-5 < Math.abs(z) ? (_.skewX = z * K, w = 0, "simple" !== _.skewType && (_.scaleY *= 1 / Math.cos(z))) : _.skewX = 0, _.perspective = F ? 1 / (F < 0 ? -F : F) : 0, _.x = C, _.y = D, _.z = M, _.svg && (_.x -= _.xOrigin - (_.xOrigin * v - _.yOrigin * w), _.y -= _.yOrigin - (_.yOrigin * T - _.xOrigin * P))
                    } else if (!Bt || s || !r.length || _.x !== r[4] || _.y !== r[5] || !_.rotationX && !_.rotationY) {
                        var E = 6 <= r.length,
                            I = E ? r[0] : 1,
                            X = r[1] || 0,
                            N = r[2] || 0,
                            L = E ? r[3] : 1;
                        _.x = r[4] || 0, _.y = r[5] || 0, a = Math.sqrt(I * I + X * X), o = Math.sqrt(L * L + N * N), l = I || X ? Math.atan2(X, I) * K : _.rotation || 0, h = N || L ? Math.atan2(N, L) * K + l : _.skewX || 0, _.scaleX = a, _.scaleY = o, _.rotation = l, _.skewX = h, Bt && (_.rotationX = _.rotationY = _.z = 0, _.perspective = c, _.scaleZ = 1), _.svg && (_.x -= _.xOrigin - (_.xOrigin * I + _.yOrigin * N), _.y -= _.yOrigin - (_.xOrigin * X + _.yOrigin * L))
                    }
                    for (n in 90 < Math.abs(_.skewX) && Math.abs(_.skewX) < 270 && (u ? (_.scaleX *= -1, _.skewX += _.rotation <= 0 ? 180 : -180, _.rotation += _.rotation <= 0 ? 180 : -180) : (_.scaleY *= -1, _.skewX += _.skewX <= 0 ? 180 : -180)), _.zOrigin = f, _) _[n] < 2e-5 && -2e-5 < _[n] && (_[n] = 0)
                }
                return i && ((t._gsTransform = _).svg && (Dt && t.style[Xt] ? B.delayedCall(.001, function () {
                    Jt(t.style, Xt)
                }) : !Dt && t.getAttribute("transform") && B.delayedCall(.001, function () {
                    t.removeAttribute("transform")
                }))), _
            },
            $t = st.set3DTransformRatio = st.setTransformRatio = function (t) {
                var e, i, s, r, n, a, o, l, h, _, u, f, c, p, d, m, g, y, v, T, x, b, w, P = this.data,
                    O = this.t.style,
                    S = P.rotation,
                    k = P.rotationX,
                    R = P.rotationY,
                    A = P.scaleX,
                    C = P.scaleY,
                    D = P.scaleZ,
                    M = P.x,
                    F = P.y,
                    z = P.z,
                    E = P.svg,
                    I = P.perspective,
                    X = P.force3D,
                    N = P.skewY,
                    L = P.skewX;
                if (N && (L += N, S += N), !((1 !== t && 0 !== t || "auto" !== X || this.tween._totalTime !== this.tween._totalDuration && this.tween._totalTime) && X || z || I || R || k || 1 !== D) || Dt && E || !Bt) S || L || E ? (S *= Q, b = L * Q, w = 1e5, i = Math.cos(S) * A, n = Math.sin(S) * A, s = Math.sin(S - b) * -C, a = Math.cos(S - b) * C, b && "simple" === P.skewType && (e = Math.tan(b - N * Q), s *= e = Math.sqrt(1 + e * e), a *= e, N && (e = Math.tan(N * Q), i *= e = Math.sqrt(1 + e * e), n *= e)), E && (M += P.xOrigin - (P.xOrigin * i + P.yOrigin * s) + P.xOffset, F += P.yOrigin - (P.xOrigin * n + P.yOrigin * a) + P.yOffset, Dt && (P.xPercent || P.yPercent) && (d = this.t.getBBox(), M += .01 * P.xPercent * d.width, F += .01 * P.yPercent * d.height), M < (d = 1e-6) && -d < M && (M = 0), F < d && -d < F && (F = 0)), v = (i * w | 0) / w + "," + (n * w | 0) / w + "," + (s * w | 0) / w + "," + (a * w | 0) / w + "," + M + "," + F + ")", E && Dt ? this.t.setAttribute("transform", "matrix(" + v) : O[Xt] = (P.xPercent || P.yPercent ? "translate(" + P.xPercent + "%," + P.yPercent + "%) matrix(" : "matrix(") + v) : O[Xt] = (P.xPercent || P.yPercent ? "translate(" + P.xPercent + "%," + P.yPercent + "%) matrix(" : "matrix(") + A + ",0,0," + C + "," + M + "," + F + ")";
                else {
                    if (j && (A < (d = 1e-4) && -d < A && (A = D = 2e-5), C < d && -d < C && (C = D = 2e-5), !I || P.z || P.rotationX || P.rotationY || (I = 0)), S || L) S *= Q, m = i = Math.cos(S), g = n = Math.sin(S), L && (S -= L * Q, m = Math.cos(S), g = Math.sin(S), "simple" === P.skewType && (e = Math.tan((L - N) * Q), m *= e = Math.sqrt(1 + e * e), g *= e, P.skewY && (e = Math.tan(N * Q), i *= e = Math.sqrt(1 + e * e), n *= e))), s = -g, a = m;
                    else {
                        if (!(R || k || 1 !== D || I || E)) return void (O[Xt] = (P.xPercent || P.yPercent ? "translate(" + P.xPercent + "%," + P.yPercent + "%) translate3d(" : "translate3d(") + M + "px," + F + "px," + z + "px)" + (1 !== A || 1 !== C ? " scale(" + A + "," + C + ")" : ""));
                        i = a = 1, s = n = 0
                    }
                    _ = 1, r = o = l = h = u = f = 0, c = I ? -1 / I : 0, p = P.zOrigin, d = 1e-6, T = ",", x = "0", (S = R * Q) && (m = Math.cos(S), u = c * (l = -(g = Math.sin(S))), r = i * g, o = n * g, c *= _ = m, i *= m, n *= m), (S = k * Q) && (e = s * (m = Math.cos(S)) + r * (g = Math.sin(S)), y = a * m + o * g, h = _ * g, f = c * g, r = s * -g + r * m, o = a * -g + o * m, _ *= m, c *= m, s = e, a = y), 1 !== D && (r *= D, o *= D, _ *= D, c *= D), 1 !== C && (s *= C, a *= C, h *= C, f *= C), 1 !== A && (i *= A, n *= A, l *= A, u *= A), (p || E) && (p && (M += r * -p, F += o * -p, z += _ * -p + p), E && (M += P.xOrigin - (P.xOrigin * i + P.yOrigin * s) + P.xOffset, F += P.yOrigin - (P.xOrigin * n + P.yOrigin * a) + P.yOffset), M < d && -d < M && (M = x), F < d && -d < F && (F = x), z < d && -d < z && (z = 0)), v = P.xPercent || P.yPercent ? "translate(" + P.xPercent + "%," + P.yPercent + "%) matrix3d(" : "matrix3d(", v += (i < d && -d < i ? x : i) + T + (n < d && -d < n ? x : n) + T + (l < d && -d < l ? x : l), v += T + (u < d && -d < u ? x : u) + T + (s < d && -d < s ? x : s) + T + (a < d && -d < a ? x : a), k || R || 1 !== D ? (v += T + (h < d && -d < h ? x : h) + T + (f < d && -d < f ? x : f) + T + (r < d && -d < r ? x : r), v += T + (o < d && -d < o ? x : o) + T + (_ < d && -d < _ ? x : _) + T + (c < d && -d < c ? x : c) + T) : v += ",0,0,0,0,1,0,", v += M + T + F + T + z + T + (I ? 1 + -z / I : 1) + ")", O[Xt] = v
                }
            };
        (t = Yt.prototype).x = t.y = t.z = t.skewX = t.skewY = t.rotation = t.rotationX = t.rotationY = t.zOrigin = t.xPercent = t.yPercent = t.xOffset = t.yOffset = 0, t.scaleX = t.scaleY = t.scaleZ = 1, St("transform,scale,scaleX,scaleY,scaleZ,x,y,z,rotation,rotationX,rotationY,rotationZ,skewX,skewY,shortRotation,shortRotationX,shortRotationY,shortRotationZ,transformOrigin,svgOrigin,transformPerspective,directionalRotation,parseTransform,force3D,skewType,xPercent,yPercent,smoothOrigin", {
            parser: function (t, e, i, s, r, n, a) {
                if (s._lastParsedTransform === a) return r;
                var o, l = (s._lastParsedTransform = a).scale && "function" == typeof a.scale ? a.scale : 0;
                "function" == typeof a[i] && (o = a[i], a[i] = e), l && (a.scale = l(F, t));
                var h, _, u, f, c, p, d, m, g, y = t._gsTransform,
                    v = t.style,
                    T = It.length,
                    x = a,
                    b = {},
                    w = "transformOrigin",
                    P = Ht(t, S, !0, x.parseTransform),
                    O = x.transform && ("function" == typeof x.transform ? x.transform(F, M) : x.transform);
                if (P.skewType = x.skewType || P.skewType || Y.defaultSkewType, s._transform = P, O && "string" == typeof O && Xt) (_ = et.style)[Xt] = O, _.display = "block", _.position = "absolute", tt.body.appendChild(et), h = Ht(et, null, !1), "simple" === P.skewType && (h.scaleY *= Math.cos(h.skewX * Q)), P.svg && (p = P.xOrigin, d = P.yOrigin, h.x -= P.xOffset, h.y -= P.yOffset, (x.transformOrigin || x.svgOrigin) && (O = {}, At(t, pt(x.transformOrigin), O, x.svgOrigin, x.smoothOrigin, !0), p = O.xOrigin, d = O.yOrigin, h.x -= O.xOffset - P.xOffset, h.y -= O.yOffset - P.yOffset), (p || d) && (m = Zt(et, !0), h.x -= p - (p * m[0] + d * m[2]), h.y -= d - (p * m[1] + d * m[3]))), tt.body.removeChild(et), h.perspective || (h.perspective = P.perspective), null != x.xPercent && (h.xPercent = R(x.xPercent, P.xPercent)), null != x.yPercent && (h.yPercent = R(x.yPercent, P.yPercent));
                else if ("object" == typeof x) {
                    if (h = {
                        scaleX: R(null != x.scaleX ? x.scaleX : x.scale, P.scaleX),
                        scaleY: R(null != x.scaleY ? x.scaleY : x.scale, P.scaleY),
                        scaleZ: R(x.scaleZ, P.scaleZ),
                        x: R(x.x, P.x),
                        y: R(x.y, P.y),
                        z: R(x.z, P.z),
                        xPercent: R(x.xPercent, P.xPercent),
                        yPercent: R(x.yPercent, P.yPercent),
                        perspective: R(x.transformPerspective, P.perspective)
                    }, null != (c = x.directionalRotation))
                        if ("object" == typeof c)
                            for (_ in c) x[_] = c[_];
                        else x.rotation = c;
                    "string" == typeof x.x && -1 !== x.x.indexOf("%") && (h.x = 0, h.xPercent = R(x.x, P.xPercent)), "string" == typeof x.y && -1 !== x.y.indexOf("%") && (h.y = 0, h.yPercent = R(x.y, P.yPercent)), h.rotation = A("rotation" in x ? x.rotation : "shortRotation" in x ? x.shortRotation + "_short" : "rotationZ" in x ? x.rotationZ : P.rotation, P.rotation, "rotation", b), Bt && (h.rotationX = A("rotationX" in x ? x.rotationX : "shortRotationX" in x ? x.shortRotationX + "_short" : P.rotationX || 0, P.rotationX, "rotationX", b), h.rotationY = A("rotationY" in x ? x.rotationY : "shortRotationY" in x ? x.shortRotationY + "_short" : P.rotationY || 0, P.rotationY, "rotationY", b)), h.skewX = A(x.skewX, P.skewX), h.skewY = A(x.skewY, P.skewY)
                }
                for (Bt && null != x.force3D && (P.force3D = x.force3D, f = !0), (u = P.force3D || P.z || P.rotationX || P.rotationY || h.z || h.rotationX || h.rotationY || h.perspective) || null == x.scale || (h.scaleZ = 1); -1 < --T;) (1e-6 < (O = h[g = It[T]] - P[g]) || O < -1e-6 || null != x[g] || null != J[g]) && (f = !0, r = new bt(P, g, P[g], O, r), g in b && (r.e = b[g]), r.xs0 = 0, r.plugin = n, s._overwriteProps.push(r.n));
                return O = x.transformOrigin, P.svg && (O || x.svgOrigin) && (p = P.xOffset, d = P.yOffset, At(t, pt(O), h, x.svgOrigin, x.smoothOrigin), r = Tt(P, "xOrigin", (y ? P : h).xOrigin, h.xOrigin, r, w), r = Tt(P, "yOrigin", (y ? P : h).yOrigin, h.yOrigin, r, w), p === P.xOffset && d === P.yOffset || (r = Tt(P, "xOffset", y ? p : P.xOffset, P.xOffset, r, w), r = Tt(P, "yOffset", y ? d : P.yOffset, P.yOffset, r, w)), O = "0px 0px"), (O || Bt && u && P.zOrigin) && (Xt ? (f = !0, g = Lt, O = (O || ht(t, g, S, !1, "50% 50%")) + "", (r = new bt(v, g, 0, 0, r, -1, w)).b = v[g], r.plugin = n, Bt ? (_ = P.zOrigin, O = O.split(" "), P.zOrigin = (2 < O.length && (0 === _ || "0px" !== O[2]) ? parseFloat(O[2]) : _) || 0, r.xs0 = r.e = O[0] + " " + (O[1] || "50%") + " 0px", (r = new bt(P, "zOrigin", 0, 0, r, -1, r.n)).b = _, r.xs0 = r.e = P.zOrigin) : r.xs0 = r.e = O) : pt(O + "", P)), f && (s._transformType = P.svg && Dt || !u && 3 !== this._transformType ? 2 : 3), o && (a[i] = o), l && (a.scale = l), r
            },
            prefix: !0
        }), St("boxShadow", {
            defaultValue: "0px 0px 0px 0px #999",
            prefix: !0,
            color: !0,
            multi: !0,
            keyword: "inset"
        }), St("borderRadius", {
            defaultValue: "0px",
            parser: function (t, e, i, s, r, n) {
                e = this.format(e);
                var a, o, l, h, _, u, f, c, p, d, m, g, y, v, T, x,
                    b = ["borderTopLeftRadius", "borderTopRightRadius", "borderBottomRightRadius", "borderBottomLeftRadius"],
                    w = t.style;
                for (p = parseFloat(t.offsetWidth), d = parseFloat(t.offsetHeight), a = e.split(" "), o = 0; o < b.length; o++) this.p.indexOf("border") && (b[o] = O(b[o])), -1 !== (_ = h = ht(t, b[o], S, !1, "0px")).indexOf(" ") && (_ = (h = _.split(" "))[0], h = h[1]), u = l = a[o], f = parseFloat(_), g = _.substr((f + "").length), "" === (m = (y = "=" === u.charAt(1)) ? (c = parseInt(u.charAt(0) + "1", 10), u = u.substr(2), c *= parseFloat(u), u.substr((c + "").length - (c < 0 ? 1 : 0)) || "") : (c = parseFloat(u), u.substr((c + "").length))) && (m = P[i] || g), m !== g && (v = _t(t, "borderLeft", f, g), T = _t(t, "borderTop", f, g), h = "%" === m ? (_ = v / p * 100 + "%", T / d * 100 + "%") : "em" === m ? (_ = v / (x = _t(t, "borderLeft", 1, "em")) + "em", T / x + "em") : (_ = v + "px", T + "px"), y && (u = parseFloat(_) + c + m, l = parseFloat(h) + c + m)), r = wt(w, b[o], _ + " " + h, u + " " + l, !1, "0px", r);
                return r
            },
            prefix: !0,
            formatter: yt("0px 0px 0px 0px", !1, !0)
        }), St("borderBottomLeftRadius,borderBottomRightRadius,borderTopLeftRadius,borderTopRightRadius", {
            defaultValue: "0px",
            parser: function (t, e, i, s, r, n) {
                return wt(t.style, i, this.format(ht(t, i, S, !1, "0px 0px")), this.format(e), !1, "0px", r)
            },
            prefix: !0,
            formatter: yt("0px 0px", !1, !0)
        }), St("backgroundPosition", {
            defaultValue: "0 0",
            parser: function (t, e, i, s, r, n) {
                var a, o, l, h, _, u, f = "background-position",
                    c = S || lt(t, null),
                    p = this.format((c ? D ? c.getPropertyValue(f + "-x") + " " + c.getPropertyValue(f + "-y") : c.getPropertyValue(f) : t.currentStyle.backgroundPositionX + " " + t.currentStyle.backgroundPositionY) || "0 0"),
                    d = this.format(e);
                if (-1 !== p.indexOf("%") != (-1 !== d.indexOf("%")) && d.split(",").length < 2 && ((u = ht(t, "backgroundImage").replace(q, "")) && "none" !== u)) {
                    for (a = p.split(" "), o = d.split(" "), it.setAttribute("src", u), l = 2; -1 < --l;) (h = -1 !== (p = a[l]).indexOf("%")) != (-1 !== o[l].indexOf("%")) && (_ = 0 === l ? t.offsetWidth - it.width : t.offsetHeight - it.height, a[l] = h ? parseFloat(p) / 100 * _ + "px" : parseFloat(p) / _ * 100 + "%");
                    p = a.join(" ")
                }
                return this.parseComplex(t.style, p, d, r, n)
            },
            formatter: pt
        }), St("backgroundSize", {
            defaultValue: "0 0",
            formatter: function (t) {
                return pt(-1 === (t += "").indexOf(" ") ? t + " " + t : t)
            }
        }), St("perspective", {defaultValue: "0px", prefix: !0}), St("perspectiveOrigin", {
            defaultValue: "50% 50%",
            prefix: !0
        }), St("transformStyle", {prefix: !0}), St("backfaceVisibility", {prefix: !0}), St("userSelect", {prefix: !0}), St("margin", {parser: vt("marginTop,marginRight,marginBottom,marginLeft")}), St("padding", {parser: vt("paddingTop,paddingRight,paddingBottom,paddingLeft")}), St("clip", {
            defaultValue: "rect(0px,0px,0px,0px)",
            parser: function (t, e, i, s, r, n) {
                var a, o, l;
                return e = D < 9 ? (o = t.currentStyle, l = D < 8 ? " " : ",", a = "rect(" + o.clipTop + l + o.clipRight + l + o.clipBottom + l + o.clipLeft + ")", this.format(e).split(",").join(l)) : (a = this.format(ht(t, this.p, S, !1, this.dflt)), this.format(e)), this.parseComplex(t.style, a, e, r, n)
            }
        }), St("textShadow", {
            defaultValue: "0px 0px 0px #999",
            color: !0,
            multi: !0
        }), St("autoRound,strictUnits", {
            parser: function (t, e, i, s, r) {
                return r
            }
        }), St("border", {
            defaultValue: "0px solid #000",
            parser: function (t, e, i, s, r, n) {
                var a = ht(t, "borderTopWidth", S, !1, "0px"),
                    o = this.format(e).split(" "),
                    l = o[0].replace(X, "");
                return "px" !== l && (a = parseFloat(a) / _t(t, "borderTopWidth", 1, l) + l), this.parseComplex(t.style, this.format(a + " " + ht(t, "borderTopStyle", S, !1, "solid") + " " + ht(t, "borderTopColor", S, !1, "#000")), o.join(" "), r, n)
            },
            color: !0,
            formatter: function (t) {
                var e = t.split(" ");
                return e[0] + " " + (e[1] || "solid") + " " + (t.match(gt) || ["#000"])[0]
            }
        }), St("borderWidth", {parser: vt("borderTopWidth,borderRightWidth,borderBottomWidth,borderLeftWidth")}), St("float,cssFloat,styleFloat", {
            parser: function (t, e, i, s, r, n) {
                var a = t.style,
                    o = "cssFloat" in a ? "cssFloat" : "styleFloat";
                return new bt(a, o, 0, 0, r, -1, i, !1, 0, a[o], e)
            }
        });

        function Qt(t) {
            var e, i = this.t,
                s = i.filter || ht(this.data, "filter") || "",
                r = this.s + this.c * t | 0;
            100 == r && (e = -1 === s.indexOf("atrix(") && -1 === s.indexOf("radient(") && -1 === s.indexOf("oader(") ? (i.removeAttribute("filter"), !ht(this.data, "filter")) : (i.filter = s.replace(u, ""), !0)), e || (this.xn1 && (i.filter = s = s || "alpha(opacity=" + r + ")"), -1 === s.indexOf("pacity") ? 0 == r && this.xn1 || (i.filter = s + " alpha(opacity=" + r + ")") : i.filter = s.replace(N, "opacity=" + r))
        }

        St("opacity,alpha,autoAlpha", {
            defaultValue: "1",
            parser: function (t, e, i, s, r, n) {
                var a = parseFloat(ht(t, "opacity", S, !1, "1")),
                    o = t.style,
                    l = "autoAlpha" === i;
                return "string" == typeof e && "=" === e.charAt(1) && (e = ("-" === e.charAt(0) ? -1 : 1) * parseFloat(e.substr(2)) + a), l && 1 === a && "hidden" === ht(t, "visibility", S) && 0 !== e && (a = 0), nt ? r = new bt(o, "opacity", a, e - a, r) : ((r = new bt(o, "opacity", 100 * a, 100 * (e - a), r)).xn1 = l ? 1 : 0, o.zoom = 1, r.type = 2, r.b = "alpha(opacity=" + r.s + ")", r.e = "alpha(opacity=" + (r.s + r.c) + ")", r.data = t, r.plugin = n, r.setRatio = Qt), l && ((r = new bt(o, "visibility", 0, 0, r, -1, null, !1, 0, 0 !== a ? "inherit" : "hidden", 0 === e ? "hidden" : "inherit")).xs0 = "inherit", s._overwriteProps.push(r.n), s._overwriteProps.push(i)), r
            }
        });

        function Kt(t) {
            if (this.t._gsClassPT = this, 1 === t || 0 === t) {
                this.t.setAttribute("class", 0 === t ? this.b : this.e);
                for (var e = this.data, i = this.t.style; e;) e.v ? i[e.p] = e.v : Jt(i, e.p), e = e._next;
                1 === t && this.t._gsClassPT === this && (this.t._gsClassPT = null)
            } else this.t.getAttribute("class") !== this.e && this.t.setAttribute("class", this.e)
        }

        var Jt = function (t, e) {
            e && (t.removeProperty ? ("ms" !== e.substr(0, 2) && "webkit" !== e.substr(0, 6) || (e = "-" + e), t.removeProperty(e.replace(f, "-$1").toLowerCase())) : t.removeAttribute(e))
        };
        St("className", {
            parser: function (t, e, i, s, r, n, a) {
                var o, l, h, _, u, f = t.getAttribute("class") || "",
                    c = t.style.cssText;
                if ((r = s._classNamePT = new bt(t, i, 0, 0, r, 2)).setRatio = Kt, r.pr = -11, p = !0, r.b = f, l = y(t, S), h = t._gsClassPT) {
                    for (_ = {}, u = h.data; u;) _[u.p] = 1, u = u._next;
                    h.setRatio(1)
                }
                return (t._gsClassPT = r).e = "=" !== e.charAt(1) ? e : f.replace(new RegExp("(?:\\s|^)" + e.substr(2) + "(?![\\w-])"), "") + ("+" === e.charAt(0) ? " " + e.substr(2) : ""), t.setAttribute("class", r.e), o = v(t, l, y(t), a, _), t.setAttribute("class", f), r.data = o.firstMPT, t.style.cssText = c, r.xfirst = s.parse(t, o.difs, r, n)
            }
        });

        function te(t) {
            if ((1 === t || 0 === t) && this.data._totalTime === this.data._totalDuration && "isFromStart" !== this.data.data) {
                var e, i, s, r, n, a = this.t.style,
                    o = m.transform.parse;
                if ("all" === this.e) r = !(a.cssText = "");
                else
                    for (s = (e = this.e.split(" ").join("").split(",")).length; -1 < --s;) i = e[s], m[i] && (m[i].parse === o ? r = !0 : i = "transformOrigin" === i ? Lt : m[i].p), Jt(a, i);
                r && (Jt(a, Xt), (n = this.t._gsTransform) && (n.svg && (this.t.removeAttribute("data-svg-origin"), this.t.removeAttribute("transform")), delete this.t._gsTransform))
            }
        }

        for (St("clearProps", {
            parser: function (t, e, i, s, r) {
                return (r = new bt(t, i, 0, 0, r, 2)).setRatio = te, r.e = e, r.pr = -10, r.data = s._tween, p = !0, r
            }
        }), t = "bezier,throwProps,physicsProps,physics2D".split(","), Pt = t.length; Pt--;) kt(t[Pt]);
        (t = Y.prototype)._firstPT = t._lastParsedTransform = t._transform = null, t._onInitTween = function (t, e, i, s) {
            if (!t.nodeType) return !1;
            this._target = M = t, this._tween = i, this._vars = e, F = s, C = e.autoRound, p = !1, P = e.suffixMap || Y.suffixMap, S = lt(t, ""), d = this._overwriteProps;
            var r, n, a, o, l, h, _, u, f, c = t.style;
            if (x && "" === c.zIndex && ("auto" !== (r = ht(t, "zIndex", S)) && "" !== r || this._addLazySet(c, "zIndex", 0)), "string" == typeof e && (o = c.cssText, r = y(t, S), c.cssText = o + ";" + e, r = v(t, r, y(t)).difs, !nt && L.test(e) && (r.opacity = parseFloat(RegExp.$1)), e = r, c.cssText = o), e.className ? this._firstPT = n = m.className.parse(t, e.className, "className", this, null, null, e) : this._firstPT = n = this.parse(t, e, null), this._transformType) {
                for (f = 3 === this._transformType, Xt ? b && (x = !0, "" === c.zIndex && ("auto" !== (_ = ht(t, "zIndex", S)) && "" !== _ || this._addLazySet(c, "zIndex", 0)), w && this._addLazySet(c, "WebkitBackfaceVisibility", this._vars.WebkitBackfaceVisibility || (f ? "visible" : "hidden"))) : c.zoom = 1, a = n; a && a._next;) a = a._next;
                u = new bt(t, "transform", 0, 0, null, 2), this._linkCSSP(u, null, a), u.setRatio = Xt ? $t : Ct, u.data = this._transform || Ht(t, S, !0), u.tween = i, u.pr = -1, d.pop()
            }
            if (p) {
                for (; n;) {
                    for (h = n._next, a = o; a && a.pr > n.pr;) a = a._next;
                    (n._prev = a ? a._prev : l) ? n._prev._next = n : o = n, (n._next = a) ? a._prev = n : l = n, n = h
                }
                this._firstPT = o
            }
            return !0
        }, t.parse = function (t, e, i, s) {
            var r, n, a, o, l, h, _, u, f, c, p = t.style;
            for (r in e) {
                if ("function" == typeof (h = e[r]) && (h = h(F, M)), n = m[r]) i = n.parse(t, h, r, this, i, s, e);
                else {
                    if ("--" === r.substr(0, 2)) {
                        this._tween._propLookup[r] = this._addTween.call(this._tween, t.style, "setProperty", lt(t).getPropertyValue(r) + "", h + "", r, !1, r);
                        continue
                    }
                    l = ht(t, r, S) + "", f = "string" == typeof h, "color" === r || "fill" === r || "stroke" === r || -1 !== r.indexOf("Color") || f && U.test(h) ? (f || (h = (3 < (h = mt(h)).length ? "rgba(" : "rgb(") + h.join(",") + ")"), i = wt(p, r, l, h, !0, "transparent", i, 0, s)) : f && $.test(h) ? i = wt(p, r, l, h, !0, null, i, 0, s) : (_ = (a = parseFloat(l)) || 0 === a ? l.substr((a + "").length) : "", "" !== l && "auto" !== l || (_ = "width" === r || "height" === r ? (a = T(t, r, S), "px") : "left" === r || "top" === r ? (a = ut(t, r, S), "px") : (a = "opacity" !== r ? 0 : 1, "")), "" === (u = (c = f && "=" === h.charAt(1)) ? (o = parseInt(h.charAt(0) + "1", 10), h = h.substr(2), o *= parseFloat(h), h.replace(X, "")) : (o = parseFloat(h), f ? h.replace(X, "") : "")) && (u = r in P ? P[r] : _), h = o || 0 === o ? (c ? o + a : o) + u : e[r], _ === u || "" === u && "lineHeight" !== r || !o && 0 !== o || !a || (a = _t(t, r, a, _), "%" === u ? (a /= _t(t, r, 100, "%") / 100, !0 !== e.strictUnits && (l = a + "%")) : "em" === u || "rem" === u || "vw" === u || "vh" === u ? a /= _t(t, r, 1, u) : "px" !== u && (o = _t(t, r, o, u), u = "px"), c && (o || 0 === o) && (h = o + a + u)), c && (o += a), !a && 0 !== a || !o && 0 !== o ? void 0 !== p[r] && (h || h + "" != "NaN" && null != h) ? (i = new bt(p, r, o || a || 0, 0, i, -1, r, !1, 0, l, h)).xs0 = "none" !== h || "display" !== r && -1 === r.indexOf("Style") ? h : l : g("invalid " + r + " tween value: " + e[r]) : (i = new bt(p, r, a, o - a, i, 0, r, !1 !== C && ("px" === u || "zIndex" === r), 0, l, h)).xs0 = u)
                }
                s && i && !i.plugin && (i.plugin = s)
            }
            return i
        }, t.setRatio = function (t) {
            var e, i, s, r = this._firstPT;
            if (1 !== t || this._tween._time !== this._tween._duration && 0 !== this._tween._time)
                if (t || this._tween._time !== this._tween._duration && 0 !== this._tween._time || -1e-6 === this._tween._rawPrevTime)
                    for (; r;) {
                        if (e = r.c * t + r.s, r.r ? e = Math.round(e) : e < 1e-6 && -1e-6 < e && (e = 0), r.type)
                            if (1 === r.type)
                                if (2 === (s = r.l)) r.t[r.p] = r.xs0 + e + r.xs1 + r.xn1 + r.xs2;
                                else if (3 === s) r.t[r.p] = r.xs0 + e + r.xs1 + r.xn1 + r.xs2 + r.xn2 + r.xs3;
                                else if (4 === s) r.t[r.p] = r.xs0 + e + r.xs1 + r.xn1 + r.xs2 + r.xn2 + r.xs3 + r.xn3 + r.xs4;
                                else if (5 === s) r.t[r.p] = r.xs0 + e + r.xs1 + r.xn1 + r.xs2 + r.xn2 + r.xs3 + r.xn3 + r.xs4 + r.xn4 + r.xs5;
                                else {
                                    for (i = r.xs0 + e + r.xs1, s = 1; s < r.l; s++) i += r["xn" + s] + r["xs" + (s + 1)];
                                    r.t[r.p] = i
                                } else -1 === r.type ? r.t[r.p] = r.xs0 : r.setRatio && r.setRatio(t);
                        else r.t[r.p] = e + r.xs0;
                        r = r._next
                    } else
                    for (; r;) 2 !== r.type ? r.t[r.p] = r.b : r.setRatio(t), r = r._next;
            else
                for (; r;) {
                    if (2 !== r.type)
                        if (r.r && -1 !== r.type)
                            if (e = Math.round(r.s + r.c), r.type) {
                                if (1 === r.type) {
                                    for (s = r.l, i = r.xs0 + e + r.xs1, s = 1; s < r.l; s++) i += r["xn" + s] + r["xs" + (s + 1)];
                                    r.t[r.p] = i
                                }
                            } else r.t[r.p] = e + r.xs0;
                        else r.t[r.p] = r.e;
                    else r.setRatio(t);
                    r = r._next
                }
        }, t._enableTransforms = function (t) {
            this._transform = this._transform || Ht(this._target, S, !0), this._transformType = this._transform.svg && Dt || !t && 3 !== this._transformType ? 2 : 3
        };

        function ee(t) {
            this.t[this.p] = this.e, this.data._linkCSSP(this, this._next, null, !0)
        }

        t._addLazySet = function (t, e, i) {
            var s = this._firstPT = new bt(t, e, 0, 0, this._firstPT, 2);
            s.e = i, s.setRatio = ee, s.data = this
        }, t._linkCSSP = function (t, e, i, s) {
            return t && (e && (e._prev = t), t._next && (t._next._prev = t._prev), t._prev ? t._prev._next = t._next : this._firstPT === t && (this._firstPT = t._next, s = !0), i ? i._next = t : s || null !== this._firstPT || (this._firstPT = t), t._next = e, t._prev = i), t
        }, t._mod = function (t) {
            for (var e = this._firstPT; e;) "function" == typeof t[e.p] && t[e.p] === Math.round && (e.r = 1), e = e._next
        }, t._kill = function (t) {
            var e, i, s, r = t;
            if (t.autoAlpha || t.alpha) {
                for (i in r = {}, t) r[i] = t[i];
                r.opacity = 1, r.autoAlpha && (r.visibility = 1)
            }
            for (t.className && (e = this._classNamePT) && ((s = e.xfirst) && s._prev ? this._linkCSSP(s._prev, e._next, s._prev._prev) : s === this._firstPT && (this._firstPT = e._next), e._next && this._linkCSSP(e._next, e._next._next, s._prev), this._classNamePT = null), e = this._firstPT; e;) e.plugin && e.plugin !== i && e.plugin._kill && (e.plugin._kill(t), i = e.plugin), e = e._next;
            return n.prototype._kill.call(this, r)
        };
        var ie = function (t, e, i) {
            var s, r, n, a;
            if (t.slice)
                for (r = t.length; -1 < --r;) ie(t[r], e, i);
            else
                for (r = (s = t.childNodes).length; -1 < --r;) a = (n = s[r]).type, n.style && (e.push(y(n)), i && i.push(n)), 1 !== a && 9 !== a && 11 !== a || !n.childNodes.length || ie(n, e, i)
        };
        return Y.cascadeTo = function (t, e, i) {
            var s, r, n, a, o = B.to(t, e, i),
                l = [o],
                h = [],
                _ = [],
                u = [],
                f = B._internals.reservedProps;
            for (t = o._targets || o.target, ie(t, h, u), o.render(e, !0, !0), ie(t, _), o.render(0, !0, !0), o._enabled(!0), s = u.length; -1 < --s;)
                if ((r = v(u[s], h[s], _[s])).firstMPT) {
                    for (n in r = r.difs, i) f[n] && (r[n] = i[n]);
                    for (n in a = {}, r) a[n] = h[s][n];
                    l.push(B.fromTo(u[s], e, a, r))
                }
            return l
        }, n.activate([Y]), Y
    }, !0), t = _gsScope._gsDefine.plugin({
        propName: "roundProps",
        version: "1.6.0",
        priority: -1,
        API: 2,
        init: function (t, e, i) {
            return this._tween = i, !0
        }
    }), (e = t.prototype)._onInitAllProps = function () {
        for (var t, e, i, s = this._tween, r = s.vars.roundProps.join ? s.vars.roundProps : s.vars.roundProps.split(","), n = r.length, a = {}, o = s._propLookup.roundProps; -1 < --n;) a[r[n]] = Math.round;
        for (n = r.length; -1 < --n;)
            for (t = r[n], e = s._firstPT; e;) i = e._next, e.pg ? e.t._mod(a) : e.n === t && (2 === e.f && e.t ? l(e.t._firstPT) : (this._add(e.t, t, e.s, e.c), i && (i._prev = e._prev), e._prev ? e._prev._next = i : s._firstPT === e && (s._firstPT = i), e._next = e._prev = null, s._propLookup[t] = o)), e = i;
        return !1
    }, e._add = function (t, e, i, s) {
        this._addTween(t, e, i, i + s, e, Math.round), this._overwriteProps.push(e)
    }, _gsScope._gsDefine.plugin({
        propName: "attr",
        API: 2,
        version: "0.6.1",
        init: function (t, e, i, s) {
            var r, n;
            if ("function" != typeof t.setAttribute) return !1;
            for (r in e) "function" == typeof (n = e[r]) && (n = n(s, t)), this._addTween(t, "setAttribute", t.getAttribute(r) + "", n + "", r, !1, r), this._overwriteProps.push(r);
            return !0
        }
    }), _gsScope._gsDefine.plugin({
        propName: "directionalRotation",
        version: "0.3.1",
        API: 2,
        init: function (t, e, i, s) {
            "object" != typeof e && (e = {rotation: e}), this.finals = {};
            var r, n, a, o, l, h, _ = !0 === e.useRadians ? 2 * Math.PI : 360;
            for (r in e) "useRadians" !== r && ("function" == typeof (o = e[r]) && (o = o(s, t)), n = (h = (o + "").split("_"))[0], a = parseFloat("function" != typeof t[r] ? t[r] : t[r.indexOf("set") || "function" != typeof t["get" + r.substr(3)] ? r : "get" + r.substr(3)]()), l = (o = this.finals[r] = "string" == typeof n && "=" === n.charAt(1) ? a + parseInt(n.charAt(0) + "1", 10) * Number(n.substr(2)) : Number(n) || 0) - a, h.length && (-1 !== (n = h.join("_")).indexOf("short") && ((l %= _) !== l % (_ / 2) && (l = l < 0 ? l + _ : l - _)), -1 !== n.indexOf("_cw") && l < 0 ? l = (l + 9999999999 * _) % _ - (l / _ | 0) * _ : -1 !== n.indexOf("ccw") && 0 < l && (l = (l - 9999999999 * _) % _ - (l / _ | 0) * _)), (1e-6 < l || l < -1e-6) && (this._addTween(t, r, a, a + l, r), this._overwriteProps.push(r)));
            return !0
        },
        set: function (t) {
            var e;
            if (1 !== t) this._super.setRatio.call(this, t);
            else
                for (e = this._firstPT; e;) e.f ? e.t[e.p](this.finals[e.p]) : e.t[e.p] = this.finals[e.p], e = e._next
        }
    })._autoCSS = !0, _gsScope._gsDefine("easing.Back", ["easing.Ease"], function (m) {
        function t(t, e) {
            var i = _("easing." + t, function () {
                }, !0),
                s = i.prototype = new m;
            return s.constructor = i, s.getRatio = e, i
        }

        function e(t, e, i, s, r) {
            var n = _("easing." + t, {easeOut: new e, easeIn: new i, easeInOut: new s}, !0);
            return u(n, t), n
        }

        function g(t, e, i) {
            this.t = t, this.v = e, i && (((this.next = i).prev = this).c = i.v - e, this.gap = i.t - t)
        }

        function i(t, e) {
            var i = _("easing." + t, function (t) {
                    this._p1 = t || 0 === t ? t : 1.70158, this._p2 = 1.525 * this._p1
                }, !0),
                s = i.prototype = new m;
            return s.constructor = i, s.getRatio = e, s.config = function (t) {
                return new i(t)
            }, i
        }

        var s, r, n, a = _gsScope.GreenSockGlobals || _gsScope,
            o = a.com.greensock,
            l = 2 * Math.PI,
            h = Math.PI / 2,
            _ = o._class,
            u = m.register || function () {
            },
            f = e("Back", i("BackOut", function (t) {
                return (t -= 1) * t * ((this._p1 + 1) * t + this._p1) + 1
            }), i("BackIn", function (t) {
                return t * t * ((this._p1 + 1) * t - this._p1)
            }), i("BackInOut", function (t) {
                return (t *= 2) < 1 ? .5 * t * t * ((this._p2 + 1) * t - this._p2) : .5 * ((t -= 2) * t * ((this._p2 + 1) * t + this._p2) + 2)
            })),
            c = _("easing.SlowMo", function (t, e, i) {
                e = e || 0 === e ? e : .7, null == t ? t = .7 : 1 < t && (t = 1), this._p = 1 !== t ? e : 0, this._p1 = (1 - t) / 2, this._p2 = t, this._p3 = this._p1 + this._p2, this._calcEnd = !0 === i
            }, !0),
            p = c.prototype = new m;
        return p.constructor = c, p.getRatio = function (t) {
            var e = t + (.5 - t) * this._p;
            return t < this._p1 ? this._calcEnd ? 1 - (t = 1 - t / this._p1) * t : e - (t = 1 - t / this._p1) * t * t * t * e : t > this._p3 ? this._calcEnd ? 1 === t ? 0 : 1 - (t = (t - this._p3) / this._p1) * t : e + (t - e) * (t = (t - this._p3) / this._p1) * t * t * t : this._calcEnd ? 1 : e
        }, c.ease = new c(.7, .7), p.config = c.config = function (t, e, i) {
            return new c(t, e, i)
        }, (p = (s = _("easing.SteppedEase", function (t, e) {
            t = t || 1, this._p1 = 1 / t, this._p2 = t + (e ? 0 : 1), this._p3 = e ? 1 : 0
        }, !0)).prototype = new m).constructor = s, p.getRatio = function (t) {
            return t < 0 ? t = 0 : 1 <= t && (t = .999999999), ((this._p2 * t | 0) + this._p3) * this._p1
        }, p.config = s.config = function (t, e) {
            return new s(t, e)
        }, (p = (r = _("easing.RoughEase", function (t) {
            for (var e, i, s, r, n, a, o = (t = t || {}).taper || "none", l = [], h = 0, _ = 0 | (t.points || 20), u = _, f = !1 !== t.randomize, c = !0 === t.clamp, p = t.template instanceof m ? t.template : null, d = "number" == typeof t.strength ? .4 * t.strength : .4; -1 < --u;) e = f ? Math.random() : 1 / _ * u, i = p ? p.getRatio(e) : e, s = "none" === o ? d : "out" === o ? (r = 1 - e) * r * d : "in" === o ? e * e * d : (r = e < .5 ? 2 * e : 2 * (1 - e)) * r * .5 * d, f ? i += Math.random() * s - .5 * s : u % 2 ? i += .5 * s : i -= .5 * s, c && (1 < i ? i = 1 : i < 0 && (i = 0)), l[h++] = {
                x: e,
                y: i
            };
            for (l.sort(function (t, e) {
                return t.x - e.x
            }), a = new g(1, 1, null), u = _; -1 < --u;) n = l[u], a = new g(n.x, n.y, a);
            this._prev = new g(0, 0, 0 !== a.t ? a : a.next)
        }, !0)).prototype = new m).constructor = r, p.getRatio = function (t) {
            var e = this._prev;
            if (t > e.t) {
                for (; e.next && t >= e.t;) e = e.next;
                e = e.prev
            } else
                for (; e.prev && t <= e.t;) e = e.prev;
            return (this._prev = e).v + (t - e.t) / e.gap * e.c
        }, p.config = function (t) {
            return new r(t)
        }, r.ease = new r, e("Bounce", t("BounceOut", function (t) {
            return t < 1 / 2.75 ? 7.5625 * t * t : t < 2 / 2.75 ? 7.5625 * (t -= 1.5 / 2.75) * t + .75 : t < 2.5 / 2.75 ? 7.5625 * (t -= 2.25 / 2.75) * t + .9375 : 7.5625 * (t -= 2.625 / 2.75) * t + .984375
        }), t("BounceIn", function (t) {
            return (t = 1 - t) < 1 / 2.75 ? 1 - 7.5625 * t * t : t < 2 / 2.75 ? 1 - (7.5625 * (t -= 1.5 / 2.75) * t + .75) : t < 2.5 / 2.75 ? 1 - (7.5625 * (t -= 2.25 / 2.75) * t + .9375) : 1 - (7.5625 * (t -= 2.625 / 2.75) * t + .984375)
        }), t("BounceInOut", function (t) {
            var e = t < .5;
            return t = (t = e ? 1 - 2 * t : 2 * t - 1) < 1 / 2.75 ? 7.5625 * t * t : t < 2 / 2.75 ? 7.5625 * (t -= 1.5 / 2.75) * t + .75 : t < 2.5 / 2.75 ? 7.5625 * (t -= 2.25 / 2.75) * t + .9375 : 7.5625 * (t -= 2.625 / 2.75) * t + .984375, e ? .5 * (1 - t) : .5 * t + .5
        })), e("Circ", t("CircOut", function (t) {
            return Math.sqrt(1 - (t -= 1) * t)
        }), t("CircIn", function (t) {
            return -(Math.sqrt(1 - t * t) - 1)
        }), t("CircInOut", function (t) {
            return (t *= 2) < 1 ? -.5 * (Math.sqrt(1 - t * t) - 1) : .5 * (Math.sqrt(1 - (t -= 2) * t) + 1)
        })), e("Elastic", (n = function (t, e, i) {
            var s = _("easing." + t, function (t, e) {
                    this._p1 = 1 <= t ? t : 1, this._p2 = (e || i) / (t < 1 ? t : 1), this._p3 = this._p2 / l * (Math.asin(1 / this._p1) || 0), this._p2 = l / this._p2
                }, !0),
                r = s.prototype = new m;
            return r.constructor = s, r.getRatio = e, r.config = function (t, e) {
                return new s(t, e)
            }, s
        })("ElasticOut", function (t) {
            return this._p1 * Math.pow(2, -10 * t) * Math.sin((t - this._p3) * this._p2) + 1
        }, .3), n("ElasticIn", function (t) {
            return -this._p1 * Math.pow(2, 10 * (t -= 1)) * Math.sin((t - this._p3) * this._p2)
        }, .3), n("ElasticInOut", function (t) {
            return (t *= 2) < 1 ? this._p1 * Math.pow(2, 10 * (t -= 1)) * Math.sin((t - this._p3) * this._p2) * -.5 : this._p1 * Math.pow(2, -10 * (t -= 1)) * Math.sin((t - this._p3) * this._p2) * .5 + 1
        }, .45)), e("Expo", t("ExpoOut", function (t) {
            return 1 - Math.pow(2, -10 * t)
        }), t("ExpoIn", function (t) {
            return Math.pow(2, 10 * (t - 1)) - .001
        }), t("ExpoInOut", function (t) {
            return (t *= 2) < 1 ? .5 * Math.pow(2, 10 * (t - 1)) : .5 * (2 - Math.pow(2, -10 * (t - 1)))
        })), e("Sine", t("SineOut", function (t) {
            return Math.sin(t * h)
        }), t("SineIn", function (t) {
            return 1 - Math.cos(t * h)
        }), t("SineInOut", function (t) {
            return -.5 * (Math.cos(Math.PI * t) - 1)
        })), _("easing.EaseLookup", {
            find: function (t) {
                return m.map[t]
            }
        }, !0), u(a.SlowMo, "SlowMo", "ease,"), u(r, "RoughEase", "ease,"), u(s, "SteppedEase", "ease,"), f
    }, !0)
}), _gsScope._gsDefine && _gsScope._gsQueue.pop()(),
    function (f, c) {
        "use strict";
        var e, i, p = {},
            s = f.document,
            d = f.GreenSockGlobals = f.GreenSockGlobals || f;
        if (!d.TweenLite) {
            var t, r, n, m, g, y = function (t) {
                    var e, i = t.split("."),
                        s = d;
                    for (e = 0; e < i.length; e++) s[i[e]] = s = s[i[e]] || {};
                    return s
                },
                u = y("com.greensock"),
                v = 1e-10,
                l = function (t) {
                    var e, i = [],
                        s = t.length;
                    for (e = 0; e !== s; i.push(t[e++])) ;
                    return i
                },
                T = function () {
                },
                x = (e = Object.prototype.toString, i = e.call([]), function (t) {
                    return null != t && (t instanceof Array || "object" == typeof t && !!t.push && e.call(t) === i)
                }),
                b = {},
                w = function (o, l, h, _) {
                    this.sc = b[o] ? b[o].sc : [], (b[o] = this).gsClass = null, this.func = h;
                    var u = [];
                    this.check = function (t) {
                        for (var e, i, s, r, n = l.length, a = n; -1 < --n;) (e = b[l[n]] || new w(l[n], [])).gsClass ? (u[n] = e.gsClass, a--) : t && e.sc.push(this);
                        if (0 === a && h) {
                            if (s = (i = ("com.greensock." + o).split(".")).pop(), r = y(i.join("."))[s] = this.gsClass = h.apply(h, u), _)
                                if (d[s] = p[s] = r, "undefined" != typeof module && module.exports)
                                    if (o === c)
                                        for (n in module.exports = p[c] = r, p) r[n] = p[n];
                                    else p[c] && (p[c][s] = r);
                                else "function" == typeof define && define.amd && define((f.GreenSockAMDPath ? f.GreenSockAMDPath + "/" : "") + o.split(".").pop(), [], function () {
                                    return r
                                });
                            for (n = 0; n < this.sc.length; n++) this.sc[n].check()
                        }
                    }, this.check(!0)
                },
                a = f._gsDefine = function (t, e, i, s) {
                    return new w(t, e, i, s)
                },
                P = u._class = function (t, e, i) {
                    return e = e || function () {
                    }, a(t, [], function () {
                        return e
                    }, i), e
                };
            a.globals = d;
            var o = [0, 0, 1, 1],
                O = P("easing.Ease", function (t, e, i, s) {
                    this._func = t, this._type = i || 0, this._power = s || 0, this._params = e ? o.concat(e) : o
                }, !0),
                S = O.map = {},
                h = O.register = function (t, e, i, s) {
                    for (var r, n, a, o, l = e.split(","), h = l.length, _ = (i || "easeIn,easeOut,easeInOut").split(","); -1 < --h;)
                        for (n = l[h], r = s ? P("easing." + n, null, !0) : u.easing[n] || {}, a = _.length; -1 < --a;) o = _[a], S[n + "." + o] = S[o + n] = r[o] = t.getRatio ? t : t[o] || new t
                };
            for ((n = O.prototype)._calcEnd = !1, n.getRatio = function (t) {
                if (this._func) return this._params[0] = t, this._func.apply(null, this._params);
                var e = this._type,
                    i = this._power,
                    s = 1 === e ? 1 - t : 2 === e ? t : t < .5 ? 2 * t : 2 * (1 - t);
                return 1 === i ? s *= s : 2 === i ? s *= s * s : 3 === i ? s *= s * s * s : 4 === i && (s *= s * s * s * s), 1 === e ? 1 - s : 2 === e ? s : t < .5 ? s / 2 : 1 - s / 2
            }, r = (t = ["Linear", "Quad", "Cubic", "Quart", "Quint,Strong"]).length; -1 < --r;) n = t[r] + ",Power" + r, h(new O(null, null, 1, r), n, "easeOut", !0), h(new O(null, null, 2, r), n, "easeIn" + (0 === r ? ",easeNone" : "")), h(new O(null, null, 3, r), n, "easeInOut");
            S.linear = u.easing.Linear.easeIn, S.swing = u.easing.Quad.easeInOut;
            var k = P("events.EventDispatcher", function (t) {
                this._listeners = {}, this._eventTarget = t || this
            });
            (n = k.prototype).addEventListener = function (t, e, i, s, r) {
                r = r || 0;
                var n, a, o = this._listeners[t],
                    l = 0;
                for (this !== m || g || m.wake(), null == o && (this._listeners[t] = o = []), a = o.length; -1 < --a;) (n = o[a]).c === e && n.s === i ? o.splice(a, 1) : 0 === l && n.pr < r && (l = a + 1);
                o.splice(l, 0, {c: e, s: i, up: s, pr: r})
            }, n.removeEventListener = function (t, e) {
                var i, s = this._listeners[t];
                if (s)
                    for (i = s.length; -1 < --i;)
                        if (s[i].c === e) return void s.splice(i, 1)
            }, n.dispatchEvent = function (t) {
                var e, i, s, r = this._listeners[t];
                if (r)
                    for (1 < (e = r.length) && (r = r.slice(0)), i = this._eventTarget; -1 < --e;) (s = r[e]) && (s.up ? s.c.call(s.s || i, {
                        type: t,
                        target: i
                    }) : s.c.call(s.s || i))
            };
            var R = f.requestAnimationFrame,
                A = f.cancelAnimationFrame,
                C = Date.now || function () {
                    return (new Date).getTime()
                },
                D = C();
            for (r = (t = ["ms", "moz", "webkit", "o"]).length; -1 < --r && !R;) R = f[t[r] + "RequestAnimationFrame"], A = f[t[r] + "CancelAnimationFrame"] || f[t[r] + "CancelRequestAnimationFrame"];
            P("Ticker", function (t, e) {
                var r, n, a, o, l, h = this,
                    _ = C(),
                    i = !(!1 === e || !R) && "auto",
                    u = 500,
                    f = 33,
                    c = function (t) {
                        var e, i, s = C() - D;
                        u < s && (_ += s - f), D += s, h.time = (D - _) / 1e3, e = h.time - l, (!r || 0 < e || !0 === t) && (h.frame++, l += e + (o <= e ? .004 : o - e), i = !0), !0 !== t && (a = n(c)), i && h.dispatchEvent("tick")
                    };
                k.call(h), h.time = h.frame = 0, h.tick = function () {
                    c(!0)
                }, h.lagSmoothing = function (t, e) {
                    return arguments.length ? (u = t || 1e10, void (f = Math.min(e, u, 0))) : u < 1e10
                }, h.sleep = function () {
                    null != a && (i && A ? A(a) : clearTimeout(a), n = T, a = null, h === m && (g = !1))
                }, h.wake = function (t) {
                    null !== a ? h.sleep() : t ? _ += -D + (D = C()) : 10 < h.frame && (D = C() - u + 5), n = 0 === r ? T : i && R ? R : function (t) {
                        return setTimeout(t, 1e3 * (l - h.time) + 1 | 0)
                    }, h === m && (g = !0), c(2)
                }, h.fps = function (t) {
                    return arguments.length ? (o = 1 / ((r = t) || 60), l = this.time + o, void h.wake()) : r
                }, h.useRAF = function (t) {
                    return arguments.length ? (h.sleep(), i = t, void h.fps(r)) : i
                }, h.fps(t), setTimeout(function () {
                    "auto" === i && h.frame < 5 && "hidden" !== s.visibilityState && h.useRAF(!1)
                }, 1500)
            }), (n = u.Ticker.prototype = new u.events.EventDispatcher).constructor = u.Ticker;
            var _ = P("core.Animation", function (t, e) {
                if (this.vars = e = e || {}, this._duration = this._totalDuration = t || 0, this._delay = Number(e.delay) || 0, this._timeScale = 1, this._active = !0 === e.immediateRender, this.data = e.data, this._reversed = !0 === e.reversed, $) {
                    g || m.wake();
                    var i = this.vars.useFrames ? H : $;
                    i.add(this, i._time), this.vars.paused && this.paused(!0)
                }
            });
            m = _.ticker = new u.Ticker, (n = _.prototype)._dirty = n._gc = n._initted = n._paused = !1, n._totalTime = n._time = 0, n._rawPrevTime = -1, n._next = n._last = n._onUpdate = n._timeline = n.timeline = null, n._paused = !1;
            var M = function () {
                g && 2e3 < C() - D && ("hidden" !== s.visibilityState || !m.lagSmoothing()) && m.wake();
                var t = setTimeout(M, 2e3);
                t.unref && t.unref()
            };
            M(), n.play = function (t, e) {
                return null != t && this.seek(t, e), this.reversed(!1).paused(!1)
            }, n.pause = function (t, e) {
                return null != t && this.seek(t, e), this.paused(!0)
            }, n.resume = function (t, e) {
                return null != t && this.seek(t, e), this.paused(!1)
            }, n.seek = function (t, e) {
                return this.totalTime(Number(t), !1 !== e)
            }, n.restart = function (t, e) {
                return this.reversed(!1).paused(!1).totalTime(t ? -this._delay : 0, !1 !== e, !0)
            }, n.reverse = function (t, e) {
                return null != t && this.seek(t || this.totalDuration(), e), this.reversed(!0).paused(!1)
            }, n.render = function (t, e, i) {
            }, n.invalidate = function () {
                return this._time = this._totalTime = 0, this._initted = this._gc = !1, this._rawPrevTime = -1, !this._gc && this.timeline || this._enabled(!0), this
            }, n.isActive = function () {
                var t, e = this._timeline,
                    i = this._startTime;
                return !e || !this._gc && !this._paused && e.isActive() && (t = e.rawTime(!0)) >= i && t < i + this.totalDuration() / this._timeScale - 1e-7
            }, n._enabled = function (t, e) {
                return g || m.wake(), this._gc = !t, this._active = this.isActive(), !0 !== e && (t && !this.timeline ? this._timeline.add(this, this._startTime - this._delay) : !t && this.timeline && this._timeline._remove(this, !0)), !1
            }, n._kill = function (t, e) {
                return this._enabled(!1, !1)
            }, n.kill = function (t, e) {
                return this._kill(t, e), this
            }, n._uncache = function (t) {
                for (var e = t ? this : this.timeline; e;) e._dirty = !0, e = e.timeline;
                return this
            }, n._swapSelfInParams = function (t) {
                for (var e = t.length, i = t.concat(); -1 < --e;) "{self}" === t[e] && (i[e] = this);
                return i
            }, n._callback = function (t) {
                var e = this.vars,
                    i = e[t],
                    s = e[t + "Params"],
                    r = e[t + "Scope"] || e.callbackScope || this;
                switch (s ? s.length : 0) {
                    case 0:
                        i.call(r);
                        break;
                    case 1:
                        i.call(r, s[0]);
                        break;
                    case 2:
                        i.call(r, s[0], s[1]);
                        break;
                    default:
                        i.apply(r, s)
                }
            }, n.eventCallback = function (t, e, i, s) {
                if ("on" === (t || "").substr(0, 2)) {
                    var r = this.vars;
                    if (1 === arguments.length) return r[t];
                    null == e ? delete r[t] : (r[t] = e, r[t + "Params"] = x(i) && -1 !== i.join("").indexOf("{self}") ? this._swapSelfInParams(i) : i, r[t + "Scope"] = s), "onUpdate" === t && (this._onUpdate = e)
                }
                return this
            }, n.delay = function (t) {
                return arguments.length ? (this._timeline.smoothChildTiming && this.startTime(this._startTime + t - this._delay), this._delay = t, this) : this._delay
            }, n.duration = function (t) {
                return arguments.length ? (this._duration = this._totalDuration = t, this._uncache(!0), this._timeline.smoothChildTiming && 0 < this._time && this._time < this._duration && 0 !== t && this.totalTime(this._totalTime * (t / this._duration), !0), this) : (this._dirty = !1, this._duration)
            }, n.totalDuration = function (t) {
                return this._dirty = !1, arguments.length ? this.duration(t) : this._totalDuration
            }, n.time = function (t, e) {
                return arguments.length ? (this._dirty && this.totalDuration(), this.totalTime(t > this._duration ? this._duration : t, e)) : this._time
            }, n.totalTime = function (t, e, i) {
                if (g || m.wake(), !arguments.length) return this._totalTime;
                if (this._timeline) {
                    if (t < 0 && !i && (t += this.totalDuration()), this._timeline.smoothChildTiming) {
                        this._dirty && this.totalDuration();
                        var s = this._totalDuration,
                            r = this._timeline;
                        if (s < t && !i && (t = s), this._startTime = (this._paused ? this._pauseTime : r._time) - (this._reversed ? s - t : t) / this._timeScale, r._dirty || this._uncache(!1), r._timeline)
                            for (; r._timeline;) r._timeline._time !== (r._startTime + r._totalTime) / r._timeScale && r.totalTime(r._totalTime, !0), r = r._timeline
                    }
                    this._gc && this._enabled(!0, !1), this._totalTime === t && 0 !== this._duration || (I.length && K(), this.render(t, e, !1), I.length && K())
                }
                return this
            }, n.progress = n.totalProgress = function (t, e) {
                var i = this.duration();
                return arguments.length ? this.totalTime(i * t, e) : i ? this._time / i : this.ratio
            }, n.startTime = function (t) {
                return arguments.length ? (t !== this._startTime && (this._startTime = t, this.timeline && this.timeline._sortChildren && this.timeline.add(this, t - this._delay)), this) : this._startTime
            }, n.endTime = function (t) {
                return this._startTime + (0 != t ? this.totalDuration() : this.duration()) / this._timeScale
            }, n.timeScale = function (t) {
                if (!arguments.length) return this._timeScale;
                var e, i;
                for (t = t || v, this._timeline && this._timeline.smoothChildTiming && (i = (e = this._pauseTime) || 0 === e ? e : this._timeline.totalTime(), this._startTime = i - (i - this._startTime) * this._timeScale / t), this._timeScale = t, i = this.timeline; i && i.timeline;) i._dirty = !0, i.totalDuration(), i = i.timeline;
                return this
            }, n.reversed = function (t) {
                return arguments.length ? (t != this._reversed && (this._reversed = t, this.totalTime(this._timeline && !this._timeline.smoothChildTiming ? this.totalDuration() - this._totalTime : this._totalTime, !0)), this) : this._reversed
            }, n.paused = function (t) {
                if (!arguments.length) return this._paused;
                var e, i, s = this._timeline;
                return t != this._paused && s && (g || t || m.wake(), i = (e = s.rawTime()) - this._pauseTime, !t && s.smoothChildTiming && (this._startTime += i, this._uncache(!1)), this._pauseTime = t ? e : null, this._paused = t, this._active = this.isActive(), !t && 0 != i && this._initted && this.duration() && (e = s.smoothChildTiming ? this._totalTime : (e - this._startTime) / this._timeScale, this.render(e, e === this._totalTime, !0))), this._gc && !t && this._enabled(!0, !1), this
            };
            var F = P("core.SimpleTimeline", function (t) {
                _.call(this, 0, t), this.autoRemoveChildren = this.smoothChildTiming = !0
            });
            (n = F.prototype = new _).constructor = F, n.kill()._gc = !1, n._first = n._last = n._recent = null, n._sortChildren = !1, n.add = n.insert = function (t, e, i, s) {
                var r, n;
                if (t._startTime = Number(e || 0) + t._delay, t._paused && this !== t._timeline && (t._pauseTime = t._startTime + (this.rawTime() - t._startTime) / t._timeScale), t.timeline && t.timeline._remove(t, !0), t.timeline = t._timeline = this, t._gc && t._enabled(!0, !0), r = this._last, this._sortChildren)
                    for (n = t._startTime; r && r._startTime > n;) r = r._prev;
                return r ? (t._next = r._next, r._next = t) : (t._next = this._first, this._first = t), t._next ? t._next._prev = t : this._last = t, t._prev = r, this._recent = t, this._timeline && this._uncache(!0), this
            }, n._remove = function (t, e) {
                return t.timeline === this && (e || t._enabled(!1, !0), t._prev ? t._prev._next = t._next : this._first === t && (this._first = t._next), t._next ? t._next._prev = t._prev : this._last === t && (this._last = t._prev), t._next = t._prev = t.timeline = null, t === this._recent && (this._recent = this._last), this._timeline && this._uncache(!0)), this
            }, n.render = function (t, e, i) {
                var s, r = this._first;
                for (this._totalTime = this._time = this._rawPrevTime = t; r;) s = r._next, (r._active || t >= r._startTime && !r._paused && !r._gc) && (r._reversed ? r.render((r._dirty ? r.totalDuration() : r._totalDuration) - (t - r._startTime) * r._timeScale, e, i) : r.render((t - r._startTime) * r._timeScale, e, i)), r = s
            }, n.rawTime = function () {
                return g || m.wake(), this._totalTime
            };
            var z = P("TweenLite", function (t, e, i) {
                    if (_.call(this, e, i), this.render = z.prototype.render, null == t) throw "Cannot tween a null target.";
                    this.target = t = "string" != typeof t ? t : z.selector(t) || t;
                    var s, r, n,
                        a = t.jquery || t.length && t !== f && t[0] && (t[0] === f || t[0].nodeType && t[0].style && !t.nodeType),
                        o = this.vars.overwrite;
                    if (this._overwrite = o = null == o ? Z[z.defaultOverwrite] : "number" == typeof o ? o >> 0 : Z[o], (a || t instanceof Array || t.push && x(t)) && "number" != typeof t[0])
                        for (this._targets = n = l(t), this._propLookup = [], this._siblings = [], s = 0; s < n.length; s++) (r = n[s]) ? "string" != typeof r ? r.length && r !== f && r[0] && (r[0] === f || r[0].nodeType && r[0].style && !r.nodeType) ? (n.splice(s--, 1), this._targets = n = n.concat(l(r))) : (this._siblings[s] = J(r, this, !1), 1 === o && 1 < this._siblings[s].length && et(r, this, null, 1, this._siblings[s])) : "string" == typeof (r = n[s--] = z.selector(r)) && n.splice(s + 1, 1) : n.splice(s--, 1);
                    else this._propLookup = {}, this._siblings = J(t, this, !1), 1 === o && 1 < this._siblings.length && et(t, this, null, 1, this._siblings);
                    (this.vars.immediateRender || 0 === e && 0 === this._delay && !1 !== this.vars.immediateRender) && (this._time = -v, this.render(Math.min(0, -this._delay)))
                }, !0),
                E = function (t) {
                    return t && t.length && t !== f && t[0] && (t[0] === f || t[0].nodeType && t[0].style && !t.nodeType)
                };
            (n = z.prototype = new _).constructor = z, n.kill()._gc = !1, n.ratio = 0, n._firstPT = n._targets = n._overwrittenProps = n._startAt = null, n._notifyPluginsOfEnabled = n._lazy = !1, z.version = "1.20.3", z.defaultEase = n._ease = new O(null, null, 1, 1), z.defaultOverwrite = "auto", z.ticker = m, z.autoSleep = 120, z.lagSmoothing = function (t, e) {
                m.lagSmoothing(t, e)
            }, z.selector = f.$ || f.jQuery || function (t) {
                var e = f.$ || f.jQuery;
                return e ? (z.selector = e)(t) : void 0 === s ? t : s.querySelectorAll ? s.querySelectorAll(t) : s.getElementById("#" === t.charAt(0) ? t.substr(1) : t)
            };
            var I = [],
                X = {},
                N = /(?:(-|-=|\+=)?\d*\.?\d*(?:e[\-+]?\d+)?)[0-9]/gi,
                L = /[\+-]=-?[\.\d]/,
                B = function (t) {
                    for (var e, i = this._firstPT; i;) e = i.blob ? 1 === t && null != this.end ? this.end : t ? this.join("") : this.start : i.c * t + i.s, i.m ? e = i.m(e, this._target || i.t) : e < 1e-6 && -1e-6 < e && !i.blob && (e = 0), i.f ? i.fp ? i.t[i.p](i.fp, e) : i.t[i.p](e) : i.t[i.p] = e, i = i._next
                },
                Y = function (t, e, i, s) {
                    var r, n, a, o, l, h, _, u = [],
                        f = 0,
                        c = "",
                        p = 0;
                    for (u.start = t, u.end = e, t = u[0] = t + "", e = u[1] = e + "", i && (i(u), t = u[0], e = u[1]), u.length = 0, r = t.match(N) || [], n = e.match(N) || [], s && (s._next = null, s.blob = 1, u._firstPT = u._applyPT = s), l = n.length, o = 0; o < l; o++) _ = n[o], c += (h = e.substr(f, e.indexOf(_, f) - f)) || !o ? h : ",", f += h.length, p ? p = (p + 1) % 5 : "rgba(" === h.substr(-5) && (p = 1), _ === r[o] || r.length <= o ? c += _ : (c && (u.push(c), c = ""), a = parseFloat(r[o]), u.push(a), u._firstPT = {
                        _next: u._firstPT,
                        t: u,
                        p: u.length - 1,
                        s: a,
                        c: ("=" === _.charAt(1) ? parseInt(_.charAt(0) + "1", 10) * parseFloat(_.substr(2)) : parseFloat(_) - a) || 0,
                        f: 0,
                        m: p && p < 4 ? Math.round : 0
                    }), f += _.length;
                    return (c += e.substr(f)) && u.push(c), u.setRatio = B, L.test(e) && (u.end = null), u
                },
                j = function (t, e, i, s, r, n, a, o, l) {
                    "function" == typeof s && (s = s(l || 0, t));
                    var h = typeof t[e],
                        _ = "function" != h ? "" : e.indexOf("set") || "function" != typeof t["get" + e.substr(3)] ? e : "get" + e.substr(3),
                        u = "get" !== i ? i : _ ? a ? t[_](a) : t[_]() : t[e],
                        f = "string" == typeof s && "=" === s.charAt(1),
                        c = {
                            t: t,
                            p: e,
                            s: u,
                            f: "function" == h,
                            pg: 0,
                            n: r || e,
                            m: n ? "function" == typeof n ? n : Math.round : 0,
                            pr: 0,
                            c: f ? parseInt(s.charAt(0) + "1", 10) * parseFloat(s.substr(2)) : parseFloat(s) - u || 0
                        };
                    return "number" == typeof u && ("number" == typeof s || f) || (a || isNaN(u) || !f && isNaN(s) || "boolean" == typeof u || "boolean" == typeof s ? (c.fp = a, c = {
                        t: Y(u, f ? parseFloat(c.s) + c.c : s, o || z.defaultStringFilter, c),
                        p: "setRatio",
                        s: 0,
                        c: 1,
                        f: 2,
                        pg: 0,
                        n: r || e,
                        pr: 0,
                        m: 0
                    }) : (c.s = parseFloat(u), f || (c.c = parseFloat(s) - c.s || 0))), c.c ? ((c._next = this._firstPT) && (c._next._prev = c), this._firstPT = c) : void 0
                },
                U = z._internals = {isArray: x, isSelector: E, lazyTweens: I, blobDif: Y},
                V = z._plugins = {},
                q = U.tweenLookup = {},
                W = 0,
                G = U.reservedProps = {
                    ease: 1,
                    delay: 1,
                    overwrite: 1,
                    onComplete: 1,
                    onCompleteParams: 1,
                    onCompleteScope: 1,
                    useFrames: 1,
                    runBackwards: 1,
                    startAt: 1,
                    onUpdate: 1,
                    onUpdateParams: 1,
                    onUpdateScope: 1,
                    onStart: 1,
                    onStartParams: 1,
                    onStartScope: 1,
                    onReverseComplete: 1,
                    onReverseCompleteParams: 1,
                    onReverseCompleteScope: 1,
                    onRepeat: 1,
                    onRepeatParams: 1,
                    onRepeatScope: 1,
                    easeParams: 1,
                    yoyo: 1,
                    immediateRender: 1,
                    repeat: 1,
                    repeatDelay: 1,
                    data: 1,
                    paused: 1,
                    reversed: 1,
                    autoCSS: 1,
                    lazy: 1,
                    onOverwrite: 1,
                    callbackScope: 1,
                    stringFilter: 1,
                    id: 1,
                    yoyoEase: 1
                },
                Z = {none: 0, all: 1, auto: 2, concurrent: 3, allOnStart: 4, preexisting: 5, true: 1, false: 0},
                H = _._rootFramesTimeline = new F,
                $ = _._rootTimeline = new F,
                Q = 30,
                K = U.lazyRender = function () {
                    var t, e = I.length;
                    for (X = {}; -1 < --e;) (t = I[e]) && !1 !== t._lazy && (t.render(t._lazy[0], t._lazy[1], !0), t._lazy = !1);
                    I.length = 0
                };
            $._startTime = m.time, H._startTime = m.frame, $._active = H._active = !0, setTimeout(K, 1), _._updateRoot = z.render = function () {
                var t, e, i;
                if (I.length && K(), $.render((m.time - $._startTime) * $._timeScale, !1, !1), H.render((m.frame - H._startTime) * H._timeScale, !1, !1), I.length && K(), m.frame >= Q) {
                    for (i in Q = m.frame + (parseInt(z.autoSleep, 10) || 120), q) {
                        for (t = (e = q[i].tweens).length; -1 < --t;) e[t]._gc && e.splice(t, 1);
                        0 === e.length && delete q[i]
                    }
                    if ((!(i = $._first) || i._paused) && z.autoSleep && !H._first && 1 === m._listeners.tick.length) {
                        for (; i && i._paused;) i = i._next;
                        i || m.sleep()
                    }
                }
            }, m.addEventListener("tick", _._updateRoot);
            var J = function (t, e, i) {
                    var s, r, n = t._gsTweenID;
                    if (q[n || (t._gsTweenID = n = "t" + W++)] || (q[n] = {
                        target: t,
                        tweens: []
                    }), e && ((s = q[n].tweens)[r = s.length] = e, i))
                        for (; -1 < --r;) s[r] === e && s.splice(r, 1);
                    return q[n].tweens
                },
                tt = function (t, e, i, s) {
                    var r, n, a = t.vars.onOverwrite;
                    return a && (r = a(t, e, i, s)), (a = z.onOverwrite) && (n = a(t, e, i, s)), !1 !== r && !1 !== n
                },
                et = function (t, e, i, s, r) {
                    var n, a, o, l;
                    if (1 === s || 4 <= s) {
                        for (l = r.length, n = 0; n < l; n++)
                            if ((o = r[n]) !== e) o._gc || o._kill(null, t, e) && (a = !0);
                            else if (5 === s) break;
                        return a
                    }
                    var h, _ = e._startTime + v,
                        u = [],
                        f = 0,
                        c = 0 === e._duration;
                    for (n = r.length; -1 < --n;) (o = r[n]) === e || o._gc || o._paused || (o._timeline !== e._timeline ? (h = h || it(e, 0, c), 0 === it(o, h, c) && (u[f++] = o)) : o._startTime <= _ && o._startTime + o.totalDuration() / o._timeScale > _ && ((c || !o._initted) && _ - o._startTime <= 2e-10 || (u[f++] = o)));
                    for (n = f; -1 < --n;)
                        if (o = u[n], 2 === s && o._kill(i, t, e) && (a = !0), 2 !== s || !o._firstPT && o._initted) {
                            if (2 !== s && !tt(o, e)) continue;
                            o._enabled(!1, !1) && (a = !0)
                        }
                    return a
                },
                it = function (t, e, i) {
                    for (var s = t._timeline, r = s._timeScale, n = t._startTime; s._timeline;) {
                        if (n += s._startTime, r *= s._timeScale, s._paused) return -100;
                        s = s._timeline
                    }
                    return e < (n /= r) ? n - e : i && n === e || !t._initted && n - e < 2 * v ? v : (n += t.totalDuration() / t._timeScale / r) > e + v ? 0 : n - e - v
                };
            n._init = function () {
                var t, e, i, s, r, n, a = this.vars,
                    o = this._overwrittenProps,
                    l = this._duration,
                    h = !!a.immediateRender,
                    _ = a.ease;
                if (a.startAt) {
                    for (s in this._startAt && (this._startAt.render(-1, !0), this._startAt.kill()), r = {}, a.startAt) r[s] = a.startAt[s];
                    if (r.data = "isStart", r.overwrite = !1, r.immediateRender = !0, r.lazy = h && !1 !== a.lazy, r.startAt = r.delay = null, r.onUpdate = a.onUpdate, r.onUpdateParams = a.onUpdateParams, r.onUpdateScope = a.onUpdateScope || a.callbackScope || this, this._startAt = z.to(this.target, 0, r), h)
                        if (0 < this._time) this._startAt = null;
                        else if (0 !== l) return
                } else if (a.runBackwards && 0 !== l)
                    if (this._startAt) this._startAt.render(-1, !0), this._startAt.kill(), this._startAt = null;
                    else {
                        for (s in 0 !== this._time && (h = !1), i = {}, a) G[s] && "autoCSS" !== s || (i[s] = a[s]);
                        if (i.overwrite = 0, i.data = "isFromStart", i.lazy = h && !1 !== a.lazy, i.immediateRender = h, this._startAt = z.to(this.target, 0, i), h) {
                            if (0 === this._time) return
                        } else this._startAt._init(), this._startAt._enabled(!1), this.vars.immediateRender && (this._startAt = null)
                    }
                if (this._ease = _ = _ ? _ instanceof O ? _ : "function" == typeof _ ? new O(_, a.easeParams) : S[_] || z.defaultEase : z.defaultEase, a.easeParams instanceof Array && _.config && (this._ease = _.config.apply(_, a.easeParams)), this._easeType = this._ease._type, this._easePower = this._ease._power, this._firstPT = null, this._targets)
                    for (n = this._targets.length, t = 0; t < n; t++) this._initProps(this._targets[t], this._propLookup[t] = {}, this._siblings[t], o ? o[t] : null, t) && (e = !0);
                else e = this._initProps(this.target, this._propLookup, this._siblings, o, 0);
                if (e && z._onPluginEvent("_onInitAllProps", this), o && (this._firstPT || "function" != typeof this.target && this._enabled(!1, !1)), a.runBackwards)
                    for (i = this._firstPT; i;) i.s += i.c, i.c = -i.c, i = i._next;
                this._onUpdate = a.onUpdate, this._initted = !0
            }, n._initProps = function (t, e, i, s, r) {
                var n, a, o, l, h, _;
                if (null == t) return !1;
                for (n in X[t._gsTweenID] && K(), this.vars.css || t.style && t !== f && t.nodeType && V.css && !1 !== this.vars.autoCSS && function (t, e) {
                    var i, s = {};
                    for (i in t) G[i] || i in e && "transform" !== i && "x" !== i && "y" !== i && "width" !== i && "height" !== i && "className" !== i && "border" !== i || !(!V[i] || V[i] && V[i]._autoCSS) || (s[i] = t[i], delete t[i]);
                    t.css = s
                }(this.vars, t), this.vars)
                    if (_ = this.vars[n], G[n]) _ && (_ instanceof Array || _.push && x(_)) && -1 !== _.join("").indexOf("{self}") && (this.vars[n] = _ = this._swapSelfInParams(_, this));
                    else if (V[n] && (l = new V[n])._onInitTween(t, this.vars[n], this, r)) {
                        for (this._firstPT = h = {
                            _next: this._firstPT,
                            t: l,
                            p: "setRatio",
                            s: 0,
                            c: 1,
                            f: 1,
                            n: n,
                            pg: 1,
                            pr: l._priority,
                            m: 0
                        }, a = l._overwriteProps.length; -1 < --a;) e[l._overwriteProps[a]] = this._firstPT;
                        (l._priority || l._onInitAllProps) && (o = !0), (l._onDisable || l._onEnable) && (this._notifyPluginsOfEnabled = !0), h._next && (h._next._prev = h)
                    } else e[n] = j.call(this, t, n, "get", _, n, 0, null, this.vars.stringFilter, r);
                return s && this._kill(s, t) ? this._initProps(t, e, i, s, r) : 1 < this._overwrite && this._firstPT && 1 < i.length && et(t, this, e, this._overwrite, i) ? (this._kill(e, t), this._initProps(t, e, i, s, r)) : (this._firstPT && (!1 !== this.vars.lazy && this._duration || this.vars.lazy && !this._duration) && (X[t._gsTweenID] = !0), o)
            }, n.render = function (t, e, i) {
                var s, r, n, a, o = this._time,
                    l = this._duration,
                    h = this._rawPrevTime;
                if (l - 1e-7 <= t && 0 <= t) this._totalTime = this._time = l, this.ratio = this._ease._calcEnd ? this._ease.getRatio(1) : 1, this._reversed || (s = !0, r = "onComplete", i = i || this._timeline.autoRemoveChildren), 0 !== l || !this._initted && this.vars.lazy && !i || (this._startTime === this._timeline._duration && (t = 0), (h < 0 || t <= 0 && -1e-7 <= t || h === v && "isPause" !== this.data) && h !== t && (i = !0, v < h && (r = "onReverseComplete")), this._rawPrevTime = a = !e || t || h === t ? t : v);
                else if (t < 1e-7) this._totalTime = this._time = 0, this.ratio = this._ease._calcEnd ? this._ease.getRatio(0) : 0, (0 !== o || 0 === l && 0 < h) && (r = "onReverseComplete", s = this._reversed), t < 0 && (this._active = !1, 0 !== l || !this._initted && this.vars.lazy && !i || (0 <= h && (h !== v || "isPause" !== this.data) && (i = !0), this._rawPrevTime = a = !e || t || h === t ? t : v)), (!this._initted || this._startAt && this._startAt.progress()) && (i = !0);
                else if (this._totalTime = this._time = t, this._easeType) {
                    var _ = t / l,
                        u = this._easeType,
                        f = this._easePower;
                    (1 === u || 3 === u && .5 <= _) && (_ = 1 - _), 3 === u && (_ *= 2), 1 === f ? _ *= _ : 2 === f ? _ *= _ * _ : 3 === f ? _ *= _ * _ * _ : 4 === f && (_ *= _ * _ * _ * _), this.ratio = 1 === u ? 1 - _ : 2 === u ? _ : t / l < .5 ? _ / 2 : 1 - _ / 2
                } else this.ratio = this._ease.getRatio(t / l);
                if (this._time !== o || i) {
                    if (!this._initted) {
                        if (this._init(), !this._initted || this._gc) return;
                        if (!i && this._firstPT && (!1 !== this.vars.lazy && this._duration || this.vars.lazy && !this._duration)) return this._time = this._totalTime = o, this._rawPrevTime = h, I.push(this), void (this._lazy = [t, e]);
                        this._time && !s ? this.ratio = this._ease.getRatio(this._time / l) : s && this._ease._calcEnd && (this.ratio = this._ease.getRatio(0 === this._time ? 0 : 1))
                    }
                    for (!1 !== this._lazy && (this._lazy = !1), this._active || !this._paused && this._time !== o && 0 <= t && (this._active = !0), 0 === o && (this._startAt && (0 <= t ? this._startAt.render(t, !0, i) : r || (r = "_dummyGS")), !this.vars.onStart || 0 === this._time && 0 !== l || (e || this._callback("onStart"))), n = this._firstPT; n;) n.f ? n.t[n.p](n.c * this.ratio + n.s) : n.t[n.p] = n.c * this.ratio + n.s, n = n._next;
                    this._onUpdate && (t < 0 && this._startAt && -1e-4 !== t && this._startAt.render(t, !0, i), e || (this._time !== o || s || i) && this._callback("onUpdate")), !r || this._gc && !i || (t < 0 && this._startAt && !this._onUpdate && -1e-4 !== t && this._startAt.render(t, !0, i), s && (this._timeline.autoRemoveChildren && this._enabled(!1, !1), this._active = !1), !e && this.vars[r] && this._callback(r), 0 === l && this._rawPrevTime === v && a !== v && (this._rawPrevTime = 0))
                }
            }, n._kill = function (t, e, i) {
                if ("all" === t && (t = null), null == t && (null == e || e === this.target)) return this._lazy = !1, this._enabled(!1, !1);
                e = "string" != typeof e ? e || this._targets || this.target : z.selector(e) || e;
                var s, r, n, a, o, l, h, _, u,
                    f = i && this._time && i._startTime === this._startTime && this._timeline === i._timeline;
                if ((x(e) || E(e)) && "number" != typeof e[0])
                    for (s = e.length; -1 < --s;) this._kill(t, e[s], i) && (l = !0);
                else {
                    if (this._targets) {
                        for (s = this._targets.length; -1 < --s;)
                            if (e === this._targets[s]) {
                                o = this._propLookup[s] || {}, this._overwrittenProps = this._overwrittenProps || [], r = this._overwrittenProps[s] = t ? this._overwrittenProps[s] || {} : "all";
                                break
                            }
                    } else {
                        if (e !== this.target) return !1;
                        o = this._propLookup, r = this._overwrittenProps = t ? this._overwrittenProps || {} : "all"
                    }
                    if (o) {
                        if (h = t || o, _ = t !== r && "all" !== r && t !== o && ("object" != typeof t || !t._tempKill), i && (z.onOverwrite || this.vars.onOverwrite)) {
                            for (n in h) o[n] && (u || (u = []), u.push(n));
                            if ((u || !t) && !tt(this, i, e, u)) return !1
                        }
                        for (n in h) (a = o[n]) && (f && (a.f ? a.t[a.p](a.s) : a.t[a.p] = a.s, l = !0), a.pg && a.t._kill(h) && (l = !0), a.pg && 0 !== a.t._overwriteProps.length || (a._prev ? a._prev._next = a._next : a === this._firstPT && (this._firstPT = a._next), a._next && (a._next._prev = a._prev), a._next = a._prev = null), delete o[n]), _ && (r[n] = 1);
                        !this._firstPT && this._initted && this._enabled(!1, !1)
                    }
                }
                return l
            }, n.invalidate = function () {
                return this._notifyPluginsOfEnabled && z._onPluginEvent("_onDisable", this), this._firstPT = this._overwrittenProps = this._startAt = this._onUpdate = null, this._notifyPluginsOfEnabled = this._active = this._lazy = !1, this._propLookup = this._targets ? {} : [], _.prototype.invalidate.call(this), this.vars.immediateRender && (this._time = -v, this.render(Math.min(0, -this._delay))), this
            }, n._enabled = function (t, e) {
                if (g || m.wake(), t && this._gc) {
                    var i, s = this._targets;
                    if (s)
                        for (i = s.length; -1 < --i;) this._siblings[i] = J(s[i], this, !0);
                    else this._siblings = J(this.target, this, !0)
                }
                return _.prototype._enabled.call(this, t, e), !(!this._notifyPluginsOfEnabled || !this._firstPT) && z._onPluginEvent(t ? "_onEnable" : "_onDisable", this)
            }, z.to = function (t, e, i) {
                return new z(t, e, i)
            }, z.from = function (t, e, i) {
                return i.runBackwards = !0, i.immediateRender = 0 != i.immediateRender, new z(t, e, i)
            }, z.fromTo = function (t, e, i, s) {
                return s.startAt = i, s.immediateRender = 0 != s.immediateRender && 0 != i.immediateRender, new z(t, e, s)
            }, z.delayedCall = function (t, e, i, s, r) {
                return new z(e, 0, {
                    delay: t,
                    onComplete: e,
                    onCompleteParams: i,
                    callbackScope: s,
                    onReverseComplete: e,
                    onReverseCompleteParams: i,
                    immediateRender: !1,
                    lazy: !1,
                    useFrames: r,
                    overwrite: 0
                })
            }, z.set = function (t, e) {
                return new z(t, 0, e)
            }, z.getTweensOf = function (t, e) {
                if (null == t) return [];
                var i, s, r, n;
                if (t = "string" != typeof t ? t : z.selector(t) || t, (x(t) || E(t)) && "number" != typeof t[0]) {
                    for (i = t.length, s = []; -1 < --i;) s = s.concat(z.getTweensOf(t[i], e));
                    for (i = s.length; -1 < --i;)
                        for (n = s[i], r = i; -1 < --r;) n === s[r] && s.splice(i, 1)
                } else if (t._gsTweenID)
                    for (i = (s = J(t).concat()).length; -1 < --i;) (s[i]._gc || e && !s[i].isActive()) && s.splice(i, 1);
                return s || []
            }, z.killTweensOf = z.killDelayedCallsTo = function (t, e, i) {
                "object" == typeof e && (i = e, e = !1);
                for (var s = z.getTweensOf(t, e), r = s.length; -1 < --r;) s[r]._kill(i, t)
            };
            var st = P("plugins.TweenPlugin", function (t, e) {
                this._overwriteProps = (t || "").split(","), this._propName = this._overwriteProps[0], this._priority = e || 0, this._super = st.prototype
            }, !0);
            if (n = st.prototype, st.version = "1.19.0", st.API = 2, n._firstPT = null, n._addTween = j, n.setRatio = B, n._kill = function (t) {
                var e, i = this._overwriteProps,
                    s = this._firstPT;
                if (null != t[this._propName]) this._overwriteProps = [];
                else
                    for (e = i.length; -1 < --e;) null != t[i[e]] && i.splice(e, 1);
                for (; s;) null != t[s.n] && (s._next && (s._next._prev = s._prev), s._prev ? (s._prev._next = s._next, s._prev = null) : this._firstPT === s && (this._firstPT = s._next)), s = s._next;
                return !1
            }, n._mod = n._roundProps = function (t) {
                for (var e, i = this._firstPT; i;) (e = t[this._propName] || null != i.n && t[i.n.split(this._propName + "_").join("")]) && "function" == typeof e && (2 === i.f ? i.t._applyPT.m = e : i.m = e), i = i._next
            }, z._onPluginEvent = function (t, e) {
                var i, s, r, n, a, o = e._firstPT;
                if ("_onInitAllProps" === t) {
                    for (; o;) {
                        for (a = o._next, s = r; s && s.pr > o.pr;) s = s._next;
                        (o._prev = s ? s._prev : n) ? o._prev._next = o : r = o, (o._next = s) ? s._prev = o : n = o, o = a
                    }
                    o = e._firstPT = r
                }
                for (; o;) o.pg && "function" == typeof o.t[t] && o.t[t]() && (i = !0), o = o._next;
                return i
            }, st.activate = function (t) {
                for (var e = t.length; -1 < --e;) t[e].API === st.API && (V[(new t[e])._propName] = t[e]);
                return !0
            }, a.plugin = function (t) {
                if (!(t && t.propName && t.init && t.API)) throw "illegal plugin definition.";
                var e, i = t.propName,
                    s = t.priority || 0,
                    r = t.overwriteProps,
                    n = {
                        init: "_onInitTween",
                        set: "setRatio",
                        kill: "_kill",
                        round: "_mod",
                        mod: "_mod",
                        initAll: "_onInitAllProps"
                    },
                    a = P("plugins." + i.charAt(0).toUpperCase() + i.substr(1) + "Plugin", function () {
                        st.call(this, i, s), this._overwriteProps = r || []
                    }, !0 === t.global),
                    o = a.prototype = new st(i);
                for (e in (o.constructor = a).API = t.API, n) "function" == typeof t[e] && (o[n[e]] = t[e]);
                return a.version = t.version, st.activate([a]), a
            }, t = f._gsQueue) {
                for (r = 0; r < t.length; r++) t[r]();
                for (n in b) b[n].func || f.console.log("GSAP encountered missing dependency: " + n)
            }
            g = !1
        }
    }("undefined" != typeof module && module.exports && "undefined" != typeof global ? global : this || window, "TweenMax");
var _gsScope = "undefined" != typeof module && module.exports && "undefined" != typeof global ? global : this || window;
(_gsScope._gsQueue || (_gsScope._gsQueue = [])).push(function () {
    "use strict";

    function y(e) {
        window.console && console.log(e)
    }

    function x(e, t, r, n, o, i, a, s, l) {
        if (e !== s || t !== l) {
            r = Math.abs(r), n = Math.abs(n);
            var h = o % 360 * Q,
                u = Math.cos(h),
                c = Math.sin(h),
                f = (e - s) / 2,
                g = (t - l) / 2,
                p = u * f + c * g,
                d = -c * f + u * g,
                v = r * r,
                b = n * n,
                M = p * p,
                m = d * d,
                A = M / v + m / b;
            1 < A && (v = (r = Math.sqrt(A) * r) * r, b = (n = Math.sqrt(A) * n) * n);
            var y = i === a ? -1 : 1,
                x = (v * b - v * m - b * M) / (v * m + b * M);
            x < 0 && (x = 0);
            var N = y * Math.sqrt(x),
                S = r * d / n * N,
                z = -n * p / r * N,
                _ = u * S - c * z + (e + s) / 2,
                P = c * S + u * z + (t + l) / 2,
                w = (p - S) / r,
                T = (d - z) / n,
                L = (-p - S) / r,
                q = (-d - z) / n,
                G = Math.sqrt(w * w + T * T),
                I = w,
                Y = (y = T < 0 ? -1 : 1) * Math.acos(I / G) * E;
            G = Math.sqrt((w * w + T * T) * (L * L + q * q)), I = w * L + T * q;
            var B = (y = w * q - T * L < 0 ? -1 : 1) * Math.acos(I / G) * E;
            !a && 0 < B ? B -= 360 : a && B < 0 && (B += 360);
            var C, X, R, V = function (e, t) {
                    var r, n, o, i, a, s, l = Math.ceil(Math.abs(t) / 90),
                        h = 0,
                        u = [];
                    for (e *= Q, r = (t *= Q) / l, n = 4 / 3 * Math.sin(r / 2) / (1 + Math.cos(r / 2)), s = 0; s < l; s++) o = e + s * r, i = Math.cos(o), a = Math.sin(o), u[h++] = i - n * a, u[h++] = a + n * i, o += r, i = Math.cos(o), a = Math.sin(o), u[h++] = i + n * a, u[h++] = a - n * i, u[h++] = i, u[h++] = a;
                    return u
                }(Y %= 360, B %= 360),
                F = u * r,
                j = c * r,
                H = c * -n,
                O = u * n,
                D = V.length - 2;
            for (C = 0; C < D; C += 2) X = V[C], R = V[C + 1], V[C] = X * F + R * H + _, V[C + 1] = X * j + R * O + P;
            return V[V.length - 2] = s, V[V.length - 1] = l, V
        }
    }

    function f(e) {
        var t, r, n, o, i, a, s, l, h, u, c, f, g, p = (e + "").replace(B, function (e) {
                var t = +e;
                return t < 1e-4 && -1e-4 < t ? 0 : t
            }).match(I) || [],
            d = [],
            v = 0,
            b = 0,
            M = p.length,
            m = 2,
            A = 0;
        if (!e || !isNaN(p[0]) || isNaN(p[1])) return y("ERROR: malformed path data: " + e), d;
        for (t = 0; t < M; t++)
            if (g = i, isNaN(p[t]) ? a = (i = p[t].toUpperCase()) !== p[t] : t--, n = +p[t + 1], o = +p[t + 2], a && (n += v, o += b), 0 === t && (l = n, h = o), "M" === i) s && s.length < 8 && (d.length -= 1, m = 0), v = l = n, b = h = o, s = [n, o], A += m, m = 2, d.push(s), t += 2, i = "L";
            else if ("C" === i) s || (s = [0, 0]), s[m++] = n, s[m++] = o, a || (v = b = 0), s[m++] = v + 1 * p[t + 3], s[m++] = b + 1 * p[t + 4], s[m++] = v += 1 * p[t + 5], s[m++] = b += 1 * p[t + 6], t += 6;
            else if ("S" === i) "C" === g || "S" === g ? (u = v - s[m - 4], c = b - s[m - 3], s[m++] = v + u, s[m++] = b + c) : (s[m++] = v, s[m++] = b), s[m++] = n, s[m++] = o, a || (v = b = 0), s[m++] = v += 1 * p[t + 3], s[m++] = b += 1 * p[t + 4], t += 4;
            else if ("Q" === i) u = n - v, c = o - b, s[m++] = v + 2 * u / 3, s[m++] = b + 2 * c / 3, a || (v = b = 0), u = n - (v += 1 * p[t + 3]), c = o - (b += 1 * p[t + 4]), s[m++] = v + 2 * u / 3, s[m++] = b + 2 * c / 3, s[m++] = v, s[m++] = b, t += 4;
            else if ("T" === i) u = v - s[m - 4], c = b - s[m - 3], s[m++] = v + u, s[m++] = b + c, u = v + 1.5 * u - n, c = b + 1.5 * c - o, s[m++] = n + 2 * u / 3, s[m++] = o + 2 * c / 3, s[m++] = v = n, s[m++] = b = o, t += 2;
            else if ("H" === i) o = b, s[m++] = v + (n - v) / 3, s[m++] = b + (o - b) / 3, s[m++] = v + 2 * (n - v) / 3, s[m++] = b + 2 * (o - b) / 3, s[m++] = v = n, s[m++] = o, t += 1;
            else if ("V" === i) o = n, n = v, a && (o += b - v), s[m++] = n, s[m++] = b + (o - b) / 3, s[m++] = n, s[m++] = b + 2 * (o - b) / 3, s[m++] = n, s[m++] = b = o, t += 1;
            else if ("L" === i || "Z" === i) "Z" === i && (n = l, o = h, s.closed = !0), ("L" === i || .5 < Math.abs(v - n) || .5 < Math.abs(b - o)) && (s[m++] = v + (n - v) / 3, s[m++] = b + (o - b) / 3, s[m++] = v + 2 * (n - v) / 3, s[m++] = b + 2 * (o - b) / 3, s[m++] = n, s[m++] = o, "L" === i && (t += 2)), v = n, b = o;
            else if ("A" === i) {
                for (f = x(v, b, 1 * p[t + 1], 1 * p[t + 2], 1 * p[t + 3], 1 * p[t + 4], 1 * p[t + 5], (a ? v : 0) + 1 * p[t + 6], (a ? b : 0) + 1 * p[t + 7]), r = 0; r < f.length; r++) s[m++] = f[r];
                v = s[m - 2], b = s[m - 1], t += 7
            } else y("Error: malformed path data: " + e);
        return d.totalPoints = A + m, d
    }

    function N(e, t) {
        var r, n, o, i, a, s, l, h, u, c, f, g, p, d, v = 0,
            b = e.length,
            M = t / ((b - 2) / 6);
        for (p = 2; p < b; p += 6)
            for (v += M; .999999 < v;) r = e[p - 2], n = e[p - 1], o = e[p], i = e[p + 1], a = e[p + 2], s = e[p + 3], l = e[p + 4], h = e[p + 5], u = r + (o - r) * (d = 1 / (Math.floor(v) + 1)), u += ((f = o + (a - o) * d) - u) * d, f += (a + (l - a) * d - f) * d, c = n + (i - n) * d, c += ((g = i + (s - i) * d) - c) * d, g += (s + (h - s) * d - g) * d, e.splice(p, 4, r + (o - r) * d, n + (i - n) * d, u, c, u + (f - u) * d, c + (g - c) * d, f, g, a + (l - a) * d, s + (h - s) * d), p += 6, b += 6, v--;
        return e
    }

    function a(e) {
        var t, r, n, o, i = "",
            a = e.length,
            s = 100;
        for (r = 0; r < a; r++) {
            for (i += "M" + (o = e[r])[0] + "," + o[1] + " C", t = o.length, n = 2; n < t; n++) i += (o[n++] * s | 0) / s + "," + (o[n++] * s | 0) / s + " " + (o[n++] * s | 0) / s + "," + (o[n++] * s | 0) / s + " " + (o[n++] * s | 0) / s + "," + (o[n] * s | 0) / s + " ";
            o.closed && (i += "z")
        }
        return i
    }

    function S(e) {
        for (var t = [], r = e.length - 1, n = 0; -1 < --r;) t[n++] = e[r], t[n++] = e[r + 1], r--;
        for (r = 0; r < n; r++) e[r] = t[r];
        e.reversed = !e.reversed
    }

    function g(e) {
        var t, r = e.length,
            n = 0,
            o = 0;
        for (t = 0; t < r; t++) n += e[t++], o += e[t];
        return [n / (r / 2), o / (r / 2)]
    }

    function z(e) {
        var t, r, n, o = e.length,
            i = e[0],
            a = i,
            s = e[1],
            l = s;
        for (n = 6; n < o; n += 6) i < (t = e[n]) ? i = t : t < a && (a = t), s < (r = e[n + 1]) ? s = r : r < l && (l = r);
        return e.centerX = (i + a) / 2, e.centerY = (s + l) / 2, e.size = (i - a) * (s - l)
    }

    function _(e) {
        for (var t, r, n, o, i, a = e.length, s = e[0][0], l = s, h = e[0][1], u = h; -1 < --a;)
            for (t = (i = e[a]).length, o = 6; o < t; o += 6) s < (r = i[o]) ? s = r : r < l && (l = r), h < (n = i[o + 1]) ? h = n : n < u && (u = n);
        return e.centerX = (s + l) / 2, e.centerY = (h + u) / 2, e.size = (s - l) * (h - u)
    }

    function P(e, t) {
        return t.length - e.length
    }

    function w(e, t) {
        var r = e.size || z(e),
            n = t.size || z(t);
        return Math.abs(n - r) < (r + n) / 20 ? t.centerX - e.centerX || t.centerY - e.centerY : n - r
    }

    function T(e, t) {
        var r, n, o = e.slice(0),
            i = e.length,
            a = i - 2;
        for (t |= 0, r = 0; r < i; r++) n = (r + t) % a, e[r++] = o[n], e[r] = o[1 + n]
    }

    function p(e, t, r, n, o) {
        var i, a, s, l, h = e.length,
            u = 0,
            c = h - 2;
        for (r *= 6, a = 0; a < h; a += 6) l = e[i = (a + r) % c] - (t[a] - n), s = e[1 + i] - (t[a + 1] - o), u += Math.sqrt(s * s + l * l);
        return u
    }

    function L(e, t, r) {
        var n, o, i, a = e.length,
            s = g(e),
            l = g(t),
            h = l[0] - s[0],
            u = l[1] - s[1],
            c = p(e, t, 0, h, u),
            f = 0;
        for (i = 6; i < a; i += 6) (o = p(e, t, i / 6, h, u)) < c && (c = o, f = i);
        if (r)
            for (n = e.slice(0), S(n), i = 6; i < a; i += 6) (o = p(n, t, i / 6, h, u)) < c && (c = o, f = -i);
        return f / 6
    }

    function q(e, t, r) {
        for (var n, o, i, a, s, l, h = e.length, u = 99999999999, c = 0, f = 0; -1 < --h;)
            for (l = (n = e[h]).length, s = 0; s < l; s += 6) o = n[s] - t, i = n[s + 1] - r, (a = Math.sqrt(o * o + i * i)) < u && (u = a, c = n[s], f = n[s + 1]);
        return [c, f]
    }

    function G(e, t, r, n, o, i) {
        var a, s, l, h, u = t.length,
            c = 0,
            f = Math.min(e.size || z(e), t[r].size || z(t[r])) * n,
            g = 999999999999,
            p = e.centerX + o,
            d = e.centerY + i;
        for (a = r; a < u && !((t[a].size || z(t[a])) < f); a++) s = t[a].centerX - p, l = t[a].centerY - d, (h = Math.sqrt(s * s + l * l)) < g && (c = a, g = h);
        return h = t[c], t.splice(c, 1), h
    }

    function s(e, t, r, n) {
        var o, i, a, s, l, h, u, c = t.length - e.length,
            f = 0 < c ? t : e,
            g = 0 < c ? e : t,
            p = 0,
            d = "complexity" === n ? P : w,
            v = "position" === n ? 0 : "number" == typeof n ? n : .8,
            b = g.length,
            M = "object" == typeof r && r.push ? r.slice(0) : [r],
            m = "reverse" === M[0] || M[0] < 0,
            A = "log" === r;
        if (g[0]) {
            if (1 < f.length && (e.sort(d), t.sort(d), h = f.size || _(f), h = g.size || _(g), h = f.centerX - g.centerX, u = f.centerY - g.centerY, d === w))
                for (b = 0; b < g.length; b++) f.splice(b, 0, G(g[b], f, b, v, h, u));
            if (c)
                for (c < 0 && (c = -c), f[0].length > g[0].length && N(g[0], (f[0].length - g[0].length) / 6 | 0), b = g.length; p < c;) f[b].size || z(f[b]), s = (a = q(g, f[b].centerX, f[b].centerY))[0], l = a[1], g[b++] = [s, l, s, l, s, l, s, l], g.totalPoints += 8, p++;
            for (b = 0; b < e.length; b++) o = t[b], i = e[b], (c = o.length - i.length) < 0 ? N(o, -c / 6 | 0) : 0 < c && N(i, c / 6 | 0), m && !i.reversed && S(i), (r = M[b] || 0 === M[b] ? M[b] : "auto") && (i.closed || Math.abs(i[0] - i[i.length - 2]) < .5 && Math.abs(i[1] - i[i.length - 1]) < .5 ? "auto" === r || "log" === r ? (M[b] = r = L(i, o, 0 === b), r < 0 && (m = !0, S(i), r = -r), T(i, 6 * r)) : "reverse" !== r && (b && r < 0 && S(i), T(i, 6 * (r < 0 ? -r : r))) : !m && ("auto" === r && Math.abs(o[0] - i[0]) + Math.abs(o[1] - i[1]) + Math.abs(o[o.length - 2] - i[i.length - 2]) + Math.abs(o[o.length - 1] - i[i.length - 1]) > Math.abs(o[0] - i[i.length - 2]) + Math.abs(o[1] - i[i.length - 1]) + Math.abs(o[o.length - 2] - i[0]) + Math.abs(o[o.length - 1] - i[1]) || r % 2) ? (S(i), M[b] = -1, m = !0) : "auto" === r ? M[b] = 0 : "reverse" === r && (M[b] = -1), i.closed !== o.closed && (i.closed = o.closed = !1));
            return A && y("shapeIndex:[" + M.join(",") + "]"), M
        }
    }

    function h(e, t, r, n) {
        var o = f(e[0]),
            i = f(e[1]);
        s(o, i, t || 0 === t ? t : "auto", r) && (e[0] = a(o), e[1] = a(i), "log" !== n && !0 !== n || y('precompile:["' + e[0] + '","' + e[1] + '"]'))
    }

    function o(e, t) {
        var r, n, o, i, a, s, l, h = 0,
            u = parseFloat(e[0]),
            c = parseFloat(e[1]),
            f = u + "," + c + " ";
        for (r = .5 * t / (.5 * (o = e.length) - 1), n = 0; n < o - 2; n += 2) {
            if (h += r, s = parseFloat(e[n + 2]), l = parseFloat(e[n + 3]), .999999 < h)
                for (a = 1 / (Math.floor(h) + 1), i = 1; .999999 < h;) f += (u + (s - u) * a * i).toFixed(2) + "," + (c + (l - c) * a * i).toFixed(2) + " ", h--, i++;
            f += s + "," + l + " ", u = s, c = l
        }
        return f
    }

    function r(e) {
        var t = e[0].match(Y) || [],
            r = e[1].match(Y) || [],
            n = r.length - t.length;
        0 < n ? e[0] = o(t, n) : e[1] = o(r, -n)
    }

    function u(t) {
        return isNaN(t) ? r : function (e) {
            r(e), e[1] = function (e, t) {
                if (!t) return e;
                var r, n, o, i = e.match(Y) || [],
                    a = i.length,
                    s = "";
                for (r = "reverse" === t ? (n = a - 1, -2) : (n = (2 * (parseInt(t, 10) || 0) + 1 + 100 * a) % a, 2), o = 0; o < a; o += 2) s += i[n - 1] + "," + i[n] + " ", n = (n + r) % a;
                return s
            }(e[1], parseInt(t, 10))
        }
    }

    function l(e, t) {
        var r, n, o, i, a, s, l, h, u, c, f, g, p, d, v, b, M, m, A, y, x, N = e.tagName.toLowerCase(),
            S = .552284749831;
        return "path" !== N && e.getBBox ? (s = function (e, t) {
            var r = document.createElementNS("http://www.w3.org/2000/svg", "path"),
                n = Array.prototype.slice.call(e.attributes),
                o = n.length;
            for (t = "," + t + ","; -1 < --o;) -1 === t.indexOf("," + n[o].nodeName + ",") && r.setAttributeNS(null, n[o].nodeName, n[o].nodeValue);
            return r
        }(e, "x,y,width,height,cx,cy,rx,ry,r,x1,x2,y1,y2,points"), "rect" === N ? (i = +e.getAttribute("rx") || 0, a = +e.getAttribute("ry") || 0, n = +e.getAttribute("x") || 0, o = +e.getAttribute("y") || 0, c = (+e.getAttribute("width") || 0) - 2 * i, f = (+e.getAttribute("height") || 0) - 2 * a, r = i || a ? "M" + (b = (d = (p = n + i) + c) + i) + "," + (m = o + a) + " V" + (A = m + f) + " C" + [b, y = A + a * S, v = d + i * S, x = A + a, d, x, d - (d - p) / 3, x, p + (d - p) / 3, x, p, x, g = n + i * (1 - S), x, n, y, n, A, n, A - (A - m) / 3, n, m + (A - m) / 3, n, m, n, M = o + a * (1 - S), g, o, p, o, p + (d - p) / 3, o, d - (d - p) / 3, o, d, o, v, o, b, M, b, m].join(",") + "z" : "M" + (n + c) + "," + o + " v" + f + " h" + -c + " v" + -f + " h" + c + "z") : "circle" === N || "ellipse" === N ? (h = "circle" === N ? (i = a = +e.getAttribute("r") || 0) * S : (i = +e.getAttribute("rx") || 0, (a = +e.getAttribute("ry") || 0) * S), r = "M" + ((n = +e.getAttribute("cx") || 0) + i) + "," + (o = +e.getAttribute("cy") || 0) + " C" + [n + i, o + h, n + (l = i * S), o + a, n, o + a, n - l, o + a, n - i, o + h, n - i, o, n - i, o - h, n - l, o - a, n, o - a, n + l, o - a, n + i, o - h, n + i, o].join(",") + "z") : "line" === N ? r = "M" + e.getAttribute("x1") + "," + e.getAttribute("y1") + " L" + e.getAttribute("x2") + "," + e.getAttribute("y2") : "polyline" !== N && "polygon" !== N || (r = "M" + (n = (u = (e.getAttribute("points") + "").match(Y) || []).shift()) + "," + (o = u.shift()) + " L" + u.join(","), "polygon" === N && (r += "," + n + "," + o + "z")), s.setAttribute("d", r), t && e.parentNode && (e.parentNode.insertBefore(s, e), e.parentNode.removeChild(e)), s) : e
    }

    function d(e, t, r) {
        var n, o, i = "string" == typeof e;
        return (!i || (e.match(Y) || []).length < 3) && ((n = i ? v.selector(e) : e && e[0] ? e : [e]) && n[0] ? (o = (n = n[0]).nodeName.toUpperCase(), t && "PATH" !== o && (n = l(n, !1), o = "PATH"), e = n.getAttribute("PATH" === o ? "d" : "points") || "", n === r && (e = n.getAttributeNS(null, "data-original") || e)) : (y("WARNING: invalid morph to: " + e), e = !1)), e
    }

    var Q = Math.PI / 180,
        E = 180 / Math.PI,
        I = /[achlmqstvz]|(-?\d*\.?\d*(?:e[\-+]?\d+)?)[0-9]/gi,
        Y = /(?:(-|-=|\+=)?\d*\.?\d*(?:e[\-+]?\d+)?)[0-9]/gi,
        c = /[achlmqstvz]/gi,
        B = /[\+\-]?\d*\.?\d+e[\+\-]?\d+/gi,
        v = _gsScope._gsDefine.globals.TweenLite,
        b = "Use MorphSVGPlugin.convertToPath(elementOrSelectorText) to convert to a path before morphing.",
        M = _gsScope._gsDefine.plugin({
            propName: "morphSVG",
            API: 2,
            global: !0,
            version: "0.8.6",
            init: function (e, t, r, n) {
                var o, i, a, s, l;
                return "function" == typeof e.setAttribute && ("function" == typeof t && (t = t(n, e)), l = "POLYLINE" === (o = e.nodeName.toUpperCase()) || "POLYGON" === o, "PATH" === o || l ? (i = "PATH" === o ? "d" : "points", ("string" == typeof t || t.getBBox || t[0]) && (t = {shape: t}), s = d(t.shape || t.d || t.points || "", "d" == i, e), l && c.test(s) ? (y("WARNING: a <" + o + "> cannot accept path data. " + b), !1) : (s && ((this._target = e).getAttributeNS(null, "data-original") || e.setAttributeNS(null, "data-original", e.getAttribute(i)), (a = this._addTween(e, "setAttribute", e.getAttribute(i) + "", s + "", "morphSVG", !1, i, "object" == typeof t.precompile ? function (e) {
                    e[0] = t.precompile[0], e[1] = t.precompile[1]
                } : "d" == i ? function (t, r, n) {
                    return r || n || t || 0 === t ? function (e) {
                        h(e, t, r, n)
                    } : h
                }(t.shapeIndex, t.map || M.defaultMap, t.precompile) : u(t.shapeIndex))) && (this._overwriteProps.push("morphSVG"), a.end = s, a.endProp = i)), !0)) : (y("WARNING: cannot morph a <" + o + "> SVG element. " + b), !1))
            },
            set: function (e) {
                var t;
                if (this._super.setRatio.call(this, e), 1 === e)
                    for (t = this._firstPT; t;) t.end && this._target.setAttribute(t.endProp, t.end), t = t._next
            }
        });
    M.pathFilter = h, M.pointsFilter = r, M.subdivideRawBezier = N, M.defaultMap = "size", M.pathDataToRawBezier = function (e) {
        return f(d(e, !0))
    }, M.equalizeSegmentQuantity = s, M.convertToPath = function (e, t) {
        "string" == typeof e && (e = v.selector(e));
        for (var r = e && 0 !== e.length ? e.length && e[0] && e[0].nodeType ? Array.prototype.slice.call(e, 0) : [e] : [], n = r.length; -1 < --n;) r[n] = l(r[n], !1 !== t);
        return r
    }, M.pathDataToBezier = function (e, t) {
        var r, n, o, i, a, s, l, h, u = f(d(e, !0))[0] || [],
            c = 0;
        if (h = (t = t || {}).align || t.relative, i = t.matrix || [1, 0, 0, 1, 0, 0], a = t.offsetX || 0, s = t.offsetY || 0, "relative" === h || !0 === h ? (a -= u[0] * i[0] + u[1] * i[2], s -= u[0] * i[1] + u[1] * i[3], c = "+=") : (a += i[4], s += i[5], h && ((h = "string" == typeof h ? v.selector(h) : h && h[0] ? h : [h]) && h[0] && (a -= (l = h[0].getBBox() || {
            x: 0,
            y: 0
        }).x, s -= l.y))), r = [], o = u.length, i)
            for (n = 0; n < o; n += 2) r.push({
                x: c + (u[n] * i[0] + u[n + 1] * i[2] + a),
                y: c + (u[n] * i[1] + u[n + 1] * i[3] + s)
            });
        else
            for (n = 0; n < o; n += 2) r.push({x: c + (u[n] + a), y: c + (u[n + 1] + s)});
        return r
    }
}), _gsScope._gsDefine && _gsScope._gsQueue.pop()(),
    function (e) {
        "use strict";

        function t() {
            return (_gsScope.GreenSockGlobals || _gsScope).MorphSVGPlugin
        }

        "function" == typeof define && define.amd ? define(["TweenLite"], t) : "undefined" != typeof module && module.exports && (require("../TweenLite.js"), module.exports = t())
    }();
var _gsScope = "undefined" != typeof module && module.exports && "undefined" != typeof global ? global : this || window;
!function (i) {
    "use strict";

    function $(e, t, i, n) {
        var s;
        return (i = i || F(e, null)) ? s = (e = i.getPropertyValue(t.replace(r, "-$1").toLowerCase())) || i.length ? e : i[t] : e.currentStyle && (s = (i = e.currentStyle)[t]), n ? s : parseInt(s, 10) || 0
    }

    function l(e) {
        return !!(e.length && e[0] && (e[0].nodeType && e[0].style && !e.nodeType || e[0].length && e[0][0]))
    }

    function C(e) {
        return (e.charCodeAt(0) - 55296 << 10) + (e.charCodeAt(1) - 56320) + 65536
    }

    function d(e, t) {
        var i = -1 !== (e = e || "").indexOf("++"),
            n = 1;
        return i && (e = e.split("++").join("")),
            function () {
                return "<" + t + o + (e ? " class='" + e + (i ? n++ : "") + "'>" : ">")
            }
    }

    function q(e, t) {
        for (var i = t.length; -1 < --i;) e.push(t[i])
    }

    function p(e) {
        var t, i = [],
            n = e.length;
        for (t = 0; t !== n; i.push(e[t++])) ;
        return i
    }

    function z(e, t, i) {
        for (var n; e && e !== t;) {
            if (n = e._next || e.nextSibling) return n.textContent.charAt(0) === i;
            e = e.parentNode || e._parent
        }
        return !1
    }

    function a(e, t, i, n, s, r, l) {
        var o, d, p, a, h, u, f, c, g, y, x, _, v = F(e),
            b = $(e, "paddingLeft", v),
            S = -999,
            m = $(e, "borderBottomWidth", v) + $(e, "borderTopWidth", v),
            C = $(e, "borderLeftWidth", v) + $(e, "borderRightWidth", v),
            T = $(e, "paddingTop", v) + $(e, "paddingBottom", v),
            N = $(e, "paddingLeft", v) + $(e, "paddingRight", v),
            w = .2 * $(e, "fontSize"),
            A = $(e, "textAlign", v, !0),
            L = [],
            B = [],
            V = [],
            W = t.wordDelimiter || " ",
            H = t.span ? "span" : "div",
            E = t.type || t.split || "chars,words,lines",
            O = s && -1 !== E.indexOf("lines") ? [] : null,
            k = -1 !== E.indexOf("words"),
            R = -1 !== E.indexOf("chars"),
            j = "absolute" === t.position || !0 === t.absolute,
            M = t.linesClass,
            G = -1 !== (M || "").indexOf("++");
        for (O && 1 === e.children.length && e.children[0]._isSplit && (e = e.children[0]), G && (M = M.split("++").join("")), p = (d = e.getElementsByTagName("*")).length, h = [], o = 0; o < p; o++) h[o] = d[o];
        if (O || j)
            for (o = 0; o < p; o++) ((u = (a = h[o]).parentNode === e) || j || R && !k) && (_ = a.offsetTop, O && u && Math.abs(_ - S) > w && "BR" !== a.nodeName && (f = [], O.push(f), S = _), j && (a._x = a.offsetLeft, a._y = _, a._w = a.offsetWidth, a._h = a.offsetHeight), O && ((a._isSplit && u || !R && u || k && u || !k && a.parentNode.parentNode === e && !a.parentNode._isSplit) && (f.push(a), a._x -= b, z(a, e, W) && (a._wordEnd = !0)), "BR" === a.nodeName && a.nextSibling && "BR" === a.nextSibling.nodeName && O.push([])));
        for (o = 0; o < p; o++) u = (a = h[o]).parentNode === e, "BR" !== a.nodeName ? (j && (g = a.style, k || u || (a._x += a.parentNode._x, a._y += a.parentNode._y), g.left = a._x + "px", g.top = a._y + "px", g.position = "absolute", g.display = "block", g.width = a._w + 1 + "px", g.height = a._h + "px"), !k && R ? a._isSplit ? (a._next = a.nextSibling, a.parentNode.appendChild(a)) : a.parentNode._isSplit ? (a._parent = a.parentNode, !a.previousSibling && a.firstChild && (a.firstChild._isFirst = !0), a._next = a.nextSibling && a.nextSibling._isFirst ? null : a.nextSibling, a.parentNode.removeChild(a), h.splice(o--, 1), p--) : u || (_ = !a.nextSibling && z(a.parentNode, e, W), a.parentNode._parent && a.parentNode._parent.appendChild(a), _ && a.parentNode.appendChild(D.createTextNode(" ")), t.span && (a.style.display = "inline"), L.push(a)) : a.parentNode._isSplit && !a._isSplit && "" !== a.innerHTML ? B.push(a) : R && !a._isSplit && (t.span && (a.style.display = "inline"), L.push(a))) : O || j ? (e.removeChild(a), h.splice(o--, 1), p--) : k || e.appendChild(a);
        if (O) {
            for (j && (y = D.createElement(H), e.appendChild(y), x = y.offsetWidth + "px", _ = y.offsetParent === e ? 0 : e.offsetLeft, e.removeChild(y)), g = e.style.cssText, e.style.cssText = "display:none;"; e.firstChild;) e.removeChild(e.firstChild);
            for (c = " " === W && (!j || !k && !R), o = 0; o < O.length; o++) {
                for (f = O[o], (y = D.createElement(H)).style.cssText = "display:block;text-align:" + A + ";position:" + (j ? "absolute;" : "relative;"), M && (y.className = M + (G ? o + 1 : "")), V.push(y), p = f.length, d = 0; d < p; d++) "BR" !== f[d].nodeName && (a = f[d], y.appendChild(a), c && a._wordEnd && y.appendChild(D.createTextNode(" ")), j && (0 === d && (y.style.top = a._y + "px", y.style.left = b + _ + "px"), a.style.top = "0px", _ && (a.style.left = a._x - _ + "px")));
                0 === p ? y.innerHTML = "&nbsp;" : k || R || (P(y), I(y, String.fromCharCode(160), " ")), j && (y.style.width = x, y.style.height = a._h + "px"), e.appendChild(y)
            }
            e.style.cssText = g
        }
        j && (l > e.clientHeight && (e.style.height = l - T + "px", e.clientHeight < l && (e.style.height = l + m + "px")), r > e.clientWidth && (e.style.width = r - N + "px", e.clientWidth < r && (e.style.width = r + C + "px"))), q(i, L), q(n, B), q(s, V)
    }

    var s = i.GreenSockGlobals || i,
        e = function (e) {
            var t, i = e.split("."),
                n = s;
            for (t = 0; t < i.length; t++) n[i[t]] = n = n[i[t]] || {};
            return n
        }("com.greensock.utils"),
        T = function (e) {
            var t = e.nodeType,
                i = "";
            if (1 === t || 9 === t || 11 === t) {
                if ("string" == typeof e.textContent) return e.textContent;
                for (e = e.firstChild; e; e = e.nextSibling) i += T(e)
            } else if (3 === t || 4 === t) return e.nodeValue;
            return i
        },
        D = document,
        F = D.defaultView ? D.defaultView.getComputedStyle : function () {
        },
        r = /([A-Z])/g,
        N = /(?:\r|\n|\t\t)/g,
        w = /(?:\s\s+)/g,
        A = 127462,
        L = 127487,
        o = " style='position:relative;display:inline-block;" + (D.all && !D.addEventListener ? "*display:inline;*zoom:1;'" : "'"),
        n = e.SplitText = s.SplitText = function (e, t) {
            if ("string" == typeof e && (e = n.selector(e)), !e) throw "cannot split a null element.";
            this.elements = l(e) ? function (e) {
                var t, i, n, s = [],
                    r = e.length;
                for (t = 0; t < r; t++)
                    if (i = e[t], l(i))
                        for (n = i.length, n = 0; n < i.length; n++) s.push(i[n]);
                    else s.push(i);
                return s
            }(e) : [e], this.chars = [], this.words = [], this.lines = [], this._originals = [], this.vars = t || {}, this.split(t)
        },
        I = function (e, t, i) {
            var n = e.nodeType;
            if (1 === n || 9 === n || 11 === n)
                for (e = e.firstChild; e; e = e.nextSibling) I(e, t, i);
            else 3 !== n && 4 !== n || (e.nodeValue = e.nodeValue.split(t).join(i))
        },
        P = function (e) {
            var t, i, n = p(e.childNodes),
                s = n.length;
            for (t = 0; t < s; t++) (i = n[t])._isSplit ? P(i) : (t && 3 === i.previousSibling.nodeType ? i.previousSibling.nodeValue += 3 === i.nodeType ? i.nodeValue : i.firstChild.nodeValue : 3 !== i.nodeType && e.insertBefore(i.firstChild, i), e.removeChild(i))
        },
        h = function (e, t, i, n) {
            var s, r, l = p(e.childNodes),
                o = l.length,
                d = "absolute" === t.position || !0 === t.absolute;
            if (3 !== e.nodeType || 1 < o) {
                for (t.absolute = !1, s = 0; s < o; s++) 3 === (r = l[s]).nodeType && !/\S+/.test(r.nodeValue) || (d && 3 !== r.nodeType && "inline" === $(r, "display", null, !0) && (r.style.display = "inline-block", r.style.position = "relative"), r._isSplit = !0, h(r, t, i, n));
                return t.absolute = d, void (e._isSplit = !0)
            }
            !function (e, t, i, n) {
                var s, r, l, o, d, p, a, h, u, f = t.span ? "span" : "div",
                    c = t.type || t.split || "chars,words,lines",
                    g = (c.indexOf("words"), -1 !== c.indexOf("chars")),
                    y = "absolute" === t.position || !0 === t.absolute,
                    x = t.wordDelimiter || " ",
                    _ = " " !== x ? "" : y ? "&#173; " : " ",
                    v = t.span ? "</span>" : "</div>",
                    b = !0,
                    S = D.createElement("div"),
                    m = e.parentNode;
                for (m.insertBefore(S, e), S.textContent = e.nodeValue, m.removeChild(e), a = -1 !== (s = T(e = S)).indexOf("<"), !1 !== t.reduceWhiteSpace && (s = s.replace(w, " ").replace(N, "")), a && (s = s.split("<").join("{{LT}}")), d = s.length, r = (" " === s.charAt(0) ? _ : "") + i(), l = 0; l < d; l++)
                    if ((p = s.charAt(l)) === x && s.charAt(l - 1) !== x && l) {
                        for (r += b ? v : "", b = !1; s.charAt(l + 1) === x;) r += _, l++;
                        l === d - 1 ? r += _ : ")" !== s.charAt(l + 1) && (r += _ + i(), b = !0)
                    } else "{" === p && "{{LT}}" === s.substr(l, 6) ? (r += g ? n() + "{{LT}}</" + f + ">" : "{{LT}}", l += 5) : 55296 <= p.charCodeAt(0) && p.charCodeAt(0) <= 56319 || 65024 <= s.charCodeAt(l + 1) && s.charCodeAt(l + 1) <= 65039 ? (h = C(s.substr(l, 2)), u = C(s.substr(l + 2, 2)), o = A <= h && h <= L && A <= u && u <= L || 127995 <= u && u <= 127999 ? 4 : 2, r += g && " " !== p ? n() + s.substr(l, o) + "</" + f + ">" : s.substr(l, o), l += o - 1) : r += g && " " !== p ? n() + p + "</" + f + ">" : p;
                e.outerHTML = r + (b ? v : ""), a && I(m, "{{LT}}", "<")
            }(e, t, i, n)
        },
        t = n.prototype;
    t.split = function (e) {
        this.isSplit && this.revert(), this.vars = e = e || this.vars, this._originals.length = this.chars.length = this.words.length = this.lines.length = 0;
        for (var t, i, n, s = this.elements.length, r = e.span ? "span" : "div", l = ("absolute" === e.position || e.absolute, d(e.wordsClass, r)), o = d(e.charsClass, r); -1 < --s;) n = this.elements[s], this._originals[s] = n.innerHTML, t = n.clientHeight, i = n.clientWidth, h(n, e, l, o), a(n, e, this.chars, this.words, this.lines, i, t);
        return this.chars.reverse(), this.words.reverse(), this.lines.reverse(), this.isSplit = !0, this
    }, t.revert = function () {
        if (!this._originals) throw "revert() call wasn't scoped properly.";
        for (var e = this._originals.length; -1 < --e;) this.elements[e].innerHTML = this._originals[e];
        return this.chars = [], this.words = [], this.lines = [], this.isSplit = !1, this
    }, n.selector = i.$ || i.jQuery || function (e) {
        var t = i.$ || i.jQuery;
        return t ? (n.selector = t)(e) : "undefined" == typeof document ? e : document.querySelectorAll ? document.querySelectorAll(e) : document.getElementById("#" === e.charAt(0) ? e.substr(1) : e)
    }, n.version = "0.5.6"
}(_gsScope),
    function (e) {
        "use strict";

        function t() {
            return (_gsScope.GreenSockGlobals || _gsScope).SplitText
        }

        "function" == typeof define && define.amd ? define([], t) : "undefined" != typeof module && module.exports && (module.exports = t())
    }();
var _gsScope = "undefined" != typeof module && module.exports && "undefined" != typeof global ? global : this || window;
(_gsScope._gsQueue || (_gsScope._gsQueue = [])).push(function () {
    "use strict";
    _gsScope._gsDefine("easing.CustomEase", ["easing.Ease"], function (m) {
        function n(e) {
            var t = this.lookup[e * this.l | 0] || this.lookup[this.l - 1];
            return t.nx < e && (t = t.n), t.y + (e - t.x) / t.cx * t.cy
        }

        function o(e, t, i) {
            this._calcEnd = !0, (this.id = e) && (m.map[e] = this), this.getRatio = n, this.setData(t, i)
        }

        var x = /(?:(-|-=|\+=)?\d*\.?\d*(?:e[\-+]?\d+)?)[0-9]/gi,
            S = /[achlmqstvz]|(-?\d*\.?\d*(?:e[\-+]?\d+)?)[0-9]/gi,
            w = /[\+\-]?\d*\.?\d+e[\+\-]?\d+/gi,
            d = /[cLlsS]/g,
            _ = "CustomEase only accepts Cubic Bezier data.",
            D = function (e, t, i, n, o, s, a, r, u, c, h) {
                var f, l = (e + i) / 2,
                    g = (t + n) / 2,
                    p = (i + o) / 2,
                    x = (n + s) / 2,
                    d = (o + a) / 2,
                    y = (s + r) / 2,
                    m = (l + p) / 2,
                    S = (g + x) / 2,
                    w = (p + d) / 2,
                    _ = (x + y) / 2,
                    b = (m + w) / 2,
                    v = (S + _) / 2,
                    M = a - e,
                    k = r - t,
                    C = Math.abs((i - a) * k - (n - r) * M),
                    z = Math.abs((o - a) * k - (s - r) * M);
                return c || (c = [{x: e, y: t}, {x: a, y: r}], h = 1), c.splice(h || c.length - 1, 0, {
                    x: b,
                    y: v
                }), u * (M * M + k * k) < (C + z) * (C + z) && (f = c.length, D(e, t, l, g, m, S, b, v, u, c, h), D(b, v, w, _, d, y, a, r, u, c, h + 1 + (c.length - f))), c
            },
            e = o.prototype = new m;
        return e.constructor = o, e.setData = function (e, t) {
            var i, n, o, s, a, r, u, c, h, f, l = (e = e || "0,0,1,1").match(x),
                g = 1,
                p = [];
            if (f = (t = t || {}).precision || 1, this.data = e, this.lookup = [], this.points = p, this.fast = f <= 1, (d.test(e) || -1 !== e.indexOf("M") && -1 === e.indexOf("C")) && (l = function (e) {
                var t, i, n, o, s, a, r, u, c, h, f, l = (e + "").replace(w, function (e) {
                        var t = +e;
                        return t < 1e-4 && -1e-4 < t ? 0 : t
                    }).match(S) || [],
                    g = [],
                    p = 0,
                    x = 0,
                    d = l.length,
                    y = 2;
                for (t = 0; t < d; t++)
                    if (c = o, isNaN(l[t]) ? s = (o = l[t].toUpperCase()) !== l[t] : t--, i = +l[t + 1], n = +l[t + 2], s && (i += p, n += x), t || (r = i, u = n), "M" === o) a && a.length < 8 && (g.length -= 1, y = 0), p = r = i, x = u = n, a = [i, n], y = 2, g.push(a), t += 2, o = "L";
                    else if ("C" === o) a || (a = [0, 0]), a[y++] = i, a[y++] = n, s || (p = x = 0), a[y++] = p + 1 * l[t + 3], a[y++] = x + 1 * l[t + 4], a[y++] = p += 1 * l[t + 5], a[y++] = x += 1 * l[t + 6], t += 6;
                    else if ("S" === o) "C" === c || "S" === c ? (h = p - a[y - 4], f = x - a[y - 3], a[y++] = p + h, a[y++] = x + f) : (a[y++] = p, a[y++] = x), a[y++] = i, a[y++] = n, s || (p = x = 0), a[y++] = p += 1 * l[t + 3], a[y++] = x += 1 * l[t + 4], t += 4;
                    else {
                        if ("L" !== o && "Z" !== o) throw _;
                        "Z" === o && (i = r, n = u, a.closed = !0), ("L" === o || .5 < Math.abs(p - i) || .5 < Math.abs(x - n)) && (a[y++] = p + (i - p) / 3, a[y++] = x + (n - x) / 3, a[y++] = p + 2 * (i - p) / 3, a[y++] = x + 2 * (n - x) / 3, a[y++] = i, a[y++] = n, "L" === o && (t += 2)), p = i, x = n
                    }
                return g[0]
            }(e)), 4 === (i = l.length)) l.unshift(0, 0), l.push(1, 1), i = 8;
            else if ((i - 2) % 6) throw _;
            for (0 == +l[0] && 1 == +l[i - 2] || function (e, t, i) {
                i || 0 === i || (i = Math.max(+e[e.length - 1], +e[1]));
                var n, o = -1 * +e[0],
                    s = -i,
                    a = e.length,
                    r = 1 / (+e[a - 2] + o),
                    u = -t || (Math.abs(+e[a - 1] - +e[1]) < .01 * (+e[a - 2] - +e[0]) ? function (e) {
                        var t, i = e.length,
                            n = 999999999999;
                        for (t = 1; t < i; t += 6) +e[t] < n && (n = +e[t]);
                        return n
                    }(e) + s : +e[a - 1] + s);
                for (u = u ? 1 / u : -r, n = 0; n < a; n += 2) e[n] = (+e[n] + o) * r, e[n + 1] = (+e[n + 1] + s) * u
            }(l, t.height, t.originY), this.rawBezier = l, s = 2; s < i; s += 6) n = {
                x: +l[s - 2],
                y: +l[s - 1]
            }, o = {
                x: +l[s + 4],
                y: +l[s + 5]
            }, p.push(n, o), D(n.x, n.y, +l[s], +l[s + 1], +l[s + 2], +l[s + 3], o.x, o.y, 1 / (2e5 * f), p, p.length - 1);
            for (i = p.length, s = 0; s < i; s++) u = p[s], c = p[s - 1] || u, u.x > c.x || c.y !== u.y && c.x === u.x || u === c ? (c.cx = u.x - c.x, c.cy = u.y - c.y, c.n = u, c.nx = u.x, this.fast && 1 < s && 2 < Math.abs(c.cy / c.cx - p[s - 2].cy / p[s - 2].cx) && (this.fast = !1), c.cx < g && (c.cx ? g = c.cx : c.cx = .001)) : (p.splice(s--, 1), i--);
            if (i = 1 / g + 1 | 0, a = 1 / (this.l = i), u = p[r = 0], this.fast) {
                for (s = 0; s < i; s++) h = s * a, u.nx < h && (u = p[++r]), n = u.y + (h - u.x) / u.cx * u.cy, this.lookup[s] = {
                    x: h,
                    cx: a,
                    y: n,
                    cy: 0,
                    nx: 9
                }, s && (this.lookup[s - 1].cy = n - this.lookup[s - 1].y);
                this.lookup[i - 1].cy = p[p.length - 1].y - n
            } else
                for (s = 0; s < i; s++) u.nx < s * a && (u = p[++r]), this.lookup[s] = u;
            return this
        }, e.getRatio = n, e.getSVGData = function (e) {
            return o.getSVGData(this, e)
        }, o.create = function (e, t, i) {
            return new o(e, t, i)
        }, o.version = "0.2.0", o.bezierToPoints = D, o.get = function (e) {
            return m.map[e]
        }, o.getSVGData = function (e, t) {
            var i, n, o, s, a, r, u, c, h, f, l = 1e3,
                g = (t = t || {}).width || 100,
                p = t.height || 100,
                x = t.x || 0,
                d = (t.y || 0) + p,
                y = t.path;
            if (t.invert && (p = -p, d = 0), (e = e.getRatio ? e : m.map[e] || console.log("No ease found: ", e)).rawBezier) {
                for (i = [], u = e.rawBezier.length, o = 0; o < u; o += 2) i.push(((x + e.rawBezier[o] * g) * l | 0) / l + "," + ((d + e.rawBezier[o + 1] * -p) * l | 0) / l);
                i[0] = "M" + i[0], i[1] = "C" + i[1]
            } else
                for (i = ["M" + x + "," + d], s = 1 / (u = Math.max(5, 200 * (t.precision || 1))), c = 5 / (u += 2), h = ((x + s * g) * l | 0) / l, n = ((f = ((d + e.getRatio(s) * -p) * l | 0) / l) - d) / (h - x), o = 2; o < u; o++) a = ((x + o * s * g) * l | 0) / l, r = ((d + e.getRatio(o * s) * -p) * l | 0) / l, (Math.abs((r - f) / (a - h) - n) > c || o === u - 1) && (i.push(h + "," + f), n = (r - f) / (a - h)), h = a, f = r;
            return y && ("string" == typeof y ? document.querySelector(y) : y).setAttribute("d", i.join(" ")), i.join(" ")
        }, o
    }, !0)
}), _gsScope._gsDefine && _gsScope._gsQueue.pop()(),
    function (e) {
        "use strict";

        function t() {
            return (_gsScope.GreenSockGlobals || _gsScope).CustomEase
        }

        "function" == typeof define && define.amd ? define(["TweenLite"], t) : "undefined" != typeof module && module.exports && (require("../TweenLite.js"), module.exports = t())
    }();
!function (p, d, c) {
    function v(e, n) {
        return typeof e === n
    }

    function m() {
        return "function" != typeof d.createElement ? d.createElement(arguments[0]) : b ? d.createElementNS.call(d, "http://www.w3.org/2000/svg", arguments[0]) : d.createElement.apply(d, arguments)
    }

    function h(e) {
        return e.replace(/([a-z])-([a-z])/g, function (e, n, t) {
            return n + t.toUpperCase()
        }).replace(/^-/, "")
    }

    function a(e, n) {
        return function () {
            return e.apply(n, arguments)
        }
    }

    function g(e) {
        return e.replace(/([A-Z])/g, function (e, n) {
            return "-" + n.toLowerCase()
        }).replace(/^ms-/, "-ms-")
    }

    function y(e, n, t, r) {
        var o, i, s, a, l = "modernizr",
            f = m("div"),
            u = function () {
                var e = d.body;
                return e || ((e = m(b ? "svg" : "body")).fake = !0), e
            }();
        if (parseInt(t, 10))
            for (; t--;) (s = m("div")).id = r ? r[t] : l + (t + 1), f.appendChild(s);
        return (o = m("style")).type = "text/css", o.id = "s" + l, (u.fake ? u : f).appendChild(o), u.appendChild(f), o.styleSheet ? o.styleSheet.cssText = e : o.appendChild(d.createTextNode(e)), f.id = l, u.fake && (u.style.background = "", u.style.overflow = "hidden", a = x.style.overflow, x.style.overflow = "hidden", x.appendChild(u)), i = n(f, e), u.fake ? (u.parentNode.removeChild(u), x.style.overflow = a, x.offsetHeight) : f.parentNode.removeChild(f), !!i
    }

    function l(e, n, t, r) {
        function o() {
            s && (delete _.style, delete _.modElem)
        }

        if (r = !v(r, "undefined") && r, !v(t, "undefined")) {
            var i = function (e, n) {
                var t = e.length;
                if ("CSS" in p && "supports" in p.CSS) {
                    for (; t--;)
                        if (p.CSS.supports(g(e[t]), n)) return !0;
                    return !1
                }
                if ("CSSSupportsRule" in p) {
                    for (var r = []; t--;) r.push("(" + g(e[t]) + ":" + n + ")");
                    return y("@supports (" + (r = r.join(" or ")) + ") { #modernizr { position: absolute; } }", function (e) {
                        return "absolute" == getComputedStyle(e, null).position
                    })
                }
                return c
            }(e, t);
            if (!v(i, "undefined")) return i
        }
        for (var s, a, l, f, u, d = ["modernizr", "tspan", "samp"]; !_.style && d.length;) s = !0, _.modElem = m(d.shift()), _.style = _.modElem.style;
        for (l = e.length, a = 0; a < l; a++)
            if (f = e[a], u = _.style[f], !~("" + f).indexOf("-") || (f = h(f)), _.style[f] !== c) {
                if (r || v(t, "undefined")) return o(), "pfx" != n || f;
                try {
                    _.style[f] = t
                } catch (e) {
                }
                if (_.style[f] != u) return o(), "pfx" != n || f
            }
        return o(), !1
    }

    function r(e, n, t, r, o) {
        var i = e.charAt(0).toUpperCase() + e.slice(1),
            s = (e + " " + w.join(i + " ") + i).split(" ");
        return v(n, "string") || v(n, "undefined") ? l(s, n, r, o) : function (e, n, t) {
            var r;
            for (var o in e)
                if (e[o] in n) return !1 === t ? e[o] : v(r = n[e[o]], "function") ? a(r, t || n) : r;
            return !1
        }(s = (e + " " + S.join(i + " ") + i).split(" "), n, t)
    }

    function e(e, n, t) {
        return r(e, c, c, n, t)
    }

    var f = [],
        u = [],
        n = {
            _version: "3.3.1",
            _config: {classPrefix: "", enableClasses: !0, enableJSClass: !0, usePrefixes: !0},
            _q: [],
            on: function (e, n) {
                var t = this;
                setTimeout(function () {
                    n(t[e])
                }, 0)
            },
            addTest: function (e, n, t) {
                u.push({name: e, fn: n, options: t})
            },
            addAsyncTest: function (e) {
                u.push({name: null, fn: e})
            }
        },
        C = function () {
        };
    C.prototype = n, C = new C;
    var x = d.documentElement,
        b = "svg" === x.nodeName.toLowerCase();
    C.addTest("placeholder", "placeholder" in m("input") && "placeholder" in m("textarea"));
    var t = "Moz O ms Webkit",
        w = n._config.usePrefixes ? t.split(" ") : [];
    n._cssomPrefixes = w;

    function o(e) {
        var n, t = prefixes.length,
            r = p.CSSRule;
        if (void 0 === r) return c;
        if (!e) return !1;
        if ((n = (e = e.replace(/^@/, "")).replace(/-/g, "_").toUpperCase() + "_RULE") in r) return "@" + e;
        for (var o = 0; o < t; o++) {
            var i = prefixes[o];
            if (i.toUpperCase() + "_" + n in r) return "@-" + i.toLowerCase() + "-" + e
        }
        return !1
    }

    n.atRule = o;
    var S = n._config.usePrefixes ? t.toLowerCase().split(" ") : [];
    n._domPrefixes = S;
    var i = {elem: m("modernizr")};
    C._q.push(function () {
        delete i.elem
    });
    var _ = {style: i.elem.style};
    C._q.unshift(function () {
        delete _.style
    }), n.testAllProps = r;
    var s = n.prefixed = function (e, n, t) {
        return 0 === e.indexOf("@") ? o(e) : (-1 != e.indexOf("-") && (e = h(e)), n ? r(e, n, t) : r(e, "pfx"))
    };
    C.addTest("backgroundblendmode", s("backgroundBlendMode", "text")), C.addTest("objectfit", !!s("objectFit"), {aliases: ["object-fit"]}), n.testAllProps = e, C.addTest("backgroundcliptext", function () {
        return e("backgroundClip", "text")
    }), C.addTest("bgsizecover", e("backgroundSize", "cover")),
        function () {
            var e, n, t, r, o, i;
            for (var s in u)
                if (u.hasOwnProperty(s)) {
                    if (e = [], (n = u[s]).name && (e.push(n.name.toLowerCase()), n.options && n.options.aliases && n.options.aliases.length))
                        for (t = 0; t < n.options.aliases.length; t++) e.push(n.options.aliases[t].toLowerCase());
                    for (r = v(n.fn, "function") ? n.fn() : n.fn, o = 0; o < e.length; o++) 1 === (i = e[o].split(".")).length ? C[i[0]] = r : (!C[i[0]] || C[i[0]] instanceof Boolean || (C[i[0]] = new Boolean(C[i[0]])), C[i[0]][i[1]] = r), f.push((r ? "" : "no-") + i.join("-"))
                }
        }(),
        function (e) {
            var n = x.className,
                t = C._config.classPrefix || "";
            if (b && (n = n.baseVal), C._config.enableJSClass) {
                var r = new RegExp("(^|\\s)" + t + "no-js(\\s|$)");
                n = n.replace(r, "$1" + t + "js$2")
            }
            C._config.enableClasses && (n += " " + t + e.join(" " + t), b ? x.className.baseVal = n : x.className = n)
        }(f), delete n.addTest, delete n.addAsyncTest;
    for (var T = 0; T < C._q.length; T++) C._q[T]();
    p.Modernizr = C
}(window, document);
!function (c, w, x) {
    "use strict";

    function t(e) {
        if (S = w.documentElement, n = w.body, G(), re = this, le = (e = e || {}).constants || {}, e.easing)
            for (var t in e.easing) Y[t] = e.easing[t];
        de = e.edgeStrategy || "set", ae = {
            beforerender: e.beforerender,
            render: e.render,
            keyframe: e.keyframe
        }, (ie = !1 !== e.forceHeight) && (Ie = e.scale || 1), se = e.mobileDeceleration || u, fe = !1 !== e.smoothScrolling, ue = e.smoothScrollingDuration || p, me = {targetTop: re.getScrollTop()}, (Me = (e.mobileCheck || function () {
            return /Android|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent || navigator.vendor || c.opera)
        })()) ? ((oe = w.getElementById(e.skrollrBody || m)) && te(), R(), Ee(S, [a, s], [i])) : Ee(S, [a, l], [i]), re.refresh(), he(c, "resize orientationchange", function () {
            var e = S.clientWidth,
                t = S.clientHeight;
            t === ze && e === Ve || (ze = t, Ve = e, qe = !0)
        });
        var r = K();
        return function e() {
            U(), ve = r(e)
        }(), re
    }

    function E(e, t) {
        return t.toUpperCase()
    }

    var S, n, A = {
            get: function () {
                return re
            },
            init: function (e) {
                return re || new t(e)
            },
            VERSION: "0.6.29"
        },
        F = Object.prototype.hasOwnProperty,
        k = c.Math,
        o = c.getComputedStyle,
        C = "touchstart",
        H = "touchmove",
        D = "touchcancel",
        I = "touchend",
        P = "skrollable",
        N = P + "-before",
        O = P + "-between",
        V = P + "-after",
        a = "skrollr",
        i = "no-" + a,
        l = a + "-desktop",
        s = a + "-mobile",
        f = "linear",
        u = .004,
        m = "skrollr-body",
        p = 200,
        d = "center",
        g = "bottom",
        z = "___skrollable_id",
        q = /^(?:input|textarea|button|select)$/i,
        r = /^\s+|\s+$/g,
        L = /^data(?:-(_\w+))?(?:-?(-?\d*\.?\d+p?))?(?:-?(start|end|top|center|bottom))?(?:-?(top|center|bottom))?$/,
        v = /\s*(@?[\w\-\[\]]+)\s*:\s*(.+?)\s*(?:;|$)/gi,
        h = /^(@?[a-z\-]+)\[(\w+)\]$/,
        M = /-([a-z0-9_])/g,
        y = /[\-+]?[\d]*\.?[\d]+/g,
        T = /\{\?\}/g,
        b = /rgba?\(\s*-?\d+\s*,\s*-?\d+\s*,\s*-?\d+/g,
        $ = /[a-z\-]+-gradient/g,
        B = "",
        _ = "",
        G = function () {
            var e = /^(?:O|Moz|webkit|ms)|(?:-(?:o|moz|webkit|ms)-)/;
            if (o) {
                var t = o(n, null);
                for (var r in t)
                    if (B = r.match(e) || +r == r && t[r].match(e)) break;
                if (!B) return B = _ = "", x;
                "-" === (B = B[0]).slice(0, 1) ? B = {
                    "-webkit-": "webkit",
                    "-moz-": "Moz",
                    "-ms-": "ms",
                    "-o-": "O"
                }[_ = B] : _ = "-" + B.toLowerCase() + "-"
            }
        },
        K = function () {
            var e = c.requestAnimationFrame || c[B.toLowerCase() + "RequestAnimationFrame"],
                n = Ce();
            return !Me && e || (e = function (e) {
                var t = Ce() - n,
                    r = k.max(0, 1e3 / 60 - t);
                return c.setTimeout(function () {
                    n = Ce(), e()
                }, r)
            }), e
        },
        Y = {
            begin: function () {
                return 0
            },
            end: function () {
                return 1
            },
            linear: function (e) {
                return e
            },
            quadratic: function (e) {
                return e * e
            },
            cubic: function (e) {
                return e * e * e
            },
            swing: function (e) {
                return -k.cos(e * k.PI) / 2 + .5
            },
            sqrt: function (e) {
                return k.sqrt(e)
            },
            outCubic: function (e) {
                return k.pow(e - 1, 3) + 1
            },
            bounce: function (e) {
                var t;
                if (e <= .5083) t = 3;
                else if (e <= .8489) t = 9;
                else if (e <= .96208) t = 27;
                else {
                    if (!(e <= .99981)) return 1;
                    t = 91
                }
                return 1 - k.abs(3 * k.cos(1.028 * e * t) / t)
            }
        };
    t.prototype.refresh = function (e) {
        var t, r, n = !1;
        for (e === x ? (n = !0, ne = [], Le = 0, e = w.getElementsByTagName("*")) : e.length === x && (e = [e]), t = 0, r = e.length; t < r; t++) {
            var o = e[t],
                a = o,
                i = [],
                l = fe,
                s = de,
                c = !1;
            if (n && z in o && delete o[z], o.attributes) {
                for (var f = 0, u = o.attributes.length; f < u; f++) {
                    var m = o.attributes[f];
                    if ("data-anchor-target" !== m.name)
                        if ("data-smooth-scrolling" !== m.name)
                            if ("data-edge-strategy" !== m.name)
                                if ("data-emit-events" !== m.name) {
                                    var p = m.name.match(L);
                                    if (null !== p) {
                                        var d = {props: m.value, element: o, eventType: m.name.replace(M, E)};
                                        i.push(d);
                                        var g = p[1];
                                        g && (d.constant = g.substr(1));
                                        var v = p[2];
                                        /p$/.test(v) ? (d.isPercentage = !0, d.offset = (0 | v.slice(0, -1)) / 100) : d.offset = 0 | v;
                                        var h = p[3],
                                            y = p[4] || h;
                                        h && "start" !== h && "end" !== h ? (d.mode = "relative", d.anchors = [h, y]) : (d.mode = "absolute", "end" === h ? d.isEnd = !0 : d.isPercentage || (d.offset = d.offset * Ie))
                                    }
                                } else c = !0;
                            else s = m.value;
                        else l = "off" !== m.value;
                    else if (null === (a = w.querySelector(m.value))) throw 'Unable to find anchor target "' + m.value + '"'
                }
                var T, b, S;
                if (i.length) b = !n && z in o ? (S = o[z], T = ne[S].styleAttr, ne[S].classAttr) : (S = o[z] = Le++, T = o.style.cssText, xe(o)), ne[S] = {
                    element: o,
                    styleAttr: T,
                    classAttr: b,
                    anchorTarget: a,
                    keyFrames: i,
                    smoothScrolling: l,
                    edgeStrategy: s,
                    emitEvents: c,
                    lastFrameIndex: -1
                }, Ee(o, [P], [])
            }
        }
        for (Se(), t = 0, r = e.length; t < r; t++) {
            var k = ne[e[t][z]];
            k !== x && (X(k), W(k))
        }
        return re
    }, t.prototype.relativeToAbsolute = function (e, t, r) {
        var n = S.clientHeight,
            o = e.getBoundingClientRect(),
            a = o.top,
            i = o.bottom - o.top;
        return t === g ? a -= n : t === d && (a -= n / 2), r === g ? a += i : r === d && (a += i / 2), 0 | (a += re.getScrollTop()) + .5
    }, t.prototype.animateTo = function (e, t) {
        t = t || {};
        var r = Ce(),
            n = re.getScrollTop();
        return (ce = {
            startTop: n,
            topDiff: e - n,
            targetTop: e,
            duration: t.duration || 1e3,
            startTime: r,
            endTime: r + (t.duration || 1e3),
            easing: Y[t.easing || f],
            done: t.done
        }).topDiff || (ce.done && ce.done.call(re, !1), ce = x), re
    }, t.prototype.stopAnimateTo = function () {
        ce && ce.done && ce.done.call(re, !0), ce = x
    }, t.prototype.isAnimatingTo = function () {
        return !!ce
    }, t.prototype.isMobile = function () {
        return Me
    }, t.prototype.setScrollTop = function (e, t) {
        return pe = !0 === t, Me ? $e = k.min(k.max(e, 0), De) : c.scrollTo(0, e), re
    }, t.prototype.getScrollTop = function () {
        return Me ? $e : c.pageYOffset || S.scrollTop || n.scrollTop || 0
    }, t.prototype.getMaxScrollTop = function () {
        return De
    }, t.prototype.on = function (e, t) {
        return ae[e] = t, re
    }, t.prototype.off = function (e) {
        return delete ae[e], re
    }, t.prototype.destroy = function () {
        (function () {
            var e = c.cancelAnimationFrame || c[B.toLowerCase() + "CancelAnimationFrame"];
            return !Me && e || (e = function (e) {
                return c.clearTimeout(e)
            }), e
        })()(ve), Te(), Ee(S, [i], [a, l, s]);
        for (var e = 0, t = ne.length; e < t; e++) ee(ne[e].element);
        S.style.overflow = n.style.overflow = "", S.style.height = n.style.height = "", oe && A.setStyle(oe, "transform", "none"), Pe = "down", Me = qe = !(Ne = -(Ie = 1)), $e = Le = ze = Ve = De = 0, ge = de = pe = me = ue = fe = ce = se = le = ie = ae = oe = re = x
    };
    var R = function () {
            var f, u, m, p, d, g, v, h, y, T, b;
            he(S, [C, H, D, I].join(" "), function (e) {
                var t = e.changedTouches[0];
                for (p = e.target; 3 === p.nodeType;) p = p.parentNode;
                switch (d = t.clientY, g = t.clientX, y = e.timeStamp, q.test(p.tagName) || e.preventDefault(), e.type) {
                    case C:
                        f && f.blur(), re.stopAnimateTo(), f = p, u = v = d, m = g, y;
                        break;
                    case H:
                        q.test(p.tagName) && w.activeElement !== p && e.preventDefault(), h = d - v, b = y - T, re.setScrollTop($e - h, !0), v = d, T = y;
                        break;
                    default:
                    case D:
                    case I:
                        var r = u - d,
                            n = m - g;
                        if (n * n + r * r < 49) {
                            if (!q.test(f.tagName)) {
                                f.focus();
                                var o = w.createEvent("MouseEvents");
                                o.initMouseEvent("click", !0, !0, e.view, 1, t.screenX, t.screenY, t.clientX, t.clientY, e.ctrlKey, e.altKey, e.shiftKey, e.metaKey, 0, null), f.dispatchEvent(o)
                            }
                            return
                        }
                        f = x;
                        var a = h / b;
                        a = k.max(k.min(a, 3), -3);
                        var i = k.abs(a / se),
                            l = a * i + .5 * se * i * i,
                            s = re.getScrollTop() - l,
                            c = 0;
                        De < s ? (c = (De - s) / l, s = De) : s < 0 && (c = -s / l, s = 0), i *= 1 - c, re.animateTo(0 | s + .5, {
                            easing: "outCubic",
                            duration: i
                        })
                }
            }), c.scrollTo(0, 0), S.style.overflow = n.style.overflow = "hidden"
        },
        U = function () {
            qe && (qe = !1, Se());
            var e, t, r = re.getScrollTop(),
                n = Ce();
            if (ce) n >= ce.endTime ? (r = ce.targetTop, e = ce.done, ce = x) : (t = ce.easing((n - ce.startTime) / ce.duration), r = 0 | ce.startTop + t * ce.topDiff), re.setScrollTop(r, !0);
            else if (!pe) {
                me.targetTop - r && (me = {
                    startTop: Ne,
                    topDiff: r - Ne,
                    targetTop: r,
                    startTime: Oe,
                    endTime: Oe + ue
                }), me.endTime >= n && (t = Y.sqrt((n - me.startTime) / ue), r = 0 | me.startTop + t * me.topDiff)
            }
            if (Me && oe && A.setStyle(oe, "transform", "translate(0, " + -$e + "px) " + ge), pe || Ne !== r) {
                var o = {curTop: r, lastTop: Ne, maxTop: De, direction: Pe = Ne < r ? "down" : r < Ne ? "up" : Pe};
                (pe = !1) !== (ae.beforerender && ae.beforerender.call(re, o)) && (function (e, t) {
                    for (var r = 0, n = ne.length; r < n; r++) {
                        var o, a, i = ne[r],
                            l = i.element,
                            s = i.smoothScrolling ? e : t,
                            c = i.keyFrames,
                            f = c.length,
                            u = c[0],
                            m = c[c.length - 1],
                            p = u.frame > s,
                            d = s > m.frame,
                            g = p ? u : m,
                            v = i.emitEvents,
                            h = i.lastFrameIndex;
                        if (p || d) {
                            if (p && -1 === i.edge || d && 1 === i.edge) continue;
                            switch (p ? (Ee(l, [N], [V, O]), v && -1 < h && (be(l, u.eventType, Pe), i.lastFrameIndex = -1)) : (Ee(l, [V], [N, O]), v && h < f && (be(l, m.eventType, Pe), i.lastFrameIndex = f)), i.edge = p ? -1 : 1, i.edgeStrategy) {
                                case "reset":
                                    ee(l);
                                    continue;
                                case "ease":
                                    s = g.frame;
                                    break;
                                default:
                                case "set":
                                    var y = g.props;
                                    for (o in y) F.call(y, o) && (a = Q(y[o].value), 0 === o.indexOf("@") ? l.setAttribute(o.substr(1), a) : A.setStyle(l, o, a));
                                    continue
                            }
                        } else 0 !== i.edge && (Ee(l, [P, O], [N, V]), i.edge = 0);
                        for (var T = 0; T < f - 1; T++)
                            if (s >= c[T].frame && c[T + 1].frame >= s) {
                                var b = c[T],
                                    S = c[T + 1];
                                for (o in b.props)
                                    if (F.call(b.props, o)) {
                                        var k = (s - b.frame) / (S.frame - b.frame);
                                        k = b.props[o].easing(k), a = J(b.props[o].value, S.props[o].value, k), a = Q(a), 0 === o.indexOf("@") ? l.setAttribute(o.substr(1), a) : A.setStyle(l, o, a)
                                    }
                                v && h !== T && (be(l, "down" === Pe ? b.eventType : S.eventType, Pe), i.lastFrameIndex = T);
                                break
                            }
                    }
                }(r, re.getScrollTop()), Ne = r, ae.render && ae.render.call(re, o)), e && e.call(re, !1)
            }
            Oe = n
        },
        X = function (e) {
            for (var t = 0, r = e.keyFrames.length; t < r; t++) {
                for (var n, o, a, i, l = e.keyFrames[t], s = {}; null !== (i = v.exec(l.props));) a = i[1], o = i[2], n = null !== (n = a.match(h)) ? (a = n[1], n[2]) : f, o = o.indexOf("!") ? j(o) : [o.slice(1)], s[a] = {
                    value: o,
                    easing: Y[n]
                };
                l.props = s
            }
        },
        j = function (e) {
            var t = [];
            return b.lastIndex = 0, e = e.replace(b, function (e) {
                return e.replace(y, function (e) {
                    return e / 255 * 100 + "%"
                })
            }), _ && ($.lastIndex = 0, e = e.replace($, function (e) {
                return _ + e
            })), e = e.replace(y, function (e) {
                return t.push(+e), "{?}"
            }), t.unshift(e), t
        },
        W = function (e) {
            var t, r, n = {};
            for (t = 0, r = e.keyFrames.length; t < r; t++) Z(e.keyFrames[t], n);
            for (n = {}, t = e.keyFrames.length - 1; 0 <= t; t--) Z(e.keyFrames[t], n)
        },
        Z = function (e, t) {
            var r;
            for (r in t) F.call(e.props, r) || (e.props[r] = t[r]);
            for (r in e.props) t[r] = e.props[r]
        },
        J = function (e, t, r) {
            var n, o = e.length;
            if (o !== t.length) throw "Can't interpolate between \"" + e[0] + '" and "' + t[0] + '"';
            var a = [e[0]];
            for (n = 1; n < o; n++) a[n] = e[n] + (t[n] - e[n]) * r;
            return a
        },
        Q = function (e) {
            var t = 1;
            return T.lastIndex = 0, e[0].replace(T, function () {
                return e[t++]
            })
        },
        ee = function (e, t) {
            for (var r, n, o = 0, a = (e = [].concat(e)).length; o < a; o++) n = e[o], (r = ne[n[z]]) && (t ? (n.style.cssText = r.dirtyStyleAttr, Ee(n, r.dirtyClassAttr)) : (r.dirtyStyleAttr = n.style.cssText, r.dirtyClassAttr = xe(n), n.style.cssText = r.styleAttr, Ee(n, r.classAttr)))
        },
        te = function () {
            ge = "translateZ(0)", A.setStyle(oe, "transform", ge);
            var e = o(oe),
                t = e.getPropertyValue("transform"),
                r = e.getPropertyValue(_ + "transform");
            t && "none" !== t || r && "none" !== r || (ge = "")
        };
    A.setStyle = function (e, t, r) {
        var n = e.style;
        if ("zIndex" === (t = t.replace(M, E).replace("-", ""))) n[t] = isNaN(r) ? r : "" + (0 | r);
        else if ("float" === t) n.styleFloat = n.cssFloat = r;
        else try {
                B && (n[B + t.slice(0, 1).toUpperCase() + t.slice(1)] = r), n[t] = r
            } catch (e) {
            }
    };
    var re, ne, oe, ae, ie, le, se, ce, fe, ue, me, pe, de, ge, ve, he = A.addEvent = function (e, t, r) {
            for (var n, o = function (e) {
                return (e = e || c.event).target || (e.target = e.srcElement), e.preventDefault || (e.preventDefault = function () {
                    e.returnValue = !1, e.defaultPrevented = !0
                }), r.call(this, e)
            }, a = 0, i = (t = t.split(" ")).length; a < i; a++) n = t[a], e.addEventListener ? e.addEventListener(n, r, !1) : e.attachEvent("on" + n, o), Be.push({
                element: e,
                name: n,
                listener: r
            })
        },
        ye = A.removeEvent = function (e, t, r) {
            for (var n = 0, o = (t = t.split(" ")).length; n < o; n++) e.removeEventListener ? e.removeEventListener(t[n], r, !1) : e.detachEvent("on" + t[n], r)
        },
        Te = function () {
            for (var e, t = 0, r = Be.length; t < r; t++) e = Be[t], ye(e.element, e.name, e.listener);
            Be = []
        },
        be = function (e, t, r) {
            ae.keyframe && ae.keyframe.call(re, e, t, r)
        },
        Se = function () {
            var e = re.getScrollTop();
            De = 0, ie && !Me && (n.style.height = ""),
                function () {
                    var e, t, r, n, o, a, i, l, s, c, f, u = S.clientHeight,
                        m = ke();
                    for (l = 0, s = ne.length; l < s; l++)
                        for (t = (e = ne[l]).element, r = e.anchorTarget, o = 0, a = (n = e.keyFrames).length; o < a; o++) c = (i = n[o]).offset, f = m[i.constant] || 0, i.frame = c, i.isPercentage && (c *= u, i.frame = c), "relative" === i.mode && (ee(t), i.frame = re.relativeToAbsolute(r, i.anchors[0], i.anchors[1]) - c, ee(t, !0)), i.frame += f, ie && !i.isEnd && i.frame > De && (De = i.frame);
                    for (De = k.max(De, we()), l = 0, s = ne.length; l < s; l++) {
                        for (o = 0, a = (n = (e = ne[l]).keyFrames).length; o < a; o++) f = m[(i = n[o]).constant] || 0, i.isEnd && (i.frame = De - i.offset + f);
                        e.keyFrames.sort(He)
                    }
                }(), ie && !Me && (n.style.height = De + S.clientHeight + "px"), Me ? re.setScrollTop(k.min(re.getScrollTop(), De)) : re.setScrollTop(e, !0), pe = !0
        },
        ke = function () {
            var e, t, r = S.clientHeight,
                n = {};
            for (e in le) "function" == typeof (t = le[e]) ? t = t.call(re) : /p$/.test(t) && (t = t.slice(0, -1) / 100 * r), n[e] = t;
            return n
        },
        we = function () {
            var e = 0;
            return oe && (e = k.max(oe.offsetHeight, oe.scrollHeight)), k.max(e, n.scrollHeight, n.offsetHeight, S.scrollHeight, S.offsetHeight, S.clientHeight) - S.clientHeight
        },
        xe = function (e) {
            var t = "className";
            return c.SVGElement && e instanceof c.SVGElement && (e = e[t], t = "baseVal"), e[t]
        },
        Ee = function (e, t, r) {
            var n = "className";
            if (c.SVGElement && e instanceof c.SVGElement && (e = e[n], n = "baseVal"), r === x) return e[n] = t, x;
            for (var o = e[n], a = 0, i = r.length; a < i; a++) o = Fe(o).replace(Fe(r[a]), " ");
            o = Ae(o);
            for (var l = 0, s = t.length; l < s; l++) -1 === Fe(o).indexOf(Fe(t[l])) && (o += " " + t[l]);
            e[n] = Ae(o)
        },
        Ae = function (e) {
            return e.replace(r, "")
        },
        Fe = function (e) {
            return " " + e + " "
        },
        Ce = Date.now || function () {
            return +new Date
        },
        He = function (e, t) {
            return e.frame - t.frame
        },
        De = 0,
        Ie = 1,
        Pe = "down",
        Ne = -1,
        Oe = Ce(),
        Ve = 0,
        ze = 0,
        qe = !1,
        Le = 0,
        Me = !1,
        $e = 0,
        Be = [];
    "function" == typeof define && define.amd ? define([], function () {
        return A
    }) : "undefined" != typeof module && module.exports ? module.exports = A : c.skrollr = A
}(window, document);
var browserPrefix = "",
    $htmlbody = jQuery("html:not(:animated),body:not(:animated)");
usrAg = navigator.userAgent, -1 < usrAg.indexOf("Chrome") || -1 < usrAg.indexOf("Safari") ? browserPrefix = "-webkit-" : -1 < usrAg.indexOf("Opera") ? browserPrefix = "-o" : -1 < usrAg.indexOf("Firefox") ? browserPrefix = "-moz-" : -1 < usrAg.indexOf("MSIE") && (browserPrefix = "-ms-");
var requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame || function (e) {
    window.setTimeout(e, 100)
};

function scroll_to_element(e, t, r) {
    t = void 0 !== t ? t : 0, r = void 0 !== r ? r : 1800;
    var n = e.offset().top - t;
    $htmlbody.animate({scrollTop: n}, r)
}

function scroll_to_position(e, t) {
    t = void 0 !== t ? t : 600, $htmlbody.animate({scrollTop: e}, t)
}

function checkEmail(e) {
    var t = document.getElementById(e);
    return 0 != t.value.length && !!t.value.match(/^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-Z0-9]{2,4}$/)
}

function show_error(e, t) {
    jQuery("#" + e).addClass("field-with-error"), jQuery("#" + t + " label[for='" + e + "']").addClass("label_with_error")
}

function clear_errors(t) {
    jQuery("#" + t + " input, #" + t + " select, #" + t + " textarea").each(function () {
        if ("hidden" != jQuery(this).attr("type") && "button" != jQuery(this).attr("type") && "submit" != jQuery(this).attr("type") || void 0 !== jQuery(this).attr("noborder")) {
            jQuery(this).removeClass("field-with-error");
            var e = jQuery(this).attr("id");
            jQuery("#" + t + " label[for='" + e + "']").removeClass("label_with_error")
        }
    })
}

get_now = Date.now || function () {
    return (new Date).getTime()
}, _throttle = function (r, n, o) {
    var i, a, u, l = null,
        s = 0;
    o || (o = {});

    function m() {
        s = !1 === o.leading ? 0 : get_now(), l = null, u = r.apply(i, a), l || (i = a = null)
    }

    return function () {
        var e = get_now();
        s || !1 !== o.leading || (s = e);
        var t = n - (e - s);
        return i = this, a = arguments, t <= 0 || n < t ? (l && (clearTimeout(l), l = null), s = e, u = r.apply(i, a), l || (i = a = null)) : l || !1 === o.trailing || (l = setTimeout(m, t)), u
    }
}, _debounce = function (t, r, n) {
    var o, i, a, u, l, s = function () {
        var e = get_now() - u;
        e < r && 0 <= e ? o = setTimeout(s, r - e) : (o = null, n || (l = t.apply(a, i), o || (a = i = null)))
    };
    return function () {
        a = this, i = arguments, u = get_now();
        var e = n && !o;
        return o || (o = setTimeout(s, r)), e && (l = t.apply(a, i), a = i = null), l
    }
};
var s, Main = {
    el: {
        scroll_to: jQuery(".scroll-to"),
        menu_handler: jQuery("#menu-burger"),
        menu_close: jQuery("#menu-close"),
        menu_holder: jQuery("#menu-holder"),
        menu_main_item: jQuery("#menu-holder .menu-item"),
        menu_bg: jQuery("#menu-holder__bg"),
        menu_fade: jQuery(".js-menu-fade"),
        menu_scale: jQuery(".js-menu-scale"),
        body: jQuery("body"),
        window: jQuery(window)
    },
    vars: {window_w: 1e3, window_h: 1e3},
    init: function () {
        var x = Main.el.window.width(),
            k = Main.el.window.height(),
            M = Main.el.body;
        M.addClass("loaded"), Main.resizing();
        var T = {
            ease1: CustomEase.create("ease1", ".45,.01,.07,1"),
            ease2: CustomEase.create("ease2", "M0,0 C0.496,0.174 0.396,1 1,1"),
            ease3: CustomEase.create("ease3", "M0,0 C0.35,0.028 0.338,1 1,1"),
            ease4: CustomEase.create("ease4", ".58,.01,.16,1"),
            ease5: CustomEase.create("ease5", "M0,0 C0,0 0.202,1 1,1")
        };
        jQuery(".general-content").length && {image: jQuery(".size-full")}.image.each(function () {
            var e = jQuery(this).parent()[0],
                a = jQuery(this).attr("width");
            jQuery(this).parent().is("p") && jQuery(e).css({
                "max-width": a + "px",
                "margin-left": "auto",
                "margin-right": "auto",
                padding: "0"
            })
        });
        if (680 < x && jQuery(".parallax").length) {
            function c(e, a, t) {
                return (1 - t) * e + t * a
            }

            jQuery(window).scroll(function () {
                var e = jQuery(".parallax");
                jQuery(e).each(function () {
                    var e = jQuery(this)[0],
                        a = e.getBoundingClientRect(),
                        t = (jQuery(this).innerWidth(), window.innerHeight);
                    if (0 <= a.top + a.height && a.bottom - a.height <= t) {
                        var r = jQuery(this).parent(),
                            s = r.height(),
                            o = r[0].getBoundingClientRect().top - (window.innerHeight - s) / 2,
                            i = null !== jQuery(this).attr("data-parallax") ? jQuery(this).attr("data-parallax") : 1,
                            l = Math.max(-window.innerHeight, o),
                            n = Math.floor(Math.min(window.innerHeight, l), 2),
                            u = c(1, n * i, 1);
                        TweenMax.set(e, {y: u})
                    }
                })
            })
        }
        if (document.getElementById("vimeo-player-single")) {
            var a = {
                    player: jQuery("#vimeo-player-single"),
                    play: jQuery("#play"),
                    pause: jQuery("#pause"),
                    holder: jQuery("#videoAdjustments-holder")
                },
                t = new Vimeo.Player("vimeo-player-single");
            t.ready().then(function () {
                t.setLoop(1), t.setVolume(0)
            });
            var r = (ie = a.holder[0].getBoundingClientRect()).bottom - ie.height;
            jQuery(window).scroll(function () {
                var e = jQuery(window).scrollTop();
                r / 4 < e && (a.holder.hasClass("active") || (t.play(), a.holder.addClass("active")))
            }), a.play.click(function () {
                t.play(), jQuery(this).removeClass("loc"), a.pause.addClass("loc")
            }), a.pause.click(function () {
                t.pause(), jQuery(this).removeClass("loc"), a.play.addClass("loc")
            })
        }
        if (document.getElementById("selection-target")) {
            var e = {trigger: jQuery("#selection-trigger"), target: jQuery("#selection-target")};
            e.trigger.click(function () {
                jQuery(this).toggleClass("loc"), jQuery(this).hasClass("loc") ? e.target.addClass("loc") : e.target.removeClass("loc")
            })
        }
        var o = new TimelineMax({paused: !0, reversed: !1});
        o.set(Main.el.menu_holder, {autoAlpha: 0}).set(Main.el.menu_bg, {
            scaleY: 0,
            transformOrigin: "top right"
        }).to(Main.el.menu_holder, .01, {autoAlpha: 1}, 0).to(Main.el.menu_bg, 1.2, {
            scaleY: 1,
            ease: T.ease1
        }, .1).staggerTo(Main.el.menu_main_item, 1, {
            alpha: 1,
            x: 0,
            ease: T.ease1
        }, .04, .2).staggerTo(Main.el.menu_fade, 1, {
            alpha: 1,
            ease: T.ease1
        }, .04, .2), x < 1400 ? o.staggerTo(Main.el.menu_scale, 1, {
            scale: 1,
            alpha: 1,
            transformOrigin: "center center",
            ease: T.ease1
        }, .04, .2) : o.staggerTo(Main.el.menu_scale, 1, {
            scale: 1,
            alpha: 1,
            transformOrigin: "center center",
            ease: T.ease1
        }, .04, .9), Main.el.menu_handler.click(function () {
            Main.el.body.addClass("overflow"), jQuery(this).toggleClass("loc"), jQuery(this).hasClass("loc") && o.play()
        }), Main.el.menu_close.click(function () {
            Main.el.menu_handler.removeClass("loc"), Main.el.body.removeClass("overflow"), o.timeScale(1.5), o.reverse()
        });
        var i, n, u = new TimelineMax({paused: !0}),
            d = {
                fade: jQuery(".js-hp-fade"),
                scaleX: jQuery(".js-hp-scale-lr"),
                fade2: jQuery(".js-hp-fade-after"),
                bt: jQuery(".js-hp-bt")
            };
        if (u.staggerTo(d.fade, 1.2, {alpha: 1, ease: T.ease1}, .1, 0), u.to(d.fade2, 1.6, {
            autoAlpha: 1,
            ease: T.ease2
        }, 0), u.to(d.scaleX, 1.2, {scaleX: 1, ease: T.ease1}, 0), u.to(d.scaleX, 1.2, {
            scaleX: 1,
            ease: T.ease1
        }, 0), u.to(d.bt, 1.2, {y: 0, alpha: 1, ease: T.ease1}, .07), M.hasClass("home")) {
            var p = document.getElementById("home-video"),
                h = new TimelineMax({paused: !0, repeat: -1});
            jQuery(".js-title-1"), jQuery(".js-title-2"), jQuery(".js-title-3"), jQuery(".js-title-4"), jQuery(".js-title-5"), jQuery(".js-title-6");
            if (jQuery(".intro-text-holder").length) {
                var y = jQuery(".intro-holder__titles"),
                    g = new SplitText(y, {
                        type: "chars lines",
                        charsClass: "char char++",
                        linesClass: "text-line text-line-line++"
                    }),
                    j = (g.chars.slice(0), g.lines),
                    f = new TimelineMax({delay: 1});
                f.set(y, {autoAlpha: 1}, 0);
                for (var v = 0; v < j.length; v++) {
                    var Q = 20 + 20 * v;
                    f.from(g.lines[v], 1.8, {y: Q}, .2)
                }
                for (var w = 0; w < j.length; w++) {
                    var _ = j[w].querySelectorAll("div");
                    (i = -1, n = 1, Math.floor(n - Math.random() * (n - i))) % 2 == 0 ? f.staggerFrom(_, 2, {autoAlpha: 0}, .055, .2) : f.staggerFrom(_, 2, {autoAlpha: 0}, -.055, .2)
                }
            }
            if (document.getElementById("site-intro")) {
                var C = new TimelineMax({
                        reversed: !1,
                        onReverseComplete: function () {
                            u.play(), h.play()
                        }
                    }),
                    b = jQuery("#home-link"),
                    A = jQuery("#shop-link"),
                    O = {
                        bg: jQuery(".js-intro-bg"),
                        fade: jQuery(".js-intro-fade"),
                        holder: jQuery(".site-intro"),
                        mouse: jQuery("#mouse")
                    };

                function c(e, a, t) {
                    return (1 - t) * e + t * a
                }

                C.set(M, {className: "+=overflow"}, 0), C.to(O.bg, 1.4, {
                    autoAlpha: 1,
                    scale: 1,
                    transformOrigin: "center center",
                    ease: T.ease3
                }, 0), C.staggerTo(O.fade, 1.2, {
                    autoAlpha: 1,
                    ease: T.ease1
                }, .2, .5), C.to(O.mouse, 1.2, {autoAlpha: 1, ease: T.ease1}, .2, .5), jQuery(b).click(function () {
                    C.reverse();
                    var e = C.duration();
                    TweenMax.to(O.holder, 1, {
                        autoAlpha: 0,
                        delay: e,
                        onComplete: function () {
                            O.holder.remove()
                        }
                    }),
                        //     jQuery.ajax({
                        //     url: templateURL + "ajax_corporate_intro.php",
                        //     type: "post",
                        //     data: {}
                        // }),
                    767 < x && p.play()
                }),
                    jQuery(A).click(function (e) {
                        e.preventDefault(), e.stopPropagation();
                        var a = jQuery(this).attr("href");
                        C.reverse();
                        var t = C.duration(),
                            r = 1e3 * t;
                        TweenMax.to(O.mouse, 1, {autoAlpha: 0, delay: t}), setTimeout(function () {
                            window.location.href = a
                        }, r)
                    });
                var S = window.innerWidth / 2,
                    E = window.innerHeight / 2,
                    I = jQuery("#mouse")[0],
                    B = "200 200",
                    Y = Object.assign(I, {
                        $cursor: I.querySelector("svg"),
                        $default: I.querySelector("[id*='default']"),
                        $prestretched: I.querySelector("[id*='prestretched']"),
                        $stretched: I.querySelector("[id*='stretched']"),
                        $loop: I.querySelector("[id*='loop']")
                    }),
                    H = jQuery(".site-intro-link"),
                    P = Y.$default.getBoundingClientRect().width;
                Y.$cursor.getBoundingClientRect();
                Svg = {
                    hoverState: function (e) {
                        var a = new TimelineMax,
                            t = e.ref,
                            r = e.scale,
                            s = e.svgOrigin;
                        a.set(t.$default, {
                            fillOpacity: 1,
                            strokeOpacity: 1,
                            strokeWidth: 1,
                            morphSVG: t.$prestretched,
                            svgOrigin: s
                        }), a.to(t.$default, .8, {
                            strokeOpacity: 1,
                            morphSVG: t.$default,
                            svgOrigin: s,
                            ease: Power3.easeOut,
                            scale: r
                        }, 0), a.to(t.$default, 2, {
                            morphSVG: t.$loop,
                            svgOrigin: s,
                            yoyo: !0,
                            repeat: -1,
                            yoyoEase: Linear.easeNone,
                            ease: Power1.easeInOut
                        }, .5)
                    },
                    resetHoverState: function (e) {
                        var a = new TimelineMax,
                            t = e.ref,
                            r = e.svgOrigin;
                        a.to(t.$default, .4, {
                            scale: 1,
                            svgOrigin: r,
                            ease: Power3.easeInOut,
                            rotationZ: 0,
                            morphSVG: t.$default
                        }, 0), a.to(t.$default, .2, {strokeOpacity: 1, strokeWidth: 1, fillOpacity: 1}, .1)
                    }
                }, jQuery(H).on("mouseover", function (e) {
                    Svg.hoverState({ref: I, scale: 150 / P, svgOrigin: B})
                }), jQuery(H).on("mouseleave", function (e) {
                    Svg.resetHoverState({ref: I, svgOrigin: B})
                });
                var D = {
                    el: jQuery("#mouse"),
                    x: window.innerWidth / 2,
                    y: window.innerHeight / 2,
                    w: 400,
                    h: 400,
                    update: function () {
                        l = this.x - this.w / 2, w = this.y - this.h / 2, this.el.css({transform: "translate3d(" + l + "px, " + w + "px, 0)"})
                    }
                };
                jQuery(window).mousemove(function (e) {
                    S = e.clientX, E = e.clientY
                }), setInterval(function () {
                    D.x = c(D.x, S, .1), D.y = c(D.y, E, .1), D.update()
                }, 1e3 / 60)
            } else 767 < x && p.play(), u.play(), h.play()
        } else u.play();
        if (document.getElementById("page-intro") && scroll_to_position(0, .2), document.getElementById("container360")) {
            var L, X = jQuery("#container360"),
                z = X.data("image"),
                N = X.innerWidth(),
                $ = X.innerHeight();
            (L = new Kaleidoscope.Image({
                source: z,
                containerId: "#container360",
                height: $,
                width: N
            })).render(), window.onresize = function () {
                L.setSize({height: $, width: N})
            }
        }
        if (jQuery(".circle-link").hover(function () {
            var e = jQuery(this).find(".js-svg-circle"),
                a = jQuery(this).find(".js-stretched"),
                t = jQuery(this).find(".js-stretched-2");
            TweenMax.to(e, 1.3, {
                morphSVG: a,
                ease: Linear.easeNone,
                alpha: 1
            }, 0), TweenMax.to(e, 1.3, {
                morphSVG: t,
                ease: Linear.easeNone,
                alpha: 1,
                yoyo: !1,
                repeat: -1,
                yoyoEase: Linear.easeNone
            }, .5)
        }, function () {
            var e = jQuery(this).find(".js-svg-circle");
            TweenMax.to(e, .8, {ease: Linear.easeNone, morphSVG: e}, 0)
        }), document.getElementById("marquee")) {
            var R = {holder: jQuery("#marquee"), elements: jQuery(".js-marquee-element")},
                V = R.holder,
                q = R.elements,
                W = q.clone(),
                G = 0;
            q.each(function (e) {
                G += jQuery(this).outerWidth()
            });
            var U = G;
            G = 2 * G + 100, W.addClass("cloned").appendTo(V), V.width(G), TweenMax.to(V, .6, {alpha: 1}, 0);
            var F = U / 30;
            TweenMax.to(V, F, {x: "-" + U, ease: Linear.easeNone, repeat: -1})
        }
        if (document.getElementById("video-holder-project")) {
            var Z = {holder: jQuery("#video-holder-project"), controls: jQuery("#videoAdjustments-holder")};
            Z.holder.hover(function () {
                Z.controls.addClass("loc")
            }, function () {
                Z.controls.removeClass("loc")
            })
        }
        if (document.getElementById("video-container")) {
            var J = {
                    trigger: jQuery(".video-target"),
                    container: jQuery("#video-container"),
                    bg: jQuery("#video__bg"),
                    close: jQuery("#video-close"),
                    jsFade: jQuery(".js-video-fade"),
                    ajax_video_holder: jQuery("#ajax-video")
                },
                K = new TimelineMax({paused: !0, reverse: !1});
            K.set(M, {className: "+=overflow"}).set(J.container, {autoAlpha: 0}).set(J.jsFade, {autoAlpha: 0}).to(J.container, .01, {autoAlpha: 1}, 0).to(J.bg, 1, {
                scaleY: 1,
                transformOrigin: "top left",
                ease: T.ease1
            }).set(J.close, {className: "+=loc"}), J.trigger.click(function () {
                var e = jQuery(this);
                jQuery.ajax({
                    url: templateURL + "ajax_video.php",
                    type: "post",
                    data: {video_url: e.data("target")},
                    success: function (e) {
                        J.ajax_video_holder.html(e);
                        var a = jQuery(".js-video-fade");
                        setTimeout(function () {
                            K.to(a, .7, {autoAlpha: 1})
                        }, 100);
                        var t = {
                                player: jQuery("#vimeo-player"),
                                play: jQuery("#play"),
                                pause: jQuery("#pause"),
                                holder: jQuery("#videoAdjustments-holder")
                            },
                            r = new Vimeo.Player("vimeo-player");
                        r.ready().then(function () {
                            r.setLoop(1), r.setVolume(1), r.play()
                        });
                        t = {
                            adjustments: jQuery("#videoAdjustments"),
                            container: jQuery("#embed-container"),
                            play: jQuery("#play"),
                            pause: jQuery("#pause"),
                            set_time: jQuery("#setTime"),
                            current_play: jQuery("#currentPlay"),
                            status: jQuery("#status")
                        };
                        r.getDuration().then(function (e) {
                            t.set_time.add(t.current_play).attr("max", e)
                        }), r.play(), jQuery(document).on("input", t.set_time, function () {
                            r.pause(), r.getDuration().then(function (e) {
                                var a = t.set_time.val();
                                r.setCurrentTime(a), t.play.removeClass("loc"), t.pause.addClass("loc"), r.play()
                            })
                        }), r.on("timeupdate", function (e) {
                            var a = Math.ceil(e.seconds);
                            t.set_time.add(t.current_play).val(a), t.status.text(function (e) {
                                return m = Math.floor(e / 60), m = 10 <= m ? m : "0" + m, e = 10 <= (e = Math.floor(e % 60)) ? e : "0" + e, m + ":" + e
                            }(a))
                        }), t.play.click(function () {
                            r.play(), jQuery(this).removeClass("loc"), t.pause.addClass("loc")
                        }), t.pause.click(function () {
                            r.pause(), jQuery(this).removeClass("loc"), t.play.addClass("loc")
                        })
                    }
                }), K.timeScale(1).play(), setTimeout(function () {
                    jQuery("#video-holder").on("mouseover", function () {
                        jQuery("#videoAdjustments-holder").addClass("loc")
                    }).on("mouseleave", function () {
                        jQuery("#videoAdjustments-holder").removeClass("loc")
                    })
                }, 500)
            }), J.close.click(function () {
                K.timeScale(1.4).reverse(), setTimeout(function () {
                    jQuery("#ajax-video").empty()
                }, 1500)
            })
        }
        if (M.hasClass("single-cpt_heritage")) {
            var ee = jQuery(".js-post-close").attr("href");
            window.history && window.history.pushState && (window.history.pushState("", null, "./"), jQuery(window).on("popstate", function () {
                window.location.href = ee
            }));
            var ae = jQuery(".page-numbers"),
                te = jQuery(".js-bottom").outerHeight() + 100;
            jQuery(window).scroll(function () {
                jQuery(window).scrollTop() + jQuery(window).height() > jQuery(document).height() - te ? ae.addClass("remove") : ae.removeClass("remove")
            })
        }
        if (M.hasClass("single-post")) {
            var re = jQuery(".post-nav__links"),
                se = jQuery(".js-bottom")[0].getBoundingClientRect(),
                oe = se.top - se.height;
            jQuery(window).scroll(function () {
                jQuery(window).scrollTop() > oe ? re.addClass("remove") : re.removeClass("remove")
            })
        }
        if (jQuery(".mikonos-store").length || jQuery(".js-top").length) {
            var ie, le = jQuery(".header");
            r = (ie = jQuery(".js-top")[0].getBoundingClientRect()).bottom - ie.height;
            jQuery(window).scroll(function () {
                var e = jQuery(window).scrollTop();
                e < k ? le.removeClass("dark-header") : r < e ? le.addClass("dark-header") : le.removeClass("dark-header")
            })
        }
        if (document.getElementById("retailers")) {
            var ne = {bullet_tab: jQuery(".retailers-btn"), holder: jQuery(".retailers-tab")};
            ne.bullet_tab.click(function () {
                console.log(ne.bullet_tab), ne.bullet_tab.removeClass("loc"), jQuery(this).addClass("loc"), ne.holder.addClass("opc-0 no-visible");
                var e = jQuery(jQuery(this).data("link"));
                setTimeout(function () {
                    e.removeClass("opc-0 no-visible")
                }, 400)
            })
        }
        if (document.getElementById("heritage-intro")) {
            var ue = jQuery(".heritage-image"),
                ce = jQuery(".heritage-image-b"),
                de = jQuery(".heritage-image-c");
            TweenMax.set(ue, {transformStyle: "preserve-3d"}), TweenMax.set(ce, {transformStyle: "preserve-3d"}), TweenMax.set(de, {transformStyle: "preserve-3d"}), M.mousemove(function (e) {
                var a = e.pageX / M.width() * 100 - 50,
                    t = e.pageY / M.height() * 100 - 50;
                TweenMax.to(ue, 1, {
                    rotationY: .05 * a,
                    rotationX: .2 * t,
                    rotationZ: "-0.1",
                    transformPerspective: 1e3,
                    transformOrigin: "center center"
                }), TweenMax.to(ce, 1, {
                    rotationY: .1 * a,
                    rotationX: .15 * t,
                    rotationZ: 0,
                    transformPerspective: 1e3,
                    transformOrigin: "center center"
                }), TweenMax.to(de, 1, {
                    rotationY: .15 * a,
                    rotationX: .1 * t,
                    rotationZ: .1,
                    transformPerspective: 1e3,
                    transformOrigin: "center center"
                })
            });
            var pe = {
                trigger: jQuery(".heritage-wrap__link"),
                title: jQuery("#heritage-title"),
                text: jQuery("#heritage-text"),
                icon: jQuery(".heritage-wrap__icon"),
                nav: jQuery(".heritage-ul"),
                item: jQuery(".heritage-item"),
                dots: jQuery(".dot-vertical"),
                image: jQuery(".js-heritage-image")
            };
            pe.trigger.click(function (e) {
                e.preventDefault();
                var a = jQuery(this).attr("href"),
                    t = new TimelineMax({
                        onComplete: function () {
                            window.location.href = a
                        }
                    });
                t.to(pe.item, 1, {autoAlpha: 1, x: 0, y: "-100%"}, 0), t.to(pe.title, 1.2, {
                    autoAlpha: 0,
                    ease: T.ease3
                }, 0), t.to(pe.text, 1, {autoAlpha: 0, ease: T.ease1}, 0), t.to(pe.icon, 1, {
                    autoAlpha: 0,
                    ease: T.ease1
                }, 0), t.staggerTo(pe.image, 1.3, {
                    scale: .5,
                    alpha: 0,
                    transformOrigin: "center center",
                    ease: T.ease1
                }, .15, 0), t.to(pe.nav, 1.3, {y: "-200%", ease: T.ease4}, .1), t.to(pe.dots, 1.3, {
                    alpha: 0,
                    ease: T.ease1
                }, .1)
            });
            var me = {
                    holder: jQuery("#heritage-intro"),
                    text: jQuery(".js-bt__el"),
                    maskBg: jQuery(".js-mask-bg"),
                    img: jQuery(".js-scale-mask__el"),
                    fade: jQuery(".js-h-fade")
                },
                he = {
                    trigger: jQuery(".js-trigger"),
                    target: jQuery("#js-heritage"),
                    fade: jQuery(".js-heritage-fade-in"),
                    link: jQuery(".heritage-link"),
                    introLink: jQuery(".heritage-link-intro"),
                    img: jQuery(".js-heritage-img"),
                    nav: jQuery(".heritage-ul")
                },
                ye = new TimelineMax({
                    reversed: !1,
                    onComplete: function () {
                        he.nav.removeClass("pointer-none")
                    }
                });
            ye.set(me.holder, {autoAlpha: 1}, 0), ye.to(me.maskBg, 1.3, {
                scaleY: 0,
                ease: T.ease4
            }, .1), ye.to(me.img, 1.3, {scale: 1, ease: T.ease1}, .1), ye.staggerTo(me.text, 1, {
                y: 0,
                ease: T.ease1
            }, .03, .5), ye.staggerTo(me.fade, 1.3, {
                autoAlpha: 1,
                ease: T.ease1
            }, .25, .55), ye.staggerTo(me.fade, 1.3, {autoAlpha: 1, ease: T.ease1}, .25, .55);
            var ge = 1e3 * ye.duration() / 1.6;
            he.introLink.click(function () {
                if (!jQuery(this).hasClass("loc")) {
                    he.nav.addClass("pointer-none"), he.link.removeClass("loc"), jQuery(this).addClass("loc");
                    var e = new TimelineMax({paused: !0});
                    e.fromTo(he.fade, 1.2, {alpha: 1, rotationX: 0}, {
                        alpha: 0,
                        rotationX: 40,
                        transformOrigin: "50% 50% -150",
                        ease: T.ease1
                    }, 0), e.fromTo(he.img, 1.2, {scale: 1, alpha: 1}, {
                        scale: 1.2,
                        alpha: 0,
                        ease: T.ease1
                    }, 0), e.set(he.target, {autoAlpha: 1}, .5), e.play().timeScale(1.3), setTimeout(function () {
                        ye.play().timeScale(1.3)
                    }, ge)
                }
            }), he.trigger.click(function () {
                he.nav.addClass("pointer-none");
                var h = jQuery(this);
                jQuery.ajax({
                    url: 'https://www.minas-designs.com/' + "ajax_heritage.php",
                    type: "post",
                    data: {idx: h.data("heritage")},
                    success: function (e) {
                        var a = (e = JSON.parse(e)).title,
                            t = e.text,
                            r = e.image,
                            s = e.url,
                            o = e.is_vertical,
                            i = jQuery("#heritage-title"),
                            l = jQuery("#heritage-text"),
                            n = jQuery("#heritage-image"),
                            u = jQuery("#heritage-image-b"),
                            c = jQuery("#heritage-image-c"),
                            d = jQuery("#heritage-url");
                        if (he.link.removeClass("loc"), h.addClass("loc"), jQuery(he.introLink).hasClass("loc")) d.attr("href", s), i.empty(), i.append(a), l.empty(), l.append(t), n.empty(), u.empty(), c.empty(), 1 == o ? (n.append('<img src="' + r + '" alt="' + a + '" class="is-vertical">'), u.append('<img src="' + r + '" alt="' + a + '" class="is-vertical">'), c.append('<img src="' + r + '" alt="' + a + '" class="is-vertical">')) : (n.append('<img src="' + r + '" alt="' + a + '" class="block-image">'), u.append('<img src="' + r + '" alt="' + a + '" class="block-image">'), c.append('<img src="' + r + '" alt="' + a + '" class="block-image">')), he.introLink.removeClass("loc"), ye.reverse().timeScale(1.8), setTimeout(function () {
                            var e = new TimelineMax({
                                paused: !0,
                                onComplete: function () {
                                    he.nav.removeClass("pointer-none")
                                }
                            });
                            e.set(he.target, {autoAlpha: 1}, 0), e.fromTo(he.fade, 1.2, {
                                alpha: 0,
                                rotationX: -90,
                                transformOrigin: "50% 50% -150"
                            }, {alpha: 1, rotationX: 0, ease: T.ease1}, 0), e.fromTo(he.img, 1.2, {
                                scale: 1.2,
                                alpha: 0
                            }, {scale: 1, alpha: 1, ease: T.ease1}, 0), e.play()
                        }, ge);
                        else {
                            var p = new TimelineMax({
                                paused: !0,
                                reversed: !1,
                                onComplete: function () {
                                    d.attr("href", s), i.empty(), i.append(a), l.empty(), l.append(t), n.empty(), u.empty(), c.empty(), 1 == o ? (n.append('<img src="' + r + '" alt="' + a + '" class="is-vertical">'), u.append('<img src="' + r + '" alt="' + a + '" class="is-vertical">'), c.append('<img src="' + r + '" alt="' + a + '" class="is-vertical">')) : (n.append('<img src="' + r + '" alt="' + a + '" class="block-image">'), u.append('<img src="' + r + '" alt="' + a + '" class="block-image">'), c.append('<img src="' + r + '" alt="' + a + '" class="block-image">'));
                                    jQuery(he.link).removeClass("pointer-none"), m.play()
                                }
                            });
                            p.fromTo(he.fade, 1.2, {alpha: 1, rotationX: 0}, {
                                alpha: 0,
                                rotationX: 40,
                                transformOrigin: "50% 50% -150",
                                ease: T.ease1
                            }, 0), p.fromTo(he.img, 1.2, {scale: 1, alpha: 1}, {
                                scale: 1.2,
                                alpha: 0,
                                ease: T.ease1
                            }, 0);
                            var m = new TimelineMax({
                                paused: !0,
                                reversed: !1,
                                onComplete: function () {
                                    he.nav.removeClass("pointer-none")
                                }
                            });
                            m.fromTo(he.fade, 1.2, {
                                alpha: 0,
                                rotationX: -90,
                                transformOrigin: "50% 50% -150"
                            }, {alpha: 1, rotationX: 0, ease: T.ease1}, 0), m.fromTo(he.img, 1.2, {
                                scale: 1.2,
                                alpha: 0
                            }, {scale: 1, alpha: 1, ease: T.ease1}, 0), p.play().timeScale(1.4)
                        }
                    }
                })
            })
        }
        if (document.getElementById("products-tab-2")) {
            var je = {bullet_tab: jQuery(".bullet-tab"), holder: jQuery(".product-holder")};
            je.bullet_tab.click(function () {
                console.log(je.bullet_tab), je.bullet_tab.removeClass("active"), jQuery(this).addClass("active"), je.holder.addClass("opc-0 no-visible");
                var e = jQuery(jQuery(this).data("link"));
                setTimeout(function () {
                    e.removeClass("opc-0 no-visible")
                }, 400)
            })
        }
        if (document.getElementById("products-tab-1")) {
            var fe = {
                link: jQuery(".main-product-link"),
                image: jQuery(".product-image-hover"),
                big_image: jQuery("#product-big-image")
            };
            fe.link.hover(function () {
                jQuery(jQuery(this).data("image")).removeClass("opc-0"), TweenMax.to(fe.big_image, 1, {
                    autoAlpha: .5,
                    ease: T.ease1
                })
            }, function () {
                fe.image.addClass("opc-0"), TweenMax.fromTo(fe.big_image, 1, {autoAlpha: .5}, {
                    autoAlpha: 1,
                    ease: T.ease1
                })
            })
        }
        var ve = new TimelineMax({paused: !0}),
            Qe = {
                opener: jQuery("#open-ns-popup"),
                holder: jQuery("#ns-popup-holder"),
                bg: jQuery("#ns-popup-bg"),
                close: jQuery("#ns-popup-close"),
                fade: jQuery(".js-anim-fade"),
                mask: jQuery("#ns-popup-mask")
            };
        ve.set(M, {className: "+=overflow"}), ve.set(Qe.bg, {
            scaleY: 0,
            x: "-50%",
            transformOrigin: "top left"
        }), ve.set(Qe.holder, {autoAlpha: 1}, 0), ve.to(Qe.mask, 1, {alpha: .5}, .2), ve.to(Qe.bg, 1, {
            scaleY: 1,
            x: "-50%",
            transformOrigin: "top left",
            ease: Expo.easeInOut
        }, .2), ve.staggerTo(Qe.fade, 1, {autoAlpha: 1}, .2, 1), Qe.opener.add(Qe.close).click(function () {
            Qe.holder.toggleClass("loc"), Qe.holder.hasClass("loc") ? ve.play() : ve.timeScale(1.5).reverse()
        });
        var we = jQuery("#ns-accept"),
            _e = jQuery(".ns-accept");
        we.on("click", function () {
            jQuery(this).hasClass("check") ? jQuery(this).removeClass("check") : (jQuery(this).addClass("check"), _e.removeClass("ns-error-accept"))
        }), jQuery("#ns-submit").on("click", function () {
            we.hasClass("check") || _e.addClass("ns-error-accept");
            var e = jQuery(this).parents("form").attr("id"),
                a = jQuery(jQuery(this).data("reply"));
            Main.checkform_ns(e, a)
        });
        var Ce = {
                handler: jQuery("#js-filter-link"),
                target: jQuery("#popup-target"),
                bg: jQuery("#popup-bg"),
                fade: jQuery(".js-popup-fade"),
                close: jQuery("#popup-close"),
                linkHolder: jQuery(".popup-link-holder"),
                mask: jQuery("#popup-mask")
            },
            be = new TimelineMax({paused: !0, reversed: !1});
        be.set(Ce.bg, {
            scaleY: 0,
            x: "-50%",
            transformOrigin: "top left"
        }), be.set(M, {className: "+=overflow"}), be.set(Ce.target, {autoAlpha: 1}, 0), be.to(Ce.mask, 1, {alpha: .5}, .1), be.to(Ce.bg, 1, {
            scaleY: 1,
            x: "-50%",
            transformOrigin: "top left",
            ease: T.ease4
        }, .1), be.staggerTo(Ce.fade, 1, {alpha: 1, ease: T.ease1}, .2, .3), be.staggerTo(Ce.linkHolder, 1, {
            y: 0,
            ease: T.ease1
        }, .05, .35), Ce.handler.click(function () {
            be.play(), be.timeScale(1)
        }), Ce.close.click(function () {
            Ce.handler.removeClass("loc"), be.reverse(), be.timeScale(1.7)
        });
        var xe = {
                handler: jQuery("#js-year-link"),
                target: jQuery("#popup-years"),
                bg: jQuery("#popup-bg-year"),
                fade: jQuery(".js-popup-year-fade"),
                close: jQuery("#popup-close-year"),
                linkHolder: jQuery(".popup-link-year-holder"),
                mask: jQuery("#popup-mask-year")
            },
            ke = new TimelineMax({paused: !0, reversed: !1});
        if (ke.set(xe.bg, {
            scaleY: 0,
            x: "-50%",
            transformOrigin: "top left"
        }), ke.set(M, {className: "+=overflow"}), ke.set(xe.target, {autoAlpha: 1}, 0), ke.to(xe.mask, 1, {alpha: .5}, .1), ke.to(xe.bg, 1, {
            scaleY: 1,
            x: "-50%",
            transformOrigin: "top left",
            ease: T.ease4
        }, .1), ke.staggerTo(xe.fade, 1, {alpha: 1, ease: T.ease1}, .2, .3), ke.staggerTo(xe.linkHolder, 1, {
            y: 0,
            ease: T.ease1
        }, .05, .35), xe.handler.click(function () {
            ke.play(), ke.timeScale(1)
        }), xe.close.click(function () {
            Ce.handler.removeClass("loc"), ke.reverse(), ke.timeScale(1.7)
        }), document.getElementById("popup-slider")) {
            var Me = {
                    trigger: jQuery(".js-open-slider"),
                    container: jQuery("#popup-slider"),
                    bg: jQuery("#popup-slider__bg"),
                    contents: jQuery("#popup-slider__contents"),
                    close: jQuery("#popup-slider__close"),
                    slider: jQuery("#popup-slider__holder"),
                    controls: jQuery("#popup-slider__prev, #popup-slider__next"),
                    total: 0,
                    slider_initialized: !1
                },
                Te = new TimelineMax({
                    paused: !0,
                    onComplete: function () {
                        TweenMax.to(Me.contents, .6, {
                            autoAlpha: 1,
                            ease: T.ease1
                        }, 0), TweenMax.to(Me.controls, 1, {
                            autoAlpha: 1,
                            ease: T.ease1
                        }, .5), TweenMax.to(Me.close, 1, {autoAlpha: 1, ease: T.ease1}, .5)
                    }
                });
            //         Te.set(M, {className: "+=overflow"}).to(Me.container, .01, {autoAlpha: 1}).to(Me.bg, 1, {
            //             scaleY: 1,
            //             ease: T.ease4
            //         }, .1),
            //             Me.trigger.click(function () {
            //             var e = jQuery(this), a = e.data("id");
            //             Me.controls.addClass("opc-0");
            //             var t;
            //             t = e.data("goto"), Me.slider_initialized && Me.slider.gsapSlider("destroy"), jQuery.ajax({
            //                 // url: templateURL + "ajax_gallery.php",
            //                 // type: "post",
            //                 // data: {id: a, goto_slide: t},
            //                 success: function (e) {
            //                     // var a = jQuery.parseJSON(e);
            //                     // var a  = 6;
            //                     var a = {
            //                         total: 6,
            //                         html: `<article class="slider__item fill-dimensions a-center  slide--active"                               data-index="0">
            //             <div class="maxw-270 abs-tl color-white a-left top-44 left-70 popup-slider__info">
            //         <div class="font-bold font-12 extra-lh3 extra-ls">
            //         2001
            //         </div>
            //         <div class="font-bold font-25">
            //         PRODUCT DISPLAYS
            //     </div>
            //     <div class="font-light font-17">
            //     THAT ILLUMINATE AND HIGHLIGHT ONLY THE PRODUCTS
            // </div>
            // </div>
            // <div class="display--inline m-auto block-100 mt-50 popup-slider__image">
            //     <img src="https://www.minas-designs.com/wp-content/uploads/mykonos_store_5.jpg" alt="Minas Designs-mykonos_store_5" class="popup-slider__img  display--block m-auto">
            //     </div>
            //     </article>
            //
            //     <article class="slider__item fill-dimensions a-center" data-index="1">
            //     <div class="maxw-270 abs-tl color-white a-left top-44 left-70 popup-slider__info">
            //     <div class="font-bold font-12 extra-lh3 extra-ls">
            //     1998
            //     </div>
            //     <div class="font-bold font-25">
            //     TABLE MIRROR
            // </div>
            // <div class="font-light font-17">
            //     HANDMADE BY MINAS ACCORDING TO THE SHAPE OF THE HUMAN BODY
            // </div>
            // </div>
            // <div class="display--inline m-auto block-100 mt-50 popup-slider__image">
            //     <img src="https://www.minas-designs.com/wp-content/uploads/mykonos_store_6.jpg" alt="Minas Designs-mykonos_store_6" class="popup-slider__img  display--block m-auto">
            //     </div>
            //     </article>
            //
            //     <article class="slider__item fill-dimensions a-center" data-index="2">
            //     <div class="maxw-270 abs-tl color-white a-left top-44 left-70 popup-slider__info">
            //     <div class="font-bold font-12 extra-lh3 extra-ls">
            //     2003
            //     </div>
            //     <div class="font-bold font-25">
            //     RESTORED ENTRANCE
            // </div>
            // <div class="font-light font-17">
            //
            //     </div>
            //     </div>
            //     <div class="display--inline m-auto block-100 mt-50 popup-slider__image">
            //     <img src="https://www.minas-designs.com/wp-content/uploads/mykonos_store_1.jpg" alt="Minas Designs-mykonos_store_1" class="popup-slider__img  display--block m-auto">
            //     </div>
            //     </article>
            //
            //     <article class="slider__item fill-dimensions a-center" data-index="3">
            //     <div class="maxw-270 abs-tl color-white a-left top-44 left-70 popup-slider__info">
            //     <div class="font-bold font-12 extra-lh3 extra-ls">
            //     2007
            //     </div>
            //     <div class="font-bold font-25">
            //     TABLE MIRROR
            // </div>
            // <div class="font-light font-17">
            //     HANDMADE BY MINAS ACCORDING TO THE SHAPE OF THE HUMAN BODY
            // </div>
            // </div>
            // <div class="display--inline m-auto block-100 mt-50 popup-slider__image">
            //     <img src="https://www.minas-designs.com/wp-content/uploads/mykonos_store_2.jpg" alt="Minas Designs-mykonos_store_2" class="popup-slider__img  display--block m-auto">
            //     </div>
            //     </article>
            //
            //
            //     <article class="slider__item fill-dimensions a-center  " data-index="4">
            //     <div class="maxw-270 abs-tl color-white a-left top-44 left-70 popup-slider__info">
            //     <div class="font-bold font-12 extra-lh3 extra-ls"> 1998</div>
            //     <div class="font-bold font-25">PRODUCT DISPLAYS</div>
            // <div class="font-light font-17"> THAT ILLUMINATE AND HIGHLIGHT ONLY THE PRODUCTS</div>
            // </div>
            // <div class="display--inline m-auto block-100 mt-50 popup-slider__image"><img
            // src="https://www.minas-designs.com/wp-content/uploads/mykonos_store_3.jpg"
            // alt="Minas Designs-mykonos_store_3" class="popup-slider__img  display--block m-auto">
            //     </div>
            //     </article>
            //
            //     <article class="slider__item fill-dimensions a-center  " data-index="5">
            //     <div class="maxw-270 abs-tl color-white a-left top-44 left-70 popup-slider__info">
            //     <div class="font-bold font-12 extra-lh3 extra-ls"> 2009</div>
            //     <div class="font-bold font-25">TABLE MIRROR</div>
            // <div class="font-light font-17">
            //     HANDMADE BY MINAS ACCORDING TO THE SHAPE OF THE HUMAN BODY
            // </div>
            // </div>
            // <div class="display--inline m-auto block-100 mt-50 popup-slider__image"><img
            // src="https://www.minas-designs.com/wp-content/uploads/mykonos_store_4.jpg"
            // alt="Minas Designs-mykonos_store_4" class="popup-slider__img  display--block m-auto">
            //     </div>
            //     </article>`
            //                     }
            //                     console.log(a.total);
            //                     1 < a.total && (Me.slider.attr("data-totalslides", a.total), Me.total = a.total, Me.contents.html(a.html), 1100 <= x && (Main.build_sliders(Me.slider), Me.slider_initialized = !0, 0 < t && Me.slider.data("plugin_gsapSlider").gotoSlide(t, 0, "next")), Te.timeScale(1).play())
            //                 }
            //             })
            //         }),
            //             Me.close.click(function () {
            //                 TweenMax.to(Me.controls, .8, {autoAlpha: 0, ease: T.ease1}, 0), TweenMax.to(Me.close, .8, {
            //                     autoAlpha: 0,
            //                     ease: T.ease1
            //                 }, 0), TweenMax.to(Me.contents, 1, {autoAlpha: 0, ease: T.ease1}, .5), Te.timeScale(1.2).reverse()
            //             })
        }
        if (document.getElementById("open-form-popup")) {
            var Ae = new TimelineMax({paused: !0}),
                Oe = {
                    opener: jQuery("#open-form-popup"),
                    holder: jQuery("#form-popup-holder"),
                    bg: jQuery("#form-popup-bg"),
                    close: jQuery("#form-popup-close"),
                    fade: jQuery(".js-anim-fade")
                };
            Ae.set(M, {className: "+=overflow"}), Ae.set(Oe.holder, {autoAlpha: 0}), Ae.set(Oe.bg, {
                scaleY: 0,
                x: "-50%",
                transformOrigin: "top left"
            }), Ae.to(Oe.holder, .1, {autoAlpha: 1}, 0), Ae.to(Oe.bg, 1, {
                scaleY: 1,
                x: "-50%",
                transformOrigin: "top left",
                ease: Expo.easeInOut
            }, .2), Ae.staggerTo(Oe.fade, 1, {autoAlpha: 1}, .2, 1), Oe.opener.add(Oe.close).click(function () {
                Oe.holder.toggleClass("loc"), Oe.holder.hasClass("loc") ? Ae.play() : Ae.timeScale(1.5).reverse()
            })
        }
        if (document.getElementById("vimeo-player")) {
            var Se = {
                    player: jQuery("#vimeo-player"),
                    adjustments: jQuery("#videoAdjustments"),
                    container: jQuery("#embed-container"),
                    play: jQuery("#play"),
                    pause: jQuery("#pause"),
                    set_time: jQuery("#setTime"),
                    current_play: jQuery("#currentPlay")
                },
                Ee = new Vimeo.Player("vimeo-player");
            Ee.ready().then(function () {
                Ee.setLoop(1), Ee.setVolume(0), Ee.pause()
            }), Ee.getDuration().then(function (e) {
                Se.set_time.add(Se.current_play).attr("max", e)
            }), jQuery(document).on("input", Se.set_time, function () {
                Ee.pause(), Ee.getDuration().then(function (e) {
                    var a = Se.set_time.val();
                    Ee.setCurrentTime(a), Ee.play()
                })
            }), Ee.on("timeupdate", function (e) {
                var a = Math.ceil(e.seconds);
                Se.set_time.add(Se.current_play).val(a)
            }), Se.play.click(function () {
                Ee.play(), jQuery(this).removeClass("loc"), Se.pause.addClass("loc")
            }), Se.pause.click(function () {
                Ee.pause(), jQuery(this).removeClass("loc"), Se.play.addClass("loc")
            })
        }
        var Ie = {
            holder: jQuery("#cookie"),
            bg: jQuery("#cookie-bg"),
            close: jQuery("#close-cookie"),
            accept: jQuery("#cookie-accept"),
            fade: jQuery(".js-cookie-fade")
        };
        M.hasClass("loaded") && setTimeout(function () {
            var a = new TimelineMax({paused: !1, reversed: !1});
            a.to(Ie.bg, .8, {
                scaleY: 1,
                transformOrigin: "top left",
                ease: CustomEase.create("custom", "M0,0 C0.35,0 0,1 1,1")
            }, 0), a.staggerTo(Ie.fade, .8, {autoAlpha: 1, ease: Power1.easeIn}, .05, .3), Ie.close.click(function () {
                a.reverse(), a.timeScale(1.2), setTimeout(function () {
                    jQuery(Ie.holder).addClass("remove")
                }, 2e3)
            }), Ie.accept.click(function () {
                jQuery.ajax({
                    url: templateURL + "ajax_cookies_agree.php",
                    type: "post",
                    success: function (e) {
                        a.reverse(), a.timeScale(1.5), setTimeout(function () {
                            jQuery(Ie.holder).addClass("remove")
                        }, 2e3)
                    }
                })
            })
        }, 2e3), Main.el.scroll_to.click(function () {
            var e = void 0 !== jQuery(this).data("target") ? jQuery(this).data("target") : "",
                a = void 0 !== jQuery(this).data("position") && jQuery(this).data("position"),
                t = void 0 !== jQuery(this).data("goto_offset") ? jQuery(this).data("goto_offset") : 105,
                r = void 0 !== jQuery(this).data("goto_speed") ? jQuery(this).data("goto_speed") : 1e3;
            !1 !== a && 0 <= a ? scroll_to_position(a, r) : scroll_to_element(jQuery(e), t, r)
        }), jQuery(document).keyup(function (e) {
            27 === e.keyCode && Main.escape_triggers()
        }), jQuery(document).click(function () {
        });
        var Be = jQuery(".init-slider");
        Main.build_sliders(Be), s = skrollr.init({
            keyframe: function (e, a, t) {
                var r = new TimelineMax,
                    s = jQuery(e),
                    o = jQuery(e).data("delay"),
                    i = jQuery(e).data("trans"),
                    l = jQuery(e).data("ease"),
                    n = jQuery(e).data("cubic");
                if (null == i && (i = 1.2), null == o && (o = 0), s.hasClass("view-point") && "dataBottomTop" == a && "down" == t && document.getElementById("page-intro")) {
                    var u = new TimelineMax({
                            onComplete: function () {
                                jQuery(window).on("scroll wheel DOMMouseScroll mousewheel", function (e) {
                                    (0 < e.originalEvent.detail || e.originalEvent.wheelDelta < 0) && (d.text.length && c.to(m, 1.2, {
                                        y: "100%",
                                        ease: T.ease1
                                    }, 0), d.line.length && c.to(d.line, 1.2, {
                                        scale: 0,
                                        transformOrigin: "center center",
                                        ease: T.ease1
                                    }, 0), c.to(d.title, 1.2, {
                                        autoAlpha: 0,
                                        ease: T.ease1
                                    }, 0), c.set(jQuery(".header"), {className: "+=dark-header"}, .1), c.to(p, 1.2, {
                                        y: "100%",
                                        ease: T.ease1
                                    }, .1), c.to(d.bgPage, 1.2, {
                                        width: "100%",
                                        height: k,
                                        maxWidth: x,
                                        ease: T.ease2
                                    }, .25), c.set(d.bgImgHolder, {autoAlpha: 1}, .5), c.to(d.bgImg, 1.4, {
                                        scaleY: 0,
                                        transformOrigin: "top left",
                                        ease: T.ease1
                                    }, .6), c.to(d.videoIcon, 1, {autoAlpha: 1, ease: T.ease1}, .8), c.set(M, {
                                        overflowY: "auto",
                                        delay: 1,
                                        onComplete: h
                                    }, .8), jQuery(window).resize(function () {
                                        var e = Main.el.window.width(),
                                            a = Main.el.window.height();
                                        c.set(d.bgPage, {width: "100%", height: a, maxWidth: e})
                                    }))
                                })
                            },
                            reversed: !1
                        }),
                        c = new TimelineMax({
                            onReverseComplete: function () {
                                jQuery(window).on("scroll wheel DOMMouseScroll mousewheel", function (e) {
                                    (0 < e.originalEvent.detail || e.originalEvent.wheelDelta < 0) && (console.log("Down"), c.play())
                                })
                            }
                        }),
                        d = {
                            fadeIn: jQuery(".js-intro-fade"),
                            bg: jQuery("#page-intro-bg"),
                            title: jQuery(".page-intro-title"),
                            subtitle: jQuery(".js-subtitle"),
                            text: jQuery(".js-txt"),
                            bgImg: jQuery("#intro-img-bg"),
                            bgImgHolder: jQuery(".page-intro__img"),
                            bgPage: jQuery(".page-intro-bg"),
                            videoIcon: jQuery(".video-link__icon-holder"),
                            line: jQuery(".js-intro-line")
                        },
                        p = new SplitText(d.subtitle, {
                            type: "chars lines",
                            linesClass: "overflow relative",
                            charsClass: "chars-subtitle"
                        }).chars;
                    if (d.text.length) var m = new SplitText(d.text, {
                        type: "chars lines",
                        linesClass: "overflow relative",
                        charsClass: "chars-text"
                    }).chars;

                    function h() {
                        jQuery(window).scroll(function () {
                            0 == jQuery(window).scrollTop() && c.reverse().timeScale(1.2)
                        })
                    }

                    u.to(d.bg, 1.2, {scaleY: 1, transformOrigin: "top left", ease: T.ease1}, 0), u.to(d.title, 1.2, {
                        y: 0,
                        alpha: 1,
                        ease: T.ease1
                    }, 0), d.line.length && u.to(d.line, 1.2, {
                        scale: 1,
                        transformOrigin: "center center",
                        ease: T.ease1
                    }, 0), u.set(d.subtitle, {alpha: 1}, .1), u.to(p, 1.2, {
                        y: 0,
                        ease: T.ease1
                    }, .2), d.text.length && (u.set(d.text, {alpha: 1}, .4), u.to(m, 1.2, {
                        y: 0,
                        ease: T.ease1
                    }, .3)), u.to(d.fadeIn, 1, {autoAlpha: 1, ease: T.ease1}, .6)
                }
                if (s.hasClass("skrollr-pointer") && "dataBottomTop" == a && "down" == t) {
                    if (s.hasClass("curtain-vertical") && (l = null == n || "custom2" != n ? CustomEase.create("custom2", "M0,0 C0.49,0.05 0.18,0.94 1,1") : null == n || "custom" != n ? CustomEase.create("custom", "M0,0 C0.348,0.822 0.22,1 1,1") : Power1.easeInOut, r.to(e, i, {
                        scaleY: 0,
                        onComplete: b,
                        ease: l
                    }, o)), s.hasClass("scale-out") && (l = null == n || "custom" != n ? T.ease5 : T.ease3, r.to(e, i, {
                        scale: 1,
                        alpha: 1,
                        transformOrigin: "center center",
                        onComplete: b,
                        ease: l
                    }, o)), s.hasClass("js-curtainY") && (l = null == n || "custom" != n ? T.ease1 : T.ease4, r.to(e, i, {
                        scaleY: 1,
                        ease: l
                    }, o)), s.hasClass("js-curtain-tb") && (l = null == n || "custom" != n ? T.ease4 : T.ease1, r.to(e, i, {
                        scaleY: 0,
                        ease: l
                    }, o)), s.hasClass("js-bt")) {
                        var y = s.data("alpha"),
                            g = s.data("velocity");
                        o = s.data("delay");
                        null == y && (y = 1), null == g && (g = 0), r.staggerTo(jQuery(e).find(".js-bt__el"), i, {
                            y: 0,
                            alpha: y,
                            ease: T.ease1
                        }, g, o)
                    }
                    if (s.hasClass("js-fade-up") && r.to(jQuery(e), i, {
                        autoAlpha: 1,
                        y: 0,
                        ease: T.ease1
                    }, o), s.hasClass("js-fade-left") && (l = null == n || "custom" != n ? T.ease1 : T.ease4, r.to(jQuery(e), i, {
                        autoAlpha: 1,
                        x: 0,
                        ease: l
                    }, o)), s.hasClass("js-fade-right") && r.to(jQuery(e), i, {
                        autoAlpha: 1,
                        x: 0,
                        ease: T.ease1
                    }, o), s.hasClass("js-fade-in") && (l = null == n || "custom" != n ? T.ease1 : T.ease2, r.to(e, i, {
                        autoAlpha: 1,
                        ease: l
                    }, o)), s.hasClass("js-scale") && (l = null == n || "custom" != n ? T.ease4 : T.ease1, r.to(e, i, {
                        scale: 1,
                        alpha: 1,
                        transformOrigin: "center center",
                        ease: l
                    }, o)), s.hasClass("js-scale-lr") && (l = null == n || "custom" != n ? T.ease4 : T.ease1, r.to(e, i, {
                        scaleX: 1,
                        ease: T.ease1
                    }, o)), s.hasClass("js-img-scale") && r.to(jQuery(e).find(".js-img-scale__holder"), i, {
                        alpha: 1,
                        scaleX: 1,
                        x: 0,
                        ease: T.ease2
                    }, o), s.hasClass("js-scale-mask") && (l = null == n || "custom" != n ? T.ease1 : l = T.ease5, r.to(jQuery(e).find(".js-scale-mask__el"), i, {
                        alpha: 1,
                        scale: 1,
                        y: 0,
                        transfromOrigin: "center center",
                        ease: l
                    }, o)), s.hasClass("js-img-reveal") && (l = null == n || "custom" != n ? T.ease1 : T.ease3, r.to(jQuery(e).find(".js-img-reveal__holder"), i, {
                        y: 0,
                        ease: l
                    }, o), r.to(jQuery(e).find(".js-img-reveal__image"), i, {
                        y: 0,
                        ease: l
                    }, o)), s.hasClass("js-scale-out") && (r.to(jQuery(e).find(".js-scale-out__holder"), 1.24, {
                        scale: 1,
                        autoAlpha: 1,
                        transfromOrigin: "center center",
                        ease: T.ease3
                    }, o), r.to(jQuery(e).find(".js-scale-out__img"), 1.2, {
                        scale: 1,
                        transfromOrigin: "center center",
                        ease: T.ease3
                    }, o)), s.hasClass("js-skew-letter") && (l = null == n || "custom" != n ? T.ease1 : T.ease3, r.to(jQuery(e), i, {
                        skewY: -3,
                        y: 0,
                        autoAlpha: 1,
                        ease: l
                    }, o)), s.hasClass("js-decades")) {
                        var j = {
                                year: jQuery(e).find(".year").data("year"),
                                firstHolder: jQuery(e).find(".number-first"),
                                secondHolder: jQuery(e).find(".number-second"),
                                thirdHolder: jQuery(e).find(".number-third"),
                                fourthHolder: jQuery(e).find(".number-fourth")
                            },
                            f = jQuery(".number-digit > div").height(),
                            v = ("" + j.year).split("");
                        j.firstDigit = v[0], j.secondDigit = v[1], j.thirdDigit = v[2], j.fourthDigit = v[3];
                        var Q = Math.abs(10 - j.firstDigit - 10),
                            w = Math.abs(10 - j.secondDigit - 10),
                            _ = Math.abs(10 - j.thirdDigit - 10),
                            C = Math.abs(10 - j.fourthDigit - 10);
                        r.to(j.firstHolder, 1.4, {
                            y: -f * Q - f,
                            ease: T.ease2
                        }, o), r.to(j.secondHolder, 1.4, {
                            y: -f * w - f,
                            ease: T.ease2
                        }, o), r.to(j.thirdHolder, 1.4, {
                            y: -f * _ - f,
                            ease: T.ease2
                        }, o), r.to(j.fourthHolder, 1.4, {y: -f * C - f, ease: T.ease2}, o)
                    }
                    s.addClass("loc")
                } else s.removeClass("skrollr-pointer");

                function b() {
                    s.removeClass("skrollr-pointer")
                }
            },
            mobileCheck: function () {
                return !1
            },
            forceHeight: !1
        })
    },
    close_menu: function () {
    },
    build_sliders: function (e) {
        var d = {
            ease1: CustomEase.create("ease1", ".45,.01,.07,1"),
            ease2: CustomEase.create("ease2", "M0,0 C0.496,0.174 0.396,1 1,1"),
            ease3: CustomEase.create("ease3", "M0,0 C0.35,0.028 0.338,1 1,1"),
            ease4: CustomEase.create("ease4", ".58,.01,.16,1")
        };
        e.each(function () {
            var c = jQuery(this),
                e = c.attr("id");
            new TimelineMax;
            "popup-slider__holder" == e ? c.gsapSlider({
                slider_id: e,
                setCustomAnimation: function (e, a, t) {
                    if ("initialState" === a) return {zIndex: 5, alpha: 0};
                    var r = new TimelineMax;
                    return r.fromTo(t.new_slide, t.time, {autoAlpha: 0}, {
                        autoAlpha: 1,
                        ease: Power1.easeInOut
                    }, 0), r.to(t.old_slide, t.time, {autoAlpha: 0, ease: Power1.easeInOut}, .2), r
                }
            }) : c.gsapSlider({
                slider_id: e,
                enable_swipe: !0,
                afterChange_delay: "0",
                start_main_animation_time: .6,
                setCustomAnimation: function (e, a, t) {
                    if ("initialState" === a) return {zIndex: 5, alpha: 0};
                    var r = new TimelineMax;
                    return TweenLite.defaultEase = Power4.easeInOut, CustomEase.create("custom-gallery", "M0,0 C0.692,0 0.102,1 1,1"), CustomEase.create("custom", "M0,0,C0.698,0,0.396,1,1,1"), r.set(t.old_slide, {zIndex: 10}), r.set(t.new_slide, {
                        alpha: 1,
                        zIndex: 15
                    }), r
                },
                beforeChange: function (e, a, t, r) {
                    var s = new TimelineMax;
                    if (document.getElementById("slider-main")) {
                        var o = e.find(".js-fade"),
                            i = e.find(".js-tl-img");
                        s.to(e, .2, {alpha: 0}, 1), s.to(o, 1.4, {autoAlpha: 0}, 0), s.to(i, 1.4, {
                            scale: 1.5,
                            transformOrigin: "center center",
                            ease: d.ease4
                        }, 0)
                    }
                    return s
                },
                afterChange: function (e, a, t) {
                    var r = new TimelineMax;
                    if (document.getElementById("slider-main")) {
                        percentage_general = 100 / c.data("totalslides");
                        var s = percentage_general * (t + 1);
                        CustomEase.create("custom", "M0,0,C0.698,0,0.396,1,1,1");
                        var o = 2 * Math.PI * 54 * (1 - s / 100),
                            i = document.getElementById("precentage_slider");
                        TweenMax.to(i, 1.5, {strokeDashoffset: o, ease: "custom"});
                        var l = e.find(".js-fade"),
                            n = e.find(".js-tl"),
                            u = e.find(".js-tl-img");
                        r.fromTo(n, 1.4, {autoAlpha: 0}, {autoAlpha: 1}, 0), r.fromTo(u, 1.4, {
                            scale: 1.5,
                            transformOrigin: "center center",
                            ease: d.ease4
                        }, {
                            scale: 1,
                            transformOrigin: "center center",
                            ease: d.ease4
                        }, 0), r.fromTo(l, 1.4, {autoAlpha: 0, ease: d.ease1}, {autoAlpha: 1, ease: d.ease1}, .3)
                    }
                    return r
                }
            })
        })
    },
    escape_triggers: function () {
        Main.el.menu_close.trigger("click")
    },
    checkform_ns: function (e, a) {
        clear_errors(e);
        var t, r = 1,
            s = jQuery("#" + e);
        if (s.find(".required").each(function () {
            t = jQuery(this).attr("id"), "" !== jQuery(this).val() && jQuery(this).val() !== document.getElementById(t).defaultValue || (r = 0, show_error(t, e), jQuery(a).html('<div class="reply-error color-red">' + s.data("error_mandatory") + "</div>"))
        }), s.find(".required-chk").each(function () {
            jQuery(this).prop("checked") || (r = 0, show_error(t, e), jQuery(a).html('<div class="reply-error color-red">' + s.data("error_mandatory") + "</div>"))
        }), 1 !== r) return !1;
        if (s.find(".email").each(function () {
            if (t = jQuery(this).attr("id"), !1 === checkEmail(t) && 1 === r) return r = 0, show_error(t, e), jQuery(a).html('<div class="reply-error color-red">' + s.data("error_email") + "</div>"), !1
        }), "" !== s.find("#ns-check").val()) return r = 0, !1;
        if (1 === r) {
            var o = s.serialize();
            jQuery(a).html('<div class="loading"></div>'), jQuery.post(templateURL + "ajax_ns_submit.php", o).done(function (e) {
                jQuery(a).html(e)
            })
        }
    },
    resizing: function () {
        Main.el.window.width(), Main.el.window.height();
        Main.vars.window_h = Main.el.window.height()
    }
};
jQuery(window).load(function () {
    Main.init()
});
var debounce_resize = _debounce(Main.resizing, 0);
onresize = debounce_resize, jQuery(window).resize(function () {
    document.getElementById("page-intro") && location.reload()
});
