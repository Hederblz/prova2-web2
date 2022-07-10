<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <hr>
                    <div style="margin-bottom: 20px; margin-top:20px">
                    <form action="{{route('carros.update', $carro->id)}}" method="POST">
                        @method('PATCH')
                        @csrf
                        <input type="text" name="marca" placeholder="marca" value="{{$carro->marca}}">
                        <input type="text" name="modelo"  placeholder="modelo" value="{{$carro->modelo}}">
                        <input type="text" name="placa" placeholder="placa" value="{{$carro->placa}}">
                        <input type="text" name="roda" placeholder="roda" value="{{$carro->roda}}">
                        <input type="submit" value="Editar">
                    </form>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
