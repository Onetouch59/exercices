document.getElementById('submit').addEventListener('click',function(){
let password = document.getElementById('input-password').value;
let confirmation =document.getElementById('input-confirmation').value;
console.log(password);
console.log(confirmation);
if(password != confirmation){
        document.getElementById('error').innerHTML = 'les passwords ne correspondent pas';
        document.getElementById('error').style.color = 'red';
        event.preventDefault();
}
 else {
        
}
})