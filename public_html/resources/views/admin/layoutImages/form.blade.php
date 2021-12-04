@extends('twill::layouts.form')

@section('contentFields')
    @formField('medias', [
        'name' => 'backgroundImg',
        'label' => 'Global Background Image',
        ])

@formField('medias', [
        'name' => 'logo',
        'label' => 'Logo',
        'note' => 'This is the logo displayed in the navigation bar'
        ])

@formField('medias', [
        'name' => 'favIcon',
        'label' => 'Tab Logo',
        'note' => 'This is the tiny logo displayed on the browser tab'
        ])
@stop