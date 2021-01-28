function switch_contrast()
{
    if (document.getElementsByClassName('high-contrast').length == 0) document.body.classList.add("high-contrast");
    else document.body.classList.remove("high-contrast");
}
