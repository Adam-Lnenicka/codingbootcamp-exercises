import React from 'react';
import DayForecast from '../DayForecast/index.jsx';
import './style.scss';

export default class WeeklyForecast extends React.Component {
  render() {
    return (
      <div className="week-forecast">
        <DayForecast day="Mon" weather="sunny" tempDay="12" tempNight="5" />
        <DayForecast day="Tue" weather="stormy" tempDay="12" tempNight="5" />
        <DayForecast day="Wed" weather="cloudy" tempDay="12" tempNight="5" />
        <DayForecast day="Thu" weather="sunny" tempDay="12" tempNight="5" />
        <DayForecast day="Fri" weather="sunny" tempDay="12" tempNight="5" />
        <DayForecast day="Sat" weather="sunny" tempDay="12" tempNight="5" />
        <DayForecast day="Sun" weather="sunny" tempDay="12" tempNight="5" />
      </div>
    );
  }
}
