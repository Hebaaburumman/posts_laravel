import './bootstrap';
// import './chat';

const messages_el = document.getElementById("messages");
const username_input = document.getElementById("username");
const message_input = document.getElementById("message_input");
const message_form = document.getElementById("message_form");

message_form.addEventListener('submit', function(e){
    e.preventDefault();

    let has_errors = false;

    if(username_input.value==''){
        alert("please enter a username");
        has_errors = true
    }
    if(message_input.value==''){
        alert("please enter a message");
        has_errors = true
    }

    if(has_errors){
        return;
    }
    const options = {
        method: 'post',
        url:'/send-message',
        data: {
            username:username_input.value,
            message:message_input.value,
        }

    }
    axios(options); 
});
window.Echo.channel('chatlaravel')
            .listen('.message',(e)=>{
                messages_el.innerHTML += '<div class="message"></div><strong>' + e.username +'</strong>'+ e.message +'</div>;'
            });
