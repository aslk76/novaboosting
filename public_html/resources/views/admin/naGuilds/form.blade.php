@extends('twill::layouts.form')

@section('contentFields')
    
    @formField('medias', [
        'name' => 'guild_logo',
        'label' => 'Guild Logo/Image',
    ])
    
    @formField('wysiwyg', [
        'name' => 'description',
        'label' => 'Service Description',
        'toolbarOptions' => [ [ 'header' => [1, 2, false] ], 
        'clean', 'bold', 'link', 'italic', 'list-ordered', 'list-unordered', [ 'indent' => '-1'], [ 'indent' => '+1' ] ],
        'editSource' => true,
    ])

    @formField('input', [
        'name' => 'wowprogress',
        'label' => 'WoWProgress Link',
    ])

    @formField('input', [
        'name' => 'raiderio',
        'label' => 'Raider.io Link',
    ])

    @formField('input', [
        'name' => 'website',
        'label' => "Guild's Own Website",
    ])

    @formField('select', [
        'name' => 'faction',
        'label' => 'Faction',
        'unpack' => true,
        'options' => [
            [
                'value' => 'horde',
                'label' => 'Horde'
            ],
            [
                'value' => 'alliance',
                'label' => 'Alliance'
            ],
        ]
    ])


@stop
