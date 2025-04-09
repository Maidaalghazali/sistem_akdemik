<div class="bg-white border-4 rounded-lg shadow relative m-10">
    {{-- Header --}}
    <div class="flex items-start justify-between p-5 border-b rounded-t">
        <h3 class="text-xl font-semibold">
            {{ $title ?? 'Form Section' }}
        </h3>

        @if (isset($backUrl))
            <a href="{{ $backUrl }}"
                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>
        @endif
    </div>

    {{-- Form content --}}
    <div class="p-6 space-y-6">
        <div class="grid grid-cols-6 gap-6">
            {{ $slot }}
        </div>
    </div>

    {{-- Footer (submit button or additional actions) --}}
    @if (isset($footer))
        <div class="p-6 border-t border-gray-200 rounded-b">
            {{ $footer }}
        </div>
    @endif
</div>
