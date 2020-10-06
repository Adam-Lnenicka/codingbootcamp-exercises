import React from 'react';
import DayForecast from '../DayForecast/index.jsx';
import { forecasts } from './forecasts';
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
  render() {
    return (
      <div className="week-forecast">{forecasts.map(forecastToComponent)}</div>
    );
  }
}
