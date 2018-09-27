import axios from 'axios';

/*CREATE*/
const post = (url = '', data = '', config = {}) => {
    return axios.post(url, data, config);
}
/*FETCH*/
const get = (url, id = null) => {
    if(id){
        return axios.get(url + '/'+ id);
    }else{
        return axios.get(url);
    }

}
/*EDIT*/
const put = (url = '', data = '', config = {}) => {
    return axios.put(url, data, config);
}

//Cannot contain a delete method - Cause delete is a keyword.
/*DELETE*/
const del = (url = '', id = '' ,config = {}) => {
    return axios.delete(url + '/'+id, config={} )
}

//Encapsulating in a JSON object
const HttpClient = {
    post,
    get,
    put,
    delete: del
}

export {HttpClient}