import React from 'react';
import './style.scss';

export default class Clock extends React.Component {
  render() {
    return (
      <div className={`clock-${this.props.color}`}>
        <span>{this.props.hours}</span>:<span>{this.props.minutes}</span>
      </div>
    );
  }
}
