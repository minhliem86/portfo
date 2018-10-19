import {HttpClient} from '../api/config';

export function initSkill() {
    return (dispatch) => {
        return HttpClient.get(HttpClient.url + '/skill')
            .then(res => {
                console.log(res);
            })
            .catch(err => {
                console.log(err.response)
            })
    }
}