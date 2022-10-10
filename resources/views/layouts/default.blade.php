<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>@yield('title') - Husb Franqueados</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{asset('/css/frameworks/bootstrap-5.2.0.min.css')}}">
    {{-- Glide CSS--}}

    @stack('styles')
    <link rel="stylesheet" href="{{asset('/css/frameworks/glide/glide.core.css')}}">
    <link rel="stylesheet" href="{{asset('/css/frameworks/glide/glide.theme.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('/build/assets/app.bc07044d.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{asset('/build/assets/style.927d5f2d.css')}}"> --}}
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- THEME CSS --}}
    @vite(['resources/css/theme/style.scss'])
    @vite(['resources/css/app.css'])
</head>
<body>
    
    <header>
        <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                <a href="#" class="flex items-center">
                    <img src="{{asset('/images/husb-logo.png')}}" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white"</span>
                </a>
                <div class="flex items-center lg:order-2">
                    <a href="#" class="text-white  font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 bg-indigo-600 hover:bg-indigo-700">Log in</a>
                    <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
                <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                    {{-- NAV MENU --}}
                    {{-- <ul class="flex flex-col mt-1 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                        <li>
                            <a href="{{url('/team')}}" class="block py-2 pr-4 pl-3 text-white rounded bg-blue-700 lg:bg-transparent lg:text-blue-700 lg:p-0 dark:text-white" aria-current="page">Team</a>
                        </li>
                        <li>
                            <a href="{{url('/products')}}" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Produtos</a>
                        </li>
                        <li>
                            <a href="{{url('/components')}}" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Componentes</a>
                        </li>
                        <li>
                            <a href="{{url('/contato')}}" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Contato</a>
                        </li>
                    </ul> --}}
                </div>
            </div>
        </nav>
    </header>

    <div class="content">
        @yield('content')
    </div>

    {{-- FOOTER --}}
    <footer class="p-4 bg-dark shadow md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-800">
		<span class="text-sm text-white sm:text-center dark:text-gray-400">© 2022 <a href="https://resonweb.com" class="hover:underline" target="_blank">Reson Web</a>. Todos os direitos reservados
    </span>
		<ul class="flex flex-wrap items-center sm:mt-0">
			<li>
				<a href="#" class="mr-4 text-sm text-white hover:underline md:mr-6 dark:text-gray-400">Sobre</a>
			</li>
			<li>
				<a href="#" class="mr-4 text-sm text-white hover:underline md:mr-6 dark:text-gray-400">Política de Privacidade</a>
			</li>
			<li>
				<a href="#" class="text-sm text-white hover:underline dark:text-gray-400">Contato</a>
			</li>
		</ul>
	</footer>
    @stack('scripts')
</body>
</html>

    

    