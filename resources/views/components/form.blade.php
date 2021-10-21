{{-- {{ dd($attributes) }}; --}}
<form {{  $attributes }}>

    @csrf {{ $slot }}

</form>
