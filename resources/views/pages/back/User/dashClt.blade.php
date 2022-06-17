

      <div class="col-lg-12 col-12 layout-spacing" 
                        style="margin-top: 30px;">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4 id="origine">FORMULAIRE D'AJOUT </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area animated-underline-content">
                                    

                                        <div class="tab-pane fade show active" id="animated-underline-home" role="tabpanel" aria-labelledby="animated-underline-home-tab">
                                            <form id="formaddCmdClt" >
                                                @csrf
                                                
                                                <input type="hidden" id="type" name="type" value="">
                                                <fieldset>
                                                  <legend> Information Entreprise</legend>
                                                <div class="form-row mb-4 justify-content-center">
                                                    <div class="col-md-4 col-sm-12 mb-4">
                                                      <label class="text-primary">
                                                        SOCIETE SOUS-TRAITANTE 
                                                      </label>
                                                      <input type="text" class="form-control" placeholder="" name="societeSousTraitante" id="societeSousTraitante">
                                                    </div>

                                                    <div class="col-md-4 col-sm-12 mb-4">
                                                      <label class="text-primary">
                                                        RESPONSABLE SOCIETE
                                                      </label>
                                                      <input type="text" class="form-control" placeholder="" name="respoSociete" id="respoSociete">
                                                    </div>
                                                    <div class="col-md-4 col-sm-12 mb-4">
                                                      <label class="text-primary">
                                                        NUMERO RESPO SOCIETE
                                                      </label>
                                                      <input type="text" class="form-control" placeholder="" name="numeroRespo" id="numeroRespo">
                                                    </div>
                                                    <div class="col-md-4 col-sm-12 mb-4">
                                                      <label class="text-primary">
                                                        NATURE DE L'ACTIVITE
                                                      </label>
                                                      <input type="text" class="form-control" placeholder="" name="natureActivicte" id="natureActivicte">
                                                    </div>
                                                    <div class="col-md-4 col-sm-12 mb-4">
                                                      <label class="text-primary">
                                                        LOCALISATION DE ACTIVITE
                                                      </label>
                                                      <input type="text" class="form-control" placeholder="" name="lieuActivicte" id="lieuActivicte">
                                                    </div>
                                                    <div class="col-md-4 col-sm-12 mb-4">
                                                      <label class="text-primary">
                                                        DATE DEBUT ACTIVITE
                                                      </label>
                                                      <input id="basicFlatpickr" value="{{ date('m-d-Y') }}" class="form-control flatpickr flatpickr-input" type="text" placeholder="Select Date.." name="debutActivicte">
                                                    </div>
                                                    <div class="col-md-4 col-sm-12 mb-4">
                                                      <label class="text-primary">
                                                        DATE FIN ACTIVITE
                                                      </label>
                                                      <input id="basicFlatpickr2" value="{{ date('m-d-Y') }}" class="form-control flatpickr flatpickr-input" type="text" placeholder="Select Date.." name="finActivicte">
                                                    </div>
                                                    <div class="col-md-4 col-sm-12 mb-4">
                                                      <label class="text-primary">
                                                        REFERANT SUCAF-CI
                                                      </label>
                                                      <input type="text" class="form-control" placeholder="" name="referantSucaf" id="referantSucaf">
                                                    </div>
                                                    <div class="col-md-4 col-sm-12 mb-4">
                                                      <label class="text-primary">
                                                        FONCTION REFERANT SUCAF-CI
                                                      </label>
                                                      <input type="text" class="form-control" placeholder="" name="fonctionRefSucaf" id="fonctionRefSucaf">
                                                    </div>
                                                    <div class="col-md-4 col-sm-12 mb-4">
                                                      <label class="text-primary">
                                                        COMPLEXE
                                                      </label>
                                                      <input type="text" class="form-control" placeholder="" name="complexe" id="complexe">
                                                    </div>
                                                </div>

                                                    
                                                </fieldset>

                                                <fieldset>
                                                  <legend> 
                                                    Information Embauché
                                                  </legend>
                                                <div class="form-row mb-4">
                                                    <div class="col-md-4 col-sm-12 mb-4">
                                                      <label class="text-primary">
                                                        NOM & PRENOM
                                                      </label>
                                                      <input type="text" class="form-control" placeholder="" name="attributaire" id="attributaire">
                                                    </div>
                                                    <div class="col-md-4 col-sm-12 mb-4">
                                                      <label class="text-primary">
                                                        FONCTION
                                                      </label>
                                                      <input type="text" class="form-control" placeholder="" name="fonction" id="fonction">
                                                    </div>
                                                    <div class="col-md-4 col-sm-12 mb-4">
                                                      <label class="text-primary">
                                                       N° BADGE
                                                      </label>
                                                      <input type="text" class="form-control" placeholder="" name="numeroBadge" id="numeroBadge">
                                                    </div>
                                                    <div class="col-md-4 col-sm-12 mb-4">
                                                      <label class="text-primary">
                                                                       DATE D'ATTRIBUTION
                                                                      </label>
                                                        <input id="basicFlatpickr3" value="{{ date('d-m-Y') }}" class="form-control flatpickr flatpickr-input" type="text" placeholder="Select Date.." name="dateAttribution">
                                                    </div>
                                                    <div class="col-md-4 col-sm-12 mb-4">
                                                      <label class="text-primary">
                                                        DATE PREVUE FIN ACTIVITE
                                                      </label>
                                                      <input id="basicFlatpickr4" value="{{ date('d-m-Y') }}" class="form-control flatpickr flatpickr-input" type="text"  name="datePrevueFin">
                                                    </div>
                                                    <div class="col-md-4 col-sm-12 mb-4">
                                                      <label class="text-primary">
                                                       CODE PHOTO
                                                      </label>
                                                      <input type="text" class="form-control" placeholder="" name="codePhoto" id="codePhoto">
                                                    </div>
                                                    <div class="col-md-4 col-sm-12 mb-4">
                                                      <label class="text-primary">
                                                       TYPE DE PIECE
                                                      </label>
                                                      <input type="text" class="form-control" placeholder="" name="typePiece" id="typePiece">
                                                    </div>
                                                    <div class="col-md-4 col-sm-12 mb-4">
                                                      <label class="text-primary">
                                                       N° DE PIECE
                                                      </label>
                                                      <input type="text" class="form-control" placeholder="" name="numeroPiece" id="numeroPiece">
                                                    </div>
                                                    <div class="col-md-4 col-sm-12 mb-4">
                                                      <label class="text-primary">
                                                       STATUS
                                                      </label>
                                                      <input type="text" class="form-control" placeholder="" name="status" id="status">
                                                    </div>
                                                   <div class="col-md-12 col-sm-12 mb-4">
                                            <label for="exampleFormControlTextarea1">OBSERVATION</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" name="observation" rows="3"></textarea>
                                        </div>
                                                </div>
                                                </fieldset>
                                            
                                            </form>
                                            <div class="d-flex justify-content-around col-12"> 
                                              <button class="btn btn-primary mr-4 addCmdClt" title="COVID" id="covid" >COVID
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                                              </button>
                                              <button class="btn btn-warning mr-4 addCmdClt" title="ST-CD" id="stcd">ST-CD
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                                              </button>
                                              <button class="btn btn-success mr-4 addCmdClt" title="ST-LD" id="stld" >ST-LD
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                                              </button>
                                              <button class="btn btn-info mr-4 addCmdClt" title="JOURNALIER" id="jour" >JOURNALIER
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                                              </button>
                                              <button class="btn btn-secondary mr-4 addCmdClt" title="CRH HBDO" id="crh" >CRH HBDO
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                                              </button>
                                            </div>

                                        </div>



                                </div>
                            </div>
                        </div>
    <script src="assetAdmin/assets/js/libs/jquery-3.1.1.min.js"></script>
  


            <script type="text/javascript">
                $(function()
                {
                 
                  $('.addCmdClt').click(function()
                  {

                    var operation = $(this).attr('title');
                    var type = $(this).attr('id');
                    $('#type').val(type);

                            Swal.fire({
                              title: 'Ajout '+operation,
                              text: "Voulez vous soumettre cette nouvelle entrée ?",
                              icon: 'warning',
                              showCancelButton: true,
                              confirmButtonColor: '#3085d6',
                              cancelButtonColor: '#d33',
                              cancelButtonText: 'Annuler',
                              confirmButtonText: 'oui , Soumettre!'
                            }).then((result) => {
                                if (result.value) 
                                {
                                  $.ajax({
                                    
                                    url:'/addVal',
                                    method:'POST',
                                    data:$('#formaddCmdClt').serialize(),
                                    dataType:'json',
                                    success:function(){

                                      Swal.fire(
                                       'Succès!',
                                       'Soumission fait avec succès',
                                       'success'
                                      );
                                     $("#conteneur").load('/dashClt');


                                    },
                                    error:function(data)
                                    {

                                      $.each(data.responseJSON, function (key, value) 
                                          {
                                            if (key == "errors") 
                                              {
                                                var cmpt = 0;
                                                $.each(value, function(key1,value1)
                                                { 
                                                  var input = '#'+ key1;
                                                  $(input).attr('placeholder','Veuillez saisir une valeur');
                                                $(input).addClass('is-invalid');
                                                //Initialisation compteur
                                                  cmpt = cmpt + 1;
                                                  if(cmpt == 1)
                                                  {
                                                  var offset = $('#origine').offset().top;
                                                    $('html, body').animate({scrollTop: offset}, 'slow');
                                                 alert('Des champs obligatoires sont restés vides')

                                                  }

                                                })


                                              }
                                          });

                                    }
                                  });
                                }
                            })


                  });
                   
                })
                  </script>