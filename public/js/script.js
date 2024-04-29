let submitbutton = document.getElementById("submit");
let inputname = document.getElementById("name");

inputname.addEventListener("keyup", (e)=>{

    let value = e.currentTarget.value;
    submitbutton.disabled =false;
    if(value === ""){
        submitbutton.disabled =true;
    }

});
