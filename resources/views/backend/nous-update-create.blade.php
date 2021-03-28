<div wire:ignore.self class="modal fade" id="modalNous" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header @if(!empty($nous->id)) bg-warning @else bg-dark @endif ">
                <h5 class="modal-title" id="staticBackdropLabel">

                    @if(!empty($nous->id))
                    <i class="fa fa-edit" aria-hidden="true"></i>
                    @else
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    @endif

                    @if(!empty($nous->id))
                    {{ __('Edit  Setting') }}
                    @else {{ __('Add Setting') }}
                    @endif
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    wire:click.prevent="cancel()">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="nous_form" method="POST" action="{{ route('admin.nous.store')}}">
                @csrf
                <div class="modal-body">

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="historique"> {{ __('Historique') }}</label>
                            <div class="input-group">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-genderless"></span>
                                    </div>
                                </div>
                                <textarea n id="historique" name="historique"
                                    class="form-control {{ $errors->has('historique') ? 'is-invalid' : '' }}"
                                    placeholder=" {{ __('Historique') }}"></textarea>


                            </div>
                            <span class="invalid-feedback d-block" role="alert">

                                @error('historique') <strong><span class="error">{{ $message }}</span></strong>
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="mission"> {{ __('Mission') }}</label>
                            <div class="input-group">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-genderless"></span>
                                    </div>
                                </div>
                                <textarea id="mission" name="mission"
                                    class="form-control {{ $errors->has('mission') ? 'is-invalid' : '' }}"
                                    placeholder="{{ __('Mission') }}"></textarea>
                            </div>
                            <span class="invalid-feedback d-block" role="alert">

                                @error('mission') <strong><span class="error">{{ $message }}</span></strong>
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="vision"> {{ __('Vision') }}</label>
                            <div class="input-group">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-genderless"></span>
                                    </div>
                                </div>
                                <textarea name="vision" id="vision"
                                    class="form-control {{ $errors->has('vision') ? 'is-invalid' : '' }}"
                                    placeholder=" {{ __('Vision') }}"></textarea>
                            </div>
                            <span class="invalid-feedback d-block" role="alert">

                                @error('vision') <strong><span class="error">{{ $message }}</span></strong>
                                @enderror
                            </span>
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
                                <textarea id="objectif" name="objectif"
                                    class="form-control {{ $errors->has('objectif') ? 'is-invalid' : '' }}"
                                    placeholder="{{ __('Objectif') }}"></textarea>
                            </div>
                            <span class="invalid-feedback d-block" role="alert">

                                @error('objectif') <strong><span class="error">{{ $message }}</span></strong>
                                @enderror
                            </span>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <input type="hidden" wire:model="site_nous_id">
                    <button wire:click.prevent="cancel()" class="btn btn-danger" data-dismiss="modal"><i
                            class="fa fa-times" aria-hidden="true"></i> Close</button>
                    <button type="Submit" class="btn btn-primary" id="action_button"> <i class="fas fa-save    "></i>
                        @if(!empty($nous->id)) Save change @else Save @endif </button>
                </div>
            </form>
        </div>
    </div>

</div>
