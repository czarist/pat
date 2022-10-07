document.addEventListener("DOMContentLoaded", () => {

    const url = document.getElementById('baseURL').value;
    const page = Math.floor(Math.random() * 1000);
    const random = Math.floor(Math.random() * 20);
    const myRequest = new Request(url + "redapi/response/" + page);
    const randomDesk = document.getElementById("random-btn-dsk");
    const randomMob = document.getElementById("random-btn-mob");
    const footer = document.getElementById('footer');

    fetch(myRequest)
        .then((response) => response.json())
        .then((data) => {
            const randomVideo = data.videos[random].video;
            var theTitle = randomVideo.title;
            theTitle = theTitle.replace(/\s|[0-9_]|\W|[#$%^&*()]/g, '-');

            randomDesk.href = `${url}video/${randomVideo.video_id}/${theTitle}`;
            randomMob.href = `${url}video/${randomVideo.video_id}/${theTitle}`;
        })
        .catch(console.error);


    //kkkkkkkkkkkkkk

    if (window.youLittleShitDisableAdBlock === undefined) {
        footer.innerHTML += `

        <div class="fuckAdBlock">
            <div class="filter"></div>
            <div class="position-relative">
                <img class="w-100" src="${url}library/img/rick-morty.gif" alt="go fuck yourself" style="border-radius: 10px;">
                <div class="filter"></div>
                <h2 style="top: 0;" class="text-white position-absolute mt-5 ml-3">Please, disable AdBlock</h2>
                <h4 style="top: 40px;" class="text-white position-absolute mt-5 ml-3">Or go fuck yourself</h4>
            </div>
        </div>
        `;

        footer.style.overflow = "hidden";
    }


    // open menu
    document.getElementById("open-menu").onclick = function openmenu() {
        document.getElementById("close-menu").classList.remove("d-none");
        document.getElementById("close-menu").classList.add("d-flex");
        document.getElementById("open-menu").classList.add("d-none");
        document.getElementById("open-menu").classList.remove("d-flex");
        document.getElementById("menu-mobile").classList.remove("d-none");
        document.getElementById("menu-mobile").classList.add("d-flex");
    };

    // close menu
    document.getElementById("close-menu").onclick = function closemenu() {
        document.getElementById("open-menu").classList.remove("d-none");
        document.getElementById("open-menu").classList.add("d-flex");
        document.getElementById("close-menu").classList.add("d-none");
        document.getElementById("close-menu").classList.remove("d-flex");
        document.getElementById("menu-mobile").classList.add("d-none");
        document.getElementById("menu-mobile").classList.remove("d-flex");
    };
});

jQuery(document).ready(function($) {


});