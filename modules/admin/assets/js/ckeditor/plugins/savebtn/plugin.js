

CKEDITOR.plugins.add( 'savebtn', {
    icons: 'savebtn',
    init: function( editor ) {
        editor.addCommand( 'savecontent', {

        	exec : function(editor){

                //get the text from ckeditor you want to save
        		var data = editor.getData();
                var id = editor.container.getAttribute('data-id');
                var controller = editor.container.getAttribute('data-controller');
                var attribute = editor.container.getAttribute('data-attribute');

                //path to the ajaxloader gif
                loading_icon=CKEDITOR.basePath+'plugins/savebtn/icons/loader.gif';

                //css style for setting the standard save icon. We need this when the request is completed.
                normal_icon=$('.cke_button__savebtn_icon').css('background-image');

                //replace the standard save icon with the ajaxloader icon. We do this with css.
                $('.cke_button__savebtn_icon').css("background-image", "url("+loading_icon+")");

                //Now we are ready to post to the server...
                $.ajax({
                    url: '/admin/'+ controller +'/edit?id='+ id +'&attribute='+ attribute,
                    type: 'POST', 
                    data: {'data': data}
                })
                .done(function(response) {

                })
                .fail(function() {
                    alert('Ошибка сохранения, повторите попытку')
                })
                .always(function() {
                    $('.cke_button__savebtn_icon').css("background-image", normal_icon);
                });
                

        	} 
    });


//add the save button to the toolbar

        editor.ui.addButton( 'savebtn', {
            label: 'Сохранить',
            command: 'savecontent',
            toolbar: 'clipboard,1'
        });


    }
});