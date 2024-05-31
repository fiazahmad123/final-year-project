function abc(event){
var target = event.target;
var f = target.files[0];
var f1 = f.name;
if(!f1.endsWith('.pdf')){

  alert("only allows pdf files you can't send any other files ");
} else {
    alert("your files has been submited to database for user ");
}

}
