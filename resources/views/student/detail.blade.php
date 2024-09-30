<x-layout>
    <div class="container-fluid bg-background">
        <div class="row height-custom justify-content-center align-items-center">
            <div class="col-12 ">
                <h1 class="text-center display-4 title">
                    Dettagli dello studente: {{ $student['name'] }} {{ $student['surname'] }}
                </h1>
            </div>
        </div>
        <div class="row justify-content-center align-items-center pb-5">
            <div class="col-12 col-md-6 d-flex justify-content-center">
                {{-- <img src="{{ $student['img'] }}" class="rounded shadow " alt=""> --}}
            </div>
            <div class="col-12 col-md-6">
                <h2>{{ $student['name'] }} {{ $student['surname'] }}</h2>
            </div>
        </div>
    </div>

</x-layout>
