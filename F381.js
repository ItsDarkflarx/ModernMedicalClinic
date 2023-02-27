function init(){
    let currentDate = new Date();
    let currentMonth =  currentDate.getMonth() + 1;
    document.getElementById("orderdate").value = currentDate.getFullYear() + "-" + currentMonth + "-" + currentDate.getDate();
}

function doctorSelect(s1,s2){
	var s1 = document.getElementById(s1);
	var s2 = document.getElementById(s2);
	s2.innerHTML = "";
	if(s1.value == "Corey"){
		var optionArray = ["9:00am|9:00am","10:00am|10:00am","11:00am|11:00am"];
	} else if(s1.value == "Josephine"){
		var optionArray = ["11:30am|11:30am","12:00pm|12:00pm","1:30pm|1:30pm"];
	} else if(s1.value == "Joanne"){
		var optionArray = ["12:30pm|12:30pm","2:30pm|2:30pm","4:30pm|4:30pm"];
	}
	for(var option in optionArray){
		var pair = optionArray[option].split("|");
		var newOption = document.createElement("option");
		newOption.value = pair[0];
		newOption.innerHTML = pair[1];
		s2.options.add(newOption);
	}
}


function showPopup1() {
	var popup = document.getElementById('popup1');
	popup.classList.add('show')
}

function hidePopup1() {
	var popup = document.getElementById('popup1');
	popup.classList.remove('show')
}

function showPopup2() {
	var popup = document.getElementById('popup2');
	popup.classList.add('show')
}

function hidePopup2() {
	var popup = document.getElementById('popup2');
	popup.classList.remove('show')
}

function showPopup3() {
	var popup = document.getElementById('popup3');
	popup.classList.add('show')
}

function hidePopup3() {
	var popup = document.getElementById('popup3');
	popup.classList.remove('show')
}

function showPopup4() {
	var popup = document.getElementById('popup4');
	popup.classList.add('show')
}

function hidePopup4() {
	var popup = document.getElementById('popup4');
	popup.classList.remove('show')
}

function showPopup5() {
	var popup = document.getElementById('popup5');
	popup.classList.add('show')
}

function hidePopup5() {
	var popup = document.getElementById('popup5');
	popup.classList.remove('show')
}

function showPopup6() {
	var popup = document.getElementById('popup6');
	popup.classList.add('show')
}

function hidePopup6() {
	var popup = document.getElementById('popup6');
	popup.classList.remove('show')
}

function showPopup7() {
	var popup = document.getElementById('popup7');
	popup.classList.add('show')
}

function hidePopup7() {
	var popup = document.getElementById('popup7');
	popup.classList.remove('show')
}

function showPopup8() {
	var popup = document.getElementById('popup8');
	popup.classList.add('show')
}

function hidePopup8() {
	var popup = document.getElementById('popup8');
	popup.classList.remove('show')
}

function showPopup9() {
	var popup = document.getElementById('popup9');
	popup.classList.add('show')
}

function hidePopup9() {
	var popup = document.getElementById('popup9');
	popup.classList.remove('show')
}