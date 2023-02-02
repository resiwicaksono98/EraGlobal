<x-app-layout>
    <div class="container my-5">
        <div class="fs-3">Detail {{ $employees['name'] }} </div>
        <div class="card ">
            <div class="card-body">
                <h5 class="card-title">Name : {{ $employees['name'] }}</h5>
                <div class="card-text">Email: {{ $employees['email'] }}</div>
                <p class="card-text">Position: {{ $employees['position'] }}</p>
                <a href="/" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</x-app-layout>
