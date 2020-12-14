@extends('layouts.app')

@section('title')
<h1 class="nav-title text-white"> <i class="icon-person"></i>
    Users</h1>
@endsection

@section('content')
{{-- modal create --}}
@include('pages.user.create')
<!-- main area -->
      <div class="main-content">
        <div class="page-title">
          <div class="title">{{ __('USUARIOS') }}</div>
        </div>
        <div class="card bg-white">
          <div class="card-header">
              <div class="row">
                  <div class="col-sm-10">
                      <h6> {{ __('LISTA DE USUARIOS') }} </h6>
                  </div>
                  <div class="form-group row">
                     <a class="col-sm-2 btn btn-default btn-sm" href="{{ route('downloadExcelUsers') }}" ><i class="fa fa-file-excel-o"></i>  {{ __('Exportar Excell') }}</a>
                  </div>
                 
               </div> 
          </div>
          <div class="card-block">
            <table class="table table-bordered table-condensed m-b-0" id="example3">
              <thead>
                <tr>
                   <th>#</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Perfil</th>
                    <th>Estado</th>
                    <th></th>
                </tr>
              </thead>
               <tbody id="tbody">
                @foreach ($users as $user)
                    <tr class="tbody">
                        <td>{{$user->id ?? ''}}</td>
                        <td><div><b>{{ $user->name ?? ''}}</b></div></td>
                        <td>{{ $user->email ?? ''}}</td>
                        <td>{{ $user->profile_id ?? ''}}</td>
                        <td>{{ $user->status_id ?? ''}}</td>
                        <td class="text-center">
                            <a href="#" class="btn btn-default btn-sm" title="Detalles" data-toggle="modal" data-target="#show">
                                <i class="icon-eye text-info"></i>
                            </a>
                            <a href="#" class="btn btn-default btn-sm" title="Editar" data-toggle="modal" data-target="#update">
                                <i class="icon-pencil text-info"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
          </div>

        </div>
      </div>
      <!-- /main area -->
      <!--Add New Message Fab Button-->
<a href="#" class="btn-fab btn-fab-md fab-right fab-right-bottom-fixed shadow btn-primary" data-toggle="modal" data-target="#create" title="Añadir Usuario">
    <i class="fa fa-plus"></i></a>
@endsection
