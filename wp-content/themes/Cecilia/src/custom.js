var control = new wp.customize.Control( 'button_id', {
    type: 'button',
    settings: [],
    section: 'experience_section',
    inputAttrs: {
        value: 'Add Job Experience',
        'class': 'button button-primary'
    }
} );
wp.customize.control.add( control );
control.container.find( '.button' ).on( 'click', function() {
    console.info( 'Button was clicked' );
} );