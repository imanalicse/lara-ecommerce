Product listing page <br>
@verbatim
    {{ $name }}
    @json(["Hello"=>'world'])
@endverbatim

<x-alert type="error" :message="$message" hasError="true" class="mb-4">
    <x-slot name="title">
        Server Error
    </x-slot>
    <strong>Whoops!</strong> Something went wrong!
</x-alert>
