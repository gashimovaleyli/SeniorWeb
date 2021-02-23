 var registerBTN = document.getElementById("registerBTN");

 registerBTN.addEventListener('click', (e) => {
    if(document.getElementById("pass").value != document.getElementById("pass_confirm").value){
     document.getElementById("hidden").style.display="block";
      e.preventDefault();
      window.scrollTo({top:0,behavior:'smooth'});
      
 }else{
   
 }
 })
 
 registerBTN.addEventListener('keyup', (e) =>{
        if(document.getElementById("pass").value != document.getElementById("pass_confirm").value){
    document.getElementById("hidden").style.display="block";
      e.preventDefault();
      window.scrollTo({top:0,behavior:'smooth'});
 }else{
      
 } 
 })

$('#myModal').modal(options)

