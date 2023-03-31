
///////////// hide and close cart ////////////
function show(){
    document.getElementById('cart').style.display = "block";
    document.getElementById('cart').style.position = "fixed";
}

function hide(){
    document.getElementById('cart').style.display = "none";
}
// localStorage.clear();
///////////// add to bag ///////////
function loadCart(){
    let shoesInfo = localStorage.getItem('shoesInfo') ? JSON.parse(localStorage.getItem('shoesInfo')) : [];
    shoesInfo.forEach(function(shoe,index){
        addCart(shoe.name, shoe.price, shoe.size, shoe.id, shoe.image, shoe.amount);
    })
    cartTotal();
    var inputValue = document.querySelectorAll('tbody tr td input');
    inputValue.forEach((item, index) => {
        item.addEventListener('click',function(event){
        shoesInfo[index].amount = item.value;
        //console.log(shoesInfo[index]);
        localStorage.setItem('shoesInfo', JSON.stringify(shoesInfo));
        cartTotal();
        })
    })
    //console.log("load")
}

function addCart(nameShoe, priceShoe, chooseSize, idShoe, imageShoe, amount){
    var addtr = document.createElement("tr");
    addtr.classList.add('border-b-2');
    var cartItem = document.querySelectorAll('tbody tr');  
    var input = document.querySelectorAll('tbody tr td input'); 
    var size = document.querySelectorAll('tbody tr td span');
    var name = document.querySelectorAll('tbody tr td div');
    //console.log("name1 = " + nameShoe);
    for (var i = 0; i < cartItem.length; i++){                
        if(size[i].innerHTML == chooseSize && name[i].innerHTML == nameShoe){
            //console.log(name[i].innerHTML);
            var inputValue = input[i];
            inputValue.value++;
            return;
        }
    }
    var trContent = '<td class="flex align-center text-center py-4"><img class="h-16 w-16" src="'+imageShoe+'" alt=""><div>'+nameShoe+'</div></td><td class="text-center"><p class="price">'+priceShoe+'</p></td><td class="text-center"><span>'+chooseSize+'</span></td><td class="text-center"><input class="amount w-16" type="number" value="'+amount+'" min="0"></td><td class="text-center"><a onclick="deleteShoe('+chooseSize+','+idShoe+')">Delete</a></td>'
    addtr.innerHTML = trContent;
    var carTable = document.querySelector("tbody");
    carTable.append(addtr);
}

function cartTotal(){
    var totalPrice = 0;
    var cartItem = document.querySelectorAll('tbody tr');
    
    for (var i = 0; i < cartItem.length; i++){
        
        var inputsValue = document.querySelectorAll('tbody tr td input');
        var inputValue = inputsValue[i].value;
        var productsPrice = document.querySelectorAll('.price');
        var productPrice = productsPrice[i].innerHTML
        var totalPrice = totalPrice + inputValue*productPrice;
        //console.log(inputValue, productPrice, totalPrice);
    }
    var sumCartItem = document.querySelector('.sum span');
    sumCartItem.innerHTML = totalPrice;
}

function deleteShoe(size1, id1){
    let shoesInfo = localStorage.getItem('shoesInfo') ? JSON.parse(localStorage.getItem('shoesInfo')) : [];
        shoesInfo = shoesInfo.filter(shoe => isnotShoe(shoe.size, shoe.id, size1, id1));
        //console.log(shoesInfo); 
        localStorage.setItem('shoesInfo', JSON.stringify(shoesInfo));
        var carTable = document.querySelectorAll("tbody tr");
    //console.log(carTable)
    carTable.forEach(item => item.remove())   
    loadCart();
} 

function isnotShoe(size, id, size1, id1){
    if (size != size1 || id != id1){
        return true;
    }
    return false;
} 

