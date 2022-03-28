@extends('_layouts.app')


@section('content')
	<h1 class="vh">{{ $page['title'] ? $page['title'] : config('settings.site_name') }}</h1>
	<section class="md:py-12">
		<div class="container mx-auto">
			<div class="md:flex md:flex-row md:items-center">
				<div class="mt-8 md:mt-0 pb-8 md:pb-0 px-5 xl:pr-5p w-full md:w-1/2">
					<div class="max-w-xl">
						<h2 class="text-center md:text-left">
							Zambeste cu DC dental
						</h2>
						<p class="mt-5 text-indigo-900 text-xl md:text-2xl font-normal opacity-75">Echipa noastră are o mare varietate de specialități, astfel încât să putem găsi tratamentul potrivit pentru tine, pe baza nevoilor și situației tale unice.</p>
					</div>
				</div>
				<div class="mt-5 w-full md:w-1/2">
					<div class="block relative overflow-hidden pb-square">
						<img src="{{asset('images/dc-dental-locatii-1.jpeg')}}" alt="{{ config('settings.site_name') }}" class="absolute h-full max-w-none top-0 right-0 object-center rounded-lg">
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="py-8 md:py-12 ">
		<div class="container mx-auto">
			<div class="max-w-4xl text-center mx-auto">
				<h2>Tarife si preturi</h2>
				<p class="mt-5 text-indigo-900 text-xl md:text-2xl font-normal opacity-75">Prețuri servicii Clinica DC dental</p>
			</div>
		</div>
	</section>

	<section class="bg-indigo-100 py-8 md:py-12 ">
		<div class="container mx-auto px-3 lg:px-5">
			<p class="mt-5 text-indigo-900 text-xl md:text-2xl font-normal opacity-75 lg:max-w-4xl lg:mx-auto">
				Consultație de specialitate : 120 lei
			</p>
			<service_list url="{{asset('static/data.json')}}" class="mt-5"></service_list>
		</div>
	</section>

	<section class="py-8 md:py-12">
		<div class="container mx-auto px-3 lg:px-5">
			<h2 class="text-center"> Clinicile DC Dental</h2>
			<div class="-mx-3 lg:-mx-5 mt-12 md:flex">
				<div class="px-3 lg:px-5 w-full md:w-1/2">
					<div class=" max-w-lg mx-auto xl:mr-0 shadow rounded-lg">
	 					<eimage image_url="{{asset('images/dc-dental-cabinet-5.jpg')}}" aspect_ratio="pb-wide" alt="dc dental clinic" ></eimage>
						<div class="p-5 md:p-8 bg-gray-100" id="#iasi">
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
						<a href="{{route('locatii.iasi')}}" title="{{ config('settings.site_name') }} Botosani" class="w-full block text-sm font-bold text-center px-6 md:px-8 py-3 leading-snug text-white border border-indigo-700 rounded-b-lg uppercase md:tracking-wider hover:shadow bg-indigo-700 hover:text-indigo-700 hover:bg-white transform-colors duration-200 ease-in">detalii</a>
					</div>
				</div>
				<div class="mt-12 md:mt-0 px-3 lg:px-5 w-full md:w-1/2">
					<div class="mt-6 md:mt-0 max-w-lg mx-auto xl:ml-0 md:h-full flex flex-col justify-between shadow rounded-lg">
						<eimage image_url="{{asset('images/dc-dental-botosani.jpeg')}}" aspect_ratio="pb-wide" alt="Clinica DC Dental" ></eimage>
						<div class="p-5 md:p-8 bg-gray-100 rounded-b-lg flex-1" id="#botosani">
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
						<a href="{{route('locatii.botosani')}}" title="{{ config('settings.site_name') }} Botosani" class="w-full block text-sm font-bold text-center px-6 md:px-8 py-3 leading-snug text-white border border-indigo-700 rounded-b-lg uppercase md:tracking-wider hover:shadow bg-indigo-700 hover:text-indigo-700 hover:bg-white transform-colors duration-200 ease-in">detalii</a>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection
