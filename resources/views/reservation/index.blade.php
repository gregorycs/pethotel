@extends('layouts.template')

@section('content')
    <div class="container mx-auto px-4 mb-10">
        <h1 class="text-purple-800 text-3xl font-bold text-center mt-8">Reservación Hotel de Mascotas</h1>
        
        <div class="grid grid-cols-1 place-items-end mt-4 mb-4">
            <div class="flex items-center justify-center">               
                    <form action="" id="form_search_customer" class="flex border-2 rounded">
                        <input type="text" name="document" class="px-4 py-2 w-80" placeholder="Buscar cliente por cédula" required="">
                        <button type="submit" class="flex items-center justify-center px-4 border-l">
                            <svg class="w-6 h-6 text-gray-600" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path
                                    d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z" />
                            </svg>
                        </button>
                    </form>     
            </div>
        </div>

        <form action="{{ route('save-reservation') }}" method="post">
            @csrf
            <h1 class="text-purple-800 text-xl font-bold mb-5">Datos del cliente</h1>

            <div class="grid grid-cols-2 grid-rows-4 gap-4">
                <div>
                    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-700">Nombre*</label>
                    <input type="text" name="customer[first_name]" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
                    @error('customer.first_name')
                        <small class="text-red-700">{{ $message }}</small>
                    @enderror
                </div>
                <div>
                    <label for="last_name" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Apellido*</label>
                    <input type="text" name="customer[last_name]" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
                    @error('customer.last_name')
                        <small class="text-red-700">{{ $message }}</small>
                    @enderror
                </div>

                <div>
                    <label for="document" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Cédula*</label>
                    <input type="text" name="customer[document]" id="document" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
                    @error('customer.document')
                        <small class="text-red-700">{{ $message }}</small>
                    @enderror
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Correo*</label>
                    <input type="email" name="customer[email]" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="name@flowbite.com" required="">
                    @error('customer.email')
                        <small class="text-red-700">{{ $message }}</small>
                    @enderror
                </div>

                <div>
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Teléfono</label>
                    <input type="text" name="customer[phone]" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    @error('customer.phone')
                        <small class="text-red-700">{{ $message }}</small>
                    @enderror
                </div>
                <div>
                    <label for="mobile_phone" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Celular*</label>
                    <input type="text" name="customer[mobile_phone]" id="mobile_phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">                    
                    @error('customer.mobile_phone')
                        <small class="text-red-700">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-span-2">                    
                    <label for="address" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Dirección</label>
                    <input type="text" name="customer[address]" id="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">                    
                </div>
            </div>

            <h1 class="text-purple-800 text-xl font-bold mt-8 mb-5">Datos de la mascota</h1>

            <div class="grid grid-cols-2 grid-rows-3 gap-4">
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-700">Nombre</label>
                    <input type="text" name="pet[name]" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
                    @error('pet.name')
                        <small class="text-red-700">{{ $message }}</small>
                    @enderror
                </div>
                <div>
                    <label for="breed" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Raza</label>
                    <input type="text" name="pet[breed]" id="breed" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
                    @error('pet.breed')
                        <small class="text-red-700">{{ $message }}</small>
                    @enderror
                </div>

                <div>
                    <label for="age" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Edad</label>
                    <input type="number" name="pet[age]" id="age" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
                    @error('pet.age')
                        <small class="text-red-700">{{ $message }}</small>
                    @enderror
                </div>
                <div>                    
                    <label for="sex" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-400">Sexo</label>
                    <select name="pet[sex_id]" id="sex" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        @foreach ($sexes as $item)
                            <option value="{{$item->id}}">{{$item->description}}</option>
                        @endforeach                      
                    </select>                    
                </div>

                <div>
                    <label for="type_pet" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-400">Sexo</label>
                    <select name="pet[type_pet_id]" id="type_pet" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        @foreach ($type_pets as $item)
                            <option value="{{$item->id}}">{{$item->description}}</option>
                        @endforeach                         
                    </select> 
                </div>                
            </div>

            <h1 class="text-purple-800 text-xl font-bold mt-8 mb-5">Datos de la reserva</h1>

            <div class="grid grid-cols-3 gap-4">
                <div>
                    <label for="entry_date" class="block mb-2 text-sm font-medium text-gray-700">Fecha de ingreso</label>
                    <input datepicker datepicker-format="yyyy-mm-dd" type="text" name="reservation[entry_date]" id="entry_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
                    @error('reservation.entry_date')
                        <small class="text-red-700">{{ $message }}</small>
                    @enderror
                </div>
                <div>
                    <label for="release_date" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Fecha de salida</label>
                    <input datepicker datepicker-format="yyyy-mm-dd" type="text" name="reservation[release_date]" id="release_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
                    @error('reservation.release_date')
                        <small class="text-red-700">{{ $message }}</small>
                    @enderror
                </div>
                <div>
                    <label for="mobility" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-400">Movilidad</label>
                    <select name="reservation[mobility]" id="mobility" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
                        <option value="si">si</option>
                        <option value="si">no</option>                        
                    </select>  
                    @error('reservation.mobility')
                        <small class="text-red-700">{{ $message }}</small>
                    @enderror 
                </div>

                <div class="col-span-3">                                        
                    <label for="observation" class="block mb-2 text-sm font-medium text-gray-700">Observaciones</label>
                    <textarea name="reservation[observation]" id="observation" rows="3" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" required=""></textarea>                    
                    @error('reservation.observation')
                        <small class="text-red-700">{{ $message }}</small>
                    @enderror
                </div>          
            </div>

            <div class="flex items-start mb-6 mt-8">
                <div class="flex items-center h-5">
                    <input name="send_email" id="send_email" type="checkbox" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300">
                </div>
                <div class="ml-3 text-sm">
                    <label for="send_email" class="font-medium text-gray-700 dark:text-gray-300">Recibir correo de la reserva</label>
                </div>
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">ENVIAR</button>
        </form>    
    </div>

    <script>
        $(document).ready(function() {
            let url = {
                "getDataCustomer" : "{{ route('get-customer') }}"
            };

            $("#form_search_customer").submit(function(e){
                e.preventDefault();
                
                var _token = $("input[name='_token']").val();
                var document = $("input[name='document']").val();

                $.ajax({
                    url: url.getDataCustomer,
                    type: 'POST',
                    data: {
                        _token: _token,
                        document: document
                    },
                    success: function(data) {
                        if(data.valid){
                            $("input[name='customer[first_name]']").val(data.first_name);
                            $("input[name='customer[last_name]']").val(data.last_name);
                            $("input[name='customer[document]']").val(data.document);
                            $("input[name='customer[email]']").val(data.email);
                        }else{
                            $("input[name='customer[first_name]']").val('');
                            $("input[name='customer[last_name]']").val('');
                            $("input[name='customer[document]']").val('');
                            $("input[name='customer[email]']").val('');
                            alert("Hubo inconveniente al consultar cédula, intente nuevamente");
                        }
                    }
                });
            });            
            
        });
    </script>

@endsection