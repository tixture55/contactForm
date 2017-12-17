(function() {

//Model

var Task = Backbone.Model.extend({
	defaults: {
		title: "do something!",
		completed: false
	},
	toggle: function() {
		this.set('completed', !this.get('completed'));
	}

});
/*
var task1 = new Task({
	completed: true
});
*/

//task1.set('title', 'newTitle');

//var title = task1.get('title');
//console.log(title);


//View
var task = new Task();

var TaskView = Backbone.View.extend({
	tagName:  'li',
	//className: 'liClass',
	//id:  'liId'
	template: _.template("<%- title %>"),
	render:  function() {
		var template = this.template(this.model.toJSON() );
		this.$el.html(template);
		return this;
	}
});
var taskView = new TaskView({ model: task });

console.log(taskView.render().el);



//console.log(task1.toJSON());

})();
