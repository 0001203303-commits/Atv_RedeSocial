/******************Add the story ******************/
const image_profile = [
    ['https://img.freepik.com/fotos-premium/retrato-de-mulher-natural-lindas-pessoas-bonitas-casuais_209729-1491.jpg','zineb'],
    ['https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTO0-FvOl-9UjP-RDjjyE47sJ9frq-L6GIjNA&s','ikram'],
    ['https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQKAJo78HOyN9TU1X5J6zGyDIHIn8iXI9TBzA&s','amina'],
    ['https://i.pinimg.com/736x/bd/7d/26/bd7d26904692d8b56b363ce85e4ec3d3.jpg','amal'],
    ['https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHRRW1HHrfrIoqzFcFrUsxQ3WQYugYDCFpEA&s','amine'],
    ['https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcScl7lKGRsp-NEHx5l29DllGAF0h4zyb6y6hQ&s','loy'],
    ['https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSlm6yCQ0cq8XrrDapzsItnleQyrGUfkh_EJg&s','loy'],
    ['https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShl5Wld78vIIE8VmLd-FbB-z5zwWdiZMbxkA&s','loy'],
    ['https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQn44CZNwSxUYIFXvOy8aq9rtWR1-3hxwHY2w&s','loy'],
    ['https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmnYEsuhxuqamZBPe7t_F55EpD0N_TBFw_yQ&s','loy'],
    ['https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKiX56ktyofHvPFkShBy9Rgg73COL5oJNJsQ&s','loy'],
    ['https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHjXeIia28a7nhbm8Kxui5ic0-jWpj2KueJg&s','loy'],
    ['https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQN9w_WzmgPodNLCEbkCQUGrWmO77fz2sbdxA&s','loy'],
    ['https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWQa6XvQbpg1cmuv78Vqc653kZrujfYTr0Ew&s','loy'],
    ['https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQB_cZwvehvIPGtjDWMPqNowhRg9kY6IHPXMw&s','loy'],
]
const story_container = document.querySelector('.owl-carousel.items');
if(story_container){
    for (var i = 0; i < image_profile.length; i++) {
        const parentDiv = document.createElement('div');
        parentDiv.classList.add("item_s");
        parentDiv.innerHTML = `
            <img src="${image_profile[i][0]}">
            <p>${image_profile[i][1]}</p>
            `;
        story_container.appendChild(parentDiv);
    }
}


$(document).ready(function(){
    $(".owl-carousel").owlCarousel();
});

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:5,
    responsiveClass:true,
    responsive:{
        0:{
            items:5,
            nav:true
        },
        500:{
            items:7,
            nav:false
        }
    }
})