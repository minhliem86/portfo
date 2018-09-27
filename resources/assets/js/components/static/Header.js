import React, {Component} from 'react';
import {Link, NavLink} from 'react-router-dom';

const Header = () => (
    <div className="container">
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
                                    <NavLink to={`/api/home`}  className={`nav-link`}>Home</NavLink>
                                </li>
                                <li className="nav-item">
                                    <NavLink to={`/api/skill`}  className={`nav-link`}>Skill</NavLink>
                                </li>
                                <li className="nav-item">
                                    <NavLink to={`/api/project`}  className={`nav-link`}>Project</NavLink>
                                </li>
                            </ul>
                            <div className="login-wrapper">
                                <NavLink to={`/login`} >Login</NavLink> | <NavLink to={`/register`} >Register</NavLink>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    )

export default Header;