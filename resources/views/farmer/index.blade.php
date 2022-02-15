@extends('base')

@section('content')

<header class="bg-white shadow">
  <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold text-gray-900 text-center ">
     Farmer
        <button
          type="button"
          data-mdb-ripple="true"
          data-mdb-ripple-color="light"
          data-bs-toggle="modal" data-bs-target="#newPlantModal"
           class="float-left 
           hover:float-left inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight lowercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out"
        > New</button>
      </h1>
  </div>
</header>
<main>
  <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
    @if ($message = Session::get('success'))
      <div class="bg-green-100 rounded-lg py-5 px-6 mb-3 text-base text-green-700 inline-flex items-center w-full" role="alert">
        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-circle" class="w-4 h-4 mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
          <path fill="currentColor" d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
        </svg>
        {{ $message }}
      </div>
    @elseif ($errors)
      @foreach($errors->all() as $message) 
      <div class="bg-red-100 rounded-lg py-5 px-6 mb-3 text-base text-red-700 inline-flex items-center w-full" role="alert">
        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times-circle" class="w-4 h-4 mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
          <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"></path>
        </svg>
        {{ $message }}
      </div>
      @endforeach
    @endif
   
    <div class="px-4 py-6 sm:px-0">
      <div class="border-4 border-dashed  border-gray-200 rounded-lg h-96 overflow-x-auto">
        <table class="min-w-full text-center">
          <thead class="border-b bg-white-800">
            <tr>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">#</th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">Name</th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">Sex</th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">Age</th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">Email</th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">Phone</th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">WhatsApp</th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">Action</th>
            </tr>
          </thead class="border-b">
          <tbody>
            @foreach ($farmer as $key => $farmer)
            <tr>
              <td >{{ $farmer->name }}</td>
              <td >{{ $farmer->sexe }}</td>
              <td >{{ $farmer->age }} ans</td>
              <td >{{ $farmer->email }}</td>
              <td >{{ $farmer->telephone }}</td>
              <td >{{ $farmer->whatsapp }}</td>
              <td >
                
              </td>
              <td class="text-center">
                <form class="inline-block" method="POST" action="{{ route('Farmer.destroy', $farmer->id) }}" >
                  @csrf @method('DELETE')
                  <button type="submit">
                   
                  </button>  
                </form>
                <button onclick='editfarmer(@json($farmer))'>
                  DELETE
                </button>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>

      </div>
    </div>
    <!-- /End replace -->
  </div>
</main>

@include('farmer.create')
@include('farmer.update')

@endsection