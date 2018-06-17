import React, { Component } from 'react';
// import DatePicker from 'react-datepicker';
import FormTabs from '../FormTabs/FormTabs';
import './NewForm.css'


class NewForm extends Component {
    constructor(props) {
      super(props);
      
  
      this.handleChange = this.handleChange.bind(this);
      this.onDateChange = this.onDateChange.bind(this);
      this.handleSubmit = this.handleSubmit.bind(this);

      this.state = {
        date: new Date(),
        value: ''
      } 
    }
    
  
    handleChange(event) {
      this.setState({value: event.target.value});
    }

    onDateChange(date) {
        // this.formData.date = event.target.value;
        //  console.log(this.formData);
        this.setState({
          date: date
        });
      
    }
  
    handleSubmit(event) {
      alert('A form was submitted: ');
      event.preventDefault();
    }
  
    render() {
      return (
          <div className="container">
            <b>Erfaringsskema for 4.semester</b>
                <form onSubmit={this.handleSubmit}>
                    <label for="exampleForm1">
                        Pick a date:
                        <input type="date" id="exampleForm1" className="form-control" value={this.state.date.toDateString} onChange={this.onDateChange} />
                    </label>
                    {/* <DatePicker
                      selected={this.state.startDate}
                      onChange={this.onDateChange}
                    /> */}
                      <br/>
                    <label for="exampleForm2">
                        Working hours:   
                    </label>
                      <input type="text" id="exampleForm2" className="form-control" value={this.state.value} onChange={this.handleChange} />
                      <FormTabs />
                      <button type="button" value="Submit" className="btn btn-success">Submit</button>
                </form>
        </div>
      );
    }
  }


export default NewForm