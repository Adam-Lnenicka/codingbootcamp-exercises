import React from 'react';
import ReactDOM from 'react-dom';
import WeeklyForecast from './WeeklyForecast/index.jsx';
import './style.scss';
import './index.html';

const title = <h1>hello</h1>;

const names = ['alex', 'jordan', 'michael', 'suzanne'];

class App extends React.Component {
  render() {
    return (
      <div className="container">
        <h1>Weekly Weather Forecast</h1>
        <WeeklyForecast />
      </div>
    );
  }
}

const appElm = document.querySelector('#app');
ReactDOM.render(<App />, appElm);
