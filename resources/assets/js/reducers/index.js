import {combineReducers} from 'redux';
import {reducer as formReducer} from 'redux-form';
import loginReducer from './loginReducer';

const reducer = combineReducers({
    loginReducer,
    form :  formReducer
});

export default reducer;