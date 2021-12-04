@extends('twill::layouts.form')

@section('contentFields')
    {{-- @formField('input', [
        'name' => 'title',
        'label' => 'Title',
        'maxlength' => 100,
        'required => true'
    ]) --}}

    @formField('wysiwyg', [
        'name' => 'description',
        'label' => 'News',
        'toolbarOptions' => [ [ 'header' => [1, 2, false] ], 
        'clean', 'bold', 'link', 'italic', 'list-ordered', 'list-unordered', [ 'indent' => '-1'], [ 'indent' => '+1' ] ],
        'editSource' => true,
    ])

    @formField('medias', [
        'name' => 'news_image',
        'label' => 'Image'

    ])

    @formField('input', [
        'name' => 'button_text',
        'label' => 'Button Text',
        'maxlength' => 100,
        'required => true',
        'placeholder' => 'Join Now'
    ])

    @formField('input', [
        'name' => 'link',
        'label' => 'Button Link',
        'maxlength' => 150,
        'required => true',
        'placeholder' => 'https://discord.gg/H4ZdEFgPjx',
        'default' => 'https://discord.gg/H4ZdEFgPjx'
])


@stop
