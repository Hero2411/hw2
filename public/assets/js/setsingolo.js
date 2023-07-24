const sendcomment = document.getElementById("capy_btn");
const comment_capybara = document.getElementById("comments");
const comment_input = document.getElementById("comment_input");
const like = document.getElementById("like-button");

sendcomment.addEventListener("click", sendComment);
like.addEventListener("click", setLike);

const imgs = document.querySelectorAll(".grid img");

async function setLike() {
    var token = document.getElementById("token").value;
    var img_id = document.getElementById("img_id").value;
    json_data = JSON.stringify({ _token: token, photo_id: img_id });
    const response = await fetch(`/like_photo`, {
        method: "POST",
        headers: {
            "Content-Type": "application/json; charset=UTF-8",
        },
        body: json_data,
    });
    var response_text = await response.text();
    if (response_text != "DONE") {
        console.log(response_text);
        alert("Error on liking");
        return;
    }
    alert("DONE");
}

async function sendComment() {
    var comment = comment_input.value;
    var token = document.getElementById("token").value;
    var img_id = document.getElementById("img_id").value;
    json_data = JSON.stringify({
        comment_text: comment,
        _token: token,
        photo_id: img_id,
    });
    if (comment == "" || comment.match(/^ +$/g)) {
        alert(`Invalid comment`);
        return;
    }
    const response = await fetch(`/create_comment`, {
        method: "POST",
        headers: {
            "Content-Type": "application/json; charset=UTF-8",
        },
        body: json_data,
    });
    var response_text = await response.text();
    if (response_text != "DONE") {
        console.log(response_text);
        alert("Error on commenting");
        return;
    }
    load_comments(img_id);
    alert("DONE");
}

function selectImage(event) {
    imgs.forEach((img) => {
        img.classList.remove("img_selected");
    });
    var img = event.target;
    var id = img.dataset.id;
    document.getElementById("img_id").value = id;
    img.classList.add("img_selected");
    load_comments(id);
    var src = img.src;
    document.getElementById("selectedimg").innerHTML = `<img src="${src}" alt="Selected Image">`;
}

function setup() {
    let init_id = imgs[0].dataset.id;
    document.getElementById("img_id").value = init_id;
    imgs[0].classList.add("img_selected");
    load_comments(init_id);
    imgs.forEach((img) => {
        img.addEventListener("click", selectImage);
    });
    document.getElementById("selectedimg").innerHTML = `<img src="${imgs[0].src}" alt="Selected Image">`;
}

async function load_comments(id) {
    comment_capybara.innerHTML = "";
    var token = document.getElementById("token").value;
    const response = await fetch(
        `/get_comments?_token=${token}&photo_id=${id}`
    );
    var response_text = await response.text();
    if (response_text == "ERROR") {
        console.log(response_text);
        alert("Error on commenting");
        return;
    }
    let json_data = JSON.parse(response_text);
    json_data.forEach((comment) => {
        comment_capybara.innerHTML += `<div class="comment"><div class="comment-header"><h3 class="comment-author">${comment["username"]}</h3><p class="comment-date">${comment["comment_date"]}</p></div><p>${comment["comment_text"]}</p></div>`;
    });
}

setup();