<x-layout>

    <div class="container-fluid bg-background">
        <div class="row height-custom justify-content-center align-items-center">
            <div class="col-12 ">
                <h1 class="text-center display-4 title">
                   I NOSTRI DOCENTI!!!
                </h1>
            </div>
        </div>
        <div class="row justify-content-center align-items-center ">
            @foreach ($teachers as $teacher)
                <div class="col-12 col-md-3 py-5">

                    {{-- ! NON LASCIARE SPAZI TRA NOME ATTRIBUTO, = E CONTENUTO DELL'ATTRIBUTO --}}
                    <x-card-teacher name="{{ $teacher['name'] }}" surname="{{ $teacher['surname'] }}"
                        subject="{{ $teacher['subject'] }}">

                    </x-card-teacher>
                </div>
            @endforeach
        </div>
    </div>

</x-layout>
