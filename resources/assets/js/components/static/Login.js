import React, {Component} from 'react';
import {connect} from 'react-redux';
import {bindActionCreators} from 'redux';
import {loginReducer} from "../../reducers/loginReducer";
import {Redirect} from 'react-router-dom';

class Login extends Component{


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
                                <form action="">
                                    <div className="form-group">
                                        <input type="email" className="form-control" placeholder="Enter Email" />
                                    </div>
                                    <div className="form-group">
                                        <input type="password" className="form-control" placeholder="Enter Password" />
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
        loginReducer
    }, dispatch)
}


export default connect(mapStateToProps, mapDispatchToProps)(Login);