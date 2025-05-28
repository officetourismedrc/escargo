// trier article select and option strategy

const selectTrieArticles = document.querySelectorAll('.select-actulities-class');

function articlesTrierRemoveActive(y){
    y.forEach(function(currentValue, index, array) {
        // Code to execute for each element

        currentValue.classList.remove('active');
      });
}

function activateArticleTrie(x,y){
    console.log(y.parentElement);
    if(x.value === 'year'){
        
        articlesTrierRemoveActive(y);
        y[0].classList.add('active');
    }
    else if(x.value === 'month'){

        articlesTrierRemoveActive(y);
        y[1].classList.add('active');
    }
    else if(x.value === 'day'){

        articlesTrierRemoveActive(y);
        y[2].classList.add('active');
    }
}

selectTrieArticles.forEach(function(currentValue, index, array){

    currentValue.addEventListener('change', function(event) {

        console.log(`Selected value: ${event.target.value}`);
        let obj = event.target.parentElement.querySelectorAll('.articles-trier-option-container div');
       
activateArticleTrie(event.target, obj);

      });

});





