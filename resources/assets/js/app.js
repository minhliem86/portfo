import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import {Provider} from 'react-redux';
import {AuthProvider} from 'react-check-auth';
import {BrowserRouter} from 'react-router-dom';
import MyApp from './MyApp';
import store from './store';
import {HttpClient} from "./api/config";
import jwt from 'jsonwebtoken';
import {authencationUserSuccess} from "./actions/loginAction";

const token= localStorage.getItem('jwt');
if(token){
    HttpClient.setAuthorizationToken(token);
    store.dispatch(authencationUserSuccess(jwt.decode(token)))
}


ReactDOM.render(
    <Provider store={store}>
        <BrowserRouter>
            <MyApp />
        </BrowserRouter>
    </Provider>,
    document.getElementById('root')
);
