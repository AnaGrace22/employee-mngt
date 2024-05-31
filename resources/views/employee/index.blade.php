@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="font-size:20px;" class="m-0">Employee Management</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
           >
             
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->

    <!-- /.content-header -->



    <div class="card card-primary"  style="margin-left:200px; margin-right:200px;">
              <div  style="Background-color:#2d3436;" class="card-header " >
                <h3  class="card-title">Add new employee</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  style="padding:20px; " action="{{url('employee')}}" method="POST">
              @csrf
                <div   style="margin-left:50px; margin-right:50px;" class="card-body">


                <div style="display:flex;width:100%; ">


                  <div style="width:33%; margin:10px;"class="form-group">
                    <label for="exampleInputEmail1">First Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="{{old('firstname')}}" name="firstname" >
                  </div>
                  <div style="width:34%; margin:10px;" class="form-group">
                    <label for="exampleInputPassword1">Last Name</label>
                    <input type="text" class="form-control" id="exampleInputPassword1"  value="{{old('lastname')}}" name="lastname">
                  </div>
                  <div style="width:33%; margin:10px;" class="form-group">
                    <label for="exampleInputPassword1">Middle Name</label>
                    <input type="text" class="form-control" id="exampleInputPassword1"  value="{{old('middlename')}}" name="middlename" >
                  </div>
</div>





<div style="display:flex;width:100%; ">
                  <div style="width:50%; margin:10px;" class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <input type="text" class="form-control" id="exampleInputPassword1"   value="{{old('address')}}" name="address">
                  </div>

                  <div  style="width:50%; margin:10px;" class="form-group">

                  <label for="exampleInputPassword1">Country</label>
                  

                  <select class="custom-select form-control-border" id="exampleSelectBorder"   placeholder="Please select your Country" name="country">
                    <option>Please select your Country</option>
                    <option>Philippines</option>
                    <option>Japan</option>
                    <option>China</option>
                    
                  </select>

                  </div>

</div>




<div style="display:flex;width:100%; ">
                  <div style="width:30%; margin:10px;" class="form-group">

                  <label for="exampleInputPassword1">State</label>


                  <select class="custom-select form-control-border" id="exampleSelectBorder"   placeholder="Please select your State" name="state">
                    <option>Please select your State</option>
                    <option>Please select your State</option>
                    <option>Value 2</option>
                    <option>Value 3</option>
                  </select>

                  </div>


                  <div style="width:30%; margin:10px;" class="form-group">

                  <label for="exampleInputPassword1">City</label>


                  
                  <select class="custom-select form-control-border" id="exampleSelectBorder"   placeholder="Please select your City"  name="city">
                    <option>Please select your City</option>
                    <option>Apalit</option>
                    <option>Arayat</option>
                    <option>Angeles</option>
                  </select>

                  </div>

                  <div style="width:40%; margin:10px;"class="form-group">
                    <label for="exampleInputPassword1">Zip</label>
                    <input type="text" class="form-control" id="exampleInputPassword1"  value="{{old('zip')}}" name="zip" >
                  </div>

</div>



<div style="display:flex;width:100%; ">
                  <div style="width:50%; margin:10px;" class="form-group">
                    <label for="exampleInputPassword1">Birthday</label>
                    <input type="Date" class="form-control" id="exampleInputPassword1" value="{{old('birth')}}" name="birth">
                  </div>


                  <div style="width:50%; margin:10px;" class="form-group">
                    <label for="exampleInputPassword1">Hired Date</label>
                    <input type="Date" class="form-control" id="exampleInputPassword1" value="{{old('hired')}}" name="hired" >
                  </div>
</div>


                  
                  <div  style=" margin:10px;"class="form-group">

                  <label for="exampleInputPassword1">Department</label>


                  <select class="custom-select form-control-border" id="exampleSelectBorder"   placeholder="General Management"   name="department">
                    <option>General Managemen</option>
                    <option>Administrative</option>
                    <option>Purchasing</option>
                    <option>Sales</option>
                    <option>IT</option>

                  </select>

                  </div>


                  <button style="background-color:#636e72; color:white; width:100%; margin:0;"href="employee.show" type="submit" class="btn btn-primary">Submit</button>
             
              </form>
            </div>

@endsection


