@php
$data1 = array(
    'title' => 'Feature1',
    'description' => 'Shares some characteristics of a real written text',
    'url_page' => '/',
    'icon' => '<svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
                    <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                    </svg>'
);
$data2 = array(
    'title' => 'Feature2',
    'description' => 'Shares some characteristics of a real written text',
    'url_page' => '/',
    'icon' => '<svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M9.465 10H12a2 2 0 1 1 0 4H9.465c.34-.588.535-1.271.535-2 0-.729-.195-1.412-.535-2z"/>
                    <path d="M6 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 1a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm.535-10a3.975 3.975 0 0 1-.409-1H4a1 1 0 0 1 0-2h2.126c.091-.355.23-.69.41-1H4a2 2 0 1 0 0 4h2.535z"/>
                    <path d="M14 4a4 4 0 1 1-8 0 4 4 0 0 1 8 0z"/>
                    </svg>'
);
$data3 = array(
    'title' => 'Feature3',
    'description' => 'Shares some characteristics of a real written text',
    'url_page' => '/',
    'icon' => '<svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                    <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                    </svg>'
);


$data_page = [$data1, $data2, $data3];
@endphp

<div class="flex flex-row justify-center items-center py-6 sm:py-8 lg:py-12">
  <div class="mx-auto max-w-screen-xl px-4 md:px-8">
    <h2 class="text-center text-2xl font-bold text-gray-800 md:mb-12 lg:text-3xl">Feature</h2>
        <div class="grid sm:grid-cols-3 lg:grid-cols-3 items-center gap-4">
            @foreach ($data_page as $data)
                <a class="group flex flex-col justify-center border shadow-sm rounded-xl p-4 md:p-7 dark:hover:bg-slate-800" href="{{ $data['url_page'] }}">
                <div class="flex justify-center items-center w-12 h-12 bg-green-700 rounded-xl">
                    {!! $data['icon'] !!}
                </div>
                <div class="mt-5">
                    <h3 class="text-gray-800 text-lg font-semibold">{{ $data['title'] }}</h3>
                    <p class="text-gray-800 mt-1">{{ $data['description'] }}</p>
                    <span class="mt-2 inline-flex items-center gap-x-1.5 text-sm text-green-700 decoration-2 group-hover:underline font-medium">
                    Learn more
                    <svg class="w-2.5 h-2.5" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M5.27921 2L10.9257 7.64645C11.1209 7.84171 11.1209 8.15829 10.9257 8.35355L5.27921 14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                    </span>
                </div>
                </a>
            @endforeach

        </div>
  </div>
</div>