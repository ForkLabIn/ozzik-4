//
// Model for project
//

var O4 = O4 || {};

O4.Project = function(data) {
	this.id = data.id;
	this.name = data.name;
	this.art = data.art;
	this.url = _.url(data.collection + "/" + (data.url ? data.url : data.id));
	this.collection = data.collection,
	this.color = data.color;
	this.similar = data.similar;
	this.scope = data.scope;
	this.meta = data.meta;
	this.synopsis = data.synopsis;
	this.content = data.content;
	this.js = data.js
};