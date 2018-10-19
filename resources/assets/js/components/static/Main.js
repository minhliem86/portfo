import React, {Component} from 'react';
import {Route, Switch, withRouter} from "react-router-dom";
import Header from "./Header";
import {Home} from "./Home";
import SkillComponent from "../Skill";
import ProjectComponent from "../Project";
import LoginComponent from "../Login";
import {userIsNotAuthenticatedRedir , userIsAuthenticatedRedir} from '../../auth/auth';

const Skill = userIsAuthenticatedRedir(SkillComponent);
const Login = userIsNotAuthenticatedRedir(LoginComponent);
const Project = userIsAuthenticatedRedir(ProjectComponent);

const Main = (props) => {
    return(
        <div>
            <Header />
            <Switch>
                <Route path={`/react`} exact component={Home}></Route>
                <Route path={`/react/login`} component={Login}></Route>
                <Route path={`/react/skill`} component={withRouter(Skill)}/>
                <Route path={`/react/project`} component={withRouter(Project)}/>
            </Switch>
        </div>
    )
}

export default Main;



