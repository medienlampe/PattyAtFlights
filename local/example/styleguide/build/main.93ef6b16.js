(window.webpackJsonp = window.webpackJsonp || []).push([
  [0],
  {
    161: function(e, t, n) {
      'use strict';
      n.r(t),
        n.d(t, 'renderOrderComponent', function() {
          return f;
        });
      var a = n(114),
        r = n.n(a),
        c = n(190),
        o = n(192),
        s = n(1),
        i = n.n(s),
        l = n(33),
        u = n.n(l),
        d = n(191),
        m = n.n(d);
      function p(e) {
        var t = Object(s.useState)(),
          n = Object(o.a)(t, 2),
          a = n[0],
          l = n[1];
        function u() {
          return function() {
            return Object(c.a)(
              r.a.mark(function e() {
                var t;
                return r.a.wrap(function(e) {
                  for (;;)
                    switch ((e.prev = e.next)) {
                      case 0:
                        return (
                          (e.next = 2),
                          m()('http://localhost:8000/demo/api.php')
                        );
                      case 2:
                        (t = e.sent), l(t.data);
                      case 4:
                      case 'end':
                        return e.stop();
                    }
                }, e);
              })
            ).apply(this, arguments);
          }.apply(this, arguments);
        }
        return (
          Object(s.useEffect)(function() {
            u();
          }, []),
          Object(s.useEffect)(function() {
            var e = setTimeout(function() {
              return u();
            }, 6e5);
            return function() {
              clearTimeout(e);
            };
          }),
          a
            ? i.a.createElement(
                s.Fragment,
                null,
                i.a.createElement(
                  'div',
                  {
                    className:
                      'row vertical-center-box vertical-center-box-tablet'
                  },
                  i.a.createElement(
                    'div',
                    { className: 'col-xs-3 mar-bot-15 text-left' },
                    i.a.createElement(
                      'label',
                      { className: 'label bg-green' },
                      ' ',
                      '30% ',
                      i.a.createElement('i', {
                        className: 'fa fa-level-up',
                        'aria-hidden': 'true'
                      })
                    )
                  ),
                  i.a.createElement(
                    'div',
                    { className: 'col-xs-9 cus-gh-hd-pro' },
                    i.a.createElement(
                      'h2',
                      { className: 'text-right no-margin' },
                      ' 10.000 '
                    )
                  )
                ),
                i.a.createElement(
                  'div',
                  { className: 'progress progress-mini' },
                  i.a.createElement('div', {
                    style: { width: '78%' },
                    className: 'progress-bar bg-green'
                  })
                )
              )
            : 'Data is loading...'
        );
      }
      function f(e, t, n) {
        u.a.render(i.a.createElement(p, e), t, n);
      }
      t.default = p;
    },
    193: function(e, t, n) {
      e.exports = n(392);
    },
    388: function(e, t, n) {
      e.exports = {
        description: '',
        displayName: 'OrderComponent',
        methods: [],
        props: [
          {
            type: { name: 'string' },
            required: !1,
            description: 'additional classNames you want to add',
            tags: {},
            name: 'className'
          }
        ],
        doclets: {},
        examples: n(389)
      };
    },
    389: function(e, t, n) {
      var a = { react: n(1), './OrderComponent.js': n(161) },
        r = n(390).default.bind(null, a),
        c = n(391).default.bind(
          null,
          "const React$0 = require('react');\nconst React = React$0.default || React$0;\nconst OrderComponent$0 = require('./OrderComponent.js');\nconst OrderComponent = OrderComponent$0.default || OrderComponent$0;",
          r
        );
      e.exports = [
        {
          type: 'code',
          content: '<OrderComponent />',
          settings: {},
          evalInContext: c
        }
      ];
    }
  },
  [[193, 1, 2]]
]);
