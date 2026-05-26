
/***************Post**************************/
const posts = document.querySelector(".posts");
const post_data = [
  ['https://cajamar.sp.gov.br/noticias/wp-content/uploads/sites/2/2021/08/ed5d55c8-3966-4114-8ce4-9b9d0d25effd.png','zineb',45,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSIr5FjxaJQy6RTw6kQkJJcIYoRQRu6xhlrEw&s',150,'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima accusantium aperiam quod non minus cumque, recusandae hic soluta harum aut nulla... ',2],
  ['https://www.agendartecultura.com.br/wp-content/uploads/2022/12/meneson.jpg','ikram',15,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4M7nZjgoZAoxHYQi_kKvCnWceK3LWl92uXQ&s',150,'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima accusantium aperiam quod non minus cumque, recusandae hic soluta harum aut nulla... ',2],
  ['https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ1A0pPKFrX15HGHXKWH8ikpP8U7qdL7oGYKg&s','amina',5,'https://agrafica.com.br/wp-content/uploads/2016/01/resolucao_300dpi.jpg',350,'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima accusantium aperiam quod non minus cumque, recusandae hic soluta harum aut nulla... ',2],
  ['https://www.infomoney.com.br/wp-content/uploads/2019/06/pessoa-feliz.jpg?fit=900%2C600&quality=50&strip=all','amal',15,'https://alfredonegreirosadvocacia.adv.br/wp-content/uploads/2023/12/Direito-de-Imagem-do-Jogador-de-Futebol.jpg',150,'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima accusantium aperiam quod non minus cumque, recusandae hic soluta harum aut nulla... ',2],
  ['https://cdn.pixabay.com/photo/2018/01/22/07/31/portrait-3098319_640.jpg','amine',15,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjOXLkT-0StAi506oMCXStmObRdinTSRCyLg&s',150,'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima accusantium aperiam quod non minus cumque, recusandae hic soluta harum aut nulla... ',2],
]

if(posts)
  for (var i = 0; i < post_data.length; i++) {
    const post_div = document.createElement('div')
    post_div.classList.add("post");
    post_div.innerHTML = `
    <div class="info">
      <div class="person">
          <img src="${post_data[i][0]}">
          <a href="#">${post_data[i][1]}</a>
          <span class="circle">.</span>
          <span>${post_data[i][2]}m</span>
      </div>
      <div class="more">
          <img src="./images/show_more.png" alt="show more">
      </div>
    </div>
    <div class="image">
      <img src="${post_data[i][3]}" >
    </div>
    <div class="desc">
      <div class="icons">
          <div class="icon_left d-flex">
              <div class="like">
                  <img class="not_loved" src="./images/love.png" >
                  <img class="loved" src="./images/heart.png" >
              </div>
              <div class="chat">
                  <button type="button" class="btn p-0" data-bs-toggle="modal"
                      data-bs-target="#message_modal">
                      <img src="./images/bubble-chat.png" >
                  </button>
              </div>
              <div class="send">
                  <button type="button" class="btn p-0" data-bs-toggle="modal"
                      data-bs-target="#send_message_modal">
                      <img src="./images/send.png" >
                  </button>
              </div>
          </div>
          <div class="save not_saved">
              <img class="hide saved" src="./images/save_black.png" >
              <img class="not_saved" src="./images/save-instagram.png" >
          </div>
      </div>
      <div class="liked">
          <a class="bold" href="#">${post_data[i][4]} likes</a>
      </div>
      <div class="post_desc">
          <p>
              <a class="bold" href="#">${post_data[i][1]}</a>
              ${post_data[i][5]}
          </p>
          <p><a class="gray" href="#">View all ${post_data[i][6]} comments</a></p>
          <input type="text" placeholder="Add a comments...">
      </div>
    </div>
      `;
    posts.appendChild(post_div);
  }

/***************explore**********/
const explore_date = [
  ['https://embratur.com.br/wp-content/uploads/2022/07/Embratur-Brasil-ultrapassa-marca-de-1-milhao-de-turistas-estrangeiros-recebidos-pela-primeira-vez-desde-2020-1.png',1500,400],
  ['https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPa6u-X0ux___Wu_FVEmYHGzwbdXzojkaCBg&s',400,200],
  ['https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTvx7jOV9v_JoY2kX35NOAc8omxTc_zNKUl7Q&s',700,20],
  ['https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTOWo_EXLGufStDkBAilQjUaxB4ZtinHYGnYg&s',150,80],
  ['https://terramagna.com.br/wp-content/uploads/2022/09/aparelho-imagens-de-satelite-espaco-terra.jpg',10,5],
  ['https://www.infomoney.com.br/wp-content/uploads/2025/04/Gm8d8AObYAImwUr-edited-1.jpeg?fit=1280%2C720&quality=50&strip=all',100,57],
  ['https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRYeGh92B7HEoS-YuoF6bL_S4tpt0fUYuiZ0g&s',100,57],
  ['https://mapadomeuceu.com.br/wp-content/uploads/2021/02/Imagens-do-universo-Nasa-Nebulosa-do-Caranguejo.jpg',100,57],
  ['https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRmGFqEUL_-3oK_JYGqP3cYfg_xeJsfw-y9oA&s',100,57],
  ['https://blog.autocompara.com.br/wp-content/uploads/2024/06/carros-esportivos.jpeg',100,57],
  ['https://imagensdeluto.com.br/wp-content/uploads/2024/02/Luto-Garotinha-Disney-Pixar-3D-Imagem-Gratis-300x300.jpg',100,57],
  ['https://plus.unsplash.com/premium_photo-1667126447999-ac6346bebdce?fm=jpg&q=60&w=3000&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8Ym9uaXRvfGVufDB8fDB8fHww',100,57],
  ['https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRl5rSKFl3itqk-_GXoQR9GCZo-CVYpG9caPg&s',100,57],
  ['https://i.ytimg.com/vi/ofSvd9i0Imk/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLCk_yRgvRQk3HZdj9ctNj3W0FJyvA',100,57],
  ['https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ18ANU15HzSIzsyvWkyNvmpLImL-17PX1smw&s',100,57],
]
const explores = document.querySelector('.explore_container');

if(explores)
for (var i = 0; i < explore_date.length;i++) {
  const explore_1_div = document.createElement('div')
  explore_1_div.classList.add("items_4")
  explore_1_div.innerHTML = `
  <div class="item">
      <img class="img-fluid" src="${explore_date[i][0]}" >
      <div class="bg"
        <div class="info">
          <div class="likes">
              <img src="./images/heart_white.png" >
              <span>${explore_date[i][1]}</span>
          </div>
          <div class="comments">
              <img src="./images/message.png" >
              <span>${explore_date[i++][2]}</span>
          </div>
        </div>
      </div>
  </div>
  <div class="item">
      <img class="img-fluid" src="${explore_date[i][0]}" >
      <div class="bg"
        <div class="info">
          <div class="likes">
              <img src="./images/heart_white.png" >
              <span>${explore_date[i][1]}</span>
          </div>
          <div class="comments">
              <img src="./images/message.png" >
              <span>${explore_date[i++][2]}</span>
          </div>
        </div>
      </div>
  </div>
  <div class="item">
      <img class="img-fluid" src="${explore_date[i][0]}" >
      <div class="bg"
        <div class="info">
          <div class="likes">
              <img src="./images/heart_white.png" >
              <span>${explore_date[i][1]}</span>
          </div>
          <div class="comments">
              <img src="./images/message.png" >
              <span>${explore_date[i++][2]}</span>
          </div>
        </div>
      </div>
  </div>
  <div class="item">
      <img class="img-fluid" src="${explore_date[i][0]}" >
      <div class="bg"
        <div class="info">
          <div class="likes">
              <img src="./images/heart_white.png" >
              <span>${explore_date[i][1]}</span>
          </div>
          <div class="comments">
              <img src="./images/message.png" >
              <span>${explore_date[i++][2]}</span>
          </div>
        </div>
      </div>
  </div>
</div>
  `;
  explores.appendChild(explore_1_div);

  const explore_2_div = document.createElement('div');
  explore_2_div.classList.add("item1");
  explore_2_div.innerHTML = `
  <div class="item">
  <img class="img-fluid" src="${explore_date[i][0]}" >
  <div class="bg"
    <div class="info">
      <div class="likes">
          <img src="./images/heart_white.png" >
          <span>${explore_date[i][1]}</span>
      </div>
      <div class="comments">
          <img src="./images/message.png" >
          <span>${explore_date[i][2]}</span>
      </div>
    </div>
  </div>
</div>
  `;
  explores.appendChild(explore_2_div);
}

/*****************Reels********************/
const reels_data = [
  ['./video/video1.mp4',
  './images/profile_img.jpg',
  'zineb',
  'Lorem ipsum dolor sit amet, consectetur adipisicing elit.Officiis...',
  'nameOfMusic',
  'casablanca',
  '55.9K',
  '555',
  ],
  ['./video/video2.mp4',
  'https://jrmcoaching.com.br/wp-content/uploads/2018/12/pessoas-honestas.jpg',
  'ikram',
  'Lorem ipsum dolor sit amet, consectetur adipisicing elit.Officiis...',
  'nameOfMusic',
  'oujda',
  '35.9K',
  '75',
  ],
  ['./video/video3.mp4',
  'https://www.shutterstock.com/image-photo/portrait-headshot-confident-positive-woman-260nw-2734807251.jpg',
  'oumnia',
  'Lorem ipsum dolor sit amet, consectetur adipisicing elit.Officiis...',
  'nameOfMusic',
  'rabat',
  '10.5K',
  '155',
  ],
  ['./video/video4.mp4',
  'https://images.pexels.com/photos/7893725/pexels-photo-7893725.jpeg?cs=srgb&dl=pexels-kampus-7893725.jpg&fm=jpg',
  'Safae',
  'Lorem ipsum dolor sit amet, consectetur adipisicing elit.Officiis...',
  'nameOfMusic',
  'Nador',
  '705.9K',
  '750',
  ],


]
const reels_container = document.querySelector(".reels");

if(reels_container)
for(let i=0;i<reels_data.length;i++){
    console.log(i)
    const reel_div = document.createElement('div');
    reel_div.classList.add("reel");
    if(i==0){
      reel_div.setAttribute("id",'video_play');
      reel_div.innerHTML = `<div class="video">
    <video src="${reels_data[i][0]}" autoplay loop>
    </video>
    <div class="content">
        <div class="sound">
            <img class="volume-up" src="./images/volume-up.png" >
            <img class="volume-mute" src="./images/volume-mute.png" >
        </div>
        <div class="play">
            <img src="./images/play-button-arrowhead.png" >
        </div>
        <div class="info">
            <div class="profile">
                <h4><a href="#">
                        <img src="${reels_data[i][1]}" >
                        ${reels_data[i][2]}
                    </a></h4>
                <span>.</span>
                <button class="follow_text">Follow</button>
            </div>
            <div class="desc">
                <p>${reels_data[i][3]} <span class="show_text">more</span>
                </p>
                <div class="more">
                    <div class="music">
                        <img src="./images/music.png" >
                        <span>${reels_data[i][4]}</span>
                    </div>
                    <div class="position">
                        <img src="./images/map.png" >
                        <span>${reels_data[i][5]}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="likes">
    <div class="like">
        <img class="not_loved" src="./images/love.png" >
        <img class="loved" src="./images/heart.png" >
        <p> ${reels_data[i][6]}</p>
    </div>
    <div class="messsage">
        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#message_modal">
            <img src="./images/bubble-chat.png" >
            <p class="m-0">${reels_data[i][7]}</p>
        </button>
    </div>
    <div class="send">
        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#send_message_modal">
            <img src="./images/send.png" >
        </button>
    </div>
    <div class="save not_saved">
        <img class="hide saved" src="./images/save_black.png" >
        <img class="not_saved" src="./images/save-instagram.png" >
    </div>
    <div class="more">
        <img src="./images/show_more.png" >
    </div>
    <div class="profile">
        <img src="${reels_data[i][1]}" >
    </div>
</div>`;
    }else{
        reel_div.innerHTML = `<div class="video">
      <video src="${reels_data[i][0]}" loop>
      </video>
      <div class="content">
          <div class="sound">
              <img class="volume-up" src="./images/volume-up.png" >
              <img class="volume-mute" src="./images/volume-mute.png" >
          </div>
          <div class="play">
              <img src="./images/play-button-arrowhead.png" >
          </div>
          <div class="info">
              <div class="profile">
                  <h4><a href="#">
                          <img src="${reels_data[i][1]}" >
                          ${reels_data[i][2]}
                      </a></h4>
                  <span>.</span>
                  <button class="follow_text">Follow</button>
              </div>
              <div class="desc">
                  <p>${reels_data[i][3]} <span class="show_text">more</span>
                  </p>
                  <div class="more">
                      <div class="music">
                          <img src="./images/music.png" >
                          <span>${reels_data[i][4]}</span>
                      </div>
                      <div class="position">
                          <img src="./images/map.png" >
                          <span>${reels_data[i][5]}</span>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="likes">
      <div class="like">
          <img class="not_loved" src="./images/love.png" >
          <img class="loved" src="./images/heart.png" >
          <p> ${reels_data[i][6]}</p>
      </div>
      <div class="messsage">
          <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#message_modal">
              <img src="./images/bubble-chat.png" >
              <p class="m-0">${reels_data[i][7]}</p>
          </button>
      </div>
      <div class="send">
          <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#send_message_modal">
              <img src="./images/send.png" >
          </button>
      </div>
      <div class="save not_saved">
          <img class="hide saved" src="./images/save_black.png" >
          <img class="not_saved" src="./images/save-instagram.png" >
      </div>
      <div class="more">
          <img src="./images/show_more.png" >
      </div>
      <div class="profile">
          <img src="${reels_data[i][1]}" >
      </div>
  </div>`;
    }
    
    reels_container.appendChild(reel_div);
}

/**************************video**************************/
//play video onscroll
const videos = document.querySelectorAll("video");
const reels = document.querySelector(".reels");
window.addEventListener("scroll", function() {
  const scrollPosition = window.scrollY + window.innerHeight;
  videos.forEach((video,index)=> {
    reels.children[index].removeAttribute("id");
    const videoPosition = video.getBoundingClientRect().top + video.offsetHeight / 2;
    if (scrollPosition > videoPosition && videoPosition>0 && videoPosition<= video.offsetHeight) {
      video.play();
      reels.children[index].setAttribute("id", "video_play");
    } else {
      video.pause();
    }
  });
});

//play && pause && mute video
let video_container = document.querySelectorAll(".video");
video_container.forEach( function(item){
  let video = item.children[0];
  //if the user click on the video pause it 
  let button_play = item.children[1].children[1];
  item.addEventListener("click", function(){
    if(button_play.classList.contains("opac_1")){
      video.play();
    }else{
      video.pause();
    }
    button_play.classList.toggle("opac_1");
  });
  //if the user click the mute btn make the video mute
  let mute_btn = item.children[1].children[0];
  let volum_up = mute_btn.children[0];
  let volum_mute = mute_btn.children[1];
  mute_btn.addEventListener("click", function(e){
    e.stopPropagation();
    if(!video.muted){
      video.muted = true;
      volum_up.classList.add("hide_img");
      volum_mute.classList.add("display");
    }else{
      video.muted=false;
      volum_up.classList.remove("hide_img");
      volum_mute.classList.remove("display");
    }
  });
  //change the text follow ==> following and the opposite
  let follow = item.children[1].children[2].children[0].children[2];
  follow.addEventListener("click", function(e){
    e.stopPropagation();
    follow.classList.toggle("following");
    if(follow.classList.contains("following")){
      follow.innerHTML= "Following";
    }else{
      follow.innerHTML= "Follow";
    }
    
  });
});

/**************************search+notif-section **************************/
//search section notif
let search = document.getElementById("search");
let search_icon = document.getElementById("search_icon");
search_icon.addEventListener("click", function(){
  search.classList.toggle("show");
});

let notification = document.getElementById("notification");
let notification_icon = document.querySelectorAll(".notification_icon");
notification_icon.forEach( (notif)=>{
  notif.addEventListener('click',function(){
    notification.classList.toggle("show");
  })
} 
)


/**************************icons+text change **************************/
//change the icon when the user click on it

//love btn
let love_icons = document.querySelectorAll(".like");
love_icons.forEach(function(icon){
  icon.addEventListener("click",function(){
      let not_loved = icon.children[0];
      let loved = icon.children[1];
      icon.classList.toggle("love");
      not_loved.classList.toggle("hide_img");
      loved.classList.toggle("display");
  })
});

//save btn
let save_icon = document.querySelectorAll(".save");
save_icon.forEach(function(save){
  save.addEventListener("click",function(){
    let not_save = save.children[1];
    let saved = save.children[0];
    not_save.classList.toggle("hide");
    saved.classList.toggle("hide");

})
})

//notification follow 
let not_follow = document.querySelectorAll("#notification .notif.follow_notif")
not_follow.forEach(item=>{
  let follow = item.children[0].children[1].children[0];
  follow.addEventListener("click", function(e){
    e.stopPropagation();
    follow.classList.toggle("following");
    if(follow.classList.contains("following")){
      follow.innerHTML= "Following";
      follow.style.backgroundColor = 'rgb(142, 142, 142)';
      follow.style.color = "black";
    }else{
      follow.innerHTML= "Follow";
      follow.style.backgroundColor = 'rgb(0, 149, 246)';
      follow.style.color = "white";
    }
    
  });
})

/**************************comments **************************/

//comments
let replay_com = document.querySelector(".comments .responses");
let show_replay = document.querySelector(".comments .see_comment");
let hide_com = document.querySelector(".comments .see_comment .hide_com");
let show_com = document.querySelector(".comments .see_comment .show_c");
if(replay_com){
  replay_com.classList.add("hide");
  hide_com.classList.add("hide");
  show_replay.addEventListener("click",function(){
    replay_com.classList.toggle("hide");
    show_com.classList.toggle("hide");
    hide_com.classList.toggle("hide");
  });
}


/*************emojie*************** */
$(document).ready(function() {
	$("#emoji").emojioneArea({
  	pickerPosition: "top",
    tonesStyle: "radio"
  });
});

$(document).ready(function() {
	$("#emoji_create").emojioneArea({
  	pickerPosition: "bottom",
    tonesStyle: "radio"
  });
});

$(document).ready(function() {
	$("#emoji_comment").emojioneArea({
  	pickerPosition: "bottom",
    tonesStyle: "radio"
  });
});

/**********Upload post*************/
const form = document.getElementById('upload-form');
const img_container = document.querySelector("#image-container");

form.addEventListener('change', handleSubmit);

let img_url;
//add the image post
function handleSubmit(event) {
    event.preventDefault();
    if(img_container.classList.contains('hide_img')){
        img_container.classList.remove('hide_img');
        const imageFile = document.getElementById('image-upload').files[0];
        const imageURL = URL.createObjectURL(imageFile);
        const image = document.createElement('img');
        image.src = imageURL;
        img_url = imageURL;
        const imageContainer = document.getElementById('image-container');
        imageContainer.appendChild(image);
        const next_btn_post = document.querySelector(".next_btn_post");
        const title_create = document.querySelector(".title_create");
        next_btn_post.innerHTML = 'Next';
        title_create.innerHTML = 'Crop';
    }
}

/////button submit
const next_btn_post = document.querySelector(".next_btn_post");
next_btn_post.addEventListener('click',handleNext);
//add a description + click btn to share post
function handleNext(){
    if(image_description.classList.contains('hide_img')){
        const next_btn_post = document.querySelector(".next_btn_post");
        const title_create = document.querySelector(".title_create");
        const image_description = document.querySelector("#image_description");
        const modal_dialog = document.querySelector("#create_modal .modal-dialog");
        modal_dialog.classList.add("modal_share");
        image_description.classList.remove('hide_img')
        const image = document.createElement('img');
        image.src = img_url;
        const img_p = document.querySelector('.img_p');
        img_p.appendChild(image);
        next_btn_post.classList.add("share_btn_post");
        next_btn_post.classList.remove("next_btn_post");
        next_btn_post.innerHTML = 'Share';
        title_create.innerHTML = 'Create new post';
        completed();
    }
}

//post published
function completed(){
  const share_btn_post = document.querySelector(".share_btn_post");
  const post_published = document.querySelector('.post_published');
  const modal_dialog = document.querySelector("#create_modal .modal-dialog");
  share_btn_post.addEventListener("click", function(){
    modal_dialog.classList.add("modal_complete");
      post_published.classList.remove("hide_img");
      share_btn_post.innerHTML = ""
  })
}


