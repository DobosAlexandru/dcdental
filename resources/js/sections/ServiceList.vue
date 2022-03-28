<template>
	<transition name="fade-enter" v-if="dataLoaded">
		<div>
			<div class="lg:max-w-4xl lg:mx-auto bg-white rounded-lg mt-5 first:mt-0 shadow hover:shadow-md" 
				v-for="(category,index) in categories" :key="category.id"
				:url="url"
				>
				<div class="flex-1">
					<div class="py-6 px-3 md:px-5 flex items-center justify-between">
						<h3 class="leading-tight text-indigo-900 text-2xl lg:text-3xl" v-bind:ref="'accordion-title-'+ index">{{ category.name }}</h3>
						<button class="ml-3 lg:ml-5 flex-shrink-0 ooutline-none focus:outline-none" @click="expand($event.target,index)">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ml-1 w-8 h-8 fill-current is-rotated transition-all duration-300" role="presentation" v-bind:ref="'accordion-icon-'+ index">
		                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
		                    </svg>
						</button>
					</div>
					<transition name="fade" appear >
						<div v-bind:ref="'accordion-body-' + index" class="is-collapsed">
							<div class="text-sm md:text-base px-3 md:px-5 lg:pr-24 text-gray-700" v-if="category.info">
								{{ category.info }}
							</div>
							<div class="grid grid-cols-12 gap-4 py-5 px-3 md:px-5 sticky top-0 bg-white border-b-2 border-indigo-400">
								<div class="col-span-8 md:col-span-10">
									<h5 class="font-semibold text-lg font-mono">Denumire</h5>
								</div>
								<div class="col-span-4 md:col-span-2">
									<div class="text-right font-normal text-base">
										<h5 class="font-semibold text-lg font-mono">Pret</h5>
									</div>
								</div>
							</div>
							<div>
								<div class="grid grid-cols-12 gap-4 py-4 px-3 md:px-5 odd:bg-indigo-100" v-for="(treatment,index) in Object.values(category.treatements)" >
									<div class="col-span-8 md:col-span-10">
										<span class="font-semibold text-base md:text-lg text-gray-800 font-mono">{{ treatment.name }}</span>
									</div>
									<div class="col-span-4 md:col-span-2">
										<div class="text-right font-semibold text-sm md:text-lg">
											<span>{{ treatment.price }} {{ treatment.price_unit }}</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</transition>
				</div>
			</div>
			<div class="mt-8 lg:mt-12 lg:max-w-4xl lg:mx-auto">
				<p class="text-base font-normal text-gray-900"> Ai nelamuriri legate de preturi ? <a href="/contact" title="Contactati DC Dental" class="block md:inline font-semibold hover:text-indigo-700">Contacteaza-ne!</a></p>
			</div>
		</div>
	</transition>
	<transition v-else>
		<div class="px-5 w-full md:w-2/5 mx-auto">
			<div class="relative overflow-hidden text-center">
				<button class="btn-spinner absolute z-20"></button>
			</div>
		</div>
	</transition>
</template>

<script>
import { requestMixin } from '../mixins/requestMixin.js';

export default {
  	name: 'ServiceList',
  	mixins: [requestMixin],
  	props: {
  		url: {
  			type: String,
  			required: true
  		}
  	},
  	data() {
    	return {
    		categories: [],
    		dataLoaded: false,
    	}
    },
    beforeMount() {
    	this.getPricesData().then((response) => {
    		if(response === 'success') {
    			this.dataLoaded = true
    		} else {
    			this.dataLoaded = false;
    		}
    	})
    },
  	methods: {
  		async getPricesData(url) {
  			const { data } = await this.getData(this.url)
  			if(data) {
				this.categories = data.categories
				let response = 'success'
				return response
  			} else {
  				let response = 'error'
  				return response
  			}
  			
  		},
  		expand(event,index) {
  			let el = this.$refs['accordion-body-' + index][0]
  			let elTitle = this.$refs['accordion-title-' + index][0]
  			let elIcon = this.$refs['accordion-icon-' + index][0]
  			
  			if(el.classList.contains('is-collapsed')) {
  				el.classList.remove('is-collapsed')
  				el.classList.add('is-expanded')
  				elTitle.style.color = '#5000B7';
  				elIcon.classList.remove('is-rotated')
  			} else {
  				el.classList.remove('is-expanded')
  				el.classList.add('is-collapsed')
  				elTitle.style.color = '#21004D';
  				elIcon.classList.add('is-rotated')
  			}
  		}
  	}
};
</script>

<style class="css">
	.is-collapsed {
		height: 0;
		display: none;
	}
	.is-expanded {
		height: auto;
		display: block;
	}
	.is-rotated {
		transform: rotate(-90deg);
	}
	.btn-spinner,
	.btn-spinner:after {
	  border-radius: 50%;
	  width: 1.5em;
	  height: 1.5em;
	}

	.btn-spinner {
	  font-size: 40px;
	  position: relative;
	  text-indent: -9999em;
	  border-top: .2em solid #957AB8;
	  border-right: .2em solid #957AB8;
	  border-bottom: .2em solid #957AB8;
	  border-left: .2em solid transparent;
	  transform: translateZ(0);
	  animation: spinning 1s infinite linear;
	}

@keyframes spinning {
  0% { transform: rotate(0deg) }
  100% { transform: rotate(360deg) }
}
.fade-enter {
	transition-duration: 0.3s;
}
</style>

