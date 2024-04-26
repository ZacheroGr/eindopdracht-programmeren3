window.addEventListener('load', init);

let TheFinals;
let buttons;
let close;
let detailsSection;
let items = [];
let url = 'FinalistDetails.php';

function init() {
    TheFinals = document.getElementById('TheFinals');
    TheFinals.addEventListener('click', detailsButtonHandler);
    buttons = document.getElementsByTagName('button');
    close = document.getElementById('close');
    close.addEventListener('click', closeDetails);
    detailsSection = document.getElementById('detailsSection');
    window.addEventListener('scroll', windowScrollHandler);
    getFinalistData();
}

function windowScrollHandler(event) {
    // Voeg hier de gewenste acties toe die moeten worden uitgevoerd wanneer er wordt gescrolld
    console.log('Het venster wordt gescrolld!');
}

function getFinalistData() {
    fetch(url)
        .then(response => {
            if (!response.ok) {
                throw new Error("Problem with finalist overview");
            }
            return response.json();
        })
        .then(data => {
            console.log("Name of TheFinals:");
            TheFinals = document.getElementById('TheFinals');
            data.forEach(finalist => {
                console.log(finalist.name);
                createTheFinals(finalist);
            });
        })
        .catch(errorHandler);
}

function createTheFinals(finalist) {
    const divElement = document.createElement("div");
    divElement.classList.add("finalist");
    divElement.id = finalist.id;
    divElement.dataset = finalist.id;

    const h2Element = document.createElement("h2");
    h2Element.innerText = finalist.name;

    const imgElement = document.createElement("img");
    imgElement.src = `./img/${finalist.image}`;

    const addButton = document.createElement("button");
    addButton.classList.add("add");
    addButton.textContent = "Add to Favorites";

    const removeButton = document.createElement("button");
    removeButton.classList.add("remove");
    removeButton.textContent = "Remove as favorite";

    const detailsButton = document.createElement("button");
    detailsButton.classList.add("details");
    detailsButton.textContent = "Details";

    divElement.append(h2Element);
    divElement.append(imgElement);
    divElement.append(addButton);
    divElement.append(removeButton);
    divElement.append(detailsButton);
    TheFinals.append(divElement);
    checkStorage();
}

function detailsButtonHandler(e) {
    e.preventDefault();
    let clickedButton = e.target;
    if (e.target.className === "details") {
        let finalist = clickedButton.parentElement;
        let finalistId = finalist.id;
        let text = finalist.getElementsByTagName("h2")[0].innerHTML;
        detailsSection = document.getElementById('detailsSection');

        detailsSection.style.display = 'flex';
        let name = document.querySelector('#detailsSection h2');
        name.innerHTML = text;
        urlDetails = 'FinalistDetails.php?id=' + finalistId;
        window.scrollTo(0, 0);
        getFinalistDetails();
    }
    if (e.target.className === "add") {
        let finalist = e.target.parentNode;
        let finalistId = finalist.id;
        console.log(finalistId);
        items.push(finalistId);
        localStorage.setItem("all-favorites", JSON.stringify(items));
        changeBackground(finalistId);
    }
    if (e.target.className === "remove") {
        let finalist = e.target.parentNode;
        let finalistId = finalist.id;
        items = JSON.parse(localStorage.getItem("all-favorites"));
        let index = items.indexOf(finalistId);
        items.splice(index, 1);
        localStorage.setItem("all-favorites", JSON.stringify(items));
        removeBackground(finalistId);
    }
}

function getFinalistDetails() {
    console.log(urlDetails);
    fetch(urlDetails)
        .then(response => {
            if (!response.ok) {
                throw new Error("Problem with finalist details");
            }
            return response.json();
        })
        .then(data => {
            fillDetailsSection(data);
        })
        .catch(errorHandler);
}

function fillDetailsSection(data) {
    detailsSection = document.getElementById('detailsSection');
    let overview = detailsSection.getElementsByTagName('p')[0];
    overview.innerText = data.overview;
    let type = detailsSection.getElementsByTagName('p')[1];
    type.innerText = data.type;
}

function checkStorage() {
    let stored = localStorage.getItem("all-favorites");
    if (stored) {
        items = JSON.parse(stored);
    }
    for (let item of items) {
        changeBackground(item);
    }
}

function changeBackground(item) {
    let allTheFinals = document.querySelectorAll(".finalist");
    for (let j = 0; j < allTheFinals.length; j++) {
        if (item === allTheFinals[j].dataset.id) {
            allTheFinals[j].classList.add("favorite");
        }
    }
}

function removeBackground(item) {
    let finalistItem = document.getElementById(item);
    finalistItem.classList.remove("favorite");
}

function closeDetails() {
    detailsSection.style.display = 'none';
}

function errorHandler(error) {
    console.log(error.message);
}