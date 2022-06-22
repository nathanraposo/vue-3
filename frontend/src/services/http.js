import axios from 'axios'

const axiosInstance = axios.create({
    baseURL: 'http://localhost:8989',
    headers:{
        "Content-type":'application/json'
    }
})

export default axiosInstance;