<x-app-layout>
    <div class="container">
        <div class="fs-4 mt-5 mb-2">Edit Employee</div>
        <form action="/{{ $employees->id }}" method="post">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Fullname</label>
                <input type="text" name='name' value="{{ $employees['name'] }}" class="form-control"
                    id="exampleFormControlInput1" placeholder="Budiyono" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" name='email' value="{{ $employees['email'] }}" class="form-control"
                    id="exampleFormControlInput1" placeholder="name@example.com" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Position</label>
                <input type="text" name='position' value="{{ $employees['position'] }}" class="form-control"
                    id="exampleFormControlInput1" placeholder="Fullstack Web Developer" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Employee</button>
        </form>
    </div>
</x-app-layout>
