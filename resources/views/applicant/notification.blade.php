@extends('applicant.layout.main')
@section('content')
	@if(!count($notes))
	<h2>No Notifications..</h2>

	@else
		<div class="row" style="height: 500px; border: thin solid rgb(130,130,130);">
		@foreach($notes as $note)
			<div class="col s5">
			    <div class="card horizontal" style="margin: 10px 10px !important;">
			      <div class="card-stacked">
			        <div class="card-content">
			          <p><h5 class="truncate" style="width: 300px;">{{ $note->job->company->name }}</h5></p>
			          <b>{{ $note->job->name }}</b>
			          <p>Go to their office for further Interview.</p>
			        </div>
			        <div class="card-action">
			          <a class="ok">Ok</a>
			        </div>
			      </div>
			    </div>
			  </div>
		@endforeach
	  </div>
	@endif
@endsection