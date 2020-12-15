<style>

.form-layout {
  margin: 0 auto;
  padding: 1.25rem; }

.form-layout input {
    margin-bottom: 0.75rem; }

.form-layout label {
    width: 100%;
    display: block; }

.form-layout .name input {
    float: left;
    display: block;
    width: 100%;
    width: -webkit-calc(50% - 0.75rem/2);
    width: calc(50% - 0.75rem/2); }

.form-layout .name input.first {
      margin-right: 0.75rem; }

.form-layout .btn-lg {
    border-radius: 0; }

.text-uppercase { text-transform: uppercase; } 

</style>

<x-guest-layout>
    <x-jet-authentication-card>
        <div class="app signin usersession">
            <div class="session-wrapper" >
            <x-jet-validation-errors class="mb-4" />

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" class="form-layout" action="{{ route('login') }}">
                @csrf
                 <div class="text-center m-b" ">
                     
                      <h4 class="text-uppercase" >
                          <img src="http://lab11.lab2test.com/condominio/public/images/logoadm.png" style="margin: auto;">
                          
                      </h4>
                      <p>Por favor Ingresa a tu cuenta</p>
                </div>
                <div class="mt-2">
                    <div>
                        <label class="text-uppercase"></label>
                        <x-jet-input id="email" class="block mt-1 w-full" placeholder="Correo" type="email" name="email" :value="old('email')" required autofocus />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="password"  class="text-uppercase" value="" />
                        <x-jet-input id="password" placeholder="Contrase単a" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                    </div>
                </div> 
                 <x-jet-button class="mt-2" style="padding: 10px 150px 10px 150px;width: 360px;color: white;background-color: #6164C1;border-color: #6164C1;">
                        Ingresar
                    </x-jet-button> 
                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                        <span class="ml-2 text-sm text-gray-600">Recordarme</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            多Olvidaste tu Contraseña?
                        </a>
                    @endif

                    
                </div>
            </form>
    </x-jet-authentication-card>
</x-guest-layout>
