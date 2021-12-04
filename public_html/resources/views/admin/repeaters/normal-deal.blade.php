@twillRepeaterTitle('Deal')
@twillRepeaterTitleField('title', ['hidePrefix' => true])
@twillRepeaterTrigger('Add Deal')
@twillRepeaterGroup('app')

@formField('input', [
    'name' => 'title',
    'label' => 'Title',
    'required' => true,
])

@formField('wysiwyg', [
        'name' => 'description',
        'label' => 'Deal Text',
        'toolbarOptions' => [ [ 'header' => [1, 2, false] ], 
        'clean', 'bold', 'link', 'italic', 'strike', 'list-ordered', 'list-unordered', [ 'indent' => '-1'], [ 'indent' => '+1' ], 'table' ],
        'editSource' => true,
        'type' => 'tiptap'
    ])

@formField('medias', [
        'name' => 'deal_image',
        'label' => 'Image'

    ])