var upload= document.getElementById('upload');
var form = document.getElementById('form');
var close = document.getElementById('close');
var hide = true

upload.addEventListener('click', e=>{
    if (hide== true) {
        form.className = "absolute top-32 right-0 left-1 ml-2 text-center w-96 bg-white border border-black rounded-md py-2 show"
        hide=false
    }
    
})

close.addEventListener('click', e=>{
    if (hide== false) {
        form.className = "absolute top-32 right-0 left-1 ml-2 text-center w-96 bg-white border border-black rounded-md py-2 hide"
        hide=true
    }
    
})