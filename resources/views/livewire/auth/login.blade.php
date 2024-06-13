@section('title', 'Sign in to your account')

<div>
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <div class="flex justify-center">
            <a href="{{ route('home') }}">
                <x-logo class="w-auto h-16 text-indigo-600" />
            </a>
        </div>
        

        <h2 class="mt-6 text-3xl font-extrabold text-center text-white leading-9">
            Sign in to your account
        </h2>
        {{-- @if (Route::has('register'))
            <p class="mt-2 text-sm text-center text-gray-600 leading-5 max-w">
                Or
                <a href="{{ route('register') }}" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                    create a new account
                </a>
            </p>
        @endif --}}
    </div>

    <div class="mt-8 sm:mx-auto w-[798px]">
        <div class="px-4 py-8 bg-[#110f2c] shadow sm:rounded-lg sm:px-10">
            <form wire:submit.prevent="authenticate">
                <div>
                    <label for="email" class="block text-sm font-medium text-white leading-5">
                        Email address
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="email" id="email" name="email" type="email" required autofocus class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                    </div>

                    @error('email')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-6">
                    <label for="password" class="block text-sm font-medium text-white  leading-5">
                        Password
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="password" id="password" type="password" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('password') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                    </div>

                    @error('password')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center">
                        <input wire:model.lazy="remember" id="remember" type="checkbox" class="form-checkbox w-4 h-4 text-indigo-600 transition duration-150 ease-in-out" />
                        <label for="remember" class="block ml-2 text-sm text-white  leading-5">
                            Remember
                        </label>
                    </div>

                    <div class="text-sm leading-5">
                        <a href="{{ route('password.request') }}" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                            Forgot your password?
                        </a>
                    </div>
                </div>

                <div class="mt-6">
                    <span class="block w-full rounded-md shadow-sm">
                        <button type="submit" class="flex justify-center h-[51px] w-full px-4 py-[16px] text-sm font-bold text-white bg-[#21E8E6] border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                            LOGIN
                        </button>
                    </span>
                </div>

                <div class="relative pt-[42px]">
                    <div class="flex items-center">
                        <div class="flex-grow border-t border-gray-400"></div>
                        <span class="mx-4 text-white">OR</span>
                        <div class="flex-grow border-t border-gray-400"></div>
                    </div>
                </div>
        
                <div class="flex justify-center items-center pt-[32px]">
                    <x-google-logo class="w-[180px] h-[180px]" />
                </div>
                        @if (Route::has('register'))
                            <p class="pt-[24px] text-sm text-center text-[#ECECEC] leading-5 max-w">
                                Don't have an account?
                                <a href="{{ route('register') }}" class="font-bold text-white hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                                    Sign up
                                </a>
                            </p>
                        @endif
            </form>
        </div>
    </div>
</div>
