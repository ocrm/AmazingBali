

CKEDITOR.plugins.add( 'listwarn', {
    icons: 'listwarn',
    init: function( editor ) {
        editor.addCommand( 'listwarn', {

        	exec : function(editor){
                editor.insertHtml( '<ul class="list-marked-icon warn-style"><li>Новый элемент списка</li></ul>' );
        	} 
    });


//add the save button to the toolbar

        editor.ui.addButton( 'listwarn', {
            label: 'Список',
            command: 'listwarn',
            toolbar: 'clipboard,1'
        });


    }
});