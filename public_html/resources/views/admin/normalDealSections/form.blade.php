@extends('twill::layouts.form')

@section('contentFields')
    @formField('medias', [
        'name' => 'deal_banner',
        'label' => 'Banner Image'
    ])

    @formField('select', [
        'name' => 'region',
        'label' => 'Region',
        'unpack' => true,
        'options' => [
            [
                'value' => 'eu',
                'label' => 'EU'
            ],
            [
                'value' => 'na',
                'label' => 'NA'
            ],
        ]
    ])

    @formField('repeater', ['type' => 'normal-deal'])
@stop
