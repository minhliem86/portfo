import Header from "./Header";
import {Route, Switch} from "react-router-dom";
import {Home} from "./Home";
import Skill from "../Skill";
import Project from "../Project";
import React from "react";

export const Main = () => {
    return (
        <div>
            <Header />
            <Switch>
                <Route path={`/api/home`} component={Home}></Route>
                <Route path={`/api/skill`} exact component={Skill}></Route>
                <Route path={`/api/project`} component={Project}></Route>
            </Switch>
        </div>
    )
}
