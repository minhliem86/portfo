import React, {Component} from 'react';
import {Link, NavLink, Redirect} from 'react-router-dom';
import {connect} from 'react-redux';
import {bindActionCreators} from 'redux';
import {logout} from '../../actions/loginAction';
import AuthButton from "./AuthButton";

class Header extends Component{
    render(){
        let logout = '';
        if(this.props.isLogin){
            logout = '<NavLink to="/logout" >Login</NavLink> |';
        }
        return(
            <div className="container" style={{'zIndex':1000, 'position':'relative'}}>
                <div className="row">
                    <div className="col">
                        <div className="header">
                            <nav className="navbar navbar-expand-lg navbar-light bg-light">
                                <a className="navbar-brand" href="#">Navbar</a>
                                <button className="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                    <span className="navbar-toggler-icon"></span>
                                </button>

                                <div className="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul className="navbar-nav mr-auto">
                                        <li className="nav-item ">
                                            <NavLink to={`/react`}  className={`nav-link`}>Home</NavLink>
                                        </li>
                                        <li className="nav-item">
                                            <NavLink to={`/react/skill`}  className={`nav-link`}>Skill</NavLink>
                                        </li>
                                        <li className="nav-item">
                                            <NavLink to={`/react/project`}  className={`nav-link`}>Project</NavLink>
                                        </li>
                                    </ul>
                                    <div className="login-wrapper">
                                        <AuthButton isLogin = {this.props.isLogin} ownProps={this.props.ownProps} handleLogout={this.props.logout} />
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        )
    }
}

const mapStateToProps = (state, ownProps) => {
    return {
        isLogin: state.loginReducer.isLogin,
        ownProps
    }
}

const mapDispatchToProps = (dispatch) => {
    return bindActionCreators({
        logout
    }, dispatch)
}

export default connect(mapStateToProps, mapDispatchToProps)(Header);