@extends('layouts.master')
<!-- Home Section -->
@section('content')

@include('includes.menubar')
<section class="alumni_list">
	<div class="container">
		<div class="table-responsive">
			<table class="table table-hover table-bordered nowrap" id="myTable" style="margin-top: 12px;">
				<thead>
					<tr>
						<th>Name</th>
						<th>Department</th>
						<th>Batch</th>
						<th>Session</th>
						<th>Job Title</th>
						<th>Company</th>
						<th>Image</th>
					</tr>
				</thead>
				<tbody>
					@if(count($users) < 11)
                  		@for ($i = 0; $i < count($users); $i++)
						<tr data-href="{{'/alumni_profile/'.$users[$i]->id}}">
							<td>{{$users[$i]->full_name}}</td>
							<td>{{$users[$i]->department_name}}</td>
							<td>{{$users[$i]->batch_name}}</td>
							<td>{{$users[$i]->session}}</td>
							<td>@if($users[$i]->present){{$users[$i]->present}}@else not updated @endif</td>
							<td>{{$users[$i]->company_name}}</td>
							<td><img src="uploads/images/@if($users[$i]->avatar){{$users[$i]->avatar}}@else{{("avatar.png")}} @endif"></td>
							</tr>
							@endfor
							@else
		                    @for ($i = 0; $i < 10; $i++)

							<tr data-href="{{'/alumni_profile/'.$users[$i]->id}}">
								<td>{{$users[$i]->full_name}}</td>
								<td>{{$users[$i]->department_name}}</td>
								<td>{{$users[$i]->batch_name}}</td>
								<td>{{$users[$i]->session}}</td>
								<td>{{$users[$i]->present}}</td>
								<td>{{$users[$i]->company_name}}</td>
								<td><img src="uploads/images/@if($users[$i]->avatar){{$users[$i]->avatar}}@else{{("avatar.png")}} @endif"></td>
							</tr>
						@endfor
					@endif
				</tbody>
			</table>
		</div>
	</div>
</section>

<script>

    document.addEventListener("DOMContentLoaded", () => {
    const rows = document.querySelectorAll("tr[data-href]");

	rows.forEach(row => {
	
		row.addEventListener("click", () => {

			window.location.href = row.dataset.href;
		});

	});

});

</script>

@endsection