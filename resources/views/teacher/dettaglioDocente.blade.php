<x-layout>
    <div class="container-fluid bg-background">
        <div class="row height-custom justify-content-center align-items-center">
            <div class="col-12 ">
                <h1 class="text-center display-4 title">
                    Dettagli del docente: {{ $teacher['name'] }} {{ $teacher['surname'] }}
                </h1>
            </div>
        </div>
        <div class="row justify-content-center align-items-center pb-5">
            <div class="col-12 col-md-6 d-flex justify-content-center">
                <img src="https://picsum.photos/400" class="rounded shadow " alt="">
            </div>
            <div class="col-12 col-md-6">
                <h2>Materie insegnate:</h2>
                <p>{{ $teacher['subject'] }}</p>
            </div>
        </div>
    </div>


</x-layout>
