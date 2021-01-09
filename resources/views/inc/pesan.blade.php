@if(count($errors)>0)
	@foreach($errors->all() as $error)
		<div class="alert alert-sm alert-warning alert-dismissible fade show sticky-top"   id="alert_message"  role="alert">
			{{$error}}  
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>
	@endforeach
@endif

@if(session('sukses'))
	<div class="alert alert-success"  id="alert_message" role="alert">
		{{session('sukses')}}
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	 </div>
@endif

@if(session('gagal'))
	<div class="alert alert-sm alert-warning alert-dismissible fade show sticky-top"   id="alert_message"  role="alert">
		{{session('gagal')}}
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	 </div>
@endif

@if(session('peringatan'))
	<div class="alert alert-sm alert-warning alert-dismissible fade show sticky-top"   id="alert_message"  role="alert">
		{!!session('peringatan')!!}
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	 </div>
@endif

