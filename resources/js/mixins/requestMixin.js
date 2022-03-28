const axios = require('axios');

export const requestMixin = {
	methods: {
		getData(url) {
			return axios.get(url)
		}
	}
}