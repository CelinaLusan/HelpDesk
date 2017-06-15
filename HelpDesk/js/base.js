$(function(){
  Aula = Backbone.Model.extend({
    aula : null
  });

  Aulas = Backbone.Collection.extend({
    initialize: function(model,options){

    }
  });

  console.log($('#aula-editor-contenedor'));
  var AulaView = Backbone.View.extend({
    el: '#aula-editor-contenedor',
    template: _.template($('#select-aula').html()),
    aulas: {},
    initialize: function(){
      this.aulas = new Aulas(null, { view: this } );

      this.aulas.add(new Aula ({ Aula: "Not Set" }));
      this.aulas.add(new Aula ({ Aula: "Weekly" }));
      this.aulas.add(new Aula ({ Aula: "Monthly" }));
      this.render();

    },
    render: function(){
      this.$el.html(this.template(this.aulas))
//      $('#aula-editor-contenedor').html(aula_select_template);
    }
  });

  var appAulas = new AulaView();
});