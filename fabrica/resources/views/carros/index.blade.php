<x-app-layout>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <hr>
                    <div style="margin-bottom: 20px; margin-top:20px">
                    <form action="{{ route('carros.add') }}" method="POST">
                        @csrf
                        <input type="text" name="marca" placeholder="marca">
                        <input type="text" name="modelo" placeholder="modelo">
                        <input type="text" name="placa" placeholder="placa">
                        <input type="text" name="roda" placeholder="roda">
                        <input type="submit" value="Manda" class="btn btn-success">
                    </form>
                    </div>
                    <hr>
                    <div style="margin-bottom: 20px;">
                <table>
                        <tr>
                            <td>Marca</td>
                            <td>Modelo</td>
                            <td>Placa</td>
                            <td>Roda</td>
                        </tr>    
                        @foreach($carros as $carro)
                        <form action="{{ route('carros.destroy', $carro->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                            <tr>
                                <td>{{$carro->marca}}</td>
                                <td>{{$carro->modelo}}</td>
                                <td>{{$carro->placa}}</td>
                                <td>{{$carro->roda}}</td>
                                <td>|<a href="{{route('carros.edit', $carro->id)}}">editar</a>|</td>
                                <td><a href="{{route('carros.show', $carro->id)}}">Detalhes</a></td>
                                <td>|<button type="submit">Excluir</button>|</td>
                            </tr>
                            </form>
                        @endforeach
                    </table>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
