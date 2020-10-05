import React from 'react';
import ReactDOM from 'react-dom';
import Clock from './Clock/clock.jsx';
import './index.scss';
import './index.html';

class App extends React.Component {
  constructor(props) {
    super(props);

    this.value = 10;
  }

  render() {
    return (
      <>
        <Clock color="red" hours={this.value + 1} minutes="15" />
        <Clock color="green" hours={this.value + 2} minutes="30" />
        <Clock color="blue" hours={this.value + 3} minutes="59" />
      </>
    );
  }
}

ReactDOM.render(<App />, document.getElementById('app'));
