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

    <div class="container">
        <div id="dashboard" class="flex my-5 flex-col lg:flex-row">
          <div class="sidebar flex flex-column bg-indigo-600 p-4 flex lg:w-1/6 sm:w-100 rounded">
            <a href="#" id="logo" class="mb-4">
              <img src="{{ asset('images/husb-logo.png') }}" alt="Husb Dashboard">
            </a>
            <ul class="border-t-2 border-gray-200 pt-2 mt-4">
              <li><a href="{{route('dashboard')}}" class="text-white active">Dashboard</a></li>
              <li><a href="#" class="text-white">Agenda</a></li>
              <li><a href="{{route('dashboard.admin')}}/clientes" class="text-white">Clientes</a></li>
              <li><a href="{{route('dashboard.admin.profile')}}" class="text-white">Perfil</a></li>
            </ul>
          </div>
          <div class="panel w-100 p-3">
            

            {{-- Actions Header --}}
            <div class="panel__header flex justify-content-between">
              <h1>@yield('title')</h1>
              <div class="actions flex align-items-center space-x-10">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0M3.124 7.5A8.969 8.969 0 015.292 3m13.416 0a8.969 8.969 0 012.168 4.5" />
                  </svg>
                </span>

              {{-- Profile  --}}
                <a href="{{ route('dashboard.admin.profile') }}">
                  <div class="profile flex ml-4">
                    <span class="ml-2 font-bold mr-4">{{Auth::user()->email}}</span>
                    <img src="/images/user_avatar.png" alt="User Profile" class="max-h-16 rounded-full" style="width: 30px; height: 30px">
                  </div>
                </a>

                {{-- Logout --}}
                <a href="{{route('logout')}}">Logout</a>
              </div>
            </div>

            {{-- Content --}}
            <div class="content">
              @yield('content')
            </div>

          </div>
        </div> {{-- end DASHBOARD --}}
      </div> {{-- end CONTAINER --}}


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

    

    