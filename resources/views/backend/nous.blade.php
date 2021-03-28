<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('A Proposs') }}
        </h2>
    </x-slot>
    <div class="row">

        <div class="col-md-12">
            <section class="content">

                <div class="card card-blue">
                    <div class="card-header">
                        <h3 class="card-title">
                            <span class="fa fa-list"></span> {{_("A propos")}}
                        </h3>

                        <div class="card-tools">

                            @if(empty($nous))

                            <button type="button" class="btn btn-dark" name="create_record" id="create_record"
                                data-toggle="modal" data-target="#modalnous">
                                <i class="fas fa-plus fa-lg"></i> &nbsp;
                                {{_("Add A propos")}}
                            </button>
                            @else
                            @if (!empty($nous->id))
                            <button type="button" class="btn btn-dark" name="create_record" id="create_record"
                                data-toggle="modal" data-target="#modalnous" wire:click='edit({{!empty($nous->id)}})'>
                                <i class="fas fa-plus fa-lg"></i> &nbsp;
                                {{_("Update A propos")}}
                            </button>
                            @endif
                            @endif


                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form>
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="historique"> {{ __('Historique') }}</label>
                                        <div class="input-group">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-genderless"></span>
                                                </div>
                                            </div>
                                            <textarea n id="historique" class="form-control" disabled
                                                placeholder="{{ __('Historique') }}">{{ !empty($nous->historique) ? $nous->historique : ''}}</textarea>


                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="mission_view"> {{ __('Mission') }}</label>
                                        <div class="input-group">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-genderless"></span>
                                                </div>
                                            </div>
                                            <textarea id="mission_view" class="form-control" disabled
                                                placeholder="{{ __('Mission') }}">{{ !empty($nous->mission) ? $nous->mission : ''}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="vision_view"> {{ __('Vision') }}</label>
                                        <div class="input-group">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-genderless"></span>
                                                </div>
                                            </div>
                                            <textarea id="vision_view" class="form-control" disabled
                                                placeholder="{{ __('Vision') }}">{{ !empty($nous->vision) ? $nous->vision : ''}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="objectif_view"> {{ __('Objectif') }}</label>
                                        <div class="input-group">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-genderless"></span>
                                                </div>
                                            </div>
                                            <textarea id="objectif_view" class="form-control" disabled
                                                placeholder="{{ __('Objectif') }}">{{ !empty($nous->objectif) ? $nous->objectif : ''}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </form>
                    </div>
                </div>
            </section>
        </div>
        @include('backend.nous-update-create')
    </div>

    @push('scripts')


    <script>
        $(document).ready( function () {

            $('#create_record').click(function(){

            $('#action').val('Add');

            $(".text-danger").remove();

            $('#modalNous').modal('show');

            });


        //     $('#nous_form').on('submit', function(event){
        //     event.preventDefault();
        //     let action_url = '';

        //     if($('#action').val() == 'Add')
        //     {
        //     action_url = "";
        //     }

        //     if($('#action').val() == 'Edit')
        //     {
        //     var id = $('#hidden_id').val();
        //     action_url = '/admin/gear-box/update/'+id;
        //     }

        //     $.ajax({
        //     url: action_url,
        //     method:"POST",
        //     data:new FormData(this),
        //     dataType:'JSON',
        //     contentType: false,
        //     cache: false,
        //     processData: false,
        //     success:function(data)
        //     {

        //         $('#error_historique').text('');
        //         $('#historique').removeClass('is-invalid');
        //         $('#historique').addClass('is-valid');
        //         $('#error_mission').text('');
        //         $('#mission').removeClass('is-invalid');
        //         $('#mission').addClass('is-valid');
        //         $('#error_vision').text('');
        //         $('#vision').removeClass('is-invalid');
        //         $('#vision').addClass('is-valid');
        //         $('#error_objectif').text('');
        //         $('#objectif').removeClass('is-invalid');
        //         $('#objectif').addClass('is-valid');





        //         if(data.errors) {
        //             if(data.errors.historique){

        //                 $('#historique').addClass('rounded-right');
        //                 $('#historique').addClass('is-invalid');
        //                 $( '#error_historique' ).text( data.errors.historique[0] );

        //             }

        //             if(data.errors.mission){

        //                 $('#mission').addClass('rounded-right');
        //                 $('#mission').addClass('is-invalid');
        //                 $( '#error_mission' ).text( data.errors.mission[0] );
        //             }
        //             if(data.errors.vision){

        //                 $('#mission').addClass('rounded-right');
        //                 $('#vision').addClass('is-invalid');
        //                 $( '#error_vision' ).text( data.errors.vision[0] );
        //             }

        //             if(data.errors.objectif){

        //                 $('#objectif').addClass('rounded-right');
        //                 $('#objectif').addClass('is-invalid');
        //                 $( '#error_objectif' ).text( data.errors.objectif[0] );
        //             }
        //         }

        //         if(data.success){
        //             $('#create').modal('hide');

        //             $('#gear_box_form')[0].reset()

        //             toast.fire({
        //             icon: ""+data.type,
        //             title: ""+data.success
        //             });

        //         }
        //     }


        //     });
        // });
    });

    </script>

    @endpush
</x-app-layout>
