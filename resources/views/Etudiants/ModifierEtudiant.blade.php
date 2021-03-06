
@extends('app')

@section('conten')
<ol class="breadcrumb">
  <li><a href="{{ url('/home') }}" style=" font-weight:bold"><i>Stage+</i></a></li>
  <li><a href="{{ url('/etudiant') }}">Gérer Les Étudiants</a></li>
  <li class="active">Modifier Étudiant</li>
</ol>



<hr>

	<div class="container-fluid">
		
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">

			
				  <legend>  &nbsp;<i class="fa fa-pencil-square-o fa-lg"></i>&nbsp;<i>Modifier Étudiant</i></legend>
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

	                 <form class="form-horizontal" role="form" method="POST" action="{{ url('etudiant/'.$etudiant->id)}}">
                             <input name="_method" type="hidden" value="PUT">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
						
                        <div class="form-group">
							<label class="col-md-4 control-label">Nom</label>
							<div class="col-md-6">
							<input type="text" class="form-control" name="etudiant_nom" value="{{$etudiant->etudiant_nom }}">	    
							</div>
						</div>
					    <div class="form-group">
							<label class="col-md-4 control-label">Prenom</label>
							<div class="col-md-6">
							<input type="text" class="form-control" name="etudiant_prenom" value="{{ $etudiant->etudiant_prenom }}">	    
							</div>
						</div> 
					   
						<div class="form-group">
							<label class="col-md-4 control-label">Numero CIN</label>
							<div class="col-md-6">
								<input type="text" class="form-control"  name="etudiant_cin" value="{{$etudiant->etudiant_cin }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Matricule</label>
							<div class="col-md-6">
							<input type="text" class="form-control" name="etudiant_mat" value="{{$etudiant->etudiant_mat }}">	    
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Sexe</label>
							<div class="col-md-2">
						     <select class="form-control chosen-select-no-single" name="etudiant_sexe" >
                               
                                 @if( $etudiant->etudiant_sexe == "homme" )
                                <option value="homme" selected="selected" >homme</option>
                                <option value="femme" >femme</option>
                                @else
                                <option value="homme" >homme</option>
                                <option value="femme" selected="selected" >femme</option>
                                @endif
                             </select>
                             </div>
						</div> 



						



					
                        <div class="form-group">
							<label class="col-md-4 control-label">Date de nissance</label>
							   <div class="col-md-4">
                             <div class="container">
                              <div class="row">
                              <div class='col-sm-4'>
                               <div class="form-group">
                               <div class='input-group date' id='datet2'>
                               <input type='text' class="form-control" name="etudiant_date_nissance" value="{{$etudiant->etudiant_date_nissance}}" />
                               <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                               </span>
                               </div>
                               </div>
                               </div>
                                 <script type="text/javascript">
                                $(document).ready(function () {
                                $('#datet2').datetimepicker({
                                	defaultDate: "{{$etudiant->etudiant_date_nissance}}",
                                  locale: 'fr',
                                  viewMode: 'years',
                                  format: 'YYYY-MM-DD'
                                  });
                                  });
                               </script>
                               </div>
                               </div>
                            </div>
                        </div>

	                    <div class="form-group">
							<label class="col-md-4 control-label">Lieu de naissance</label>
							<div class="col-md-3">
							
                            <select class="form-control chosen-select-no-single" data-placeholder="sélectionner" name="etudiant_lieu_naissance" >
                                    <option value="{{ $etudiant->etudiant_lieu_naissance }}">{{ $etudiant->etudiant_lieu_naissance }}</option>
                                                                   <option value="Afghanistan">Afghanistan </option>
											<option value="Afrique Centrale">Afrique Centrale </option>
											<option value="Afrique du sud">Afrique du Sud </option> 
											<option value="Albanie">Albanie </option>
											<option value="Algerie">Algerie </option>
											<option value="Allemagne">Allemagne </option>
											<option value="Andorre">Andorre </option>
											<option value="Angola">Angola </option>
											<option value="Anguilla">Anguilla </option>
											<option value="Arabie Saoudite">Arabie Saoudite </option>
											<option value="Argentine">Argentine </option>
											<option value="Armenie">Armenie </option> 
											<option value="Australie">Australie </option>
											<option value="Autriche">Autriche </option>
											<option value="Azerbaidjan">Azerbaidjan </option>
											<option value="Bahamas">Bahamas </option>
											<option value="Bangladesh">Bangladesh </option>
											<option value="Barbade">Barbade </option>
											<option value="Bahrein">Bahrein </option>
											<option value="Belgique">Belgique </option>
											<option value="Belize">Belize </option>
											<option value="Benin">Benin </option>
											<option value="Bermudes">Bermudes </option>
											<option value="Bielorussie">Bielorussie </option>
											<option value="Bolivie">Bolivie </option>
											<option value="Botswana">Botswana </option>
											<option value="Bhoutan">Bhoutan </option>
											<option value="Boznie Herzegovine">Boznie Herzegovine </option>
											<option value="Bresil">Bresil </option>
											<option value="Brunei">Brunei </option>
											<option value="Bulgarie">Bulgarie </option>
											<option value="Burkina Faso">Burkina Faso </option>
											<option value="Burundi">Burundi </option>
											<option value="Caiman">Caiman </option>
											<option value="Cambodge">Cambodge </option>
											<option value="Cameroun">Cameroun </option>
											<option value="Canada">Canada </option>
											<option value="Canaries">Canaries </option>
											<option value="Cap vert">Cap Vert </option>
											<option value="Chili">Chili </option>
											<option value="Chine">Chine </option> 
											<option value="Chypre">Chypre </option> 
											<option value="Colombie">Colombie </option>
											<option value="Comores">Colombie </option>
											<option value="Congo">Congo </option>
											<option value="Congo democratique">Congo democratique </option>
											<option value="Cook">Cook </option>
											<option value="Coree du Nord">Coree du Nord </option>
											<option value="Coree du Sud">Coree du Sud </option>
											<option value="Costa Rica">Costa Rica </option>
											<option value="Cote dIvoire">Côte dIvoire </option>
											<option value="Croatie">Croatie </option>
											<option value="Cuba">Cuba </option>
											<option value="Danemark">Danemark </option>
											<option value="Djibouti">Djibouti </option>
											<option value="Dominique">Dominique </option>
											<option value="Egypte">Egypte </option> 
											<option value="Emirats Arabes Unis">Emirats Arabes Unis </option>
											<option value="Equateur">Equateur </option>
											<option value="Erythree">Erythree </option>
											<option value="Espagne">Espagne </option>
											<option value="Estonie">Estonie </option>
											<option value="Etats Unis">Etats Unis </option>
											<option value="Ethiopie">Ethiopie </option>
											<option value="Falkland">Falkland </option>
											<option value="Feroe">Feroe </option>
											<option value="Fidji">Fidji </option>
											<option value="Finlande">Finlande </option>
											<option value="France">France </option>
											<option value="Gabon">Gabon </option>
											<option value="Gambie">Gambie </option>
											<option value="Georgie">Georgie </option>
											<option value="Ghana">Ghana </option>
											<option value="Gibraltar">Gibraltar </option>
											<option value="Grece">Grece </option>
											<option value="Grenade">Grenade </option>
											<option value="Groenland">Groenland </option>
											<option value="Guadeloupe">Guadeloupe </option>
											<option value="Guam">Guam </option>
											<option value="Guatemala">Guatemala</option>
											<option value="Guernesey">Guernesey </option>
											<option value="Guinee">Guinee </option>
											<option value="Guinee Bissau">Guinee Bissau </option>
											<option value="Guinee equatoriale">Guinee Equatoriale </option>
											<option value="Guyana">Guyana </option>
											<option value="Guyane Francaise ">Guyane Francaise </option>
											<option value="Haiti">Haiti </option>
											<option value="Hawaii">Hawaii </option> 
											<option value="Honduras">Honduras </option>
											<option value="Hong Kong">Hong Kong </option>
											<option value="Hongrie">Hongrie </option>
											<option value="Inde">Inde </option>
											<option value="Indonesie">Indonesie </option>
											<option value="Iran">Iran </option>
											<option value="Iraq">Iraq </option>
											<option value="Irlande">Irlande </option>
											<option value="Islande">Islande </option>
											<option value="Israel">Israel </option>
											<option value="Italie">italie </option>
											<option value="Jamaique">Jamaique </option>
											<option value="Jan Mayen">Jan Mayen </option>
											<option value="Japon">Japon </option>
											<option value="Jersey">Jersey </option>
											<option value="Jordanie">Jordanie </option>
											<option value="Kazakhstan">Kazakhstan </option>
											<option value="Kenya">Kenya </option>
											<option value="Kirghizstan">Kirghizistan </option>
											<option value="Kiribati">Kiribati </option>
											<option value="Koweit">Koweit </option>
											<option value="Laos">Laos </option>
											<option value="Lesotho">Lesotho </option>
											<option value="Lettonie">Lettonie </option>
											<option value="Liban">Liban </option>
											<option value="Liberia">Liberia </option>
											<option value="Liechtenstein">Liechtenstein </option>
											<option value="Lituanie">Lituanie </option> 
											<option value="Luxembourg">Luxembourg </option>
											<option value="Lybie">Lybie </option>
											<option value="Macao">Macao </option>
											<option value="Macedoine">Macedoine </option>
											<option value="Madagascar">Madagascar </option>
											<option value="Madère">Madère </option>
											<option value="Malaisie">Malaisie </option>
											<option value="Malawi">Malawi </option>
											<option value="Maldives">Maldives </option>
											<option value="Mali">Mali </option>
											<option value="Malte">Malte </option>
											<option value="Man">Man </option>
											<option value="Mariannes du Nord">Mariannes du Nord </option>
											<option value="Maroc">Maroc </option>
											<option value="Marshall">Marshall </option>
											<option value="Martinique">Martinique </option>
											<option value="Maurice">Maurice </option>
											<option value="Mauritanie">Mauritanie </option>
											<option value="Mayotte">Mayotte </option>
											<option value="Mexique">Mexique </option>
											<option value="Micronesie">Micronesie </option>
											<option value="Midway">Midway </option>
											<option value="Moldavie">Moldavie </option>
											<option value="Monaco">Monaco </option>
											<option value="Mongolie">Mongolie </option>
											<option value="Montserrat">Montserrat </option>
											<option value="Mozambique">Mozambique </option>
											<option value="Namibie">Namibie </option>
											<option value="Nauru">Nauru </option>
											<option value="Nepal">Nepal </option>
											<option value="Nicaragua">Nicaragua </option>
											<option value="Niger">Niger </option>
											<option value="Nigeria">Nigeria </option>
											<option value="Niue">Niue </option>
											<option value="Norfolk">Norfolk </option>
											<option value="Norvege">Norvege </option>
											<option value="Nouvelle Caledonie">Nouvelle Caledonie </option>
											<option value="Nouvelle Zelande">Nouvelle Zelande </option>
											<option value="Oman">Oman </option>
											<option value="Ouganda">Ouganda </option>
											<option value="Ouzbekistan">Ouzbekistan </option>
											<option value="Pakistan">Pakistan </option>
											<option value="Palau">Palau </option>
											<option value="Palestine">Palestine </option>
											<option value="Panama">Panama </option>
											<option value="Papouasie Nouvelle Guinee">Papouasie Nouvelle Guinee </option>
											<option value="Paraguay">Paraguay </option>
											<option value="Pays Bas">Pays Bas </option>
											<option value="Perou">Perou </option>
											<option value="Philippines">Philippines </option> 
											<option value="Pologne">Pologne </option>
											<option value="Polynesie">Polynesie </option>
											<option value="Porto Rico">Porto Rico </option>
											<option value="Portugal">Portugal </option>
											<option value="Qatar">Qatar </option>
											<option value="Republique Dominicaine">Republique Dominicaine </option>
											<option value="Republique Tcheque">Republique Tcheque </option>
											<option value="Reunion">Reunion </option>
											<option value="Roumanie">Roumanie </option>
											<option value="Royaume Uni">Royaume Uni </option>
											<option value="Russie">Russie </option>
											<option value="Rwanda">Rwanda </option>
											<option value="Sahara Occidental">Sahara Occidental </option>
											<option value="Sainte Lucie">Sainte Lucie </option>
											<option value="Saint Marin">Saint Marin </option>
											<option value="Salomon">Salomon </option>
											<option value="Salvador">Salvador </option>
											<option value="Samoa Occidentales">Samoa Occidentales</option>
											<option value="Samoa Americaine">Samoa Americaine </option>
											<option value="Sao Tome et Principe">Sao Tome et Principe </option> 
											<option value="Senegal">Senegal </option> 
											<option value="Seychelles">Seychelles </option>
											<option value="Sierra Leone">Sierra Leone </option>
											<option value="Singapour">Singapour </option>
											<option value="Slovaquie">Slovaquie </option>
											<option value="Slovenie">Slovenie</option>
											<option value="Somalie">Somalie </option>
											<option value="Soudan">Soudan </option> 
											<option value="Sri Lanka">Sri Lanka </option> 
											<option value="Suede">Suede </option>
											<option value="Suisse">Suisse </option>
											<option value="Surinam">Surinam </option>
											<option value="Swaziland">Swaziland </option>
											<option value="Syrie">Syrie </option>
											<option value="Tadjikistan">Tadjikistan </option>
											<option value="Taiwan">Taiwan </option>
											<option value="Tonga">Tonga </option>
											<option value="Tanzanie">Tanzanie </option>
											<option value="Tchad">Tchad </option>
											<option value="Thailande">Thailande </option>
											<option value="Tibet">Tibet </option>
											<option value="Timor Oriental">Timor Oriental </option>
											<option value="Togo">Togo </option> 
											<option value="Trinite et Tobago">Trinite et Tobago </option>
											<option value="Tristan da cunha">Tristan de cuncha </option>
											<option value="Tunisie">Tunisie </option>
											<option value="Turkmenistan">Turmenistan </option> 
											<option value="Turquie">Turquie </option>
											<option value="Ukraine">Ukraine </option>
											<option value="Uruguay">Uruguay </option>
											<option value="Vanuatu">Vanuatu </option>
											<option value="Vatican">Vatican </option>
											<option value="Venezuela">Venezuela </option>
											<option value="Vierges Americaines">Vierges Americaines </option>
											<option value="Vierges Britanniques">Vierges Britanniques </option>
											<option value="Vietnam">Vietnam </option>
											<option value="Wake">Wake </option>
											<option value="Wallis et Futuma">Wallis et Futuma </option>
											<option value="Yemen">Yemen </option>
											<option value="Yougoslavie">Yougoslavie </option>
											<option value="Zambie">Zambie </option>
											<option value="Zimbabwe">Zimbabwe </option>
                             </select>	



							</div>
						</div>

	                    <div class="form-group">
							<label class="col-md-4 control-label">Adresse</label>
							<div class="col-md-6">
							<input type="text" class="form-control" name="etudiant_adresse" value="{{ $etudiant->etudiant_adresse}}">	    
							</div>
						</div>
                        
					    <div class="form-group">
							<label class="col-md-4 control-label"> N° Téléphone </label>
							<div class="col-md-6">
								<div class="input-group">
                                 <span class="input-group-addon" id="basic-addon2"><span class="glyphicon glyphicon-phone"></span></span>
							<input type="text" class="form-control" name=" etudiant_tel" value="{{$etudiant->etudiant_tel}}">	    
							</div></div>
						</div>

						 <div class="form-group">
							<label class="col-md-4 control-label"> E-Mail </label>
							<div class="col-md-6">
							<input type="text" class="form-control" name="email" value="{{ $etudiant->email}}">	    
							</div>
						</div>

					    <div class="form-group">
							<label class="col-md-4 control-label">Redoublent</label>
							<div class="col-md-2">
						     <select class="form-control chosen-select-no-single" name="etudiant_rebouble" >
                                @if( $etudiant->etudiant_rebouble=="Oui")
                                <option value="Oui" selected="selected">Oui</option>
                                <option value="Non" >Non</option>
                                @else
                                <option value="Oui" >Oui</option>
                                <option value="Non"selected="selected" >Non</option>
                                @endif
                             </select>
                             </div>
						</div> 
						
                          
						<div class="form-group">
							<label class="col-md-4 control-label">Filiere</label>
							<div class="col-md-5">
						     <select class="form-control chosen-select" name="etudiant_filiere_id" >
                               
                               


                              
                                @foreach($Filiere as $user)
                                @if ($user->id==$etudiant->etudiant_filiere_id)
                                 <option value="{{$user->id}}" selected="selected">{{$user->filiere_nom}}</option>
                                @else
                                <option value="{{$user->id}}">{{$user->filiere_nom}}</option>
                                @endif
                                @endforeach
                 
                             </select>
                             </div>
						</div> 
                         <div class="form-group">
							<label class="col-md-4 control-label">Niveau  </label>
							<div class="col-md-6">
							<input type="text" class="form-control" name="etudiant_niveau" value="{{$etudiant->etudiant_niveau}}">	    
							</div>
						</div>
						 <div class="form-group">
							<label class="col-md-4 control-label"> Code de group </label>
							<div class="col-md-6">
							<input type="text" class="form-control" name="etudiant_group_code" value="{{ $etudiant->etudiant_group_code}}">	    
							</div>
						</div>
						 <div class="form-group">
							<label class="col-md-4 control-label">Nom de group  </label>
							<div class="col-md-6">
							<input type="text" class="form-control" name="etudiant_group_name" value="{{ $etudiant->etudiant_group_name}}">	    
							</div>
						</div>  

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
                                <a href="javascript:history.back()" class="btn btn-info">
		                        	<span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
	                         	</a>

								<button type="submit" class="btn btn-primary">
									<i class="fa fa-pencil-square-o fa-lg"></i>&nbsp;&nbsp;
									Modifier
								</button>
								
							</div>
						</div>




					</form>
					</div>
				</div>
			</div>
		</div>
	</div>
    </div>
@endsection