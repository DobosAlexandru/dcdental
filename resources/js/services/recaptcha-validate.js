import axios from 'axios'
const SITE_URL = 'http://localhost:8000'

export default {
  validate (params) {
    return new Promise((resolve, reject) => {
      const headers = { 'Access-Control-Allow-Origin:': '*' };
        axios.post('/assets/validate-recaptcha.php', params, headers)
        .then((response) => {
            console.log(response)
            if (response.data.type == 'error') {
                reject(response.data.message)
            } else {
                resolve(response.data)
            }
        })
        .catch(error => {
          if (error.response.data.hasOwnProperty('hasErrors')) {
            reject(error.response.data.message)
          } else {
            reject(error.message)
          }
        })
    })
  }
}