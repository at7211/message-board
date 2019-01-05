document.addEventListener('DOMContentLoaded', () => {
    function test(){
        var text =document.querySelectorAll('.create');
        for(i=0; i< text.length; i++){
            if(text[i].innerText === ''){
            text[i].outerHTML = '';
            }else{
            return true;
        }
        }
    }
    test()
})