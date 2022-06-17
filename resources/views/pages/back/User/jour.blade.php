

   <!--  BEGIN CONTENT AREA  -->
{{--         <div id="content" class="main-content"> --}}
            <div class="layout-px-spacing">        
 
                <div class="row layout-top-spacing">

                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                        <div class=" col-12 alert alert-success text-center">
                <h3>TABLEAU RECAPITULATIF JOURNALIERS</h3>
                </div>
                        <div class="widget-content widget-content-area br-6">
                            <div class="table-responsive mb-4 mt-4">
                                <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>COMPLEXE</th>
                                            <th>SOCIETES</th>
                                            <th> REFERANT SUCAFCI </th>
                                            <th>FONCT/ CONT REFERANT</th>
                                            <th>RESPO SOUS TRAITANT</th>
                                            <th>N° RESP ST</th>
                                            <th>ATTRIBUTAIRES</th>
                                            <th>FONCTION</th>
                                            <th>N°BADGES</th>
                                            <th>PIECES</th>
                                            <th>N° PIECES</th>
                                            <th>CODE PHOTO</th>
                                            <th>NATURE ACTIVICTE</th>
                                            <th>LIEU ACTIVICTE</th>
                                            <th>DEBUT ACTIVICTE</th>
                                            <th>FIN ACTIVICTE</th>
                                            <th>DATE ATTRIBUTION</th>
                                            <th>FIN SUIVI</th>
                                            <th>JRS EFFECTUES</th>
                                            <th>COMPTEURS</th>
                                            <th>STATUT</th>
                                            <th>OBSERVATION</th>
                                        </tr>
                
                                    </thead>
                                    <tbody>
                                        @if ($covids->isEmpty())
                                        <div class="justify-content-center col-9 alert alert-warning">
                                            <h3>Aucune valeur soumise dans ce tableau</h3>
                                        </div>
                                            
                                        @endif
                                       @foreach($covids as $covid)
                                            <tr>
                                                <td>{{ $covid->complexe }}</td>
                                                <td>{{ $covid->societeSousTraitante }}</td>
                                                <td>{{ $covid->referantSucaf }}</td>
                                                <td>{{ $covid->fonctionRefSucaf }}</td>
                                                <td>{{ $covid->respoSociete }}</td>
                                                <td>{{ $covid->numeroRespo }}</td>
                                                <td>{{ $covid->attributaire }}</td>
                                                <td>{{ $covid->fonction }}</td>
                                                <td>{{ $covid->numeroBadge }}</td>
                                                <td>{{ $covid->typePiece }}</td>
                                                <td>{{ $covid->numeroPiece }}</td>
                                                <td>{{ $covid->codePhoto }}</td>
                                                <td>{{ $covid->natureActivicte }}</td>
                                                <td>{{ $covid->lieuActivicte }}</td>
                                                <td>{{ $covid->debutActivicte }}</td>
                                                <td>{{ $covid->finActivicte }}</td>
                                                <td>{{ $covid->dateAttribution }}</td>
                                                <td>{{ $covid->datePrevueFin }}</td>
                                                <td>calcul</td>
                                                <td>calcul</td>
                                                <td>{{ $covid->status }}</td>
                                                <td>{{ $covid->observation }}</td>
                                            </tr> 
                                       @endforeach    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>
                
            </div>
            <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright © 2020 <a target="_blank" href="https://designreset.com/">DesignReset</a>, All rights reserved.</p>
                </div>
                <div class="footer-section f-section-2">
                    <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
                </div>
            </div>
        {{-- </div> --}}
        <!--  END CONTENT AREA  -->




<script type="text/javascript">
  
  $(function()
  {
    $('.edit-profile').click(function()
    {
        $("#conteneur").load('/editProfil');

    })

  })  

</script>

    <script>
        $('#html5-extension').DataTable( {
            dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5"i><"col-md-7"p>>> >',
            buttons: {
                buttons: [
                    { extend: 'copy', className: 'btn' },
                    { extend: 'csv', className: 'btn' },
                    { extend: 'excel', className: 'btn' },
                    { extend: 'print', className: 'btn' }
                ]
            },
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7 
        } );
    </script>