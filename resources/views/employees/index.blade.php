<x-app-layout title="Home page">
    <div class='container my-5'>

        <div class="fs-3">Employee</div>
        <hr>
        <a class="btn btn-primary" href="/create" role="button">Add New Employee</a>
        <table class="table table-striped mt-4">
            <thead>
                <tr class=text-center>
                    <th scope="col">NO</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Position</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $index => $employee)
                    <tr class=text-center>
                        <th scope="row">{{ $index + 1 }}</th>
                        <td>{{ $employee['name'] }}</td>
                        <td>{{ $employee['email'] }}</td>
                        <td>{{ $employee['position'] }}</td>
                        <td>
                            <div class="d-flex gap-2 justify-content-center">
                                <a class="btn btn-success" href="/detail/{{ $employee['id'] }}"
                                    role="button">Detail</a>
                                <a class="btn btn-primary" href=" {{ `/` + $employee['id'] }} " role="button">Edit</a>
                                <form action="/{{ $employee['id'] }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
</x-app-layout>
