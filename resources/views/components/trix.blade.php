@props(['name'=> ''])

<input id="{{ $name }}" type="hidden" name="{{ $name }}">
<trix-editor input="{{ $name }}"></trix-editor>

@endsection

@push('css')
<link rel="stylesheet" href="/css/trix.css">
@endpush

@push('js')
<script src="/js/trix.js"></script>
@endpush

