@extends('layouts.app_1', ['pageSlug' => 'projects','activePage' => 'projects'])

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
          <div class="row card-header">
            <div class="col-12 col-md-10">
              <h4 class="card-title mb-1 font-weight-bold">Projects</h4>
              <p class="card-category"> List of projects</p> 
            </div>
            <div class="col-12 col-md-2">
              <button class="btn btn-primary float-md-right" onclick="window.location='{{ route("pages.project.create") }}'">Create Project</button>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    ID
                  </th>
                  <th>
                    Project Name
                  </th>
                  <th>
                    Test Suite
                  </th>
                  <th>
                    Test Case
                  </th>
                  <th>
                    Domain
                  </th>
                  <th>
                    Action
                  </th>
                </thead>
                <tbody>
                @foreach($projects as $project)
                  <tr>
                    <td>{{$project->id}}</td>
                    <td>{{$project->project_name}}</td>
                    <td>{{$project->test_suite}}</td>
                    <td>{{$project->test_case}}</td>
                    <td>{{$project->domain}}</td>
                    <td class="text-primary">
                      <!-- <button type="button" rel="tooltip" class="btn btn-success btn-sm btn-icon">
                          <i class="tim-icons icon-settings"></i>
                      </button> -->
                      <!-- <button type="button" rel="tooltip" class="btn btn-danger btn-sm btn-icon">
                          <i class="tim-icons icon-trash-simple"></i>
                      </button> -->
                      <form action="projects/delete/{{$project->id}}" method="post">
                        <button type="button" rel="tooltip" class="btn btn-danger btn-sm btn-icon">
                          <i class="tim-icons icon-trash-simple"></i>
                        </button>
                      </form>
                     </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('js')
<script>
  $(document).ready(function () {
    
    $('.delete').on('click', function(){
        
        id = $(this).attr('id');
        id = id.split('_');

        console.log(id);
        
        // $('.bs-example-modal-sm').modal('show');
        // $('#padam_submit').attr('action','form/produk/delete/' + id[1]);

    });

  });
</script>
@endpush