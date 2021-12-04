@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'service_tabs_id',
        'type' => 'number',
        'label' => 'Tab Number - This must match the number of the tab you want it to display under, found in the Service Tabs section',
        'maxlength' => 5
    ])

    @formField('medias', [
        'name' => 'service_image',
        'label' => 'Image'

    ])

    @formField('wysiwyg', [
        'name' => 'description',
        'label' => 'Service Description',
        'toolbarOptions' => [ [ 'header' => [1, 2, false] ], 
        'clean', 'bold', 'link', 'italic', 'list-ordered', 'list-unordered', [ 'indent' => '-1'], [ 'indent' => '+1' ] ],
        'editSource' => true,
    ])



@stop
