function asd(){
var animal = document.forms.pets.elements["pets"].value;
if (animal == "cat")
{
var answer=document.getElementById("answer").innerHTML="This answer correct! You are a +200IQ person after all";
}
else
{
var answer=document.getElementById("answer").innerHTML="What are you 5? Grow up and try again";
}
}