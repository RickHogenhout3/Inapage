const searchbar = document.querySelector('.users .search input'),
    searchbtn = document.querySelector('.users .search button');

searchbtn.onclick = () => {
    searchbar.classList.toggle('active');
    searchbar.focus();
    searchbtn.classList.toggle('active');
}