@extends('twill::layouts.form')

@section('contentFields')
    @formField('medias', [
        'name' => 'slider_image',
        'label' => 'Slider Image',
        ])
@stop
