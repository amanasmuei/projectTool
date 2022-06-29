@extends('layouts.app', ['pageSlug' => 'projects','activePage' => 'projects'])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <!-- <button class="btn btn-primary mb-3" onclick="window.location='{{ route("pages.project.create") }}'">Create Project</button> -->
        <!-- PROJECTS -->
        <!-- <div class="row"> -->
          <!-- <div class="col-12 col-md-10">
            <h4 class="card-title ">Projects</h4>
          </div>
          <div class="col-12 col-md-2"> -->
            <!-- <button class="btn btn-primary btn-sm float-md-right" onclick="window.location='{{ route("pages.project.create") }}'">Create Project</button> -->
          <!-- </div> -->
        <!-- </div> -->
        <div class="card">
          <div class="card-header">
            Repository
          </div>
          <div class="card-body">
            <button class="btn btn-primary">Create New Suite</button>
            <button class="btn btn-primary">Create New Case</button>
            <button class="btn btn-primary">IMport</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection