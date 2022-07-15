@extends('layouts.app')

@section('content')

    <body class="bg-rose-100 min-h-screen pt-0 md:pt-0pb-6 px-2 md:px-0" style="font-family:'Lato',sans-serif;">
        <div class="pt-10 mt-6">
            <a href="#">
                <h1 class="text-4xl font-bold text-center ">Registrarse en Fav Art <span
                        class="text-rose-400 text-6xl">.<span></h1>
            </a>
        </div>
        {{-- formulario de registro --}}
        <div class="flex mb-4 justify-start p-36 pt-0 max-w-6xl">
            <div class="mt-10 w-fit">
                <h3 class="font-bold text-2xl">Cree una cuenta</h3>
                <p class="text-gray-600 pt-2 pb-6">Ingrese sus datos</p>
                <form method="POST" action="{{ route('register') }}" class="w-full max-w-lg">
                    @csrf
                    <div class="flex flex-wrap -mx-3 mb-0">
                        <div class="w-full md:w-2/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="nombre-de-usuario">
                                Nombre de usuario
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                id="nombre_Usuario" name="nombre_Usuario" type="text" placeholder="Usuario">
                        </div>
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="password">
                                Contraseña
                            </label>
                            <input
                                class="form-control @error('password') is-invalid @enderror appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id='password' name="password" required autocomplete="new-password" type="password"
                                placeholder="******************">
                            <p class="text-gray-600 text-xs italic">Ingrese una contraseña que pueda recordar.</p>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-8">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="apellidos">
                                    Confirmar contraseña
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                    required autocomplete="new-password" type="text" placeholder="******************">
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name"
                                @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required
                                autocomplete="name" autofocus>
                                Nombre
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                id="name" name="name" type="text" placeholder="">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-0">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="apellidos">
                                    Apellidos
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="apellidos" name="apellidos" type="text" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-4">
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-1">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="direccion">
                                Dirección
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="direccion" type="text" placeholder="">
                        </div>
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="edad">
                                Edad
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="edad" name="edad" type="number" min="0" max="99" placeholder="">
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-2">
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-6">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="email">
                                Correo electrónico
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="email" name="email" type="email" placeholder="" @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email">
                        </div>
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="telefono">
                                Teléfono
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="telefono" name="telefono" type="tel" placeholder="">
                        </div>
                    </div>
                    {{-- boton de enviar form y cancelar --}}
                    <div class="flex flex-wrap -mx-3 mb-2">
                        <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
                            <button
                                class="bg-rose-400 hover:bg-zinc-500 text-white font-bold px-4 py-2 rounded shadow-lg hover:transition duration-500"
                                type="submit">
                                {{ __('Registrarse') }}
                            </button>
                        </div>
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <button
                                class="bg-gray-500 hover:bg-gray-700 text-white font-bold px-4 py-2 rounded shadow-lg hover:transition duration-500"
                                type="button">
                                Cancelar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
@endsection
