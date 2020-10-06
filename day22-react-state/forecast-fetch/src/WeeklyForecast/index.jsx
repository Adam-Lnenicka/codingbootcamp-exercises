import React from 'react';
import DayForecast from '../DayForecast/index.jsx';
import './style.scss';

const forecastToComponent = (forecast) => {
  return (
    <DayForecast
      day={forecast.weekday}
      weather={forecast.weather}
      tempDay={forecast.tempDay}
      tempNight={forecast.tempNight}
    />
  );
};

export default class WeeklyForecast extends React.Component {
  state = {
    forecasts: [],
  };

  componentDidMount() {
    fetch('http://bootcamp.podlomar.org/api/weather')
      .then((resp) => resp.json())
      .then((json) => this.setState({ forecasts: json }));
  }

  render() {
    if (this.state.forecasts.length === 0) {
      return <h2>Waiting for the data...</h2>;
    }

    return (
      <div className="week-forecast">
        {this.state.forecasts.map(forecastToComponent)}
      </div>
    );
  }
}
