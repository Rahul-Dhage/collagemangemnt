async function submit(payload){
    const response = await fetch('./apis/work-data.php' , {
        method : "post",
        body : payload,

    })
    const {status , msg} = await response.json();
    console.log(status , msg);
    if(status == "success"){

        const modal = document.querySelector(".modal");
        modal.classList.add("modal--open");
        modal.querySelector("h4").innerHTML = msg;
        setTimeout(()=>{
            location.href = "skills.php";
        } , 2000)
    }else{
        alert(msg)
    }
}


const form = document.querySelector("form");
form.onsubmit = e => {
    e.preventDefault();
    const payload = new FormData(form);
    submit(payload);
}
