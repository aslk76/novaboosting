@extends('twill::layouts.form')

@section('contentFields')
    
    @formField('input', [
        'name' => 'titleWhite',
        'label' => 'Title Text (White)',
        'maxlength' => 100,
        'note' => 'This is the first part of the title, eg. "How to" from the title "How to Apply"'
    ])

    @formField('input', [
        'name' => 'titleOrange',
        'label' => 'Title Text (Orange)',
        'maxlength' => 100,
        'note' => 'This is the secornd part of the title, eg. "Apply" from the title "How to Apply"'
    ])


    @formField('wysiwyg', [
        'name' => 'description',
        'label' => 'Guide Content',
        'toolbarOptions' => [ [ 'header' => [1, 2, false] ], 
        'clean', 'bold', 'link', 'italic', 'list-ordered', 'list-unordered', [ 'indent' => '-1'], [ 'indent' => '+1' ] ],
        'editSource' => true,
    ])
@stop
