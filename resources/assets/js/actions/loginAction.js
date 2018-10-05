import {HttpClient} from '../api/config';

const url = "http://127.0.0.1/api";

export function postLogin(data, config){
    return(dispatch) => {
        return HttpClient.post(url + '/auth', data, config = {})
            .then( res => {
                if(res.token){
                    localStorage.setItem('jwt',res.token);
                    console.log(res.token);
                    dispatch(loginSuccess())
                }
            })
            .catch(err => {
                if(err.error){
                    alert('Vui lòng kiểm tra thông tin đăng nhập!');
                }
            });
    }
}

export function loginSuccess(){
    return {
        type: 'LOGIN_SUCCESS',
    }
}