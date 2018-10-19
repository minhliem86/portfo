import _ from 'lodash';
const loginReducer = (state = {
    isLogin : false,
    user:{}
}, action) => {
    switch (action.type) {
        case 'LOGIN_SUCCESS':
            state = {...state, isLogin: true};
            return state;

        case 'LOGOUT' :
            state= {...state, isLogin: false};
            return state;

        case 'AUTHENCATED_USER' :
            state = {
                isLogin: !_.isEmpty(action.payload),
                user: action.payload
            }
            // console.log(state);
            return state;
        default:
            return state;
    }
}

export default loginReducer;