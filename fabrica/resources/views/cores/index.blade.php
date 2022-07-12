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
                    <div class="container-fluid">
                        <h2>Criar Cor</h2>
                        <form action="{{route('cor.add')}}" method="post">
                            @csrf
                            <div class="d-flex">
                            <div class="form-group">
                                <label for="matriz">Matriz</label>
                                <input type="color" name="matriz" id="matriz">
                            </div>
                            </div>
                            <button type="submit" class="btn btn-success" id="add">Criar Cor</button>
                        </form>
                    </div>
                    <hr>
                    <div style="margin-bottom: 20px;">
                        @if ($cores->count() > 0)
                        @foreach($cores as $cor)
                            <div class="container-fluid row" id="labels-row">
                              <div class="shadow text-center col" id="label" style="background-color: {{$cor->matriz}}; color:#FFF;">
                                <b>{{$cor->matriz}}</b>
                                </div>
                              </div>
                              <hr>
                        @endforeach
                        @endif   
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
