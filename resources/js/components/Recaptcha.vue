<template>
	<VueRecaptcha :sitekey="this.sitekey" :loadRecaptchaScript="true" @verify="validate"/>
</template>

<script>
import * as VueRecaptcha from 'vue-recaptcha'
import Validation from '../services/recaptcha-validate'

export default {
  	name: 'Recaptcha',
  	components: { VueRecaptcha },
  	data() {
    	return {
    		sitekey: '6LfT5_sUAAAAAMkDm0NlXeeDo-gk9U6lJLI_Ro1A',
    	};
  	},
  	methods: {
  		validate(response) {
  			Validation.validate({ recaptcha: response }).then(result => {
               if(result.type == 'success') {
                    this.$emit('validate', true)
               }
  			}).catch(error => console.log(error))
  		}
  	}
};
</script>



