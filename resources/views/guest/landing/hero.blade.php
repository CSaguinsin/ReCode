<section class="max-w-[1087px] mx-auto pt-[24px]">

    <div class="max-w-[900px] mx-auto">
        <h1 class="text-white font-sans text-center font-bold lg:text-[60px] md:text-[32px] md:px-8 sm:text-center sm:text-[30px] sm:px-8">Empowering Developers 👨🏽‍💻 With Code Snippet Management Platform 🚀</h1>
        <p class="text-[#b4b4b4] mt-[24px] lg:text-center lg:text-[24px] md:text-[20px] md:text-center px-[32px] sm:text-[12px]">🚀 Built for developers to supercharge efficiency and ignite innovation: ReCode Your Development Workflow 🌟</p>
    </div>

    <div class="flex justify-center items-center pt-[24px]">
        @if (Route::has('login'))
        <a href="{{ route('login') }}">
            <button  type="button" class="text-white font-semibold lg:h-[46px] lg:w-[400px] md:h-[46px] md:w-[200px] sm:w-[100px] bg-[#21E8E6] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm px-4 py-2 text-center ">
                <p class="lg:text-[16px] md:text-[12px] sm:text-[8px]">START NOW FOR FREE!</p>
            </button>
        </a>
        @endif
    </div>

    <div class="pt-[80px]">
            <img src="{{ asset('assets/elements/heroSectionGraphic.png') }}" class="lg:h-full lg:w-full md:w-[40rem] md:mx-auto" />
    </div>
</section>
