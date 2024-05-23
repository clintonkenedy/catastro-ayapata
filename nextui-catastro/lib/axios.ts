import Axios from 'axios'

const api = Axios.create({
    // baseURL: process.env.APP_API_URL,
    baseURL: "http://localhost:8000/",

    headers: {
        'X-Requested-With': 'XMLHttpRequest',
    },

})

export default api