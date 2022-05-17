





//DETAIL
listDeckDetail=document.getElementsByClassName("detailDivAdd")
for (const divDeck of listDeckDetail) {
    divDeck.addEventListener("click",handleDetail)
}
function handleDetail(e){
    console.log(e.currentTarget)
    divSelect=e.currentTarget
    console.log(divSelect)
    divSelect.classList.toggle("open")
}
//COLLECTION FORM
inputCollect=document.getElementsByClassName('checkCollect')
for (const checkbox of inputCollect) {
    checkbox.addEventListener("click",checkBoxMoove)
}
formCollect=document.getElementsByClassName('contenuFormCollect')

function checkBoxMoove(e){
    idCheck=e.currentTarget
    console.log(idCheck.value)
    return idCheck
}




//LISTE DECK 
btnList=document.querySelectorAll(".nameDeckList")
galleryDeck=document.querySelector(".galleryDeckImg")
listDeckManus=document.querySelectorAll(".listManuscrit")
for (const list of listDeckManus) {
    list.addEventListener("mouseover",scaleHover)
}
function scaleHover(evt)
{
    console.log(evt)
}
for (const btn of btnList) {
    btn.addEventListener("mouseover",changeHover)
}
function changeHover(event)
{
    cibleHover=event.currentTarget.id
    galleryDeck.src= "http://localhost/copieCommander/Commander/ProjetCommand/public/assets/img/"+cibleHover
    console.log(event.currentTarget)
}

//MENU BURGER
const arrowBtnH=  document.querySelectorAll('h1')
for (const arrowH of arrowBtnH) {
    arrowH.addEventListener("click",handleClick)
}
       
function handleClick(event){
    console.log(event.currentTarget)
    const hSelect=event.currentTarget
    hSelect.classList.toggle("open")
    hSelect.classList.toggle("bgGrey")
}
//CREATION DE DECK IMG
const selectOptn= document.getElementById("nameCommandant")
selectOptn.addEventListener("click",displayImg)
const selectOptn2= document.getElementById("nameCommandant2")
selectOptn2.addEventListener("click",displayImg2)
background=document.getElementById("commandantBack")
background.addEventListener("click",backgroundImg)

function displayImg(event){
    console.log(event.currentTarget.value)
    const galleryAdd=document.getElementsByClassName("addDeckImg")
    endSource=event.currentTarget.value+".jpg"
    galleryAdd[0].src="http://localhost/Commander/public/assets/img/commandants/"+endSource
}
function displayImg2(event){
    const galleryAdd=document.getElementsByClassName("addDeckImg2")
    endSource=event.currentTarget.value+".jpg"
    if(endSource !=".jpg"){
    galleryAdd[0].src="http://localhost/Commander/public/assets/img/commandants/"+endSource}
}
function backgroundImg(event)
{
    console.log(event.currentTarget)
    const galleryBack=document.getElementsByClassName("galleryBack")
    endSource=event.currentTarget.value+".jpg"
    galleryBack[0].src="http://localhost/Commander/public/assets/img/"+endSource
}
const deleteBtn=document.getElementsByClassName("btn btn-danger")
const collectBtn=document.getElementsByClassName("pretty2")
for (const btn of deleteBtn) {
    btn.addEventListener("submit",preventDefault)
}
function preventDefault(event)
{
    cible=event.currentTarget
    cible.preventDefault()
}

