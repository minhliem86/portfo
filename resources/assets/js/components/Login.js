import React, {Component} from 'react';
import {connect} from 'react-redux';
import {bindActionCreators} from 'redux';
import {postLogin} from "../actions/loginAction";
import LoginForm from '../forms/loginForm';

class Login extends Component{
    handleSubmit = values => {
        this.props.postLogin(values);
    }
    render(){
        return(
            <LoginForm onSubmit={this.handleSubmit} isLogin={this.props.stateLogin.isLogin}/>
        )
    }
}

function mapStateToProps(state){
    return {
        stateLogin : state.loginReducer
    }
}

function mapDispatchToProps(dispatch){
    return bindActionCreators({
        postLogin
    }, dispatch)
}

export default connect(
    mapStateToProps, mapDispatchToProps
)(Login);