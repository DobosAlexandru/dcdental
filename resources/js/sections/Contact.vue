<template>
	<div>
		<transition name="fade" mode="out-in" appear v-if="!messageSuccess">
			<div class="max-w-2xl mx-auto">
				<h2 class="text-center"> Formular programări</h2>
				<p class="px-3 mt-5 text-indigo-900 text-xl font-normal opacity-75 text-center xl:px-16">Întreaga echipă de profesioniști a centrului de implantologie DC dental te așteaptă!</p>
				<ValidationObserver ref="observer" v-slot="{ invalid, passes }">
					<form method="POST" novalidate @submit.prevent="passes(submit)" class="mt-12" action="./contact-form.php">
				        <div class="px-3 w-full">
				            <label class="block text-indigo-900 text-base font-semibold" for="name">
				                Nume <span class="text-red-500">*</span>
				            </label>
				            <ValidationProvider name="name" rules="required" v-slot="{ errors }">
					            <input
					                type="text"
					                id="name"
					                placeholder="Numele dumneavoastra"
					                name="name"
					                class="block w-full border shadow-md rounded-lg outline-none px-4 py-3 mt-2 bg-gray-100 border border-transparent focus:border-indigo-500 transition-colors ease-in"
					               	:class="{ 'border-red-500' : errors[0] }"
					                v-model="contactForm.name"
					            >
					            <transition name="fade" appear v-if="errors[0]">
					            	<span class="mt-2 text-sm text-red-500 block" >{{ errors[0] }}</span>
					            </transition>
				        	</ValidationProvider>
				        </div>
				        <div class="px-3 w-full mt-5">
				            <label class="block text-indigo-900 text-base font-semibold" for="email" >
				                Adresa email <span class="text-red-500">*</span>
				            </label>
				            <ValidationProvider name="email" rules="required|email" v-slot="{ errors }">
					            <input
					                type="email"
					                id="email"
					                placeholder="email@domain.com"
					                name="email"
					                class="block w-full border shadow-md rounded-lg outline-none px-4 py-3 mt-2 bg-gray-100 border border-transparent focus:border-indigo-500 transition-colors ease-in"
					               	:class="{ 'border-red-500' : errors[0] }"
					                v-model="contactForm.email"
					            >
 								<transition name="fade" appear v-if="errors[0]">
					            	<span class="mt-2 text-sm text-red-500 block" >{{ errors[0] }}</span>
					            </transition>
					        </ValidationProvider>
				        </div>
				        <div class="mt-5 w-full md:flex">
				        	<div class="px-3 w-full md:w-1/2">
					        	<label class="block text-indigo-900 text-base font-semibold" for="telefon">
					                Telefon <span class="text-red-500">*</span>
					            </label>
					            <ValidationProvider name="telefon" rules="required|numeric" v-slot="{ errors }">
						            <input
						                type="tel"
						                id="telefon"
						                placeholder="nr. telefon contact"
						                name="telefon"
						                class="block w-full border shadow-md rounded-lg outline-none px-4 py-3 mt-2 bg-gray-100 border border-transparent focus:border-indigo-500 transition-colors ease-in"
					               		:class="{ 'border-red-500' : errors[0] }"
										v-model="contactForm.telefon"
							        >
							        <transition name="fade" appear v-if="errors[0]">
						            	<span class="mt-2 text-sm text-red-500 block" >{{ errors[0] }}</span>
						            </transition>
					        	</ValidationProvider>
				        	</div>
				        	<div class="mt-5 md:mt-0 px-3 w-full md:w-1/2">
					        	<label class="block text-indigo-900 text-base font-semibold" for="appointment_date">
					                Alegeti o data
					            </label>
					            <ValidationProvider name="appointment_date" rules="minStartDate" v-slot="{ errors }">
						            <input
						                type="date"
						                id="appointment_date"
						                placeholder="01-10-2019"
						                name="appointment_date"
						                class="block w-full border shadow-md rounded-lg outline-none px-4 py-3 mt-2 bg-gray-100 border border-transparent focus:border-indigo-500 transition-colors ease-in"
					               		:class="{ 'border-red-500' : errors[0] }"
						                v-model="contactForm.appointment_date"
						            >
	 								<transition name="fade" appear v-if="errors[0]">
						            	<span class="mt-2 text-sm text-red-500 block" >{{ errors[0] }}</span>
						            </transition>
					        	</ValidationProvider>
				        	</div>
				        </div>
					    <div class="px-3 mt-5 w-full">
					        <label class="block text-indigo-900 text-base font-semibold" for="message" >
					            Informatii suplimentare <span class="text-red-500">*</span>
					        </label>
					        <ValidationProvider name="message" rules="required" v-slot="{ errors }">
						        <textarea
						            id="contact-message"
						            rows="5"
						            name="message"
						            class="block w-full border shadow rounded-lg outline-none appearance-none mt-2 px-4 py-3 bg-gray-100 border border-transparent focus:border-indigo-500 transition-colors ease-in"
						            placeholder="Informatii suplimentare programare: specializare, doctor, data dorita pentru programare"
						            :class="{ 'border-red-500' : errors[0] }"
						            v-model="contactForm.message"
						        ></textarea>
					       	 	<transition name="fade" appear v-if="errors[0]">
					            	<span class="mt-2 text-sm text-red-500 block" >{{ errors[0] }}</span>
					            </transition>
					    	</ValidationProvider>
					    </div>
					   	<div class="px-3 mt-5 w-full">
					   		<p class="block text-indigo-900 text-base font-semibold mb-2">Alege locatia: <span class="text-red-500">*</span></p>
					   		<ValidationProvider name="locatie" rules="required" v-slot="{ errors }" >
					   			<div class="-mx-3 flex items-center">
						   			<div class="px-3 w-full md:w-1/2">
						        		<label class="location-label relative block w-full border rounded-lg outline-none px-4 py-3 text-white text-center bg-indigo-400"> Iasi
							            <input
							                type="radio"
							                name="locatie"
							                class="block w-full h-full absolute inset-0 border shadow rounded-lg outline-none px-4 py-3 opacity-0 cursor-pointer z-10"
							                value="iasi"
							                v-model="contactForm.locatie"
							                @click = "checkLocation"
							            >
							        	</label>
					        		</div>
					        		<div class="px-3 w-full md:w-1/2">
						        		<label class="location-label relative block w-full border rounded-lg outline-none px-4 py-3 text-white text-center bg-indigo-400" for="contact-location"> Botosani
								            <input
								                type="radio"
								                name="locatie"
								                class="block w-full h-full absolute inset-0 border shadow rounded-lg outline-none px-4 py-3 opacity-0 cursor-pointer z-10"
								                value="botosani"
								                v-model="contactForm.locatie"
								                @click = "checkLocation"
								            >
							        	</label>
					        		</div>
					   			</div>
					   			<span class="mt-2 text-sm text-red-500">{{ errors[0] }}</span>
					   		</ValidationProvider>
				        </div>
				        <div class="px-3 mt-5 w-full">
			 				<Recaptcha @validate="validate"/>
			 				<span class="mt-1 text-sm text-red-500" v-if="!validateRecaptcha">Campul Google Recaptcha este obligatoriu</span>
				        </div>
					    <div class="px-3 mt-10 w-full flex justify-end">
					        <input
					            type="submit"
					            value="trimite"
					            class="block w-full md:w-auto md:inline-flex text-sm font-bold px-6 md:px-8 py-3 leading-snug border border-indigo-700 rounded-lg uppercase md:tracking-wider shadow bg-indigo-700 text-white hover:bg-white hover:text-indigo-700 transform-colors duration-200 ease-in cursor-pointer outline-none"
					        >
					    </div>
					</form>
				</ValidationObserver>
			</div>
		</transition>
		<transition name="fade" mode="out-in" appear v-else>
			<div>
				<h2 class="text-center"> Vă mulțumim pentru mesaj.</h2>
				<p class="mt-5 max-w-2xl mx-auto mt-2 text-center text-lg">Vom lua legatura cu dumneavoastră în cel mai scurt timp posibil. <br>Pentru urgențe vă rugăm sa contactați clinica DC dental cea mai aproape de dumneavoastră.</p>
				<div class="-mx-3 lg:-mx-5 mt-12 md:flex">
					<div class="px-3 lg:px-5 w-full md:w-1/2">
						<div class="max-w-lg mx-auto xl:mr-0 shadow rounded-lg">
		 					<eimage image_url="/assets/images/dc-dental-cabinet-1.jpg" aspect_ratio="pb-wide" alt="dc dental clinic" ></eimage>
							<div class="p-5 md:p-8 bg-white" id="#botosani">
								<h4 class="text-2xl text-black font-perpetua font-semibold">Iasi - Tg. Cucu</h4>
								<p class="mt-5 text-black font-body ">Suntem chiar in centru...</p>
								<div class="mt-5 -mx-3 flex flex-start">
									<div class="mx-3 w-1/2">
										<p class="font-semibold">Adresa</p>
										<p class="mt-5 font-light text-base">
											Strada Sărărie nr. 6 <br>bloc UJCM, parter <br>cod postal 700079
										</p>
									</div>
									<div class="mx-3 w-1/2">
										<p class="font-semibold">Program</p>
										<p class="mt-5 font-light text-base">
											<span class="block">Luni-Vineri: 11.00 - 19.00</span>
											<span class="block">Sambata: inchis</span>
											<span class="block">Duminica: inchis</span>
										</p>
									</div>
								</div>
							</div>
							<a href="/locatii/iasi" title="DC Dental Botosani" class="w-full block text-sm font-bold text-center px-6 md:px-8 py-3 leading-snug text-white border border-indigo-700 rounded-b-lg uppercase md:tracking-wider hover:shadow bg-indigo-700 hover:text-indigo-700 hover:bg-white transform-colors duration-200 ease-in">detalii</a>
						</div>
					</div>
					<div class="mt-12 md:mt-0 px-3 lg:px-5 w-full md:w-1/2">
						<div class="mt-6 md:mt-0 max-w-lg mx-auto xl:ml-0 md:h-full flex flex-col justify-between shadow rounded-lg">
							<eimage image_url="/assets/images/dc-dental-cabinet-4.jpg" aspect_ratio="pb-wide" alt="dc dental clinic" ></eimage>
							<div class="p-5 md:p-8 bg-white rounded-b-lg flex-1" id="#botosani">
								<h4 class="text-2xl text-black font-perpetua font-semibold">Botosani</h4>
								<p class="mt-5 text-black font-body ">Suntem aproape de tine ...</p>
								<div class="mt-5 -mx-3 flex flex-start">
									<div class="mx-3 w-1/2">
										<p class="font-semibold">Adresa</p>
										<p class="mt-5 font-light text-base">
										Str. Primaverii nr.5,
										<br>bloc P11, sc. A, ap.1</p>
									</div>
									<div class="mx-3 w-1/2">
										<p class="font-semibold">Program</p>
										<p class="mt-5 font-light text-base">
											<span class="block">Luni-Vineri: 09.00 - 18.00</span>
											<span class="block">Sambata: inchis</span>
											<span class="block">Duminica: inchis</span>
										</p>
									</div>
								</div>
							</div>
							<a href="/locatii/botosani" title="DC Dental Botosani" class="w-full block text-sm font-bold text-center px-6 md:px-8 py-3 leading-snug text-white border border-indigo-700 rounded-b-lg uppercase md:tracking-wider hover:shadow bg-indigo-700 hover:text-indigo-700 hover:bg-white transform-colors duration-200 ease-in">detalii</a>
						</div>
					</div>
				</div>
			</div>
		</transition>
	</div>

</template>

<script>
import { ValidationObserver, ValidationProvider } from 'vee-validate';
import Recaptcha from '../components/Recaptcha'

export default {
  	components: {
  		ValidationObserver,ValidationProvider,Recaptcha
  	},
  	data: () => ({
  		locationIsChecked: false,
  		contactForm: {
  			name: '',
  			email: '',
  			telefon: '',
  			appointment_date: '',
  			message: '',
  			locatie: '',
  		},
  		validateRecaptcha: false,
  		showRecaptchaError: false,
  		messageSuccess: false,
  	}),
  	methods: {
  		checkLocation() {
  			let targetElement = event.target;

  			if(event.target.closest('.location-label').classList.contains('bg-indigo-700')) {
  				event.target.closest('.location-label').classList.remove('bg-indigo-700');
  			} else {
  				[...document.querySelectorAll('.location-label')].forEach(selector => selector.classList.remove('bg-indigo-700'))
  				event.target.closest('.location-label').classList.add('bg-indigo-700')
  			}
  		},
  		async submit() {
  			if(this.validateRecaptcha) {
				this.onSubmit();
				this.showRecaptchaError = false;
  			} else {
  				this.showRecaptchaError = true
  			}
  		},
  		onSubmit() {
  			const contactData = {...this.contactForm};
  			const headers = { 'Access-Control-Allow-Origin:': '*' };

  			axios.post('/contact-form.php', contactData, headers)
  				.then(({data}) => {
  					if(data.message === 'message sent') {
  						this.messageSuccess = true
  						this.resetForm()
						window.location = 'https://www.dcdental.ro/raspuns-programare/'
  					}
  				})
  				.catch((error) => {
  					console.log(error.response.data);
					console.log(error)
  				})
  		},
		resetForm() {
			this.contactForm = {}
		},
  		validate(success) {
  			this.validateRecaptcha = success
  			this.showRecaptchaError = false
  		}
  	}
};
</script>
<style>

	input[type=date]::-webkit-datetime-edit {
	    color: #a0aec0;
	}
    .fade-enter-active, .fade-leave-active {
      transition: opacity .3s;
    }
    .fade-enter, .fade-leave-to {
      opacity: 0;
    }
</style>
