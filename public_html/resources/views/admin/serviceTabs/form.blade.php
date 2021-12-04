@extends('twill::layouts.form')

@section('contentFields')
    
    @formField('medias', [
        'name' => 'service_banner',
        'label' => 'Banner Image'

    ])

    @formField('wysiwyg', [
        'name' => 'pricelist',
        'label' => 'Pricelist',
        'toolbarOptions' => [ [ 'header' => [1, 2, false] ], 
        'clean', 'bold', 'link', 'italic', 'list-ordered', 'list-unordered', [ 'indent' => '-1'], [ 'indent' => '+1' ], 'table' ],
        'editSource' => true,
        'type' => 'tiptap'
    ])
@stop
