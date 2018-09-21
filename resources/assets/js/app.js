import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import {Provider} from 'react-redux';
import MyApp from './MyApp';

ReactDOM.render(
    <Provider>
        <MyApp />
    </Provider>,
    document.getElementById('root')
);
