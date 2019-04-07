import React from 'react';
import OrderComponent from './OrderComponent';
import { render } from 'react-testing-library';

test('OrderComponent renders', () => {
  const { container } = render(<OrderComponent />);
  expect(container.firstChild).toMatchSnapshot();
});
