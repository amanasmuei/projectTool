@extends('layouts.app_1', ['page' => __('Add Project'), 'pageSlug' => 'projects'])

@section('content')
    <div class="row justify-content-md-center ">
        <div class="col-sm-5">
            <!-- <button class="btn btn-primary mb-3" onclick="window.location='{{ route("pages.project") }}'">Back</button> -->
            <div class="card text-center">
                <div class="card-header">
                    <h4 class="title mb-1">{{ _('New Project') }}</h4>
                    <p class="card-category">Fill in the fields below:</p> 
                </div>
                <!-- <div class="card-header"> -->
                    <!-- <div class="col-6"> -->
                        <!-- <h4 class="card-title mb-1 font-weight-bold">New Project</h4>
                        <p class="card-category">Fill in the fields below:</p>  -->
                    <!-- </div> -->
                    <!-- <div class="col-12 col-md-3 text-right"> -->
                        <!-- <button class="btn btn-primary btn-sm float-md-right" onclick="window.location='{{ route("pages.project.create") }}'">Create Project</button> -->
                        <!-- <button type="button" class="btn btn-fill btn-primary" onclick="window.location='{{ route("pages.project") }}'">{{ _('Cancel') }}</button>
                        <button type="submit" class="btn btn-fill btn-primary">{{ _('Save') }}</button>
                    </div> -->
                <!-- </div> -->
                <form method="post" action="{{ route('profile.update') }}" autocomplete="off">
                    <div class="card-body pb-0">
                        @csrf
                        @method('put')

                        @include('alerts.success')

                        <div class="row" id="project_name">
                            <label class="col-sm-3 col-form-label">Project Name</label>
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <input class="form-control" name="project" id="input-project" type="text" placeholder="Enter the project name" required="true" aria-required="true">
                                </div>
                            </div>
                        </div>

                        <div class="row" id="project_code">
                            <label class="col-sm-3 col-form-label">Project Code</label>
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <input class="form-control" name="code" id="input-code" type="text" placeholder="Enter the project code" required="true" aria-required="true">
                                </div>
                            </div>
                        </div>

                        <div class="row" id="project_code">
                            <label class="col-sm-3 col-form-label">Domain</label>
                            <div class="col-sm-9">
                                <div class="form-group">
                                <select class="form-control" name="domain">
                                    <option value="">Select Domain...</option>
                                    <option value="healthcare">Health Care</option>
                                    <option value="ecommerce">E-COmmerce</option>
                                    <option value="finance">Finance</option>
                                </select>
                                </div>
                            </div>
                        </div>

                        <div class="row" id="project_description">
                            <label class="col-sm-3 col-form-label">Description</label>
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Enter the project dsecription" rows="3"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row" id="project_access_type">
                            <label class="col-sm-3 col-form-label">Project Access Type</label>
                            <div class="col-sm-9 text-left">
                                <div class='custom-control custom-radio custom-control-inline'>
                                    <input type='radio' id='private' name='borangA_perawis_perumusan' class='custom-control-input'>
                                    <label class='custom-control-label' for='private'>Private</label>
                                </div>
                                <div class='custom-control custom-radio custom-control-inline'>
                                    <input type='radio' id='public' name='borangA_perawis_perumusan' class='custom-control-input'>
                                    <label class='custom-control-label' for='public'>Public</label>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer text-right pt-0" >
                        <button type="button" class="btn btn-fill btn-primary" onclick="window.location='{{ route("pages.project") }}'">{{ _('Cancel') }}</button>
                        <button type="submit" class="btn btn-fill btn-primary">{{ _('Save') }}</button>
                    </div>
                </form>
            </div>

            <!-- <div class="card">
                <div class="card-header">
                    <h5 class="title">{{ _('Password') }}</h5>
                </div>
                <form method="post" action="{{ route('profile.password') }}" autocomplete="off">
                    <div class="card-body">
                        @csrf
                        @method('put')

                        @include('alerts.success', ['key' => 'password_status'])

                        <div class="form-group{{ $errors->has('old_password') ? ' has-danger' : '' }}">
                            <label>{{ __('Current Password') }}</label>
                            <input type="password" name="old_password" class="form-control{{ $errors->has('old_password') ? ' is-invalid' : '' }}" placeholder="{{ __('Current Password') }}" value="" required>
                            @include('alerts.feedback', ['field' => 'old_password'])
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                            <label>{{ __('New Password') }}</label>
                            <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('New Password') }}" value="" required>
                            @include('alerts.feedback', ['field' => 'password'])
                        </div>
                        <div class="form-group">
                            <label>{{ __('Confirm New Password') }}</label>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="{{ __('Confirm New Password') }}" value="" required>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary">{{ _('Change password') }}</button>
                    </div>
                </form>
            </div> -->
        </div>
        <!-- <div class="col-md-4">
            <div class="card card-user">
                <div class="card-body">
                    <p class="card-text">
                        <div class="author">
                            <div class="block block-one"></div>
                            <div class="block block-two"></div>
                            <div class="block block-three"></div>
                            <div class="block block-four"></div>
                            <a href="#">
                                <img class="avatar" src="{{ asset('white') }}/img/emilyz.jpg" alt="">
                                <h5 class="title">{{ auth()->user()->name }}</h5>
                            </a>
                            <p class="description">
                                {{ _('Ceo/Co-Founder') }}
                            </p>
                        </div>
                    </p>
                    <div class="card-description">
                        {{ _('Do not be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...') }}
                    </div>
                </div>
                <div class="card-footer">
                    <div class="button-container">
                        <button class="btn btn-icon btn-round btn-facebook">
                            <i class="fab fa-facebook"></i>
                        </button>
                        <button class="btn btn-icon btn-round btn-twitter">
                            <i class="fab fa-twitter"></i>
                        </button>
                        <button class="btn btn-icon btn-round btn-google">
                            <i class="fab fa-google-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
@endsection
