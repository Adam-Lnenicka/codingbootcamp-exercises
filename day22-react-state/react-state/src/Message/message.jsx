import React from 'react';
import './style.scss';

export default class Message extends React.Component {
  constructor(props) {
    super(props);

    this.state = {
      selected: false,
      caption: 'hello',
    };
  }

  render() {
    let msgClass = null;

    if (this.state.selected === true) {
      msgClass = 'message message--selected';
    } else {
      msgClass = 'message';
    }

    return (
      <div className={msgClass}>
        <div className="message__sender">{this.props.sender}</div>
        <div className="message__subject">{this.props.subject}</div>
        <div className="message__time">{this.props.time}</div>
        <button onClick={this.handleSelect}>{this.state.caption}</button>
      </div>
    );
  }

  handleSelect = () => {
    if (this.state.selected === true) {
      this.setState({
        selected: false,
      });
    } else {
      this.setState({
        selected: true,
      });
    }
  };
}
