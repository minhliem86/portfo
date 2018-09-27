const loginReducer = (state = {
    isLogin : false
}, action) => {
    switch (action.type) {
        case 'LOGIN_SUCCESS':
            state = {...state, isLogin: true};
            return state;

        default:
            return state;
    }
}

export default loginReducer;