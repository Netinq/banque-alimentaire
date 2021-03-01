function display_menu()
{
    if (document.getElementById('m_nav').classList.contains('hide')) {
        document.getElementById("m_nav").classList.remove('hide');
    } else {
        document.getElementById("m_nav").classList.add("hide");
    }
}

document.addEventListener("click", (event) => {
    if (!event.target.classList.contains("nav-mobile") && !event.target.classList.contains("burger"))
    {
        document.getElementById("m_nav").classList.add("hide");
    }
})
