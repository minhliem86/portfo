import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import {Provider} from 'react-redux';
import {BrowserRouter} from 'react-router-dom';
import MyApp from './MyApp';
import store from './store';

ReactDOM.render(
    <Provider store={store}>
        <BrowserRouter>
            <MyApp />
        </BrowserRouter>
    </Provider>,
    document.getElementById('root')
);
