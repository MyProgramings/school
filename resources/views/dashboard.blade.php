<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hi. Abdullah') }} <i class="fa-solid fa-hand-sparkles"></i>
        </h2>
    </x-slot>

    <div class="relative sm:flex sm:justify-center sm:items-center bg-center bg-gray-100 selection:bg-red-500 selection:text-white">

        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="flex justify-center px-0 sm:items-center sm:justify-between">
                <div class="text-center text-sm text-gray-500 sm:text-left">
                    <div class="flex items-center gap-4">
                        <a href="https://github.com/sponsors/taylorotwell" class="group inline-flex items-center hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="-mt-px mr-1 w-5 h-5 stroke-gray-400 group-hover:stroke-gray-600 ">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>
                            Sponsor
                        </a>
                    </div>
                </div>

                <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                </div>
            </div>

            <div class="mt-4">
                <div class="grid grid-cols-1 md:grid-cols-1 gap-6 lg:gap-8">
                    <div class="scale-200 p-6 bg-white from-gray-700/50 rounded-lg shadow flex duration-50 outline outline-1 outline-red-500">
                        <div>
                            <form action="{{ route('file.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                  <label for="name" class="form-label">Name</label>
                                  <input type="text" class="form-control" id="name" name="name">
                                </div>
                                <div class="mb-3">
                                  <label for="description" class="form-label">Description</label>
                                  <input type="text" class="form-control" id="description" name="description">
                                </div>
                                {{-- <div class="mb-3">
                                    <label for="formFile" class="form-label">Your file</label>
                                    <input class="form-control" type="file" id="formFile">
                                  </div> --}}
                                  <div class="input-group my-3 file-area">
                                    <label for="file" class="mb-2">Your File</label>
                                    <input type="file" id="file" name="file" onchange="readCoverImage(this);">
                                    <div class="input-title">Drag the file here or click to select manually</div>
                                </div>
                                <div class="row">
                                    <img id="cover-image-thumb" class="col-2" width="100" height="100">
                                    <span class="input-name col-6"></span>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                              </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function readCoverImage(input){
            if(input.files && input.files[0]){
                var reader = new FileReader();
                reader.onload = function (e){
                    document.querySelector('#cover-image-thumb').setAttribute('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</x-app-layout>
