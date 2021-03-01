const first = document.getElementById("box-first");
const second = document.getElementById("box-second");

first.addEventListener("mouseenter", (e) => {
    first.classList.remove("box-grey");
    second.classList.add("box-grey");
});

first.addEventListener("mouseleave", (e) => {
    second.classList.remove("box-grey");
});

second.addEventListener("mouseenter", (e) => {
    second.classList.remove("box-grey");
    first.classList.add("box-grey");
});

second.addEventListener("mouseleave", (e) => {
    first.classList.remove("box-grey");
});
