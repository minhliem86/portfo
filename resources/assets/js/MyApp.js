import React, {Component} from 'react';

class MyApp extends Component{

    handleClick(id){
        alert('test' + id);
    }
    render() {
        return (
            <div className="myapp">
                <button className="btn btn-primary" type="button" onClick={(2) => this.handleClick.bind(this)}>Test</button>
            </div>
        )
    }
}
export default MyApp;