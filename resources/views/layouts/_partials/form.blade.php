 {!! Form::open(['route' => 'search.loc', 'class' => 'form-horizontal', 'target' => '_blank']) !!}
    <div class="form-group">
        <div class="col-sm-5 col-sm-push-1">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search fa-fw"></i></span>
                {!! Form::text('query', null, array('class' => 'form-control input-lg', 'required', 'placeholder' => 'Sökfras')) !!}
            </div>
        </div>

        <div class="col-sm-5 col-sm-push-1">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-location-arrow fa-fw"></i></span>
                {!! Form::text('location', null, array('class' => 'form-control input-lg', 'required', 'placeholder' => 'Stadsdel, Stad, Län, Land')) !!}
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-4 col-sm-push-4">
            <div class="text-center">
                {!! Form::submit('Search !', ['class' => 'btn btn-primary btn-lg ', 'id' => 'submit' ]) !!}
                <a href="#settings" id="setting" class="btn btn-lg btn-default" data-toggle="modal" data-target=".form-modal">Settings</a>
            </div>
        </div>
    </div>
    <div class="modal fade form-modal" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-group">
                        {!! Form::label('lang', 'Språk', array('class' => 'col-sm-2 control-label')); !!}
                        <div class="col-sm-10">
                            {!! Form::select('lang', array(
                                'sv' => 'Svenska',
                                'fi' => 'Finska',
                                'nb' => 'Norska',
                                'de' => 'Tyska',
                                'da' => 'Danska',
                                'en' => 'Engelska'
                             ), 'sv', array('class' => 'form-control')); !!}
                             <p class="help-block">Ange specifik språkinställning (hl).</p>
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('domain', 'Domän', array('class' => 'col-sm-2 control-label')); !!}
                        <div class="col-sm-10">
                            {!! Form::select('domain', array(
                                'se' => 'www.google.se',
                                'fi' => 'www.google.fi',
                                'no' => 'www.google.no',
                                'de' => 'www.google.de',
                                'dk' => 'www.google.dk',
                                'co.uk' => 'www.google.co.uk',
                                'com' => 'www.google.com'
                             ), 'se', array('class' => 'form-control')); !!}
                             <p class="help-block">Ange vilken domän du vill utföra sökningen på.</p>
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('pws', 'Privat', array('class' => 'col-sm-2 control-label')); !!}
                        <div class="col-sm-10">
                            <label class="checkbox-inline">
                                {!! Form::checkbox('pws', 'true', true); !!}
                                Dölj privata resultat.
                            </label>
                        </div>
                    </div>
                    <hr>
                    <p><small>Saknar du länder eller språk? Twittra <a href="https://twitter.com/kaugesaar" target="_blank">@kaugesaar</a></small></p>
                </div>

            </div>
        </div>
    </div>
{!! Form::close() !!}