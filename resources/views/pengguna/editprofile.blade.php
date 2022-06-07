@extends('layout.layout')
@section('konten')

<style>
    body {
    background: rgb(99, 39, 120)
}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}

</style>
@section('content')
<div class="container rounded bg-info mt-5 ">
    <div class="row">
        <div class="col-sm-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 "><img class="rounded-circle mt-5" src="{{ URL::asset('/image/ega.png') }}" alt="Card image"
                ><h4>Kamisato Eganteng</h4></div>
        </div>
        <div class="col-sm-8 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-6"><label class="labels">First Name</label><input type="text" class="form-control" placeholder="First name" value=""></div>
                    <div class="col-sm-6"><label class="labels">Last Name</label><input type="text" class="form-control" value="" placeholder="Last Name"></div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="Enter Mobile Number" value=""></div>
                    <div class="col-sm-12"><label class="labels">Address</label><input type="text" class="form-control" placeholder="Enter Address" value=""></div>
                    <div class="col-sm-12"><label class="labels">Email</label><input type="text" class="form-control" placeholder="Enter Email" value=""></div>
                </div>
                <div class="row">
                    <div class="col"><label class="labels">Country</label><input type="text" class="form-control" placeholder="Enter Country" value=""></div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
            </div>
        </div>

    </div>
</div>
</div>
</div>
@endsection
