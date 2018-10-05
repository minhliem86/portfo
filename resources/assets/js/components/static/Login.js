import React, {Component} from 'react';
import {Field, reduxForm} from 'redux-form'
import {connect} from 'react-redux';
import {bindActionCreators} from 'redux';
import {postLogin} from "../../actions/loginAction";
import {Redirect} from 'react-router-dom';

class Login extends Component{

    handleSubmit(e){
        e.preventDefault();
        let {email} = this.props;
        console.log(email);
    }
    render(){
        if(this.props.stateLogin.isLogin){
            <Redirect to={`/home`}/>
        }
        return(
            <div className="position-fixed w-100 h-100" style={{top:0, left: 0}}>
                <div className="d-flex h-100 justify-content-center align-items-center">

                    <div className="card w-50">
                        <div className="card-body">
                            <h3 className="card-title mb-4">
                                ĐĂNG NHẬP
                            </h3>
                            <div className="form-wrapper">
                                <form action="" onSubmit={this.handleSubmit.bind(this)}>
                                    <div className="form-group">
                                        <Field name={`email`} component={`input`} type={`email`} placeholder={`Enter Email`} className={`form-control`}/>
                                    </div>
                                    <div className="form-group">
                                        <Field name={`password`} component={`input`} type={`password`} placeholder={`Enter Password`} className={`form-control`}/>
                                    </div>
                                    <div className="form-group">
                                        <button type="submit" className="btn btn-primary">Đăng nhập</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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

Login = connect(
    mapStateToProps, mapDispatchToProps
)(Login);

export default reduxForm({
    form : 'loginForm'
})(Login)