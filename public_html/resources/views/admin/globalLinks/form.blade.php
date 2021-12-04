@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'emailAddress',
        'label' => 'Email Address',
        'maxlength' => 100,
        'note' => "Email address for the 'Contact Us' form to send to"
    ])

    @formField('input', [
        'name' => 'facebook',
        'label' => 'Facebook Link',
        'maxlength' => 100,
    ])

    @formField('input', [
        'name' => 'instagram',
        'label' => 'Instagram Link',
        'maxlength' => 100,
    ])

    @formField('input', [
        'name' => 'twitch',
        'label' => 'Twitch Link',
        'maxlength' => 100,
    ])

    @formField('input', [
        'name' => 'twitter',
        'label' => 'Twitter Link',
        'maxlength' => 100,
    ])

    @formField('input', [
        'name' => 'discord',
        'label' => 'Discord Link',
        'maxlength' => 100,
    ])

    @formField('input', [
        'name' => 'discordRequest',
        'label' => 'Discord request-a-boost link',
        'maxlength' => 100,
        'note' => 'Link directly to the request-a-boost channel in Discord'
    ])

    @formField('input', [
        'name' => 'patreon',
        'label' => 'Patreon Link',
        'maxlength' => 100,
    ])

    @formField('input', [
        'name' => 'youtube',
        'label' => 'YouTube Link',
        'maxlength' => 100,
    ])

@stop

