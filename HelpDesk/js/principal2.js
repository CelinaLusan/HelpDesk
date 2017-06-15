$(function(){
   var containerView = Backbone.View.extend({
       el: '#todo',
       
       events: {
           "click #directorio" : "fdirectorio",
           "click #cuentas" : "fcuentas",
           "click #plataformas" : "fplataformas",
           "click #solieq" : "fsolieq",
           "click #repdaños" : "frepdaños",
           "click #instsoft" : "finstsoft",
           "click #solsoft" : "fsolsoft",
           "click #red" : "fred",
           "click #equipext" : "fequipext",
       },
       
       fdirectorio: function(){
           console.log("fdirectorio");
           var dire = new directorioView();
       },
       fcuentas: function(){
           console.log("fcuentas");
           var cuentas = new cuentasView();
       },
       fplataformas: function(){
           console.log("fplataformas");
           var plataformas = new plataformasView();
       },
       fsolieq: function(){
           console.log("fsolieq");
           var solieq = new solieqView();
       },
       frepdaños: function(){
           console.log("frepdaños");
           var repdaños = new repdañosView();
       },
       finstsoft: function(){
           console.log("finstsoft");
           var instsoft = new instsoftView();
       },
       fsolsoft: function(){
           console.log("fsolsoft");
           var solsoft = new solsoftView();
       },
       fred: function(){
           console.log("fred");
           var red = new redView();
       },
       fequipext: function(){
           console.log("fequipext");
           var equipext = new equipextView();
       }
    });
    var container = new containerView();
    
    var directorioView = Backbone.View.extend({
        el: '#cuerpo',
        initialize: function(){
            this.$el.html(_.template($('#tdirectorio').html()))
        },
        render: function(){
            $('#contenido').html(this.$el);
            return this;
        }
        
    });
    var cuentasView = Backbone.View.extend({
        el: '#cuerpo',
        initialize: function(){
            this.$el.html(_.template($('#tcuentas').html()))
        },
        render: function(){
            $('#contenido').html(this.$el);
            return this;
        }
        
    });
    var plataformasView = Backbone.View.extend({
        el: '#cuerpo',
        initialize: function(){
            this.$el.html(_.template($('#tplataformas').html()))
        },
        render: function(){
            $('#contenido').html(this.$el);
            return this;
        }
        
    });
    var solieqView = Backbone.View.extend({
        el: '#cuerpo',
        initialize: function(){
            this.$el.html(_.template($('#tsolieq').html()))
        },
        render: function(){
            $('#contenido').html(this.$el);
            return this;
        }
        
    });
    var repdañosView = Backbone.View.extend({
        el: '#cuerpo',
        initialize: function(){
            this.$el.html(_.template($('#trepdaños').html()))
        },
        render: function(){
            $('#contenido').html(this.$el);
            return this;
        }
        
    });
    var instsoftView = Backbone.View.extend({
        el: '#cuerpo',
        initialize: function(){
            this.$el.html(_.template($('#tinstsoft').html()))
        },
        render: function(){
            $('#contenido').html(this.$el);
            return this;
        }
        
    });
    var solsoftView = Backbone.View.extend({
        el: '#cuerpo',
        initialize: function(){
            this.$el.html(_.template($('#tsolsoft').html()))
        },
        render: function(){
            $('#contenido').html(this.$el);
            return this;
        }
        
    });
    var redView = Backbone.View.extend({
        el: '#cuerpo',
        initialize: function(){
            this.$el.html(_.template($('#tred').html()))
        },
        render: function(){
            $('#contenido').html(this.$el);
            return this;
        }
        
    });
    var equipextView = Backbone.View.extend({
        el: '#cuerpo',
        initialize: function(){
            this.$el.html(_.template($('#tequipext').html()))
        },
        render: function(){
            $('#contenido').html(this.$el);
            return this;
        }
        
    });
    var dire = new directorioView();
});