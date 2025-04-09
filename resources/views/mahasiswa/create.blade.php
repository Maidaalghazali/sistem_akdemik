<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tambah Mahasiswa
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow-sm sm:rounded-lg">

                {{-- Tampilkan pesan error validasi jika ada --}}
                @if($errors->any())
                    <div class="mb-4">
                        <ul class="list-disc list-inside text-sm text-red-600">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {{-- Formulir Tambah Mahasiswa --}}
                <form action="{{ route('mahasiswa.store') }}" method="POST">
                    @csrf

                    {{-- Include partial form (field input mahasiswa) --}}
                    @include('mahasiswa.form')

                    <div class="flex justify-end mt-6">
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
