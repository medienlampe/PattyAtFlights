import React, { useState, useEffect, Fragment as F } from 'react';
import ReactDOM from 'react-dom';
import PropTypes from 'prop-types';
import axios from 'axios';

function OrderComponent(props) {
  const [data, setData] = useState();

  async function updateData() {
    const result = await axios('http://localhost:8000/demo/api.php');
    setData(result.data);
  }

  useEffect(() => {
    updateData();
  }, []);
  useEffect(() => {
    let timer = setTimeout(() => updateData(), 600000);
    return () => {
      clearTimeout(timer);
    };
  });

  if (data) {
    return React.createElement(
      F,
      null,
      React.createElement(
        'div',
        {
          className: 'row vertical-center-box vertical-center-box-tablet'
        },
        React.createElement(
          'div',
          {
            className: 'col-xs-3 mar-bot-15 text-left'
          },
          React.createElement(
            'label',
            {
              className: 'label bg-green'
            },
            ' ',
            '30% ',
            React.createElement('i', {
              className: 'fa fa-level-up',
              'aria-hidden': 'true'
            })
          )
        ),
        React.createElement(
          'div',
          {
            className: 'col-xs-9 cus-gh-hd-pro'
          },
          React.createElement(
            'h2',
            {
              className: 'text-right no-margin'
            },
            ' 10.000 '
          )
        )
      ),
      React.createElement(
        'div',
        {
          className: 'progress progress-mini'
        },
        React.createElement('div', {
          style: {
            width: '78%'
          },
          className: 'progress-bar bg-green'
        })
      )
    );
  }

  return 'Data is loading...';
}

OrderComponent.propTypes = {
  /** additional classNames you want to add */
  className: PropTypes.string
};
export default OrderComponent;
export function renderOrderComponent(props, container, callback) {
  ReactDOM.render(
    React.createElement(OrderComponent, props),
    container,
    callback
  );
}
