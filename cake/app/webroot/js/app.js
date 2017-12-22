(function() {

var User = Backbone.Model.extend({
	defaults:{
		id: "",
		name : "",
	},
	initialize:function(firstInitialize){
		console.log("model initialized");
	}
});

var Task = Backbone.Model.extend({
	defaults: {
		url:  '/api/hoge',
		title: "do something!",
		completed: false
	},
	
	initialize: function(){
		this.on('initialize', this.setRegisterDate);
		this.trigger('initialize');
	},
	setRegisterDate: function(){
        this.set('registerDate', new Date());
        },
	toggle: function() {
		this.set('completed', !this.get('completed'));
	}

});

var task = new Task();

var TaskView = Backbone.View.extend({
	template: _.template("<%- title %>"),
	
	events:{
	  "click  .squre_btn":"onAdd",
          "click .hello-button": "hello"
	},
	initialize: function() {
        	
		$('.hello-button').click(this.hello);
		this.listenTo(this.collection, 'change', function(model) {
            		console.log('collection catch ' + model.get('name') + ' model change event');
        	});
 
        },
	hello: function() {
        	alert("hello!");
		$("body").append("<p>テキスト</p>");
    	},
	render:  function() {
		var template = this.template(this.model.toJSON() );
		this.$el.html(template);
		return this;
	},
});
var taskView = new TaskView({ model: task });

})();
