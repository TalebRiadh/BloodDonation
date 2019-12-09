@extends('base')
@section('title', 'Register as Donator')
@section('content')
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            {{Session::get('success')}}
        </div>
    @endif
    <div class="section-content-block section-process">
        <div class="col-md-12 col-sm-12 text-center">
            <h2 class="section-heading"><span>Register</span> as Donator</h2>

            <p class="section-subheading">Because every pint of blood can save a life.</p>
        </div>
        <div class="row">
            <div class="col-md-2" ></div>
            <div class="col-md-8  text-center clearfix">
                <form class="appoinment-form" method="post" action="/createDonator">
                <div class="form-group col-md-5">
                    @error('firstName')
                    <small id="fistnameHelp" class="form-control text-danger">
                        {{$message}}
                    </small>
                    @enderror
                    <input  required type="text" class="form-control" placeholder="FirstName" value="{{ old('firstName') }}" name="firstName" id="firstname">
                </div>
                <div class="form-group col-md-5">
                    @error('lastName')
                    <small id="lastnameHelp" class="text-danger">
                        {{$message}}
                    </small>
                    @enderror
                    <input required type="text" class="form-control" placeholder="LastName" value="{{ old('lastName') }}" name="lastName" id="lastname">
                </div>
                    <div class="form-group col-md-2">
                        @error('bloodGroup')
                        <small id="bloodgroupelp" class="text-danger">
                            {{$message}}
                        </small>
                        @enderror
                        <select required name="bloodGroup" id="bloodGroup" class="custom-select">
                            <option selected disabled hidden>Blood group</option>
                            <option value="A+">A+</option>
                            <option value="B+">B+</option>
                            <option value="O+">O+</option>
                            <option value="AB+">AB+</option>
                            <option value="A-">A-</option>
                            <option value="B-">B-</option>
                            <option value="O-">O-</option>
                            <option value="AB-">AB-</option>
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        @error('email')
                        <small id="emailHelp" class="text-danger">
                            {{$message}}
                        </small>
                        @enderror
                        <input required type="email" class="form-control" placeholder="Email" value="{{ old('email') }}" name="email" id="email">
                    </div>
                <div class="form-group col-md-7">
                    @error('birthday')
                    <small id="birthdayHelp" class="text-danger">
                        {{$message}}
                    </small>
                    @enderror
                    <input required type="date" placeholder="Birth-day" name="birthday" class="form-control" value="{{ old('birthday') }}"  id="birthday">
                </div>
                    <div class="form-group col-md-5">
                        @error('phone')
                        <small id="phoneHelp" class="text-danger">
                            {{$message}}
                        </small>
                        @enderror
                        <input type="number" name="phone" placeholder="Phone Number" value="{{ old('phone') }}" class="form-control clearfix" id="phone">
                    </div>
                    <div class="form-group col-md-4">
                        @error('wilaya')
                        <small id="wilayaHelp" class="text-danger">
                            {{$message}}
                        </small>
                        @enderror
                        <select required name="wilaya" class="custom-select" id="wilaya">
                            <option selected disabled hidden>Wilaya</option>
                            @foreach($wilayas as $key =>$wilaya)
                                <option value="{{ $wilaya->id }}">{{ $wilaya->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        @error('commune')
                        <small id="wilayaHelp" class="text-danger">
                            {{$message}}
                        </small>
                        @enderror
                        <select required name="commune" id="commune" class="custom-select">
                            <option selected disabled hidden>Commune</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        @error('commune')
                        <small id="wilayaHelp" class="text-danger">
                            {{$message}}
                        </small>
                        @enderror
                        <select required name="center" id="center" class="custom-select">
                            <option selected disabled hidden>Center</option>
                            <option value="1">Center 1</option>
                            <option value="2">Center 2</option>
                            <option value="3">Center 3</option>

                        </select>
                    </div>

                    @csrf
                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <button class="btn-submit" type="submit">Register</button>
                    </div>
                </form>
            </div>
            <div class="col-md-2" ></div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('/js/form.js') }}"></script>

@endsection
