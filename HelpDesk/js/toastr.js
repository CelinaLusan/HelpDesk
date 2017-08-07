// $.toaster({ settings : {...} });
'toaster'         :{
  'id'        : 'toaster',
  'container' : 'body',
  'template'  : '<div></div>',
  'class'     : 'toaster',
  'css'       : {
    'position' : 'fixed',
    'top'      : '10px',
    'right'    : '10px',
    'width'    : '300px',
    'zIndex'   : 50000
  }
},

'toast'       :{
  'template' :
  '<div class="alert alert-%priority% alert-dismissible" role="alert">' +
    '<button type="button" class="close" data-dismiss="alert">' +
      '<span aria-hidden="true">&times;</span>' +
      '<span class="sr-only">Close</span>' +
    '</button>' +
    '<span class="title"></span>: <span class="message"></span>' +
  '</div>',

  'defaults' :{
    'title'    : 'Notice',
    'priority' : 'success'
  },

  'css'      : {},
  'cssm'     : {},
  'csst'     : { 'fontWeight' : 'bold' },

  'fade'     : 'slow',

  'display'    : function ($toast){
    return $toast.fadeIn(settings.toast.fade);
  },

  'remove'     : function ($toast, callback){
    return $toast.animate( {
        opacity : '0',
        padding : '0px',
        margin  : '0px',
        height  : '0px'
      },{
        duration : settings.toast.fade,
        complete : callback
      }
    );
  }
},

'debug'        : false,
'timeout'      : 1500,
'stylesheet'   : null,
'donotdismiss' : []