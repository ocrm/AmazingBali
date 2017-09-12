

CKEDITOR.plugins.add( 'listx', {
    icons: 'listx',
    init: function( editor ) {
        editor.addCommand( 'listx', {

        	exec : function(editor){
                editor.insertHtml( '<ul class="list-marked-icon xstyle"><li>Новый элемент списка</li></ul>' );
        	} 
    });


//add the save button to the toolbar

        editor.ui.addButton( 'listx', {
            label: 'Список',
            command: 'listx',
            toolbar: 'clipboard,1'
        });


    }
});