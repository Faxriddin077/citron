@extends('layout.index')
@section('content')

    <div class="flex flex-col overflow-y-auto md:flex-row">
        <div class="h-32 md:h-auto md:w-1/2">
            <img
                aria-hidden="true"
                class="object-cover w-full h-full dark:hidden"
                src="{{ asset('admin/assets/img/create-account-office.jpeg') }}"
                alt="Office"
            />
            <img
                aria-hidden="true"
                class="hidden object-cover w-full h-full dark:block"
                src="{{ asset('admin/assets/img/create-account-office-dark.jpeg') }}"
                alt="Office"
            />
        </div>
        <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
            <div class="w-full">
                <h1
                    class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200"
                >
                    Create Project
                </h1>
                @if($errors->any()) @dd($errors->all()) @endif
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
                <form method="post" action="{{route('projects.store')}}" enctype="multipart/form-data">
                    @csrf
                    <label class="block mt-1 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Loyixa nomi uz</span>
                        <input type="text" name="name_uz" value="{{ old('name_uz') }}"
                               class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        />
                    </label>
                    <label class="block mt-1 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Loyixa nomi en</span>
                        <input type="text" name="name_en" value="{{ old('name_en') }}"
                               class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        />
                    </label>
                    <label class="block mt-1 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Loyixa nomi ru</span>
                        <input type="text" name="name_ru" value="{{ old('name_ru') }}"
                               class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        />
                    </label>
                    <label class="block mt-1 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Malumot uz</span>
                        <input type="text" name="desc_uz" value="{{ old('desc_uz') }}"
                               class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        />
                    </label>
                    <label class="block mt-1 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Malumot en</span>
                        <input type="text" name="desc_en" value="{{ old('desc_en') }}"
                               class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        />
                    </label>
                    <label class="block mt-1 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Malumot ru</span>
                        <input type="text" name="desc_ru" value="{{ old('desc_ru') }}"
                               class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        />
                    </label>

                    <label class="block mt-1 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Rasim</span>
                        <input type="file" name="image" value="{{ old('image') }}"
                               class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        />
                    </label>

                    <!-- You should use a button here, as the anchor is only used for the example  -->
                    <button type="submit"
                            class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                    >
                        Saqlash
                    </button>
                </form>
            </div>
        </div>
    </div>

@endsection


@section('script')
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: '{{ $error }}',
                    footer: '<a href="{{route('projects.create')}}">Why do I have this issue?</a>'
                })
            </script>
        @endforeach
    @endif
@endsection
