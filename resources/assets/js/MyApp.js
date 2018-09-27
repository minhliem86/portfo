import React, {Component, Fragment} from 'react';
import Login from "./components/static/Login";
import {Main} from './components/static/Main';

class MyApp extends Component
    {
        render(){
            let ele = null;
            if(!localStorage.getItem('jwt')){
                ele = <Login />;
            }else{
                ele = <Main />
            }
            return (
                <div>
                    {ele}
                </div>
            )
        }
    }

export default MyApp;