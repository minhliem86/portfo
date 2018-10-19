import axios from 'axios';

const url = 'http://127.0.0.1:8000/api';

/*CREATE*/
const post = (link, data = '', config = {}) => {
    return axios.post(link, data, config);
}
/*FETCH*/
const get = (link, id = null) => {
    if(id){
        return axios.get(link + '/'+ id);
    }else{
        return axios.get(link);
    }

}
/*EDIT*/
const put = (link, data = '', config = {}) => {
    return axios.put(link, data, config);
}

//Cannot contain a delete method - Cause delete is a keyword.
/*DELETE*/
const del = (link, id = '' ,config = {}) => {
    return axios.delete(link + '/'+id, config={} )
}

/*SET AUTHORIZATION*/
const setAuthorizationToken = token =>{
    if(token){
        axios.defaults.headers.common['Authorization'] = `Bearer ${token}`;
    }else{
        delete axios.defaults.headers.common['Authorization'];
    }
}

//Encapsulating in a JSON object
const HttpClient = {
    post,
    get,
    put,
    delete: del,
    setAuthorizationToken,
    url
}

export {HttpClient}