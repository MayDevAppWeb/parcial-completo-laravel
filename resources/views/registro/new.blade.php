<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Registro Cecep') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{route('registro.store') }}" method="post">
                                    @csrf
                                    <div class="row g-3 mb-3">
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="name"
                                                aria-label="name" id="name" name="name">
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Apellido"
                                                aria-label="Apellido" id="apellido" name="apellido">
                                        </div>
                                    </div>

                                    <div class="row g-3 mb-3">
                                        <div class="col">
                                            <input type="number" class="form-control" placeholder="documento"
                                                aria-label="documento" id="documento" name="documento">
                                        </div>
                                        <div class="col">
                                            <input type="email" class="form-control" placeholder="email@gmail.com"
                                                aria-label="email" id="email" name="email">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <input type="number" class="form-control"
                                                placeholder="1234567890"
                                            aria-label="email"
                                                id="telefono" name="telefono">
                                        </div>
                                        <div class="col">
                                            <label for="carrera_id" class="form-label">carrera</label>
                                            <select class="form-select" name="carrera_id" id="carrera_id"
                                                aria-label="Default select example">
                                                <option selected>Selecciona la carrera</option>
                                                @foreach ($carreras as $id => $nombre)
                                                    <option value="{{ $id }}">{{ $nombre }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                    </div>

                                    <div class="boton">
                                        <button type="submit" class="btn">Registrarme</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
</script>
