

CKEDITOR.plugins.add( 'hr', {
    icons: 'hr',
    init: function( editor ) {
        editor.addCommand( 'insertHr', {

        	exec : function(editor){
                editor.insertHtml( '<hr/>' );
        	} 
    });


//add the save button to the toolbar

        editor.ui.addButton( 'hr', {
            label: 'Разделитель',
            command: 'insertHr',
            toolbar: 'clipboard,1'
        });


    }
});