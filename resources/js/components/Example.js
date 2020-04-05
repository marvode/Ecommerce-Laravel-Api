import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import First from './First';
class Example extends Component {
    render() {
        return (
        <div className="container">
            <div className="flex justify-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="bg-blue-500">Example</div>

                        <div className="card-body">I'm an example component!</div>
                    </div>
                </div>  
                <First/>    
            </div>
        </div>
    );
    }
}

export default Example;

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
