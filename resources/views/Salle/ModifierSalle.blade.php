


@extends('app')

@section('conten')
<ol class="breadcrumb">
  <li><a href="{{ url('/home') }}" style=" font-weight:bold"><i>Stage+</i> </a></li>
  <li><a href="{{ url('/soutenance_salle') }}">Gérer Les Salles</a></li>
  <li class="active">Modifier Une Salle</li>
</ol>



<hr>
<div class="container-fluid">
	

	<div class="row">
		<div class="col-md-10 col-md-offset-1">

			<div class="panel panel-default">
				
					
             
				  <legend>&nbsp;<i class="fa fa-pencil-square-o fa-lg"></i>&nbsp;<i>Modifier Une Salle</i></legend>
				  
				<div class="panel-body">
						@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Oups!</strong> Il y avait quelques problèmes avec votre entrée.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

                      

	                 <form class="form-horizontal" role="form" method="POST" action="{{ url('soutenance_salle/'.$Soutenance_salle->id)}}">
	                 	 <input name="_method" type="hidden" value="PUT">
                         <input type="hidden" name="_token" value="{{ csrf_token() }}">
                         

						
                        <div class="form-group">
							<label class="col-md-4 control-label">Nom de salle  <font color="red">*</font></label>
							<div class="col-md-6">
							<input type="text" class="form-control" name="salle_nom" value="{{$Soutenance_salle->salle_nom}}">	    
							</div>
						</div>

                             	
					    <div class="form-group">
							<label class="col-md-4 control-label">Nombre de plase <font color="red">*</font></label>
							<div class="col-md-5">
								    
							
                 

            <div class="input-group spinner">
             <input type="text" class="form-control" name="salle_nb_plase" id="salle_nb_plase" value="{{$Soutenance_salle->salle_nb_plase}}">
               <div class="input-group-btn-vertical">
            <button type="button"  id="usalle_nb_plase" class="btn btn-default"><i class="fa fa-caret-up"></i></button>
             <button type="button" id="dsalle_nb_plase"  class="btn btn-default"><i class="fa fa-caret-down"></i></button>
             </div>
            </div>
                  <script type="text/javascript">
                       $(document).ready(function ($) {
                $('.spinner .btn#usalle_nb_plase:first-of-type').on('click', function() {
                  $('.spinner input#salle_nb_plase').val( parseInt($('.spinner input#salle_nb_plase').val(), 10) + 1);
                });
                $('.spinner .btn#dsalle_nb_plase:last-of-type').on('click', function() {
                   if($('.spinner input#salle_nb_plase').val()>1)
                  $('.spinner input#salle_nb_plase').val( parseInt($('.spinner input#salle_nb_plase').val(), 10) - 1);
                });
                })(jQuery);

               </script>



              </div>
          </div>
						





						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
                                <a href="javascript:history.back()" class="btn btn-info btn-sm">
		                        	<span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
	                         	</a>

								<button type="submit" class="btn btn-primary btn-sm">
									<i class="fa fa-pencil-square-o fa-lg"></i>&nbsp;&nbsp;
									Modifier
								</button>
								
							</div>
						</div>




					</form>
					
				
			</div></div></div>
		</div>
</div>
</div>
	
@endsection