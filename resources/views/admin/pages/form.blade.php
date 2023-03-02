@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'title',
        'label' => 'title',
        'maxlength' => 100
    ])
    @formField('input', [
        'name' => 'subtitle',
        'label' => 'subtitle',
        'maxlength' => 100
    ])
    @formField('input', [
        'name' => 'cta',
        'label' => 'cta',
        'maxlength' => 100
    ])
    @formField('select', [
        'name' => 'style',
        'label' => 'style',
        'placeholder' => 'Select an style',
        'options'=>[
            ['value' => 'default', 'label' => 'Default'],
            ['value' => 'primary', 'label' => 'Primary'],
            ['value' => 'secondary', 'label' => 'Secondary'],
            ['value' => 'success', 'label' => 'Success'],
            ['value' => 'danger', 'label' => 'Danger'],
            ['value' => 'warning', 'label' => 'Warning'],
            ['value' => 'info', 'label' => 'Info'],
            ['value' => 'light', 'label' => 'Light'],
            ['value' => 'dark', 'label' => 'Dark'],
            ['value' => 'link', 'label' => 'Link'],
        ]
    ])
    @formField('input', [
        'name' => 'description',
        'label' => 'Description',
        'maxlength' => 100
    ]) 
@stop
