const casa = document.querySelector('#selectImovel')[0];
const apartamento = document.querySelector('#selectImovel')[1];

const option = document.querySelector('#selectImovel').addEventListener('click', (e)=>{

    if(e.target.value == 'casa'){
        casa = new Casa;
    } else{
        apartamento = new Apartamento();
    }
})


