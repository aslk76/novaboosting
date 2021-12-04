@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'username',
        'label' => 'Streamer Username',
        'maxlength' => 100
    ])
    
    @formField('wysiwyg', [
        'name' => 'description',
        'label' => 'Description',
        'toolbarOptions' => [ [ 'header' => [1, 2, false] ], 
        'clean', 'bold', 'link', 'italic', 'list-ordered', 'list-unordered', [ 'indent' => '-1'], [ 'indent' => '+1' ] ],
        'editSource' => true,
    ])
@stop
