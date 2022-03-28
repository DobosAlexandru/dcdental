<footer class="relative overflow-hidden md:bg-indigo-700">
	<div class="hidden lg:block absolute flex w-full z-10 h-full">
		<div class="w-full lg:w-2/3 absolute top-0 left-0 z-10 h-full">
			<img src="{{asset('images/footer-bg.jpeg')}}" class="absolute object-center max-w-none grayscale-full absolute-center" alt=" implant by dc dental" >
			<div class="absolute inset-0 w-full h-full bg-white opacity-75"></div>
		</div>
	</div>
	<div class="relative z-20">
		<div class="container mx-auto lg:px-5">
			<div class="lg:-mx-5 md:flex md:flex-start">
				<div class="px-5 relative lg:px-5 py-10 lg:py-12 w-full lg:w-1/2 xl:w-2/5 ">
					<div class="absolute lg:hidden w-full z-10 h-full top-0 left-0 ">
						<img src="{{asset('images/footer-bg.jpeg')}}" class="absolute object-center h-full max-w-none grayscale-full absolute-center" alt="implant by dc dental" >
						<div class="absolute inset-0 w-full h-full bg-white opacity-75"></div>
					</div>
					<a href="/" class="relative z-20 block w-32 lg:w-40 mx-auto md:ml-0">
						<img src="{{asset('static/images/branding/dcdental-logo.png')}}" alt="dc dental logo" class="max-w-full">
					</a>
					<div class="relative z-20 mt-8 md:mt-8 text-center md:text-left">
						<p class="text-indigo-900 font-normal leading-relaxed opacity-75">DC dental are o echipă de medici cu o vastă experiență în chirurgie, implantologie, estetică dentară, protetică și ortodonție și oferă consultații și tratamente de actualitate în funcție de caz.</p>
						<p class="mt-2 text-indigo-900 font-normal leading-relaxed opacity-75">Fiecare pacient traiește o experientă unică, fiind tratat de o echipa de specialiști in chirurgie, implantologie, protetica, ortodonție, parodontologie, endodonție și cosmetică dentară, pe baza unui plan de tratament personalizat, întocmit în echipă.</p>
					</div>
				</div>
				<div class="relative z-20 lg:px-5 py-10 lg:py-16 w-full lg:w-1/2 xl:w-3/5 bg-indigo-700 lg:rounded-bl-full lg:rounded-tl-full">
					<div class="h-full flex flex-col md:flex-row md:justify-end md:items-start">
						<div class="w-full lg:w-1/3 text-center xl:text-left">
							<h4 class="text-sm xl:text-lg text-indigo-500 font-mono tracking-widest uppercase">Meniu</h4>
							<ul class="mt-5 lg:mt-8 list-none">
								<li class="mt-2">
									<a href="{{route('implant-dentar-rapid-o-zi')}}" title="{{ env('APP_NAME') }} - Implant dentar rapid o zi" class="py-3 text-3xl md:text-2xl font-serif font-normal text-white hover:text-indigo-500">Implant24h</a>
								</li>
								<li class="mt-2">
									<a href="{{route('locatii')}}" title="{{ env('APP_NAME') }} - Clinicile DC Dental"  class="py-3 text-3xl md:text-2xl font-serif font-normal text-white hover:text-indigo-500">Clinici</a>
								</li>
								<li class="mt-2">
									<a href="{{route('tarife')}}" title="{{ env('APP_NAME') }} - Tarife"  class="py-3 text-3xl md:text-2xl font-serif font-normal text-white hover:text-indigo-500">Tarife</a>
								</li>
								<li class="mt-2">
									<a href="{{route('despre-noi')}}" title="{{ env('APP_NAME') }} - Despre noi"  class="py-3 text-3xl md:text-2xl font-serif font-normal text-white hover:text-indigo-500">Despre noi</a>
								</li>
								<li class="mt-2">
									<a href="{{route('galerie')}}" title="{{ env('APP_NAME') }} - Galerie DC dental"  class="py-3 text-3xl md:text-2xl font-serif font-normal text-white hover:text-indigo-500">Galerie</a>
								</li>
								<li class="mt-2">
									<a href="{{route('contact')}}" title="{{ env('APP_NAME') }} - Contact"  class="py-3 text-3xl md:text-2xl font-serif font-normal text-white hover:text-indigo-500">Contact</a>
								</li>
								<li class="mt-2">
									<a href="{{route('termeni-si-conditii')}}" title="{{ env('APP_NAME') }} - Termeni si conditii utilizare site"  class="py-3 text-3xl md:text-2xl font-serif font-normal text-white hover:text-indigo-500">Termeni si conditii</a>
								</li>
							</ul>
						</div>
						<div class="mt-8 md:mt-0 w-full lg:w-1/3 text-center xl:text-left">
							<h4 class="text-sm xl:text-lg text-indigo-500 font-mono tracking-widest uppercase">Social media</h4>
							<nav class="mt-5 lg:mt-8">
								<ul class="list-none">
									<li class="mt-2">
                                        <a href="https://m.facebook.com/DCdental.ro?__nodl&_rdr" class="py-2 text-3xl md:text-2xl font-serif font-normal text-white hover:text-indigo-500 capitalize">facebook</a>
                                    </li>
                                    <li class="mt-2">
                                        <a href="https://instagram.com/dcdental.ro" class="py-2 text-3xl md:text-2xl font-serif font-normal text-white hover:text-indigo-500 capitalize">instagram</a>
                                    </li>
                                    <li class="mt-2">
                                        <a href="https://www.youtube.com/channel/UCMblE8NZ8Qdg84mX4e8dV6g" class="py-2 text-3xl md:text-2xl font-serif font-normal text-white hover:text-indigo-500 capitalize">youtube</a>
                                    </li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
