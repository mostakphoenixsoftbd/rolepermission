@extends('backend.layouts.master')

@section('title')
@section('styles')
    
@endsection
@section('admin-content')

				<!-- Basic datatable -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">User Roles List</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
					</div>

					<table class="table datatable-basic">
						<thead>
							<tr>
								<th>Sl #</th>
								<th>Name</th>
								<th class="text-center">Actions</th>
							</tr>
						</thead>
						<tbody>
                            @foreach ($roles as $role)
                                
                            
							<tr>
								<td>{{$loop->index+1}}</td>
								<td><a href="#">{{$role->name}}</a></td>
								<td><span class="badge badge-success">Active</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
				<!-- /basic datatable --> 
@endsection


@section('scripts')

	<!-- Theme JS files -->
	<script src="{{asset('backend/global_assets/js/plugins/tables/datatables/datatables.min.js')}}"></script>
	<script src="{{asset('backend/global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>
	<script src="{{asset('backend/global_assets/js/demo_pages/datatables_basic.js')}}"></script>
	<!-- /theme JS files -->
    
@endsection




