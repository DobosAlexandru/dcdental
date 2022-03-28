<template>
	<div class="text-center">
		<h2>Congrese si specializari</h2>
		<div class="mt-8 lg:mt-12">
			<div class="flex flex-col">
               <div v-for="(congres, i) in congreseSorted" :class="{'mt-2' : i > 0 }" :key="i">
                    <Congres :congres="congres"/>
                </div>
			</div>
		</div>

	</div>
</template>

<script>
import Congres from './Congres';

export default {
  	name: 'Congrese',
  	components: { Congres },
	 data() {
	    return {
	    	sortBy: 'end_date',
	    	congrese: [
	    		{
	    			name: 'Correction of the Face: Modified Le Fort III Osteotemy',
	    			start_date:'21 05 2019',
	    			end_date:'24 05 2019',
	    			location:'Munchen, Germany'
	    		},
	    		{
	    			name: 'Treatment of Frontobasilar Fracture at 24th ICOMS',
	    			start_date:'23 04 2019',
	    			end_date:'26 04 2019',
	    			location:'Rome, Italy'
	    		},
	    		{
	    			name: 'International Osteology Symposium 1-5 December 2018',
	    			start_date:'01 12 2018',
	    			end_date:'05 12 2018',
	    			location:'Barcelona, Spain'
	    		},
	    		{
	    			name: 'Maxillofacial Oral Cancer Surgery 25-28 August 2018',
	    			start_date:'25 08 2018',
	    			end_date:'28 08 2018',
	    			location:'Rio de Janeiro, Brazil'
	    		},
	    		{
	    			name: 'TMJ/TMD & Bruxism: The modern inter-disciplinary approach ',
	    			start_date:'03 11 2017',
	    			end_date:'05 11 2017',
	    			location:'Bucharest, Romania'
	    		},
	    	]
		}
	},
	computed: {
		congreseSorted() {
			return this.congrese.filter(congres => congres.end_date).sort((a,b) => new Date(b[this.sortBy]) - new Date(a[this.sortBy]));
		}
	}
};
</script>
