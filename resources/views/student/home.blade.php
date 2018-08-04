@include('student.header')
<div class="control-label col-sm-10" class="cointainer">
    <div class = "row">
        <legend>
            <div class="legend">
            <p> 
            <center> <b> Email Application </b> </center>
            </p>
            </div>
        </legend>
        @if(session('info'))
        <div class="alert alert-success">
            {{ session('info') }}
        </div>
        @endif
        <table class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>First Name</th>
                <th>Last Name</th>
            </tr>
            </thead>
        <tbody>
            @if(count($students) >0)
            @foreach($students->all() as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->age }}</td>
                <td>{{ $student->first_name }}</td>
                <td>{{ $student->last_name }}</td>
            </tr>
            @endforeach
            @endif
        </tbody>
        </table>
    </div>
</div>
@include('student.footer')