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
    return (
      <F>
        <h4 class="text-left text-uppercase">
          <b>Orders</b>
        </h4>
        <div className="row vertical-center-box vertical-center-box-tablet">
          <div className="col-xs-3 mar-bot-15 text-left">
            <label className="label bg-green">
              {' '}
              {data.difference}%{' '}
              <i className="fa fa-level-up" aria-hidden="true" />
            </label>
          </div>
          <div className="col-xs-9 cus-gh-hd-pro">
            <h2 className="text-right no-margin"> {data.absoluteAmount} </h2>
          </div>
        </div>
        <div className="progress progress-mini">
          <div style={{ width: '78%' }} className="progress-bar bg-green" />
        </div>
      </F>
    );
  }

  return (
    <F>
      <h4 className="text-left text-uppercase">
        <b>Loading Orders...</b>
      </h4>
    </F>
  );
}
OrderComponent.propTypes = {
  /** additional classNames you want to add */
  className: PropTypes.string
};

export default OrderComponent;

export function renderOrderComponent(props, container, callback) {
  ReactDOM.render(<OrderComponent {...props} />, container, callback);
}
