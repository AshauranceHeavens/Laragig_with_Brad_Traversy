{{-- <div class="col-lg-5 border rounded p-5 px-3 m-2 m-lg-0" >  --}}
<div {{$attributes->merge(['class' => "bg-gray-50 border border-gray-200 p-5 rounded"])}} >
    {{$slot}}
</div>