<section class="pt-[108px] max-w-[947px] mx-auto pb-[10rem]">

    <h1 class="text-[#F9F9F9] text-[48px] font-bold text-center">Boost your productivity with
        ReCode today! ⚡⚙️
    </h1>
    <p class="text-[#F9F9F9] pt-[32px] text-[16px] font-sans text-center">Experience unparalleled efficiency and collaboration—start using ReCode to streamline your development process now!</p>
    <div class="flex justify-center items-center pt-[32px]">
        @if (Route::has('login'))
        <a href="{{ route('login') }}">
            <button  type="button" class="text-white font-semibold lg:h-[46px] lg:w-[400px] md:h-[46px] md:w-[200px] sm:w-[100px] bg-[#21E8E6] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm px-4 py-2 text-center ">
                <p class="lg:text-[16px] md:text-[12px] sm:text-[8px]">START NOW FOR FREE!</p>
            </button>
        </a>
        @endif
    </div>
    <div class="flex items-center pt-[32px]">
        <div class="mx-auto">
            <img src="{{ asset('assets/elements/callToAction.png') }}" alt="Call to Action" />
        </div>
    </div>


</section>
