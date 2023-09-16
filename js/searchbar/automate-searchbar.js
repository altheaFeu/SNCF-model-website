const searchWrapper = document.querySelector(".search-input");
const inputBox = searchWrapper.querySelector("input");
const suggBox = searchWrapper.querySelector(".autocom-box");
const startResearch = document.querySelector(".connexion");

//onkeyup : évènement a lieu lorsque l'utilisateur tape un mot/relache une touche du clavier
inputBox.onkeyup = (e)=>{
    let userData = e.target.value;
    let emptyArray = [];
    if(userData){
        emptyArray = suggestions.filter((data) => {
            // Filtre la liste selon l'entrée utilisateur et retourne seulement celles qui commencent par l'entrée utilisateur
            return data.toLocaleLowerCase().startsWith(userData.toLocaleLowerCase());         
        });
        emptyArray = emptyArray.map((data)=>{
            // Retourne une liste des éléments qui commence par la chaîne de caractère
            return data = '<li>'+data+'</li>';
        });
        searchWrapper.classList.add("active");
        showSuggestions(emptyArray);
        let allList = suggBox.querySelectorAll("li");
        
        // Possibilité de cliquer sur la liste des suggestions
        for (let i = 0; i < allList.length; i++) {
            allList[i].setAttribute("onclick", "select(this)");
        }
    }else{
        //Si rien, retire la propriété active
        searchWrapper.classList.remove("active");
    }
}

// Permet de sélectionner un élément de la liste des suggestions
function select(element){
    let selectUserData = element.textContent;
    inputBox.value = selectUserData;
    searchWrapper.classList.remove("active");
}

// Montre toutes les possibilités
function showSuggestions(list){
    let listData;
    if(!list.length){
        userValue = inputBox.value;
        listData = '<li>' + userValue + '</li>';
    }else{
        listData = list.join('');        
    }
    suggBox.innerHTML = listData;
}