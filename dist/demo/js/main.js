
/*全局的JS入口*/
require.config({
    baseUrl: "/",
    paths: {
        'jquery': 'libs/jquery-2.0.3/jquery.min',
        'jquery.ui': 'libs/jquery-ui-1.10.3/jquery-ui.min',
        'bootstrap': 'js/bootstrap',

        'model-engine': 'modules/model-engine',
        'jquery-validate': 'libs/jquery-validation-1.11.1',
        'jquery.ui.widget': 'libs/jquery-ui-1.10.3/jquery.ui.widget',
        'jquery-file-upload': 'libs/jquery-file-upload-8.7.1'
    },
    shim:{
    	'jquery.ui': ['jquery'],
    	'bootstrap': ['jquery'],
        
        'jquery.ui.widget': ['jquery'],
        'jquery-file-upload/jquery.fileupload': ['jquery', 'jquery.ui'],
        'jquery-validate/jquery.validate.min': ['jquery', 'jquery.ui'],
        'jquery-validate/localization/messages_zh': ['jquery', 'jquery.ui', 'jquery-validate/jquery.validate.min']
    }
});

require(['js/util'], function(util){
    util.loadCss(require.toUrl('css/global.css'));
});
