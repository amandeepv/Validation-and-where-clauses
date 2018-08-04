@include('student.header')
<form class="form-horizontal" action="insert" method="post">
    {{ csrf_field() }}
    <fieldset>
        <legend>
            <div class="legend">
            <p> 
            <center> <b> Students Record </b> </center>
            </p>
            </div>
        </legend>
        <div class="form-group">
            <label class="control-label col-sm-2" for="name">Name</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" name="name" placeholder="Name" id="name">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="age">Age</label>
            <div class="col-sm-3">
            <input type="integer" class="form-control" name="age" placeholder="Enter student age" id="age">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="first_name">First Name</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" name="first_name" placeholder="First Name" id="first_name">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="last_name">Last Name</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" name="last_name" placeholder="Last Name" id="last_name">
            </div>
        </div>
        <br>
            <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <button type="submit"  class="btn btn-success">Submit</button>
            <a href="student" class="btn btn-primary">Back</a>
            </div>
            </div>
        </br>
   </fieldset>
</form>
@include('student.footer')