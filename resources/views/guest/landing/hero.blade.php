<section class="max-w-[1087px] mx-auto pt-[24px]">

    <div class="max-w-[900px] mx-auto">
        <h1 class="text-white font-sans text-center font-bold text-[60px]">Empowering Developers 👨🏽‍💻 With Code Snippet Management Platform 🚀</h1>
        <p class="text-[#b4b4b4] text-center mt-[24px] text-[24px]">🚀 Built for developers to supercharge efficiency and ignite innovation: ReCode Your Development Workflow 🌟</p>
    </div>

    <div class="flex justify-center items-center pt-[24px]">
        @if (Route::has('login'))
        <a href="{{ route('login') }}">
            <button  type="button" class="text-black font-semibold h-[46px] w-[400px] bg-[#21E8E6] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm px-4 py-2 text-center">
                {{ "Start now for free!" }}
            </button>
        </a>
        @endif
    </div>

    <div class="pt-[80px]">
            <img src="{{ asset('assets/elements/heroSectionGraphic.png') }}" />
    </div>
</section>
