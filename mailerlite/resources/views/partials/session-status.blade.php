@if(session('success'))
    <div class="bg-green-500 text-sm text-white rounded-md p-4" role="alert">
        <span class="font-bold">{{ session('success') }}</span>
    </div>
@endif

@if(session('warning'))
    <div class="bg-red-500 text-sm text-white rounded-md p-4" role="alert">
        <span class="font-bold"> {{ session('warning') }}</span> 
      </div>
@endif

@if(session('danger'))
    <div class="bg-orange-500 text-sm text-white rounded-md p-4" role="alert">
        <span class="font-bold">{{ session('danger') }}</span>
      </div>
@endif