var chatbody = document.querySelector(".w1");
var message = document.querySelector(".w2");
var text = document.querySelector("#text");
var send = document.querySelector(".send");
const response = {
    hellow: "yes what type of help you required ?",
    what: "yes do you want help ?",
    who: "i am fiaz ahmad ",
    mean: "zombii is setting with you ",
    ok
        : "thank so much",
    okay: "welcome mr fiaz ahmad",


};
send.addEventListener("click", () => renderuermessage());
const renderuermessage = () => {
  
    var inputtext = text.value;
    text.value = "";
    renderMessageEle(inputtext, "user");
    setTimeout(() => {
        renderChatbotEle(inputtext);

        setScrollPosition();
    }, 800);
};
const renderChatbotEle = (inputtext) => {
    const res = getChatbodyResponse(inputtext);
    renderMessageEle(res);
};
const renderMessageEle = (text, type) => {
    let ClassName = "user-message";


    if (type !== "user") {
        ClassName = "chatbot-message";
    }
    var a = document.createElement("div");
    var b = document.createTextNode(text);
    a.classList.add(ClassName);
    a.append(b);
    message.append(a);
};
const getChatbodyResponse = (inputtext) => {
    return response[inputtext] == undefined ? "plz try somthing else" : response[inputtext];
};
const setScrollPosition = () => {
    if (chatbody.scrollHeight > 0) {
        chatbody.scrollTop = chatbody.scrollHeight;

    }
};
