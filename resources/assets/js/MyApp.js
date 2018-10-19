import React, {Component, Fragment} from 'react';
import Main from './components/static/Main';
import {connect} from 'react-redux';
import {bindActionCreators} from 'redux';

class MyApp extends Component {
    render(){
        return (
            <Main loginState = {this.props.loginState}  />
        )
    }
}

function mapStateToProps(state) {
    return {
        loginState: state.loginReducer
    }
}
export default connect(mapStateToProps, null, null, {pure: false})(MyApp);