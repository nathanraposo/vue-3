import axios from "axios";

const axiosIntance = axios.create({
    baseURL: 'http://localhost:8989',
    headers: {
        'Content-type': 'application/json'
    }
})

export default axiosIntance