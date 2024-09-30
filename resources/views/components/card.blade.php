<div class="card mx-auto" style="width: 18rem;">
    {{-- <img src="{{ $img }}" class="card-img-top" alt="..."> --}}
    <div class="card-body">
        <h5 class="card-title"> {{ $studentName }} {{ $studentSurname }} </h5>
        <a href="{{ route('student.detail', ['id' => $studentId]) }}" class="btn btn-primary">Vai
            al dettaglio</a>
    </div>
</div>
