import React, {Component, Fragment} from 'react';
import {NavLink, Redirect, withRouter} from 'react-router-dom';

const AuthButton = props => {
    return (
        props.isLogin === true ?
            <Fragment>
                <a href="" onClick={props.handleLogout}>Logout</a>
            </Fragment>
            :
            <Fragment>
                <NavLink to={`/react/login`}>Login</NavLink> | <NavLink to={`/react/register`}>Register</NavLink>
            </Fragment>
    )
}
export default AuthButton;