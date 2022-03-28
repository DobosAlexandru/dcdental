<template>
		<div :congres="congres" class="mt-3">
			<p class="text-indigo-900 text-xl font-mono leading-tight font-bold">{{ congres.name }}</p>
			<span class="text-indigo-900 opacity-70 text-lg font-light font-body"> {{ congres.start_date | formatStartDate }} - {{ congres.end_date | formatEndDate }}</span>@<span class="text-lg font-light font-body">{{ congres.location }}</span>
		</div>
</template>

<script>
export default {
  	name: 'Congres',
  	props : ['congres']
};
</script>
