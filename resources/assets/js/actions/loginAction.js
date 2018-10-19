import {HttpClient} from '../api/config';
import swal from 'sweetalert';
import {Redirect} from 'react-router-dom';
import jwt from 'jsonwebtoken';

const auth = '/auth';

export function postLogin(data, config){
    return(dispatch) => {
        return HttpClient.post(HttpClient.url + auth, data, config = {})
            .then( res => {
                localStorage.setItem('jwt',res.data.token);
                HttpClient.setAuthorizationToken(res.data.token);
                dispatch(loginSuccess());
                dispatch(authencationUserSuccess(jwt.decode(res.data.token)))

            })
            .catch(err => {
                if(err.response.status === 401){
                    swal({
                       title: 'Awwwww',
                       text : 'Vui lòng kiểm tra thông tin đăng nhập!',
                       button: false,
                        closeModal: true,
                        icon: false
                    });
                }
                if(err.response.status === 500){
                    swal({
                        title: 'Awwwww',
                        text : 'Có lỗi trong quá trình đang nhập vui lòng thử lại',
                        button: false,
                        closeModal: true,
                        icon: false
                    });
                }
            });
    }
}

export function loginSuccess(){
    return {
        type: 'LOGIN_SUCCESS',
    }
}

export function logout(){
    localStorage.clear();
    return {
        type: 'LOGOUT'
    }
}

export function get_authencated_user(token){
    return dispatch => {
        return HttpClient.get(HttpClient.url + '/authUser?token='+token)
            .then(res => {
                dispatch(authencationUserSuccess(res.data.user));
                {/*<Redirect to={`/react`}/>*/}
            })
    }
}

export function authencationUserSuccess(data){
    return{
        type: 'AUTHENCATED_USER',
        payload: data,
    }
}
