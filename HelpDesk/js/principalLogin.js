$(function(){
    var loginView = Backbone.View.extend({
        el: '#todo',
        events: {
            "click #espaniol" : "fespaniol",
            "click #ingles" : "fingles",
        },
        fespaniol: function(){
            this.$el.html(_.template($('#loginEs').html()));
            sessionStorage.setItem('template', '#loginEs');
        },
        fingles: function(){
            this.$el.html(_.template($('#loginIn').html()));
            sessionStorage.setItem('template', '#loginIn');
        },
        initialize: function(){
            if(!sessionStorage.getItem('template')){
                this.$el.html(_.template($('#loginEs').html()))
            }
            else{
                this.$el.html(_.template($(sessionStorage.getItem('template')).html()))
            }
        },
        render: function(){
            $('#todo').html(this.$el);
            return this;
        }
        
    });
    var login = new loginView();
    var Usuario = Backbone.Model.extend({
      defaults: {
        id_usuario:"",
        usuario:"",
        apellido_paterno:"",
        apellido_materno:"",
        contrasenia:""
      },
    });
});