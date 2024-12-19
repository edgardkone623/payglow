
function hasClass(ele, cls) {
    return ele.className.match(new RegExp('(\\s|^)' + cls + '(\\s|$)'));
}

function addClass(ele, cls) {
    if (!this.hasClass(ele, cls)) ele.className += " " + cls;
}

function removeClass(ele, cls) {
    if (hasClass(ele, cls)) {
    	var reg = new RegExp('(\\s|^)' + cls + '(\\s|$)');
    	ele.className = ele.className.replace(reg, ' ');
    }
}

function createClass(className,classRules){

	if(document.getElementById(className))
		return false;

	var style = document.createElement('style');
	style.type = 'text/css';
	style.id = className;
	style.innerHTML = '.'+className+' { '+classRules+' }';
	document.getElementsByTagName('head')[0].appendChild(style);
  return true;
}

function hasAttrib(element,attribName) {

	return (typeof element.attributes[attribName] !== 'undefined' ? true:false);
}

function getAttrib(element,attribName) {

	return hasAttrib(element,attribName) ? element.attributes[attribName].value : null;
}

function getFormInputs(formObj) {

	var elemObjs = formObj.elements;
	var inputObjs = [];

	for(var i=0;i<elemObjs.length;i++) {

		if(elemObjs[i].type != "submit" && elemObjs[i].type != "button")
			inputObjs[i] = elemObjs[i];
	}

	return inputObjs;
}

var inputClass = "invalid-input";

function setInputStyle(inputs) {

	createClass(inputClass,"border:1px solid red;");

	for(var i=0;i<inputs.length;i++) {

		inputs[i].oninput = function() {

			if(this.value == "")
				addClass(this,inputClass);
			else
				removeClass(this,inputClass);
		};

		inputs[i].onkeyup = function() {

			if(this.value == "")
				addClass(this,inputClass);
			else
				removeClass(this,inputClass);
		};

	}
}

function inputValidation(formObj) {

	var input,pattern;
	var allowSubmit = true;
  var isFocusSet = false;
	var inputs = getFormInputs(formObj);

  if(!document.getElementById(inputClass))
    setInputStyle(inputs);

	for(var i=0;i<inputs.length;i++) {

		input = inputs[i];

		if(hasAttrib(input,"required") && input.value == "") {

			addClass(input,inputClass);
			allowSubmit = false;
		}
		else
			removeClass(input,inputClass);

		pattern = getAttrib(input,"pattern");

		if(pattern && pattern != "") {

			var regExp = new RegExp(pattern);

			if(!regExp.test(input.value)){

				addClass(input,inputClass);
				allowSubmit = false;
			}
			else
				removeClass(input,inputClass);
		}
    /*
    if(!allowSubmit && !isFocusSet) {
      input.focus();
      isFocusSet = true;
    }
    */
	}

	return allowSubmit;
}
