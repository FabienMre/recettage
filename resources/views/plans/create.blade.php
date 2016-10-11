@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @include('errors.message')
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Soumettre un cahier de recettage
                    </div>

                    <div class="panel-body">
                        {!! Form::open(array(
                        'route' => 'plan.store',
                        'method' => 'POST'
                        )) !!}

                        <div class="form-group">
                            {!! Form::label('project_name', 'Nom du projet') !!}
                            {!! Form::text('project_name', '', [
                                'class' => 'form-control',
                                'placeholder' => 'Votre nom du projet'
                                ])
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('customer_infos', 'Informations à propos du client') !!}
                            {!! Form::text('customer_infos', '', [
                                'class' => 'form-control',
                                'placeholder' => 'Information'
                                ])
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('customer_address', 'Adresse du client') !!}
                            {!! Form::text('customer_address', '', [
                                'class' => 'form-control',
                                'placeholder' => 'votre addresse'
                                ])
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('customer_email', 'Adresse email du client') !!}
                            {!! Form::email('customer_email', '', [
                                'class' => 'form-control',
                                'placeholder' => 'exemple@gmail.com'
                                ])
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('customer_phonenumber', 'Numéro de téléphone du client') !!}
                            {!! Form::number('customer_phonenumber', '', [
                                'class' => 'form-control',
                                'placeholder' => 'Votre numéro de téléphone personnel'
                                ])
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('pitch', 'PITCH') !!}
                            {!! Form::textarea('pitch', '', [
                                'class' => 'form-control',
                                'placeholder' => 'Pitch'
                                ])
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('cdc_fonctionnel', 'Cahier des charges Fonctionnel') !!}
                            {!! Form::textarea('cdc_fonctionnel', '', [
                                'class' => 'form-control',
                                'placeholder' => ''
                                ])
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('goals', 'Objectifs') !!}
                            {!! Form::textarea('goals', '', [
                                'class' => 'form-control',
                                'placeholder' => 'Objectifs'
                                ])
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('team_project', 'Équipe projet') !!}
                            {!! Form::textarea('team_project', '', [
                                'class' => 'form-control',
                                'placeholder' => ''
                                ])
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('team_client', 'Équipe client') !!}
                            {!! Form::textarea('team_project', '', [
                                'class' => 'form-control',
                                'placeholder' => ''
                                ])
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('process', 'Process') !!}
                            {!! Form::textarea('process', '', [
                                'class' => 'form-control',
                                'placeholder' => ''
                                ])
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('organisation', 'Organisation') !!}
                            {!! Form::textarea('organisation', '', [
                                'class' => 'form-control',
                                'placeholder' => ''
                                ])
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('information', 'Équipe client') !!}
                            {!! Form::textarea('team_project', '', [
                                'class' => 'form-control',
                                'placeholder' => ''
                                ])
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('project_type', 'Type de projet') !!}
                            <div class="col-md-offset-1">
                                {!! Form::radio('project_type', 'Site-web') !!}
                                Site internet
                                <br>
                                {!! Form::radio('project_type', '3D') !!}
                                3D
                                <br>
                                {!! Form::radio('project_type', 'Animation-2D') !!}
                                Animation 2D
                                <br>
                                {!! Form::radio('project_type', 'Installation') !!}
                                Installation multimédia
                                <br>
                                {!! Form::radio('project_type', 'Jeu-video') !!}
                                Jeu vidéo
                                <br>
                                {!! Form::radio('project_type', 'Dvd') !!}
                                DVD
                                <br>
                                {!! Form::radio('project_type', 'Print') !!}
                                Print
                                <br>
                                {!! Form::radio('project_type', 'Cd-rom') !!}
                                CD-ROM
                                <br>
                                {!! Form::radio('project_type', 'Evenement') !!}
                                Événement
                                <br>
                                {!! Form::radio('project_type', 'autre') !!}
                                Autre
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('context', "Contexte du projet") !!}
                            {!! Form::textarea('context', '', [
                                'class' => 'form-control',
                                'placeholder' => "Contexte du projet"
                                ])
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('request', "Demandes") !!}
                            {!! Form::textarea('request', '', [
                                'class' => 'form-control',
                                'placeholder' => "Votre demande"
                                ])
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('goals', "Objectifs") !!}
                            {!! Form::textarea('goals', '', [
                                'class' => 'form-control',
                                'placeholder' => 'Votre Objectifs]'
                                ])
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('constraints', "Contraintes") !!}
                            {!! Form::textarea('constraints', '', [
                                'class' => 'form-control',
                                'placeholder' => 'Vos contraintes'
                                ])
                            !!}
                        </div>

                        <div class="text-center">
                            {!! Form::submit('Soumettre',
                                ['class' => 'btn btn-primary'])
                            !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection