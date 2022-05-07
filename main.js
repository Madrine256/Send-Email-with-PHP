// create function to fetch elements
const fetchClass = (classname)=> document.querySelector(classname);

const form = fetchClass('.form');
const submitBtn = fetchClass('.submit'),
        statusArea =  fetchClass('.button-area span');

  
        
form.onsubmit = (e)=>{
    e.preventDefault(); //prevent form from submitting
    statusArea.style.display = "block";

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "message.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState == 4 && xhr.status == 200){
            let phpResponse = xhr.response;
            if(phpResponse.indexOf("Email or message fields are empty") != -1 || phpResponse.indexOf("Please Enter a valid email") != -1 || phpResponse.indexOf("Sorry, Failed to send message ") != -1 ){
                statusArea.style.color = "red";
            }else{
                form.reset();

                setTimeout(()=>{
                    statusArea.style.display = 'none';
                },3000)
            }
            statusArea.innerHTML = phpResponse;
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}



