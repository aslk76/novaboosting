@extends('twill::layouts.form')

@section('contentFields')
    
    @formField('medias', [
            'name' => 'promo_image',
            'label' => 'Promo Banner Image',
            ])
    
    @formField('wysiwyg', [
        'name' => 'caption',
        'label' => 'Promo Banner Caption/Description',
        'toolbarOptions' => [ [ 'header' => [1, 2, false] ], 
        'clean', 'bold', 'link', 'italic', 'list-ordered', 'list-unordered', [ 'indent' => '-1'], [ 'indent' => '+1' ] ],
        'editSource' => true,
        ])

    
    @formField('input', [
            'name' => 'link',
            'label' => 'Promo Link',
            'maxlength' => 100,
        ])

@stop
