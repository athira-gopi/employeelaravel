
@extends("theme")




@section("content")


    <div class="container">
    <div class="row">
    <div class="col col-12 col-sm-3 col-lg-3 col-xl-3 col-xxl-3"></div>
    <div class="col col-12 col-sm-6 col-lg-6 col-xl-6 col-xxl-6">

<h1><center>ADD EMPLOYEE</center></h1><br><br>
    <table class="table">
    <tr>
        <td>Name</td>
        <td><input type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>Code</td>
        <td><input type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>Designation</td>
        <td><input type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>Salary</td>
        <td><input type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>DOB</td>
        <td><input type="date" class="form-control"></td>
    </tr>
    <tr>
        <td>Place</td>
        <td><input type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>Pincode</td>
        <td><input type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>Phone No</td>
        <td><input type="text" class="form-control"></td>
    </tr>
    <tr>
        <td></td>
        <td><button class="btn btn-primary">Submit</button></td>
    </tr>
    </table>
    </div>
    <div class="col col-12 col-sm-3 col-lg-3 col-xl-3 col-xxl-3"></div>
    </div>
    </div>

    @endsection
    