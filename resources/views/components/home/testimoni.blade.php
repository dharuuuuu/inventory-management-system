@php
$data1 = array(
    'name' => 'Udik Pulyatno',
    'customer_job' => 'Customer',
    'testimoni' => 'Barangnya murah dan jelas aslinya.',
);
$data2 = array(
    'name' => 'Nurul R. Nitta',
    'customer_job' => 'Customer',
    'testimoni' => 'Pelayanan memuaskan dan karyawan ramah menjelaskan apa yang kita butuhkan.',
);
$data3 = array(
    'name' => 'Rino Santoni',
    'customer_job' => 'Customer',
    'testimoni' => 'Sip, pelayanannya bagus dan produknya lengkap.',
);


$data_page = [$data1, $data2, $data3];
@endphp

<div class="flex flex-row justify-center items-center py-6 sm:py-8 lg:py-12">
  <div class="mx-auto max-w-screen-xl">
    <h2 class="mb-8 text-center text-2xl font-bold text-gray-800 md:mb-12 lg:text-3xl">What others say about us</h2>

    {{-- <div class="flex flex-wrap m-4"> --}}
    <div class="grid gap-y-0 sm:grid-cols-2 sm:gap-y-12 lg:grid-cols-3">
      @foreach ($data_page as $data)
        <div class="p-4 w-full">
          <div class="h-full bg-green-50 p-8 rounded">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
              <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
            </svg>
            <p class="leading-relaxed mb-6">{{ $data['testimoni'] }}</p>
            <a class="inline-flex items-center">
              <img alt="testimonial" src="https://dummyimage.com/106x106/ddffdd/007300" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
              <span class="flex-grow flex flex-col pl-4">
                <span class="title-font font-medium text-green-600">{{ $data['name'] }}</span>
                <span class="text-green-300 text-sm">{{ $data['customer_job'] }}</span>
              </span>
            </a>
          </div>
        </div>
      @endforeach
    </div>
    {{-- </div> --}}
  </div>
</div>
