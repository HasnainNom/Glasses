@extends('admin.layouts.app')
@section('content')
<div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Add User</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Add User</li>
                    </ol>
                </div>
                <div class="">
                    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
							<div class="card-header header-elements-inline">
				                <h6 class="card-title">Add New User</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
			                <div class="card-body">
			                	<form action="{{url('/admin/addnewuser')}}" method="POST" enctype="multipart/form-data">
                                    {{csrf_field()}}
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
                                            <input type="hidden" class="form-control" name="password" value="Jgaah@123">
											<label>Name</label>
											<input type="text" class="form-control" name="name" placeholder="Name">
                                            @if ($errors->has('name'))
                                            <span class="help-block">
                                                <small style="color:red;">{{ $errors->first('name') }}</small>
                                            </span>
                                            @endif
                                        </div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Email</label>
											<input type="email" class="form-control" name="email" placeholder="Email">
                                            @if ($errors->has('email'))
                                            <span class="help-block">
                                                <small style="color:red;">{{ $errors->first('email') }}</small>
                                            </span>
                                            @endif
                                        </div>
									</div>
                                </div>
                                <div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Phone</label>
											<input type="text" class="form-control" name="phone" placeholder="Phone">
                                            @if ($errors->has('phone'))
                                            <span class="help-block">
                                                <small style="color:red;">{{ $errors->first('phone') }}</small>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Country:</label>
                                            <select class="form-control" name="country">
                                                <option>Select Country</option>
                                                <option value="Pakistan">Pakistan</option>
                                            </select>
                                            @if ($errors->has('country'))
                                            <span class="help-block">
                                                <small style="color:red;">{{ $errors->first('country') }}</small>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
								</div>
								<div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>City:</label>
                                            <select class="form-control" name="city">
                                                <option>Select City</option>
                                                <option value="lahore">lahore</option>
                                                <option value="islamabad">islamabad</option>
                                                <option value="sargodha">sargodha</option>
                                                <option value="faisalabad">Faisalabad</option>
                                                <option value="peshawar">Peshawar</option>
                                                <option value="jahuarabad">Jahuarabad</option>
                                                <option value="mianwali">Mianwali</option>
                                                <option value="okara">Okara</option>
                                            </select>
                                            @if ($errors->has('city'))
                                    <span class="help-block">
                                        <small style="color:red;">{{ $errors->first('city') }}</small>
                                    </span>
                                    @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Profile Image</label>
                                            <input type="file" class="form-control" name="image">
                                            @if ($errors->has('image'))
                                        <span class="help-block">
                                            <small style="color:red;">{{ $errors->first('image') }}</small>
                                        </span>
                                        @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>User Type:</label>
                                            <select class="form-control" name="type">
                                                <option>Select Type</option>
                                                <option value="admin">Admin</option>
                                                <option value="user">User</option>
                                            </select>
                                            @if ($errors->has('type'))
                                    <span class="help-block">
                                        <small style="color:red;">{{ $errors->first('type') }}</small>
                                    </span>
                                    @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Subscription Plan</label>
                                            <select class="form-control" name="subscription_plan">
                                                <option>Select Plan</option>
                                                @foreach ($subs_plans as $subs_plan)
                                                <option value="{{$subs_plan->id}}">{{$subs_plan->plan_name}} ({{$subs_plan->validity}})</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('subscription_plan'))
                                        <span class="help-block">
                                            <small style="color:red;">{{ $errors->first('subscription_plan') }}</small>
                                        </span>
                                        @endif
                                        </div>
                                    </div>
                                </div>
									<div class="d-flex justify-content-start align-items-center">
										<button type="submit" class="btn bg-blue ml-3">Add User<i class="icon-paperplane ml-2"></i></button>
									</div>
								</form>
							</div>
		                </div>
                    </div>
                </div>
            </div>
            @endsection