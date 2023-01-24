<div>
    <x-app.hero>
        <img src="{{ asset('/images/hero-exchange.jpg') }}" alt="{{ __(config('app.fullname')) }}" class="w-full" />

        <div class="absolute inset-0 left-4 top-4 hidden md:block">
            <div class="inline-grid gap-2">
                <a href="#exchange" class="inline-flex items-center gap-1 bg-white text-red-800 border-2 border-red-800 px-10 py-2 rounded-full group hover:bg-red-800">
                    <img src="{{ asset('/images/icon-anchor-exchange.png') }}" alt="{{ __(config('app.fullname')) }}" class="max-w-full w-7 group-hover:hidden" />
                    <img src="{{ asset('/images/icon-anchor-exchange-hover.png') }}" alt="{{ __(config('app.fullname')) }}" class="max-w-full w-7 hidden group-hover:inline" />
                    <span class="group-hover:text-white">{{ __('Exchange') }}</span>
                </a>
                <a href="#exchange-photos" class="inline-flex items-center gap-1 bg-white text-red-800 border-2 border-red-800 px-10 py-2 rounded-full group hover:bg-red-800">
                    <img src="{{ asset('/images/icon-anchor-photo.png') }}" alt="{{ __(config('app.fullname')) }}" class="max-w-full w-7 group-hover:hidden" />
                    <img src="{{ asset('/images/icon-anchor-photo-hover.png') }}" alt="{{ __(config('app.fullname')) }}" class="max-w-full w-7 hidden group-hover:inline" />
                    <span class="group-hover:text-white">{{ __('Exchange Photos') }}</span>
                </a>
                <a href="#exchange-videos" class="inline-flex items-center gap-1 bg-white text-red-800 border-2 border-red-800 px-10 py-2 rounded-full group hover:bg-red-800">
                    <img src="{{ asset('/images/icon-anchor-video.png') }}" alt="{{ __(config('app.fullname')) }}" class="max-w-full w-7 group-hover:hidden" />
                    <img src="{{ asset('/images/icon-anchor-video-hover.png') }}" alt="{{ __(config('app.fullname')) }}" class="max-w-full w-7 hidden group-hover:inline" />
                    <span class="group-hover:text-white">{{ __('Exchange Videos') }}</span>
                </a>
            </div>
        </div>
    </x-app.hero>

    <div class="max-w-7xl mx-auto px-4 mt-10">
        <x-app.brush id="exchange">
            {{ __('Exchange') }}
        </x-app.brush>
    </div>

    <div class="max-w-7xl mx-auto px-4 my-10 grid grid-cols-1 md:grid-cols-3 gap-4">
        @for($i = 0; $i < 6; $i++) <div class="grid gap-4">
            <img src="{{ asset('/images/demo-post.jpg') }}" alt="{{ __(config('app.fullname')) }}" class="w-full" />
            <div>
                <span class="bg-red-800 text-white px-4">
                    {{ __('Exchange') }}
                </span>
                <span class="ml-4">
                    2022/10/10
                </span>
            </div>
            <h1 class="text-xl font-semibold mb-2">
                {{ __('Title') }}
            </h1>
    </div>
    @endfor
</div>

<div class="max-w-7xl mx-auto px-4 mt-10">
    <x-app.brush id="exchange-photos">
        {{ __('Exchange Photos') }}
    </x-app.brush>
</div>

<div class="swiper mySwiper my-10">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img class="w-full" src="{{ asset('/images/inauguration/inauguration1.jpg') }}" alt="{{ __(config('app.fullname')) }}" />
        </div>
        <div class="swiper-slide">
            <img class="w-full" src="{{ asset('/images/inauguration/inauguration2.jpg') }}" alt="{{ __(config('app.fullname')) }}" />
        </div>
        <div class="swiper-slide">
            <img class="w-full" src="{{ asset('/images/inauguration/inauguration3.jpg') }}" alt="{{ __(config('app.fullname')) }}" />
        </div>
        <div class="swiper-slide">
            <img class="w-full" src="{{ asset('/images/inauguration/inauguration4.jpg') }}" alt="{{ __(config('app.fullname')) }}" />
        </div>
        <div class="swiper-slide">
            <img class="w-full" src="{{ asset('/images/inauguration/inauguration5.jpg') }}" alt="{{ __(config('app.fullname')) }}" />
        </div>
        <div class="swiper-slide">
            <img class="w-full" src="{{ asset('/images/inauguration/inauguration6.jpg') }}" alt="{{ __(config('app.fullname')) }}" />
        </div>
        <div class="swiper-slide">
            <img class="w-full" src="{{ asset('/images/inauguration/inauguration7.jpg') }}" alt="{{ __(config('app.fullname')) }}" />
        </div>
        <div class="swiper-slide">
            <img class="w-full" src="{{ asset('/images/inauguration/inauguration8.jpg') }}" alt="{{ __(config('app.fullname')) }}" />
        </div>
    </div>
    <div class="swiper-pagination"></div>
</div>

<div class="max-w-7xl mx-auto px-4 mt-10">
    <x-app.brush id="exchange-videos">
        {{ __('Exchange Videos') }}
    </x-app.brush>
</div>

<div class="max-w-7xl mx-auto px-4 my-10 grid grid-cols-1 md:grid-cols-3 gap-4">
    @for($i = 0; $i < 6; $i++) <div class="grid gap-4">
        <div class="responsive-iframe-container">
            <iframe class="responsive-iframe" src="https://www.youtube.com/embed/52QjwUfRwG4"></iframe>
        </div>
</div>
@endfor
</div>
</div>