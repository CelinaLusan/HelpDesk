var restriccionesRedView = Backbone.View.extend({

	render: function(eventName){
		_.each(this.model.models, function(msg){
			$(this.el).append(new restriccionesRedItemView({model:msg}))
		},this);
	}
});

var restriccionesRedItemView = Backbone.View.extend({
	template: _.template($('#RestriccionRed').html()),
	render:function(eventName){
		$(this.el).html(this.template(this.model.toJSON()));
		return this;
	}
});

var MessageModel = Backbone.Model.extend({
    defaults: {
        direccion: "Test Message"
    }
});

var MessageCollection = Backbone.Collection.extend({
    model: MessageModel
});

var Display = function(){
    var msg1 = new MessageModel({ direccion: "Registration Successfully " });
    var msg2 = new MessageModel({ direccion: "Registration Failed" });
    var msg3 = new MessageModel({ direccion: "Login Successfully" });
    var msg4 = new MessageModel({ direccion: "Login Failed" });
 
    var messageCollection = new MessageCollection([msg1, msg2, msg3, msg4]);
 
    var messageListView = new restriccionesRedView({model:messageCollection});
    
    _.each(messageCollection.models, function (msg) {
        console.log("message => "+ msg.get("direccion"));
    });
    
    $('#tableRestriccionRed').html(messageListView.render().el);
};

var display = new Display();

